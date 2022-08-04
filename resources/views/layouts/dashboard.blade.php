@extends('layouts.app')

@section('titulo')
    Bienvenido: {{$user->nombres}}
@endsection

@section('cabecera')
    
    @if ($user->cargo==='Empleado')
        <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm
        uppercase font-bold cursor-pointer" href="{{ route('boletas.index', $user) }}">
            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>

            Crear Boleta
        </a>
    @else
        @if ($user->cargo=='Jefe')
            <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm
            uppercase font-bold cursor-pointer" href="{{ route('permisos.index', ['user' => $user, 'boleta' => $user->boletas]) }}">
            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0v128h128L256 0zM288 256H96v64h192V256zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM64 72C64 67.63 67.63 64 72 64h80C156.4 64 160 67.63 160 72v16C160 92.38 156.4 96 152 96h-80C67.63 96 64 92.38 64 88V72zM64 136C64 131.6 67.63 128 72 128h80C156.4 128 160 131.6 160 136v16C160 156.4 156.4 160 152 160h-80C67.63 160 64 156.4 64 152V136zM320 440c0 4.375-3.625 8-8 8h-80C227.6 448 224 444.4 224 440v-16c0-4.375 3.625-8 8-8h80c4.375 0 8 3.625 8 8V440zM320 240v96c0 8.875-7.125 16-16 16h-224C71.13 352 64 344.9 64 336v-96C64 231.1 71.13 224 80 224h224C312.9 224 320 231.1 320 240z"/></svg>

                Firmar Boletas
            </a>

            <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm
            uppercase font-bold cursor-pointer" href="{{ route('boletas.index', $user) }}">
                <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>

                Crear Boleta
            </a>
        @else
            @if ($user->cargo=='Administrador')
                <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm
                uppercase font-bold cursor-pointer" href="{{ route('registros.index', ['user' => $user, 'boleta' => $boletas]) }}">
                <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0v128h128L256 0zM288 256H96v64h192V256zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM64 72C64 67.63 67.63 64 72 64h80C156.4 64 160 67.63 160 72v16C160 92.38 156.4 96 152 96h-80C67.63 96 64 92.38 64 88V72zM64 136C64 131.6 67.63 128 72 128h80C156.4 128 160 131.6 160 136v16C160 156.4 156.4 160 152 160h-80C67.63 160 64 156.4 64 152V136zM320 440c0 4.375-3.625 8-8 8h-80C227.6 448 224 444.4 224 440v-16c0-4.375 3.625-8 8-8h80c4.375 0 8 3.625 8 8V440zM320 240v96c0 8.875-7.125 16-16 16h-224C71.13 352 64 344.9 64 336v-96C64 231.1 71.13 224 80 224h224C312.9 224 320 231.1 320 240z"/></svg>

                    Registrar Permisos
                </a>

                <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm
                uppercase font-bold cursor-pointer" href="{{ route('boletas.index', $user) }}">
                    <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z"/></svg>

                    Crear Boleta
                </a>
            @else
                
            @endif
        @endif
    @endif

    



    <!--
    <a class="font-bold text-gray-600 text-sm" href="#">
        Hola: <span class="font-normal">{{ auth()->user()->username}}</span>
    </a>
    -->


@endsection


@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen usuario"/>
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex-col items-center md:justify-center md:items-start py-10 md:py-10">

                <p class="text-gray-700 text-1xl">
                    {{ $user->email }}
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    
                    {{$permisos->count()}}
                    <span class="font-normal">Nro de Permisos</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{$user->boletas->count()}}
                    <span class="font-normal">Nro de Boletas</span>
                </p>

            </div>
        </div>
    </div>

    <!-- ================================================================= SECCION - LISTA DE BOLETAS ========================================== -->
    <section class="block p-6 rounded-lg shadow-lg bg-white max-w mb-20">



        @if ($user->boletas->count())
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Boletas</h2>
                
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="boletas">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Oficina</th>
                                <th>Motivo</th>
                                <th>Firma</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($user->boletas as $boleta)
                                <tr>
                                    
                                    <td>{{$boleta->id}}</td>
                                    <td>{{$boleta->nombre}}</td>
                                    <td>{{$boleta->oficina}}</td>
                                    <td>{{$boleta->motivo}}</td>
                                    <td>
                                        <fieldset disabled="disabled">
                                            @if ($boleta->permisos->count())
                                                
                                                <input type="button" value="Firmado" style="color:Black; display:flex; justify-content: center; background-color: rgb(219, 123, 13); padding: 0.5rem">
                                                
                                                    
                                                        
                                            @else
                                                <input type="button" value="Sin Firmar" style="color:Black; display:flex; justify-content: center; background-color: #1E90FF; padding: 0.5rem">
                                            @endif     
                                        </fieldset>         
                                    </td>
                                    <td class="td-actions text-center;">
                                        <!--    ACCIONES    -->
                                        <div class="row d-flex items-center"> 
                                            <div class="col d-flex justify-content-sm-center gap-1">
                                                <!--    ACCION VER    -->
                                                <a class="btn btn-info hero__cta" data-bs-toggle="modal" data-bs-target="#miModal" href="{{ route('boletas.show', $boleta) }}">
                                                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                                                </a>
                                                 
                                                <!--    MODAL   -   COOKIES -->
                                                <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #2271b3 !important;">
                                                                <!--    TITULO  -->
                                                                <h4 class="modal-title" id="modalTitle" style="color: #fff; text-align: center;">
                                                                    Detalles de la Boleta 
                                                                </h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
    
    
                                                            <div class="modal-body block bg-white ">
                                                                <!--    BOLETA DE AUTORIZACION DE SALIDA -->
                                                            
                                                                <!--    REGISTRO  -->
                                                            
                                                                <h4 class="text-center">DATOS:</h4>
                                                                <form action="#" method="GET">
                                                                    @csrf
                                                                    
                                                                    <div class="mb-5">
                                                                        <!--    NOMBRES  -->
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
                                                                            value="{{ $boleta->nombre}}"
                                                                        />
                                                                    </div>
                                                            
                                                                    
                                                                        
                                                                    <!--    CALENDARIO  -->
                                                                    <div class="mb-5">
                                                                        <div class="flex gap-3 items-center">
                                                                            <i class="fas fa-calendar input-group-text"></i>
                                                                            <label for="fecha" class="block uppercase font-bold">Nueva - Fecha</label>
                                                                        </div>
                                                                        
                                                                        <input 
                                                                            type="text" 
                                                                            name="fecha" 
                                                                            class="form-control" 
                                                                            value="{{ $boleta->fecha}}"
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
                                                                            value="{{ $boleta->oficina}}"
                                                                        />
                                                                        
                                                                    </div>
                                                                
                                                                    <!--    MOTIVO      -->
                                                            
                                                                    <h4 class="text-center"> MOTIVO: </h4>
                                                            
                                                                    <div class="mb-5">
                                                                        <div class="flex gap-3 items-center">
                                                                            <i class="fas fa-solid fa-building input-group-text"></i>
                                                                            <label for="oficina" class="block uppercase font-bold">Opcion</label>  
                                                                        </div>
                                                            
                                                                        <input 
                                                                            type="text" 
                                                                            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                                                                            name="oficina" 
                                                                            placeholder="Tu Oficina" 
                                                                            value="{{ $boleta->motivo}}"
                                                                        />
                                                                    </div>
                                                                    
                                                            
                                                                    <!--    MENSAJE  -->
                                                            
                                                                    <div class="mb-5">
                                                                        <div class="flex gap-3 items-center">
                                                                            <i class="fas fa-pencil-alt input-group-text"></i>
                                                                            <label for="mensaje" class="block uppercase font-bold">Mensaje</label>  
                                                                        </div>
                                                                        <textarea name="mensaje" cols="20" rows="5" placeholder="Tu Mensaje"
                                                                            class="form-control">{{ $boleta->mensaje}}
                                                                        </textarea>
                                                                    </div>
                                                                        
                                                                    
                                                                        
                                                                    
                                                                
                                                                </form>
                                                            </div>
                                                        </div>
                                                            
                                                        
                                                    </div>
                                                    
                                                </div>  
                                                
                                                <!--    ACCION EDITAR    -->
                                                <a class="btn btn-warning" href="{{ route('boletas.edit', $boleta) }}"><svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/></svg></a>
                                                <!--    ACCION ELIMINAR    -->
                                                <form action="{{ route('boletas.delete', $boleta->id) }}" class="d-inline formulario-eliminar" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                         <button class="btn btn-danger" type="submit" rel="tooltip"><svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg></button>
                                                </form>
                                                
                                            </div>          
                                        </div>
                                                       
                                    </td>
                                </tr>                       
                            @endforeach
                        </tbody>
            
                    </table>    
                </div>
            </div>

        @else
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Boletas</h2>
            <p class="text-gray-800 uppercase text-md text-center font-bold">No hay Boletas Generadas..!</p>
        @endif

    </section>


 <!-- ================================================================= SECCION - LISTA DE PERMISOS ========================================== -->
    <section class="block p-6 rounded-lg shadow-lg bg-white max-w mt-10">

        <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Permisos</h2>

        @if ($permisos->count())
                    
                        
                    
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-bordered" id="permisos">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Fecha</th>                             
                                        <th>Motivo</th>
                                        <th>Firma</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                
                                <tbody>
                                    @foreach ($user->boletas as $boleta)                                    
                                        <tr>
                                            <td>{{$boleta->id}}</td>
                                            <td>{{$boleta->nombre}}</td>
                                            <td>{{$boleta->fecha}}</td>
                                            <td>{{$boleta->motivo}}</td>
                                            <td>
                                                <fieldset disabled="disabled">
                                                    @if ($boleta->permisos->count())
                                                        
                                                        <input type="button" value="Firmado" style="color:Black; display:flex; justify-content: center; background-color: rgb(219, 123, 13); padding: 0.5rem">
     
                                                                
                                                    @else
                                                        <input type="button" value="Sin Firmar" style="color:Black; display:flex; justify-content: center; background-color: #1E90FF; padding: 0.5rem">
                                                    @endif     
                                                </fieldset>    
                                            </td>
                                            <td>
                                                <!--    ACCIONES    -->
                                                <div class="row d-flex items-center"> 
                                                    <div class="col d-flex justify-content-sm-center gap-1">
                                                        <!--    ACCION VER    -->
                                                        <a class="btn btn-info hero__cta" data-bs-toggle="modal" data-bs-target="#miModal" href="{{ route('boletas.show', $boleta) }}">
                                                            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                                                        </a>
                                                        
                                                        <!--    MODAL   -   COOKIES -->
                                                        <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: #2271b3 !important;">
                                                                        <!--    TITULO  -->
                                                                        <h4 class="modal-title" id="modalTitle" style="color: #fff; text-align: center;">
                                                                            Detalles de la Boleta 
                                                                        </h4>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
            
            
                                                                    <div class="modal-body block bg-white ">
                                                                        <!--    BOLETA DE AUTORIZACION DE SALIDA -->
                                                                    
                                                                        <!--    REGISTRO  -->
                                                                    
                                                                        <h4 class="text-center">DATOS:</h4>
                                                                        <form action="#" method="GET">
                                                                            @csrf
                                                                            
                                                                            <div class="mb-5">
                                                                                <!--    NOMBRES  -->
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
                                                                                    value="{{ $boleta->nombre}}"
                                                                                />
                                                                            </div>
                                                                    
                                                                            
                                                                                
                                                                            <!--    CALENDARIO  -->
                                                                            <div class="mb-5">
                                                                                <div class="flex gap-3 items-center">
                                                                                    <i class="fas fa-calendar input-group-text"></i>
                                                                                    <label for="fecha" class="block uppercase font-bold">Nueva - Fecha</label>
                                                                                </div>
                                                                                
                                                                                <input 
                                                                                    type="text" 
                                                                                    name="fecha" 
                                                                                    class="form-control" 
                                                                                    value="{{ $boleta->fecha}}"
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
                                                                                    value="{{ $boleta->oficina}}"
                                                                                />
                                                                                
                                                                            </div>
                                                                        
                                                                            <!--    MOTIVO      -->
                                                                    
                                                                            <h4 class="text-center"> MOTIVO: </h4>
                                                                    
                                                                            <div class="mb-5">
                                                                                <div class="flex gap-3 items-center">
                                                                                    <i class="fas fa-solid fa-building input-group-text"></i>
                                                                                    <label for="oficina" class="block uppercase font-bold">Opcion</label>  
                                                                                </div>
                                                                    
                                                                                <input 
                                                                                    type="text" 
                                                                                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                                                                                    name="oficina" 
                                                                                    placeholder="Tu Oficina" 
                                                                                    value="{{ $boleta->motivo}}"
                                                                                />
                                                                            </div>
                                                                            
                                                                    
                                                                            <!--    MENSAJE  -->
                                                                    
                                                                            <div class="mb-5">
                                                                                <div class="flex gap-3 items-center">
                                                                                    <i class="fas fa-pencil-alt input-group-text"></i>
                                                                                    <label for="mensaje" class="block uppercase font-bold">Mensaje</label>  
                                                                                </div>
                                                                                <textarea name="mensaje" cols="20" rows="5" placeholder="Tu Mensaje"
                                                                                    class="form-control">{{ $boleta->mensaje}}
                                                                                </textarea>
                                                                            </div>
                                                                                
                                                                            
                                                                                
                                                                            
                                                                        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                    
                                                                
                                                            </div>
                                                            
                                                        </div>  
                                                        
                                                        
                                                        
                                                        
                                                    </div>          
                                                </div>
                                                
                                            
                                            </td>                                                
                                        </tr>  
                                    @endforeach                      
                                </tbody>
                    
                            </table>   
                            
                        </div>
                    </div>
            
                @else
                    <p class="text-gray-800 uppercase text-md text-center font-bold">No hay Permisos Firmados..!</p>
                @endif
            

    </section>
    

@endsection

  
@section('JS')

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
    <!--    SCRIPT  -   MODAL   -->
    <script src="resources/js/modal.js"></script>

    <script>
        $('#boletas').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ Boletas por Página",
                "zeroRecords": "Nada Encontrado - Disculpa",
                "info": "Mostrando la Página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ Boletas Totales)",
                "search": "Buscar",
                "paginate": {
                    'next': 'siguiente',
                    'previous': 'anterior'
                }
            }
        });

        $('#permisos').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ Boletas por Página",
                "zeroRecords": "Nada Encontrado - Disculpa",
                "info": "Mostrando la Página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ Boletas Totales)",
                "search": "Buscar",
                "paginate": {
                    'next': 'siguiente',
                    'previous': 'anterior'
                }
            }
        });
    </script>

    <!--    SWEET ALERT 2   -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!--
    @if (session('eliminar'))
        <script>
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        </script>
    @endif

    -->
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Esta boleta se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.isConfirmed) {
                    /*
                    */
                    Swal.fire(
                    '¡Eliminado!',
                    'La boleta se eliminó con éxito',
                    'success'
            )
                    this.submit();
                }
            })
        });
        
    </script>

    <script>
        $('.formulario-ver').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Ver Boleta',
                html: '
                ',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.isConfirmed) {
                    /*
                    */
                    Swal.fire(
                    '¡Eliminado!',
                    'La boleta se eliminó con éxito',
                    'success'
            )
                    this.submit();
                }
            })
        });
    </script>
    
@endsection
