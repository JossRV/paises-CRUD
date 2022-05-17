<?php 
    require_once "./app/conexion.php";
    require_once "./model/buscadorPaises.php";
    require "./header.php";
    $idcontinente = $_GET['idPais'];
    // echo $idcontinente;  
    $listaPaises = metodosLista :: mostrar("SELECT * FROM v_continente_pais WHERE idContinente = '$idcontinente'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises que muestra</title>
</head>

<body class="listado">
    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h4 class="display-5 text-center mb-5 mt-5">Listado del continente americano</h4>
                <table class="table" id="tabla">
                    <thead align="center">
                        <tr>
                            <th>Continente</th>
                            <th>Pais</th>
                            <th>Bandera</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php foreach($listaPaises as $key): ?>
                        <tr>
                            <td><?=$key['nombre_continente']?></td>
                            <td><?=$key['nombre_pais']?></td>
                            <td>
                                <img src="<?=$key['bandera_pais']?>" alt="">
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                <a href="./mapaMundi.php" class="btn btn-outline-dark">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
    require_once "./footer.php";
?>