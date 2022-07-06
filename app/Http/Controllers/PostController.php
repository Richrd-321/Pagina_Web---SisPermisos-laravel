<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //public function index(User $user)
    public function index(User $user)
    {
        $boletas = Boleta::where('user_id', $user->id)->get();

        return view('layouts.dashboard', [
            'user' => $user,
            'boletas' => $boletas
        ]);
    }
}
