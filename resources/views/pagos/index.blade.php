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
    <h1>Esta es la pagina principal de pagos</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Provedor ID</th>
            <th scope="col">Proyecto ID</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Metodo</th>
            <th scope="col">Referencia</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pagos as $pago)
            <tr>
            <th scope="row">{{ $pago->id }}</th>
              <td>{{ $pago->proveedor_id }}</td>
              <td>{{ $pago->proyecto_id }}</td>
              <td>{{ $pago ->monto }}</td>
              <td>{{ $pago->fecha }}</td>
              <td>{{ $pago->metodo }}</td>
              <td>{{ $pago->referencia }}</td>
              
            </tr> 
          @endforeach
    
        </tbody>
      </table>
      <a href="{{ route('pagos.create') }}" class="btn btn-success">Agregar</a>  
    
</body>
</html>