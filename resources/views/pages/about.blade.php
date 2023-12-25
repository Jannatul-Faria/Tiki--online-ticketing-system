@extends('welcome')
@section('content')
    <div class="container">
        <div class="py-5 text-light">
            <h2 class="text-center">About</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore consectetur quam facere ipsam veniam? Autem corrupti ratione dignissimos obcaecati praesentium, itaque nihil voluptatibus ipsa eveniet repellendus omnis eius. Sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque placeat numquam rerum nam, ipsa mollitia asperiores unde a quam ea vero dolore alias temporibus molestiae, blanditiis voluptates praesentium! Eligendi, quisquam?</p>
        </div>       
    </div>
    <div class="bg fixed-bottom">
        <marquee behavior="" direction="">
            <img class="img-fluid mt-3" src="{{asset('img/bus.png')}}" alt="">
        </marquee>
    </div>
@endsection