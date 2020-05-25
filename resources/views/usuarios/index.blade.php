@extends('layouts.layoutMenu')

@section('title','Usuarios')

@section('content')
<div class="container-fluid p-4">
   <div class="row">
     <div class="col-md-12">
       <div class="card border-primary mb-3 card-plain">
         <div class="card-header card-header-primary text-white bg-primary mb-3">
           <h1 class="card-title mt-0">Tabla de usuarios</h1>
           <div class="d-flex justify-content-between">
             <p class="card-category"> Lista de todo los usuarios del gimnasio</p>
             
           </div>
         </div>
         {{--                   Comienzo de tabla      --}}
         <div class="ml-auto pr-3">
           {{--                   Botton agregar producto      --}}
           <a class="btn btn-primary pb-2" href="{{ route('usuarios.create')}}">Registrar usuario</a>
         </div>
         {{--                              Lista            --}}
         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-hover">
               <thead class="">
                 <th>
                   ID
                 </th>
                 <th>
                   Nombre
                 </th>
                 <th>
                   Correo
                 </th>
                 <th class="text-center">
                   Tipo de usuario
                 </th>
                 <th class="text-center">
                    Acciones
                  </th>
               </thead>
               <tbody>
                 @forelse ($usuarios as $usuario)
                 <tr>
                   {{--                      ID                     --}}
                   <td>
                     {{ $usuario->id}}
                   </td>
                   {{--                      Nombre                     --}}
                   <td>
                     {{$usuario->name}}
                   </td>
                   {{--                      Correo                     --}}
                   <td>
                     {{$usuario->email}}
                   </td>
                   {{--                      Role                     --}}
                   <td class="text-center">
                     {{$usuario->role}}
                   </td>
                   <td class="text-center">
                     {{--                  Botonos de eliminar                --}}
                     <div class="btn-group btn-group-sm">
                       <a class="btn btn-secondary" href="{{route('usuarios.edit',$usuario)}}">
                         Actualizar usuario
                       </a>
                       <a  href="#" 
                           class="btn btn-danger"
                           onclick="document.getElementById('delete-usuario').submit()">
                         Eliminar
                       </a>
                         
                     </div>
                     {{--            Form para eliminar cliente            --}}
                     <form id="delete-usuario" action="{{route('usuarios.destroy', $usuario)}}" method="post" class="d-none">
                        @csrf @method('DELETE')
 
                     </form>
                   </td>
                 </tr>
                 @empty
                   No hay usuarios por el momento.
                 @endforelse
                   {{-- el metod links es para hacer una paginacion dependiendo de lo que queramos  --}}
                   {{ $usuarios->links()}}
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection