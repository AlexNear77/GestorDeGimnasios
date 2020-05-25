@extends('layouts.layout')
@section('title','Sobre mi')
@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-7 mx-auto">
            <h1 class="p-2">@lang('Contact')</h1>
    
            <form class="bg-white shadow rounded py-3 px-4" 
                action="{{ route('messages.store') }}" 
                method="POST">
                @csrf
                {{--                                Nombre                            --}}
                <div class="form-group">
                    <label for="name">Correo</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror border-0" 
                            id="name"
                            type="text" 
                            name="name" 
                            placeholder="Ingresa tu nombre" value="{{old('name')}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                </div>
                {{--                                Email                            --}}
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror border-0"
                            id="email" 
                            type="email" 
                            name="email" 
                            placeholder="Ingresa tu correo electronico" 
                            value="{{old('email')}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    
                </div>
                {{--                                Asunto                            --}}
                <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror border-0" 
                            id="subject"
                            type="text" 
                            name="subject" 
                            placeholder="Asunto" 
                            value="{{old('subject')}}">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                </div>
                {{--                                Mensaje                            --}}
                <div class="form-group">
                    <label for="content">Contenido:</label>
                    <textarea class="form-control bg-light shadow-sm @error('name') is-invalid @enderror border-0" 
                            name="content" 
                            id="content"
                            cols="20" 
                            rows="10" 
                            placeholder="Mensaje...">{{old('content')}}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                    
                </div>
                {{--                                Btn                            --}}
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
                
            </form>
        </div>
    </div>
</div>
    

    
@endsection