<?php
    $controlador="paginas";
    $accion="inicio";
    $genero=null;
    $producto=null;
    $categoria=null;
    $precio=null;
    $marca=null;

    $buscador=null;

    if(isset($_GET['controlador']) && isset($_GET['accion'])){
        if(($_GET['controlador'] != "") && ($_GET['accion'] != "") ){
            $controlador=$_GET['controlador'];
            $accion=$_GET['accion'];
        }
    }

    if(isset($_GET['genero'])){
        $genero=$_GET['genero'];
    }

    if(isset($_GET['producto'])){
        $producto=$_GET['producto'];
    }

    if(isset($_GET['categoria'])){
        $categoria=$_GET['categoria'];
    }

    if(isset($_GET['precio'])){
        $precio=$_GET['precio'];
    }

    if(isset($_GET['marca'])){
        $marca=$_GET['marca'];
    }

    if(isset($_GET['buscador'])){
        $buscador=$_GET['buscador'];
    }

    require_once("vistas/template.php");
?>