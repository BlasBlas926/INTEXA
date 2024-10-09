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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include('../Conexion/Conexion.php');
    include("../Layout/NavbarReg.php");
    ?>
    <div class="col-xs-12 col-sm-12">
        <div class="container py-3">
            <h2 class="text-center">Registro de Zona (Anaquel).</h2>
            <br>
            <h3><?php echo 'Usuario: ' . $nombreUsuario ?></h3>
            <p>
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                        <i class="fa-solid fa-circle-plus"></i> Agregar Anaquel.
                    </button>
                </div>
            </div>
            </p>
            <p>
            </p>
            <table class="table table-bordered border-dark">
                <thead class="table-dark">
                    <tr class="text-center  fst-normal">
                        <th>Anaquel.</th>
                        <th></th>
                        <th></th>
                        </tbody>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from Anaquel";
                    $resultado = $cn->query($sql);
                    $archivos = $resultado->fetchAll(PDO::FETCH_OBJ);
                    foreach ($archivos as $archivo) {
                        echo "<tr>";
                        echo "<td>" . $archivo->Zona . "</td>";
                        echo "<td><a href='ActualizarAnaquel.php?idp=" . $archivo->Zona . "'class= 'btn btn-warning'>Actualizar</a></td>";
                        echo "<td><a href='EliminarAnaquel.php?idp=" . $archivo->Zona . "'class= 'btn btn-danger'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
            <?php
            include("../Modal/ModalAnaquel.php");
            ?>
        </div>

    </div>
    </div>
    </div>
    </div>
</body>

</html>