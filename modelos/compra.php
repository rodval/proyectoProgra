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
        public $articulos;

        public $nombre;
        public $apellido;
        public $direccion;
        public $mail;
        public $telefono;

        public function __construct($idDetalle,$idArticulo,$cantidad,$precio,$idTallaArticulo,$idVenta,$idUsuario,$comprobante,$fecha,$total,$articulos,$nombre,$apellido,$direccion,$mail,$telefono){
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
            $this -> articulos = $articulos;

            $this -> nombre =  $nombre;
            $this -> apellido =  $apellido;
            $this -> direccion =  $direccion;
            $this -> mail =  $mail;
            $this -> telefono = $telefono;
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

        public static function listarPedidos($usuario){
            $listaPedidos=[];
            $conexion = BD::crearInstancia();

            if($usuario){
                $sql = $conexion->prepare("SELECT 
                                a.idVenta,
                                a.comprobante,
                                a.fecha,
                                a.total,
                                (SELECT REPLACE(REPLACE((SELECT
                                    GROUP_CONCAT(JSON_OBJECT('',concat_ws(' ', c.cantidad, 'x', d.articulo, (c.cantidad * c.precio))))
                                    FROM detalle_venta c
                                    INNER JOIN articulo d ON d.idArticulo = c.idArticulo
                                    WHERE c.idVenta = a.idVenta),
                                    '{\"\": \"',''),'\"}','')) AS articulos,
                                b.nombre,
                                b.apellido,
                                b.direccion,
                                b.mail,
                                b.telefono
                        FROM venta a 
                        INNER JOIN usuario b on b.idUsuario = a.idUsuario WHERE b.idUsuario = ?");
                $sql->execute(array($usuario));
            } else {
                $sql = $conexion->query("SELECT 
                                a.idVenta,
                                a.comprobante,
                                a.fecha,
                                a.total,
                                (SELECT REPLACE(REPLACE((SELECT
                                    GROUP_CONCAT(JSON_OBJECT('',concat_ws(' ', c.cantidad, 'x', d.articulo, (c.cantidad * c.precio))))
                                    FROM detalle_venta c
                                    INNER JOIN articulo d ON d.idArticulo = c.idArticulo
                                    WHERE c.idVenta = a.idVenta),
                                    '{\"\": \"',''),'\"}','')) AS articulos,
                                b.nombre,
                                b.apellido,
                                b.direccion,
                                b.mail,
                                b.telefono
                        FROM venta a 
                        INNER JOIN usuario b on b.idUsuario = a.idUsuario");
            }
        
            foreach($sql->fetchAll() as $pedidos){
                $listaPedidos[] = new Compra(
                    null,
                    null,
                    null,
                    null,
                    null,
                    $pedidos['idVenta'],
            
                    null,
                    $pedidos['comprobante'],
                    $pedidos['fecha'],
                    $pedidos['total'],
                    $pedidos['articulos'],

                    $pedidos['nombre'],
                    $pedidos['apellido'],
                    $pedidos['direccion'],
                    $pedidos['mail'],
                    $pedidos['telefono']
                );
            }

            return $listaPedidos;
        }

    }
?>