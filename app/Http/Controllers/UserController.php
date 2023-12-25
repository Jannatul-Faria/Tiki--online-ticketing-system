<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {

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

        $validated = $request->validate( [
            'name'     => 'required',
            'email'    => 'required|unique:users',
            'phone'    => 'required|unique:users',
            'password' => 'required',
            'address'  => 'required',
        ] );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt( $request->password );
        $user->save();

        session()->flash( 'message', 'Registration Successful' );
        return redirect()->route('bus');
    }

    /**
     * Display the specified resource.
     */
    public function check( Request $request ) {
        
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            // Authentication succeeded...
            session()->flash('message', 'Login Successful');
            return redirect()->route('bus');
        } else {
            // Authentication failed...
            session()->flash('message', 'Login Failed');
            return redirect()->back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout( Request $request ) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
