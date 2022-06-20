@extends('layouts.app')

@section('titulo')
    Login

@section('contenido')





<div class="container">
    

    <!--    TITULO  -->
    <h1 class="fw-bold text-5xl text-center py-3">Login</h1>

    <div class="row">

        <div class="col">
            <img src="/resources/views/img/introSeda.png" width="48" alt="Logo_SEDA">
        </div>

        <div class="col">
            <!--    TITULO ESPECIFICO  -->
            <h4 class="fw-bold text-5xl text-center py-3">Bienvenido</h4>
            <!--    LOGIN  {{route('boletas')}}-->
            <form class="mt-8 space-y-6" action="#" method="GET">
                <div class="rounded-md shadow-sm ">
                    <div class="mb-4">
                        <!--    Correo    -->
                        <label for="email-address" class="form-label">Correo electrónico</label>
                        <input id="email-address" class="form-control" name="email" type="email" autocomplete="email"
                            placeholder="Tu Correo">
                    </div>

                    <div class="mb-4">
                        <!--    Contraseña    -->
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="password" type="password" autocomplete="current-password" class="form-control"
                            placeholder="Tu Contraseña">
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-chek-label">Mantenerme conectado</label>
                    </div>

                </div>

                <!--        BOTON       -->
                <div class="d-grid">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Recordarme </label>
                        </div>

                        <div class="text-sm">
                            <a href="{{route('boletas')}}" class="font-medium text-indigo-600 hover:text-indigo-500"> Olvidó su contraseña?
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4">

                        <button type="submit" class="btn btn-primary btn-lg">
                            <div>
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <!-- Heroicon name: solid/lock-closed -->
                                    <svg class="h-10 w-5 text-indigo-500 group-hover:text-indigo-400 text-end "
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Iniciar Sesión
                            </div>

                        </button>
                    </div>

                    <!--    No tienes cuenta?    -->
                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="{{route('register.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">Registrate</a> </span>

                        <br>

                        <span><a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Recuperar Contraseña</a></span>
                    </div>

                </div>

        </div>


        </form>

        <!--    LOGIN CON REDES SOCIALES   -->
        <div class="container w-100 my-5">
            <div class="row text-center">
                <div class="col-12">Iniciar Sesión</div>
            </div>

            <div class="row">
                <div class="col">
                    <!--    Facebook   -->
                    <button class="btn btn-outline-primary w-100 my-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="" width="32" alt="">
                            </div>

                            <div class="col-10 text-center">
                                Facebook
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col">
                    <!--    Google   -->
                    <button class="btn btn-outline-danger w-100 my-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="" width="32" alt="">
                            </div>

                            <div class="col-10 text-center">
                                Google
                            </div>
                        </div>

                    </button>
                </div>
            </div>

        </div>




    </div>
</div>
</div>

@endsection