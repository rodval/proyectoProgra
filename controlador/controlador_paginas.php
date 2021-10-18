<?php

include_once("modelos/articulo.php");
include_once("modelos/categoria.php");
include_once("modelos/imagen_articulo.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorPaginas{
    public function inicio(){
        $articulo = Articulo::listarArticuloGrid();
        $categoria = Categoria::listarCategoria();
        include_once("vistas/componentes/header.php");
        include_once("vistas/componentes/section_gender.php");
        include_once("vistas/componentes/product_grid.php");
        include_once("vistas/componentes/footer.php");
    }
}

?>