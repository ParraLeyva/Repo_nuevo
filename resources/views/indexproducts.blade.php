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
        <center><h1> Lista de productos </h1></center>
    </div>
    <div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('products.create')}}"> Agregar productos</a>
    <a class="btn btn-success" href="http://127.0.0.1:8000/"> Inicio</a>
    </div>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th with="200px">Acciones</th>
                </tr>   
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}} </td>
                    <td>{{$product->Nombre}} </td>
                    <td>{{$product->Descripcion}} </td>
                    <td>{{$product->Precio}} </td>
                    <td>{{$product->Stock}} </td>
                    <td>
    <form action="{{route('products.destroy',$product->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Editar</a>
    <a class="btn btn-primary" href="{{ route('products.show',$product->id)}}">Detalles</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>