<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use App\Models\Permisos;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    // Vista
    public function index(User $user) {
        //$boletas = Boleta::all();
        $boletas = Boleta::get();
        $permisos = Permisos::get();
        $registros = Registro::get();
        return view('Registros.index', [
            'user' => $user,
            'boleta' => $boletas,
            'permiso' => $permisos,
            'registros' => $registros
        ]);
    }

    public function create(){
        return view('Registros.index');
    }

    // Registrar
    public function store(Request $request, User $user, Boleta $boleta){
        
        
        $permisos = Permisos::where('boleta_id', $boleta->id)->get();
        dd($permisos);
        
        $permisos->registros()->create([
            'horaRegreso' => $request->hora_final,      
            'permisos_id' => $permisos,
            'firmaRegistro' =>  $user -> dni
        ]);
        
        /*
        // ALMACENANDO registro con firma en DNI
        Registro::create([
            'horaRegreso' => $request->hora_final,
            'permisos_id' => $permisos->id,
            'firmaRegistro' =>  $user -> dni
        ]);
        */

        // Imprimiendo mensaje y redireccionando
        return back()->with('mensaje', 'Registro Firmado Correctamente');
        
    }
}
