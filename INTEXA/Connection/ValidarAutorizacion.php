<?php
if ($_SESSION['rol'] != "Administrador") {
    header("location: ../InicioSesion/Login.php?Error=401");
}
