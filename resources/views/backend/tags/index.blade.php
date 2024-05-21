@extends('layouts.backend_layouts')
@section('main_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tags</h1>
        <a href="{{ route('tags.create') }}" class="btn btn-primary">Add new</a>
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
        @foreach($tags as $tag)
            <tr>
                <th scope="row">{{ $tag->name }}</th>
                <td>
                    <a href="{{ route('tags.create') }}" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    {!! $tags->links() !!}
    {!! $tags->links() !!}
@stop
