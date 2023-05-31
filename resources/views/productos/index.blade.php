@extends('layouts.app')

@section('contenido')
<h3 class="text-3xl py-2 font-bold">Inventario</h3>
<a href="{{ route('productos.create') }}" class="py-2 px-5 rounded bg-blue-500 text-white font-semibold">Agregar</a>
<table class="mt-4 w-full border-collapse">
    <thead>
        <tr>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">ID</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Descripción Corta</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Descripción Larga</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Precio Venta</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Precio Compra</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Stock</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Peso</th>
            <th class="py-2 px-4 bg-gray-200 text-gray-700">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td class="py-2 px-4 border">{{ $producto->id }}</td>
                <td class="py-2 px-4 border">{{ $producto->descripcion_corta }}</td>
                <td class="py-2 px-4 border">{{ $producto->descripcion_larga }}</td>
                <td class="py-2 px-4 border">{{ $producto->precio_venta }}</td>
                <td class="py-2 px-4 border">{{ $producto->precio_compra }}</td>
                <td class="py-2 px-4 border">{{ $producto->stock}}</td>
                <td class="py-2 px-4 border">{{ $producto->peso}}</td>
                <td class="py-2 px-4 border">
                    <form class="inline" action="{{ route('productos.destroy', $producto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
