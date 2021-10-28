<?php
    session_start();

    $controlador="paginas";
    $accion="inicio";
    
    if(isset($_GET['controlador']) && isset($_GET['accion'])){
        if(($_GET['controlador'] != "") && ($_GET['accion'] != "") ){
            $controlador=$_GET['controlador'];
            $accion=$_GET['accion'];
        }
    }

    $guardarProducto=isset($_POST['guardarProducto']) ? $_POST['guardarProducto'] : false ;

    $genero=isset($_POST['genero']) ? $_POST['genero'] : null ;
    $producto=isset($_POST['producto']) ? $_POST['producto'] : null ;
    $categoria=isset($_POST['categoria']) ? $_POST['categoria'] : null ;

    $preciomin=isset($_POST['preciomin']) ? $_POST['preciomin'] : null ;
    $preciomax=isset($_POST['preciomax']) ? $_POST['preciomax'] : null ;

    $marca=isset($_POST['marca']) ? $_POST['marca'] : null ;

    $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null ;
    $talla=isset($_POST['talla']) ? $_POST['talla'] : null ;

    $carrito=isset($_POST['carrito']) ? $_POST['carrito'] : 0 ;
    $buscador=isset($_POST['buscador']) ? $_POST['buscador'] : "" ;

    $usuario=isset($_POST['usuario']) ? $_POST['usuario'] : null ;
    $clave=isset($_POST['clave']) ? $_POST['clave'] : null ;
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : null ;
    $apellido=isset($_POST['apellido']) ? $_POST['apellido'] : null ;
    $direccion=isset($_POST['direccion']) ? $_POST['direccion'] : null ;
    $mail=isset($_POST['mail']) ? $_POST['mail'] : null ;
    $telefono=isset($_POST['telefono']) ? $_POST['telefono'] : null ;

    if($producto && $cantidad && $talla){
        $pr = array("producto"=>$producto,"cantidad"=>$cantidad,"talla"=>$talla);
        if($guardarProducto){
            if(isset($_SESSION["carritoCompraG"])){
                array_push($_SESSION["carritoCompraG"],$pr);
            } else {
                $_SESSION["carritoCompraG"]=array();
                array_push($_SESSION["carritoCompraG"],$pr);
            }
        } else {
            $_SESSION["carritoCompraB"]=array();
            array_push($_SESSION["carritoCompraB"],$pr);
        }
    }

    require_once("vistas/template.php");
?>