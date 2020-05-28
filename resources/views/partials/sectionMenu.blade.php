
   <section class=" search-and-user ">
     {{-- <form>
       <input type="search" placeholder="Search Pages...">
       <button type="submit" aria-label="submit form">
         <svg aria-hidden="true">
           <use xlink:href="#search"></use>
         </svg>
       </button>
     </form> --}}
     
     
     <ul class="nav navbar-nav ml-auto  ">
       {{--                         OPCIONES DE USUARIO              --}}
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ete" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
           {{auth()->user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          {{-------------------------------------------------------}}
          {{--                    btn mi count                   --}}
          {{-------------------------------------------------------}}
           <a href="/usuarios/{{auth()->id()}}/editar" class="dropdown-item">Mi cuenta</a>
           <div class="dropdown-divider"></div>
           {{-------------------------------------------------------}}
           {{--                    btn mi salir                   --}}
           {{-------------------------------------------------------}}
           @guest
            @else {{-- En el caso de tener un usuario autenticado por si las dudas! --}}
                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                @lang('Logout')</a>
              @endguest
        
        </div>
      </li>
     </ul>


{{-- Parte de logut --}}
</section>
<form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
@csrf
</form>




{{-- 
<li class="dropdown text-white">

   <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{auth()->user()->name}} <b class="caret"></b></a>
   <ul class="dropdown-menu">
     <li >
         <a href="/usuarios/{{auth()->user()->id}}/edit" class="text-white">Mi cuenta</a>
     </li>
     <li class="nav-item">

       
     </li>
   </ul>
</li> --}}