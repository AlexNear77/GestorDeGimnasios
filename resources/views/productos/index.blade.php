@extends('layouts.layout')

@section('title','Productos')

@section('content')

<div class="container-fluid p-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-primary mb-3 card-plain">
        <div class="card-header card-header-primary text-white bg-primary mb-3">
          <h1 class="card-title mt-0"> Productos</h1>
          <div class="d-flex justify-content-between">
            <p class="card-category"> Lista de todo los productos del gimnasio</p>
            
          </div>
        </div>
        {{--                   Comienzo de tabla      --}}
        <div class="ml-auto pr-3">
          {{--                   Botton agregar producto      --}}
          <a class="btn btn-primary pb-2" href="{{ route('productos.create')}}">Agregar producto</a>
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
                  Categoria
                </th>
                <th>
                  Descripcion
                </th>
                <th class="text-center">
                  Stock
                </th>
                <th class="text-center">
                  Precio venta
                </th>
                <th class="text-center">
                  Precio compra
                </th>
                <th class="text-center">Acciones</th>
              </thead>
              <tbody>
                @forelse ($productos as $producto)
                <tr>
                  {{--                      ID                     --}}
                  <td>
                    {{ $producto->id}}
                  </td>
                  {{--                      Descripcion                     --}}
                  <td>
                    {{$producto->description}}
                  </td>
                  {{--                      Categoria                     --}}
                  <td>
                    @foreach ($categorias as $categoria)
                        @if ($categoria->id == $producto->category_id)
                            {{$categoria->nombre}}
                        @endif
                    @endforeach
                  </td>
                  {{--                      Stock                     --}}
                  <td class="text-center">
                    {{$producto->stock}}
                  </td>
                  {{--                      Precio compra                  --}}
                  <td class="text-center">
                    ${{$producto->buy}}.00
                  </td>
                  {{--                      Precio venta                     --}}
                  <td class="text-center">
                    ${{$producto->sale}}.00
                  </td>
                  <td class="text-center">
                    {{--                  Botonos de eliminar                --}}
                    <div class="btn-group btn-group-sm">
                      <a class="btn btn-secondary" href="{{route('productos.edit',$producto)}}">
                        Editar
                      </a>
                      <a  href="#" 
                          class="btn btn-danger"
                          onclick="document.getElementById('delete-producto').submit()">
                        Eliminar
                      </a>
                        
                    </div>
                    {{--            Form para eliminar producto            --}}
                    <form id="delete-producto" action="{{route('productos.destroy', $producto)}}" method="post" class="d-none">
                       @csrf @method('DELETE')

                    </form>
                  </td>
                </tr>
                @empty
                  No hay mas proyectos por el momento.
                @endforelse
                  {{-- el metod links es para hacer una paginacion dependiendo de lo que queramos  --}}
                  {{ $productos->links()}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


{{-- <br><small>{{ $proyect->description}}</small><br>{{$proyect->updated_at->diffForHumans()}} --}}