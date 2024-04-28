<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("modulos/head.php");
        include("modulos/carrusel.php");
    ?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/styleBlog.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="logo_cesteros">
            <img src="../images/logo_cesteros.png">
        </div>
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="portafolio.php">Portafolio</a></li>
                <li><a href="perfiles.php">Perfiles</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li class="active"><a href="blog.php">Blog</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteiner_blog">
            <div class="tittle_blog">
                <h1>Blog</h1>
            </div>
            <div class="blog_content">
                <div class="blog">
                    <div class="img">
                        <img src="../Images/cuadro_gris.png">
                    </div>
                    <div class="text_blog">
                        <h5>dd/mm/YYYY</h5>
                        <h3>Título de la publicación</h3>
                        <h5>Nombre de usuario</h5>
                        <div class="descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur. Habitant urna donec commodo viverra vehicula <br>
                            purus. At elit duis risus semper fermentum nunc tortor elit ipsum. Hendrerit egestas <br>
                            parturient aliquet ipsum felis. Erat leo velit varius sit. Ultrices rutrum eu facilisi.
                            </p>
                        </div>
                        <div class="button">
                            <button class="btn"><img src="../Images/download.png">Descargar</button>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="img">
                        <img src="../Images/cuadro_gris.png">
                    </div>
                    <div class="text_blog">
                        <h5>dd/mm/YYYY</h5>
                        <h3>Título de la publicación</h3>
                        <h5>Nombre de usuario</h5>
                        <div class="descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur. Habitant urna donec commodo viverra vehicula <br>
                            purus. At elit duis risus semper fermentum nunc tortor elit ipsum. Hendrerit egestas <br>
                            parturient aliquet ipsum felis. Erat leo velit varius sit. Ultrices rutrum eu facilisi.
                            </p>
                        </div>
                        <div class="button">
                            <button class="btn"><img src="../Images/download.png">Descargar</button>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="img">
                        <img src="../Images/cuadro_gris.png">
                    </div>
                    <div class="text_blog">
                        <h5>dd/mm/YYYY</h5>
                        <h3>Título de la publicación</h3>
                        <h5>Nombre de usuario</h5>
                        <div class="descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur. Habitant urna donec commodo viverra vehicula <br>
                            purus. At elit duis risus semper fermentum nunc tortor elit ipsum. Hendrerit egestas <br>
                            parturient aliquet ipsum felis. Erat leo velit varius sit. Ultrices rutrum eu facilisi.
                            </p>
                        </div>
                        <div class="button">
                            <button class="btn"><img src="../Images/download.png">Descargar</button>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="img">
                        <img src="../Images/cuadro_gris.png">
                    </div>
                    <div class="text_blog">
                        <h5>dd/mm/YYYY</h5>
                        <h3>Título de la publicación</h3>
                        <h5>Nombre de usuario</h5>
                        <div class="descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur. Habitant urna donec commodo viverra vehicula <br>
                            purus. At elit duis risus semper fermentum nunc tortor elit ipsum. Hendrerit egestas <br>
                            parturient aliquet ipsum felis. Erat leo velit varius sit. Ultrices rutrum eu facilisi.
                            </p>
                        </div>
                        <div class="button">
                            <button class="btn"><img src="../Images/download.png">Descargar</button>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="img">
                        <img src="../Images/cuadro_gris.png">
                    </div>
                    <div class="text_blog">
                        <h5>dd/mm/YYYY</h5>
                        <h3>Título de la publicación</h3>
                        <h5>Nombre de usuario</h5>
                        <div class="descripcion">
                            <p>Lorem ipsum dolor sit amet consectetur. Habitant urna donec commodo viverra vehicula <br>
                            purus. At elit duis risus semper fermentum nunc tortor elit ipsum. Hendrerit egestas <br>
                            parturient aliquet ipsum felis. Erat leo velit varius sit. Ultrices rutrum eu facilisi.
                            </p>
                        </div>
                        <div class="button">
                            <button class="btn"><img src="../Images/download.png">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php
        include("modulos/footer.php");
        ?>
    </footer>
    <?php
        include("modulos/js.php");
    ?>
</body>
</html>