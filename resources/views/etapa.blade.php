@extends('adminlte::page')
@section('title','Agregar etapa')

@section('content_header')
<h1>Etapas</h1>
@stop

@section('content')

    <div class="container mt-5" style="text-align: center">
        <form action="{{route('etapa.guardar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$etapa->id}}">
            <div>
                <h1><b>Registro</b></h1>
            </div>
            <br>

            <div  class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value="{{$etapa->nombre}}" name="nombre" required>
            </div>

            <div  class="form-group">
                <label for="duracion">Duracion</label>
                <input type="text" class="form-control" value="{{$etapa->duracion}}" name="duracion" required>
            </div>

            <div>
                <label class="col-sm-3 col-form-label" for="id_division">Servicio</label>
                <div>
                    <select name="id_servicio" class="form-control input-animation">
                    @foreach ($servicios as $servicio)
                    <option value="{{$servicio->id}}"{{$servicio->id == $etapa->id_servicio ? 'selected':''}}>{{$servicio->nombre}}</option>
                    @endforeach
                    </select>
                    <!--mostrar el error de validacion -->
                    @error('id_servicio')
                    <small style="color: red" > {{$message}}</small>
                    @enderror
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-success" id="enviar">Guardar</button>
        </form>
    </div>
    @stop
