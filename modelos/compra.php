<?php
    class Compra {

        public $idDetalle;
        public $idArticulo;
        public $cantidad;
        public $precio;
        public $idTallaArticulo;
        public $idVenta;

        public $idUsuario;
        public $comprobante;
        public $fecha;
        public $total;

        public function __construct($idDetalle,$idArticulo,$cantidad,$precio,$idTallaArticulo,$idVenta,$idUsuario,$comprobante,$fecha,$total){
            $this -> idDetalle =  $idDetalle;
            $this -> idArticulo =  $idArticulo;
            $this -> cantidad = $cantidad;
            $this -> precio =  $precio;
            $this -> idTallaArticulo =  $idTallaArticulo;

            $this -> idVenta =  $idVenta;
            $this -> idUsuario =  $idUsuario;
            $this -> comprobante =  $comprobante;
            $this -> fecha =  $fecha;
            $this -> total =  $total;
        }

        public static function agregarDetalleProducto($producto,$cantidad,$talla,$precio,$idVenta){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO detalle_venta(idArticulo,idVenta,cantidad,precio,idTallaArticulo) VALUES (?,?,?,?,?)");
            $sql->execute(array($producto,$idVenta,$cantidad,$precio,$talla));

            $sql = $conexion->prepare("UPDATE articulo SET cantidad  = (cantidad - ?) WHERE idArticulo = ?");
            $sql->execute(array($cantidad,$producto));

            if($sql){
                return true;
            }

            return false;
        }

        public static function agregarVenta($usuario,$precio,$nombre,$apellido){

            $comprobante = (date("Y") . date("m") . date("d") . substr($nombre, 0, 1) . substr($apellido, 0, 1));
            $fecha = (date("Y-m-d H:i:s"));

            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO venta(idUsuario,comprobante,fecha,total,estado) VALUES (?,?,?,?,?)");
            $sql->execute(array($usuario,$comprobante,$fecha,$precio,1));
            $id = $conexion->lastInsertId();

            if($sql){
                return $id;
            }

            return false;
        }

    }
?>