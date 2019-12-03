<?php
require_once("./libs/Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
  $logo = 20;
} else {
  $logo = 35;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- head comun, incluye bootstrap, fav icons etc -->
  <?php include_once("./resources/head.php"); ?>
  <!-- fin head -->

  <title>Sneakers</title>
</head>

<body class="container-fluid">

  <header>
    <?php include_once("./resources/header.php"); ?>
  </header>
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
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Sneakers</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, distinctio obcaecati. Ullam deserunt ea a.</p>
        <p>
          <a href="checkout.php" class="btn btn-primary my-2">Comprar</a>
          <a href="#" class="btn btn-secondary my-2">Reviews</a>
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center mb-5">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>AIR FORCE 1 SAGE LOW</h6>
              <p>$ 7.199</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!--Inicio Footer -->
  <?php include_once("./resources/footer.php"); ?>
  <!--Fin Footer -->
  <!--scripts-->
  <?php include_once("./resources/scripts.php"); ?>
  <!-- fin scripts-->
</body>

</html>