<?php
session_start();
$idEmpleado = $_SESSION['id'];
$usuario = $_SESSION['usuario'];

$ItemU = $_POST['textItem'];
$AvioU = $_POST['textAvio1'];
$id_Anaquel  = $_POST['cmbAnaquel2'];
$Anaquel = $POST['textAnaquel'];
$Prestamo = $_POST['textPrestamo'];
$Solicitante = $_POST['textSolicitante'];
$Fecha = date("Y-m-d");

include('../Conexion/Conexion.php');
$cmd = "insert into Utensilios" .
    "(ItemU, AvioU, id_Anaquel, Anaquel, Prestamo, Solicitante, Fecha)" .
    "values (?,?,?,?,?,?,?)";
$sql = $cn->prepare($cmd);
$resultado = $sql->execute([
    $Item, $Avio, $id_Anaquel, $Anaquel, $Prestamo, $Solicitante, $Fecha
]);

header("location: ../pages/Almacen.php");
