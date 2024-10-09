<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    include("../Layout/NavbarLogin.php");
    ?>
    <form action="../Connection/ValidarSesion.php" method="post">
        <br>
        <div class="container">
            <div class="row mt-5 mx-auto border rounded-3 w-75 shadow-sm border-dark">
                <div class="col-0 col-lg-6 rounded-start" style="background-image:
                 url('https://static.vecteezy.com/system/resources/previews/002/548/529/original/sewing-machine-foot-free-photo.jpg'); 
                 background-repeat: no-repeat; background-size: cover; background-position: center; background-position-y: center; align-items: center; justify-content: center; display: flex;">
                </div>
                <div class="col-12 col-lg-6 text-center px-4 py-4 rounded-end">
                    <h3 class="mt-3 mb-5">Inicio de Sesión</h3>
                    <div class="mx-auto col-12 col-md-8">
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Usuario:</label>
                            <input type="text" name='usuario' placeholder="Ingrese su usuario" class="form-control form-control-lg" required />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Contraseña:</label>
                            <input type="password" name='password' placeholder="Ingrese su password" class="form-control form-control-lg" required />
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-dark"><i class="fa-sharp fa-solid fa-right-to-bracket"></i>Iniciar Sesión.
                        </button>
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 400)
                                echo '<h3 class="text-danger text-center"><i class="fa fa-exclamation-triangle"></i>Datos incorrectos</h3>';
                            if ($_GET['error'] == 401)
                                echo '<h3 class="text-danger text-center"><i class="fa fa-exclamation-triangle"></i> Es necesario iniciar sesión</h3>';
                        }
                        ?>
                        <!-- <div class="d-grid gap-3 mt-5"> -->
                        </div>
                    </div>
                </div>
            </div>
    </form>

</body>

</html>