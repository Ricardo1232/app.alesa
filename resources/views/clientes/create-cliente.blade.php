<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Clientes</title>

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

  <!-- Registro Section-->
  <section class="page-section">
    <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registro de clientes</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
          <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <!-- Nombre del producto input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="nomb_cli" name="nomb_cli" type="text" value="{{ old('nomb_cli') }}">
              <label for="nomb_cli">Nombre del cliente</label>

              <div class="text-danger">
                @error('nomb_cli')
                {{ $message }}
                @enderror
              </div>
            </div>

            <!-- Descripcion input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="correo_cli" name="correo_cli" type="mail" value="{{ old('correo_cli') }}">
              <label for="correo_cli">Correo</label>

              <div class="text-danger">
                @error('correo_cli')
                {{ $message }}
                @enderror
              </div>
            </div>

            <!-- Precio input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="dir_cli" name="dir_cli" type="text" value="{{ old('dir_cli') }}">
              <label for="dir_cli">Dirección</label>

              <div class="text-danger">
                @error('dir_cli')
                {{ $message }}
                @enderror
              </div>
            </div>

            <!-- Cantidad input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="tel_cli" name="tel_cli" type="text" value="{{ old('tel_cli') }}">
              <label for="tel_cli">Telefono</label>

              <div class="text-danger">
                @error('tel_cli')
                {{ $message }}
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