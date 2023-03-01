<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <h2>Cliente seleccionado</h2>
    <p>
        {{ $cliente->id }}
    </p>
    <p>
        {{ $cliente->nomb_cli }}
    </p>
    <p>
        {{ $cliente->correo_cli }}
    </p>
    <p>
        {{ $cliente->dir_cli }}
    </p>
    <p>
        {{ $cliente->tel_cli }}
    </p>
    
    <a href="{{ route('clientes.index') }}">Inicio</a>
</body>
</html>