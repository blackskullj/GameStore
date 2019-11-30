@extends('layouts.app')

@section('title')
Nuevo Pedido
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Pedido</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(isset($pedido))
                    {!! Form::model($pedido, ['route' => ['pedido.update', $pedido->id], 'method' => 'PATCH']) !!}
                    @else
                    {!! Form::open(['route' => 'pedido.store']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('fechaPedido', 'FechaPedido') !!}
                        {!! Form::date('fechaPedido', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('cliente_id', 'Cliente') !!}
                        {!! Form::select('cliente_id', $clientes, $cliente->id ?? null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('producto_id[]', 'Producto') !!}
                        {!! Form::select('producto_id[]', $productos, $seleccionados ?? null, ['class' =>
                        'form-control',
                        'multiple']) !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection