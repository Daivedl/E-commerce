<!doctype html>
<html lang="es">

<head>
  <!-- head comun, incluye bootstrap, fav icons etc -->
  <?php include_once("./resources/head.php"); ?>
  <!-- fin head -->

  <title>Ropa de Invierno</title>
</head>

<body class="container-fluid">

  <header>
    <?php include_once("./resources/header.php"); ?>
  </header>
  <main role="main">

    <section class="jumbotron text-center bg-primary">
      <div class="container">
        <h1 class="jumbotron-heading text-light">Ropa de invierno</h1>
        <p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, distinctio obcaecati. Ullam deserunt ea a.</p>
        <p>
          <a href="checkout.php" class="btn btn-primary my-2 bg-light text-dark">Comprar</a>
          <a href="#" class="btn btn-secondary my-2">Reviews</a>
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv3.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera dos colores</h6>
              <p>$ 2.499</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv3.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera dos colores</h6>
              <p>$ 2.499</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv3.jpg" alt="">
            </div>
            <div class="product-text text-center mb-5">
              <h6>Campera dos colores</h6>
              <p>$ 2.499</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv2.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera con capucha</h6>
              <p>$ 3.499</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv2.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera con capucha</h6>
              <p>$ 3.499</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv2.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera con capucha</h6>
              <p>$ 3.499</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv1.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera Nike</h6>
              <p>$ 3.999</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv1.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera Nike</h6>
              <p>$ 3.999</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images\inv1.jpg" alt="">
            </div>
            <div class="product-text text-center">
              <h6>Campera Nike</h6>
              <p>$ 3.999</p>
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