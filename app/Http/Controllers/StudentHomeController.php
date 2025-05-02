<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] == "student") {
                $sched = $request->query('sched');
                if (!$sched) {
                    $sched = (new DateTime(now()))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d');
                }
                $schedules = json_decode(DB::table('vwstudentschedules')->where('userID', '=', $user['userID'])->where('scheduleDate', '=', $sched)->get(), true);
                $assignments = json_decode(DB::table('vwstudentassignments')->where('userID', '=', $user['userID'])->orderBy('created_at', 'desc')->get(), true);

                $allScheds = json_decode(DB::table('vwstudentschedules')
                    ->where('userID', '=', $user['userID'])
                    ->orderBy('created_at', 'desc')
                    ->get(), true);

                $events = array();
                foreach ($allScheds as $as) {
                    $idd = $as['id'];
                    $type = $as['classType'];
                    $startDet = (new DateTime($as['scheduleDate']))->format('Y-m-d');
                    $endDet = (new DateTime($as['scheduleTime']))->format('Y-m-d');
                    $data = array();
                    $data = ["id" => $idd, "title" => $type, "start" => $startDet, "end" => $endDet];
                    array_push($events, $data);
                }

                foreach ($assignments as $key => $a) {
                    $count = DB::table("submissions")->where('assignmentID', '=', $a['assignmentID'])->count();
                    if ($count > 0) {
                        unset($assignments[$key]);
                    }
                }

                $studentInfo = json_decode(DB::table('students')->where('userID', '=', $user['userID'])->get(), true);
                $studentInfo = count($studentInfo) > 0 ? $studentInfo[0] : [];
                return view('student.home', ['schedules' => $schedules, 'assignments' => $assignments, 'events' => $events, 'studentInfo' => $studentInfo]);
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
