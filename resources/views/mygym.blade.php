@extends('layouts.layoutMenu')

@section('title','Gimnasios')

@section('content')  
 <div class="container">
   <div class="row">
       
       <div class="col-12 p-5 col-lg-6">
           <h1 class="diplay-4 text-primary">Bienvenido</h1>
           <p class="lead text-secondary">
               Administra tus gimnasios de manera rapida y sencilla, en esta pagina podras tener el control de tus clientes y sus fechas de vencimiento, también podrás agregar tus productos que vendes para poder tener un control de ellos, y ver los reportes de todas tus acciones.
               <br>
               Administra a tus empleados, mateniendo un control de acceso a tu pagina!
           </p>
           @if (auth()->user()->gymActivo_id)    
           <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('clientes.index')}}">Ver clientes</a>
           @else
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('gyms.create')}}">Registra tu primer Gimnasio</a>
            @endif
           
       </div>
       <div class="col-7 mx-auto d-block col-lg-6">
           <img class="img-fluid mb-4 img-responsive " src="/img/home.svg" alt="Gestor de Gimnasios">
       </div>
   </div>
   <br><br><br>
</div>
@endsection