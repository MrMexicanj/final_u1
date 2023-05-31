<!-- resources/views/productos/index.blade.php -->
@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Listado de Productos</h1>
    
    <a href="{{ route('productos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded">Crear Producto</a>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border bg-gray-200 px-4 py-2">ID</th>
                    <th class="border bg-gray-200 px-4 py-2">Descripción</th>
                    <th class="border bg-gray-200 px-4 py-2">Precio de Venta</th>
                    <th class="border bg-gray-200 px-4 py-2">Stock</th>
                    <th class="border bg-gray-200 px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto['id'] }}</td>
                        <td class="border px-4 py-2">{{ $producto['descripcion_corta'] }}</td>
                        <td class="border px-4 py-2">{{ $producto['precio_venta'] }}</td>
                        <td class="border px-4 py-2">{{ $producto['stock'] }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('productos.show', $producto['id']) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                            <a href="{{ route('productos.edit', $producto['id']) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                            <form action="{{ route('productos.destroy', $producto['id']) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection

