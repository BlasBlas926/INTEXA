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
    <title>Almacén.</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include('../Connection/conexion.php');
    include("../Layout/Navbar.php");
    ?>
    <div class="container">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">Consulta de Avíos.</h1>
                    <br>
                    <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
                    <p>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                <i class="fa-solid fa-circle-plus"></i> Nuevo Producto
                            </button>
                        </div>
                    </div>
                    </p>
                </div>
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr class="text-center  fst-normal">
                            <th>Item.</th>
                            <th>Avío.</th>
                            <th>Descripción.</th>
                            <th>Anaquel.</th>
                            <th>Cantidad.</th>
                            <th>Stock.</th>
                            <th>Color.</th>
                            <th>Imagen.</th>
                            <th>Fecha.</th>
                            <th>Acciónes:</th>
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
                <?php
                include('../Modal/ModalAlmacen.php');
                ?>
        </div>
    </div>
</body>

</html>