<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/usuario.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorUsuario{
        public function validarUsuario($usuario,$clave){
            $result = Usuario::validarUsuario($usuario,$clave);
            if($result){
                session_destroy();
                session_start();
                $_SESSION["sessionID"]=$usuario;
            } 
            $articulo = Articulo::listarArticuloGrid(true,null);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
    }

?>