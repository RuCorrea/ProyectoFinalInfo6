@extends('layouts.master')
@section('content')
    <h1>Esta es la pagina principal de anticipos</h1>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">cliente</th>
            <th scope="col">Proyecto</th>
            <th scope="col">monto</th>
            <th scope="col">metodo</th>
            <th scope="col">referencia</th>
            <th scope="col">fecha</th>
            <th scope="col" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($anticipos as $anticipo)
              <tr>
              <th scope="row">{{ $anticipo->id }}</th>
                <td>{{ $anticipo->clientes }}</td>
                <td>{{ $anticipo->proyectos }}</td>
                <td>{{ $anticipo->monto }}</td>
                <td>{{ $anticipo->metodo }}</td>
                <td>{{ $anticipo->referencia }}</td>
                <td>{{ $anticipo->fecha }}</td>
                
              </tr>
            @endforeach
      
          </tbody>
    </table>
    <a href="{{ route('anticipos.create') }}" class="btn btn-success">Agregar</a>
@endsection
