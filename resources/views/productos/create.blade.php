<!-- resources/views/productos/create.blade.php -->
@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Crear Producto</h1>
        
        <form action="{{ route('productos.store') }}" method="POST" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="descripcion_corta" class="block text-gray-700 font-bold mb-2">Descripción Corta:</label>
                <input type="text" name="descripcion_corta" id="descripcion_corta" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="descripcion_larga" class="block text-gray-700 font-bold mb-2">Descripción Larga:</label>
                <textarea name="descripcion_larga" id="descripcion_larga" class="border border-gray-300 p-2 w-full" required></textarea>
            </div>
            <div class="mb-4">
                <label for="precio_venta" class="block text-gray-700 font-bold mb-2">Precio de Venta:</label>
                <input type="number" step="0.01" name="precio_venta" id="precio_venta" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="precio_compra" class="block text-gray-700 font-bold mb-2">Precio de Compra:</label>
                <input type="number" step="0.01" name="precio_compra" id="precio_compra" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-gray-700 font-bold mb-2">Stock:</label>
                <input type="number" name="stock" id="stock" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="fecha_ingreso" class="block text-gray-700 font-bold mb-2">Fecha de Ingreso:</label>
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="border border-gray-300 p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="peso" class="block text-gray-700 font-bold mb-2">Peso:</label>
                <input type="number" step="0.01" name="peso" id="peso" class="border border-gray-300 p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar Producto</button>
        </form>
    </div>
@endsection
