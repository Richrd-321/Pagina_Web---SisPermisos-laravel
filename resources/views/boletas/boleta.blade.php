@extends('layouts.app')

@section('titulo')
    Boleta de Autorizacion de Salida
@endsection

@section('contenido')


    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <!--    BOLETA DE AUTORIZACION DE SALIDA -->

        <!--    REGISTRO  -->
        <div class="form-group mb-6">
            <h4 class="text-center">DATOS:</h4>
            <form action="{{ route('boletas')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <!--    NOMBRE  -->
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-user input-group-text"></i>
                        <label for="name" class="block uppercase font-bold">Nombre</label>  
                    </div>
                        
                    <input 
                        id="nombre"
                        type="text"
                        placeholder="Tu Nombre"
                        name="nombre"
                        class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror"
                        value="{{ old('nombre') }}"
                    />
                    @error('name')
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
                        aria-describedby="basic-addon1"
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