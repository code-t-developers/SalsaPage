@extends('layouts.app')

@section('title','Salsas')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{url('/admin/salsas/create')}}" class="btn btn-primary">Agregar una salsa</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Salsas</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Contenido Neto</th>
                                <th>Precio Unitario</th>
                                <th>Precio Mayoreo</th>
                                <th>Ingredientes</th>
                                <th>Preparación</th>
                                <th>Imagen Pequeña</th>
                                <th>Imagen Grande</th>
                                <th>Receta del mes</th>
                                
                                </thead>
                                <tbody>
                                    @foreach ($salsa as $salsas)
                                        <tr>
                                        <td>{{$salsas->id}}</td>
                                        <td>{{$salsas->nombre}}</td>
                                        <td>{{$salsas->contenidoNeto}}</td>
                                        <td>{{$salsas->precioUnitario}}</td>
                                        <td>{{$salsas->precioMayoreo}}</td>
                                        <td>{{$salsas->ingredientes}}</td>
                                        <td>{{$salsas->preparacion}}</td>
                                        <td>{{$salsas->imagenPequenia}}</td>
                                        <td>{{$salsas->imagenGrande}}</td>
                                        <td>{{$salsas->recetaMes}}</td>
                                            <td>
                                                <a href="{{ route('salsas.edit',$salsas->id) }}"  class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $salsas->id }}" action="{{ route('salsas.destroy',$salsas->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('¿Está seguro de deshabilitar la salsa {{$salsas->nombre}}?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$salsas->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
