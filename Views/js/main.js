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

// Precio base por unidad
const precioBase = 9500;

// Función para actualizar el precio según la cantidad
function actualizarPrecio() {
    const cantidad = parseInt(numero.textContent); // Obtener la cantidad actual
    const nuevoPrecio = cantidad * precioBase; // Calcular el nuevo precio
    precio.textContent = `$${nuevoPrecio.toLocaleString()}`; // Actualizar el texto del precio
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

// Evento para mostrar y ocultar metodos de pago

document.getElementById('btnTarjeta').addEventListener('click', function() {
  document.getElementById('formContainer').style.display = 'block';
  document.getElementById('formTarjeta').style.display = 'block';
  document.getElementById('payment-optionx1').style.display = 'block';
  document.getElementById('formPSE').style.display = 'none';
  document.getElementById('cantidad').style.display = 'none';
  document.getElementById('metodos-pago').style.display = 'none';
  document.getElementById('payment-optionx2').style.display = 'none';
  document.getElementById('btnBack').style.display = 'block'; // Mostrar el botón de regresar
  hidePaymentOptions();
});

document.getElementById('btnPSE').addEventListener('click', function() {
  document.getElementById('formContainer').style.display = 'block';
  document.getElementById('formPSE').style.display = 'block';
  document.getElementById('payment-optionx2').style.display = 'block';
  document.getElementById('formTarjeta').style.display = 'none';
  document.getElementById('cantidad').style.display = 'none';
  document.getElementById('metodos-pago').style.display = 'none';
  document.getElementById('payment-optionx1').style.display = 'none';
  document.getElementById('btnBack1').style.display = 'block'; // Mostrar el botón de regresar
  hidePaymentOptions();
});

document.getElementById('btnBack').addEventListener('click', function() {
  document.getElementById('formContainer').style.display = 'none';
  document.getElementById('cantidad').style.display = 'block';
  document.getElementById('metodos-pago').style.display = 'block';
  showPaymentOptions();
});
document.getElementById('btnBack1').addEventListener('click', function() {
  document.getElementById('formContainer').style.display = 'none';
  document.getElementById('cantidad').style.display = 'block';
  document.getElementById('metodos-pago').style.display = 'block';
  showPaymentOptions();
});
function hidePaymentOptions() {
  document.getElementById('btnPSE').style.display = 'none';
  document.getElementById('btnTarjeta').style.display = 'none';
}

function showPaymentOptions() {
  document.getElementById('btnPSE').style.display = 'flex';
  document.getElementById('btnTarjeta').style.display = 'flex';
}

// Evento para que siga al otro campo de los numeros de la targeta

const inputs = document.querySelectorAll('.card-input');

inputs.forEach((input, index) => {
    input.addEventListener('input', () => {
        if (input.value.length === 4 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });
});

// Evento para unir los 4 input de los numeros de la targeta en un solo input oculto

inputs.forEach((input) => {
  input.addEventListener('input', concatenateCardNumber);
});

function concatenateCardNumber() {
  // Obtener los valores de los cuatro inputs
  const cardNumber1 = document.getElementById('cardNumber1').value;
  const cardNumber2 = document.getElementById('cardNumber2').value;
  const cardNumber3 = document.getElementById('cardNumber3').value;
  const cardNumber4 = document.getElementById('cardNumber4').value;

  // Concatenar los valores
  const fullCardNumber = cardNumber1 + cardNumber2 + cardNumber3 + cardNumber4;

  // Asignar el valor concatenado al campo oculto
  document.getElementById('cardNumber').value = fullCardNumber;

  // (Opcional) Verificar el valor concatenado
  console.log("Número completo:", fullCardNumber);
}