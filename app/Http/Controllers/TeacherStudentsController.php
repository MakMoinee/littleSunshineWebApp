<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherStudentsController extends Controller
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
            $students =  DB::table('students')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            $mUsers =  array();
            foreach ($students as $s) {
                if ($s['userID'] != 0) {
                    $data = json_decode(DB::table('users')->where('userID', '=', $s->userID)->get(), true);
                    if (count($data) > 0) {
                        $mUsers[$s['id']] = $data;
                    }
                }
            }

            return view('teacher.students', ['students' => $students, 'mUsers' => $mUsers]);
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
