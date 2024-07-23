@extends('layout.master')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id User</th>
                    <th scope="col">Id Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userCourses as $uc)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $uc->id_user }}</td>
                        <td>{{ $uc->id_course }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
