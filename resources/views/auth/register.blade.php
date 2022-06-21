@extends('layouts.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">

    <!--    FOTOGRAFIA  -->
    <div class="md:w-1/2 p-5">
        <img src="{{ asset('img/introSeda.jpeg') }}" width="512" height="490" alt="Imagen registro de usuarios">
    </div>  

    <!--    FORMULARIO  -->
    <div class="md:w-1/2 p-6 bg-white  rounded-lg shadow-xl">
        <!--    REGISTRO  -->
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <!--    Nombre    -->
                <label for="name" class="mb-2 block uppercase font-bold">Nombre</label>
                <input 
                    id="name"
                    type="text"
                    placeholder="Tu Nombre"
                    name="name"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-5">
                <!--    Username    -->
                <label for="username" class="mb-2 block uppercase font-bold">Username</label>
                <input 
                    id="username"
                    type="text"
                    placeholder="Tu Nombre de Usuario"
                    name="username"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    value="{{ old('username') }}"
                />

                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-5">
                <!--    Email    -->
                <label for="email" class="mb-2 block uppercase font-bold">Email</label>
                <input 
                    id="email"
                    type="email"
                    placeholder="Tu Email de Registro"
                    name="email"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}"
                />

                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <!--    Contraseña    -->
                <label for="password" class="mb-2 block uppercase font-bold">Contraseña</label>
                <input 
                    id="password"
                    type="password"
                    placeholder="Contraseña de Registro"
                    name="password"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    
                />

                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <!--    Repetir Contraseña    -->
                <label for="password_confirmation" class="mb-2 block uppercase font-bold">Repetir Contraseña</label>
                <input 
                    id="password_confirmation"
                    type="password"
                    placeholder="Repite ru Contraseña"
                    name="password_confirmation"
                    class="border p-3 w-full rounded-lg "
                />

            </div>

            <!--        BOTON       -->
            <input 
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                uppercase font-bold w-full p-3 text-white rounded-lg"
            />
        
        </form>
    </div>
    
</div>
@endsection