<?php

    include_once("modelos/articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorProducto{
        public function agregarProducto($estadoProducto,$categoria,$codigo,$producto,$precio,$cantidad,$descripcion,$marca,$descuento,$genero){
            if(isset($_SESSION["sessionID"])){
                $result = Articulo::agregarArticulo($categoria,$codigo,$producto,$precio,$cantidad,$descripcion,$marca,$descuento,$genero);
            } 
        }
        public function estadoProducto($estadoProducto,$categoria,$codigo,$producto){
            if(isset($_SESSION["sessionID"])){
                $result = Articulo::estadoArticulo($estadoProducto,$producto);
            } 
        }
    }

?>