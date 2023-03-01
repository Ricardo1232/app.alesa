<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Productos</title>
</head>
<body>
    <h1>Crear Productos</h1>

    <form action="{{ route('productos.store') }}" method="POST">
    @csrf
      <label for="nombre_prod">Nombre del producto: </label>
      <input id="nombre_prod" name="nomb_prod" type="text">
      <br>
      <br>
      @error('nomb_prod')
      <h3> {{$message}} </h3>
      @enderror
      <label for="desc_prod">Descripcion: </label>
      <input id="desc_prod" name="desc_prod" type="text">
      <br>
      <br>
      @error('desc_prod')
      <h3> {{$message}} </h3>
      @enderror
      
      <label for="prec_prod">Precio: </label>
      <input id="prec_prod" name="prec_prod" type="number">
      <br>
      <br>
      @error('prec_prod')
      <h3> {{$message}} </h3>
      @enderror
      
      <label for="cant">Cantidad: </label>
      <input id="cant" name="cant_prod" type="number">
      <br>
      <br>
      
      @error('cant_prod')
      <h3> {{$message}} </h3>
      @enderror 
 
      <input type="submit" value="Enviar">
  </form>
  
</body>
</html>