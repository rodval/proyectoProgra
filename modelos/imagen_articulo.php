<?php
    class Image {

        public $idImagen;
        public $idArticulo;
        public $url;
        public $portada;

        public function __construct($idImagen,$idArticulo,$url,$portada){
            $this -> idImagen =  $idImagen;
            $this -> idArticulo =  $idArticulo;
            $this -> url = $url;
            $this -> portada =  $portada;
        }

        public static function listarImagenesArticulo($idArticulo){
            $listaImagen=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("SELECT 
                    a.idImagen,a.url 
                FROM imagen_articulo a 
                INNER JOIN articulo b ON b.idArticulo = a.idArticulo 
                WHERE b.estado = 1 AND a.idArticulo = ?");
            $sql->execute(array($idArticulo));
            
            foreach($sql->fetchAll() as $articulo){
                $listaImagen[] = new Image(
                    $articulo['idImagen'],
                    null,
                    $articulo['url'],
                    null
                );
            }
            return $listaImagen;
        }
    }
?>