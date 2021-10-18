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

        public static function listarImagenesGrid(){
            $listaImagen=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->query("SELECT a.idArticulo,a.url FROM imagen_articulo a INNER JOIN articulo b ON b.idArticulo = a.idArticulo WHERE b.estado = 1 and a.portada = 1");
            
            foreach($sql->fetchAll() as $articulo){
                $listaImagen[] = new Image(
                    null,
                    $articulo['idArticulo'],
                    $articulo['url'],
                    null
                );
            }
            return $listaImagen;
        }
    }
?>