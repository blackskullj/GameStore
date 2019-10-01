@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Productos</div>

                <div class="card-body">
                    <form action="{{ route('guardar') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingresar nombre del producto">
                        </div>
                        <div class="form-group">
                            <label for="codigo">Código del Producto</label>
                            <input name="codigo" type="text" class="form-control" id="codigo" placeholder="Ingresar código del producto">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion del Producto</label>
                            <textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio del Producto</label>
                            <input type="number" name="precio" id="precio">
                        </div>
                        <div class="form-group">
                            <label for="existencia">Artículos en existencia</label>
                            <input type="number" name="existencia" id="existencia">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection