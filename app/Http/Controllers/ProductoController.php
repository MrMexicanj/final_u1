<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   public function index(){
      $productos = Producto::get();
      return view('productos.index', compact('productos'));
   }

   public function create(){
      return view('productos.create');
   }

   public function store(Request $request){
      //dd($request->all());

      Producto::create([
         'id' =>  $request->id,
        'descripcion_corta' => $request->descripcion_corta,
        'descripcion_larga' => $request->descripcion_larga,
        'precio_venta' => $request->precio_venta,
        'precio_compra' => $request->precio_compra,
        'stock' => $request->stock,
        'peso' => $request->peso
      ]);

      return to_route('productos.index');
   }

   public function destroy($id)
{
    // Encuentra el producto por su ID
    $producto = Producto::findOrFail($id);

    // Elimina el producto
    $producto->delete();

    // Redirige a la página de productos o realiza alguna otra acción
    return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
}

}
