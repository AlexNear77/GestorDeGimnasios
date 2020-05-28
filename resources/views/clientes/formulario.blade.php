@csrf
{{--                    Nombre del CLIENTE      --}}
<div class="form-group">
   <label for="nombre">Nombre</label>
      <input type="text" 
            class="form-control bg-light shadow-sm border-0 " 
            name="nombre" 
            placeholder="Ingresa nombre completo"
            value="{{old('nombre',$cliente->nombre)}}">
   
</div>

{{--                    Stock del producto          --}}
<div class="form-group">
   <label for="folio" >Folio</label>
      <input type="text" 
         class="form-control bg-light shadow-sm border-0"
         name="folio" 
         placeholder="Folio de cliente"
         value="{{old('folio',$cliente->folio)}}">
   
</div>
{{--              Fecha inicio        --}}
<div class="form-group">
   <label for="fecha_inicio">Fecha de inicio</label>
   <input type="date" name="fecha_inicio" class="form-control" id="" value="{{old('fecha_inicio',$cliente->fecha_inicio)}}">
</div>

{{--              Fecha fin        --}}
<div class="form-group">
   <label for="fecha_vencimiento">Fecha de vencimiento</label>
   <input type="date" name="fecha_vencimiento" class="form-control" value="{{old('fecha_vencimiento',$cliente->fecha_vencimiento)}}">
</div>
{{--             Pago     --}}
<div class="form-group">
   <label for="pago">Monto</label>
   <input type="number" name="pago" class="form-control bg-light shadow-sm border-0 "
      placeholder="Ingresa pago" value="{{old('pago')}}"> 
   
</div>



{{--                     Boton guardar              --}}
<button class="btn btn-primary btn-lg btn-block">{{$btnForm}}</button>
<a class="btn btn-link btn-block"
   href="{{route('clientes.index')}}">
   Cancelar
</a>