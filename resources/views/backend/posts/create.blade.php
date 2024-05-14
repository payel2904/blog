@extends('layouts.backend_layouts')
@section('main_content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Post Create</h1>
                    </div>

                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Title</label>
                          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="write your title">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                        </div>
                        <input type="submit" value="Save" class="btn btn-primary">
                      </form>

                </div>
                <!-- /.container-fluid -->
@stop
