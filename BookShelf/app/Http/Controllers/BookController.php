<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;

class BookController extends Controller
{
    // GET /index
    public function index()
    {
        return view('form');
    }

    // POST /store
    public function store(BookStoreRequest $request)
    {
        Book::create([
            'title' => trim($request->title),
            'author' => trim($request->author),
            'genre' => trim($request->genre),
        ]);

        return response()->json('Book was successfully validated and saved');
    }
}
