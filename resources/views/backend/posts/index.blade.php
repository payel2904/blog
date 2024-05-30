@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Title</th>
            <th scope="col">Desc</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allPosts as $post)

        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }} " class="btn btn-info"> Show </a>
                <a href="{{ route('posts.edit', $post->id) }} " class="btn btn-info"> Edit</a>
                <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {!! $allPosts->links() !!}
@stop
