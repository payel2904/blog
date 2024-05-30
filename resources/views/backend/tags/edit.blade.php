@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tags Edit</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tags.update', $singleTag->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name </label>
                    <input type="text" class="form-control" name="name" value="{{ $singleTag->name }}" id="exampleFormControlInput1" placeholder="write your title">
                </div>
                <button type="submit" class="btn btn-primary ">Save</button>
            </form>
        </div>
    </div>



@stop
