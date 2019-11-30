<?php
require_once("./libs/Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
  $logo = 20;
} else {
  $logo = 40;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" />
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!--Bootstrap-->
  <!--Estilos propios-->
  <link rel="stylesheet" href="./styles/style.css" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="./styles/font_awesome/css/all.css" />
  <!-- Font awsome -->
  <title>Home</title>
</head>

<body class="container-fluid">
  <!--header -->
  <header>
    <?php include_once("header.php") ?>
  </header>
  <!-- fin header-->
  <!--Categorias-->
  <nav class="nav nav-pills nav-fill d-inline justify-content-around">
    <ul class="nav">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zapatillas</a>
        <div class="dropdown-menu">
          <a href="productGrid.php" class="dropdown-item">Deportivas</a>
          <a href="#" class="dropdown-item">De vestir</a>
          <a href="#" class="dropdown-item">Trecking</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indumentaria</a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Ropa de invierno</a>
          <a href="#" class="dropdown-item">Ropa de verano</a>
          <a href="#" class="dropdown-item">Temporada 2019</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Accesorios</a>
      </li>
    </ul>
  </nav>
  <!--Fin de categorias-->
  <!-- Descuentos-->
  <div class="container-fluid text-center  rounded mb-1 mt-1 pb-1 pt-1">
    <div class="row">
      <div class="col-sm">
        <img src="./images/camion.svg" width="<?= $logo ?>" height="<?= $logo ?>" alt="">
        Envio gratis
      </div>
      <div class="col-sm">
        <img src="./images/descuento.svg" width="<?= $logo ?>" height="<?= $logo ?>" alt="">
        Descuento universitarios
      </div>
      <div class="col-sm">
        <img src="./images/porc.svg" width="<?= $logo ?>" height="<?= $logo ?>" alt="">
        Más descuentos
      </div>
    </div>

  </div>
  <!-- Fin descuentos-->
  <!--Carrousel-->
  <div id="carrouselprincipal" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carrouselprincipal" data-slide-to="0" class="active"></li>
      <li data-target="#carrouselprincipal" data-slide-to="1"></li>
      <li data-target="#carrouselprincipal" data-slide-to="2"></li>
      <li data-target="#carrouselprincipal" data-slide-to="3"></li>
      <li data-target="#carrouselprincipal" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/amanda-jones-V1LGk9cQMts-unsplash.jpg" alt="" class="d-block w-100" />
      </div>
      <div class="carousel-item">
        <img src="images/fachry-zella-devandra-RQ9RUaWtU5Q-unsplash.jpg" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="images/joseph-barrientos-4qSb_FWhHKs-unsplash.jpg" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="images/revolt-164_6wVEHfI-unsplash.jpg" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="images/zell-3JCykI6YHRE-unsplash.jpg" class="d-block w-100" alt="" />
      </div>
    </div>
    <a href="#carrouselprincipal" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrouselprincipal" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  <!--Fin carrousel-->
  <!--Inicio Footer -->
  <?php include_once("footer.php") ?>;
  <!--Fin Footer -->
  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--Jquery-->
</body>

</html>