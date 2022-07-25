<?php

   

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje != "")
    {
    // Varios destinatarios
    $para = "diegogl@live.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: diegogl@live.com' . "\r\n";
    $cabeceras .= 'From: contacto@diegoguarino.com.ar' . "\r\n";

    // Enviarlo
    //mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion_envio.php");


    }
    }

?>



<?php $pg = "contacto" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">

<header>
    <?php include_once("menu.php") ?>
</header>

<main class="container">
    <div class="row">
        <div class="col-12 mt-3 mb-5">
            <h1>Contacto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
        </div>
        <div class="col-12 col-sm-6">
            <form action="contacto.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow" placeholder="Nombre" requiered>
                </div>
                <div class="mb-3">
                    <input type="email" name="txtCorreo" id="txtCorreo" class="form-control shadow" placeholder="Correo" requiered>
                </div>
                <div class="mb-3">
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control shadow" placeholder="Teléfono/Whatsapp" required>
                </div>
                <div class="mb-3">
                    <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Escribe aquí tu mensaje" rows="5" required></textarea>
                </div>
                <div class="">
                    <button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-4 shadow">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</main>

<footer class="container mt-auto pb-sm-4">
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=59891320262" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <div class="row">
        <div class="col-12 col-sm-3 text-center text-sm-start">
            <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
            Sponsor <a href="https://depcsuite.com" target="_blank" title="DepcSuite">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
            <a href="mailto:diegogl@live.com">diegogl@live.com</a>
        </div>
    </div>
</footer>

</body>

</html>