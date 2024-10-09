<?php
    if(!isset($_SESSION['id'])){
        header("location: ../InicioSesion/Login.php?error=401");
    }
?> 
