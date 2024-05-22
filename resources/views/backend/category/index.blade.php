@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">category</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add new</a>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div class="card">
        <div class="card-body p-0 py-2">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->name }}</th>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-secondary">View</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" class="d-inline-block"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>

            {!! $categories->links() !!}

        </div>
    </div>

@stop
