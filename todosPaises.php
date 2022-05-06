<?php 
    require_once "./app/conexion.php";
    require_once "./model/buscadorPaises.php";
    require_once "./header.php";

    $m = new metodosLista();
    $muestraPaises = $m -> mostrar("SELECT * FROM v_continente_pais");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los paises</title>
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
                    <a href="#">
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
    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <h6 class="display-4 mt-5 mb-4">Listado de todos los paises</h6>
                <table class="table" id="table" widht="100%">
                    <thead align="center">
                        <th>Continente</th>
                        <th>Pais</th>
                        <th>Bandera</th>
                        <th>Eliminar</th>
                        <th>Actualizar</th>
                    </thead>
                    <tbody align="center" >
                        <?php foreach ($muestraPaises as $key): ?>
                        <tr>
                            <td><?=$key['nombre_continente']?></td>
                            <td><?=$key['nombre_pais']?></td>
                            <td>
                                <img src="<?=$key['bandera_pais']?>" class="bandera">
                            </td>
                            <td>
                                <a href="./model/eliminarPais.php?idPais=<?=$key['idPais']?>" class="btn btn-outline-dark mt-2">
                                    <i class="fa-duotone fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <a href="./editarPais.php?idPais=<?=$key['idPais']?>" class="btn btn-outline-dark mt-2">
                                    <i class="fa-duotone fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php require_once "./footer.php"; ?>