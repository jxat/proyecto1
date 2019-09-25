<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>CREAR PRODUCTOS</h1>
    <form action="/producto" method="post">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre" id=""><br>
    <label for="">Codigo</label>
    <input type="text" name="codigo" id=""><br>
    <label for="">Categoria</label>
    <input type="text" name="categoria" id=""><br>
    <label for="">Precio</label>
    <input type="text" name="precio" id=""><br>
    <label for="">Cantidad</label>
    <input type="text" name="cantidad" id=""><br>
    <input type="submit" value="Guardar">
    </form>
    <a href="/producto">Volver</a>
</body>
</html>