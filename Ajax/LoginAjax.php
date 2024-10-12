<?php

$peticionAjax=true;
require_once "../Configuration/App.php";

if(isset($_POST['token']) && isset($_POST['correo'])){

    /*--------- Instancia al controlador ---------*/
    require_once "../Controller/LoginControlador.php";
    $ins_login = new loginControlador();

    echo $ins_login->cerrar_sesion_controlador();
    
}else{
    session_start(['name'=>'ALM']);
    session_unset();
    session_destroy();
    header("location:".SERVERURL."login/");
    exit();
}