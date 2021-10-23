<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/marca.php");
    include_once("modelos/imagen_articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorPaginas{
        public function inicio($genero){
            $articulo = Articulo::listarArticuloGrid($genero);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function categorias($genero){
            $articulo = Articulo::listarArticuloGrid($genero);
            $categoria = Categoria::listarCategoria();
            $marca = Marca::listarMarca();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/categoria_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function producto($idProducto){
            $articulo = Articulo::obtenerArticulo($idProducto);
            $imagenesArticulo = Image::listarImagenesGrid($idProducto);
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/producto.php");
            include_once("vistas/componentes/footer.php");
        }
    }

?>