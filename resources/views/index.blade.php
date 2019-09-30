

<!DOCTYPE html>
<html lang="en">
        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listar</title>
   
</head>
<body>
   
    <br>
   
    <div class="container">
<table class="table table-striped">
            <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    @if ($personas!=null)
    @foreach ($personas as $persona)
        <tbody>
            <td>{{  $persona->nombre }}</td>
            <td>{{  $persona->apellido }}</td>
            <td>{{  $persona->genero }}</td>
            <td>{{  $persona->email }}</td>
            <td>{{  $persona->fecha_nacimiento }}</td>
            <td>
                <button class="btn btn-warning">
                <a href="{{url('editar/'.$persona->id.'/editar')}}" >Editar</a>
                </button>
                <button class="btn btn-danger" onclick="return confirm('Desea Borrar este registro?');">
                        <a href="{{url('eliminar/'.$persona->id.'/eliminar')}}">Eliminar</a>
                        {{ csrf_field() }}
                        @method('DELETE')
                </button>
            </td>
        </tbody>
    @endforeach
</table>
   
    @else
        <tr>
        <td colspan="8" class="text-center"><h4>No se encontraron registros</h4></td>
    </tr>
    @endif
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
