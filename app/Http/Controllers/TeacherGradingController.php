<?php

namespace App\Http\Controllers;

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
            foreach ($sortedStudents as $s) {
                $data = json_decode(DB::table('assignments')->where("studentID", '=', $s['id'])->get(), true);
                if (count($data) > 0) {
                    $studentAss[$s['id']] =  $data;
                    foreach ($sortedSub as $ss) {
                        $studentSub[$s['id']] = $ss;
                    }
                }
            }


            return view('teacher.grading', ['students' => $allStudents, 'studentAss' => $studentAss, 'submissions' => $studentSub]);
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
