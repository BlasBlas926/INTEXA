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
                            <a class="nav-link active" aria-current="page" href="../Pages/Registros.php">Registros.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Usuarios.php">Usuarios.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Anaquel.php">Anaquel.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Pages/Personal.php">Personal.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../InicioSesion/Bienvenida.php">Página Principal.</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
</nav>