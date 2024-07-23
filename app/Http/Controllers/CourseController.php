<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = course::orderBy('mentor', 'asc')->get();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function edit(Request $request)
    {
        $course = course::findOrFail($request->id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request)
    {
        try {
            $course = course::findOrFail($request->id);

            if ($course) {
                $course->mentor = $request->mentor ?? $course->mentor;
                $course->course = $request->course ?? $course->course;
                $course->title = $request->title ?? $course->title;
                $course->save();
                return redirect()->route('courses.index')->with('success', 'Course updated successfully');
            }
            return redirect()->route('courses.edit', $request->id)->with('error', 'Course not found');
        } catch (\Exception $e) {
            return redirect()->route('courses.edit', $request->id)->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'mentor' => 'required',
            'course' => 'required',
            'title' => 'required',
        ]);
        try {
            course::create($data);
            return redirect()->route('courses.index')->with('success', 'Course updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('courses.create', $request->id)->with('error', $e->getMessage());
        }
    }

    public function show(Request $request)
    {
        $course = course::findOrFail($request->id);
        return view('course.show', compact('course'));
    }

    public function destroy(Request $request)
    {
        try {
            $course = course::findOrFail($request->id);
            if ($course) {
                $course->delete();
                return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
            }
            return redirect()->route('courses.index')->with('error', 'Course not found');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('error', $e->getMessage());
        }
    }
}
