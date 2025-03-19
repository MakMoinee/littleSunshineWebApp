<?php

namespace App\Http\Controllers;

use App\Models\Submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] == "student") {
                $assignments = json_decode(DB::table('vwstudentassignments')->where('userID', '=', $user['userID'])->orderBy('created_at', 'desc')->get(), true);

                $allSubmissions = json_decode(DB::table("submissions")->where('userID', '=', $user['userID'])->get(), true);
                $count = 0;
                foreach ($assignments as $a) {
                    foreach ($allSubmissions as $as) {
                        if ($as['assignmentID'] == $a['assignmentID']) {
                            unset($assignments[$count]);
                        }
                    }
                    $count++;
                }

                return view('student.saas', ['assignments' => $assignments]);
            } else {
                return redirect("/logout");
            }
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

            if ($user['userType'] != "student") {
                return redirect("/logout");
            }

            if ($request->btnSubmission) {
                $count = DB::table('submissions')->where('userID', '=', $user['userID'])->where('assignmentID', '=', $request->assID)->count();
                if ($count > 0) {
                    session()->put("errorAnswerExist", true);
                } else {
                    $file = $request->file('answerFile');
                    $fileName = "";
                    if ($file) {
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/submissions';
                        $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        chmod($destinationPath, 0755);

                        if ($fileName) {
                            $newSubmission = new Submissions();
                            $newSubmission->userID = $user['userID'];
                            $newSubmission->assignmentID = $request->assID;
                            $newSubmission->document = '/data/submissions/' . $fileName;
                            $isSave =  $newSubmission->save();
                            if ($isSave) {
                                session()->put("successSubmit", true);
                            } else {
                                session()->put("errorSubmit", true);
                            }
                        }
                    }
                }
            }
            return redirect("/student_saas");
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
    public function destroy(string $id)
    {
        //
    }
}
