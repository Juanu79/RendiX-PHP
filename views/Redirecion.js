
  
  function redirigirAyuda() {
    window.location.href = "Pagina de ayuda.html"; // Pagina propia de ayuda
}
function redirigirCalificacion(){
    window.location.href ="views/calificanos.html"; 

}
function carro2(){
  window.location.href ="carrito.html"; 

}

function redirigirPQRS() {
  window.location.href = "PQRS.html";
}

// Selección del botón y del contenido del menú desplegable
const dropdownButton = document.querySelector('.dropdown-menu-btn');
const dropdownContent = document.querySelector('.dropdown-menu-content');

// Función para alternar la visibilidad del menú
dropdownButton.addEventListener('click', () => {
    dropdownContent.classList.toggle('show');
});

// Cerrar el menú si se hace clic fuera de él
document.addEventListener('click', (event) => {
    if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
        dropdownContent.classList.remove('show');
    }
});

// Selección del botón y contenido del menú desplegable de Sección 2
const dropdownButton2 = document.querySelector('.dropdown-menu2');
const dropdownContent2 = document.querySelector('.dropdown-menu2-content');

// Función para alternar la visibilidad del menú
dropdownButton2.addEventListener('click', () => {
    dropdownContent2.classList.toggle('show2');
});

// Cerrar el menú si se hace clic fuera de él
document.addEventListener('click', (event) => {
    if (!dropdownButton2.contains(event.target) && !dropdownContent2.contains(event.target)) {
        dropdownContent2.classList.remove('show2');
    }
});

// Script para el funcionamiento de los menús desplegables
document.addEventListener('DOMContentLoaded', function() {
    // Dropdown 1
    const dropdownBtn1 = document.querySelector('.dropdown-menu-btn');
    const dropdownContent1 = document.querySelector('.dropdown-menu-content');
    
    if (dropdownBtn1 && dropdownContent1) {
        dropdownBtn1.addEventListener('click', function() {
            dropdownContent1.classList.toggle('show-content');
        });
    }
    
    // Dropdown 2
    const dropdownBtn2 = document.querySelector('.dropdown-menu2');
    const dropdownContent2 = document.querySelector('.dropdown-menu2-content');
    
    if (dropdownBtn2 && dropdownContent2) {
        dropdownBtn2.addEventListener('click', function() {
            dropdownContent2.classList.toggle('show-content');
        });
    }
    
    // Función para la redirección del botón "ALQUILA YA"
    window.carro2 = function() {
        // Redirección a la página de alquiler o productos
        window.location.href = 'productos.html';
    }
});





