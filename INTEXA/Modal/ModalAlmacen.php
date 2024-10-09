<?php
session_abort();
include('../Connection/ValidarAutenticacion.php');
?>
<!-- Aqui esta el modal -->
<form action="../Transacciones/AgregarProductos.php" method="post">
    <div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="nuevoModalLabel">Agregar Productos.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <div class="modal-body">
                        <div class="row">
                            <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="txtItem" class="form-label">Item</label>
                                <input type="text" name="txtItem" id="txtItem" class="form-control" required>
                            </div>
                            <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="txtAvio" class="form-label">Avío</label>
                                <input type="text" name="txtAvio" id="txtAvio" class="form-control" required>
                            </div>
                            <div class="modal-body">
                                <label for="txtDescripcion" class="form-label">Descripción</label>
                                <textarea name="txtDescripcion" id="txtDescripcion" class="form-control" rows="1" required>
                            </textarea>
                                <div class="row">
                                    <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="cmbAnaquel" class="form-label">Anaquel</label>
                                        <select name="cmbAnaquel" id="cmbAnaquel" class="form-select" required>
                                            <option value="">Selecionar una opción</option>
                                            <?php
                                            $sql = "select * from Anaquel";
                                            $result = $cn->query($sql);
                                            $cat = $result->fetchAll(PDO::FETCH_OBJ);
                                            foreach ($cat as $c) {
                                                echo "<option value='" . $c->Id . "'>" . $c->Zona . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="txtCantidad" class="form-label">Cantidad</label>
                                        <input type="number" name="txtCantidad" id="txtCantidad" class="form-control" required>
                                    </div>
                                    <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="txtStock" class="form-label">Stock</label>
                                        <input type="number" name="txtStock" id="txtStock" class="form-control" required>
                                    </div>
                                    <div class="mt-3 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <label for="txtColor" class="form-label">Color</label>
                                        <input type="text" name="txtColor" id="txtColor" class="form-control" required>
                                    </div>
                                    <p>

                                    </p>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-6">
                                                <label for="txtInicio">Fecha de Inicio:</label>
                                                <input type="date" placeholder="Ingrese fecha de inicio" class="form-control" name="inicio" id="txtInicio" />
                                            </div>
                                            <p>

                                            </p>
                                            <div class="mb-3">
                                                <label for="evidencia" class="form-label">Seleccione una imagen</label>
                                                <input class="form-control" type="file" id="evidencia" name="evidencia">
                                            </div>
                                            <div class="">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cerrar</button>
                                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                                            </div>
</form>