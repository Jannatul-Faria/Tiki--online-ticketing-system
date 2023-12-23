<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function form(){
        return view("Pages.form");
    }
}
