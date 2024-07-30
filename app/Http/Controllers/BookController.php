<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:54657837.
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author', 'categories')->get();
        return response()->json($books);
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
        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book->load('author', 'categories');
        return response()->json($book);

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
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        $book->categories()->sync($request->categories);
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }
}
