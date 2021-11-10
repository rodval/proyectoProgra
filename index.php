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
    
    $guardarDato=isset($_POST['guardarDato']) ? $_POST['guardarDato'] : false ;

    $quitarDato=isset($_POST['quitarDato']) ? $_POST['quitarDato'] : false ;

    $genero=isset($_POST['genero']) ? $_POST['genero'] : null ;
    $codigo=isset($_POST['codigo']) ? $_POST['codigo'] : null ;
    
    $estadoProducto=isset($_POST['estadoProducto']) ? $_POST['estadoProducto'] : null ;
    
    $producto=isset($_POST['producto']) ? $_POST['producto'] : null ;
    $buscador=isset($_POST['buscador']) ? $_POST['buscador'] : "" ;

    $descuento=isset($_POST['descuento']) ? $_POST['descuento'] : "" ;
    $descripcion=isset($_POST['descripcion']) ? $_POST['descripcion'] : "" ;
    $precio=isset($_POST['precio']) ? $_POST['precio'] : "" ;

    $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null ;
    $talla=isset($_POST['talla']) ? $_POST['talla'] : null ;

    $categoria=isset($_POST['categoria']) ? $_POST['categoria'] : null ;
    $marca=isset($_POST['marca']) ? $_POST['marca'] : null ;

    $usuario=isset($_POST['usuario']) ? $_POST['usuario'] : null ;
    $clave=isset($_POST['clave']) ? $_POST['clave'] : null ;
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : null ;
    $apellido=isset($_POST['apellido']) ? $_POST['apellido'] : null ;
    $direccion=isset($_POST['direccion']) ? $_POST['direccion'] : null ;
    $mail=isset($_POST['mail']) ? $_POST['mail'] : null ;
    $telefono=isset($_POST['telefono']) ? $_POST['telefono'] : null ;

    if($producto && $cantidad && $talla){
        $pr = array("producto"=>$producto,"cantidad"=>$cantidad,"talla"=>$talla);
        if($guardarDato){
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

    if($quitarDato && $producto){
        unset($_SESSION["carritoCompraG"][$producto]);
    }

    $carrito=isset($_SESSION['carritoCompraG']) ? count($_SESSION['carritoCompraG']) : 0 ;

    require_once("vistas/template.php");
?>