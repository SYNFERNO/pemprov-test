@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('courses.store') }}" method="POST" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="course" name="course" class="form-control" id="course" value="{{ old('course') }}" required>
            </div>
            <div class="mb-3">
                <label for="mentor" class="form-label">Mentor</label>
                <input type="mentor" name="mentor" class="form-control" id="mentor" value="{{ old('mentor') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="title" name="title" class="form-control" id="title" value="{{ old('title') }}"
                    required>
            </div>
            <div class="mb-3">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
