<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= COMPANY ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'>
    <script src="https://kit.fontawesome.com/9b2b8e0f24.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php include  "./Views/inc/css.php"  ?>
</head>

<body>

    <?php
    $peticionAjax = false;

    require_once "./Controller/VistaControlador.php";

    $IVC = new VistaControlador();

    $vistasPaginas = $IVC->obtener_vista_controlador();

    if ($vistasPaginas == "login" || $vistasPaginas == "registro" || $vistasPaginas == "404") {

        require_once "./Views/content/" . $vistasPaginas . "-view.php";
    } else {

        session_start(['name' => 'ALM']);

        require_once "./Controller/LoginControlador.php";
        $lc = new LoginControlador();

        if (!isset($_SESSION['correo_alm']) || !isset($_SESSION['clave_alm']) || !isset($_SESSION['rol_alm']) || !isset($_SESSION['id_alm'])) {
            echo $lc->forzar_cierre_sesion_controlador();
            exit();
        }

            include "./Views/inc/menu-izquierdo-user.php";
            include $vistasPaginas;
            include "./Views/inc/munu-derecho-user.php";
            include "./Views/inc/LogOut.php";

    }

    ?>
    <?php include "./Views/inc/script.php" ?>


</body>

</html>