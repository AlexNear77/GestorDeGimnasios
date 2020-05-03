@extends('layouts.layout')

@section('title','Portafolio')

@section('content')

    <h1>proyectos</h1>

    <ul>
        @forelse ($proyects as $proyect)
    <li>{{$proyect->title}} <br><small>{{ $proyect->description}}</small><br>{{$proyect->updated_at->diffForHumans()}}</li>
        @empty
            <li>No hay mas proyectos por el momento.</li>
        @endforelse
        {{ $proyects->links()}}
    </ul>
@endsection