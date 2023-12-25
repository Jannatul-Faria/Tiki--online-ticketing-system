@extends('admin.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{route('seat-store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Buss Seat Add - Max:36</h4>
                        <p class="card-text">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                            <button class="btn btn-success my-3" type="submit">Submit</button>
                        </p>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection