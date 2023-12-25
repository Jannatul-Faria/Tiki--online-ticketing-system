<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $trips = Trip::all();
        return view('admin.pages.trip-list', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $trip = new Trip();
        $trip->to = $request->to;
        $trip->from = $request->from;
        $trip->journey_date = $request->journey_date;
        $trip->seat_no = $request->seat_no;
        $trip->save();

        session()->flash('message', 'Ticket purchase successful');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show( Trip $trip ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Trip $trip ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Trip $trip ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Trip $trip ) {
        //
    }
}
