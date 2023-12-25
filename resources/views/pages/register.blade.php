@extends('welcome')
@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Register Here</h4>
                        <form class="row g-3" method="POST" action="{{ route('userStore') }}">
                            @csrf
                            <div class="col-md-6">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword4">
                              </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Address</label>
                              <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Shawrapara, Dhaka, Bangladesh">
                            </div>
                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>       
    </div>
    <div class="bg fixed-bottom">
        <marquee behavior="" direction="">
            <img class="img-fluid mt-3" src="{{asset('img/bus.png')}}" alt="">
        </marquee>
    </div>
@endsection