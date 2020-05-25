@extends('layouts.layout')

@section('title','Portafolio')

@section('content')

<div class="container p-4">
<section class="card">
    <div class="card-body">
    <h1 class="display-4 mb-1 text-center">@lang('Portfolio')</h1>
    <p class="lead text-secondary pl-4 pr-4">Proyectos realizados, adaptables a difertentes modelos de mercado y configurables para su preferencia, de igual forma todos contienen un diseño responsive que se adapata a smartphones, tabletas, etc.

    </p>

    <ul class="list-grupo">
        @forelse ($portafolios as $proyect)
    <li class="list-group-item border-0 mb-3 shadow-sm list-group-item-info">
        <a  class="d-flex justify-content-between aling-items-center"
            href="https://github.com/AlexNear77?tab=repositories">
            <span class="text-secondary font-weight-bold">
                {{$proyect['title']}}
            </span>
        
            <span class="text-black-50">
                {{date('Y')}}
            </span>
        </a> 
    </li class="list-group-item border-0 mb-3 shadow-sm">
        @empty
            <li>No hay mas proyectos por el momento.</li>
        @endforelse
    </ul>
    </div>
</section>
</div>
<br><br>

    
@endsection


{{-- <br><small>{{ $proyect->description}}</small><br>{{$proyect->updated_at->diffForHumans()}} --}}