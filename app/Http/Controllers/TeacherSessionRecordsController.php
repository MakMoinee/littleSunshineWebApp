<?php

namespace App\Http\Controllers;

use App\Models\Sessions;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TeacherSessionRecordsController extends Controller
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

            $allStudents = json_decode(Students::all(), true);
            $allSessions = DB::table('sessions')
                ->where('teacherID', '=', $user['userID'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return view('teacher.records', ['students' => $allStudents, 'sessions' => $allSessions]);
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

            if ($request->btnAddSession) {
                $newSession = new Sessions();
                $newSession->teacherID = $user['userID'];
                $newSession->sessionID = $request->sessionNumber;
                $newSession->studentID = $request->student;
                $newSession->details = $request->details;
                $newSession->status = $request->status;
                $isSave = $newSession->save();
                if ($isSave) {
                    session()->put("successAddSession", true);
                }else{
                    
                    session()->put("errorAddSession", true);
                }
            }

            return redirect("/teacher_records");
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
