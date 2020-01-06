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
                        <h4 class="title">Agregar Promocion</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{ route('promocion.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div style="padding:30px" class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Habitacion:</label>
                                        <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control" name="type" id="">

                                                    <option value=""></option>

                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descripccion:</label>
                                        <textarea maxlength="180" name="description" class="form-control" id="descriptionFormLodg" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="input-daterange input-group" id="datepicker">
                                                <input type="text" class="input-sm form-control" name="start" />
                                                <span class="fa fa-home">to</span>
                                                <input type="text" class="input-sm form-control" name="end" />
                                            </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo:</label>
                                        <div class="select-wrap">
                                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                                <select class="form-control" name="type" id="">

                                                    <option value=""></option>

                                                </select>
                                        </div>
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
                                        <input type="text" class="form-control" name="precio">
                                    </div>
                                </div>

                            </div>
                            <a href="{{ route('promocion.index') }}" class="btn btn-danger">Back</a>
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

<script type="text/javascript">
$('#sandbox-container .input-daterange').datepicker({
});
</script>

@endpush
