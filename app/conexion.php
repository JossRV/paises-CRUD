<?php 
    class Conexion{
        static function conectar(){
            $servidor= "localhost";
            $user= "root";
            $pasword= "";
            $bd= "buscador";

            $conexion = new mysqli(
                $servidor,
                $user,
                $pasword,
                $bd
            );
            return $conexion;
        }
    }
    // $c = new Conexion();
    // if(Conexion :: conectar()){
    //     echo "conectado pta xd";
    // }
?>