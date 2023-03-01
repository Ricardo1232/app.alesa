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
    <a href="/crear">Agregar un Cliente</a>
    <br>
    <ul>
        @foreach($cli as $mos)
        <li>
            {{ $mos->nomb_cli }}  {{ $mos->correo_cli }}
        </li>
        @endforeach
    </ul>
</body>
</html>