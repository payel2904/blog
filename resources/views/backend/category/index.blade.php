@extends('layouts.backend_layouts')
@section('main_content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">category</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add new</a>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>
<table class="table">
    <thead>
    <tr>
        <th colspan="2" scope="col">name</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <th colspan="2" scope="row">1</th>
        <td>
            <a href="{{ route('categories.create') }}" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <tr>
        <th colspan="2" scope="row">2</th>
        <td>
            <a href="{{ route('categories.create') }}" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a></a>
        </td>
    </tr>

    </tbody>
</table>
@stop
