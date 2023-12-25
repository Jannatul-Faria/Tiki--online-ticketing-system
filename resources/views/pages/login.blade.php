@extends('welcome')
@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Login Here</h4>
                        <form action="{{ route('access') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter Your Phone Number" value="{{old('phone')}}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>       
    </div>
    <div class="bg fixed-bottom">
        <marquee behavior="" direction="">
            <img class="img-fluid mt-3" src="{{asset('img/bus.png')}}" alt="">
        </marquee>
    </div>
@endsection