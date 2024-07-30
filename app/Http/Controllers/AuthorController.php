<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Author::all(), 200);
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
        $author = Author::create($request->all());
        return response()->json([
            'message' => 'Author created', 
            'data'=> $author], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Author::find($id), 200);

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
        $author = Author::find($id);
         $author -> update($request->all());
       return(response()->json([
         'message' => 'Author updated', 
         'data'=> $author], 201));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     Author::destroy($id);
       return response()->json(['message' => 'Author deleted'], 200);
    }
}
