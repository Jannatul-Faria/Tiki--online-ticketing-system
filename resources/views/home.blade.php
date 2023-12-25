@extends('welcome')
@section('content')
<section class="header">
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-md-6 text-light">
                <h1 class="display-4">Get Your Ticket Online, Easy and Safely</h1>
                <button class="btn btn-success text-uppercase mt-2">get ticket now</button>
            </div>
            <div class="col-md-6">
                <h4 class=" text-capitalize text-light">chose Your ticket</h4>
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <form action="" method="post">  
                            <div class="row mx-3 my-3">
                                <div class="col">
                                    <select class="form-select" name="" id="" aria-label="Default select example" required>
                                        <option selected>Pickup Point</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="comilla">Comilla</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="coxs">Cox's Bazaar</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" required>
                                        <option selected>Dropping Point</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="comilla">Comilla</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="coxs">Cox's Bazaar</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <input class="form-control" type="date" name="" id="" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{route('bus')}}" class="btn btn-success px-5"><i class="fas fa-ticket-alt"></i> Find Tickets</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <marquee behavior="" direction="">
            <img class="img-fluid mt-3" src="{{asset('img/bus.png')}}" alt="">
        </marquee>
    </div>
</section>
@endsection