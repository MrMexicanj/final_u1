<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->descripcion_corta = $request->input('descripcion_corta');
        $producto->descripcion_larga = $request->input('descripcion_larga');
        $producto->precio_venta = $request->input('precio_venta');
        $producto->precio_compra = $request->input('precio_compra');
        $producto->stock = $request->input('stock');
        $producto->fecha_ingreso = $request->input('fecha_ingreso');
        $producto->peso = $request->input('peso');
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->descripcion_corta = $request->input('descripcion_corta');
        $producto->descripcion_larga = $request->input('descripcion_larga');
        $producto->precio_venta = $request->input('precio_venta');
        $producto->precio_compra = $request->input('precio_compra');
        $producto->stock = $request->input('stock');
        $producto->fecha_ingreso = $request->input('fecha_ingreso');
        $producto->peso = $request->input('peso');
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
