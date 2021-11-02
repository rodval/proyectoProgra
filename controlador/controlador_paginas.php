<?php

    include_once("modelos/articulo.php");
    include_once("modelos/categoria.php");
    include_once("modelos/marca.php");
    include_once("modelos/talla.php");
    include_once("modelos/imagen_articulo.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorPaginas{
        public function inicio($carrito,$genero,$producto,$categoria,$preciomax,$preciomin,$marca,$cantidad,$talla,$buscador){
            $articulo = Articulo::listarArticuloGrid(true,$genero,$categoria,$preciomax,$preciomin,$marca,$buscador);
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/menu.php");
            include_once("vistas/componentes/product_grid.php");
            include_once("vistas/componentes/footer.php");
        }
        public function categorias($carrito,$genero,$producto,$categoria,$preciomax,$preciomin,$marca,$cantidad,$talla,$buscador){

            if($categoria){
                $pr = array("categoria"=>$categoria);
                if(isset($_SESSION["categoria"])){
                    array_push($_SESSION["categoria"],$pr);
                } else {
                    $_SESSION["categoria"]=array();
                    array_push($_SESSION["categoria"],$pr);
                }
            }

            echo json_encode($_SESSION["categoria"]);
        
            if($marca){
                $pr = array("marca"=>$marca);
                if(isset($_SESSION["marca"])){
                    array_push($_SESSION["marca"],$pr);
                } else {
                    $_SESSION["marca"]=array();
                    array_push($_SESSION["marca"],$pr);
                }
            }

            echo json_encode($_SESSION["marca"]);

            $articulo = Articulo::listarArticuloGrid(false,$genero,$categoria,$preciomax,$preciomin,$marca,("%".$buscador."%"));
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
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/login.php");
            include_once("vistas/componentes/footer.php");
        }
        public function verificarProducto($carrito){
            $articulo = Articulo::listarArticuloTable();
            $categoria = Categoria::listarCategoria();
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/listaProducto.php");
            include_once("vistas/componentes/footer.php");
        }
        public function procesarCompra($carrito,$genero,$producto,$categoria,$preciomax,$preciomin,$marca,$cantidad,$talla,$buscador,$guardarDato){
            $categoria = Categoria::listarCategoria();
            $lstArticulo = $guardarDato ? $_SESSION["carritoCompraG"] : $_SESSION["carritoCompraB"];
            include_once("vistas/componentes/header.php");
            include_once("vistas/componentes/verificar.php");
            include_once("vistas/componentes/footer.php");
        }
    }
?>