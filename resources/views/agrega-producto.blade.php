@extends('layouts.sbadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Productos</div>

                <div class="card-body">
                    @if(isset($programa))
                        {!! Form::model([$producto,'route' => 'producto.update', 'method' => 'PATCH']) !!}
                        <!--<form action="{{-- route('producto.update', $producto->id) --}}" method="POST"> -->
                        <!--<input type="hidden" name="_method" value="PATCH">-->
                    @else
                            {!! Form::open(['route' => 'producto.store']) !!}
                        <!--<form action="{{route('producto.store') }}" method="POST"> -->
                    @endif
                        {{--@csrf--}}
                        <div class="form-group">
                            <!--<label for="nombre">Nombre del Producto</label>-->
                            {!! Form::label('producto', 'Producto') !!}
                            <!--<input name="nombre" value="{{ $producto -> nombre ?? ''}}" type="text" class="form-control" id="nombre" placeholder="Ingresar nombre del producto">-->
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Nombre del producto']) !!}
                        </div>
                        <div class="form-group">
                            <label for="codigo">Código del Producto</label>
                            <!--<input name="codigo" value="{{ $producto -> codigo ?? '' }}" type="text" class="form-control" id="codigo" placeholder="Ingresar código del producto">-->
                            {!! Form::text('clave', null, ['class' => 'form-control', 'id' => 'codigo', 'placeholder', 'Código del producto']) !!}
                            @error('codigo')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion del Producto</label>
                            <input type="text" name="descripcion" value="{{ $programa -> descripcion ?? '' }}" class="form-control" id="descripcion" placeholder="Descripción del producto"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio del Producto</label>
                            <input type="float" name="precio" value="{{ $producto -> precio ?? '' }}" id="precio">
                        </div>
                        <div class="form-group">
                            <label for="existencia">Artículos en existencia</label>
                            <input type="number" name="existencia" value="{{ $producto -> existencia ?? '' }}" id="existencia">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    <!--</form>-->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection