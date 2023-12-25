<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $seats = Seat::all();
        return view('admin.pages.seat-list', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.pages.seat-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $seat = new Seat();
        $seat->title = $request->title;
        $seat->save();

        session()->flash('message', 'Seat Added Successful');
        return redirect()->route('seat-list');
    }

    /**
     * Display the specified resource.
     */
    public function show( Seat $seat ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Seat $seat ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Seat $seat ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Seat $seat ) {
        //
    }
}
