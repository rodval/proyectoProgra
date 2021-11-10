<?php
    class Usuario {

        public $idUsuario;
        public $usuario;

        public $clave;
        
        public $nombre;
        public $apellido;
        public $direccion;
        public $mail;

        public $telefono;

        public $rol;
        public $idRol;

        public function __construct($idUsuario,$usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono,$rol,$idRol){
            $this -> idUsuario =  $idUsuario;

            $this -> usuario =  $usuario;
            $this -> clave = $clave;
            
            $this -> nombre =  $nombre;
            $this -> apellido =  $apellido;
            $this -> direccion =  $direccion;
            $this -> mail =  $mail;
            $this -> telefono =  $telefono;

            $this -> rol =  $rol;
            $this -> idRol =  $idRol;
        }

        public static function agregarUsuario($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono,$idRol){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO usuario(usuario,clave,nombre,apellido,direccion,mail,telefono,idRol) VALUES (?,?,?,?,?,?,?,?)");
            $sql->execute(array($usuario,$clave,$nombre,$apellido,$direccion,$mail,$telefono,$idRol));

            if($sql){
                return true;
            }

            return false;
        }

        public static function agregarRegistroCliente($nombre,$apellido,$direccion,$mail,$telefono){
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("INSERT INTO usuario(nombre,apellido,direccion,mail,telefono,idRol) VALUES (?,?,?,?,?,?)");
            $sql->execute(array($nombre,$apellido,$direccion,$mail,$telefono,3));
            $id = $conexion->lastInsertId();

            if($sql){
                return $id;
            }

            return false;
        }

        public static function validarUsuario($usuario,$clave){
            $listaUsuario=[];
            $conexion = BD::crearInstancia();
            $sql = $conexion->prepare("SELECT nombre,apellido,direccion,mail,telefono,idRol FROM usuario WHERE usuario = ? AND clave = ? ");
            $sql->execute(array($usuario,$clave));

            foreach($sql->fetchAll() as $usuario){
                $listaUsuario[] = new Usuario(
                    null,
                    null,
                    null,
                    $usuario['nombre'],
                    $usuario['apellido'],
                    $usuario['direccion'],
                    $usuario['mail'],
                    $usuario['telefono'],
                    null,
                    $usuario['idRol']
                );
            }
            return $listaUsuario;
        }
    }
?>