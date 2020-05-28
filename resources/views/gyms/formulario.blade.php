@csrf
{{--                    Nombre del CLIENTE      --}}
<div class="form-group">
   <label for="key">Clave</label>
      <input type="text" 
            class="form-control bg-light shadow-sm border-0 " 
            name="key" 
            placeholder="Nombre corto sin espacios"
            value="{{old('key',$gym->key)}}" required>
   
</div>
{{--                    Nombre del CLIENTE      --}}
<div class="form-group">
   <label for="nombre">Nombre</label>
      <input type="text" 
            class="form-control bg-light shadow-sm border-0 " 
            name="nombre" 
            placeholder="Nombre del gimnasio"
            value="{{old('nombre',$gym->nombre)}}" required>
   
</div>

{{--                Ubicacion del gim          --}}
<div class="form-group">
   <label for="ubicacion" >Sucursal</label>
      <input type="text" 
         class="form-control bg-light shadow-sm border-0"
         name="ubicacion" 
         placeholder="Ubicacion del gimnasio"
         value="{{old('ubicacion',$gym->ubicacion)}}">
   
</div>

{{--             Pago     --}}

<div class="form-group">
   <div class="custom-file">
   <input type="file" class="custom-file-input" name="img" value="{{old('file',$gym->img)}}" required>
      <label class="custom-file-label" for="validatedCustomFile">Logo del Gimnasio...</label>
    </div>
</div>



{{--                     Boton guardar              --}}
<button class="btn btn-primary btn-lg btn-block">{{$btnForm}}</button>
<a class="btn btn-link btn-block"
   href="{{route('gyms.index')}}">
   Cancelar
</a>