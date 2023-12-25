<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
