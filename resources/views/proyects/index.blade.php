@extends('layouts.layout')

@section('title','Portafolio')

@section('content')

    <h1>proyectos</h1>

    <ul>
        @forelse ($proyects as $proyect)
    <li ><a href="{{route('proyects.show', $proyect)}}">{{$proyect->title}}</a> </li>
        @empty
            <li>No hay mas proyectos por el momento.</li>
        @endforelse
        {{ $proyects->links()}}
    </ul>
@endsection


{{-- <br><small>{{ $proyect->description}}</small><br>{{$proyect->updated_at->diffForHumans()}} --}}