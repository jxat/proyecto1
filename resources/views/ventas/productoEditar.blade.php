<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>EDITAR PRODUCTOS</h1>
    <form action="/producto/{{$productos->id}}" method="post">
    @csrf
    @method('put')
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="" value="{{$productos->nombre}}"><br>
    <label for="">Codigo</label>
    <input type="text" name="codigo" id="" value="{{$productos->codigo}}"><br>
    <label for="">Categoria</label>
    <input type="text" name="categoria" id="" value="{{$productos->categoria}}"><br>
    <label for="">Precio</label>
    <input type="text" name="precio" id="" value="{{$productos->precio}}"><br>
    <label for="">Cantidad</label>
    <input type="text" name="cantidad" id="" value="{{$productos->cantidad}}"><br>
    <input type="submit" value="Editar">
    </form>
    <a href="/producto">Volver</a>
</body>
</html>