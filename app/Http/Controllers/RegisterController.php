<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //dd($request);

        // Mosificar el Request
        //$request->request->add(['username' => Str::slug($request->username)]);

        // Validacion
        $this->validate($request, [
            'nombres' => 'required|max:60',
            'apellidos' => 'required|max:60',
            'oficina' => 'required|max:60',
            'cargo' => 'required|max:60',
            'dni' => 'required|unique:users|max:8',
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required|confirmed|min:4'
        ]);

        
        User::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'oficina' => $request->oficina,
            'cargo' => $request->cargo,
            'dni' => $request->dni,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        /*
        $request->user()->create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'oficina' => $request->oficina,
            'cargo' => $request->cargo,
            'dni' => $request->dni,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        */
        // Autenticar un usuario
        /*
        auth()->attempt([  
            'email' => $request->email,
            'password' => $request->password
        ]);
        */
        // Otra forma de autenticar
        auth()->attempt($request->only('email', 'password'));

        // Redireccionar
        return redirect()->route('posts.index', auth()->user()->nombres);

    }

    
}
