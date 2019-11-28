<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles/map.css">

    </head>
    <body>
    <?php
    include_once('header.php');
    ?>
        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Nombre *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Por favor ingrese su nombre.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Apellido *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Ingrese su apellido *" required="required" data-error="Por favor ingrese su apellido.">
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
                <div class="form-group">
                    <label for="form_need">Por favor seleccione una de las opciones *</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Por favor elija una de las opciones.">
                        <option value=""></option>
                        <option value="tercera opcion">1</option>
                        <option value="segunda opcion">2</option>
                        <option value="tercera opcion">3</option>
                        <option value="Other">Otro</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Escribe tu mensaje acá *" rows="4" required="required" data-error="Por favor, dejanos tu mensaje."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> Estos campos son necesarios.
                    
                    <h6>¿Necesitás mas info? ¡Estamos acá!</h6>
                    <!--Google map-->
                    <div class="embed-container">
                        <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.2033089120123!2d-68.82266103301583!3d-32.885653916654874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x916460b7d67d1fdc!2sEscuela%20N%C2%B04-118%20San%20Jose!5e0!3m2!1ses!2sar!4v1574969186491!5m2!1ses!2sar" frameborder="0"
                        allowfullscreen></iframe>
                    </div>
                    
            </div>
        </div>
    </div>

</form>
                   
             </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
</html>
<?php
include_once('footer.php');
?>