<?php
    include_once("controlador/controlador_".$controlador.".php");
    $objControlador="Controlador".ucfirst($controlador);
    if($controlador == "usuario"){
        $controlador = new $objControlador();
        $controlador->$accion($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono);
    } else {
        $controlador = new $objControlador();
        $controlador->$accion($carrito,$genero,$buscador,$producto,$guardarDato);
    }
?>