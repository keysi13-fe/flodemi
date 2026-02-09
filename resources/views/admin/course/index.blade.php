@extends('admin.layouts.app')

@section('content')
<h3>Course</h3>
<a href="/admin/courses/create" class="btn btn-primary mb-2">Tambah Course</a>

<table class="table">
    <tr>
        <th>Judul</th>
        <th>Level</th>
        <th>Status</th>
    </tr>

    @foreach($courses as $course)
    <tr>
        <td>{{ $course->title }}</td>
        <td>{{ $course->level }}</td>
        <td>{{ $course->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
