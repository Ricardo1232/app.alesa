<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Clientes</title>
</head>
<body>
    <h2>Clientes</h2>
    <a href="/">Inicio</a>
    <br>
    <br>
    <a href="{{ route('clientes.create') }}">Agregar un cliente</a>
    <br>
    <ul>
        @foreach($cliente as $mos)
        <li>
            {{ $mos->nomb_cli }}   {{ $mos->correo_cli }}  -  
            <a href="{{ route('clientes.show', $mos->id) }}">Ver detalle</a>  -  
            <a href="{{ route('clientes.edit', $mos->id) }}">Editar</a>
        </li>
        @endforeach
    </ul>
</body>
</html>