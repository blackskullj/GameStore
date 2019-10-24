@extends('layouts.sbadmin')

@section('title')
Captura de productos
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Productos</div>
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

                    @if(isset($producto))
                    {!! Form::model($producto, ['route' => ['producto.update', $producto->id], 'method' => 'PATCH']) !!}
                    @else
                    {!! Form::open(['route' => 'producto.store']) !!}
                    @endif
                    {{--@csrf--}}
                    <div class="form-group">
                        {!! Form::label('producto', 'Producto') !!}
                        {!! Form::text('nombre', $producto->nombre ?? '', ['class' => $errors->has('nombre') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'nombre',
                        'placeholder' => 'Nombre del producto']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('codigo', 'Código') !!}
                        {!! Form::text('codigo', $producto->codigo ?? '', ['class' => $errors->has('codigo') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'codigo',
                        'placeholder' => 'Código del producto']) !!}
                        @error('codigo')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::text('descripcion', $producto->descripcion ?? '', ['class' =>
                        $errors->has('descripcion') ? 'form-control is-invalid' : 'form-control', 'id' => 'descripcion',
                        'placeholder' => 'Descripción del producto']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('precio', 'Precio') !!}
                        {!! Form::number('precio', $producto->precio ?? '', ['class' => $errors->has('precio') ?
                        'form-control is-invalid' : 'form-control', 'id' => 'precio',
                        'placeholder' => 'Precio del producto']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('existencia', 'Existencia') !!}
                        {!! Form::number('existencia', $producto->existencia ?? '', [
                        'class' => $errors->has('existencia') ? 'form-control is-invalid' : 'form-control',
                        'id' => 'existencia',
                        'placeholder' => 'Artículos en existencia']) !!}
                    </div>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary'] ) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection