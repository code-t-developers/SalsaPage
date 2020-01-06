@extends('layouts.app')

@section('title','Agregar alojamiento')

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
                        <h4 class="title">Agregar habitacion</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{ route('habitacion.update',$room->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div style="padding:30px" class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Numero de habitacion:</label>
                                    <input type="text" class="form-control" name="numh" value="{{$room->num_room}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estatus:</label>
                                        <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control" name="status" id="statusForm">
                                                    <option value="R">Reservado</option>
                                                    <option value="D">Disponible</option>

                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo:</label>
                                        <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control" name="type" id="">
                                                @foreach ($typeR as $tr)
                                                <option value="{{$tr->id}}">{{$tr->type_room}}</option>
                                                @endforeach


                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descripccion:</label>
                                    <textarea maxlength="180" name="description" class="form-control" id="descriptionFormLodg" rows="2">{{$room->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-">
                                    <div class="form-group label-floating text-md-left">
                                    <label for=""><i><span class="fa fa-usd fa-2x"></span></i></label>

                                        </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Precio</label>
                                    <input type="text" class="form-control" name="precio" value="{{$room->prize_room}}">
                                    </div>
                                </div>

                            </div>
                            <a href="{{ route('habitacion.index') }}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Save</button>
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
