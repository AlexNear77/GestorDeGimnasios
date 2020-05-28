@extends('layouts.layoutMenu')

@section('title','Gimnasios')

@section('content')
<div class="container-fluid p-4">
   <div class="row">
     <div class="col-md-12">
       <div class="card border-primary mb-3 card-plain">
         <div class="card-header card-header-primary text-white bg-primary mb-3">
           <h1 class="card-title mt-0">Gimnasios</h1>
           <div class="d-flex justify-content-between">
             <p class="card-category"> Lista de todos gimnasios</p>
             
           </div>
         </div>
         {{--                   Botton agregar gym      --}}
         @if (auth()->user()->hasRoles('admin'))    
          <div class="ml-auto pr-3">
            <a class="btn btn-primary pb-2" href="{{ route('gyms.create')}}">Registrar Gym</a>
          </div>
         @endif
 
         {{--                              Lista            --}}
         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-hover">
               <thead class="">
                 <th>
                   ID
                 </th>
                 <th>
                   Clave
                 </th>
                 <th>
                   Nombre
                 </th>
                 <th class="text-center">
                   Ubicacion
                 </th>
                 <th class="text-center">
                  Ganancias
                </th>
                 <th class="text-center">
                  Acciones
                  </th>
               </thead>
               <tbody>
                 @forelse ($gyms as $gym)
                 <tr>
                   {{--                      ID                     --}}
                   <td>
                     {{ $gym->id}}
                   </td>
                   {{--                      clave                     --}}
                   <td>
                     {{$gym->nombre}}
                   </td>
                   {{--                      nombre                     --}}
                   <td>
                     ${{$gym->key}}
                   </td>
                   {{--                      Ubicacion                    --}}
                   <td class="text-center">
                     {{$gym->ubicacion}}
                   </td>
                   {{--                       Ganancias               --}}
                   <th class="text-center">
                     ${{$gym->ganancias}}
                   </th>
                   
                   <td class="text-center">
                      {{------------------------------------------}}
                      {{--                  Botones             --}}
                      {{-----------------------------------------}}
                      <div class="btn-group btn-group-sm">
                         <a class="btn btn-success" 
                         href="{{route('gyms.show',$gym)}}">
                         Seleccionar
                        </a>
                     @if (auth()->user()->hasRoles('admin'))
                        <a class="btn btn-warning" 
                              href="{{route('gyms.edit',$gym)}}">
                           Editar
                        </a>
                       <a  href="#" 
                           class="btn btn-danger"
                           onclick="document.getElementById('delete-gym').submit()">
                         Eliminar
                       </a>

                       {{--            Form para eliminar cliente            --}}
                       <form id="delete-gym" 
                       action="{{route('gyms.destroy', $gym)}}" method="post" class="d-none">
                       @csrf @method('DELETE')
                        </form>
                     @endif
                     </div>
                   </td>
                  </tr>
                 @empty
                   No hay gimnasios por el momento.
                 @endforelse
                   {{-- el metod links es para hacer una paginacion dependiendo de lo que queramos  --}}
                   {{ $gyms->links()}}
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection