<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">INTEXA S.A. de C.V.</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_SESSION['Id_Usuario'])) :
                    ?>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../InicioSesion/Bienvenida.php">Página Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Almacen.php">Almacén.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Utensilios.php">Utensilios.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Oficina.php">Art. Oficina.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Connection/CerrarSesion.php">Cerrar Sesión</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
</nav>