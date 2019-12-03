<?php
$error = [
    "password" => null,
    "email" => null,
    "img_perfil" => null
];
$encontrado = [ //variable para buscar usuarios repetidos por email o por usuario
    "email" => null,
    "username" => null
];
$vacio = false; //variable para buscar campos vacios
$guardado = false; //variable para saber si el registro fue exitoso
if ($_FILES) {
    if ($_FILES["img_pefil"]["error"] != 0) { //buscamos errores en la subida de la imagen de perfil
        $error["img_perfil"] = true;
    } else {
        $ext = pathinfo($_FILES["img_perfil"]["name"], PATHINFO_EXTENSION);
        if ($ext != "jpeg" || $ext != "jpg" || "png") {
            $error["img_perfil"] = true;
        }
    }
}
if ($_POST) {
    foreach ($_POST as $campo => $valor) { //quitamos los espacios blancos, menos en las contraseñas
        if ($campo != "pass" && $campo != "confirm_pass" && $campo != "img_perfil") {
            $_POST[$campo] = trim($valor);
        }
    }
    foreach ($_POST as $campo => $valor) { //buscamos capos vacios
        if (strlen($valor) == 0 && $campo != "img_perfil") { //excluimos la img de perfil ya que es opcional
            $vacio = true;
        }
    }
    if ($vacio == false) { //si no hay campos vacios comprobamos cada campo, buscando errores
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $error["email"] = true; //si no es un email valido hay un error
        }
        if ($_POST["pass"] != $_POST["confirm_pass"]) {
            $error["password"] = true; //si no coinciden las contraseñas hay un error
        }
        // contamos la cantidad de errores
        $contador_de_errores = 0;
        foreach ($error as $campo => $valor) {
            if ($valor == true) {
                $contador_de_errores++;
            }
        }
        // si no hubo errores buscamos usuarios repetidos por email
        if ($contador_de_errores == 0) {
            $base = file_get_contents("./resources/base.txt");
            $base = json_decode($base, true); //abrimos la base de datos para poder trabajar
            foreach ($base as $cada_usuario) {
                foreach ($cada_usuario as $campo => $valor) {
                    if ($campo == "email" && $valor == $_POST["email"]) { //comparamos los emails de todos los usuarios
                        $encontrado["email"] = true; // si encotramos el usuario
                    }
                }
            }
            foreach ($base as $cada_usuario) {
                foreach ($cada_usuario as $campo => $valor) {
                    if ($campo == "username" && $valor == $_POST["username"]) { //comparamos los username de todos los usuarios
                        $encontrado["username"] = true; // si encotramos el usuario
                    }
                }
            }
            if ($encontrado["email"] == false && $encontrado["username"] == false) { //si no se repitio un email o un username generamos el usuario
                $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                $usuario = [
                    "nombre" => $_POST["nombre"],
                    "apellido" => $_POST["apellido"],
                    "email" => $_POST["email"],
                    "username" => $_POST["username"],
                    "nacimiento" => $_POST["nacimiento"],
                    "password_hash" => $pass
                ];
                if ($_FILES) {
                    if ($error["img_perfil"] != true) { //subimos la foto 
                        move_uploaded_file($_FILES["img_perfil"]["tmp_name"], "./resources/" . $_POST["username"] . $ext);
                    }
                }
                $base[] = $usuario; //guardamos el usuario en la base de datos
                $guardado = true;
            }
            $base = json_encode($base);
            file_put_contents("./resources/base.txt", $base); //guardamos la base de datos
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
    <title>Registro</title>
</head>

<body class="container-fluid">
    <header>
        <?php include_once("./resources/header.php"); ?>
    </header>
    <!--Inicio formulario de registro -->
    <div class="row">
        <div class="col-xl-8 offset-xl-2 py-5">
            <form id="registro" method="post" action="registro.php" role="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_nombre">Nombre </label>
                            <input id="campo_nombre" type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre " required="required" <?php if ($_POST) : ?> value=" <?= $_POST["nombre"] ?>" <?php endif; ?>>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_apellido">Apellido </label>
                            <input id="campo_apellido" type="text" name="apellido" placeholder="Ingrese su apellido" class="form-control" required="required" <?php if ($_POST) : ?> value=" <?= $_POST["apellido"] ?>" <?php endif; ?>>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_username">Nickname </label>
                            <input id="campo_username" type="text" minlength="4" name="username" class="form-control" placeholder="Ingrese un nombre de usuario" required="required" data-error="Ingrese un nombre de usuario valido" <?php if ($_POST) : ?> value=" <?= $_POST["username"] ?>" <?php endif; ?>>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="img_perfil">Elija una foto de Perfil, formatos aceptados: jpg, jpeg, png (opcional) </label>
                            <input type="file" name="img_perfil" id="img_pefil" class="form-control-file">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_email">Email </label>
                            <input id="campo_email" type="email" name="email" class="form-control" placeholder="Ingrese su email " required="required" data-error="Ingrese un email válido." <?php if ($_POST) : ?> value=" <?= $_POST["email"] ?>" <?php endif; ?>>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="campo_fecha">Ingrese su fecha de nacimiento </label>
                        <div class="row ml-1 mr-1">
                            <input type="date" id="campo_fecha" class="form-control" name="nacimiento" min="1900-01-01" max="2019-12-31" <?php if ($_POST) : ?> value="<?= $_POST["nacimiento"] ?>" <?php endif; ?>>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_contraseña">Contraseña </label>
                            <input id="campo_contraseña" type="password" name="pass" class="form-control" placeholder="Minimo 8 caracteres" required="required" data-error="Por favor ingrese una contraseña valida" minlength="8">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="campo_confirm">Confirme su contraseña </label>
                            <input id="campo_confirm" type="password" name="confirm_pass" class="form-control" placeholder="Confirmación" required="required" data-error="Por favor ingrese una contraseña valida" minlength="8">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <input type="submit" class="btn btn-success btn-send w-50" value="Registro">
                </div>
            </form>
        </div>
    </div>
    <!--Fin formulario de registro -->
    <!-- Message-->
    <?php if ($vacio == true) : ?>
        <div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
            Complete todos los campos requeridos!
        </div>
    <?php endif; ?>
    <?php if ($error["password"] == true) : ?>
        <div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
            Las contraseñas no coinciden.
        </div>
    <?php endif; ?>
    <?php if ($error["email"] == true) : ?>
        <div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
            Ingrese un email valido.
        </div>
    <?php endif; ?>
    <?php if ($error["img_perfil"] == true) : ?>
        <div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
            Error en la imagen, formato incopatible o error en la subida.
        </div>
    <?php endif; ?>
    <?php if ($encontrado["email"] == true) : ?>
        <div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
            Ya se ha registrado ese email en nuestro sitio!
        </div>
    <?php endif; ?>
    <?php if ($encontrado["username"] == true) : ?>
        <div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
            El username <?= $_POST["username"] ?> ya está en uso, elija otro.
        </div>
    <?php endif; ?>
    <?php if ($guardado == true) : ?>
        <div class="alert alert-success text-center w-50 ml-auto mr-auto" role="alert">
            Usted se ha registrado correctamente!
        </div>
    <?php endif; ?>

    <!-- Message-->
    <!--Inicio Footer -->
    <?php include_once("./resources/footer.php"); ?>
    <!--Fin Footer -->
    <!--scripts-->
    <?php include_once("./resources/scripts.php"); ?>
    <!-- fin scripts-->
</body>

</html>