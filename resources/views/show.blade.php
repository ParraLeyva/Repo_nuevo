<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class = "card">
        <div class = "card-header">Detalles del cliente</div>
        <div class = "card-body">
            <h5 class = "card-title">Nombre: {{$customer->Nombre}}</h5>
            <p class = "card-text">Apellidos: {{$customer->Apellidos}}</p>
            <p class = "card-text">Direccion: {{$customer->Direccion}}</p>
            <p class = "card-text">Telefono: {{$customer->Telefono}}</p>
            <p class = "card-text">Correo: {{$customer->Email}}</p>
        </div>
        <table border = 0>
            <tr>
                <td>
                <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
                @csrf
    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id)}}">Editar</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-primary" href="{{ route('customers.index', $customer->id)}}" enctype="multipart/form-data">Regresar</a>
                </form>
</td>
</tr>
    </div>
</body>

</html>