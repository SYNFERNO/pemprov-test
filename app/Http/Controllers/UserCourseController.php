<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\UserCourse;

class UserCourseController extends Controller
{
    public function index()
    {
        $userCourses = UserCourse::all();
        return view('user-course.index', compact('userCourses'));
    }

    public function create()
    {
        return view('user-course.create');
    }

    public function edit()
    {
        return view('user-course.edit');
    }

    public function show()
    {
        return view('user-course.show');
    }

    public function destroy()
    {
        return view('user-course.destroy');
    }
}
