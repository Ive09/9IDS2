@extends('adminlte::page')

@section('title', 'Autos')

@section('content_header')
    <h1>Autos</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Lista de Autos</h3>
        </div>
        <div class="box-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Color</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th style="width:22%; height:22%; text-align:center" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($autos as $auto)
                        <tr>
                            <td>{{ $auto['matricula'] }}</td>
                            <td>{{ $auto['color'] }}</td>
                            <td>{{ $auto['modelo'] }}</td>
                            <td>{{ $auto['marca'] }}</td>
                            <td>
                                <a href="{{route('auto.nuevo',['id' => $auto['id']])}}" class="btn btn-success btn-sm rounded-0">
                                    <span class="far fa-edit"> Editar</span>
                                </a>
                            </td>
                            <td>
                                <a>
                                <form action="{{route('auto.eliminar',['id' => $auto['id']])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$auto['id']}}">
                                    <button type="submit" class="btn btn-danger btn-sm rounded-0">
                                        <span class="far fa-edit">Eliminar</span>
                                </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('js')
    <script>
        $('#table-data').DataTable({
            "scrollX": true
        });
    </script>
@stop
