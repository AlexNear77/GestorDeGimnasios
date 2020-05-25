@extends('layouts.layout')

@section('title','Inicio')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-12 p-5 col-lg-6">
            <h1 class="diplay-4 text-primary">@lang('Home')</h1>
            <p class="lead text-secondary">
                Administra tu gimnasio
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('portafolio')}}">Portafolio</a>
        </div>
        <div class="col-7 mx-auto d-block col-lg-6">
            <img class="img-fluid mb-4 img-responsive " src="/img/home.svg" alt="Gestor de Gimnasios">
        </div>
    </div>
</div>
    
@endsection

{{-- 
    
    
    @auth {{-- Solo mostrara si existe un usuario autenticado --}} 
    {{-- {{ auth()->user()->name}} --}}
    {{--Para acceder al nombre del usuario--}}
    {{-- {{ auth()->user()->name}} --}}
    {{-- @endauth --}}
    
 