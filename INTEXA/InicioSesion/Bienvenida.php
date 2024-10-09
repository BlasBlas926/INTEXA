<?php
session_start();
$nombreUsuario = $_SESSION['nombre'];
include('../Connection/ValidarAutenticacion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Productos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php

    include('../Connection/Conexion.php');
    include("../Layout/Navbar.php");
    ?>
    <div class="container">
        <div class="col-xs-12 col-sm-12">
            <br>
            <h2 class="text-center">TE DAMOS LA BIENVENDA!.</h2>
            <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card border-dark">
                    <img class="card-img-top" src="../Image/Almacen.jpg" height="230">
                    <div class="card-body">
                        <h5 class="card-title">Almacén.</h5>
                        <p class="card-text">Ingresar y editar la entrada y salida de avíos.</p>
                        <a href="../Pages/Almacen.php" class="btn btn-success">Continuar.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <img class="card-img-top" src="../Image/Utensilios.jpg" height="230">
                    <div class="card-body">
                        <h5 class="card-title">Utensilios.</h5>
                        <p class="card-text">Ingresar y editar la entrada y salida de avíos.</p>
                        <a href="../Pages/Utensilios.php" class="btn btn-success"> Continuar.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <img class="card-img-top" src="../Image/Oficina.jpg" height="230">
                    <div class="card-body">
                        <h5 class="card-title">Articulos de Oficina</h5>
                        <p class="card-text">Entrada y salida de Artículos de Oficina.</p>
                        <a href="../Pages/Oficina.php" class="btn btn-success">Continuar.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <img class="card-img-top" src="../Image/Registro.jpg" height="230">
                    <div class="card-body">
                        <h5 class="card-title">Registros.</h5>
                        <p class="card-text">Dar de alta datos que serán solicitados.</p>
                        <a href="../Pages/Registros.php" class="btn btn-success"> Continuar.</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
    </div>
</body>

</html>