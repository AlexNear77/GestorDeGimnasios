@extends('layouts.layoutMenu')

@section('title','Editar')

@section('content')
<div class="container p-4">
   <div class="row">
      <div class="col-12 col-sm-12 col-lg-7 mx-auto">
         @include('partials.validacionErrores')
         
         <form class="bg-white shadow rounded py-3 px-4" action="{{route('gyms.update',$gym)}}" method="POST" enctype="multipart/form-data">
            {{-- Larabel nos proporciona una directiva de blade que genera el campo oculto para hacer la peticion. --}}
            @method('PATCH') 
            {{--              TEXTO EDITAR PORDUCTO     --}}
            <h1 class="display-4 text-center">Actualizar datos</h1>
            <hr class="my-4">
            {{--                FORMULARIO                --}}
            @include('gyms.formulario',['btnForm' => 'Actualizar'])

         </form>
      </div>
   </div>
</div>
@endsection