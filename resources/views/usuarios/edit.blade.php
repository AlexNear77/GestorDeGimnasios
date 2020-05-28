@extends('layouts.layoutMenu')

@section('title','Usuarios')

@section('content')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-lg-7 mx-auto">

            {{--              Formulario                FORM!!!!!!!!!!!!!!     --}}
            <form class="bg-white shadow rounded py-4 px-5" 
                    method="POST" 
                    action="{{route('usuarios.update',$usuario)}}">
                    
                    @csrf
                    @method('PATCH') 
                {{-- TEXTO INICIAR SESIO --}}
                <h1 class="pt-2 text-center">Editar usuario</h1>
                <hr class="my-4">
                {{--========================================================--}}
                {{--                            nombre                      --}}
                {{--========================================================--}}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $usuario->name)}}" required autocomplete="name" placeholder="Nombre de pila" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{--=================================================--}}
                {{--                       Correo                    --}}
                {{--=================================================--}}
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $usuario->email) }}" required autocomplete="email" placeholder="Ingresa tu correo">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{--======================================================--}}
                {{--                            role                      --}}
                {{--======================================================--}}
                @if (auth()->user()->role == 'admin')
                    
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                    <div class="col-sm-5">
                        <select class="form-control mx-sm-3   @error('role') is-invalid @enderror"
                                    name="role">
                            <option value="admin" {{$usuario->role == 'admin' ? 'selected' : '' }}>
                            Administrador
                            </option>
                            <option value="empleado" {{$usuario->role == 'empleado' ? 'selected' : '' }}>
                                Empleado
                            </option>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                    
                    </div>

                </div>
                @else
     
                    <div class="invisible">
                        <select  class="   @error('role') is-invalid @enderror"
                                    name="role">
                            <option value="admin" {{$usuario->role == 'admin' ? 'selected' : '' }}>
                            Administrador
                            </option>
                            <option value="empleado" {{$usuario->role == 'empleado' ? 'selected' : '' }}>
                                Empleado
                            </option>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </select>
                    
                    </div>
                @endif               
                
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
                
            
        </div>
    </div>
</div>
@endsection
