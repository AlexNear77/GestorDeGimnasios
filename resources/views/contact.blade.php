@extends('layouts.layout')
@section('title','Contactanos')
@section('content')
    <h1>contact</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{old('name')}}">
        {!! $errors->first('name','<small>:message</small><br>')!!}

        <input type="email" name="email" placeholder="Correo" value="{{old('email')}}">
        {!! $errors->first('email','<small>:message</small><br>')!!}

        <input type="text" name="subject" placeholder="Asunto" value="{{old('subject')}}">{!! $errors->first('subject','<small>:message</small><br>')!!}

        <textarea name="content" cols="20" rows="10" placeholder="Mensaje...">{{old('content')}}</textarea>
        {!! $errors->first('content','<small>:message</small><br>')!!}

        <button type="submit">enviar</button>
        
    </form>
@endsection