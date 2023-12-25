@extends('admin.app')
@section('content')
    <div class="row">
        <div class="card p-3">
            <h2>Location List</h2>
            <table class="table table-sm text-small">
                <tr>
                    <th>ID</th>
                    <th>Location Name</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $location->id }}</td>
                        <td>{{ $location->name }}</td>
                        <td>{{ $location->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="">Edit</a>
                            <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </table>
        </div>
    </div>
@endsection