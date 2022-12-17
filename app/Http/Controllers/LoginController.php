<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //public function show(Request $request) {
    public function login()    {
        return view('login');
    }

    public function verify()    {
        return view('home');
    }
}
