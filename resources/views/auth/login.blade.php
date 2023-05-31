@extends('layouts.app')

@section('titulo')
    Inicia Sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12 p-2">
            <img src="{{ asset('Materiales/Materiales/Diseño/login.jpg') }}" alt="Imagen login de usuarios">
         </div>
         <div class="md:w-1/2 bg-slate-300 p-6 rounded-lg shadow-xl">
            <form  method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    placeholder="Tu Email" 
                    class="border p-3 w-full rounded-lg @error('email') border-red-500
                    @enderror"
                    value="{{ old('email') }}"
                    />
                </div>
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    placeholder="Tu Password" 
                    class="border p-3 w-full rounded-lg @error('password') border-red-500
                    @enderror"
                    value="{{ old('password') }}"/>
                </div>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <input 
                type="submit" 
                value="Iniciar Sesion" 
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" 
                />
            </form>
        </div>
    </div>
@endsection