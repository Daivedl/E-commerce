<?php
session_start();

$_SESSION["login"] = false;
$error = [
    "password" => false,
    "email" => null,
    "username" => null
];
if ($_POST) {
    $base = file_get_contents("./base/base.txt");
    $base = json_decode($base, true); //abrimos la base de datos para poder trabajar
    $is_email = filter_var($_POST["email/username"], FILTER_VALIDATE_EMAIL); //buscamos por email o por username
    if ($is_email == true) {
        $error["email"] = true;
        foreach ($base as $cada_usuario) {
            foreach ($cada_usuario as $campo => $valor) {
                if ($campo == "email" && $valor == $_POST["email/username"]) { //encontramos el email
                    $error["email"] = false;
                    if (password_verify($_POST["password"], $cada_usuario["password_hash"])) { //verificamos la contraseña
                        $_SESSION["username"] = $cada_usuario["username"];
                        $_SESSION["login"] = true;
                    } else {
                        $error["password"] = true;
                    }
                }
            }
        }
    } else {
        $error["username"] = true;
        foreach ($base as $cada_usuario) {
            foreach ($cada_usuario as $campo => $valor) {
                if ($campo == "username" && $valor == $_POST["email/username"]) { //encontramos el username
                    $error["username"] = false;
                    if (password_verify($_POST["password"], $cada_usuario["password_hash"])) { //verificamos la contraseña
                        $_SESSION["username"] = $cada_usuario["username"];
                        $_SESSION["login"] = true;
                    } else {
                        $error["password"] = true;
                    }
                }
            }
        }
    }
}
if ($_SESSION["login"] == true) { //redirigimos al usuario al index
    header("Location: index.php");
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

<body class="container">
    <!--header -->
    <header>
        <?php include_once("./resources/header.php"); ?>
    </header>
    <!-- fin header-->
    <!-- formulario-->
    <form class="form-signin text-center w-50 mr-auto ml-auto mt-5" id="login" method="post" action="login.php">
        <h1 class="h3 mb-3 font-weight-normal mb-4">Iniciar Sesión</h1>
        <input type="text" id="input" class="form-control mb-3" placeholder="Email o username" name="email/username" required autofocus>
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
        <?php if ($error["password"] == true) : ?>
            <div class="alert alert-warning text-center ml-auto mr-auto" role="alert">
                <p>La contraseña no coincide con el email/username.</p>
            </div>
        <?php endif; ?>
        <?php if ($error["email"] == true) : ?>
            <div class="alert alert-danger text-center ml-auto mr-auto" role="alert">
            <p>Ese email no está registrado en el sitio.</p>
            </div>
        <?php endif; ?>
        <?php if ($error["username"] == true) : ?>
            <div class="alert alert-danger text-center ml-auto mr-auto" role="alert">
            <p>Error en el nombre de usuario.</p>
            </div>
        <?php endif; ?>
    </div>
    <!--menssages-->
    <!--scripts-->
    <?php include_once("./resources/scripts.php"); ?>
    <!-- fin scripts-->
</body>

</html>
