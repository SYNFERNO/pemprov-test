@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Course
            </div>
            <div class="card-body">
                <h5 class="card-title">Course {{ $course->course }}</h5>
                <p class="card-text">Mentor: {{ $course->mentor }}</p>
                <p class="card-text">Title: {{ $course->title }}</p>
                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="white-space: nowrap;">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
