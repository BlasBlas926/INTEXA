<?php
session_start();
 $idEmpleado = $_SESSION['id'];
 $usuario = $_SESSION['usuario'];

$Nombre = $_POST['Nombre']; 
$Apellidos = $_POST['Apellidos'];
$Direccion = $_POST['Direccion'];
$Edad  = $_POST['Edad'];
$Usuario = $_POST['Usuario'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Pwd = $_POST['Pwd'];


include('../Conexion/Conexion.php');
$cmd = "insert into Usuario".
"(Nombre, Apellidos, Direccion, Edad, Usuario, Email, Telefono, Pwd)".
"values (?,?,?,?,?,?,?,?)";
$sql = $cn->prepare($cmd);
$resultado = $sql->execute([
    $Nombre, $Apellidos, $Direccion, $Edad, $Usuario, $Email, $Telefono, $Pwd
]);

header("location: ../pages/Usuarios.php");