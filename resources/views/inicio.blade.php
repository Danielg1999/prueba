@extends('plantilla')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                   
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th>Email</th>
                    <th>Fecha Nacimiento</th>
                    <th>Acciones</th>
                </thead>
                @foreach ($usuarios as $person)
                
                    
                        
                
                    <tr>
                        <td>{!! $usuarios->nombre !!}</td>
                        <td>{!! $usuarios->apellido !!}</td>
                        <td>{!! $usuarios->genero !!}</td>
                        <td>{!! $usuarios->email !!}</td>
                        <td>{!! $usuarios->fecha_nacimiento !!}</td>
                     
                        <td>
                        <a href="{{route('editar', $usuarios->id)}}" class="btn btn.warning">Editar</a>
                        <form action="{{route('eliminar', $usuarios->id)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        </td>
                        
                    </tr>
                    
                
                @endforeach 
                
            </table>
        </div>
        <!--Fomrulario-->
        <div class="col-md-4">
            
            <h3 class="text-center mb-4">Agregar Datos:</h3>
            
        <form action="{{route('store')}}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Tú nombre..." required>
                </div>

                @error('nombre')
                <div class="alert alert-danger">
                    El nombre es requerido
                </div>
                @enderror

                <div class="form-group">
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Tú apellido..." required>
                </div>
                @error('apellido')
                <div class="alert alert-danger">
                    El apellido es requerido
                </div>
                @enderror

                <div class="form-group">
                    <input type="text" name="genero" id="genero" class="form-control" placeholder="M o F" required>
                </div>
                @error('genero')
                <div class="alert alert-danger">
                    El genero es requerido
                </div>
                @enderror
                <div class="form-group">
                    <input type="mail" name="email" id="email" class="form-control" placeholder="Tú correo..." required>
                </div>
                @error('email')
                <div class="alert alert-danger">
                    El email es requerido
                </div>
                @enderror
                <div class="form-group">
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="fecha nacimiento" required>
                </div>
                @error('fecha_nacimiento')
                <div class="alert alert-danger">
                    La fecha nacimiento es requerido
                </div>
                @enderror
                <button type="submit" class="btn btn-success btn-block">Enviar Datos</button>
            </form>
            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
            @endif
        </div>

    </div>
@endsection