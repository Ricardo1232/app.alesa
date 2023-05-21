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

<body id="page-top">
    <x-nav />
    <br>
    <br>
    <section class="page-section">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Archivos</h2>
        <br>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="row">
                        <div class="table-title">
                            <div class="col-sm-6">
                                <a href="{{ route('archivos.create') }}" class="btn btn-success"><img src="{{asset('/imagenes/img_document.svg')}}" class=img_regresar><span>Carga de Archivo</span></a>

                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-hover  text-center">
                        <thead>
                            <th>Nombre del Archivo</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>

                            @foreach ($file as $archivo)

                            <tr class="text-gray-700 dark:tecrecxt-gray-400">

                                <td class="px-4 py-3">

                                    <div class="flex items-center text-sm">
                                        {{ $archivo->nombre}}
                                    </div>

                                </td>

                                <td class="px-4 py-3">

                                    <div class="flex items-center text-sm">
                                        <form action="{{ route('archivos.descargar', $archivo) }}" method="GET">
                                            @csrf
                                            <button type="submit">Descargar archivo</button>
                                        </form>

                                        <form action="{{route('archivos.destroy',$archivo) }}" method="POST" class="flex items-center text-sm">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="boton_eliminar">Eliminar</button>
                                        </form>


                                    </div>

                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @if(session('archivo')== 'eliminado')
   <script>
 Swal.fire('¡Eliminado!', 'El archivo ha sido eliminado', 'success');
   </script> 
    @endif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

</body>

</html>