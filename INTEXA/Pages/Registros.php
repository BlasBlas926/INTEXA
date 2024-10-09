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
    <title>Principal Productos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php

    include('../Conexion/Conexion.php');
    include("../Layout/NavbarReg.php");
    ?>
    <div class="col-xs-12 col-sm-12">
        <br>
        <h2 class="text-center">Sección para el registro de datos en especifico.</h2>
        <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img src="../Image/Usuarios.jpg" height="280" width="419">
                <div class="card-body">
                    <h5 class="card-title">Rol.</h5>
                    <p class="card-text">Registro de usuarios para navegar en el sistema.</p>
                    <a href="../Pages/Usuarios.php" class="btn btn-success">Continuar.</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="../Image/Anaqueles.jpg" height="280" width="419">
                <div class="card-body">
                    <h5 class="card-title">Anaquel.</h5>
                    <p class="card-text">Ingresar la sección de anaqueles existentes.</p>
                    <a href="../Pages/Anaquel.php" class="btn btn-success"> Continuar.</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="../Image/Personal.jpg" height="280" width="419">
                <div class="card-body">
                    <h5 class="card-title">Usuarios.</h5>
                    <p class="card-text">Registro de personal que labora aquí.</p>
                    <a href="../Pages/Personal.php" class="btn btn-success">Continuar.</a>
                </div>
            </div>
        </div>