<?php 
    session_start();
    $nombreUsuario = $_SESSION['nombre'];
    include ('../Transacciones/ValidarAutenticacion.php');
    include("../Transacciones/ValidarAutorizacion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Productos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
        include('../Transacciones/conexion.php');
        include("../Layout/Navbar.php");
    ?>
    <br>
    <h3><?php echo 'Usuario: '.$nombreUsuario ?></h3>
    <div class="container">        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Tipos</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT C.Id, U.Nombre, R.Rol, P.Nombre AS Producto, C.Cantidad, C.Accion
                        FROM Cambios AS C
                        INNER JOIN Usuarios AS U ON C.Id_Usuario = U.Id
                        INNER JOIN Roles AS R ON C.Id_Rol = R.Id
                        INNER JOIN Productos AS P ON C.Id_Producto = P.Id order by C.Id";
                $resultado = $cn->query($sql);
                $productos = $resultado->fetchAll(PDO::FETCH_OBJ);
                foreach ($productos as $producto) {
                    echo "<tr>";
                    echo "<td>".$producto->Nombre."</td>";
                    echo "<td>".$producto->Rol."</td>";
                    echo "<td>".$producto->Producto."</td>";
                    echo "<td>".$producto->Cantidad."</td>";    
                    echo "<td>".$producto->Accion."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>