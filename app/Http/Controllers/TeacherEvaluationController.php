<?php

namespace App\Http\Controllers;

use App\Models\Evaluations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherEvaluationController extends Controller
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

           

            $allSessions = json_decode(DB::table('sessions')->where('teacherID', '=', $user['userID'])->get(), true);
            $datas = array();
            foreach ($allSessions as $s) {
                $count = DB::table('evaluations')->where('sessionID', '=', $s['id'])->count();
                if ($count > 0) {
                    continue;
                }
                if (array_key_exists($s['studentID'], $datas)) {
                    $tmpData = $datas[$s['studentID']];
                    array_push($s, $tmpData);
                    $datas[$s['studentID']] = $tmpData;
                } else {

                    $datas[$s['studentID']] = $s;
                }
            }

            return view('teacher.evaluation', ['students' => $allStudents, 'mSessions' => $datas]);
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

            if ($request->btnAddEvaluation) {
                $newEval = new Evaluations();
                $newEval->sessionID = $request->sessionNum;
                $newEval->evaluation = $request->evaluation;
                $isSave = $newEval->save();
                if ($isSave) {
                    session()->put("successAddEval", true);
                } else {
                    session()->put("errorAddEval", true);
                }
            }
            return redirect("/teacher_eval");
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
