@extends('layouts.app')

@section('title','Agregar Slider')

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
                        <h4 class="title">Agregar Slider</h4>
                    </div>
                    <br> <br>
                    <div class="card-content">
                        <form method="POST" action="{{url('/admin/slider/store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div style="padding:30px" class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Slider imagen</label>
                                        <input type="file" name="imagen" accept="image/png, .jpeg, .jpg">
                                </div>
                            </div>
                            <a href="{{ url('/admin/sliders') }}" class="btn btn-danger">Atrás</a>
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

<script type="text/javascript">
$('#sandbox-container .input-daterange').datepicker({
});
</script>

@endpush
