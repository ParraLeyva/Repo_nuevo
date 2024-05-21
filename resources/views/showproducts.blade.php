<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class = "card">
        <div class = "card-header">Detalles del cliente</div>
        <div class = "card-body">
            <h5 class = "card-title">Nombre: {{$products->Nombre}}</h5>
            <p class = "card-text">Descripcion: {{$products->Descripcion}}</p>
            <p class = "card-text">Precio: {{$products->Precio}}</p>
            <p class = "card-text">Stock: {{$products->Stock}}</p>
        </div>
        <table border = 0>
            <tr>
                <td>
                <form action="{{route('products.destroy',$products->id)}}" method="POST">
                @csrf
    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('products.edit', $products->id)}}">Editar</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-primary" href="{{ route('products.index', $products->id)}}" enctype="multipart/form-data">Regresar</a>
                </form>
</tr>
    </div>
</body>

</html>