@extends('layouts.sbadmin')

@section('title')
Pedidos
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Pedidos</div>

                <div class="card-body">
                    <a href="{{ route('pedido.create') }}" class="btn btn-success btn-sm">Agregar Pedido</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->fechaPedido }}</td>
                            <td>{{ $pedido->clientes->nombre }}</td>
                            <td>
                                <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-sm btn-info">Ver
                                    Detalle</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection