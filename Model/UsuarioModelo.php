<?php

require_once "MainModelo.php";

class UsuarioModelo extends MainModelo
{
    /* ------------ Modelo para agregar usuarios -----------------*/
    protected static function agregar_usuario_modelo($datos){
        $sql = MainModelo:: conectar()->prepare("INSERT INTO usuarios(nombre,apellido,correo,celular,clave,foto_perfil,rol) 
        VALUES(:NOM, :APE, :COR, :CEL, :CLA, :FOT, :ROL)");

        $sql -> bindParam(":NOM",$datos['NOM']);
        $sql -> bindParam(":APE",$datos['APE']);
        $sql -> bindParam(":COR",$datos['COR']);
        $sql -> bindParam(":CEL",$datos['CEL']);
        $sql -> bindParam(":CLA",$datos['CLA']);
        $sql -> bindParam(":FOT",$datos['FOT']);
        $sql -> bindParam(":ROL",$datos['ROL']);
        $sql -> execute();
        return $sql;
    }

}
