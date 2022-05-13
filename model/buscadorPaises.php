<?php 
    class metodosLista{
        static function mostrar($sql){
            $conectado = Conexion :: conectar();
            $respuesta = mysqli_query($conectado,$sql);
            return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        }
        static function insertarPais($datos){
            $conectado = Conexion :: conectar();
            $sql = "INSERT INTO t_paises(id_continente,nombre,bandera)
                    VALUES ('$datos[0]','$datos[1]','$datos[2]')";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        static function eliminarPais($id){
            $conectado = Conexion :: conectar();
            $sql = "DELETE FROM t_paises WHERE id_pais = '$id'";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        static function actualizarPais($datos){
            $conectado = Conexion :: conectar();
            $sql = "UPDATE t_paises 
                    SET id_continente = '$datos[1]',
                    nombre = '$datos[2]',
                    bandera = '$datos[3]'
                    WHERE id_pais = '$datos[0]'";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        static function evitarRepetidos($pais){
            $conectado = Conexion :: conectar();
            $sql = "SELECT * FROM t_paises WHERE nombre = '$pais'";
            $respuesta = mysqli_query($conectado,$sql);
            if(mysqli_num_rows($respuesta) > 0){
                return 1;
            }else{
                return 0;
            }
        }
    }


?>