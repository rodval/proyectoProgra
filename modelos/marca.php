<?php
    class Marca {

        public $idMarca;
        public $marca;
        public $numArticulo;

        public function __construct($idMarca,$marca,$numArticulo){
            $this -> idMarca =  $idMarca;
            $this -> marca =  $marca;
            $this -> numArticulo =  $numArticulo;
        }

        public static function listarMarca(){
            $listaMarca=[];
            $conexion = BD::crearInstancia();

            $sql = $conexion->query("SELECT 
                        a.idMarca,
                        a.marca,
                        COUNT(1) numArticulo
                    FROM marca a 
                    INNER JOIN articulo b ON b.idMarca = a.idMarca
                    WHERE a.estado = 1 AND b.estado = 1
                    GROUP BY a.idMarca,a.marca");
            
            foreach($sql->fetchAll() as $marca){
                $listaMarca[] = new Marca(
                    $marca['idMarca'],
                    $marca['marca'],
                    $marca['numArticulo']
                );
            }
            return $listaMarca;
        }

        public static function agregarMarca($marca){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO marca(marca,estado) VALUES (?,?)");
            $sql->execute(array($marca,1));
        }
    }
?>