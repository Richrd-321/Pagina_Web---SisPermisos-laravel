@extends('layouts.app')

@section('titulo')
    Registro de Usuario
@endsection

@section('contenido')
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    
    <!--    FOTOGRAFIA  
    <div class="md:w-1/2 p-5">
        <img src="{{ asset('img/introSeda.jpeg') }}" width="512" height="490" alt="Imagen registro de usuarios">
    </div>  
    -->
    <!--    FORMULARIO  -->
    <div class="md:w-1 p-6 bg-white  rounded-lg shadow-xl">
        <!--    REGISTRO  -->
        <form action="{{ route('register.index') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-5">
                    <div class="mb-5">
                        <!--    Nombres    -->
                        <label for="nombres" class="mb-2 block uppercase font-bold">Nombre</label>
                        <input 
                            id="nombres"
                            type="text"
                            placeholder="Tu Nombre"
                            name="nombres"
                            class="border p-3 w-full rounded-lg @error('nombres') border-red-500 @enderror"
                            value="{{ old('nombres') }}"
                        />
                        @error('nombres')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                        
                    </div>
                </div>

                <div class="col-7">
                    <div class="mb-5">
                        <!--    Apellidos    -->
                        <label for="apellidos" class="mb-2 block uppercase font-bold">Apellidos</label>
                        <input 
                            id="apellidos"
                            type="text"
                            placeholder="Tus Apellidos"
                            name="apellidos"
                            class="border p-3 w-full rounded-lg @error('apellidos') border-red-500 @enderror"
                            value="{{ old('apellidos') }}"
                        />
                        @error('apellidos')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-5">
                        <!--    Oficina    -->
                        <label for="oficina" class="mb-2 block uppercase font-bold">Oficina</label>
                        <input 
                            id="oficina"
                            type="text"
                            placeholder="Tu Oficina"
                            name="oficina"
                            class="border p-3 w-full rounded-lg @error('oficina') border-red-500 @enderror"
                            value="{{ old('oficina') }}"
                        />
        
                        @error('oficina')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-3 ml-5">
                    <div class="mb-5">
                        <!--    Cargo    -->
                        <label for="cargo" class="mb-2 block uppercase font-bold">Tipo de Cargo</label>
                        <select class="form-select border p-3 w-full rounded-lg">
                            <option name="cargo" value="Empleado">Empleado</option>
                            <option name="cargo" value="Jefe">Jefe</option>
                            <option name="cargo" value="Administrador">Administrador</option>
                          </select>
        
                        <!--  
                        <input 
                            id="cargo"
                            name="cargo"
                            class="border p-3 w-full rounded-lg @error('cargo') border-red-500 @enderror"
                            value="{{ old('cargo') }}"
                        />
                        
                        @error('cargo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                        -->
                    </div>
                </div>
            </div>

            <br>
            
            <div class="row">
                <div class="col-4">
                    <div class="mb-5">
                        <!--    DNI    -->
                        <label for="dni" class="mb-2 block uppercase font-bold">DNI</label>
                        <input 
                            id="dni"
                            type="text"
                            placeholder="Tu DNI"
                            name="dni"
                            class="border p-3 w-full rounded-lg @error('dni') border-red-500 @enderror"
                            value="{{ old('dni') }}"
                        />
        
                        @error('dni')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
        
                    </div>
                </div>

                <div class="col-8">
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
                </div>
            </div>
            

            <div class="row">
                <div class="col">
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
                </div>

                <div class="col">
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
                </div>

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