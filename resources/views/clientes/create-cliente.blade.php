<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Productos</title>
</head>
<body>
    <h1>Crear Clientes</h1>

    <form action="crear" method="POST">
    @csrf
      <label for="nombre_cli">Nombre del cliente: </label>
      <input id="nombre_cli" name="nomb_cli" type="text">
      <br>
      <br>
      @error('nomb_cli')
      <h3> {{$message}} </h3>
      @enderror
      <label for="correo_cli">Correo : </label>
      <input id="correo_cli" name="correo_cli" type="mail">
      <br>
      <br>
      @error('correo_cli')
      <h3> {{$message}} </h3>
      @enderror
      
      <label for="dir_cli">Direccion: </label>
      <input id="dir_cli" name="dir_cli" type="text">
      <br>
      <br>
      @error('dir_cli')
      <h3> {{$message}} </h3>
      @enderror
      
      <label for="tel_cli">Telefono: </label>
      <input id="tel_cli" name="tel_cli" type="number">
      <br>
      <br>
      
      @error('tel_cli')
      <h3> {{$message}} </h3>
      @enderror 
 
      <input type="submit" value="Enviar">
  </form>
  
</body>
</html>