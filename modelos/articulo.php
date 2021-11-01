<?php
    class Articulo {

        public $idArticulo;
        public $articulo;

        public $codigo;
        
        public $precio;
        public $cantidad;
        public $descripcion;
        public $descuento;

        public $idCategoria;
        public $categoria;

        public $idMarca;
        public $marca;

        public $image;

        public $estado;
        public $genero;

        public function __construct($idArticulo,$articulo,$codigo,$precio,$cantidad,$descripcion,$descuento,$idCategoria,$categoria,$idMarca,$marca,$image,$estado,$genero){
            $this -> idArticulo =  $idArticulo;
            $this -> articulo =  $articulo;

            $this -> codigo = $codigo;
            
            $this -> precio =  $precio;
            $this -> cantidad =  $cantidad;
            $this -> descripcion =  $descripcion;
            $this -> descuento =  $descuento;

            $this -> idCategoria =  $idCategoria;
            $this -> categoria =  $categoria;
    
            $this -> idMarca =  $idMarca;
            $this -> marca =  $marca;

            $this -> image =  $image;

            $this -> estado =  $estado;
            $this -> genero =  $genero;
        }

        public static function listarArticuloGrid($top,$genero,$categoria,$preciomax,$preciomin,$marca,$buscador){
            $listaArticulo=[];
            $conexion = BD::crearInstancia();
            if($top) {
                $sql = $conexion->query("SELECT 
                        a.idArticulo,a.articulo,a.precio,a.descuento,b.categoria,c.marca,d.url 
                    FROM articulo a 
                    INNER JOIN categoria b ON b.idCategoria = a.idCategoria 
                    INNER JOIN marca c ON c.idMarca = a.idMarca 
                    INNER JOIN imagen_articulo d ON d.idArticulo = a.idArticulo and d.portada = 1
                    WHERE a.estado = 1 and b.estado = 1 and c.estado = 1 ORDER BY a.precio DESC LIMIT 3");
            } else {
                $sql = $conexion->prepare("SELECT 
                        a.idArticulo,a.articulo,a.precio,a.descuento,b.categoria,c.marca,d.url 
                    FROM articulo a 
                    INNER JOIN categoria b ON b.idCategoria = a.idCategoria 
                    INNER JOIN marca c ON c.idMarca = a.idMarca 
                    INNER JOIN imagen_articulo d ON d.idArticulo = a.idArticulo and d.portada = 1
                    WHERE a.estado = 1 and b.estado = 1 and c.estado = 1 and ((a.genero = ? OR ? is null) AND (a.idCategoria = ? OR ? is null) 
                    AND ((a.precio BETWEEN ? AND ?) OR (? is null AND ? is null)) AND (a.idMarca = ? OR ? is null)  
                    AND (a.articulo LIKE ?)) ORDER BY a.precio DESC");
                $sql->execute(array($genero,$genero,$categoria,$categoria,$preciomin,$preciomax,$preciomin,$preciomax,$marca,$marca,$buscador));
            }
            
            foreach($sql->fetchAll() as $articulo){
                $listaArticulo[] = new Articulo(
                    $articulo['idArticulo'],
                    $articulo['articulo'],
                    null,
                    $articulo['precio'],
                    null,
                    null,
                    $articulo['descuento'],
                    null,
                    $articulo['categoria'],
                    null,
                    $articulo['marca'],
                    $articulo['url'],
                    null,
                    null
                ); 
            }
            return $listaArticulo;
        }

        public static function listarArticuloTable(){
            $listaArticulo=[];
            $conexion = BD::crearInstancia();

            $sql = $conexion->query("SELECT
                    a.idArticulo,
                    a.codigo,
                    a.articulo,
                    b.categoria,
                    c.marca,
                    a.descripcion,
                    a.estado,
                    a.cantidad,
                    a.precio,
                    a.descuento,
                    a.genero
                FROM articulo a 
                INNER JOIN categoria b ON b.idCategoria = a.idCategoria
                INNER JOIN marca c ON c.idMarca = a.idMarca");

            foreach($sql->fetchAll() as $articulo){
                $listaArticulo[] = new Articulo(
                    $articulo['idArticulo'],
                    $articulo['articulo'],
                    $articulo['codigo'],
                    $articulo['precio'],
                    $articulo['cantidad'],
                    $articulo['descripcion'],
                    $articulo['descuento'],
                    null,
                    $articulo['categoria'],
                    null,
                    $articulo['marca'],
                    null,
                    $articulo['estado'],
                    $articulo['genero']
                );
            }
            return $listaArticulo;
        }

        public static function obtenerArticulo($idArticulo){
            $listaArticulo=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("SELECT
                    a.idArticulo,a.articulo,a.codigo,a.precio,a.cantidad,a.descripcion,a.descuento,a.idCategoria,b.categoria,a.idMarca,c.marca 
                FROM articulo a 
                INNER JOIN categoria b ON b.idCategoria = a.idCategoria 
                INNER JOIN marca c ON c.idMarca = a.idMarca 
                WHERE a.idArticulo = ? AND a.estado = 1 AND b.estado = 1 AND c.estado = 1");
            $sql->execute(array($idArticulo));
            
            foreach($sql->fetchAll() as $articulo){
                $listaArticulo[] = new Articulo(
                    $articulo['idArticulo'],
                    $articulo['articulo'],
                    $articulo['codigo'],
                    $articulo['precio'],
                    $articulo['cantidad'],
                    $articulo['descripcion'],
                    $articulo['descuento'],
                    $articulo['idCategoria'],
                    $articulo['categoria'],
                    $articulo['idMarca'],
                    $articulo['marca'],
                    null,
                    null,
                    null
                );
            }
            return $listaArticulo;
        }

        public static function agregarArticulo($idCategoria,$codigo,$articulo,$precio,$cantidad,$descripcion,$idMarca){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO articulo(idCategoria,codigo,articulo,precio,cantidad,descripcion,estado,idMarca) VALUES (?,?,?,?,?,?,?,?)");
            $sql->execute(array($idCategoria,$codigo,$articulo,$precio,$cantidad,$descripcion,1,$idMarca));
        }
    }
?>