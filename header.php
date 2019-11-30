<?php
require_once("./libs/Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    $logo = 20;
} else {
    $logo = 40;
}
?>
<!--Barra de navegacion-->
<nav class="navbar navbar-expand-lg navbar-light bg-ligth rounded">
    <a href="index.php" class="navbar-brand">
        <img src="images/logo.svg" width="60" height="60" alt="logo" />
        Marca
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="faq.php" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="registro.php" class="nav-link">Registro</a>
            </li>
            <li class="nav-item">
                <a href="signIn.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contacto</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" />
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                Buscar
            </button>
        </form>
    </div>
</nav>
<!--Fin de barra de navegacion-->
