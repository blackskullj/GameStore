@extends('layouts.sbadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Productos</div>

                <div class="card-body">
                        <a href="{{route('producto.index')}}" class="btn btn-default btn-sm">Listado de Productos</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Articulos en Existencia</th>
                            </tr>
                        </thead>
                            <tr>
                                <td>{{ $producto->codigo }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->existencia }}</td>
                                <td>
                                    <a href="{{ route('producto.edit', $producto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('producto.destroy', $producto->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection