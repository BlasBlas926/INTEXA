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
    <title>Oficina.</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include('../Connection/Conexion.php');
    include("../Layout/Navbar.php");

    ?>
    <div class="container">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">Artículos Oficina.</h1>
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
                                <th>Código</th>
                                <th>Producto</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Stock</th>
                                <th>Imagen</th>
                                <th>Acción</th>
                            </tr>

                            <div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="nuevoModalLabel">Insertar Productos.</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../Transacciones/AgregarProductos.php" method="post" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="txtAvio" class="form-label">Item</label>
                                                    <input type="text" name="txtAvio" id="txtAvio" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="txtAvio" class="form-label">Producto.</label>
                                                    <input type="text" name="txtAvio" id="txtAvio" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="txtDescripcion" class="form-label">Descripción</label>
                                                    <textarea name="txtDescripcion" id="txtDescripcion" class="form-control" rows="3" required>
                            </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="txtCantidad" class="form-label">Cantidad</label>
                                                    <input type="number" name="txtCantidad" id="txtCantidad" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="txtStock" class="form-label">Stock</label>
                                                    <input type="number" name="txtStock" id="txtStock" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="poster" class="form-label">Imagen</label>
                                                    <input type="file" name="Imagen" id="Imagen" class="form-control" accept="image/jpeg">
                                                </div>
                                                <div class="">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cerrar
                                                    </button>
                                                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </tbody>
                        </thead>