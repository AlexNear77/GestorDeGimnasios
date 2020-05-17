@extends('layouts.layout')

@section('title','Crear proyecto')

@section('content')
   <p>Crear Proyect</p>
   <form action="{{route('proyects.store')}}" method="POST">
      @csrf
      <label >Titulo del proyecto <br>
         <input type="text" name="title">
      </label>
      <br>
      <label >Descripcion del proyecto <br>
         <textarea name="description"cols="30" rows="10"></textarea>
      </label>
      <br>
      <label >URL del proyecto <br>
         <input type="text" name="url">
      </label>
      <br>
      <button>Guardar</button>
      
   </form>
@endsection