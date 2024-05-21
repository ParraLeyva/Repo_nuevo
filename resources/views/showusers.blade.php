<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class = "card">
        <div class = "card-header">Detalles del usuario</div>
        <div class = "card-body">
            <h5 class = "card-title">Nombre: {{$user->name}}</h5>
            <p class = "card-text">Apellidos: {{$user->email}}</p>
            <p class = "card-text">Direccion: {{$user->password}}</p>
        </div>
        <table border = 0>
            <tr>
                <td>
                <form action="{{route('users.destroy',$user->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Editar</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
    <a class="btn btn-primary" href="{{ route('users.index',$user->id)}}">Regresar</a>
    </form>
</td>
</tr>
</table>
<div>
</div>
</div>
    </div>
</body>