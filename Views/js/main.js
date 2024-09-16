
  // Función para ocultar o mostrar el explorar izquierdo
  document.querySelector('.btn-menu-izquierdo').addEventListener('click', function () {
    const explorar = document.getElementById('explorar');
    const content = document.querySelector('.content');
    const toggleBtn = document.querySelector('.btn-menu-izquierdo');

    explorar.classList.toggle('hidden');
    content.classList.toggle('expanded-left');

    // Mover el botón hacia la izquierda cuando el explorar está oculto
    toggleBtn.classList.toggle('hidden');

    if (window.innerWidth <= 426) {
        toggleBtn.classList.toggle('hidden');
        
        if (explorar.style.display === 'block' || explorar.style.display === '') {
            explorar.style.display = 'none'; // Ocultar el menú
            toggleBtn.classList.toggle('hidden');
        } else {
            explorar.style.display = 'block'; // Mostrar el menú
            toggleBtn.classList.toggle('hidden');
        }
    } 
});

// Función para ocultar o mostrar el explorar derecho
document.querySelector('.btn-menu-derecho').addEventListener('click', function () {
    const rightMenu = document.getElementById('menu-derecho');
    const content = document.querySelector('.content');

    rightMenu.classList.toggle('hidden');
    content.classList.toggle('expanded-right');

});