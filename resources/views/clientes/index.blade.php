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
    <h1>Esta es la pagina principal de clientes</h1>

    
    <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar</a>
        
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Razon Social</th>
            <th scope="col">Tipo de persona</th>
            <th scope="col">RFC</th>
            <th scope="col">Domicilio</th>
            <th scope="col">email</th>
            <th scope="col">Telefono</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clientes as $cliente)
            <tr>
            <th scope="row">{{ $cliente->id }}</th>
              <td>{{ $cliente->razon_social }}</td>
              <td>{{ $cliente->tipo_de_persona }}</td>
              <td>{{ $cliente->rfc }}</td>
              <td>{{ $cliente->domicilio }}</td>
              <td>{{ $cliente->email }}</td>
              <td>{{ $cliente->telefono }}</td>
              
            </tr> 
          @endforeach
    
        </tbody>
      </table>
</body>
</html>