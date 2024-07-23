@extends('layout.master')

@section('content')
    <div class="container">
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3 float-end">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course</th>
                    <th scope="col">Mentor</th>
                    <th scope="col">Title</th>
                    <th scope="col" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $course->course }}</td>
                        <td>{{ $course->mentor }}</td>
                        <td>{{ $course->title }}</td>
                        <td class="d-flex">
                            <div class="justify-content-end">
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Show</a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning mx-2">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        style="white-space: nowrap;">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
