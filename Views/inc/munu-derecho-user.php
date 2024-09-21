<div id="menu-derecho">
    <span class="btn-menu-derecho"><i class="fa-solid fa-user"></i></span>
    <div class="btn-container">
        <!-- Botón de notificaciones que abre el modal -->
        <button type="button" class="btn-notificaciones btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificacionesModal">
            <div class="position-relative">
                <i class="fa-regular fa-bell"></i>
                <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-dark">
                    3
                    <span class="visually-hidden">unread messages</span>
                </span>
            </div>
            Notificaciones
        </button>
        <i class="fa-solid fa-gear icon-gear"></i>
    </div>
    <p class="perfil">PERFIL</p>
    <div class="hexa-container">
        <div class="hexa">
            <div class="img-container">
                <img src="<?= SERVERURL ?>Views/assets/avatar/mi foto.jpg">
            </div>
        </div>
    </div>
    <p class="nombre-user">Camilo Ramirez</p>
    <button class="btn btn-danger close-session"><i class="fa-solid fa-sign-out-alt me-2"></i> Cerrar sesión</button>
</div>
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