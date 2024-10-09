<?php
session_abort();
include('../Conexion/ValidarAutenticacion.php');
?>
<!-- Aqui esta el modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="nuevoModalLabel">Agregar zona del Anaquel.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../Transacciones/AgregarAnaquel.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="txtAnaquel" class="form-label">Zona</label>
                            <input type="text" name="txtAnaquel" id="txtAnaquel" class="form-control" required>
                        </div>

                        <p>

                        </p>
                        <div class="">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cerrar
                            </button>
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>

                </form>