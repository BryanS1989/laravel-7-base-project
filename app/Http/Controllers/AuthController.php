<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login (Request $request) {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return view('home');
    }
}
