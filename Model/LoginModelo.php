<?php

require_once "MainModelo.php";

class LoginModelo extends MainModelo
{
    /* ------------ Modelo para iniciar sesion -----------------*/
    protected static function iniciar_sesion_modelo($datos)
    {
        $sql = MainModelo::conectar()->prepare("SELECT * FROM usuarios WHERE correo = :COR AND clave = :CLA");
        $sql -> bindParam(":COR",$datos["COR"]);
        $sql -> bindParam(":CLA",$datos["CLA"]);
        $sql ->execute();
        return $sql;

    }
}
