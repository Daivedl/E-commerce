<?php
require_once("./libs/Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
    $width0 = 75;
    $width1 = 100;
} else {
    $width0 = 25;
    $width1 = 50;
}
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
    <!-- head comun, incluye bootstrap, fav icons etc -->
    <?php include_once("./resources/head.php"); ?>
    <!-- fin head -->
    <title>Login</title>
</head>

<body class="container-fluid">
    <!--header -->
    <header>
        <?php include_once("./resources/header.php"); ?>
    </header>
    <!-- fin header-->
    <!-- formulario-->
    <form class="form-signin text-center w-<?= $width0 ?> mr-auto ml-auto mt-5" id="login" method="post" action="login.php">
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
    <div class="mt-4 w-<?= $width1 ?> mr-auto ml-auto">
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
    <!--scripts-->
    <?php include_once("./resources/scripts.php"); ?>
    <!-- fin scripts-->
</body>

</html>