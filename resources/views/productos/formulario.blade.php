
@csrf
<div class="form-group">
   <label for="category_id">Categoria</label>
   <select class="form-control bg-light shadow-sm border-0"
            name="category_id">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}" {{isset($producto) && $categoria->id == $producto->categoria_id ? 'selected' : '' }}>
               {{$categoria->nombre}}
            </option>
            @endforeach
   </select>
</div>
{{--                    Descripcion del producto      --}}
<div class="form-group">
   <label for="description">Descripcion del producto </label>
      <input type="text" 
            class="form-control bg-light shadow-sm border-0 " 
            name="description" 
            placeholder="Descripción"
            value="{{old('description',$producto->description)}}">
   
</div>

{{--                    Stock del producto          --}}
<div class="form-group">
   <label for="stock" >Stock</label>
      <input type="text" 
         class="form-control bg-light shadow-sm border-0"
         name="stock" 
         placeholder="Total de stock"
         value="{{old('stock',$producto->stock)}}">
   
</div>
{{--                    Precio venta del producto  --}}
<div class="form-group">
   <label for="sale" >Precio venta</label>
      <input type="text" 
         class="form-control bg-light shadow-sm border-0"
         name="sale"
         placeholder="Precio venta"
         value="{{old('sale',$producto->sale)}}">
   
</div>
{{--                    Precio compra del producto    --}}
<div class="form-group">
   <label for="buy">Precio compra</label>
      <input type="text" 
            placeholder="Precio compra"
            class="form-control bg-light shadow-sm border-0"
            name="buy" 
            value="{{old('buy',$producto->buy)}}">
</div>   
{{--                     Boton guardar              --}}
<button class="btn btn-primary btn-lg btn-block">{{$btnForm}}</button>
<a class="btn btn-link btn-block"
   href="{{route('productos.index')}}">
   Cancelar
</a>