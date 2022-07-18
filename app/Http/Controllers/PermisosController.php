<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function index(User $user){
        $boletas = Boleta::get();
        //$boletas = Boleta::where('user_id', $user->id)->get();
        return view('Permisos.index', [
            'user' => $user,
            'boleta' => $boletas
        ]);
    }

    public function create(){
        return view('Permisos.index');
    }
}
