<?php $pg = "inicio" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">

    <header>
        <?php include_once ("menu.php") ?>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto text-center cohete">
                    <a href="proyectos.php"><img src="imagenes/cohete.svg" alt="Cohete"></a>
                </div>
                <div class="col-sm-6 col-12 text-center offset-sm-3">
                    <div class="mt-5 pt-3">
                        <p class="px-0 py-1 m-1">Bienvenid@ a mi sitio web sobre desarrollo web.</p>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
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