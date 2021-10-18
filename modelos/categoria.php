<?php
    class Categoria {

        public $idCategoria;
        public $categoria;

        public function __construct($idCategoria,$categoria){
            $this -> idCategoria =  $idCategoria;
            $this -> categoria =  $categoria;
        }

        public static function listarCategoria(){
            $listaCategoria=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->query("SELECT idCategoria,categoria FROM categoria WHERE estado = 1");
            
            foreach($sql->fetchAll() as $categoria){
                $listaCategoria[] = new Categoria(
                    $categoria['idCategoria'],
                    $categoria['categoria']
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