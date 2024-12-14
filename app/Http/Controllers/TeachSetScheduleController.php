<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Models\Students;
use Illuminate\Http\Request;

class TeachSetScheduleController extends Controller
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

            return view('teacher.ss', ['students' => $allStudents]);
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

            if ($request->btnSetSchedule) {
                $newSchedule = new Schedules();
                $newSchedule->teacherID = $user['userID'];
                $newSchedule->studentID = $request->studentID;
                $newSchedule->classType = $request->classType;
                $newSchedule->scheduleDate = $request->date;
                $newSchedule->scheduleTime =  date('Y-m-d H:i:s', strtotime($request->date . " " . $request->time));
                $newSchedule->meeting = $request->meetingCode;
                $newSchedule->sessionID = $request->sessionNumber;
                $isSave = $newSchedule->save();
                if ($isSave) {
                    session()->put("successSetSched", true);
                } else {
                    session()->put("errorSetSched", true);
                }
            }

            return redirect("/teacher_ss");
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
