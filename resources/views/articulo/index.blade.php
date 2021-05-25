@extends('layouts.plantillabase')

@section('contenido')

<a href="articulos/create" class="btn btn-primary">Crear</a>

<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $articulo)
    <tr>
        <td>{{ $articulo-> id}}</td>
        <td>{{ $articulo-> codigo}}</td>
        <td>{{ $articulo-> descripcion}}</td>
        <td>{{ $articulo-> cantidad}}</td>
        <td>{{ $articulo-> precio}}</td>

        <td>
        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
        <form action="{{route ('articulos.destroy',$articulo->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form>
        
        </td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection