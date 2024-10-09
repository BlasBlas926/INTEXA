<?php
session_start();
$idEmpleado = $_SESSION['id'];
$usuario = $_SESSION['usuario'];

$id_Anaquel  = $_POST['cmbAnaquel'];
$Item = $_POST['txtItem'];
$Avio = $_POST['txtAvio'];
$Descripcion = $_POST['txtDescripcion'];
$Cantidad = $_POST['txtCantidad'];
$Stock = $_POST['txtStock'];
$Color = $_POST['txtColor'];
$directorio = $_FILES['evidencia']['tmp_name'];
$Image = file_get_contents($directorio);
$Fecha = date("Y-m-d");

include('../Conexion/Conexion.php');
$cmd = "insert into Avios" .
    "(id_Anaquel, Item, Avio, Descripcion, Cantidad, Stock, Color, Image, Fecha)" .
    "values (?,?,?,?,?,?,?,?,?)";
$sql = $cn->prepare($cmd);
$resultado = $sql->execute([
    $id_Anaquel, $Item, $Avio, $Descripcion, $Stock, $Color, $Image, $Fecha
]);

header("location: ../pages/Almacen.php");
