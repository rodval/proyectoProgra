<?php
    class Categoria {

        public $idCategoria;
        public $categoria;
        public $numArticulo;

        public function __construct($idCategoria,$categoria,$numArticulo){
            $this -> idCategoria =  $idCategoria;
            $this -> categoria =  $categoria;
            $this -> numArticulo =  $numArticulo;
        }

        public static function listarCategoria(){
            $listaCategoria=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->query("SELECT 
                        a.idCategoria,
                        a.categoria,
                        COUNT(1) numArticulo
                    FROM categoria a 
                    INNER JOIN articulo b ON b.idCategoria = a.idCategoria
                    WHERE a.estado = 1 AND b.estado = 1
                    GROUP BY a.idCategoria,a.categoria");
            
            foreach($sql->fetchAll() as $categoria){
                $listaCategoria[] = new Categoria(
                    $categoria['idCategoria'],
                    $categoria['categoria'],
                    $categoria['numArticulo']
                );
            }
            return $listaCategoria;
        }

        public static function agregarCategoria($categoria){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO categoria(codigo,estado) VALUES (?,?)");
            $sql->execute(array($categoria,1));
        }
    }
?>