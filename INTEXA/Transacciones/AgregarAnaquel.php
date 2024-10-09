<?php
session_start();
 $idEmpleado = $_SESSION['id'];
 $usuario = $_SESSION['usuario'];

$Zona = $_POST['txtAnaquel']; 

include('../Conexion/Conexion.php');
$cmd = "insert into Anaquel".
"(Zona)".
"values (?)";
$sql = $cn->prepare($cmd);
$resultado = $sql->execute([
    $Zona
]);

header("location: ../pages/Anaquel.php");