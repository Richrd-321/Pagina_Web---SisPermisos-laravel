@extends('layouts.app')

@section('titulo')
    Actualizar Boleta
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
<div class="block p-6 rounded-lg shadow-lg bg-white max-w">
    <!--    BOLETA DE AUTORIZACION DE SALIDA -->

    <!--    REGISTRO  -->

    <h4 class="text-center mb-4">DATOS:</h4>
    <form action="{{ route('boletas.update', $boleta->id) }}" method="POST" class="formulario-editar">
        @csrf
        @method('PUT')
        
        <div class="row">
            <!--    NOMBRES Y APELLIDOS-->
            <div class="col-7">
                <div class="mb-5">
                    
                    <div class="flex gap-3 items-center">
                        <i class="fas fa-user input-group-text"></i>
                        <label for="nombre" class="block uppercase font-bold">Nombres y Apellidos</label>  
                    </div>
                        
                    <input 
                        id="nombre"
                        type="text"
                        placeholder="Tu Nombre"
                        name="nombre"
                        class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror"
                        value="{{ $boleta->nombre }}"
                    />
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!--    OFICINA  -->
            <div class="col-5">
                
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
                        value="{{ $boleta->oficina }}"
                    />
                    @error('oficina')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row flex justify-between">

                <!--    CALENDARIO  -->
                <div class="col-4">          
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-calendar input-group-text"></i>
                            <label for="fecha" class="block uppercase font-bold">Nueva - Fecha</label>
                        </div>
                        
                        <input 
                            type="date" 
                            name="fecha" 
                            class="form-control" 
                            placeholder="Tu Fecha"
                            aria-describedby="basic-addon1"
                        />
                    </div>
                </div>
    
                <!--    HORA INICIO  -->
                <div class="col-3">
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-clock input-group-text"></i>
                            <label for="fecha" class="block uppercase font-bold">Hora inicial</label>
                        </div>
                        
                        <input 
                            type="time" 
                            name="Hora_inicio" 
                            class="form-control" 
                            min="08:00"
                            max="16:50"
                            required
                        />
                    </div>
                </div>
    
                <!--    HORA FINAL  -->
                <div class="col-3">
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-clock input-group-text"></i>
                            <label for="fecha" class="block uppercase font-bold">Hora Final</label>
                        </div>
                        
                        <input 
                            type="time" 
                            name="Hora_final" 
                            class="form-control" 
                            min="08:00"
                            max="16:50"
                            required
                        />
                    </div>
                </div>
            </div>
        </div>

        <!--    MOTIVO      -->
        
        <h4 class="text-center mb-4"> MOTIVO: </h4>

        

        <div class="container">
            <div class="row flex justify-around">
                <div class="col-5">
                    <div class="flex gap-3 items-center">
                        <label for="mensaje" class="block uppercase font-bold">Opciones:</label>  
                    </div>
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
                </div>

                <!--    MENSAJE  -->
                <div class="col-7">

                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-pencil-alt input-group-text"></i>
                            <label for="mensaje" class="block uppercase font-bold">Mensaje</label>  
                        </div>
                        <textarea name="mensaje" cols="20" rows="5" placeholder="Tu Nuevo Mensaje" 
                            class="form-control">{{ $boleta->mensaje }}                       
                            
                        </textarea>
                    </div>
                </div>
            </div>
        </div>    
            
        <!--    BOTON ENVIAR      -->
        <div class="text-center p-4">
            <button 
                type="submit"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                uppercase w-full font-bold p-4 text-white rounded-lg"
                >
                Actualizar Boleta

            </button>
        </div>
            
        
    
    </form>
</div>
@endsection

@section('JS')
    <!--    SWEET ALERT 2   -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $('.formulario-editar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Acualizado!',
                text: '¡La boleta se actualizó con éxito!',
            }).then((result) => {
                if (result.isConfirmed){
                    this.submit();
                }
            }) 

            
        });
        
    </script>
@endsection