@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <p><b>Name: </b> {{ $user->name }}</p>
            <p><b>E-mail: </b> {{ $user->email }}</p>
            <p><b>Phone: </b> {{ $user->phone }}</p>

        </div>
    </div>

@stop
