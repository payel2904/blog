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
            <th scope="col">Feature Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    @if($post->feature_image)
                        <img src="{{ asset('storage/'.$post->feature_image) }}" alt="title" width="50px" height="50px">
                    @endif
                </td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary"> <i
                            class="fa-solid fa-eye"> </i> </a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"> <i
                            class="fa-solid fa-pen"> </i> </a>
                    <form action="{{ route('posts.destroy', $post->id) }}" class="d-inline-block" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $posts->links() !!}
@stop
