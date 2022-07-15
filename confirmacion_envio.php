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

<body id="confirmacion_envio" class="d-flex flex-column h-100">
<header>
    <?php include_once("menu.php") ?>
</header>
<main class="container">
    <div class="row">
        <div class="col-12 pt-1 pb-4 pt-sm-5">
            <h1>Gracias por contactarte,</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pb-5">
            <p>te estaré respondiendo a la brevedad.</p>
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