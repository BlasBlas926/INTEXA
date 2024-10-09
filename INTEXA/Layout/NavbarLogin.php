<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../Image/Ropa.png" width="60" height="60">
    </a>
        <span class="navbar-brand">INTEXA S.A. de C.V.</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarN" aria-controls="navbarN" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarN">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_SESSION['Id_Usuario'])) :
                    ?>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../InicioSesion/Bienvenida.php"></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
</nav>