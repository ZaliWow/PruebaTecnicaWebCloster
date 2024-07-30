<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource("/users", userController::class);
Route::resource("/books", BookController::class);
Route::resource("/authors", AuthorController::class);
Route::resource("/book-categories", BookCategoryController::class);
Route::resource("/categories", CategoryController::class);
