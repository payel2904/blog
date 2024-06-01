@extends('layouts.frontend_layouts')


@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
                @foreach($posts as $post)
                    <!-- blog start --->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    @if($post->feature_image)
                                        <img src="{{ asset('storage/'.$post->feature_image) }}" alt=""
                                             class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <p>{{ date('F j, Y', strtotime($post->created_at)) }} - <span
                                            class="text-danger">{{ strtoupper($post->category->name) }}</span></p>
                                    <h3>{{ $post->title }}</h3>
                                    <p class="my-1">
                                        @php
                                            $sentences = explode('. ', $post->description);
                                            $firstTwoSentences = implode('.', array_slice($sentences, 0, 2));
                                        @endphp

                                        {{ $firstTwoSentences }}

                                        @if(count($sentences) > 2)
                                            ...
                                        @endif

                                    </p>

                                    <a href="{{ route('frontend.blogs.show', $post->id) }}" class="btn btn-link">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog end --->
                @endforeach

                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@stop
