<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/marca.php");
    include_once("modelos/talla.php");
    include_once("modelos/imagen_articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorPaginas{
        public function inicio($carrito,$genero){
            $articulo = Articulo::listarArticuloGrid(true,$genero);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function categorias($carrito,$genero,$producto,$categoria,$precio,$marca){
            $articulo = Articulo::listarArticuloGrid(false,$genero);
            $categoria = Categoria::listarCategoria();
            $marca = Marca::listarMarca();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/categoria_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function producto($carrito,$genero,$producto){
            $articulo = Articulo::obtenerArticulo($producto);
            $categoria = Categoria::listarCategoria();
            $talla = Talla::listarTallaArticulo($producto);
            $imagenesArticulo = Image::listarImagenesArticulo($producto);
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/producto.php");
            include_once("vistas/componentes/footer.php");
        }
        public function login($carrito){
            $categoria = Categoria::listarCategoria($carrito);
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/login.php");
            include_once("vistas/componentes/footer.php");
        }
        public function verificarProducto($carrito){
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/carritoCompra.php");
            include_once("vistas/componentes/footer.php");
        }
        public function procesarCompra($carrito,$genero,$producto,$categoria,$precio,$marca,$cantidad,$talla){
            $categoria = Categoria::listarCategoria();
            foreach($_SESSION["carritoCompra"] as $key => $value){
                foreach($value as $k => $v){
                    echo $k."=".$v."<br />";
                }
            }
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/verificar.php");
            include_once("vistas/componentes/footer.php");
        }
    }
?>