<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $locations = Location::all();
        return view('admin.pages.location-list', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.pages.location-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $location = new Location();
        $location->name = $request->title;
        $location->save();

        session()->flash('message', 'Location Stored Successful');
        return redirect()->route('location-list');
    }

    /**
     * Display the specified resource.
     */
    public function show( Location $location ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Location $location ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Location $location ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Location $location ) {
        //
    }
}
