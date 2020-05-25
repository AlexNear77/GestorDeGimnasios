@extends('layouts.layoutMenu')

@section('title','Clientes')

@section('content')
<div class="container-fluid p-4">
   <div class="row">
     <div class="col-md-12">
       <div class="card border-primary mb-3 card-plain">
         <div class="card-header card-header-primary text-white bg-primary mb-3">
           <h1 class="card-title mt-0">Tabla de clientes</h1>
           <div class="d-flex justify-content-between">
             <p class="card-category"> Lista de todo los clietes activos y intactivos del gimnasio</p>
             
           </div>
         </div>
         {{--                   Comienzo de tabla      --}}
         <div class="ml-auto pr-3">
           {{--                   Botton agregar producto      --}}
           <a class="btn btn-primary pb-2" href="{{ route('clientes.create')}}">Registrar cliente</a>
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
                   Folio
                 </th>
                 <th class="text-center">
                   Fecha de inicio
                 </th>
                 <th class="text-center">
                   Fecha de vencimiento
                 </th>
                 <th class="text-center">
                   Status
                 </th>
                 <th class="text-center">Acciones</th>
               </thead>
               <tbody>
                 @forelse ($clientes as $cliente)
                 <tr>
                   {{--                      ID                     --}}
                   <td>
                     {{ $cliente->id}}
                   </td>
                   {{--                      Descripcion                     --}}
                   <td>
                     {{$cliente->nombre}}
                   </td>
                   {{--                      Categoria                     --}}
                   <td>
                     {{$cliente->folio}}
                   </td>
                   {{--                      Stock                     --}}
                   <td class="text-center">
                     {{$cliente->fecha_inicio}}
                   </td>
                   {{--                      Precio compra                  --}}
                   <td class="text-center">
                     {{$cliente->fecha_vencimiento}}
                   </td>
                   {{--                      Precio venta                     --}}
                   <td class="text-center">
                      @if ($cliente->fecha_vencimiento >= now()->toDateTimeString('d-m-Y'))
                        <button type="button" class="btn btn-danger">Vencido</button>
                      @else
                        <button type="button" class="btn btn-danger">Activo</button>
                      @endif
                   </td>
                   <td class="text-center">
                     {{--                  Botonos de eliminar                --}}
                     <div class="btn-group btn-group-sm">
                       <a class="btn btn-secondary" href="{{route('clientes.edit',$cliente)}}">
                         Actualizar Pago
                       </a>
                       <a  href="#" 
                           class="btn btn-danger"
                           onclick="document.getElementById('delete-cliente').submit()">
                         Eliminar
                       </a>
                         
                     </div>
                     {{--            Form para eliminar cliente            --}}
                     <form id="delete-cliente" action="{{route('clientes.destroy', $cliente)}}" method="post" class="d-none">
                        @csrf @method('DELETE')
 
                     </form>
                   </td>
                 </tr>
                 @empty
                   No hay clientes por el momento.
                 @endforelse
                   {{-- el metod links es para hacer una paginacion dependiendo de lo que queramos  --}}
                   {{ $clientes->links()}}
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection