@extends('layouts.app')

@section('titulo')
    Permisos Autorizados
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
        <!--    Otras Opciones  -->
        <div class="row d-flex items-center">
            <div class="col d-flex justify-content-sm-center gap-2">
                <!--    BOTON   COPIAR  -->
                <button type="submit" class="btn btn-secondary btn-lg">
                    Copiar
                </button>
                <!--    BOTON   EXCEL  -->
                <button type="submit" class="btn btn-success btn-lg">
                    Excel

                </button>
                <!--    BOTON   PDF  -->
                <button type="submit" class="btn btn-danger btn-lg">
                    PDF
                </button>
                <!--    BOTON   Imprimir  -->
                <button type="submit" class="btn btn-warning btn-lg">
                    Imprimir
                </button>
            </div>
            
        </div>

        <!--    Opciones Principales -->
        <div class="row d-flex items-center">
            <!--Boton - firmar todos-->
            <div class="col d-flex justify-content-sm-center gap-1">
                <button class="btn btn-primary btn-lg" type="submit" rel="tooltip">Firmar Todos</button>
            </div>

            <!--    Nro Boletas -->
            <div class="col">
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    {{$permiso->count()}}
                    <span class="font-normal">Nro de Permisos</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{$boleta->count()}}
                    <span class="font-normal">Nro de Boletas</span>
                </p>
            </div>
        </div>

        <!--    TABLA   -   PERMISOS    -->
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="permisos">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Oficina</th>
                            <th>Fecha</th>       
                            <th>Motivo</th>    
                            <th>Firma</th>   
                            <th>Estado</th>                
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($boleta as $items)
                            <tr>
                                <td>{{$items->id}}</td>
                                <td>{{$items->nombre}}</td>
                                <td>{{$items->oficina}}</td>
                                <td>{{$items->fecha}}</td>
                                <td>{{$items->motivo}}</td>
                                <td>
                                    <!--    FIRMA   -->
                                    <fieldset disabled="disabled">
                                        @if ($items->permisos->count())
                                            
                                            <input type="button" value="Firmado" style="color:Black; display:flex; justify-content: center; background-color: rgb(219, 123, 13); padding: 0.5rem 0.5rem">

                                                    
                                        @else
                                            <input type="button" value="Sin Firmar" style="color:Black; display:flex; justify-content: center; background-color: #1E90FF; padding: 0.5rem">
                                        @endif     
                                    </fieldset>    
                                </td>
                                <td>
                                    <!--    ESTADO   -->
                                    <fieldset disabled="disabled">
                                        
                                        @if ($items->permisos->count())
                                            
                                            <input type="button" value="Aceptado" style="color:Black; display:flex; justify-content: center; background-color: #18DCAC; padding: 0.5rem 0.5rem">

                                                    
                                        @else
                                            <input type="button" value="Sin Aceptar" style="color:Black; display:flex; justify-content: center; background-color: #1E90FF; padding: 0.5rem">
                                        @endif     
                                    </fieldset>    
                                </td>
                                <td class="td-actions text-center;">
                                    <!--    ACCIONES    -->
                                    <div class="row d-flex items-center">                                      
                                        <div class="col d-flex justify-content-sm-center gap-1">
                                            <!--    ACCION VER    -->
                                            <a class="btn btn-info hero__cta" data-bs-toggle="modal" data-bs-target="#miModal" href="#">
                                                <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                                            </a>   

                                            
                                            <!--    ACCION FIRMAR    -->
                                            <!--    Generar Hora actual 
                                                <div id="mostrarHora" name="hora" >
                                                    <script type="text/javascript">
                                                        
                                                        mostrarHora();
                                                    </script>
                                                </div>
                                                
                                                -->
                                            <form action="{{ route('registros.store', ['user' => $user, 'boleta' => $items, 'permiso' => $items->permisos]) }}" class="d-inline formulario-firmar" method="POST" >
                                                @csrf
                                                <!--    Input   Hora    -->
                                                <input 
                                                    id="hora_final" 
                                                    name="hora_final" 
                                                    type="hidden" 
                                                    value="12:00"
                                                />

                                                <button class="btn btn-success" type="submit" rel="tooltip">
                                                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/></svg>
                                                </button>
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

    </div>
@endsection


@section('JS')
<!--    DATATABLE       -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

    <script>
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

    <script>
        $('.formulario-firmar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                icon: 'success',
                title: '¡Aceptado!',
                text: '¡El Permiso ha sido Aceptado con éxito!',
            }).then((result) => {
                if (result.isConfirmed){
                    this.submit();
                }
            }) 
            
        });
        
    </script>
@endsection