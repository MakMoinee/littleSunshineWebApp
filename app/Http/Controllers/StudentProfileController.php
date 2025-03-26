<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);
            $students = json_decode(DB::table('students')->where('userID', '=', $user['userID'])->get(), true);
            if (count($students) > 0) {
                $students = $students[0];
            } else {
                $students = array();
            }

            return view('student.profile', ['student' => $students, 'user' => $user]);
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

            if ($request->btnEditStudentName) {
                $updateCount = DB::table('students')->where('userID', '=', $user['userID'])->update([
                    "name" => $request->name,
                ]);
                if ($updateCount > 0) {
                    session()->put("successUpdate", true);
                } else {
                    session()->put("errorUpdate", $user);
                }
            } else if ($request->btnSaveProfile) {

                $students = json_decode(DB::table('students')->where('userID', '=', $user['userID'])->get(), true);
                if (count($students) > 0) {

                    $pass = $request->password;
                    $confirm = $request->confirm;
                    if ($pass == $confirm) {
                        $updateUser = DB::table('users')->where('userID', '=', $user['userID'])->update([
                            "password" => Hash::make($pass),
                        ]);
                        if ($updateUser > 0) {
                            $updateCount = DB::table('students')->where('userID', '=', $user['userID'])->update([
                                "contactNumber" => $request->contactNumber,
                                "guardianEmail" => $request->email,
                                "address" => $request->address,
                            ]);
                            if ($updateCount > 0) {
                                session()->put("successUpdate", true);
                            } else {
                                session()->put("errorUpdate", $user);
                            }
                        } else {
                            session()->put("errorUpdate", $user);
                        }
                    } else {
                        session()->put("errorPasswordNotMatch", $user);
                    }
                }
            }

            return redirect("/student_profile");
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
