<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'descripcion_corta',
        'descripcion_larga',
        'precio_venta',
        'precio_compra',
        'stock',
        'peso',
    ];
}
