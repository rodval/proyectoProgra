<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/marca.php");
    include_once("modelos/talla.php");
    include_once("modelos/imagen_articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorPaginas{
        public function inicio($carrito,$genero,$buscador){
            $articulo = Articulo::listarArticuloGrid(true,$genero,$buscador);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/menu.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function categorias($carrito,$genero,$buscador){
            $articulo = Articulo::listarArticuloGrid(false,$genero,("%".$buscador."%"));
            $categoria = Categoria::listarCategoria();
            $marca = Marca::listarMarca();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/menu.php");
            include_once("vistas/componentes/categoria_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function producto($carrito,$genero,$buscador,$producto){
            $articulo = Articulo::obtenerArticulo($producto);
            $categoria = Categoria::listarCategoria();
            $talla = Talla::listarTallaArticulo($producto);
            $imagenesArticulo = Image::listarImagenesArticulo($producto);
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/producto.php");
            include_once("vistas/componentes/footer.php");
        }
        public function login($carrito){
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/menu.php");
            include_once("vistas/componentes/login.php");
            include_once("vistas/componentes/footer.php");
        }
        public function verificarProducto($carrito){
            $articulo = Articulo::listarArticuloTable();
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/menu.php");
            include_once("vistas/componentes/listaProducto.php");
            include_once("vistas/componentes/footer.php");
        }
        public function procesarCompra($carrito,$genero,$buscador,$producto,$guardarDato){
            $categoria = Categoria::listarCategoria();
            $lstArticulo = $guardarDato ? $_SESSION["carritoCompraG"] : $_SESSION["carritoCompraB"];
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/verificar.php");
            include_once("vistas/componentes/footer.php");
        }
    }
?>