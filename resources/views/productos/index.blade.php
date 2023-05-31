<h3>Inventario</h3>
<a href="{{ route('productos.create')}}">Agregar</a>
<table>
    <thead>
        <th>ID</th>
        <th>Descripcion Corta</th>
        <th>Descripcion Larga</th>
        <th>Precio Venta</th>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            
        @endforeach
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->descripcion_corta}}</td>
            <td>{{$producto->descripcion_larga}}</td>
            <td>{{$producto->precio_venta}}</td>
        </tr>
    </tbody>
</table>