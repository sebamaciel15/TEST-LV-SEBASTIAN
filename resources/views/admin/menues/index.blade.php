@extends('adminlte::page')

@section('title', 'TEST-LV-SEBASTIAN')

@section('content_header')
    <h1>Lista de menú</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.menues.create')}}">Agregar menú</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan-2></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($menues as $menu)
                        <tr>
                            <td>{{$menu->id}}</td>
                            <td>{{$menu->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.menues.edit', $menu)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.menues.destroy', $menu)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


