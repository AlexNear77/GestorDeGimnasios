@extends('layouts.layout')

@section('title','Agregar producto')

@section('content')
<div class="container p-4">
   <div class="row">
      <div class="col-12 col-sm-12 col-lg-7 mx-auto">
         @include('partials.validacionErrores')
         
         <form class="bg-white shadow rounded py-3 px-4" action="{{route('productos.store')}}" method="POST">
            {{--              TEXTO AGREGAR PORDUCTO     --}}
            <h1 class="display-4 text-center">@lang('Add product')</h1>
            <hr class="my-4">
            {{--                FORMULARIO                --}}
            @include('productos.formulario' ,['btnForm' => 'Agregar'])
            
            
         </form>
      </div>
   </div>
</div>
@endsection