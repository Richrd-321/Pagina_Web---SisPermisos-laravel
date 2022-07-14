@extends('layouts.app')

@section('titulo')
    Boleta de Autorizacion de Salida 
@endsection

@section('cabecera')
    <form method="GET" action="{{ route('posts.index', auth()->user())}}">
        <button type="submit" class="flex items-center gap-2 bg-white border p-2 rounded font-bold uppercase text-gray-600 text-sm" href="{{ route('posts.index', auth()->user())}}">
            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M136.3 226.2l176 151.1c15.38 13.3 39.69 2.545 39.69-18.16V275.1c108.5 12.58 151.1 58.79 112.6 181.9c-5.031 16.09 14.41 28.56 28.06 18.62c43.75-31.81 83.34-92.69 83.34-154.1c0-131.3-94.86-173.2-224-183.5V56.02c0-20.67-24.28-31.46-39.69-18.16L136.3 189.9C125.2 199.4 125.2 216.6 136.3 226.2zM8.31 226.2l176 151.1c15.38 13.3 39.69 2.545 39.69-18.16v-15.83L66.33 208l157.7-136.2V56.02c0-20.67-24.28-31.46-39.69-18.16l-176 151.1C-2.77 199.4-2.77 216.6 8.31 226.2z"/></svg>
            Volver
        </button>
    </form>    
@endsection

@section('contenido')


    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <!--    BOLETA DE AUTORIZACION DE SALIDA -->

        <!--    REGISTRO  -->

        <div class="form-group mb-6">
            <h4 class="text-center">DATOS:</h4>
            <form action="{{ route('boletas.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <!--    NOMBRES  -->
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-user input-group-text"></i>
                        <label for="nombre" class="block uppercase font-bold">Nombres</label>  
                    </div>
                        
                    <input 
                        id="nombre"
                        type="text"
                        placeholder="Tu Nombre"
                        name="nombre"
                        class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror"
                        value="{{ $user->nombres }} {{ $user->apellidos }}"
                    />
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                
                    
                <!--    CALENDARIO  -->
                <div class="mb-5">
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-calendar input-group-text"></i>
                        <label for="fecha" class="block uppercase font-bold">Fecha</label>
                    </div>
                    
                    <input 
                        type="datetime-local" 
                        name="fecha" 
                        class="form-control" 
                        placeholder="Tu Fecha"
                        aria-describedby="basic-addon1"
                    />
                </div>

                <!--    OFICINA  -->
                <div class="mb-5">
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-solid fa-building input-group-text"></i>
                        <label for="oficina" class="block uppercase font-bold">Oficina</label>  
                    </div>

                    <input 
                        type="text" 
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                        name="oficina" 
                        placeholder="Tu Oficina" 
                        value="{{ $user->oficina }}"
                    />
                    @error('oficina')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <!--    MOTIVO      -->

                <h4 class="text-center"> MOTIVO: </h4>

                <div class="mb-5">
                    <!--    CHECKOUT - ENFERMEDAD-->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="exampleRadios1"
                            value="Enfermedad" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Enfermedad
                        </label>
                    </div>

                    <!--    CHECKOUT - COMISION-->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="exampleRadios1" value="Comisión"
                            checked>

                        <label class="form-check-label" for="exampleRadios1">
                            Comision
                        </label>
                    </div>

                    <!--    CHECKOUT - PERMISO-->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="exampleRadios1" value="Permiso"
                            checked>

                        <label class="form-check-label" for="exampleRadios1">
                            Permiso
                        </label>
                    </div>

                    <!--    CHECKOUT - OTROS-->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="motivo" id="exampleRadios1" value="Otros"
                            checked>

                        <label class="form-check-label" for="exampleRadios1">
                            Otros
                        </label>
                    </div>
                </div>
                

                <!--    MENSAJE  -->

                <div class="mb-5">
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-pencil-alt input-group-text"></i>
                        <label for="mensaje" class="block uppercase font-bold">Mensaje</label>  
                    </div>
                    <textarea name="mensaje" cols="20" rows="5" placeholder="Tu Mensaje"
                        class="form-control"></textarea>
                </div>
                    
                <!--    BOTON ENVIAR      -->
                <div class="text-center p-4">
                    <button 
                        type="submit"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                        uppercase w-full font-bold p-4 text-white rounded-lg"
                        >
                        Enviar Boleta

                    </button>
                </div>
                    
                
            
            </form>
        </div>
    </div>
@endsection