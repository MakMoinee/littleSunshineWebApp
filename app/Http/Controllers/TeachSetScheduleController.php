<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Models\Students;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachSetScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] != "teacher") {
                return redirect("/logout");
            }


            $allStudents = json_decode(Students::all(), true);

            $sched = (new DateTime(now()))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
            if ($request->query('sched')) {
                $sched = (new DateTime($request->query('sched')))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
            }

            $schedules = json_decode(DB::table('vwstudentschedules')
                ->where('scheduleDate', '=', $sched)
                ->orderBy('created_at', 'desc')
                ->get(), true);
            $newSched = array();
            $count = 1;
            foreach ($schedules as $s) {
                $s['no'] = $count;
                $count++;
                array_push($newSched, $s);
            }

            $allScheds = json_decode(DB::table('vwstudentschedules')
                ->orderBy('created_at', 'desc')
                ->get(), true);

            $events = array();
            foreach ($allScheds as $as) {
                $idd = $as['id'];
                $type = $as['classType'];
                $startDet = (new DateTime($as['scheduleDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
                $endDet = (new DateTime($as['scheduleTime']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
                $data = array();
                $data = ["id" => $idd, "title" => $type, "start" => $startDet, "end" => $endDet];
                array_push($events, $data);
            }


            $count = 1;
            $scheds = array();
            foreach ($allScheds as $ss) {
                $ss['no'] = $count;
                array_push($scheds, $ss);
            }



            return view('teacher.ss', ['students' => $allStudents, 'events' => $events, 'mSched' =>  $scheds]);
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
