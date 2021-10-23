<?php
    $controlador="paginas";
    $accion="inicio";
    $genero=null;
    $idProducto=null;

    if(isset($_GET['controlador']) && isset($_GET['accion'])){
        if(($_GET['controlador'] != "") && ($_GET['accion'] != "") ){
            $controlador=$_GET['controlador'];
            $accion=$_GET['accion'];
        }
    }

    if(isset($_GET['genero'])){
        $genero=$_GET['genero'];
    }

    if(isset($_GET['idProducto'])){
        $idProducto=$_GET['idProducto'];
    }

    require_once("vistas/template.php");
?>