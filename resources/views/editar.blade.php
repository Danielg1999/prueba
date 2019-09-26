@extends('layouts.app')

@section('content')

<h3 class="text-center mb-3 pt-3">Editar {{$actualizar->id}}</h3>
<form action="{{url('actualizar/'.$actualizar->id.'/edit')}}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" value="{{$actualizar->nombre}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="apellido" id="apellido" value="{{$actualizar->apellido}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="genero" id="genero" value="{{$actualizar->genero}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="mail" name="email" id="email" value="{{$actualizar->email}}" class="form-control">
        </div>
        <div class="form-group">
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$actualizar->fecha_nacimiento}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
    </form>
    
@endsection