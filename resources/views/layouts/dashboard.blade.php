@extends('layouts.app')

@section('titulo')
    Bienvenido: {{$user->name}}
@endsection


@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen usuario"/>
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex-col items-center md:justify-center md:items-start py-10 md:py-10">

                <p class="text-gray-700 text-2xl">
                    {{ $user->username }}
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Nro de Permisos</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Nro de Boletas</span>
                </p>

            </div>
        </div>
    </div>

    <section class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        @if ($boletas->count())
            <h2 class="text-4xl text-center font-black my-10 fw-bold py-3">Lista de Boletas</h2>
                
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="boletas">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Oficina</th>
                                <th>Motivo</th>
                                <th>Mensaje</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($boletas as $boleta)
                                <tr>
                                    <td>{{$boleta->id}}</td>
                                    <td>{{$boleta->nombre}}</td>
                                    <td>{{$boleta->fecha}}</td>
                                    <td>{{$boleta->oficina}}</td>
                                    <td>{{$boleta->motivo}}</td>
                                    <td>{{$boleta->mensaje}}</td>
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
    </script>
    
@endsection
