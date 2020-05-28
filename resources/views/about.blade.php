@extends('layouts.layout')
@section('title','Nosotros')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 mx-auto d-block col-lg-6 pt-5">
            <img class="img-fluid img-responsive " src="/img/about.svg" alt="Gestor de Gimnasios" style="width:550px; height:250px;">
        </div>
        <div class="col-12 p-3 col-lg-6">
            <h1 class="diplay-4 text-primary">@lang('About')</h1>
            <p class="lead text-secondary">
                Desarrollar e implementar aplicaciones web a la medida, usando las más nuevas tecnologías, tendencias y estrategias competitivas que activan marcas. Trabajo por un bien común que busca expandir sus horizontes a las posibilidades que el mundo digital ofrece actualmente soy estudiante de la Universidad de Guadalajara, en Ingieneria en Informatica, cursando en 4 semestre.
                <br>
                Mi meta principal es ofrecer contenido que aporte al mundo digital para un bien comun.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('portafolio')}}">Portafolio</a>
        </div>
    </div>
    <br><br><br>
</div>
@endsection