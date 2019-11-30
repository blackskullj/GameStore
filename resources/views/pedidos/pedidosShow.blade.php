@extends('layouts.app')

@section('title')
Info. Pedido
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del Pedido {{ $pedido->id }}</div>

                <div class="card-body">
                    <a href="{{ route('pedido.index') }}" class="btn btn-default btn-sm">Listado de Pedidos</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Productos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->fechaPedido }}</td>
                                <td>{{ $pedido->cliente->nombre }}</td>
                                <td>

                                    <ul>
                                        @foreach ($pedido->productos as $producto)
                                        <li> {{ $producto->codigo }} {{ $producto->nombre }} </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection