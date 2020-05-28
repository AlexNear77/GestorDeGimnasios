<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="{{ mix('css/app.css')}}">
   <title>Document</title>
</head>
<body>
   <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="error-template">
                  <h1>
                      Oops!</h1>
                  <h2>
                      404 Not Found</h2>
                  <div class="error-details">
                     Lo sentimos, se ha producido un error. ¡No se encontró la página solicitada!
                  </div>
                  <div class="error-actions">
                     @if (auth())
                     <a href="/clientes" class="btn btn-primary btn-lg">
                        <span class="glyphicon glyphicon-home"></span>
                          Regresar a mi gimnasio
                        </a>
                     @else 
                     <a href="/" class="btn btn-primary btn-lg">
                        <span class="glyphicon glyphicon-home"></span>
                           Regresar al inicio 
                        </a>
                     @endif
                  </div>
              </div>
          </div>
      </div>
   </div>
   
</body>
</html>