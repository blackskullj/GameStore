@extends('layouts.sbadmin')

@section('title')
Listado de Clientes
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Clientes</div>

                <div class="card-body">
                    <a href="{{ route('cliente.create') }}" class="btn btn-success btn-sm">Agregar Cliente</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Vialidad</th>
                                <th>Número</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                            </tr>
                        </thead>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->domicilioCalle }}</td>
                            <td>{{ $cliente->domicilioNumero }}</td>
                            <td>{{ $cliente->correoElectronico }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>
                                <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-sm btn-info">Ver
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