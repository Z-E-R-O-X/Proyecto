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
    <p class="nombre-user"><?= $_SESSION['nombre_alm']." ".$_SESSION['apellido_alm']; ?></p>
    <button class="btn btn-danger close-session"><i class="fa-solid fa-sign-out-alt me-2"></i> Cerrar sesión</button>
</div>

<?php include "./Views/inc/modal-notificaciones.php"; ?>
