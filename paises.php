<?php 
    include "./header.php";
    include "./footer.php";
    require_once "./app/conexion.php";
    require_once "./model/buscadorPaises.php";
    $id_continente = $_POST['listaContinentes'];    

    $obj = new metodosLista();
    $mostrarPais = $obj -> mostrar("SELECT * FROM v_continente_pais WHERE idContinente = '$id_continente'");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="menu-flotante">
        <div class="navegacion">
            <div class="menu_desplegable"></div>
            <!-- <div class="perfil">
                <div class="img">
                    <img src="./public/img/myImg.jpeg" alt="">
                </div>
            </div> -->
            <ul class="menu">
                <li>
                    <a href="./index.php">
                        <span class="icono"><i class="fa-duotone fa-house-person-return"></i></span>
                        <span class="texto">inicio</span>
                    </a>
                </li>
                <li>
                    <a href="./todosPaises.php">
                        <span class="icono"><i class="fa-duotone fa-globe-stand"></i></span>
                        <span class="texto">Todos los paises</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="icono"><i class="fa-duotone fa-gear"></i></span>
                        <span class="texto">Configuracion</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="./index.php">
                        <span class="icono"><i class="fa-duotone fa-arrow-rotate-left"></i></span>
                        <span class="texto">Regresar</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h6 class="display-4 mt-5 mb-4">Listado de paises por continente</h6>
                <table class="table" id="table" widht="100%">
                    <thead align="center">
                        <th>Continente</th>
                        <th>Pais</th>
                        <th>Bandera</th>
                    </thead>
                    <tbody align="center">
                        <?php foreach ($mostrarPais as $key): ?>
                        <tr>
                            <td><?=$key['nombre_continente']?></td>
                            <td><?=$key['nombre_pais']?></td>
                            <td><img src="<?=$key['bandera_pais']?>" class="bandera"></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>