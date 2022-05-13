<?php 
    require_once "./header.php";
    require_once "./app/conexion.php";
    require_once "./model/buscadorPaises.php";

    $mostrarLista = metodosLista :: mostrar("SELECT * FROM t_continente");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista buscador</title>
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
                <li>
                    <a href="#">
                        <span class="icono"><i class="fa-duotone fa-earth-americas"></i></span>
                        <span class="texto">Mapa</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="icono"><i class="fa-duotone fa-arrow-right-from-bracket"></i></span>
                        <span class="texto">Iniciar Session</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    <div class="container box">
        <div class="row continente">
            <!-- <div class="col"></div> -->
            <div class="col buscador">
                <h6 class="display-4 text-center">Buscador</h6>
                <form action="./paises.php" method="post">
                    <select name="listaContinentes" id="listaPaises" class="form-select">
                        <?php foreach($mostrarLista as $key): ?>
                        <option value="<?=$key['id_continente']?>"><?=$key['nombre']?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="boton">
                        <button type="submit" class="btn_ir">Ir</button>
                        <button type="button" class="btn_nuevo" data-bs-toggle="modal" data-bs-target="#agregar">Nuevo pais</button>
                    </div>
                </form>
            </div>
            <!-- <div class="col"></div> -->
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="agregar">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Agregar nuevo pais</div>
                </div>
                <form action="./model/agregarPais.php" method="post">
                    <div class="modal-body">
                        <select name="listaContinentes" id="listaPaises" class="form-select mb-3">
                            <?php foreach($mostrarLista as $key): ?>
                            <option value="<?=$key['id_continente']?>"><?=$key['nombre']?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="form-floating">
                            <input type="text" name="pais" class="form-control mb-3" placeholder="paises">
                            <label for="">Pais</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="bandera" class="form-control mb-3" placeholder="banderas">
                            <label for="">Url de bandera</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-outline-dark">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    require_once "./footer.php";
?>
</body>
</html>
<!-- <script>
    swal({
        title : 'Repetidos',
        text : 'Ya hay un pais en esta lista',
        icon : 'success',
        button : 'Aceptar',
        timer : '2000'
    });
</script> -->