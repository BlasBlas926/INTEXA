<?
session_start();
$Id = $_SESSION['Id'];
$Rol = $_POST['txtRol'];

include("../Conexion/Conexion.php");
$cmd = "insert into Rol".
"(Rol)".
"values (?)";
$sql = $cn->prepare($cmd);
$resultado = $sql->execute([
    $Rol
]);
header("location../Pages/Usuarios.php");   