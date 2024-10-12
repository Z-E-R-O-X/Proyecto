<?php

if ($peticionAjax) {
    require_once "../Model/LoginModelo.php";
} else {
    require_once "./Model/LoginModelo.php";
}

class LoginControlador extends LoginModelo
{

    /* ------------ Controlador para iniciar sesion -----------------*/
    public function iniciar_sesion_controlador()
    {
        $correo = MainModelo::limpiar_cadena($_POST['correo_log']);
        $clave = MainModelo::limpiar_cadena($_POST['clave_log']);


        /* ------------ Comprobar campos vacios -----------------*/
        if ($clave == "" || $correo == "") {
            echo '
            <script>
                Swal.fire({
                   title: "Ocurrio un error Inesperado",
                    text: "No has llenado todos los campos",
                   type: "error"
                   confirmButtonText: "Aceptar"
                )};
            </script>
        ';
        }

        /* ------------ Verificando integridad de los datos -----------------*/
        if (
            MainModelo::verificar_datos("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}", $clave)
        ) {
            echo '
                <script>
                    Swal.fire({
                        title: "Ocurrio un error Inesperado",
                        text: "La CONTRASEÑA no coincide con el formato solicitado",
                        type: "error"
                       confirmButtonText: "Aceptar"
                    )};
                </script>
            ';
        }
        if (filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
            echo '
            <script>
                Swal.fire({
                    title: "Ocurrió un error inesperado",
                    text: "El CORREO no coincide con el formato solicitado",
                    type: "error",
                    confirmButtonText: "Aceptar"
                });
            </script>
            ';
        }
        $clave = MainModelo::encryption($clave);

        $datos_login = [
            "COR" => $correo,
            "CLA" => $clave
        ];

        $datos_cuenta = LoginModelo::iniciar_sesion_modelo($datos_login);

        if ($datos_cuenta->rowCount() == 1) {
            $row = $datos_cuenta->fetch();

            session_start(['name' => 'ALM']);

            $_SESSION['id_alm'] = $row['id'];
            $_SESSION['nombre_alm'] = $row['nombre'];
            $_SESSION['apellido_alm'] = $row['apellido'];
            $_SESSION['correo_alm'] = $row['correo'];
            $_SESSION['celular_alm'] = $row['celular'];
            $_SESSION['clave_alm'] = $row['clave'];
            $_SESSION['foto_alm'] = $row['foto_perfil'];
            $_SESSION['rol_alm'] = $row['rol'];
            $_SESSION['token_alm'] = md5(uniqid(mt_rand(), true));
            return header("location:" . SERVERURL . "home-user/");
        } else {
            echo '
            <script>
                Swal.fire({
                    title: "Ocurrió un error inesperado",
                    text: "El USUARIO o CONTRASEÑA son incorrectos",
                    type: "error",
                    confirmButtonText: "Aceptar"
                });
            </script>
            ';
        }
    }

    /* ------------ Controlador para forzar cierre de sesion -----------------*/
    public function forzar_cierre_sesion_controlador()
    {
        session_unset();
        session_destroy();
        if (headers_sent()) {
            return "<script> window.location.href='" . SERVERURL . "login/'; </script>";
        } else {
            return header("Location: " . SERVERURL . "login/");
        }
    }

    /* ------------ Controlador para cerrar iniciar sesion -----------------*/
    public function cerrar_sesion_controlador()
    {
        session_start(['name' => 'ALM']);
        $token = MainModelo::decryption($_POST['token']);
        $correo = MainModelo::decryption($_POST['correo']);

        if($token==$_SESSION['token_alm'] && $correo==$_SESSION['correo_alm'] ){
         	session_unset();
				session_destroy();
				$alerta=[
					"Alerta"=>"redireccionar",
					"URL"=>SERVERURL."login/"
				];
			}else{
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrió un error inesperado",
					"Texto"=>"No se pudo cerrar la sesion en el sistema",
					"Tipo"=>"error"
				];
			}
			echo json_encode($alerta);
		} 
	}