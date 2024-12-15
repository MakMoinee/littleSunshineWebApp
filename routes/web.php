<?php

use App\Http\Controllers\EnrollController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StudentHomeController;
use App\Http\Controllers\TeacherFreeBooksController;
use App\Http\Controllers\TeacherHomeController;
use App\Http\Controllers\TeacherSessionRecordsController;
use App\Http\Controllers\TeacherSetAssignmentController;
use App\Http\Controllers\TeachSetScheduleController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (session()->exists('users')) {
        $user = session()->pull('users');
        session()->put("users", $user);
        return redirect("/teacher_home");
    }
    return view('welcome');
});

Route::resource('/login', LoginController::class);
Route::resource('/enroll', EnrollController::class);
Route::resource('/teacher_home', TeacherHomeController::class);
Route::resource('/student_home', StudentHomeController::class);
Route::resource('/teacher_saas', TeacherSetAssignmentController::class);
Route::resource('/teacher_ss', TeachSetScheduleController::class);
Route::resource('/teacher_records', TeacherSessionRecordsController::class);
Route::resource('/teacher_books', TeacherFreeBooksController::class);
Route::get('/logout', [LogoutController::class, 'index']);
