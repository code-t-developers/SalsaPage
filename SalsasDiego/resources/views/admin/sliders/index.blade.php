@extends('layouts.app')

@section('title','Sliders')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{url('/admin/slider/create')}}" class="btn btn-primary">Agregar slider</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Sliders</h4>
                        </div>
                        <div class="card-content table-responsive" style="  overflow:scroll;">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Descripción</th>
                                </thead>
                                <tbody>
                                @foreach($slider as $sliders)
                                        <tr>
                                            <td>{{$sliders->id}}</td>
                                            <td>{{$sliders->slider}}</td>
                                            <td>{{$sliders->descripcion}}</td>
                                            <td>
                                               

                                                <form id="delete-form-{{$sliders->id}}" action="{{ route('slider.destroy',$sliders->id)}}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('¿Está seguro de deshabilitar el slider?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$sliders->id}}').submit();
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
