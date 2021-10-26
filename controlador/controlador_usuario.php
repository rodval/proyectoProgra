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
                session_destroy();
                session_start();
                $_SESSION["sessionID"]=$usuario;
            } 
            $articulo = Articulo::listarArticuloGrid(true,null);
            $categoria = Categoria::listarCategoria();
            $carrito = 0;
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
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
        public function cerrarSession(){
            session_destroy();
            $carrito = 0;
            $articulo = Articulo::listarArticuloGrid(true,null);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
    }

?>