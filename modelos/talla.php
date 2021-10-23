<?php
    class Talla {

        public $idTalla;
        public $talla;
        public $numArticulo;

        public function __construct($idTalla,$talla,$numArticulo){
            $this -> idTalla =  $idTalla;
            $this -> talla =  $talla;
            $this -> numArticulo =  $numArticulo;
        }

        public static function listarTallaArticulo($idArticulo){
            $listaTalla=[];
            $conexion = BD::crearInstancia();

            $sql = $conexion->prepare("SELECT
                    b.idTalla,b.talla
                FROM talla_articulo a 
                INNER JOIN talla b ON b.idTalla = a.idTalla
                INNER JOIN articulo c ON c.idArticulo = a.idArticulo
                WHERE b.estado = 1 AND c.estado = 1 AND (a.idArticulo = ?) ");
            $sql->execute(array($idArticulo));

            foreach($sql->fetchAll() as $talla){
                $listaTalla[] = new Talla(
                    $talla['idTalla'],
                    $talla['talla'],
                    null
                );
            }
            return $listaTalla;
        }
    }
?>