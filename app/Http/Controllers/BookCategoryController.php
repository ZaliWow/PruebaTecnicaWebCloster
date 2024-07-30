<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function index()
    {
        $bookCategories = BookCategory::all();
        return response()->json($bookCategories);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $bookCategory = BookCategory::create($request->all());
        return response()->json($bookCategory, 201);
    }

    public function show(BookCategory $bookCategory)
    {
        return response()->json($bookCategory);
    }

    public function edit(BookCategory $bookCategory)
    {
        //
    }

    public function update(Request $request, BookCategory $bookCategory)
    {
        $bookCategory->update($request->all());
        return response()->json($bookCategory);
    }

    public function destroy(BookCategory $bookCategory)
    {
        $bookCategory->delete();
        return response()->json(null, 204);
    }
}
