@extends('adminlte::page')

@section('title', 'Auto')

@section('content_header')
    <h1>Auto</h1>
@stop

@section('content')
    <div class="container mt-5" style="text-align: center">
        <form action="{{route('auto.guardar')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$auto->id}}">
            <div>
                <h1><b>Registro</b></h1>
            </div>
            <br>

            <div class="form-group">
                <h4>Matricula</h4>
                <input type="text" class="form-control" id="matricula" name="matricula" value="{{$auto->matricula}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Color</h4>
                <input type="text" class="form-control" id="color" name="color" value="{{$auto->color}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Modelo</h4>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{$auto->modelo}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Marca</h4>
                <input type="text" class="form-control" id="marca" name="marca" value="{{$auto->marca}}" required>
            </div>
            <br>

            <div>
                <button type="submit" class="btn btn-success" id="enviar">Guardar</button>
            </div>
        </form>
    </div>
@stop

