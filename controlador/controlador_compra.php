<?php

    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorCompra{
        public function agregarCompra($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono){
            if(isset($_SESSION["user"])){

            } else {
                
            }
        }
        public function listarCompras(){

        }
    }

?>