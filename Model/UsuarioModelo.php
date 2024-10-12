<?php

require_once "MainModelo.php";

class UsuarioModelo extends MainModelo
{
    /* ------------ Modelo para agregar usuarios -----------------*/
    protected static function agregar_usuario_modelo($datos){
        $sql = MainModelo:: conectar()->prepare("INSERT INTO usuarios(nombre,apellido,correo,celular,clave) 
        VALUES(:NOM, :APE, :COR, :CEL, :CLA)");

        $sql -> bindParam(":NOM",$datos['NOM']);
        $sql -> bindParam(":APE",$datos['APE']);
        $sql -> bindParam(":COR",$datos['COR']);
        $sql -> bindParam(":CEL",$datos['CEL']);
        $sql -> bindParam(":CLA",$datos['CLA']);
        $sql -> execute();
        return $sql;
    }

}
