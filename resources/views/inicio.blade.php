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
                <tbody>
                    @foreach ($personas as $personas)
                        
                    
                    <tr>
                        <td>{!! $personas->nombre !!}</td>
                        <td>{!! $personas->apellido !!}</td>
                        <td>{!! $personas->genero !!}</td>
                        <td>{!! $personas->email !!}</td>
                        <td>{!! $personas->fecha_nacimiento !!}</td>
                        <td>
                        <a href="{{route('editar', $personas->id)}}" class="btn btn.warning">Editar</a>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>

                
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
                
                <div class="form-group">
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Tú apellido..." required>
                </div>

                <div class="form-group">
                    <input type="text" name="genero" id="genero" class="form-control" placeholder="M o F" required>
                </div>

                <div class="form-group">
                    <input type="mail" name="email" id="email" class="form-control" placeholder="Tú correo..." required>
                </div>

                <div class="form-group">
                    <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="fecha nacimiento" required>
                </div>

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