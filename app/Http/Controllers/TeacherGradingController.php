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

            $studentAss = array();
            foreach ($sortedStudents as $s) {
                $data = json_decode(DB::table('assignments')->where("studentID", '=', $s['id'])->get(), true);
                if (count($data) > 0) {
                    if (array_key_exists($s['id'], $studentAss)) {
                        $tmpArray = $studentAss[$s['id']];
                        array_push($tmpArray,  $data);
                        $studentAss[$s['id']] = $s;
                    } else {
                        $tmpArray = array();
                        array_push($tmpArray, $s);
                        $studentAss[$s['id']] =  $data;
                    }
                }
            }


            return view('teacher.grading', ['students' => $allStudents, 'studentAss' => $studentAss]);
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
