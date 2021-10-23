<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/marca.php");
    include_once("modelos/talla.php");
    include_once("modelos/imagen_articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorPaginas{
        public function inicio($genero,$producto,$categoria,$precio,$marca){
            $articulo = Articulo::listarArticuloGrid($genero);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function categorias($genero,$producto,$categoria,$precio,$marca){
            $articulo = Articulo::listarArticuloGrid($genero);
            $categoria = Categoria::listarCategoria();
            $marca = Marca::listarMarca();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/categoria_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function producto($genero,$producto,$categoria,$precio,$marca){
            $articulo = Articulo::obtenerArticulo($producto);
            $categoria = Categoria::listarCategoria();
            $talla = Talla::listarTallaArticulo($producto);
            $imagenesArticulo = Image::listarImagenesArticulo($producto);
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/producto.php");
            include_once("vistas/componentes/footer.php");
        }
    }

?>