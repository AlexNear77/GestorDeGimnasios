<nav>
   <ul>
      <li class="{{ setActive('home')}}"><a href="{{route('home')}}">Inicio</a></li>
      <li class="{{ setActive('about')}}"><a href="{{route('about')}}">Nosotros</a></li>
      <li class="{{ setActive('proyects.*')}}"><a href="{{route('proyects.index')}}">Proyectos</a></li>
      <li class="{{ setActive('contact')}}"><a href="{{route('contact')}}">Contactanos</a></li>
   </ul>
</nav>


// while card o algo asii: proyects.*
// Se utiliza para que en la navegacion se quede fija esa parte del programa