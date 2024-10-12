<?php

$peticionAjax=true;
require_once "../Configuration/App.php";

if (isset($_POST['nombre_reg'])){

    /* ------------ Instancia al controlador -----------------*/
    require_once "../Controller/UsuarioControlador.php";
    $ins_usuario = new UsuarioControlador();

    /* ------------ Agregar un usuario -----------------*/
    if (isset($_POST['nombre_reg']) && isset($_POST['correo_reg'])){
        
        echo $ins_usuario -> agregar_usuario_controlador();

    }
}else{
    session_start(['name'=>'ALM']);
    session_unset();
    session_destroy();
    header("location:".SERVERURL."login/");
    exit();
}