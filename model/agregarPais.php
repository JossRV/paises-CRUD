<?php 
    require_once "../app/conexion.php";
    require_once "../model/buscadorPaises.php";


    $idContinente = $_POST['listaContinentes'];
    $nombrePais = $_POST['pais'];
    $urlImg = $_POST['bandera'];

    $datos = array(
        $idContinente,
        $nombrePais,
        $urlImg
    );

    if(metodosLista :: evitarRepetidos($nombrePais) == 1){
        echo'<script type="text/javascript">
                alert("Repetido");
                window.location.href="http://localhost/SUITS/listaBuscado-352022/";
            </script>';
    }else if(metodosLista :: insertarPais($datos)){
        header("location: ../index.php");
    }else{
        echo "fallo";
    }
    
?>