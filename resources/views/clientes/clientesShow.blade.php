@extends('layouts.sbadmin')

@section('title')
Vista de producto
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producto</div>

                <div class="card-body">
                    <a href="{{route('cliente.index')}}" class="btn btn-default btn-sm">Listado de Productos</a>
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
                            <td>{{ $cliente->codigo }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->descripcion }}</td>
                            <td>{{ $cliente->precio }}</td>
                            <td>{{ $cliente->existencia }}</td>
                            <td>
                                <a href="{{ route('cliente.edit', $cliente->id) }}"
                                    class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">
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