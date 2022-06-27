<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lista_boleta;

class ListBoletasController extends Controller
{
    // Vista
    public function index(){
        
        return view('boletas.listar_boletas');
    }
}
