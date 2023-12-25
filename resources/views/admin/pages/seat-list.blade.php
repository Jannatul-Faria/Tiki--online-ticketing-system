@extends('admin.app')
@section('content')
    <div class="row">
        <div class="card p-3">
            <h2>Bus Seats</h2>
            <table class="table table-sm text-small">
                <tr>
                    <th>ID</th>
                    <th>Seat Title</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @foreach ($seats as $seat)
                    <tr>
                        <td>{{ $seat->id }}</td>
                        <td>{{ $seat->title }}</td>
                        <td>{{ $seat->created_at }}</td>
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