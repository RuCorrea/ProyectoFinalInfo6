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
    <h1>Esta es la pagina para mostrar proveedores</h1>
    
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
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
          @foreach ($proveedores as $proveedor)
            <tr>
            <th scope="row">{{ $cliente->id }}</th>
              <td>{{ $proveedor->razon_social }}</td>
              <td>{{ $proveedor->tipo_de_persona }}</td>
              <td>{{ $proveedor->rfc }}</td>
              <td>{{ $proveedor->domicilio }}</td>
              <td>{{ $proveedor->email }}</td>
              <td>{{ $proveedor->telefono }}</td>
              
            </tr> 
          @endforeach
    
        </tbody>
      </table>
      <a href="{{ route('proveedores.create') }}" class="btn btn-success">Agregar</a>
    
</body>
</html>