@extends('layouts.app')

@section('title','Editar Salsa')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-12">
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header card-header-primary" data-background-color="purple">
                        <h4 class="title">Editar salsa</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{ URL('/admin/salsas/update/'.$salsa->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div style="padding:30px" class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" required value="{{$salsa->nombre}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contenido Neto:</label>
                                        <input type="text" class="form-control" name="contenidoNeto" required value="{{$salsa->contenidoNeto}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Precio Unitario:</label>
                                        <input type="text" class="form-control" name="precioUnitario" required value="{{$salsa->precioUnitario}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Precio Mayoreo:</label>
                                        <input type="text" class="form-control" name="precioMayoreo" value="{{$salsa->precioMayoreo}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Ingredientes:</label>
                                        <input type="text" class="form-control" name="ingredientes" value="{{$salsa->ingredientes}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Preparación:</label>
                                        <input type="text" class="form-control" name="preparacion" value="{{$salsa->preparacion}}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Receta Del Mes:</label>
                                        <input type="text" class="form-control" name="recetaMes" value="{{$salsa->recetaMes}}">
                                    </div>
                                </div>

                                <div style="padding:30px" class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Imagen Pequeña</label>
                                            <input type="file" name="imagenPequenia" accept="image/png, .jpeg, .jpg">
                                    </div>
                                </div>

                                <div style="padding:30px" class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Imagen Grande</label>
                                            <input type="file" name="imagenGrande" accept="image/png, .jpeg, .jpg">
                                    </div>
                                </div>                        

                            </div>
                            <a href="{{ route('salsas.index') }}" class="btn btn-danger">Atrás</a>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
