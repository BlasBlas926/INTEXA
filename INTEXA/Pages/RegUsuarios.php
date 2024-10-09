<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<div class="col-xs-12 col-sm-12">
    <br>
    <h2 class="text-center">Llenar los campos necesarios para el registro de usuarios.</h2>
</div>

<!-- <body style="background-color: #E7FCFF"> -->

<form action="../Transacciones/agregarOrdenes.php" method="post">
    <div class="container mt-3">
        <div class="row">
            <div class="mt-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label for="Nombre" class="form-label">Nombre(s):</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label for="Apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="Apellidos" id="Apellidos" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label for="Direccion" class="form-label">Dirección:</label>
                <input type="text" name="Direccion" id="Direccion" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <label for="Edad" class="form-label">Edad:</label>
                <input type="number" name="Edad" id="Edad" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <label for="Usuario" class="form-label">Usuario:</label>
                <input type="text" name="Usuario" id="Usuario" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <label for="Email" class="form-label">E-mail:</label>
                <input type="text" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <label for="Telefono" class="form-label">Telefono:</label>
                <input type="number" name="Telefono" id="Telefono" class="form-control" required>
            </div>
            <div class="mt-3 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <label for="Pwd" class="form-label">Contraseña:</label>
                <input type="text" name="Pwd" id="Pwd" class="form-control" required>
            </div>
            <p>
                
            </p>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-success" value="Registrar." />

                </div>
            </div>
        </div>
</form>
</body>

</html>