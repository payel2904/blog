@extends('layouts.frontend_layouts')


@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-danger">{{ strtoupper($post->category->name) }}</a>
                        <h1>{{ $post->title }}</h1>
                        <p>{{ date('F j, Y', strtotime($post->created_at)) }}</p>
                        <img src="{{ asset('storage/'.$post->feature_image) }}" alt="{{ $post->title }}"
                             class="img-fluid m-auto d-block"
                             style="margin-top:4rem!important; margin-bottom: 4rem!important;">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
