<?php $pg = "sobre-mi" ?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">

    <header>
    <?php include_once ("menu.php") ?>
    </header>


    <main>

        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-sm-5 px2 mt-sm-5">
                    <h1>Sobre mí</h1>
                    <p class="pt-sm-4 pb-sm-5">Apasionado por la tecnología y gestión de proyectos. Soy alumno de cursos de programación Full Stack y de Base de datos.</p>
                    <a href="contacto/php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-3 offset-sm-2 mt-5">
                    <img src="imagenes/diego_foto.png" class="foto-perfil img-fluid mx-auto">
                </div>
            </div>
        </div>

        <section id="stack-tecnologico">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-1 py-sm-5">
                        <h2>Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                            <h3>Javasacript</h3>
                            <img src="imagenes/javascript.jpeg" alt="javascript" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                            <h3>PHP</h3>
                            <img src="imagenes/php.jpg" alt="php" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                            <h3>HTML5</h3>
                            <img src="imagenes/html5.png" alt="html5" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                            <h3>React.js</h3>
                            <img src="imagenes/reactjs.png" alt="reactjs" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                        <h3>jQuery</h3>
                            <img src="imagenes/jquery.jpg" alt="jquery" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-4">
                            <h3>Bootstrap</h3>
                            <img src="imagenes/botstrapimg.png" alt="bootstrap" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>Laravel</h3>
                            <img src="imagenes/laravel.png" alt="laravel" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>MySQL</h3>
                            <img src="imagenes/mysql.png" alt="mysql" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>CSS</h3>
                            <img src="imagenes/css.png" alt="ccs" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>Git</h3>
                            <img src="imagenes/git.png" alt="git" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>Apache</h3>
                            <img src="imagenes/apache.png" alt="apache" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="lenguaje px-4 py-5 mb-5">
                            <h3>Mercadopago</h3>
                            <img src="imagenes/mercadopago.jpg" alt="mercadopago" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i>Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow p-1">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2">
                            <img src="imagenes/la_cumbre.png" alt="Ta-Ta" class="img-fluid gris">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Gerente Comercial</h3>
                            <h4>LA CUMBRE</h4>
                            <h5>2018 - presente</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ratione voluptatibus quod, 
                                voluptates accusamus quae cumque ad expedita sequi doloremque modi laudantium alias. Voluptatem 
                                facilis asperiores, expedita illo tempore iste! 
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="imagenes/tata.png" alt="ta-ta" class="img-fluid gris">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Auxiliar Contable</h3>
                            <h4>Supermercado Ta-Ta</h4>
                            <h5>2009 - 2013</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatem. Dolores consectetur 
                                accusamus aspernatur mollitia nesciunt eveniet quod repellendus ullam velit porro, ipsam voluptatum itaque, 
                                soluta inventore iure! Quas, nesciunt.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <img src="imagenes/la_esquina.png" alt="esquina" class="img-fluid gris">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Gestor Contable</h3>
                            <h4>Ferretería La Esquina</h4>
                            <h5>2013 - 2018</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore excepturi nostrum, accusamus id aut 
                                assumenda vero explicabo itaque alias quam praesentium repellat quaerat provident quis molestiae soluta 
                                voluptates cum sit!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="formacion" class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><i class="fas fa-graduation-cap"></i>Formación acádemica</h2>
                    </div>
                </div>
                <div class="row shadow p-1">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-2 m-auto">
                                        <img src="imagenes/sin-logo.png" alt="sin-logo" class="gris">
                                    </div>
                                    <div class="col-12 col-sm-10 p-3">
                                        <h3>Bachillerato de Científica</h3>
                                        <h4>Liceo Nº1 IPOLL</h4>
                                        <h5>2002 – 2008</h5>
                                        <p>http://www.anep.edu.uy/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-2 m-auto">
                                        <img src="imagenes/sin-logo.png" alt="sin-logo" class="gris">
                                    </div>
                                    <div class="col-12 col-sm-10 p-3">
                                        <h3>Administración de Empresas</h3>
                                        <h4>Universidad de Trabajo del Uruguay</h4>
                                        <h5>2009 – 2013</h5>
                                        <p>http://www.utu.edu.uy/</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-2 m-auto">
                                        <img src="imagenes/sin-logo.png" alt="sin-logo" class="gris">
                                    </div>
                                    <div class="col-12 col-sm-10 p-3">
                                        <h3>Auxiliar Contable</h3>
                                        <h4>Universidad de Trabajo del Uruguay</h4>
                                        <h5>2003 – 2006</h5>
                                        <p>http://www.utu.edu.uy/</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cursos" class="container">
            <div class="row py-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 pt-5 pb-4">
                            <h2><i class="fas fa-graduation-cap"></i>Cursos de desarrollo profesional</h2>
                        </div>
                    </div>
                    <div class="row shadow  pb-2">
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/logo-depcsuite.svg" alt="DePCSuite" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Programación Web Full Stack</h3>
                                    <h4>DePC Suite</h4>
                                    <h5>Expedición: octubre 2022</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/mundo_nuevo.png" alt="mundo nuevo" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Digitación</h3>
                                    <h4>Instituto Mundo Nuevo</h4>
                                    <h5>Expedición: dic 2003</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/mundo_nuevo.png" alt="mundo nuevo" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Operador de Windows Office</h3>
                                    <h4>Instituto Mundo Nuevo</h4>
                                    <h5>Expedición: dic 2005</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/mundo_nuevo.png" alt="mundo nuevo" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Gestión en Recursos Humanos</h3>
                                    <h4>Instituto Mundo Nuevo</h4>
                                    <h5>Expedición: jun 2005</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/mundo_nuevo.png" alt="mundo nuevo" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Administración y Gestión Empresarial</h3>
                                    <h4>Instituto Mundo Nuevo</h4>
                                    <h5>Expedición: dic 2006</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-2 m-auto">
                                    <img src="imagenes/mundo_nuevo.png" alt="mundo nuevo" class="gris">
                                </div>
                                <div class="col-12 col-sm-10 p-3">
                                    <h3>Gestor Contable</h3>
                                    <h4>Instituto Mundo Nuevo</h4>
                                    <h5>Expedición: dic 2008</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="idiomas">
            <div class="container">
                <div class="row py-4 mx-0">

                    <div class="col-12 col-sm-6 p-4">
                        <div class="row shadow">
                            <div class="col-4 p-0">
                                <i class="fa-solid fa-message m-auto pt-5"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul class="p-0">
                                    <li>ESPAÑOL - Nativo</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 p-4">
                        <div class="row shadow">
                            <div class="col-4 p-0">
                                <i class="fa-solid fa-star m-auto pt-5"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul class="p-0">
                                    <li>Fútbol</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <footer class="container mt-auto pb-4">
        <div class="row pt-5">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">Sponsor<a href="https://depcsuite.com" target="_blank" title="DepcSuite">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
                <a href="mailto:diegoguarino.dev@gmail.com">diegoguarino.dev@gmail.com</a>
            </div>
        </div>
    </footer>
    <div>
        <a href="https://api.whatsapp.com/send?phone=59891320262" target="_blank" title="Whatsapp" class="btn-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

</body>


</html>