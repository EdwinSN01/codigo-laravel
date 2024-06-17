<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @include('partials.nav')
    <div class="container">@yield('content')</div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>


<table class="table">
  <thead class="table table-bordered">
      <tr>
          <th scope="col" class="{{ request('home') ? 'activo' : ''}}"><a href="/"><Home</a></th>
          <th scope="col" class="{{ request('servicios') ? 'activo' : ''}}"><a href="/"><Servicios</a></th>
          <th scope="col" class="{{ request('nosotros') ? 'activo' : ''}}"><a href="/"><Nosotros</a></th>
          <th scope="col" class="{{ request('proyectos') ? 'activo' : ''}}"><a href="/"><Proyectos</a></th>
          <th scope="col" class="{{ request('contactos') ? 'activo' : ''}}"><a href="/"><Contactos</a></th>

          <footer class="py-3 my-4">
            <p class="text-center text-muted">© 2024 Código-laravel, Derechos Reservados-PERÚ</p>
          </footer>
          