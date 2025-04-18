<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherGradingController extends Controller
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

            $allStudents = DB::table('students')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $sortedStudents = json_decode(DB::table('students')
                ->orderBy('created_at', 'desc')->get(), true);

            $sortedSub = json_decode(DB::table('submissions')
                ->orderBy('created_at', 'desc')->get(), true);
            $studentAss = array();
            $studentSub = array();
            $grades = array();
            $workBehavior  = array();
            $socialSkills  = array();
            $cognitiveSkills  = array();
            $fms  = array();
            $gms  = array();
            $adls  = array();
            foreach ($sortedStudents as $s) {
                $data = json_decode(DB::table('assignments')->where("studentID", '=', $s['id'])->get(), true);
                if (count($data) > 0) {
                    $studentAss[$s['id']] =  $data;
                }

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

                $gradesTmp = json_decode(DB::table('grades')->where("studentID", '=', $s['id'])->get(), true);
                if (count($gradesTmp) > 0) {
                    $grade =  $gradesTmp[0];
                    array_push($grades, $grade);
                    $workBehavior[$s['id']] = json_decode($grade['workBehavior'], true);
                    $socialSkills[$s['id']] = json_decode($grade['socialSkills'], true);
                    $cognitiveSkills[$s['id']] = json_decode($grade['cognitiveSkills'], true);
                    $fms[$s['id']] = json_decode($grade['fms'], true);
                    $gms[$s['id']] = json_decode($grade['gms'], true);
                    $adls[$s['id']] = json_decode($grade['adls'], true);
                }
            }

            foreach ($sortedSub as $sosss) {
                $sortedSub[$sosss["assignmentID"]] = $sosss;
            }
            return view('teacher.grading', [
                'students' => $allStudents,
                'studentAss' => $studentAss,
                'submissions' => $sortedSub,
                'grades' => $grades,
                'workBehavior' => $workBehavior,
                'socialSkills' => $socialSkills,
                'cognitiveSkills' => $cognitiveSkills,
                'fms' => $fms,
                'gms' => $gms,
                'adls' => $adls,
            ]);
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
            if ($request->btnRating) {
                $updateCount = DB::table('submissions')->where('id', '=', $request->id)->update([
                    "rating" => $request->rating,
                ]);
                if ($updateCount > 0) {
                    session()->put("successUpdateSubmit", true);
                } else {
                    session()->put("errorUpdateSubmit", true);
                }
            } else if ($request->btnSave) {
                $workBehavior = json_encode([
                    "attention" => $request->attention != "" ? $request->attention : "",
                    "concentration" => $request->concentration != "" ? $request->concentration : "",
                    "tolerance" => $request->tolerance != "" ? $request->tolerance : "",
                    "impulse" => $request->impulse != "" ? $request->impulse : "",
                    "sitting" => $request->sitting != "" ? $request->sitting : "",
                    "comment" => $request->workBehaviorComment != "" ? $request->workBehaviorComment : "",
                ]);
                $socialSkills = json_encode([
                    "name" => $request->name != "" ? $request->name : "",
                    "eye" => $request->eye != "" ? $request->eye : "",
                    "joint" => $request->joint != "" ? $request->joint : "",
                    "verbal" => $request->verbal != "" ? $request->verbal : "",
                    "cooperation" => $request->cooperation != "" ? $request->cooperation : "",
                    "activeListening" => $request->activeListening != "" ? $request->activeListening : "",
                    "flexibility" => $request->flexibility != "" ? $request->flexibility : "",
                    "decision" => $request->decision != "" ? $request->decision : "",
                    "manners" => $request->manners != "" ? $request->manners : "",
                    "comment" => $request->socialSkillsComment != "" ? $request->socialSkillsComment : "",
                ]);
                $cognitiveSkills = json_encode([
                    "match" => $request->match != "" ? $request->match : "",
                    "sort" => $request->sort != "" ? $request->sort : "",
                    "recognize" => $request->recognize != "" ? $request->recognize : "",
                    "identify" => $request->identify != "" ? $request->identify : "",
                    "instruction" => $request->instruction != "" ? $request->instruction : "",
                    "comment" => $request->cognitiveSkillsComment != "" ? $request->cognitiveSkillsComment : "",
                ]);
                $fms = json_encode([
                    "manipulation" => $request->manipulation != "" ? $request->manipulation : "",
                    "coordination" => $request->coordination != "" ? $request->coordination : "",
                    "tracing" => $request->tracing != "" ? $request->tracing : "",
                    "imatating" => $request->imatating != "" ? $request->imatating : "",
                    "copying" => $request->copying != "" ? $request->copying : "",
                    "writing" => $request->writing != "" ? $request->writing : "",
                    "coloring" => $request->coloring != "" ? $request->coloring : "",
                    "painting" => $request->painting != "" ? $request->painting : "",
                    "cutting" => $request->cutting != "" ? $request->cutting : "",
                    "folding" => $request->folding != "" ? $request->folding : "",
                    "strength" => $request->strength != "" ? $request->strength : "",
                    "comment" => $request->fmsComment != "" ? $request->fmsComment : "",
                ]);
                $gms = json_encode([
                    "planning" => $request->planning != "" ? $request->planning : "",
                    "balance" => $request->balance != "" ? $request->balance : "",
                    "body" => $request->body != "" ? $request->body : "",
                    "strength" => $request->strength != "" ? $request->strength : "",
                    "reaction" => $request->reaction != "" ? $request->reaction : "",
                    "comment" => $request->gmsComment != "" ? $request->gmsComment : "",
                ]);
                $adls = json_encode([
                    "feeding" => $request->feeding != "" ? $request->feeding : "",
                    "dressing" => $request->dressing != "" ? $request->dressing : "",
                    "grooming" => $request->grooming != "" ? $request->grooming : "",
                    "bathing" => $request->bathing != "" ? $request->bathing : "",
                    "meal" => $request->meal != "" ? $request->meal : "",
                ]);
                $updateCount = DB::table('grades')->where('studentID', '=', $request->sid)->update([
                    "workBehavior" => $workBehavior,
                    "socialSkills" =>  $socialSkills,
                    "cognitiveSkills" =>  $cognitiveSkills,
                    "fms" =>  $fms,
                    "gms" =>  $gms,
                    "adls" =>  $adls,
                ]);

                if ($updateCount > 0) {
                    session()->put("successUpdateGrade", true);
                } else {
                    session()->put("errorUpdateGrade", true);
                }
            }
            return redirect("/teacher_grading");
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
