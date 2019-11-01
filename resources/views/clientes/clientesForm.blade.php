@extends('layouts.sbadmin')

@section('title')
Captura de Cliente
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>
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

                    @if(isset($cliente))
                    {!! Form::model($cliente, ['route' => ['cliente.update', $cliente->id], 'method' => 'PATCH']) !!}
                    @else
                    {!! Form::open(['route' => 'cliente.store']) !!}
                    @endif
                    {{--@csrf--}}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', $cliente->nombre ?? '', ['class' => $errors->has('nombre') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'nombre',
                        'placeholder' => 'Nombre del cliente']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('domicilioCalle', 'Vialidad') !!}
                        {!! Form::text('domicilioCalle', $cliente->domicilioCalle ?? '', ['class' =>
                        $errors->has('domicilioCalle') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'domicilioCalle',
                        'placeholder' => 'Nombre de la Vialidad']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('domicilioNumero', 'Número') !!}
                        {!! Form::number('domicilioNumero', $cliente->domicilioNumero ?? '', ['class' =>
                        $errors->has('domicilioNumero') ? 'form-control is-invalid' : 'form-control', 'id' =>
                        'domicilioNumero',
                        'placeholder' => 'Número de casa']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('correoElectronico', 'E-mail') !!}
                        {!! Form::email('correoElectronico', $cliente->correoElectronico ?? '', ['class' =>
                        $errors->has('correoElectronico') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'correoElectronico',
                        'placeholder' => 'Correo Electrónico']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefono', 'Numero de teléfono') !!}
                        {!! Form::text('telefono', $producto->telefono ?? '', [
                        'class' => $errors->has('telefono') ? 'form-control is-invalid' : 'form-control',
                        'id' => 'telefono',
                        'placeholder' => 'Teléfono del cliente']) !!}
                    </div>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary'] ) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection