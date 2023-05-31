<!-- resources/views/productos/show.blade.php -->
@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Detalles del Producto</h1>
        
        <div class="mb-4">
            <p><span class="font-bold">ID:</span> {{ $producto->id }}</p>
            <p><span class="font-bold">Descripción Corta:</span> {{ $producto->descripcion_corta }}</p>
            <p><span class="font-bold">Descripción Larga:</span> {{ $producto->descripcion_larga }}</p>
            <p><span class="font-bold">Precio de Venta:</span> {{ $producto->precio_venta }}</p>
            <p><span class="font-bold">Precio de Compra:</span> {{ $producto->precio_compra }}</p>
            <p><span class="font-bold">Stock:</span> {{ $producto->stock }}</p>
            <p><span class="font-bold">Fecha de Ingreso:</span> {{ $producto->fecha_ingreso }}</p>
            <p><span class="font-bold">Peso:</span> {{ $producto->peso }}</p>
        </div>
        
        <a href="{{ route('productos.edit', $producto) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar Producto</a>
        
        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar Producto</button>
        </form>
    </div>
@endsection
