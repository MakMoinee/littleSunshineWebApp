<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $mUsers =  DB::table('users')
                ->where('userType', '<>', 'teacher')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $allStudents =  json_decode(DB::table('students')
                ->orderBy('created_at', 'desc')
                ->get(), true);
            $students =  array();
            foreach ($mUsers as $s) {
                if ($s->userID != 0) {
                    $data = json_decode(DB::table('students')->where('userID', '=', $s->userID)->get(), true);
                    if (count($data) > 0) {
                        $students[$s->userID] = $data[0];
                    }
                }
            }




            return view('teacher.students', ['students' => $students, 'mUsers' => $mUsers, 'allStudents' => $allStudents]);
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

            if ($request->btnAddUser) {
                $count = DB::table('users')->where('username', '=', $request->username)->count();
                if ($count > 0) {
                    session()->put("errorUserExist", true);
                } else {
                    $pass = $request->password;
                    $confirmPass = $request->confirmPass;

                    if ($pass == $confirmPass) {
                        $newUser = new Users();
                        $newUser->username = $request->username;
                        $newUser->password = Hash::make($pass);
                        $newUser->userType = "student";
                        $newUser->status = "active";
                        $isSave = $newUser->save();
                        if ($isSave) {
                            $userData = json_decode(DB::table('users')->where('username', '=', $request->username)->get(), true);
                            $updateCount = DB::table('students')->where('id', '=', $request->student)->update([
                                "userID" => $userData[0]['userID'],
                            ]);
                            if ($updateCount > 0) {
                                session()->put("successSaveUser", true);
                            } else {
                                DB::table('users')->where('userID', '=', $userData[0]['userID'])->delete();
                                session()->put("errorSaveUser", true);
                            }
                        } else {
                            session()->put("errorSaveUser", true);
                        }
                    } else {
                        session()->put("errorPassNotMatch", true);
                    }
                }
            }

            return redirect("/teacher_students");
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
    public function destroy(string $id, Request $request)
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] != "teacher") {
                return redirect("/logout");
            }

            if ($request->btnDeleteUser) {
                $deleteCount1 = DB::table('users')->where('userID', '=', $id)->delete();
                $deleteCount2 = DB::table('students')->where('userID', '=', $id)->delete();
                if ($deleteCount1 > 0 && $deleteCount2 > 0) {
                    session()->put("successDeleteUser", true);
                } else {
                    session()->put("errorDeleteUser", true);
                }
            }

            return redirect("/teacher_students");
        }
        return redirect("/");
    }
}
