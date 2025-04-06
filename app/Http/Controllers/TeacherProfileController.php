<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherProfileController extends Controller
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
            $teacher = json_decode(DB::table('teachers')->where('userID', '=', $user['userID'])->get(), true);
            if (count($teacher) > 0) {
                $teacher = $teacher[0];
            } else {
                $teacher = array();
            }


            return view('teacher.profile', ['teacher' => $teacher]);
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

            if ($request->btnEditTeacherName) {
                $files = $request->file('profilePic');
                $fileName = "";
                $filePrefix = "";
                if ($files) {
                    $mimeType = $files->getMimeType();
                    if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                        $fileName = strtotime(now()) . "." . $files->getClientOriginalExtension();
                        $env = env('APP_ENV');
                        if ($env == "stage") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/public' . '/data/profiles';
                            $filePrefix = "/public";
                        } else {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/profiles';
                            $filePrefix = "";
                        }
                        $isFile = $files->move($destinationPath,  $fileName);
                        chmod($destinationPath, 0755);
                    }
                }

                $teacher = json_decode(DB::table('teachers')->where('userID', '=', $user['userID'])->get(), true);
                if (count($teacher) > 0) {


                    if ($fileName) {
                        $updateCount = DB::table('teachers')->where('userID', '=', $user['userID'])->update([
                            "name" => $request->name,
                            "imagePath" => $filePrefix . $fileName,
                        ]);
                        if ($updateCount > 0) {
                            session()->put("successUpdateTeacherName", true);
                        } else {
                            session()->put("errorUpdateTeacherName", true);
                        }
                    } else {
                        $updateCount = DB::table('teachers')->where('userID', '=', $user['userID'])->update([
                            "name" => $request->name,
                        ]);
                        if ($updateCount > 0) {
                            session()->put("successUpdateTeacherName", true);
                        } else {
                            session()->put("errorUpdateTeacherName", true);
                        }
                    }
                } else {
                    $newTeacher = new Teachers(); 
                    $newTeacher->userID = $user['userID'];
                    $newTeacher->name = $request->name;
                    if ($fileName) {
                        $newTeacher->imagePath = $filePrefix . "/data/profiles/" . $fileName;
                    }
                    $isSave = $newTeacher->save();
                    if ($isSave) {
                        session()->put("successUpdateTeacherName", true);
                    } else {
                        session()->put("errorUpdateTeacherName", true);
                    }
                }
            } else if ($request->btnSaveProfile) {
                $teacher = json_decode(DB::table('teachers')->where('userID', '=', $user['userID'])->get(), true);
                if (count($teacher) > 0) {
                    $updateCount = DB::table('teachers')->where('userID', '=', $user['userID'])->update([
                        "address" => $request->address,
                        "contactNumber" => $request->contactNumber,
                        "emailAddress" => $request->email,
                    ]);
                    if ($updateCount > 0) {
                        session()->put("successUpdateTeacher", true);
                    } else {
                        session()->put("errorUpdateTeacher", true);
                    }
                } else {
                    $newTeacher = new Teachers();
                    $newTeacher->userID = $user['userID'];
                    $newTeacher->address = $request->address;
                    $newTeacher->contactNumber = $request->contactNumber;
                    $newTeacher->emailAddress = $request->email;
                    $isSave = $newTeacher->save();
                    if ($isSave) {
                        session()->put("successUpdateTeacher", true);
                    } else {
                        session()->put("errorUpdateTeacher", true);
                    }
                }
            }


            return redirect("/teacher_profile");
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
