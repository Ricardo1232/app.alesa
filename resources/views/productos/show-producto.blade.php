<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>

<body>
    <h2>Producto seleccionado</h2>
    <p>
        {{ $producto->id }}
    </p>
    <p>
        {{ $producto->nomb_prod }}
    </p>
    <p>
        {{ $producto->desc_prod }}
    </p>
    <p>
        {{ $producto->cant_prod }}
    </p>
    <p>
        {{ $producto->prec_prod }}
    </p>

    <a href="{{ route('productos.index') }}">Inicio</a>
    <br>
    <br>
    <form action="{{ route('productos.destroy', $producto) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
</body>

</html>