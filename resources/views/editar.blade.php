@extends('layouts.app')

@section('content')
<div class="container col-md-5">
<h3 class="text-center mb-3 pt-3">Editar Usuario N°{{$personas->id}}</h3>
<form action="{{url('actualizar/'.$personas->id.'/actualizar')}}" method="POST">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" value="{{$personas->nombre}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="apellido" id="apellido" value="{{$personas->apellido}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="genero" id="genero" value="{{$personas->genero}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="mail" name="email" id="email" value="{{$personas->email}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$personas->fecha_nacimiento}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
    </form>
</div> 
@endsection