<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use App\Models\Permisos;
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

    public function store(User $user, Boleta $boleta ){
        
        // ALMACENANDO registro con firma en DNI
        Permisos::create([
            'user_id' => $user -> id,
            'boleta_id' => $boleta -> id,
            'firma' =>  $user -> dni
        ]);


        // Imprimiendo mensaje y redireccionando
        return back()->with('mensaje', 'Registro Firmado Correctamente');
    }
}
