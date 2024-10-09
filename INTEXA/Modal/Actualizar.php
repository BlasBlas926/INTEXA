<?php
session_start();
$nombreUsuario = $_SESSION['nombre'];
include("../Conexion/conexion.php");
include("../Conexion/ValidarAutenticacion.php");
include("../Conexion/ValidarAutorizacion.php");
$idp = $_GET['idp'];
$cmd = "select * from Productos where Id =".$idp;
$resultado = $cn->query($cmd);
$producto = $resultado->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    include("../Layout/Navbar.php");
    ?>
    <br>
    <h3><?php echo 'Usuario: '.$nombreUsuario ?></h3>
    <form action="../Transacciones/ActualizarProducto.php"
          method="post">
        <div class="container mt-3">
            <div class="row">
                <input type="hidden" name="id"
                        value="<?php echo $producto->Id; ?>" />
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="txtNombre">Nombre del Avio</label>
                    <input type="text" value="<?php echo $producto->Nombre; ?>" id="txtNombre" name="txtNombre" class="form-control">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="txtDescripcion">Descripción Avio</label>
                    <input type="text" value="<?php echo $producto->Descripcion; ?>" id="txtDescripcion" name="txtDescripcion" class="form-control">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="cmbZona">Zona</label>
                    <select name="cmbZona" id="cmbZona" class="form-select">
                    <div class="row mb-3">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtStock">Stock</label>
                    <input value="<?php echo $producto->Stock; ?>" type="number" id="txtStock" name="txtStock" class="form-control">
                    <?php $_SESSION['stockAnteriror'] = $producto->Stock; ?>
                </div>
                        <?php
                            $sql = "select * from Categorias";
                            $result = $cn->query($sql);
                            $cat = $result->fetchAll(PDO::FETCH_OBJ);
                            foreach($cat as $c){
                                if($producto->Id_Categoria == $c->Id){
                                    echo "<option selected value='".$c->Id."'>".$c->Categoria."</option>";
                                }
                                else{
                                    echo "<option value='".$c->Id."'>".$c->Categoria."</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-warning" value="Actualizar Producto" />
                    <a href="Productos.php" class="btn btn-dark">
                        Regresar a Productos
                    </a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>