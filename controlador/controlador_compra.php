<?php

    include_once("modelos/compra.php");
    include_once("modelos/usuario.php");
    include_once("conexion.php");

    BD::crearInstancia();

    class ControladorCompra{
        public function agregarCompra($guardarDato,$precio,$nombre,$apellido,$direccion,$mail,$telefono){
            $instanciaUsuario = Usuario::agregarRegistroCliente($nombre,$apellido,$direccion,$mail,$telefono);
            if($instanciaUsuario){
                $instanciaVenta = Compra::agregarVenta($instanciaUsuario,$precio,$nombre,$apellido);
                if($instanciaVenta){
                    $lstArticulo = $guardarDato ? $_SESSION["carritoCompraG"] : $_SESSION["carritoCompraB"];
                    $total = 0;
                    foreach($lstArticulo as $key => $value){
                        $instanciaProducto = Compra::agregarDetalleProducto($value["producto"],$value["cantidad"],$value["talla"],$value["precio"],$instanciaVenta);
                        if(!$instanciaProducto){
                            return false;
                        }
                    }
                }
            }
            unset($_SESSION['carritoCompraG']);
            unset($_SESSION['carritoCompraB']);
        }
        public function listarCompras(){

        }
    }

?>