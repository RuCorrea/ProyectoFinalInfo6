<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>
</head>
<body>
    <div class="container">
        @include('fragments.nav-bar')
        @yield('content')
    </div>
    <h1>Esta es la pagina principal de proyectos</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Iva</th>
            <th scope="col">Total</th>
            <th scope="col">Concepto</th>
            <th scope="col">Comentarios</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($proyectos as $proyecto)
            <tr>
            <th scope="row">{{ $proyecto->id }}</th>
              <td>{{ $proyecto->nombre }}</td>
              <td>{{ $proyecto->fecha }}</td>
              <td>{{ $proyecto->subtotal }}</td>
              <td>{{ $proyecto->iva }}</td>
              <td>{{ $proyecto->total }}</td>
              <td>{{ $proyecto->concepto }}</td>
              <td>{{ $proyecto->comentarios_adicionales }}</td>
              
            </tr> 
          @endforeach
    
        </tbody>
      </table>
      <a href="{{ route('proyectos.create') }}" class="btn btn-success">Agregar</a>
        
    
</body>
</html>