<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use App\Models\Students;
use Illuminate\Http\Request;

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
            return view('teacher.saas', ['students' => $allStudents]);
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
    public function destroy(string $id)
    {
        //
    }
}
