<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheets">
        <title>Final U1 - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Final_u1
            </h1>
            @auth
            <nav class="flex gap-2 items-center">
                <a class="font-bold text-gray-600 text-sm">
                    HOLA: 
                    <span class="font-normal"> 
                    {{auth()->user()->username}}
                    </span>
                 </a>  
                <a href="{{ route('logout') }}" class="font-bold uppercase text-gray-600 text-sm">
                    Cerrar Sesíon</a>     
            </nav>
            @endauth

            @guest
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>  
                <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear Cuenta</a>     
            </nav>
            @endguest
        </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold">
            Final U1 - Todos los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>