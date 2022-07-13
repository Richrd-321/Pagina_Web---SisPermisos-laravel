<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boleta;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    /**
     * index => para mostrar todos los "boletas"
     * store => para guardar un todo - INSERT
     * update => para actualizar un todo
     * destroy => para eliminar un todo
     * edit => para mostrar el formulario de edicion
     */
    
    
     // Vista
    public function index(User $user){
        //$boletas = Boleta::all();
        $boletas = Boleta::where('user_id', $user->id)->get();
        return view('boletas.boleta', [
            'user' => $user,
            'boletas' => $boletas
        ]);
    }

    public function create(){
        return view('boletas.boleta');
    }

    // Validacion
    public function store(Request $request){
        $request ->validate([
            'nombre' => 'required|min:3',
            'oficina' => 'required|min:3',
            'mensaje' => 'required|min:3'
        ]);

        // Creamos el Objeto
        /*
        $boletas = new Boleta;
        $boletas->nombre = $request->nombre;
        $boletas->fecha = $request->fecha;
        $boletas->oficina = $request->oficina;
        $boletas->motivo = $request->motivo;
        $boletas->mensaje = $request->mensaje;
        $boletas->user_id = auth()->user()->id;
        $boletas->save();
        */
        /*
        // Validacion de Usuario
        Boleta::create([
            'nombre'=> $request->nombre,
            'fecha'=> $request->fecha,
            'oficina'=> $request->oficina,
            'motivo'=> $request->motivo,
            'mensaje'=> $request->mensaje,
            'user_id'=> auth()->user()->id,
        ]);
        */

        $request->user()->boletas()->create([
            'nombre'=> $request->nombre,
            'fecha'=> $request->fecha,
            'oficina'=> $request->oficina,
            'motivo'=> $request->motivo,
            'mensaje'=> $request->mensaje,
            'user_id'=> auth()->user()->id
        ]);
        // Redirigiendo al usuario
        //return redirect()->route('boletas')->with('success', 'Boleta guardada correctamente');
        return redirect()->route('posts.index', auth()->user()->nombres)->with('success', 'Boleta guardada correctamente');
    }

    public function show($id){
        $boletas = Boleta::findOrFail($id);
        return redirect()->route('boletas.show', ['boletas' => $boletas]);
    }

    public function edit($id){
        $boleta = Boleta::findOrFail($id);
        return redirect()->route('posts.index', auth()->user()->nombres);
    }

    public function update(){
        $boletas = Boleta::all();
        return view('boletas.index', ['boletas' => $boletas]);
    }

    public function destroy(){
        $boletas = Boleta::all();
        return view('boletas.index', ['boletas' => $boletas]);
    }
}
