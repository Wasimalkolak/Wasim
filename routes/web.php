<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get("/login", [AuthController::class, 'showLoginForm'])->name('login');
Route::post("/login", [AuthController::class, 'login'])->name('login.post');
Route::get("/logout", [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('post'); });
    Route::resource('books', BookController::class);
});
