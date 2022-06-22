@extends('layouts.app')

@section('titulo')
    Boleta de Autorizacion de Salida
@endsection

@section('contenido')


    <div class="container-center w-80 border p-4 m-4">
        <!--    BOLETA DE AUTORIZACION DE SALIDA -->
        <section class="bg-light py-5">
            <div class="container bg-warning p-5">
                <div class="row">
                    

                    <h4>DATOS:</h4>

                    <form action="{{ route('boletas') }}" method="POST">
                        @csrf
                        <!--    NOMBRE  -->
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <i class="fas fa-user input-group-text"></i>
                                </div>

                                <input type="text" class="form-control" placeholder="Tu Nombre" aria-label="Username"
                                    aria-describedby="basic-addon1" name="nombre">
                            </div>

                        </div>

                        <!--    CALENDARIO  -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <!--<i class="fas fa-user input-group-text"></i>-->
                                <i class="fas fa-calendar input-group-text"></i>
                            </div>

                            <input type="datetime-local" name="fecha" class="form-control" placeholder="Tu Oficina"
                                aria-describedby="basic-addon1">
                        </div>

                        <!--    OFICINA  -->
                        <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <i class="fas fa-solid fa-building input-group-text"></i>

                                </div>

                                <input type="text" class="form-control" name="oficina" placeholder="Tu Oficina"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                        </div>

                        <!--    MOTIVO      -->

                        <h4> MOTIVO: </h4>
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

                        <!--    MENSAJE  -->

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <i class="fas fa-pencil-alt input-group-text"></i>
                            </div>
                            <textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje"
                                class="form-control"></textarea>
                        </div>





                        <!--    FIRMAS   -->
                        <h4> FIRMA: </h4>
                        <div class="m-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="email@example.com">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>


                        <!--    ENVIAR      -->
                        <button type="submit" class="btn btn-primary btn-block m-5 boton">Enviar</button>
                    </form>

                </div>

            </div>
        </section>
    </div>
@endsection