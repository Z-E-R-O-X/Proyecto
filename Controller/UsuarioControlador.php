<?php

if ($peticionAjax) {
    require_once "../Model/UsuarioModelo.php";
} else {
    require_once "./Model/UsuarioModelo.php";
}

class UsuarioControlador extends UsuarioModelo
{

    /* ------------ Controlador para agregar usuarios -----------------*/
    public function agregar_usuario_controlador()
    {
        $nombre = MainModelo::limpiar_cadena($_POST['nombre_reg']);
        $apellido = MainModelo::limpiar_cadena($_POST['apellido_reg']);
        $correo = MainModelo::limpiar_cadena($_POST['correo_reg']);
        $celular = MainModelo::limpiar_cadena($_POST['celular_reg']);
        $clave1 = MainModelo::limpiar_cadena($_POST['clave1_reg']);
        $clave2 = MainModelo::limpiar_cadena($_POST['clave2_reg']);

        /* ------------ Comprobar campos vacios -----------------*/
        if ($nombre == "" || $apellido == "" || $correo == "" || $celular == "" || $clave1 == "" || $clave2 == "") {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "No has llenado todos los campos",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /* ------------ Verificando integridad de los datos -----------------*/
        if (MainModelo::verificar_datos("[A-Za-zÀ-ÿ\s]{1,50}", $nombre)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "El NOMBRE no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (MainModelo::verificar_datos("[A-Za-zÀ-ÿ\s]{1,50}", $apellido)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "El APELLIDO no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (MainModelo::verificar_datos("[0-9]{10,10}", $celular)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "El CELULAR no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (
            MainModelo::verificar_datos("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}", $clave1) ||
            MainModelo::verificar_datos("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}", $clave2)
        ) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "Las CONTRASEÑAS no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /* ------------ Comprobar claves -----------------*/
        if ($clave1 != $clave2) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "Las CONTRASEÑAS ingresadas no coinciden",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        } else {
            $clave = MainModelo::encryption($clave1);
        }

        /* ------------ Comprobar Correo y celular-----------------*/
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $check_correo = MainModelo::ejecutar_consulta_simple("SELECT correo FROM usuarios 
            WHERE correo='$correo'");
            if ($check_correo->rowCount() > 0) {
                $alerta = [
                    "Alerta" => "simple",
                    "Titulo" => "Ocurrió un error Inesperado",
                    "Texto" => "El CORREO ingresado ya se encuentra registrado en el sistema",
                    "Tipo" => "error"
                ];
                echo json_encode($alerta);
                exit();
            }
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "El CORREO no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        $check_celular = MainModelo::ejecutar_consulta_simple("SELECT celular FROM usuarios 
         WHERE celular='$celular'");
        if ($check_celular->rowCount() > 0) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error Inesperado",
                "Texto" => "El CELULAR ingresado ya se encuentra registrado en el sistema",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /* ------------ Subir datos a la BD -----------------*/

        $datos_usuario_reg = [
            "NOM" => $nombre,
            "APE" => $apellido,
            "COR" => $correo,
            "CEL" => $celular,
            "CLA" => $clave,
            "FOT" => "null",
            "ROL" => "usuario"
        ];

        $agregar_usuario = UsuarioModelo::agregar_usuario_modelo($datos_usuario_reg);

        if ($agregar_usuario->rowCount() == 1) {
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Usuario registrado",
                "Texto" => "Tus datos sean registrado correctamente",
                "Tipo" => "success"
            ];
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error inesperado",
                "Texto" => "No hemos podido registrar el usuario",
                "Tipo" => "error"
            ];
        }

        echo json_encode($alerta);
    }
}
