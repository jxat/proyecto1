<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Lista de productos</h1>
   <a href="producto/create"> <button type="button" class="btn btn-outline-primary
   ">Nuevo</button></a>
  

    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      

     
      <th scope="col">precio</th>
      <th scope="col">cantidad</th>
      <th scope="col">operaciones</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($productos as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
      <td>{{$i->nombre}}</td>
     
      

      <td>{{$i->precio}}</td>
      <td> {{$i->cantidad}}</td>
      <td>
     

     <a href="/producto/{{$i->id}}"><button type="button" class="btn btn-outline-info">Detalle</button></a>
      <a href="/producto/{{$i->id}}/editar"> <button type="button" class="btn btn-success">Editar</button></a>
     
     

     <form action="/producto/{{$i->id}}" method="post"> 
     @csrf
    @method('delete')
     <input type="submit" value="Eliminar" class="btn btn-outline-danger" >
     </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>