@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('booking')}}" method="POST">
            @csrf
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row mx-3 my-3">
                                <div class="col">
                                    <label class="fw-bold" for="to">To</label>
                                    <select class="form-select" name="to" id="" aria-label="Default select example" required>
                                        <option selected>Pickup Point</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="fw-bold" for="from">From</label>
                                    <select class="form-select" name="from" aria-label="Default select example" required>
                                        <option selected>Dropping Point</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label class="fw-bold" for="journey_date">Journey Date</label>
                                    <input class="form-control" name="journey_date" type="date"id="journey_date" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success px-5"></i> Buy Tickets</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 text-center">Gate</div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5 text-center">
                                    <i class="far fa-circle"></i>
                                </div>
                                <div class="py-3"></div>
                                <div class="text-center fw-bold">Select You Seat</div>
                                @foreach ($seats as $seat)
                                    <div class="col-md-3"><input type="checkbox" name="seat_no[]" value="{{$seat->title}}"
                                        @foreach ($trips as $trip)
                                            @foreach ($trip->seat_no as $item)
                                                @if ($seat->title == $item)
                                                    checked disabled
                                                @endif
                                            @endforeach
                                        @endforeach
                                        >{{ $seat->title }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </form>      
    </div>
    <div class="bg fixed-bottom">
        <marquee behavior="" direction="">
            <img class="img-fluid mt-3" src="{{asset('img/bus.png')}}" alt="">
        </marquee>
    </div>
@endsection