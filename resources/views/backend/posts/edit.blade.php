@extends('layouts.backend_layouts')
@section('main_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post Edit</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update',$singlePost->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $singlePost->title }}" id="exampleFormControlInput1" placeholder="write your title">
                    @if($errors->has('title'))
                        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ $singlePost->description }}</textarea>
                    @if($errors->has('description'))
                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">-- please select --</option>
                        @foreach($categories as $category)
                            @if($category->id === $singlePost->category_id)
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
                    <label for="feature_image">Feature image</label>
                    <input type="file" name="feature_image" id="feature_image" class="form-control">
                    @if($errors->has('feature_image'))
                        <div class="alert alert-danger">{{ $errors->first('feature_image') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="feature_image">Feature image</label>
                    @if($singlePost->feature_image)
                        <img src="{{ asset('storage/'.$singlePost->feature_image) }}" alt="{{ $singlePost->title }}" height="50px" width="50px">
                    @endif
                    <input type="file" name="feature_image" id="feature_image" class="form-control">
                    @if($errors->has('feature_image'))
                        <div class="alert alert-danger">{{ $errors->first('feature_image') }}</div>
                    @endif
                <button type="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>
    </div>


@stop

