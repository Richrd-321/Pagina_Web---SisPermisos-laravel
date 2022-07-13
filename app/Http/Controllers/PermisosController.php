<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function index($id){
        $user = User::find($id);
        $boleta = Boleta::where('user_id', $user->id)->get();
        return view('permisos.index', [
            'user' => $user,
            'boletas' => $boleta
        ]);
    }
}
