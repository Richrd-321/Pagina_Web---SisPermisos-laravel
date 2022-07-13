<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
        <title>Sistema de Permisos - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!--<link rel="stylesheet" href="public/css/app.css">-->

        <!--    BOOSTRAP    -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
        <!--    FONT AWESOME-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
            integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


       
    </head>

    <body class="bg-gray-100">

        <header class="p-3 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">

                <img src="{{ asset('img/logoSeda.png') }}" width="275" height="275" alt="Imagen Logo de SedaCusco">

                <!--
                <h1 class="text-3xl font-bold">
                    SisBoletas 
                </h1> 
                -->

                <!--Mostrar Opciones dentro de la sesion-->
                

                

                @auth

                    <nav class="flex gap-3 items-center">
                        @yield('cabecera')

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center gap-2 bg-white border p-2 rounded font-bold uppercase text-gray-600 text-sm" href="{{ route('logout')}}">
                                <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"/></svg>

                                Cerrar Sesión
                            </button>
                        </form>
                    

                            
                        
                    </nav>                      
                @endauth

                @guest
                    <nav class="flex gap-3 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login')}}">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register.index')}}">Crear Cuenta</a>
                    </nav>
                @endguest 

                  

                
           </div>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black fw-bold text-center text-4xl mb-10 py-3">
                
                @yield('titulo')
            </h2>
            @yield('contenido')


        </main>

        <footer class=" mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Sedacusco - Todos los derechos reservados {{ now() ->year }}
        </footer>

        @yield('JS')


        <!--    BOOSTRAP    -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        
        
    </body>

    
    
    
</html>
