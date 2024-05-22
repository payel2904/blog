@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category View</h1>
    </div>

    <div class="card">
        <div class="card--body">
            <h1>{{ $category->name }}</h1>
        </div>
    </div>

@stop
