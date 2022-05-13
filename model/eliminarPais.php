<?php 
    require_once "../app/conexion.php";
    require_once "../model/buscadorPaises.php";


    $idPais = $_GET['idPais'];

    if(metodosLista :: eliminarPais($idPais)){
        header("location: ../todosPaises.php");
    }else{
        echo "falló";
    }


?>