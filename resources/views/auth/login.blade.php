@extends('layouts.app')

@section('titulo')
    Iniciar Sesión
@endsection

@section('contenido')


    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/introSeda.jpeg')}}" width="512" height="490" alt="imagen login de usuarios">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <!--    TITULO ESPECIFICO  -->
            <h4 class="fw-bold text-5xl text-center py-3">Bienvenido</h4>
            <!--    LOGIN  -->
            <form method="POST" action="{{ route('login')}}" novalidate>
                @csrf

                <div class="rounded-md shadow-sm ">
                    <div class="mb-5">
                        <!--    Correo    -->
                        <label for="email" class="mb-2 block uppercase font-bold">Email</label>
                        <input 
                            id="email"
                            type="email"
                            name="email"  
                            autocomplete="email"
                            placeholder="Tu Email"
                            class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" 
                            value="{{ old('email') }}"
                        />

                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="mb-4">
                        <!--    Contraseña    -->
                        <label for="password" class="mb-2 block uppercase font-bold">Contraseña</label>
                        <input 
                            id="password"
                            name="password" 
                            type="password" 
                            placeholder="Tu Contraseña"
                            autocomplete="current-password" 
                            class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                        />

                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    @if (session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ session('mensaje') }}
                        </p>
                    @endif

                    <!--
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-chek-label">Mantenerme conectado</label>
                    </div>
                -->

                </div>

                <!--        BOTON       -->
                <div class="d-grid">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input name="remember" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label class="text-gray-900 text-sm"> Recordarme </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> ¿Olvidó su contraseña?
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4">

                        <input 
                            type="submit"
                            value="Iniciar Sesión"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                            uppercase font-bold w-full p-3 text-white rounded-lg"
                        />

                        <!--
                        <button type="submit" class="btn btn-primary btn-lg">
                            <div>
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                     //Heroicon name: solid/lock-closed 
                                    <svg class="h-10 w-5 text-indigo-500 group-hover:text-indigo-400 text-end "
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" 
                                        />
                                    </svg>
                                </span>
                                Iniciar Sesión
                            </div>

                        </button>
                        -->
                    </div>

                    <!--    No tienes cuenta?    -->
                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="{{route('register.index')}}" class="font-medium text-indigo-600 hover:text-indigo-500">Registrate</a> </span>

                        <br>

                        <span><a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Recuperar Contraseña</a></span>
                    </div>

                    <!--    LOGIN CON REDES SOCIALES   
                    
                    <div class="container w-100 my-5">
                        <div class="row text-center">
                            <div class="col-12">Iniciar Sesión</div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <!--    Facebook   
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
                                <!--    Google   
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


        </form>


    </div>
    -->

@endsection