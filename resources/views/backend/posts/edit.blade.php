@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post Edit</h1>
    </div>

    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                   id="title" placeholder="write your title">
            @if($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"
                      placeholder="Description">{{ $post->description }}</textarea>
            @if($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="tag_id">Tag</label>
            <select class="form-control" name="tag_id" id="tag_id">
                <option value="">--Please Select --</option>
                @foreach($tags as $tag)
                    @if($tag->id === $post->tag_id)
                        <option value="{{ $tag->id }}" selected>{{ $tag->name }}</option>
                    @else
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endif

                @endforeach
            </select>
            @if($errors->has('tag_id'))
                <div class="alert alert-danger">{{ $errors->first('tag_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">--Please Select --</option>
                @foreach($categories as $category)
                    @if($category->id === $post->category_id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif

                @endforeach
            </select>
            @if($errors->has('category_id'))
                <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="feature_image">Feature Image</label>
            @if($post->feature_image)
                <br>
                <img src="{{ asset('storage/'.$post->feature_image) }}" alt="title" width="100px" height="100px">
            @endif
            <input type="file" class="form-control" name="feature_image">
        </div>
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@stop
