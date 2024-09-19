<?php

class VistaModelo {

    protected static function obtener_vista_modelo($vista) {

        // Lista de páginas permitidas
        $listaPaginas = ["home-user","user-list","user-update"];

        // Verificar si la vista solicitada está en la lista de páginas permitidas
        if (in_array($vista, $listaPaginas)) {

            // Verificar si el archivo de la vista existe en el directorio correspondiente
            if (is_file("./Views/content/" . $vista . "-view.php")) {
                
                $contenido = "./Views/content/" . $vista . "-view.php";
            } else {
                // Si el archivo no existe, devolver 404
                $contenido = "404";
            }

        } elseif ($vista == "login" || $vista == "index") {
            // Manejo especial para vistas de login o index
            $contenido = "login";

        } elseif ($vista == "registro" ){

            $contenido = "registro";

        }
        
        else {
            // Si la vista solicitada no está en la lista y no es login, devolver 404
            $contenido = "404";
        }

        return $contenido;
    }
}
?>