<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>CheckOut</title>
</head>

<body class="bg-light">

  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images\revolt-164_6wVEHfI-unsplash.jpg" alt="">
      <h2>Nike Revolt 164</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse rem similique iusto, optio voluptatum. Pariatur voluptates aut, facere voluptatem eius!</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tu Carrito</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Primer Producto</h6>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
          </div>
          <span class="text-muted">$5200</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Segundo Producto</h6>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
          </div>
          <span class="text-muted">$5200</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Código de Promoción</h6>
            <small>30OFF</small>
          </div>
          <span class="text-success">30% Descuento</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total ($)</span>
          <strong>$15600</strong>
        </li>
      </ul>

      <form action="#" class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Código de Promoción">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Aplicar</button>
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dirección de Facturación</h4>
      <form action="#" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="primerNombre">Primer Nombre</label>
            <input type="text" class="form-control" id="primerNombre" placeholder="" value="" required>
            <div class="invalid-feedback">
              Obligatorio.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="" value="" required>
            <div class="invalid-feedback">
              Obligatorio.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Nombre de Usuario</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" required>
            <div class="invalid-feedback">
              Obligatorio.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Ingresa un email correcto.
          </div>
        </div>

        <div class="mb-3">
          <label for="adress">Domicilio</label>
          <input type="text" class="form-control" id="adress" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Ingresa Dirección de Envío.
          </div>
        </div>

        <div class="mb-3">
          <label for="adress2">Domicilio2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="adress2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" name="" id="country" required>
              <option value="">Choose...</option>
              <option value="">Argentina</option>
            </select>
            <div class="invalid-feedback">
              Ingresa un país válido.
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="country">Provincia</label>
            <select class="custom-select d-block w-100" name="" id="provincia" required>
              <option value="">Choose...</option>
              <option value="">Mendoza</option>
            </select>
            <div class="invalid-feedback">
              Ingresa una provincia válida.
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip Obligatorio.
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>

</body>

</html>
<?php include_once 'footer.php'; ?>
