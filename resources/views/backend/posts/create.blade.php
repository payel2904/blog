@extends('layouts.backend_layouts')
@section('main_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post Create</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="write your title">
                    @if($errors->has('title'))
                        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                              placeholder="Description"></textarea>
                    @if($errors->has('description'))
                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">-- Please Select --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('category_id'))
                        <div class="alert alert-danger">{{ $errors->first('category_id') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="tag_id">Tag</label>
                    <select name="tag_id" id="tag_id" class="form-control">
                        <option value="">-- Please Select --</option>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('tag_id'))
                        <div class="alert alert-danger">{{ $errors->first('tag_id') }}</div>
                    @endif

                </div>
                <button type="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>
    </div>

@stop
