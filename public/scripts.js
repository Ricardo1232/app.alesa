/*!
* Start Bootstrap - Freelancer v7.0.6 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'

import Swal from 'sweetalert2';

// Función para mostrar un mensaje de éxito
function mostrarExito() {
  Swal.fire('¡Éxito!', 'Se guardo correctamente el registro', 'success');
}
function mostrarBorrar() {
    Swal.fire('¡Éxito!', 'El archivo se ha borrado correctamente', 'success');
  }
// Función para mostrar un mensaje de error
function mostrarError() {
  Swal.fire('¡Error!', 'Se produjo un error inesperado', 'error');
}

// Función para mostrar una confirmación
function mostrarConfirmacion() {
  Swal.fire({
    title: '¿Estás seguro?',
    text: 'Esta acción no se puede deshacer',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      // Acción a realizar si se confirma
      Swal.fire('¡Eliminado!', 'El elemento ha sido eliminado', 'success');
    } else if (result.dismiss === Swal.DismissReason.cancel) {
      // Acción a realizar si se cancela
      Swal.fire('Cancelado', 'La operación ha sido cancelada', 'info');
    }
  });
}

// Función para mostrar un mensaje de información
function mostrarInformacion() {
  Swal.fire({
    title: '¡Atención!',
    text: 'Esta información desaparecerá en 3 segundos',
    icon: 'info',
    timer: 3000,
    timerProgressBar: true,
    showConfirmButton: false
  });
}

// Llamada a las funciones en el momento adecuado, por ejemplo, en respuesta a eventos
document.getElementById('btnExito').addEventListener('click', mostrarExito);
document.getElementById('btnError').addEventListener('click', mostrarError);
document.getElementById('btnConfirmacion').addEventListener('click', mostrarConfirmacion);
document.getElementById('btnInformacion').addEventListener('click', mostrarInformacion);


window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 72,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
