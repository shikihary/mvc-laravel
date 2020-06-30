<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showregister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->first_name." ".$request->last_name;
        return view('welcome', compact('data'));
    }
}
