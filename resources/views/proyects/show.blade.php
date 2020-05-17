@extends('layouts.layout')

@section('title',$proyect->title)

@section('content')
   <p>{{$proyect->description}}</p>
   <br><small>{{ $proyect->description}}</small><br>{{$proyect->updated_at->diffForHumans()}}
@endsection