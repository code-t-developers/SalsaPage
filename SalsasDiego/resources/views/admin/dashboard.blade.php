@extends('layouts.app')
@section('title','Dashboard')
@push('css')

@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">local_hotel</i>
                        </div>
                        <p class="card-category">Sliders</p>
                    <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">local_hotel</i>
                        </div>
                        <p class="card-category">Recetas</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                                <i class="material-icons">menu_book</i>
                        </div>
                        <p class="card-category">Salsas</p>
                        <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Bienvenido</h4>
                                <p class="card-category">Aqui puedes administrar tu alojamiento</p>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>
@endsection

@push('script')

@endpush