@extends('layouts.app')

@section('title','Habitaciones')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{route('habitacion.create')}}" class="btn btn-primary">Add New</a>
                <a href="{{route('typeRoom.index')}}" class="btn btn-info">Tipo de habitacion</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="title">Habitaciones</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Numero</th>
                                <th>Tipo</th>
                                <th>Descripccion</th>
                                <th>Estatus</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $key => $room)
                                        <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$room->num_room}}</td>
                                        <td>{{$room->type_room_id}}</td>
                                        <td>{{$room->description}}</td>
                                        <td>{{$room->status_room}}</td>
                                        <td>${{$room->prize_room}}</td>
                                            <td>
                                                <a href="{{ route('habitacion.edit',$room->id) }}"  class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $room->id }}" action="{{ route('habitacion.destroy',$room->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$room->id}}').submit();
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
