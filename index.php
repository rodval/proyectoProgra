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

    $genero=isset($_GET['genero']) ? $_GET['genero'] : null ;
    
    $producto=isset($_GET['producto']) ? $_GET['producto'] : null ;
    $categoria=isset($_GET['categoria']) ? $_GET['categoria'] : null ;
    $precio=isset($_GET['precio']) ? $_GET['precio'] : null ;
    $marca=isset($_GET['marca']) ? $_GET['marca'] : null ;

    $cantidad=isset($_GET['cantidad']) ? $_GET['cantidad'] : null ;
    $talla=isset($_GET['talla']) ? $_GET['talla'] : null ;

    $carrito=isset($_GET['carrito']) ? $_GET['carrito'] : 0 ;
    $buscador=isset($_GET['buscador']) ? $_GET['buscador'] : null ;

    $usuario=isset($_GET['usuario']) ? $_GET['usuario'] : null ;
    $clave=isset($_GET['clave']) ? $_GET['clave'] : null ;
    $nombre=isset($_GET['nombre']) ? $_GET['nombre'] : null ;
    $apellido=isset($_GET['apellido']) ? $_GET['apellido'] : null ;
    $direccion=isset($_GET['direccion']) ? $_GET['direccion'] : null ;
    $mail=isset($_GET['mail']) ? $_GET['mail'] : null ;
    $telefono=isset($_GET['telefono']) ? $_GET['telefono'] : null ;
    
    if($producto && $cantidad && $talla){
        $pr = array("producto"=>$producto,"cantidad"=>$cantidad,"talla"=>$talla);
        if(isset($_SESSION["carritoCompra"])){
            array_push($_SESSION["carritoCompra"],$pr);
        } else {
            $_SESSION["carritoCompra"]=array();
            array_push($_SESSION["carritoCompra"],$pr);
        }
    }

    require_once("vistas/template.php");
?>