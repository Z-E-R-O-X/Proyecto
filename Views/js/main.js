// Simula un clic en el botón con la clase '.btn-menu-izquierdo'
document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth <= 426) {
    document.querySelector('.btn-menu-izquierdo').click();
  }

});
// Función para ocultar o mostrar el explorar izquierdo
document.querySelector('.btn-menu-izquierdo').addEventListener('click', function () {
  const explorar = document.getElementById('explorar');
  const content = document.querySelector('.content');
  const toggleBtn = document.querySelector('.btn-menu-izquierdo');

  explorar.classList.toggle('hidden');
  content.classList.toggle('expanded-left');

  // Mover el botón hacia la izquierda cuando el explorar está oculto
  toggleBtn.classList.toggle('hidden');


});

// Función para ocultar o mostrar el explorar derecho
document.querySelector('.btn-menu-derecho').addEventListener('click', function () {
  const rightMenu = document.getElementById('menu-derecho');
  const content = document.querySelector('.content');

  rightMenu.classList.toggle('hidden');
  content.classList.toggle('expanded-right');

});

// Función para las estrellas de la calificacion del menu
const stars = document.querySelectorAll('.stars i');
stars.forEach((star, index) => {
  star.addEventListener('click', () => {
    stars.forEach((s, i) => {
      if (i <= index) {
        s.classList.add('active');
      } else {
        s.classList.remove('active');
      }
    });
  });
});



// Seleccionamos los elementos que vamos a manipular
const btnMas = document.querySelector('.mas');
const btnMenos = document.querySelector('.menos');
const numero = document.querySelector('.canti');
const precio = document.querySelector('.precio');
const amountInput = document.getElementById('amount'); // Campo oculto para el monto

// Precio base por unidad
const precioBase = 9500;

// Función para actualizar el precio según la cantidad
function actualizarPrecio() {
    const cantidad = parseInt(numero.textContent); // Obtener la cantidad actual
    const nuevoPrecio = cantidad * precioBase; // Calcular el nuevo precio
    precio.textContent = `$${nuevoPrecio.toLocaleString()}`; // Actualizar el texto del precio
    amountInput.value = nuevoPrecio; // Actualizar el valor del campo oculto
}

// Inicializar el precio al cargar la página
actualizarPrecio();

// Evento para aumentar el número y el precio
btnMas.addEventListener('click', () => {
    let cantidadActual = parseInt(numero.textContent); // Obtener la cantidad actual
    cantidadActual += 1; // Incrementar la cantidad
    numero.textContent = cantidadActual; // Actualizar el número
    actualizarPrecio(); // Actualizar el precio
});

// Evento para disminuir el número y el precio
btnMenos.addEventListener('click', () => {
    let cantidadActual = parseInt(numero.textContent); // Obtener la cantidad actual
    if (cantidadActual > 1) { // Asegurarse de que la cantidad no baje de 1
        cantidadActual -= 1; // Decrementar la cantidad
        numero.textContent = cantidadActual; // Actualizar el número
        actualizarPrecio(); // Actualizar el precio
    }
});
