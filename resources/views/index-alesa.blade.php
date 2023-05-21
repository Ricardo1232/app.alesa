<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alesa</title>
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
    <!-- Navigation-->
    <x-nav />

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="mx-5 my-5 px-5">
        <h3 class="text-center my-3">
            <strong>
                Bienvenido a Alesa
            </strong>
        </h3>
        <br>
        <p class="sangria">
            Tu solución de confianza para productos de limpieza de calidad superior. En Alesa, nos enorgullece ofrecerte una amplia gama de productos de limpieza diseñados para satisfacer todas tus necesidades de higiene y mantener tus espacios impecables.
        </p>
        <br>
        <p class="sangria">En Alesa, creemos que la limpieza no solo se trata de mantener un ambiente saludable, sino también de mejorar la calidad de vida. Es por eso que nos dedicamos a brindarte productos de limpieza innovadores y efectivos que facilitarán tus tareas domésticas y profesionales.</p>
        <br>
        <p class="sangria">Nuestra misión es ofrecerte soluciones de limpieza excepcionales que cumplan con los más altos estándares de calidad. Trabajamos con proveedores y fabricantes de renombre que comparten nuestro compromiso con la excelencia. Cada producto que encontrarás en nuestra tienda ha sido cuidadosamente seleccionado y probado para garantizar su eficacia y seguridad.</p>
        <br>
        <div class="container py-4">
            <div class="row mx-auto px-auto" style="width:300px; height:150px;">
                <img src="https://imgs.search.brave.com/4YdHlZErI2-eMPYF8BfwCLlVu8qnk-sah7e3SDQHcZk/rs:fit:711:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5a/bUhELW52b0dVQWU4/ZkVMUXVkTjBRSGFF/OCZwaWQ9QXBp" alt="Productos de liempieza">
            </div>
        </div>
        <br>
        <p class="sangria">En Alesa, comprendemos que cada persona tiene necesidades específicas cuando se trata de limpieza. Es por eso que nuestra colección de productos abarca desde detergentes y desinfectantes hasta limpiadores especializados para diferentes superficies y áreas del hogar o negocio. Nuestro objetivo es proporcionarte las herramientas adecuadas para lograr una limpieza impecable en cada rincón.</p>
        <br>
        <p class="sangria">No solo nos preocupamos por ofrecerte productos de calidad, sino también por brindarte una experiencia de compra excepcional. Nuestra página web de fácil navegación te permite explorar nuestro catálogo completo, obtener información detallada sobre cada producto y realizar tu compra de forma rápida y segura. Además, contamos con un equipo de atención al cliente amable y capacitado que está listo para responder cualquier pregunta o brindarte asesoramiento personalizado.</p>
        <br>
        <p class="sangria">En Alesa, nuestra pasión por la limpieza se combina con nuestro compromiso con la sostenibilidad. Nos esforzamos por reducir nuestro impacto ambiental, por lo que trabajamos con proveedores que comparten nuestros valores de responsabilidad ecológica. Buscamos constantemente opciones más sostenibles y respetuosas con el medio ambiente para ofrecerte productos de limpieza que sean efectivos sin comprometer nuestro planeta.</p>
        <br>
        <p class="sangria">Te invitamos a explorar nuestra amplia selección de productos y descubrir cómo Alesa puede ayudarte a mantener tus espacios limpios, frescos y saludables. Confía en nosotros para brindarte calidad, confiabilidad y excelencia en cada producto que ofrecemos.</p>

        <p>¡Gracias por elegir Alesa, tu socio de confianza en productos de limpieza!</p>



    </div>

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