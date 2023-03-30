<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Editar Productos</title>
    <link rel="shortcut icon" href="{{ asset('/LogoIconoAlesa.png') }}" />
    
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/styles.css') }}" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body id="page-top">
    <x-nav />

    <br>
    <br>
    <br>

    <!-- Editar Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Editar producto</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">

                    <form action="{{ route('productos.update', $producto) }}" id="contactForm" method="POST">
                        @csrf
                        @method('patch')
                        <!-- Nombre del producto input-->
                        <div class="form-floating mb-3">

                            <input class="form-control" id="nombre_prod" name="nomb_prod" type="text" value="{{ old('nomb_prod') ?? $producto->nomb_prod }}">
                            <label for="nombre_prod">Nombre del producto: </label>
                            <div class="invalid-feedback">
                                @error('nomb_prod')
                                <h3> {{$message}} </h3>
                                @enderror
                            </div>
                        </div>

                        <!-- Descripcion input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="desc_prod" name="desc_prod" type="text" value="{{ old('desc_prod') ?? $producto->desc_prod }}">
                            <label for="desc_prod">Descripcion: </label>

                            <div class="invalid-feedback">
                                @error('desc_prod')
                                <h3> {{$message}} </h3>
                                @enderror
                            </div>
                        </div>

                        <!-- Precio input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="prec_prod" name="prec_prod" type="number" step="0.01" step="0.01" value="{{ old('prec_prod') ?? $producto->prec_prod }}">
                            <label for="prec_prod">Precio: </label>

                            <div class="invalid-feedback">
                                @error('prec_prod')
                                <h3> {{$message}} </h3>
                                @enderror
                            </div>
                        </div>

                        <!-- Cantidad input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="cant" name="cant_prod" type="number" value="{{ old('cant_prod') ?? $producto->cant_prod }}">
                            <label for="cant">Cantidad: </label>

                            <div class="invalid-feedback">
                                @error('cant_prod')
                                <h3> {{$message}} </h3>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary btn-lg " type="submitButton">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-myfooter />

    <x-copy />

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/scripts.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>