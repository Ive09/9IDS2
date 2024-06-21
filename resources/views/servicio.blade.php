@extends('adminlte::page')

@section('title', 'Servicio')

@section('content_header')
    <h1>Servicio</h1>
@stop

@section('content')
    <div class="container mt-5" style="text-align: center">
        <form action="{{route('servicio.guardar')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$servicio->id}}">
            <div>
                <h1><b>Registro</b></h1>
            </div>
            <br>

            <div class="form-group">
                <h4>Código:</h4>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$servicio->codigo}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Nombre:</h4>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$servicio->nombre}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Descripción:</h4>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$servicio->descripcion}}" required>
            </div>
            <br>

            <div class="form-group">
                <h4>Precio:</h4>
                <input type="text" class="form-control" id="precio" name="precio" value="{{$servicio->precio}}" required>
            </div>
            <br>

            <div>
                <button type="submit" class="btn btn-success" id="enviar">Guardar</button>
            </div>
        </form>
    </div>
@stop

