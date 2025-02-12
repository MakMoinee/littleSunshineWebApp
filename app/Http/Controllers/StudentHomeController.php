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

                return view('student.home', ['schedules' => $schedules, 'assignments' => $assignments]);
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
