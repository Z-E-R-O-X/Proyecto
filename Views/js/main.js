document.addEventListener('DOMContentLoaded', function () {
  // Simula un clic en el botón con la clase '.btn-menu-izquierdo'
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