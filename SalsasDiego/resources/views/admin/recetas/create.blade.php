@extends('layouts.app')

@section('title','Agregar registro')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header card-header-primary" data-background-color="purple">
                        <h4 class="title">Agregar registro</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{ route('registro.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div style="padding:30px" class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre:</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email:</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contraseña:</label>
                                        <input type="password" class="form-control" name="pass">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Alojamiento:</label>
                                            <div class="select-wrap">
                                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                    <select class="form-control" name="lodg" id="">
                                                        @foreach ($lodgments as $lodg)
                                                        <option value="{{$lodg->id}}">{{$lodg->name_lodg}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                </div>


                            </div>
                            <a href="{{ route('registro.index') }}" class="btn btn-danger">Back</a>
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
