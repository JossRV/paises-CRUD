<?php 
    require_once "./app/conexion.php";
    require_once "./model/buscadorPaises.php";
    require_once "./header.php";

    $c = new Conexion();
    $conectado = $c -> conectar();
    $m = new metodosLista();

    $idPais = $_GET['idPais'];
    $respuesta = mysqli_query($conectado,"SELECT * FROM v_continente_pais WHERE idPais = '$idPais'");
    $verPaises = mysqli_fetch_row($respuesta);
    $mostrarLista = $m -> mostrar("SELECT * FROM t_continente");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiza Paises</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h1 class="display-4 text-center mb-3">Actualiza el pais</h1>
                <form action="./model/actualizarPais.php" method="post">
                    <input type="text" name="idPais" hidden value="<?=$idPais?>">
                    <label for="" class="form-label">Selecciona el continente</label>
                    <select name="listaContinentes" id="listaPaises" class="form-select mb-3">
                        <?php foreach($mostrarLista as $key): ?>
                        <option value="<?=$key['id_continente']?>"><?=$key['nombre']?></option>
                        <?php endforeach ?>
                    </select>
                    <label for="" class="form-label">Pais</label>
                    <input type="text" name="pais" class="form-control" value="<?=$verPaises['4']?>">
                    <label for="" class="form-label  mt-3">Link de bandera</label>
                    <input type="text" name="bandera" class="form-control" value="<?=$verPaises['5']?>">
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-dark container-fluid mt-3">Actualizar informacion</button>
                        </div>
                        <div class="col">
                            <a href="./todosPaises.php" type="button" class="btn btn-outline-dark container-fluid mt-3">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>