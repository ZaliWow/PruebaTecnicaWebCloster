<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'message' => 'User created', 
            'data'=> $user], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(User::find($id), 200);

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
        $user = User::find($id);
        // return(redirect()-> route("user.user"))->with("success", "User Updated");
         $user -> update($request->all());
       return(response()->json([
         'message' => 'User updated', 
         'data'=> $user], 201));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
       return response()->json(['message' => 'User deleted'], 200);
    }
}
