

   <nav>  
      {{--                    Nombre del Gym sideBar         --}}
     <a href="#0" class="text-center">
      <h2 class="logo" alt="forecastr logo">MyGym</h2>
     </a>
     {{--                       Boton oculto                  --}}
     <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
       <svg width="20" height="20" aria-hidden="true">
         <use xlink:href="#down"></use>
       </svg>
     </button>
     {{--                       seccion Admin                 --}}
     <ul class="admin-menu">
       <li class="menu-heading">
         <h3>{{auth()->user()->role}}</h3>
       </li>
       <li>
         {{--                       Inicio                  --}}
         <a href="#0">
           <svg>
             <use xlink:href="#pages"></use>
           </svg>
           <span>Inicio</span>
         </a>
       </li>
       {{--                       Clientes                  --}}
       <li>
         <a href="#0">
           <svg>
             <use xlink:href="#users"></use>
           </svg>
           <span>Clientes</span>
         </a>
       </li>
       {{--                       Reportes                  --}}
       <li>
         <a href="#0">
             <svg>
               <use xlink:href="#trends"></use>
             </svg>
             <span>Reportes</span>
           </a>
       </li>
       {{--                       Productos                  --}}
       <li>
         <a href="#0">
           <svg>
             <use xlink:href="#collection"></use>
           </svg>
           <span>Productos</span>
         </a>
       </li>
       @if (auth()->user()->hasRoles('admin'))
       {{--                      Seccion Congiguracioes                 --}}

       <li class="menu-heading">
         <h3>Configuraciones</h3>
       </li>
       {{--                       Boton oculto                  --}}
       <li>
         <a href="#0">
           <svg>
             <use xlink:href="#settings"></use>
           </svg>
           <span>Gymnasio</span>
         </a>
       </li>
       
       <li>
         <a href="{{route('usuarios.index')}}">
           <svg>
             <use xlink:href="#options"></use>
           </svg>
           <span>Configuraciones</span>
         </a>
       </li>
           
       @endif
       {{--                       Boton oculto                  --}}
       <li>
         <button id="colapsar" class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
           <svg aria-hidden="true">
             <use xlink:href="#collapse"></use>
           </svg>
           <span>Collapse</span>
         </button>
       </li>
     </ul>
   </nav>
