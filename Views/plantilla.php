<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= COMPANY ?>
    </title>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'>
    <script src="https://kit.fontawesome.com/9b2b8e0f24.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php include  "./Views/inc/css.php"  ?>
</head>

<body>

    <!-- Menú izquierdo -->
    <div id="explorar">
        <h4 class="text-white">Explorar</h4>
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
        </ul>
        <!-- Aquí va el dropdown de usuario en la parte inferior -->
        <div class="dropdown dropdown-user">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="35" height="35" class="rounded-circle me-2">
                <strong>Pepito Perez</strong>
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

    <!-- Menú derecho -->
    <div id="menu-derecho">
        <span class="btn-menu-derecho"><i class="fa-solid fa-user"></i></span>
        <div class="btn-container">
            <button class="btn-notificaciones">
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
                    <img src="https://github.com/mdo.png">
                </div>
            </div>
        </div>
        <p class="nombre-user">Pepito Perez</p>
        <button class="btn btn-danger close-session"><i class="fa-solid fa-sign-out-alt me-2"></i> Cerrar sesión</button>
    </div>

    <div class="content">
        <div class="container">
            <div class="menu-dia">
                <h2 class="text-center">MENU</h2>
                <h5 class="text-center ">SABADO 17-08-2024</h5>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="card border-0 ">
                        <div class="card-body menu-contenido">
                            <ul class="list-group list-group-flush ingredientes">
                                <li class="list-group-item"><i class="fa-solid fa-circle"></i> POLLO AL HORNO</li>
                                <li class="list-group-item"><i class="fa-solid fa-circle"></i> ARROZ BLANCO</li>
                                <li class="list-group-item"><i class="fa-solid fa-circle"></i> LENTEJA</li>
                                <li class="list-group-item"><i class="fa-solid fa-circle"></i> CHIPS DE PLATANO VERDE</li>
                                <li class="list-group-item">
                                    <i class="fa-solid fa-circle"></i>ENSALADA
                                    <ul>
                                        <li class="list-group-item ensalada"><i class="fa-solid fa-circle"></i>PEPINO</li>
                                        <li class="list-group-item ensalada"><i class="fa-solid fa-circle"></i>PIMENTON</li>
                                        <li class="list-group-item ensalada"><i class="fa-solid fa-circle"></i>ZANAHORIA ENCURTIDA</li>
                                    </ul>
                                </li>
                                <li class="list-group-item"><i class="fa-solid fa-circle"></i>LIMONADA</li>
                            </ul>

                            <h3 class="text-center precio">$9.500</h3>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn-reservar">
                                <i class="fa-solid fa-circle-dollar-to-slot" style="color: #ffffff;"></i>
                                RESERVAR
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    require_once "./Controller/VistaControlador.php";

    $IVC = new VistaControlador();

    $vistasPaginas = $IVC->obtener_vista_controlador();

    if ($vistasPaginas == "login" || $vistasPaginas == "404") {

        require_once "./Views/content/" . $vistasPaginas . "-view.php";
    } else {

        include $vistasPaginas;
    }

    ?>

    <?php include "./Views\inc\script.php" ?>

    <footer>

    </footer>

</body>

</html>