<?php
    include_once("controlador/controlador_".$controlador.".php");
    $objControlador="Controlador".ucfirst($controlador);
    if($controlador == "usuario"){
        $controlador = new $objControlador();
        $controlador->$accion($guardarDato,$precio,$usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono);
    } else if($controlador == "compra"){
        $controlador = new $objControlador();
        $controlador->$accion($guardarDato,$precio,$nombre,$apellido,$direccion,$mail,$telefono);
    } else {
        $controlador = new $objControlador();
        $controlador->$accion($carrito,$genero,$buscador,$producto,$guardarDato);
    }
?>