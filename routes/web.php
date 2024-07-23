<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('/create', [UserController::class, 'create'])->name('users.create');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
            Route::post('/', [UserController::class, 'store'])->name('users.store');
            Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
        });

        Route::prefix('/courses')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('courses.index');
            Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
            Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
            Route::get('/{id}', [CourseController::class, 'show'])->name('courses.show');
            Route::post('/', [CourseController::class, 'store'])->name('courses.store');
            Route::put('/{id}', [CourseController::class, 'update'])->name('courses.update');
            Route::delete('/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
        });

        Route::prefix('/user-courses')->group(function () {
            Route::get('/', [UserCourseController::class, 'index'])->name('user-courses.index');
            Route::get('/create', [UserCourseController::class, 'create'])->name('user-courses.create');
            Route::get('/{id}/edit', [UserCourseController::class, 'edit'])->name('user-courses.edit');
            Route::get('/{id}', [UserCourseController::class, 'show'])->name('user-courses.show');
            Route::post('/', [UserCourseController::class, 'store'])->name('user-courses.store');
            Route::put('/{id}', [UserCourseController::class, 'update'])->name('user-courses.update');
            Route::delete('/{id}', [UserCourseController::class, 'destroy'])->name('user-courses.destroy');
        });
    });
});
