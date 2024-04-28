<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("modulos/head.php");
        include("modulos/carrusel.php");
    ?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/stylePerfil.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Perfil</title>
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
                <li class="active"><a href="perfiles.php">Perfiles</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="blog.php" target="_blank">Blog</a></li>
                <li><a href="multimedia.php">Multimedia</a></li>
                <li><a href="#footer">Contactenos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteiner_profile">
            <div class="profile">
                <div class="img">
                    <img src="../Images/cuadro_gris.png">
                </div>
                <div class="profile_text">
                    <h2>Hola!</h2>
                    <h5>Nombre de la persona</h5>
                    <p>
                        Soy oriundo del municipio de Tocaima. Desde los 8 años iba al río para traer la Caña<br>
                        de Castilla junto a mis padres arriesgando la vida, dado que atravesábamos lotes<br>
                        privados bajo el riesgo de ser confundidos con ladrones. En muchas ocasiones<br>
                        transportábamos la materia prima en balsas de Bambú llevados por la corriente. Mis<br>
                        productos destacados son el canasto tradicional, canasto mediano y canasto<br>
                        pequeño, entre otros
                    </p>
                    <a href="https://wa.me/573212932969" target="_blank">
                        <button class="btn">
                            <img src="../Images/whastappIcon.png">321 293 2969
                        </button>
                    </a>
                </div>
            </div>
            <div class="tittle">
                <h2>Conoce mis productos</h2>
            </div>
            <div class="productos">
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
                    </div>
                </div>
                <div class="producto">
                    <img src="../Images/cuadro_grisOscuro.png">
                    <div class="text">
                        <h4>Nombre del producto</h4>
                        <h5>Dimensiones del producto en cm</h5>
                        <h3>$10.000</h3>
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