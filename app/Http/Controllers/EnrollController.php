<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use App\Models\Students;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
                $evaluation = $request->file('evaluation');
                $evaluationFilename = "";

                if ($evaluation) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/evaluations';
                    $evaluationFilename = strtotime(now()) . "." . $evaluation->getClientOriginalExtension();
                    $isFile = $evaluation->move($destinationPath,  $evaluationFilename);
                    chmod($destinationPath, 0755);
                }

                $newUser = new Users();
                $newUser->username = "user" . strtotime(now());
                $pass = strtotime(now());
                $newUser->password = Hash::make($pass);
                $newUser->userType = "student";
                $newUser->status = "active";
                $isSave = $newUser->save();
                if ($isSave) {
                    $studentUser = json_decode(DB::table('users')->where('username', '=', $newUser->username)->get(), true);
                    $studentUser = $studentUser[0];
                    $newStudent = new Students();
                    $newStudent->userID = $studentUser['userID'];
                    $newStudent->name = $request->studentName;
                    $newStudent->studentID = $request->course;
                    $newStudent->guardian = $request->guardianName;
                    $newStudent->contactNumber = $request->contactNumber;
                    $newStudent->guardianEmail = $request->guardianEmail;
                    $newStudent->address = $request->address;
                    $newStudent->type = '/data/evaluations/' . $evaluationFilename;
                    $newStudent->diagnose_remarks = "";
                    $newStudent->course = $request->course;
                    $isSave = $newStudent->save();
                    if ($isSave) {
                        $this->sendEmail($request->guardianEmail, "Your Child's Credential", $newUser->username, $pass);
                        session()->put("successEnroll", true);
                    } else {

                        session()->put("errorEnroll", true);
                    }
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

    function sendEmail($to, $subject, $username, $password)
    {
        try {
            Mail::to($to)->send(new MyEmail($subject, $username, $password));
            return 1;
        } catch (\Exception $e) {
            dd($e);
            return 2;
        }
    }
}
