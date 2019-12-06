<?php

if (isset($_SESSION["login"]) && $_SESSION["login"] == true) { //buscamos la imagen del usuario
    if (file_exists("../base/" . $_SESSION["username"] . ".png") == true) {
        $perfil = "../base/" . $_SESSION["username"] . ".png";
    } else {
        $perfil = "../base/default.png";
    }
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

            <?php

             if (!isset($_SESSION["login"]) || $_SESSION["login"] == false) : ?>
                <li class="nav-item">
                    <a href="registro.php" class="nav-link">Registro</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contacto</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ml-auto">


       <nav class="navbar navbar-dark navbar-expand-sm">
         <?php if (isset($_SESSION["login"]) && $_SESSION["login"] == true) : ?>

                 <h6 class="text-center m-0">
                     <?= $_SESSION["username"] ?>
                 </h6>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?= $perfil ?>" alt="" width="30" height="30" class="ml-3 rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php">Home</a>
          <a class="dropdown-item" href="#">Editar perfil</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

            <?php endif;  ?>
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" />
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                Buscar
            </button>
        </form>
    </div>
</nav>
<!--Fin de barra de navegacion-->
