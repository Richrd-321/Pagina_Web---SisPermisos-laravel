<?php

namespace App\Http\Controllers;

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
    public function index(){
        $boletas = Boleta::all();
        return view('boletas.boleta', ['boletas' => $boletas]);
    }

    // Validacion
    public function store(Request $request){
        $request ->validate([
            'nombre' => 'required|min:3',
            'oficina' => 'required|min:3',
            'mensaje' => 'required|min:3'
        ]);

        // Creamos el Objeto
        $boletas = new Boleta;
        $boletas->nombre = $request->nombre;
        $boletas->fecha = $request->fecha;
        $boletas->oficina = $request->oficina;
        $boletas->motivo = $request->motivo;
        $boletas->mensaje = $request->mensaje;
        $boletas->save();

        // Redirigiendo al usuario
        return redirect()->route('boletas')->with('success', 'Boleta guardada correctamente');
    }

    public function show($id){
        $boletas = Boleta::find($id);
        return view('boletas.show', ['boletas' => $boletas]);
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
