<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
   <div class="container">
      {{--           NOMBRE DE LA PAGINA O LOGO       --}}
      <a class="navbar-brand " href="{{route('home')}}">
         {{ config('app.name', 'MiGym') }}
      </a>
      {{--           BOTTON RESPONSIVE             --}}
      <button class="navbar-toggler" type="button"
         data-toggle="collapse"
         data-target="#navbarSupportedContent"
         data-controls='navbarSupportedContent'
         aria-expanded="false"
         aria-label="{{__('Toggle navigation')}}"
         ><span class="navbar-toggler-icon"></span>
         
      </button>
      {{--                                   OPCIONES                    --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
            <ul class="nav nav-pills">
     
               {{--                                Home                                --}}
               <li class="nav-item ">
                  <a class="nav-link {{ setActive('home')}}" href="{{route('home')}}">@lang('Home')</a>
               </li>
               {{--                              Sobre mi                                --}}
               <li class="nav-item">
                  <a class="nav-link {{ setActive('about')}}" href="{{route('about')}}">@lang('About')</a>
               </li>
         
               {{--                              Portfolio                                --}}
               <li class="nav-item">
                  <a class="nav-link {{ setActive('portafolio')}}" href="{{route('portafolio')}}">@lang('Portfolio')</a>
               </li>
         
               {{--                              Productos                                --}}
               {{-- Nota: el ('productos.*')  se coloca para que se mantenga activado en las subrutas de todas las rutas que le pertenezca a productos--}}
               <li class="nav-item">
                  <a class="nav-link {{ setActive('productos.*')}}" href="{{route('productos.index')}}">@lang('Products')</a>
               </li>
         
               {{--                                Contacto                                --}}
               <li class="nav-item">
                  <a class="nav-link {{ setActive('contact')}}" href="{{route('contact')}}">@lang('Contact')</a>
               </li>

            </ul>
            <ul class="nav nav-pills ml-auto">

                  {{--                   Register & Login                            --}}
                  @guest {{-- guest muestra el contenido si no hemos iniciado sesion --}}
                  <li class="nav-item">
                     <a class="nav-link {{ setActive('login')}}" href="{{route('login')}}">@lang('Login')</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ setActive('register')}}" href="{{ route('register')}}">@lang('Register')</a>
                  </li>
         
               {{--                      Logout                             --}}
               @else {{-- En el caso de tener un usuario autenticado --}}
                  <li class="nav-item">
                     <a class="nav-link" href="#" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     @lang('Logout')</a>
                  </li>
               @endguest

            </ul>

      </div>
   </div>

   
   
</nav>

<form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
@csrf
</form>
{{-- 
 while card o algo asii: proyects.*
 Se utiliza para que en la navegacion se quede fija esa parte del programa --}}