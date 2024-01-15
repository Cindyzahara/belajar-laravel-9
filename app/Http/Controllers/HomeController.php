<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderablex
     */
    public function index()
    {
        return view('home');
    }

    public function update_password()
    {
        $user = Auth::user();
        return view('update_password', compact('user'));
    }

    public function store_pasword(Request $request){

        $request->valiidate([
            'new_password' => 'required|min:8|confirmed'
        ]);

        Auth::user()->update([
            'new_password' => Hash::make($request->new_password)
        ]);

        return Redirect::back();
    }
}
