@extends('layouts.app')

@section('contenido')
<h3 class="text-3xl font-bold">Agregar</h3>

<form action="{{ route('productos.store') }}" method="POST" class="mt-4">
    @csrf

    <label for="id" class="block mb-2 font-medium">ID</label>
    <input type="text" name="id" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="descripcion_corta" class="block mb-2 font-medium">Descripción Corta</label>
    <input type="text" name="descripcion_corta" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="descripcion_larga" class="block mb-2 font-medium">Descripción Larga</label>
    <input type="text" name="descripcion_larga" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="precio_venta" class="block mb-2 font-medium">Precio Venta</label>
    <input type="text" name="precio_venta" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="precio_compra" class="block mb-2 font-medium">Precio Compra</label>
    <input type="text" name="precio_compra" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="stock" class="block mb-2 font-medium">Stock</label>
    <input type="text" name="stock" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <label for="peso" class="block mb-2 font-medium">Peso</label>
    <input type="text" name="peso" class="border border-gray-300 rounded-md px-4 py-2 mb-2">

    <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md">Guardar</button>
</form>
@endsection