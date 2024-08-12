<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        // Redirect authenticated users to the dashboard
        if (Auth::check()) {
            return redirect()->route('home');
        }
    
    return view('admin-login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;

// Group routes with auth middleware
Route::middleware(['auth'])->group(function () {
    // Student resource routes
    Route::resource('students', StudentController::class);
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::post('students/{id}/restore', [StudentController::class, 'restore'])->name('students.restore');
});

     

