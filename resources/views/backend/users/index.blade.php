@extends('layouts.backend_layouts')
@section('main_content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Add New</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>

                            <form action="{{ route('users.destroy', $user->id) }}" class="d-inline-block" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->links() !!}
        </div>
    </div>

@stop   
