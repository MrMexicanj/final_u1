<h3>Agregar</h3>

<form action="{{ route('productos.store')}}" method="POST">

    @csrf

    <label for="id">ID</label>
    <input type="text" name="id">
    
    <label for="descripcion_corta">Descripcion Corta</label>
    <input type="text" name="descripcion_corta">

    <label for="descripcion_larga">Descripcion Larga</label>
    <input type="text" name="descripcion_larga">

    <label for="precio_venta">Precio Venta</label>
    <input type="text" name="precio_venta">
     
    <label for="precio_compra">Precio Compra</label>
    <input type="text" name="precio_compra">

    <label for="stock">Stock</label>
    <input type="text" name="stock">

    <label for="peso">Peso</label>
    <input type="text" name="peso">

    <button>Guardar</button>
</form>