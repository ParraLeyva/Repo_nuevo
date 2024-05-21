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
        <center><h1> Lista de Clientes </h1></center>
    </div>

    <div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('customers.create')}}"> Agregar Clientes</a>
    <a class="btn btn-success" href="http://127.0.0.1:8000/"> Inicio</a>
    </div>

<div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th with="200px">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}} </td>
                    <td>{{$customer->Nombre}} </td>
                    <td>{{$customer->Apellidos}} </td>
                    <td>{{$customer->Direccion}} </td>
                    <td>{{$customer->Telefono}} </td>
                    <td>{{$customer->Email}}</td>
                    <td>

    <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{ route('customers.show',$customer->id)}}">Detalles</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>