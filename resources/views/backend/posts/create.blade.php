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
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary ">Save</button>
                            </form>
                        </div>
                    </div>


@stop
