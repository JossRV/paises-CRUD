<?php 
    require_once "../app/conexion.php";
    require_once "../model/buscadorPaises.php";

    $m = new metodosLista();

    $idContinente = $_POST['listaContinentes'];
    $nombrePais = $_POST['pais'];
    $urlImg = $_POST['bandera'];

    $datos = array(
        $idContinente,
        $nombrePais,
        $urlImg
    );

    if($m -> evitarRepetidos($nombrePais) == 1){
        echo'<script type="text/javascript">
                alert("Repetido");
                window.location.href="http://localhost/SUITS/listaBuscado-352022/";
            </script>';
    }else if($m -> insertarPais($datos)){
        header("location: ../index.php");
    }else{
        echo "fallo";
    }
    
?>