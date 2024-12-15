<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherFreeBooksController extends Controller
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
            $allBooks = json_decode(DB::table('books')
                ->where('userID', '=', $user['userID'])
                ->orderBy('created_at', 'desc')->get(), true);
            return view('teacher.freebooks', ['books' => $allBooks]);
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

            if ($request->btnAddBook) {
                $thumbnail = $request->file('thumbnail');
                $thumbnailFileName = "";

                $book = $request->file('book');
                $bookFileName = "";

                if ($thumbnail) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/thumbnails';
                    $thumbnailFileName = strtotime(now()) . "." . $thumbnail->getClientOriginalExtension();
                    $isFile = $thumbnail->move($destinationPath,  $thumbnailFileName);
                    chmod($destinationPath, 0755);
                }

                if ($book) {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/books';
                    $bookFileName = strtotime(now()) . "." . $book->getClientOriginalExtension();
                    $isFile = $book->move($destinationPath,  $bookFileName);
                    chmod($destinationPath, 0755);
                }

                if ($thumbnailFileName) {
                    $newBook = new Books();
                    $newBook->userID = $user['userID'];
                    $newBook->title = $request->title;
                    $newBook->thumbnail = "/data/thumbnails" . $thumbnailFileName;
                    $newBook->book = "/data/books" . $bookFileName;
                    $newBook->link = $request->bookLink;
                    $isSave = $newBook->save();
                    if ($isSave) {

                        session()->put("successAddBook", true);
                    } else {

                        session()->put("errorAddBook", true);
                    }
                } else {
                    session()->put("errorAddBook", true);
                }
            }

            return redirect("/teacher_books");
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
