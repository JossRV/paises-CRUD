<?php 
    require_once "../app/conexion.php";
    require_once "./buscadorPaises.php";

    $m = new metodosLista();

    $idPais = $_POST['idPais'];
    $idContinente = $_POST['listaContinentes'];
    $nombrePais = $_POST['pais'];
    $bandera = $_POST['bandera'];

    $datos = array(
        $idPais,
        $idContinente,
        $nombrePais,
        $bandera
    );

    if($m -> actualizarPais($datos)){
        header("location: ../todosPaises.php");
    }else{
        echo "fallo";
    }
?>