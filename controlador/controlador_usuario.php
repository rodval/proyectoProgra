<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/usuario.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorUsuario{
        public function agregarUsuario($guardarDato,$precio,$usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono){
            $result = Usuario::agregarUsuario($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono,2);
            if($result){
                unset($_SESSION['sessionID']);
                $_SESSION["sessionID"]=session_id();
            } 
        }
        public function validarUsuario($guardarDato,$precio,$usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono){
            $result = Usuario::validarUsuario($usuario,$clave);
            $r = false;
            $lst = array();
            foreach ( $result AS $n ) {
                $lst = array("nombre"=>$n->nombre,"apellido"=>$n->apellido,"direccion"=>$n->direccion,"mail"=>$n->mail,"telefono"=>$n->telefono,"idRol"=>$n->idRol);
                echo $n->idRol;
                $r = true;
            };
            if($r){
                unset($_SESSION['sessionID']);
                $_SESSION["sessionID"]=session_id();
                $_SESSION["user"]=$lst;
            }
        }
        public function cerrarSession(){
            session_unset();
        }
    }

?>