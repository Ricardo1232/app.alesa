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

<body id="page-top">
    <x-nav />
    <br>
    <br>


    <section class="page-section">
        <div class="container">


            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Clientes</h2>
            <br>
            <div class="contanier pt-4">
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <a class=" btn btn-info px-5" href="{{ route('clientes.create') }}">Agregar un cliente</a>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <table class="mx-auto my-3">
                <tbody>
                    <thead class="alert-primary py-1 border border-2 border-info">
                        <th class="px-3 border-right border-info border-2">ID</th>
                        <th class="px-2">Nombre</th>
                        <th class="px-2">Correo</th>
                        <th class="px-2">Direccion</th>
                        <th class="px-3">Telefono</th>
                        <th></th>
                        <th></th>
                    </thead>

                    @foreach($cliente as $mos)
                    <tr class="border border-info py-2">
                        <td class="px-3 border-info border-1">{{ $mos->id }}</td>
                        <td class="px-2">{{ $mos->nomb_cli }}</td>
                        <td class="px-2">{{ $mos->correo_cli }}</td>
                        <td class="px-2">{{ $mos->dir_cli }}</td>
                        <td class="px-3 text-center">{{ $mos->tel_cli }}</td>
                        <td class="px-3">
                            <a href="{{ route('clientes.edit', $mos->id) }}"><i class="fa-solid fa-pen-to-square fa-lg" style="color: #0a64ff;"></i></a>
                        </td>
                        <td class="py-2 px-3 ">

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_borrar{{ $mos->id }}"><i class="fa-solid fa-trash"></i></button>
                            <div class="modal fade" id="modal_borrar{{ $mos->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar cliente</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que quieres eliminar este cliente?
                                            <p class="alert-info text-center p-1 mx-3 mt-1">
                                                {{ $mos->nomb_cli }}
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('clientes.destroy', $mos) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submitButton" class="btn btn-danger">Eliminar</button>
        
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

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