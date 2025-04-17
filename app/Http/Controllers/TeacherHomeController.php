<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherHomeController extends Controller
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

            $sched = $request->query('sched');
            if (!$sched) {
                $sched = (new DateTime(now()))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
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


            $schedules = json_decode(DB::table('schedules')->where('teacherID', '=', $user['userID'])->where('scheduleDate', '=', $sched)->get(), true);

            $count = 1;
            $scheds = array();
            foreach ($allScheds as $ss) {
                $ss['no'] = $count;
                array_push($scheds, $ss);
            }


            return view('teacher.home', ['schedules' => $schedules, 'events' => $events, 'mSched' =>  $scheds]);
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
        //
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
