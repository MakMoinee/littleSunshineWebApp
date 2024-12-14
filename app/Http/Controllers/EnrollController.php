<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            return redirect("/teacher_home");
        } else {
            return view('enroll');
        }
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
        if ($request->btnEnroll) {
            $query = json_decode(DB::table('students')
                ->whereRaw('LOWER(name) = ?', [strtolower($request->studentName)])
                ->get(), true);

            if (count($query) > 0) {
                session()->put("errorExist", true);
            } else {
                $newStudent = new Students();
                $newStudent->userID = 0;
                $newStudent->name = $request->studentName;
                $newStudent->studentID = $request->course;
                $newStudent->guardian = $request->guardianName;
                $newStudent->contactNumber = $request->contactNumber;
                $newStudent->guardianEmail = $request->guardianEmail;
                $newStudent->address = $request->address;
                $newStudent->type = $request->condition;
                $newStudent->diagnose_remarks = $request->diagnosed;
                $newStudent->course = $request->course;
                $isSave = $newStudent->save();
                if ($isSave) {
                    session()->put("successEnroll", true);
                } else {

                    session()->put("errorEnroll", true);
                }
            }
        }
        return redirect("/enroll");
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
