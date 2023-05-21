<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Clientes</title>
    <link rel="shortcut icon" href="{{ asset('/LogoIconoAlesa.png') }}" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/styles.css') }}" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<!-- -->

<body>
<x-nav />
    <br>
    <br>
    <section class="form-edit">
        <h4>Eliminar</h4>
        <hr>
        <h4>¿Esta seguro de eliminar el siguiente registro?</h4>

        <ul>
            <li><span>archivo</span>{{$archivo->nombre_original}}</li>


            <form action="{{ route('archivo.destroy', $archivo ) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="boton_eliminar">BORRAR</button>

                @if (session('success'))
                    <script>
                        alert("El archivo se eliminó correctamente.");
                    </script>
                @endif

                <a href="{{ route('archivo.index') }}" class="boton_cancelar">CANCELAR</a>

                </form>
                </ul>
                <br>
                
            </form>


        </ul>


    </section>
    <br>
    <br>

    
    <!-- -->



    <x-myfooter />
    <x-copy />

    <script src="{{ asset('/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>