<?php
session_start();
$nombreUsuario = $_SESSION['nombre'];
include('../Conexion/ValidarAutenticacion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros.</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include('../Conexion/conexion.php');
    include("../Layout/NavbarReg.php");

    ?>
    <div class="col-xs-12 col-sm-12">
        <div class="container py-3">
            <h2 class="text-center">Registro de Usuarios.</h2>
            <br>
            <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
            <p>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                        <i class="fa-solid fa-circle-plus"></i> Nuevo Registro.
                    </button> -->

                    <a href="../Pages/RegPersonal.php" class="btn btn-primary"> <i class="fa-solid fa-circle-plus"></i> Nuevo Registro.</a>

                </div>
            </div>
            </p>
            <p>
            </p>
            <table class="table table-bordered border-dark">
                <thead class="table-dark">
                    <tr class="text-center  fst-normal">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Anaquel</th>
                        <th>Edad</th>
                        <th>Usuario</th>
                        <th>E-mail</th>
                        <th>Telefono</th>
                    </tbody>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from Avios";
                    $resultado = $cn->query($sql);
                    $archivos = $resultado->fetchAll(PDO::FETCH_OBJ);
                    foreach ($archivos as $archivo) {
                        echo "<tr>";
                        echo "<td>" . $archivo->Item . "</td>";
                        echo "<td>" . $archivo->Avio . "</td>";
                        echo "<td>" . $archivo->Descripcion . "</td>";
                        echo "<td>" . $archivo->Anaquel . "</td>";
                        echo "<td>" . $archivo->Cantidad . "</td>";
                        echo "<td>" . $archivo->Stock . "</td>";
                        echo "<td>" . $archivo->Color . "</td>";
                        echo "<td>" . $archivo->Image . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
