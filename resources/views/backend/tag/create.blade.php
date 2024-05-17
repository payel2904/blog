@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tags Create</h1>
    </div>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write your title">
        </div>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary ">Submit</a>
    </form>

@stop
