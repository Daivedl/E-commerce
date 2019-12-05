<?php
session_start();
require_once("./libs/Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
  $logo = 20;
} else {
  $logo = 35;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- head comun, incluye bootstrap, fav icons etc -->
  <?php include_once("./resources/head.php"); ?>
  <!-- fin head -->
  <title>Home</title>
</head>

<body class="container-fluid">
<!--Avisos-->
<div id="carouselExampleSlidesOnly" class="carousel slide bg-secondary" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img class="d-inline mx-auto" src="images/camion.svg" alt="First slide" width="25" height="30">
      <p class="text-center d-inline text-light">Envío gratis</p>
    </div>
    <div class="carousel-item text-center">
      <img class="d-inline mx-auto" src="images/porc.svg" alt="Second slide" width="15" height="30">
      <p class="text-center d-inline text-light">Descuentos universitarios</p>
    </div>
    <div class="carousel-item text-center">
      <img class="d-inline mx-auto" src="images/descuento.svg" alt="Third slide" width="20" height="30">
      <p class="text-center d-inline text-light">¡Y muchos beneficios más!</p>
    </div>
  </div>
</div>
  <!--header -->
  <header>
    <?php include_once("./resources/header.php"); ?>
  </header>
  <!-- fin header-->
  <!--Categorias-->
  <nav class="nav nav-pills nav-fill d-inline justify-content-around">
    <ul class="nav">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zapatillas</a>
        <div class="dropdown-menu">
          <a href="productGrid.php" class="dropdown-item">Deportivas</a>
          <a href="productVestir.php" class="dropdown-item">De vestir</a>
          <a href="productTrekking.php" class="dropdown-item">Trekking</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indumentaria</a>
        <div class="dropdown-menu">
          <a href="productInvierno.php" class="dropdown-item">Ropa de invierno</a>
          <a href="productVerano.php" class="dropdown-item">Ropa de verano</a>
          <a href="productTemporada2019.php" class="dropdown-item">Temporada 2019</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="ropa-accesorios.php" class="nav-link">Accesorios</a>
      </li>
    </ul>
  </nav>
  <!--Fin de categorias-->
  <!-- Descuentos-->
  <!--<div class="container-fluid text-center  rounded mb-1 mt-1 pb-1 pt-1 text-light bg-secondary">
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
        Y muchos mas beneficios!
      </div>
    </div>

  </div>
  -->
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
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg">
            <img class="card-img-top rounded-circle border-0 shadow-lg" src="images\rev-index1.jpg" alt="">
          </div>
          <div class="product-text text-center">
            <h6><b>ZAPATILLAS DEPORTIVAS</b>
              <h6>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg">
            <img class="card-img-top rounded-circle border-0 shadow-lg" src="images\rev-index2.jpg" alt="">
          </div>
          <div class="product-text text-center">
            <h6><b>ZAPATILLAS DE VESTIR</b>
              <h6>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow rounded-circle border-light border-0 shadow-lg">
            <img class="card-img-top rounded-circle border-0 shadow-lg" src="images\Adidas-Ultra-Boost-ST.jpg" alt="">
          </div>
          <div class="product-text text-center">
            <h6><b>TEMPORADA 2020</b>
              <h6>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!--Fin carrousel-->
  <!--Inicio Footer -->
  <?php include_once("./resources/footer.php"); ?>
  <!--Fin Footer -->
  <!--scripts-->
  <?php include_once("./resources/scripts.php"); ?>
  <!-- fin scripts-->

</body>

</html>
