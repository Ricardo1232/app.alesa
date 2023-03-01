<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Productos</title>
</head>
<body>
    <h2>Productos</h2>
    <a href="{{ route('productos.create') }}">Agregar un producto</a>
    <br>
    <ul>
        @foreach($producto as $mos)
        <li>
            {{ $mos->nomb_prod }}  {{ $mos->prec_prod }}
            <a href="{{ route('productos.show', $mos->id) }}"> Ver detalle</a>
            <a href="{{ route('productos.edit', $mos->id) }}"> Editar</a>
        </li>
        @endforeach
    </ul>
</body>
</html>