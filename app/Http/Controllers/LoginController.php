<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists('users')) {
            $user = session()->pull('users');
            session()->put("users", $user);

            if ($user['userType'] == "teacher") {

                return redirect("/teacher_home");
            } else {

                return redirect("/logout");
            }
        }
        return view("login");
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
        if ($request->btnLogin) {
            $username = $request->username;
            $password = $request->password;
            $user = array();

            $query = json_decode(DB::table('users')->where('username', '=', $username)->get(), true);
            $isFound = false;
            foreach ($query as $q) {
                if (password_verify($password, $q['password'])) {
                    $user = $q;
                    session()->put('successLogin', true);
                    session()->put('users', $user);
                    $isFound = true;
                    break;
                }
            }

            if ($isFound) {
                if ($user['userType'] == "teacher") {

                    return redirect("/teacher_home");
                } else {

                    return redirect("/student_home");
                }
            } else {
                session()->put('errorLogin', true);
            }
        }
        return redirect("/login");
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
