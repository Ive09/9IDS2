@extends('adminlte::page')

@section('title', 'Etapas')

@section('content_header')
    <h1>Etapas</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Lista de etapas</h3>
        </div>
        <div class="box-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Duracion</th>
                        <th>Servicio</th>
                        <th style="width:22%; height:22%; text-align:center" colspan="2">Opciones</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($etapas as $etapa)
                    <tr>
                        <td>{{$etapa['nombre']}}</td>
                        <td>{{$etapa['duracion']}} minutos</td>
                        <td>{{$etapa->servicio->nombre}}</td>

                        <td>
                            <a href="{{route('etapa.nueva',['id' => $etapa ['id']])}}" class="btn btn-success btn-sm rounded-0">
                                <span class="far fa-edit">Editar</span>
                            </a>
                        </td>

                        <td>
                            <a>
                            <form action="{{route('etapa.eliminar',['id' => $etapa['id']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$etapa['id']}}">
                                <button type="submit" class="btn btn-danger btn-sm rounded-0">
                                    <span class="far fa-edit">Eliminar</span>
                                </button>
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