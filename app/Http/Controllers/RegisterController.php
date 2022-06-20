<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //dd($request);

        // Validacion
        $this->validate($request, [
            'name' => 'required|min:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required'
        ]);
    }

    
}
