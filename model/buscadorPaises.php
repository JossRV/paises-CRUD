<?php 
    class metodosLista{
        public function mostrar($sql){
            $c = new Conexion();
            $conectado = $c -> conectar();
            // $sql = "SELECT * FROM t_continente";
            $respuesta = mysqli_query($conectado,$sql);
            return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        }
        public function insertarPais($datos){
            $c = new Conexion();
            $conectado = $c -> conectar();
            $sql = "INSERT INTO t_paises(id_continente,nombre,bandera)
                    VALUES ('$datos[0]','$datos[1]','$datos[2]')";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        public function eliminarPais($id){
            $c = new Conexion();
            $conectado = $c -> conectar();
            $sql = "DELETE FROM t_paises WHERE id_pais = '$id'";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        public function actualizarPais($datos){
            $c = new Conexion();
            $conectado = $c -> conectar();
            $sql = "UPDATE t_paises 
                    SET id_continente = '$datos[1]',
                    nombre = '$datos[2]',
                    bandera = '$datos[3]'
                    WHERE id_pais = '$datos[0]'";
            return $respuesta = mysqli_query($conectado,$sql);
        }
        public function evitarRepetidos($pais){
            $c = new Conexion();
            $conectado = $c -> conectar();
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