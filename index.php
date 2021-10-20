<?php
    $controlador="paginas";
    $accion="inicio";
    $genero=null;

    if(isset($_GET['controlador']) && isset($_GET['accion'])){
        if(($_GET['controlador'] != "") && ($_GET['accion'] != "") ){
            $controlador=$_GET['controlador'];
            $accion=$_GET['accion'];
        }
    }

    if(isset($_GET['genero'])){
        $genero=$_GET['genero'];
    }

    require_once("vistas/template.php");
?>