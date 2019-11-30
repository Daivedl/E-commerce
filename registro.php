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

    <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Nombre *</label>
                                <input id="form_name" type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Por favor ingrese su nombre.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Apellido *</label>
                                <input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido *" required="required" data-error="Por favor ingrese su apellido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Ingrese su email *" required="required" data-error="Ingrese un email válido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="form_need">Ingrese su fecha de nacimiento *</label>
                            <div class="row ml-1 mr-1">
                                <select id="form_need" name="dia" class="form-control col-md-4" required="required" data-error="Elija el dia">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                                <select id="form_need" name="mes" class="form-control col-md-4" required="required" data-error="Elija el mes">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                                <select id="form_need" name="año" class="form-control col-md-4" required="required" data-error="Elija el año">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        echo "<option value=" . $i . ">" . $i . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Registro">
                    </div>
            </div>

            </form>

        </div>

    </div>


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