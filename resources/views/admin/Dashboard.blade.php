@extends('admin.layouts.app')

@section('content')
<h3>Dashboard</h3>

<div class="row">
    <div class="col-md-3">
        <div class="card p-3">
            <h5>Total User</h5>
            <h2>{{ $totalUser }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card p-3">
            <h5>Total Course</h5>
            <h2>{{ $totalCourse }}</h2>
        </div>
    </div>
</div>
@endsection
