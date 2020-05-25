@extends('layouts.layout')

@section('title','Editar')

@section('content')
<div class="container p-4">
   <div class="row">
      <div class="col-12 col-sm-12 col-lg-7 mx-auto">
         @include('partials.validacionErrores')
         
         <form class="bg-white shadow rounded py-3 px-4" action="{{route('productos.update',$producto)}}" method="POST">
            {{-- Larabel nos proporciona una directiva de blade que genera el campo oculto para hacer la peticion. --}}
            @method('PATCH') 
            {{--              TEXTO EDITAR PORDUCTO     --}}
            <h1 class="display-4 text-center">@lang('Edit product')</h1>
            <hr class="my-4">
            {{--                FORMULARIO                --}}
            @include('productos.formulario',['btnForm' => 'Editar'])

         </form>
      </div>
   </div>
</div>
@endsection