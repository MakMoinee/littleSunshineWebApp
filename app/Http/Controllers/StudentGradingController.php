<?php

namespace App\Http\Controllers;

use App\Models\Grades;
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
                    $count++;
                }

                $grades = array();
                $workBehavior  = array();
                $socialSkills  = array();
                $cognitiveSkills  = array();
                $fms  = array();
                $gms  = array();
                $adls  = array();

                $student = json_decode(DB::table('students')
                    ->where('userID', '=', $user['userID'])
                    ->orderBy('created_at', 'desc')
                    ->get(), true);

                foreach ($student as $s) {
                    $gCount = DB::table('grades')->where("studentID", '=', $s['id'])->count();
                    if ($gCount == 0) {
                        $newGrades = new Grades();
                        $newGrades->studentID = $s['id'];
                        $newGrades->workBehavior = json_encode([
                            "attention" => "",
                            "concentration" => "",
                            "tolerance" => "",
                            "impulse" => "",
                            "sitting" => "",
                            "comment" => "",
                        ]);
                        $newGrades->socialSkills = json_encode([
                            "name" => "",
                            "eye" => "",
                            "joint" => "",
                            "verbal" => "",
                            "cooperation" => "",
                            "activeListening" => "",
                            "flexibility" => "",
                            "decision" => "",
                            "manners" => "",
                            "comment" => "",
                        ]);
                        $newGrades->cognitiveSkills = json_encode([
                            "match" => "",
                            "sort" => "",
                            "recognize" => "",
                            "identify" => "",
                            "instruction" => "",
                            "comment" => "",
                        ]);
                        $newGrades->fms = json_encode([
                            "manipulation" => "",
                            "coordination" => "",
                            "tracing" => "",
                            "imatating" => "",
                            "copying" => "",
                            "writing" => "",
                            "coloring" => "",
                            "painting" => "",
                            "cutting" => "",
                            "folding" => "",
                            "strength" => "",
                            "comment" => "",
                        ]);
                        $newGrades->gms = json_encode([
                            "planning" => "",
                            "balance" => "",
                            "body" => "",
                            "strength" => "",
                            "reaction" => "",
                            "comment" => "",
                        ]);
                        $newGrades->adls = json_encode([
                            "feeding" => "",
                            "dressing" => "",
                            "grooming" => "",
                            "bathing" => "",
                            "meal" => "",
                            "comment" => "",
                        ]);
                        $newGrades->save();
                    }

                    $grades = json_decode(DB::table('grades')->where("studentID", '=', $s['id'])->get(), true);
                    $gCount = DB::table('grades')->where("studentID", '=', $s['id'])->count();
                    if ($gCount == 0) {
                        $newGrades = new Grades();
                        $newGrades->studentID = $s['id'];
                        $newGrades->workBehavior = json_encode([
                            "attention" => "",
                            "concentration" => "",
                            "tolerance" => "",
                            "impulse" => "",
                            "sitting" => "",
                            "comment" => "",
                        ]);
                        $newGrades->socialSkills = json_encode([
                            "name" => "",
                            "eye" => "",
                            "joint" => "",
                            "verbal" => "",
                            "cooperation" => "",
                            "activeListening" => "",
                            "flexibility" => "",
                            "decision" => "",
                            "manners" => "",
                            "comment" => "",
                        ]);
                        $newGrades->cognitiveSkills = json_encode([
                            "match" => "",
                            "sort" => "",
                            "recognize" => "",
                            "identify" => "",
                            "instruction" => "",
                            "comment" => "",
                        ]);
                        $newGrades->fms = json_encode([
                            "manipulation" => "",
                            "coordination" => "",
                            "tracing" => "",
                            "imatating" => "",
                            "copying" => "",
                            "writing" => "",
                            "coloring" => "",
                            "painting" => "",
                            "cutting" => "",
                            "folding" => "",
                            "strength" => "",
                            "comment" => "",
                        ]);
                        $newGrades->gms = json_encode([
                            "planning" => "",
                            "balance" => "",
                            "body" => "",
                            "strength" => "",
                            "reaction" => "",
                            "comment" => "",
                        ]);
                        $newGrades->adls = json_encode([
                            "feeding" => "",
                            "dressing" => "",
                            "grooming" => "",
                            "bathing" => "",
                            "meal" => "",
                            "comment" => "",
                        ]);
                        $newGrades->save();
                    }

                    if (count($grades) > 0) {
                        $grade =  $grades[0];
                        $workBehavior = json_decode($grade['workBehavior'], true);
                        $socialSkills = json_decode($grade['socialSkills'], true);
                        $cognitiveSkills = json_decode($grade['cognitiveSkills'], true);
                        $fms = json_decode($grade['fms'], true);
                        $gms = json_decode($grade['gms'], true);
                        $adls = json_decode($grade['adls'], true);
                    }
                }
                return view('student.grading', [
                    'assignments' => $assignments,
                    'answers' => $myAnswers,
                    'grades' => $grades,
                    'workBehavior' => $workBehavior,
                    'socialSkills' => $socialSkills,
                    'cognitiveSkills' => $cognitiveSkills,
                    'fms' => $fms,
                    'gms' => $gms,
                    'adls' => $adls,
                ]);
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
