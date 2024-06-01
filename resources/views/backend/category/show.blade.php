@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $category->name }}</h1>
    </div>

    <div class="card">
        <div class="card--body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Category</th>
                    <th scope="col">Feature Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category->posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            @if($post->feature_image)
                                <img src="{{ asset('storage/'.$post->feature_image) }}" alt="title" width="50px"
                                     height="50px">
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
