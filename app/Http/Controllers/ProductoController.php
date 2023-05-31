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

   public function delete(Producto $productos){
      $productos->delete();

      return to_route(productos.index)->with('success', 'Eliminado Correctamente');
   }
}
