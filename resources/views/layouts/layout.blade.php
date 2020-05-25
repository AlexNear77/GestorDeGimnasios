<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="{{ mix('css/app.css')}}">
   {{-- Scripts NOTA: el atributo defer hace que se ejecuten al final del la carga html --}}
   <script src="{{ mix('js/app.js')}}" defer></script> 
   <title>@yield('title', 'Alex ')- MyGym</title>


</head>
<body>
   <div id="app" class="d-flex flex-column h-screen 
   justify-content-between ">
      
      <header>
         @include('partials.nav')
         @include('partials.mensajesStatus')
      </header>

      <main>
         @yield('content')
      </main>


      <footer class="bg-white page-footer font-small blue">
         <!-- Copyright -->
         <div class="footer-copyright text-center py-3 shadow">© 2020 Copyright:
           <a href="/"> Mygym.com</a>
         </div>
         <!-- Copyright -->
       </footer>

   </div>
  
</body>
</html>