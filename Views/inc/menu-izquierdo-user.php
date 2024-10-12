<!-- Menú izquierdo -->
<div id="explorar">
    <div class="d-flex align-items-center text-white nav-explorar">
        <i class="fa-solid fa-compass"></i>
        <h4>Explorar</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="<?= SERVERURL ?>home-user">
                <i class="fa-solid fa-store" style="color: #ffffff;"></i><span>Menú </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="<?= SERVERURL ?>pago">
                <i class="fa-solid fa-hand-holding-dollar" style="color: #ffffff;"></i><span>Pago</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= SERVERURL ?>sugerencias">
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
            <strong><?= $_SESSION['nombre_alm']." ".$_SESSION['apellido_alm']; ?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-cog me-2"></i> Ajustes</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user me-2"></i> Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><button class="close-session"><a class="dropdown-item" href="#"><i class="fa-solid fa-sign-out-alt me-2"></i> Cerrar sesión</a></button></li>
        </ul>
    </div>

</div>

<!-- Botón para el sidebar izquierdo -->
<span class="btn-menu-izquierdo"><i class="fas fa-solid fa-bars"></i></span>


<?php include "./Views/inc/modal-notificaciones.php"; ?>
