<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentGradingController extends Controller
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
                $myAnswers = array();
                $count = 0;
                foreach ($assignments as $a) {
                    foreach ($allSubmissions as $as) {
                        if ($as['assignmentID'] == $a['assignmentID']) {
                            $myAnswers[$as['assignmentID']] = $as;
                        }
                    }
                    unset($assignments[$count]);
                    $count++;
                }
                return view('student.grading', ['assignments' => $assignments, 'answers' => $myAnswers]);
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
