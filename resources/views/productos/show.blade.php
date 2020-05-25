@extends('layouts.layout')

@section('title','Productos')

@section('content')
<div class="container p-4">
   <p>{{$producto->description}}</p>
   <a href="{{route('productos.edit',$producto)}}">Editar</a>
   

   <form action="{{route('productos.destroy', $producto)}}" method="post">
      @csrf @method('DELETE')
      <button>Eliminar</button>
   </form>
   <br><small>{{ $producto->description}}</small><br>{{$producto->updated_at->diffForHumans()}}
</div>
@endsection