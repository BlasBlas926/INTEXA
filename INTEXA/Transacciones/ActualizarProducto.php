<?php
session_start();
$Item = $_POST['txtItem'];
$Avio = $_POST['txtAvio'];
$Descripcion = $_POST['txtDescripcion'];
$Anaquel  = $_POST['txtAnaquel'];
$Cantidad = $_POST['txtCantidad'];
$Stock = $_POST['txtStock'];
//$Image = $_POST['txtImage'];
$Usuario = $_POST['txtUsuario'];
    include ("conexion.php");
    $stockAnterior = $_SESSION['stockAnteriror'];

    if($stockAnterior == $stock){
        $cmd = "update Productos set Nombre=?, Descripcion=?,
                Stock=?, Precio=?, Id_Categoria=?  
                where Id=?;";
        $sql = $cn->prepare($cmd);
        $resultado = $sql->execute([$nombre,$desc,$stock,$precio,$idcategoria,$id]);
    }
    else{
        if($stockAnterior < $stock){
            $cantidad = $stock - $stockAnterior;
            $accion = 'Aumentó';
        }
        if($stockAnterior > $stock){
            $cantidad = $stockAnterior - $stock;
            $accion = 'Disminuyó';
        }

        $cmd = "update Productos set Nombre=?, Descripcion=?,
            Stock=?, Precio=?, Id_Categoria=?  
            where Id=?;
            
            INSERT INTO Cambios (Id_Usuario, Id_Rol, Id_Producto, Cantidad, Accion)
            VALUES (?, ?, ?, ?, ?);";
        $sql = $cn->prepare($cmd);
        $resultado = $sql->execute([$nombre,$desc,$stock,$precio,$idcategoria,$id, $_SESSION['Id'], $_SESSION['Id_Rol'], $id, $cantidad, $accion]);
    }
    header("location: ../Pages/Productos.php");
?>
