<!-- Menú izquierdo -->
<div id="explorar">
    <div class="d-flex align-items-center text-white nav-explorar">
        <i class="fa-solid fa-compass"></i>
        <h4>Explorar</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa-solid fa-store" style="color: #ffffff;"></i><span>Menú </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa-solid fa-hand-holding-dollar" style="color: #ffffff;"></i><span>Pago</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa-solid fa-comment-medical" style="color: #ffffff;"></i><span>Sugerencias</span>
            </a>
        </li>
        <li class="nav-item Notificaciones">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#notificacionesModal">
                <div class="position-relative d-inline-flex align-items-center">
                    <span class="numero position-absolute top-0 start-0 translate-middle badge rounded-pill ">
                        3
                        <span class="visually-hidden">unread messages</span>
                    </span>
                    <i class="fa-solid fa-bell" style="color: #ffffff;"></i>
                    <span class="ms-2" style="color: #ffffff;">Notificaciones</span>
                </div>
            </a>
        </li>

    </ul>

    <!-- Aquí va el dropdown de usuario en la parte inferior -->
    <div class="dropdown dropdown-user">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= SERVERURL ?>Views/assets/avatar/mi foto.jpg" class="rounded-circle me-2 imagen">
            <strong>Camilo Ramirez</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-cog me-2"></i> Ajustes</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user me-2"></i> Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-sign-out-alt me-2"></i> Cerrar sesión</a></li>
        </ul>
    </div>

</div>

<!-- Botón para el sidebar izquierdo -->
<span class="btn-menu-izquierdo"><i class="fas fa-solid fa-bars"></i></span>



<!-- Modal de notificaciones -->
<div class="modal fade" id="notificacionesModal" tabindex="-1" aria-labelledby="notificacionesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificacionesModalLabel">Notificaciones</h5>
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-regular fa-bell me-2"></i>
                            <small class="fecha-noti">2024-09-19 10:30</small>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, vitae delectus alias labore voluptates libero deserunt ut, odit unde sit, modi incidunt temporibus distinctio vero tempore? Aperiam repellat dolore debitis.</p>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-regular fa-bell me-2"></i>
                            <small class="fecha-noti">2024-09-18 15:45</small>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat et repellat praesentium dolores suscipit sed reprehenderit accusamus ad accusantium eaque laborum consectetur vel quis totam, possimus tempore, eveniet odit! Voluptatum!</p>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-regular fa-bell me-2"></i>
                            <small class="fecha-noti">2024-09-17 09:00</small>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti incidunt modi qui dolore similique itaque aliquid. Qui natus consequatur nam voluptates harum, voluptas deleniti est laborum unde at architecto labore.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>