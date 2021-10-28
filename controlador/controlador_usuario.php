<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/usuario.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorUsuario{
        public function agregarUsuario($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono){
            $result = Usuario::agregarUsuario($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono,2);
            if($result){
                echo "ok";
                session_destroy();
                session_start();
                $_SESSION["sessionID"]=session_id();
            } 
        }
        public function validarUsuario($usuario,$clave){
            $result = Usuario::validarUsuario($usuario,$clave);
            $r = true;
            foreach ( $result AS $n ) $r = false;
            if($r){
                session_destroy();
                session_start();
                $_SESSION["sessionID"]=session_id();
            }
        }
        public function cerrarSession(){
            session_unset();
        }
    }

?>