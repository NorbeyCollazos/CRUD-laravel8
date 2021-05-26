@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mb-3">Crear</a>

<table id="articulos" class="table table-striped">
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


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="styleshed">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#articulos').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,"Todos"]]
        });
    });
</script>
@stop






