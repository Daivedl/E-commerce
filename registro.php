<?php
$error = [
    "password" => null,
    "email" => null
];
$encontrado = null; //variable para buscar usuarios repetidos por email
$vacio = false; //variable para buscar campos vacios
$guardado = false; //variable para saber si el registro fue exitoso
if ($_POST) {
    foreach ($_POST as $campo => $valor) { //buscamos capos vacios
        if (strlen($valor) == 0) {
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
            $base = file_get_contents("base.txt");
            $base = json_decode($base); //abrimos la base de datos para poder trabajar
            foreach ($base as $cadausuario) {
                foreach ($cadausuario as $campo => $valor) {
                    if ($campo == "email" && $valor == $_POST["email"]) { //comparamos los emails de todos los usuarios
                        $encontrado = true; // si encotramos el usuario
                    }
                }
            }
            if ($encontrado == false) { //si no se repitio un email generamos el usuario
                $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                $usuario = [
                    "nombre" => $_POST["nombre"],
                    "apellido" => $_POST["apellido"],
                    "email" => $_POST["email"],
                    "nacimiento" => $_POST["nacimiento"],
                    "password" => $pass
                ];
                $base[] = $usuario; //guardamos el usuario en la base de datos
                $guardado = true;
            }
            $base = json_encode($base);
            file_put_contents("base.txt", $base); //guardamos la base de datos
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
    <title>Registro</title>
</head>

<body class="container-fluid">
    <header>
        <?php include_once("header.php") ?>
    </header>
    <!--Inicio formulario de registro -->
    <div class="row">
        <div class="col-xl-8 offset-xl-2 py-5">
            <form id="registro" method="post" action="registro.php" role="form">
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
    <?php if ($encontrado == true) : ?>
        <div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
            Ya se ha registrado ese email en nuestro sitio!
        </div>
    <?php endif; ?>
    <?php if ($guardado == true) : ?>
        <div class="alert alert-success text-center w-50 ml-auto mr-auto" role="alert">
            Usted se ha registrado correctamente!
        </div>
    <?php endif; ?>

    <!-- Message-->
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