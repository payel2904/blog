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
        <th scope="col">name</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allCategories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>
            <a href="{{ route('categories.edit', $category->id) }}" >Edit</a>
            <a href="#" >Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
    {!! $allCategories->links() !!}
@stop
