<?php 
    require_once "../app/conexion.php";
    require_once "../model/buscadorPaises.php";

    $m = new metodosLista();

    $idPais = $_GET['idPais'];

    if($m -> eliminarPais($idPais)){
        header("location: ../todosPaises.php");
    }else{
        echo "falló";
    }


?>