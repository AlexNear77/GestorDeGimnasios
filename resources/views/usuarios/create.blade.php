@extends('layouts.layoutMenu')

@section('content')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-lg-7 mx-auto">
            {{--            Nombre del la App       --}}
            <h1 class="pt-4 pb-4 text-center ">MyGym</h1>
            {{--              Formulario       --}}
            <form class="bg-white shadow rounded py-4 px-5" 
                    method="POST" 
                    action="{{ route('usuarios.store') }}">
                    @csrf
                {{-- TEXTO INICIAR SESIO --}}
                <h1 class="pt-2 text-center">{{ __('Register') }}</h1>
                <hr class="my-4">
                {{--                            nombre                      --}}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre de pila" autofocus>

                        @error('name')
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
                            <option value="admin" {{$user->role == 'admin' ? 'selected' : '' }}>
                            Administrador
                            </option>
                            <option value="empleado" {{$user->role == 'empleado' ? 'selected' : '' }}>
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
                    <input type="hidden" name="role" value="empleado">

                @endif   
                {{--                       Correo                    --}}
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingreso tu correo">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{--                Contraseña ingresa tu contraseña         --}}
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingresa tu contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{--                Confirma tu contraseña               --}}
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirma tu contraseña">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
                
            
        </div>
    </div>
</div>
@endsection
