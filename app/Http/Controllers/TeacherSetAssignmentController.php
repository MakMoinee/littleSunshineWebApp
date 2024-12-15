<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use App\Models\Students;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TeacherSetAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] != "teacher") {
                return redirect("/logout");
            }

            $allStudents = json_decode(Students::all(), true);
            $allAss = DB::table('assignments')
                ->where('teacherID', '=', $user['userID'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return view('teacher.saas', ['students' => $allStudents, 'assignments' => $allAss]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] != "teacher") {
                return redirect("/logout");
            }

            if ($request->btnSetAss) {
                // dd($request);
                $newAss = new Assignments();
                $newAss->title = $request->title;
                $newAss->sessionID = $request->sessionNumber;
                $newAss->studentID = $request->studentName;
                $newAss->teacherID = $user['userID'];
                $newAss->dueFrom = date('Y-m-d H:i:s', strtotime($request->date . " " . $request->startTime));
                $newAss->dueTo = date('Y-m-d H:i:s', strtotime($request->date . " " . $request->endTime));
                $newAss->dueDate = $request->date;
                $newAss->submissionType = $request->submissionType;
                $isSave = $newAss->save();
                if ($isSave) {
                    session()->put("successSaveAss", true);
                } else {
                    session()->put("errorSaveAss", true);
                }
            } else if ($request->btnSetAssWithFile) {
                // dd($request);
                $files = $request->file('file');
                $fileName = "";
                if ($files) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/assignments';
                    $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                    $isFile = $files->move($destinationPath,  $fileName);
                    chmod($destinationPath, 0755);
                    if ($fileName != "") {
                        $fileName = "/data/assignments/" . $fileName;

                        $newAss = new Assignments();
                        $newAss->title = $request->title;
                        $newAss->sessionID = $request->sessionNumber;
                        $newAss->studentID = $request->studentName;
                        $newAss->teacherID = $user['userID'];
                        $newAss->dueFrom = date('Y-m-d H:i:s', strtotime($request->date . " " . $request->startTime));
                        $newAss->dueTo = date('Y-m-d H:i:s', strtotime($request->date . " " . $request->endTime));
                        $newAss->dueDate = $request->date;
                        $newAss->submissionType = "online";
                        $newAss->filePath = $fileName;
                        $isSave = $newAss->save();
                        if ($isSave) {
                            session()->put("successSaveAss", true);
                        } else {
                            session()->put("errorSaveAss", true);
                        }
                    } else {

                        session()->put("errorSaveAss", true);
                    }
                } else {
                    session()->put("errorSaveAss", true);
                }
            }

            return redirect("/teacher_saas");
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] != "teacher") {
                return redirect("/logout");
            }

            if ($request->btnDeleteAss) {
                if ($request->filePath) {
                    try {
                        $originalDirectoryPath = $request->filePath;
                        if ($originalDirectoryPath) {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . $originalDirectoryPath;
                            File::delete($destinationPath);
                        }
                    } catch (Exception $e1) {
                    }
                }
                $deleteCount = DB::table('assignments')->where('assignmentID', '=', $id)->delete();
                if ($deleteCount > 0) {

                    session()->put("successDeleteAss", true);
                } else {
                    session()->put("errorDeleteAss", true);
                }
            }

            return redirect("/teacher_saas");
        }
        return redirect("/");
    }
}
