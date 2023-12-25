@extends('admin.app')
@section('content')
    <div class="row">
        <div class="card p-3">
            <h2>Trip List</h2>
            <table class="table table-sm text-small">
                <tr>
                    <th>ID</th>
                    <th>To</th>
                    <th>From</th>
                    <th>Journey Date</th>
                    <th>Seat No</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->to }}</td>
                        <td>{{ $trip->from }}</td>
                        <td>{{ $trip->Journey_date }}</td>
                        <td> 
                            @foreach($trip->seat_no as $seat)
                                {{ $seat }},
                            @endforeach
                        </td>
                        <td>{{ $trip->created_at }}</td>
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