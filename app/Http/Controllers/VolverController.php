<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VolverController extends Controller
{
    public function index(User $user)
    {
        //$boletas = Boleta::where('user_id', $user->id)->get();

        return view('layouts.dashboard', [
            'user' => $user
            //'boletas' => $boletas
        ]);
    }
}
