<?php
    include_once("controlador/controlador_".$controlador.".php");
    $objControlador="Controlador".ucfirst($controlador);
    if($controlador == "usuario" || $controlador == "compra"){
        $controlador = new $objControlador();
        $controlador->$accion($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono);
    } else if($controlador == "producto" ) {
        $controlador = new $objControlador();
        $controlador->$accion($estadoProducto,$categoria,$codigo,$producto,$precio,$cantidad,$descripcion,$marca,$descuento,$genero);
    } else {
        $controlador = new $objControlador();
        $controlador->$accion($carrito,$genero,$buscador,$producto,$guardarDato);
    }
?>