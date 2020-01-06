@extends('layouts.app')
@section('title','Dashboard')
@push('css')

@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <a href="{{route('registro.create')}}" class="btn btn-primary">Registrar</a>
                @include('layouts.partial.msg')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Administradores</h4>
                        <p class="card-category">administradores de alojamientos</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Alojamiento</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $key=>$user)


                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <?php
                                            $name = DB::table('lodgments')->select('name_lodg')->where('id',$user->lodgment_id)->get();
                                        ?>
                                        @foreach ($name as $n)
                                        {{$n->name_lodg}}</td>
                                    @endforeach
                                    <td>
                                        <a href="{{ route('registro.edit',$user->id) }}" class="btn btn-info btn-sm"><i
                                                class="material-icons">mode_edit</i></a>

                                        <form id="delete-form-{{ $user->id }}" action="{{ route('registro.destroy',$user->id) }}"  style="display: none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Esta a punto de borrar un usuario. Esta seguro?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$user->id}}').submit();
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

@push('script')

@endpush
