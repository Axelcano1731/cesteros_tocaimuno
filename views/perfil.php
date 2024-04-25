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
    <title>Inicio</title>
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
                <li><a href="#">Blog</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Contactenos</a></li>
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
                        Soy oriundo del municipio de Tocaima. Desde los 8 años iba al río para traer la Caña 
                        de Castilla junto a mis padres arriesgando la vida, dado que atravesábamos lotes 
                        privados bajo el riesgo de ser confundidos con ladrones. En muchas ocasiones 
                        transportábamos la materia prima en balsas de Bambú llevados por la corriente. Mis
                        productos destacados son el canasto tradicional, canasto mediano y canasto pequeño, entre otros
                    </p>
                    <button><img src="../Images/whastappIcon.png">321 293 2969 </button>
                </div>
            </div>
            <div class="tittle"></div>
            <div class="productos">
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