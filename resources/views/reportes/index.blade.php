@extends('layouts.layoutMenu')

@section('title','Clientes')

@section('content')
<div class="container-fluid p-4">
   <div class="row">
     <div class="col-md-12">
       <div class="card border-primary mb-3 card-plain">
         <div class="card-header card-header-primary text-white bg-primary mb-3">
           <h1 class="card-title mt-0">Tabla de Reportes</h1>
           <div class="d-flex justify-content-between">
             <p class="card-category"> Lista de todo las ventas del gimnasio</p>
             
           </div>
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
                   Cliente o producto
                 </th>
                 <th>
                   Pago
                 </th>
                 <th class="text-center">
                   Fecha de registro
                 </th>
                 @if (auth()->user()->hasRoles('admin'))
                     
                 <th class="text-center">
                    Acciones
                  </th>
                 @endif
               </thead>
               <tbody>
                 @forelse ($reportes as $reporte)
                 <tr>
                   {{--                      ID                     --}}
                   <td>
                     {{ $reporte->id}}
                   </td>
                   {{--                      nombre                     --}}
                   <td>
                     {{$reporte->nombre}}
                   </td>
                   {{--                      pago                     --}}
                   <td>
                     ${{$reporte->pago}}
                   </td>
                   {{--                      facha de reporte                     --}}
                   <td class="text-center">
                     {{$reporte->created_at}}
                   </td>
                   @if (auth()->user()->hasRoles('admin'))
                       
                   <td class="text-center">
                     {{--                  Botonos de eliminar                --}}
                     <div class="btn-group btn-group-sm">
                       <a  href="#" 
                           class="btn btn-danger"
                           onclick="document.getElementById('delete-reporte').submit()">
                         Eliminar
                       </a>

                     </div>
                     {{--            Form para eliminar cliente            --}}
                     <form id="delete-reporte" action="{{route('reportes.destroy', $reporte)}}" method="post" class="d-none">
                        @csrf @method('DELETE')
 
                     </form>
                   </td>
                   @endif
                  </tr>
                 @empty
                   No hay Reportes por el momento.
                 @endforelse
                   {{-- el metod links es para hacer una paginacion dependiendo de lo que queramos  --}}
                   {{ $reportes->links()}}
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection