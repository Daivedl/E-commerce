<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="styles\checkoutStyles.css" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="./styles/font_awesome/css/all.css" />

  <title>Checkout</title>

</head>

<body class="bg-light container-fluid">

  <?php include_once('header.php'); ?>

  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="#" alt="" width="72" height="72">
      <h2>Formulario de pago</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae in, ex at reiciendis dolor fugit sint molestiae, sunt eveniet, obcaecati tempora. Est, dolore cumque consequuntur enim amet laudantium voluptate explicabo.</p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Carro de Compras</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Nombre del Producto</h6>
              <small class="text-muted">Descripción</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Segundo Producto</h6>
              <small class="text-muted">Descripción</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Tercer Producto</h6>
              <small class="text-muted">Descripción</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">CÓDIGO DE DESCUENTO</h6>
              <small>05OFF</small>
            </div>
            <span class="text-success">-$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Aplicar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Dirección de Envio</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Primer Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se requiere un nombre válido.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Apellido</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se requiere un apellido válido.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Nombre de Usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback" style="width: 100%;">
                Tu nombre de usuario es obligatorio.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Opcional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Ingrese una dirección de correo electrónico válida para las actualizaciones de envío.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Por favor introduzca su direccion de envio.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Dirección 2<span class="text-muted">(Opcional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">País</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>Argentina</option>
              </select>
              <div class="invalid-feedback">
                Por favor seleccione un país válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Estado</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>Mendoza</option>
              </select>
              <div class="invalid-feedback">
                Proporcione un estado válido.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Código Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere código postal.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">
              La dirección de envío es la misma que mi dirección de facturación</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">
              Guarda esta información para la próxima vez</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Pago</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">
                Tarjeta de crédito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">
                Tarjeta de débito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nombre en la Tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">
                Nombre completo como se muestra en la tarjeta</small>
              <div class="invalid-feedback">

                Se requiere el nombre como se encuentra en la tarjeta
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Número de Tarjeta de Crédito</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere número de tarjeta de crédito
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">
                Vencimiento</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Fecha de vencimiento requerida
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Código de seguridad requerido
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar con la comprobación</button>
        </form>
      </div>
    </div>
  </div>

  <?php include_once("footer.php") ?>;

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>