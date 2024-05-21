<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <center><h1> Lista de usuarios </h1></center>
    </div>

    <div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('users.create')}}"> Agregar usuario</a>
    <a class="btn btn-primary" href="http://127.0.0.1:8000">Inicio</a>
    </div>

<div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Pasword</th>
                    <th with="200px">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}} </td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}} </td>
                    <td>{{$user->password}} </td>
                    <td>

    <form action="{{route('users.destroy',$user->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('users.edit',$user->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{ route('users.show',$user->id)}}">Detalles</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>