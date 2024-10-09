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
    <title>Utensilios.</title>
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
                    <h1 class="mt-4 text-center">Préstamo Utensilios.</h1>
                    <br>
                    <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
                    <p>

                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                                <i class="fa-solid fa-circle-plus"></i> Nuevo Prestamo.
                            </button>
                        </div>
                    </div>
                    </p>
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark">
                            <tr class="text-center  fst-normal">
                                <th>Item.</th>
                                <th>Avío.</th>
                                <th>Anaquel.</th>
                                <th>Cantidad Préstamo.</th>
                                <th>Persona que lo solicito.</th>
                                <th>Fecha Préstamo.</th>
                                <th>Acción</th>
                        <tbody>
                            <?php
                            $sql = "select * from Utensilios";
                            $resultado = $cn->query($sql);
                            $prestamos = $resultado->fetchAll(PDO::FETCH_OBJ);
                            foreach ($prestamos as $prestamo) {
                                echo "<tr>";
                                echo "<td>" . $archivo->$ItemU . "</td>";
                                echo "<td>" . $archivo->AvioU . "</td>";
                                echo "<td>" . $archivo->Anaquel . "</td>";
                                echo "<td>" . $archivo->Prestamo . "</td>";
                                echo "<td>" . $archivo->Solicitante . "</td>";
                                echo "<td>" . $archivo->Fecha . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    include('../Modal/ModalUtensilios.php');
                    ?>
                </div>
        </div>
</body>

</html>