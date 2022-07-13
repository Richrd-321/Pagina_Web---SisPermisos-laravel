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
            uppercase font-bold cursor-pointer" href="{{ route('list_boletas') }}">
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
                uppercase font-bold cursor-pointer" href="{{ route('list_boletas') }}">
                <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0v128h128L256 0zM288 256H96v64h192V256zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM64 72C64 67.63 67.63 64 72 64h80C156.4 64 160 67.63 160 72v16C160 92.38 156.4 96 152 96h-80C67.63 96 64 92.38 64 88V72zM64 136C64 131.6 67.63 128 72 128h80C156.4 128 160 131.6 160 136v16C160 156.4 156.4 160 152 160h-80C67.63 160 64 156.4 64 152V136zM320 440c0 4.375-3.625 8-8 8h-80C227.6 448 224 444.4 224 440v-16c0-4.375 3.625-8 8-8h80c4.375 0 8 3.625 8 8V440zM320 240v96c0 8.875-7.125 16-16 16h-224C71.13 352 64 344.9 64 336v-96C64 231.1 71.13 224 80 224h224C312.9 224 320 231.1 320 240z"/></svg>

                    Inventariar Boletas
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
                    0
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
    <section class="block p-6 rounded-lg shadow-lg bg-white max-w-sm mb-20">



        @if ($user->boletas->count())
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Boletas</h2>
                
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="boletas">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Oficina</th>
                                <th>Motivo</th>
                                <th>Mensaje</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($user->boletas as $boleta)
                                <tr>
                                    <td>{{$boleta->id}}</td>
                                    <td>{{$boleta->nombre}}</td>
                                    <td>{{$boleta->fecha}}</td>
                                    <td>{{$boleta->oficina}}</td>
                                    <td>{{$boleta->motivo}}</td>
                                    <td>{{$boleta->mensaje}}</td>
                                    <td class="td-actions text-center">
                                        <div class="container">
                                            <div class="col">
                                                <div class="row">
                                                    <a class="btn btn-info" href="{{ route('boletas.show', $boleta) }}">Editar</a>
                                                </div>

                                                <div class="row">
                                                    <button class="btn btn-danger">Borrar</button>
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
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Boletas</h2>
            <p class="text-gray-800 uppercase text-md text-center font-bold">No hay Boletas Generadas..!</p>
        @endif

    </section>


 <!-- ================================================================= SECCION - LISTA DE PERMISOS ========================================== -->
    <section class="block p-6 rounded-lg shadow-lg bg-white max-w-sm mt-10">



        @if ($user->boletas->count())
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Permisos</h2>
                
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="permisos">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Oficina</th>
                                <th>Motivo</th>
                                <th>Mensaje</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($user->boletas as $boleta)
                                <tr>
                                    <td>{{$boleta->id}}</td>
                                    <td>{{$boleta->nombre}}</td>
                                    <td>{{$boleta->fecha}}</td>
                                    <td>{{$boleta->oficina}}</td>
                                    <td>{{$boleta->motivo}}</td>
                                    <td>{{$boleta->mensaje}}</td>
                                    <td class="td-actions text-center">
                                        <div class="container">
                                            <div class="col">
                                                <div class="row">
                                                    <a class="btn btn-info" href="{{ route('boletas.show', $boleta) }}">Editar</a>
                                                </div>

                                                <div class="row">
                                                    <button class="btn btn-danger">Borrar</button>
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
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Permisos</h2>
            <p class="text-gray-800 uppercase text-md text-center font-bold">No hay Boletas Permisos Firmados..!</p>
        @endif

    </section>
    

@endsection

@section('JS')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
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
    
@endsection
