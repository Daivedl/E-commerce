<?php
$login = false;
$nombre = null;
$error = [
    "password" => false,
    "email" => null
];
if ($_POST) {
    $error["email"] = true;
    $base = file_get_contents("base.txt");
    $base = json_decode($base, true); //abrimos la base de datos para poder trabajar
    foreach ($base as $cada_usuario) {
        foreach ($cada_usuario as $campo => $valor) {
            if ($campo == "email" && $valor == $_POST["email"]) { //encontramos el email
                $error["email"] = false;
                if (password_verify($_POST["password"], $cada_usuario["password_hash"])) { //verificamos la contraseña
                    $nombre = $cada_usuario["nombre"] . " " . $cada_usuario["apellido"];
                    $login = true;
                } else {
                    $error["password"] = true;
                }
            }
        }
    }
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
    <title>Login</title>
</head>

<body class="container-fluid">
    <!--header -->
    <header>
        <?php include_once("header.php") ?>
    </header>
    <!-- fin header-->
    <!-- formulario-->
    <form class="form-signin text-center w-25 mr-auto ml-auto mt-5" id="login" method="post" action="login.php">
        <img class="mb-4" src="" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal mb-4">Iniciar Sesión</h1>
        <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email" name="email" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" required>
        <div class="checkbox mt-3 mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordar
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
    </form>
    <!--fin formulario-->
    <!--menssages-->
    <div class="mt-4 w-50 mr-auto ml-auto">
        <?php if ($login == true) : ?>
            <div class="alert alert-success text-center w-50 ml-auto mr-auto" role="alert">
                Bienvenido <?= $nombre ?>
            </div>
        <?php endif; ?>
        <?php if ($error["password"] == true) : ?>
            <div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
                Esa contraseña no coincide con el email.
            </div>
        <?php endif; ?>
        <?php if ($error["email"] == true) : ?>
            <div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
                Ese email no esta registrado en el sitio.
            </div>
        <?php endif; ?>
    </div>
    <!--menssages-->
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Jquery-->
</body>

</html>