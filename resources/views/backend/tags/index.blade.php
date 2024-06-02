@extends('layouts.backend_layouts')
@section('main_content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tags</h1>
        <a href="{{ route('tags.create') }}" class="btn btn-primary">Add new</a>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <table class="table">
        <thead>
        <tr>
            <th  scope="col">name</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allTags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td>
                <a href="{{ route('tags.show',$tag->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {!! $allTags->links() !!}
@stop
