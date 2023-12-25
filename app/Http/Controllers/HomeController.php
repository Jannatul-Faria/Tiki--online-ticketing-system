<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function index() {
        return view('home');
    }

    public function about() {
        return view('pages.about');
    }

    public function bus() {
        if (Auth::check()) {
            $seats = Seat::all();
            $locations = Location::all();
            $trips = Trip::all();
            // return $seats_no;
            // return $to;
            return view('pages.bus', compact('seats', 'locations', 'trips'));
        }
        return redirect()->route('login');
        
    }

    public function login() {
        return view('pages.login');
    }

    public function register() {
        return view('pages.register');
    }
}
