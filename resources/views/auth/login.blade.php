@extends('layouts.layout')

@section('content')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-lg-7 mx-auto">
            {{--            Nombre del la App       --}}
            <h1 class="pt-4 pb-4 text-center ">MyGym</h1>
            {{--              Formulario       --}}
            <form class="bg-white shadow rounded py-4 px-5 " 
                    method="POST" 
                    action="{{ route('login') }}">
                    @csrf
                {{-- TEXTO INICIAR SESIO --}}
                <h1 class="pt-2 text-center">Iniciar sesión</h1>
                <hr class="my-4">
                {{--                            Correo                      --}}
                
                <div class="form-group">
                    <label for="email" >{{ __('E-Mail Address') }}</label>
                    <div class="col-md-12">
                    <input id="email" 
                            type="email" 
                            placeholder="Usuario"
                            class="form-control 
                            @error('email') is-invalid 
                            @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message     }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                {{--                    password --}}
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="col-md-12">
                        <input id="password" 
                                type="password" 
                                placeholder="Contraseña"
                                class="form-control 
                                @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    {{ __('Login') }}
                </button>
                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
