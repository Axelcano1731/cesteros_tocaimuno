<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("modulos/head.php");
        include("modulos/carrusel.php");
    ?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/stylePortafolio.css">
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
                <li class="active"><a href="portafolio">Portafolio</a></li>
                <li><a href="perfiles.php">Perfiles</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteinerPortafolio">
            <div class="text">
                <div class="tittle">
                    <h1>Productos de la caña de castilla</h1>
                </div>
                <div class="parrafo">
                    <p>
                        Tras extraer la Caña de Castilla  del Camellón del Río en el municipio de Tocaima, Cundinamarca, los cesteros dan inicio al proceso de elaboración:<br>
                        en primer lugar, sacan las tiras de caña con sus dedos que  forjaran el molde. Por otro lado, con sus dientes y uñas amarran los trozos que hormaran<br>
                        el canasto para darle consistencia y finura.
                    </p>
                    <p>
                        El proceso de fabricación de los canastos artesanales, tiene un tiempo estimado de 3 a 6 horas con la materia prima a la mano. Así, se le ha<br>
                        otorgado su reconocimiento en la región del Alto Magdalena a raíz de entregarse con la mejor calidad
                    </p>
                </div>
            </div>
            <ul>
                <li id="todos">Todos</li>
                <li id="canastos">Canastos</li>
                <li id="bisuterias">Bisuterías</li>
                <li id="hogar">Hogar</li>
            </ul>
            <div id="conteiner_photos" class="conteiner_photos">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos canastos" src="../Images/cuadro_grisOscuro.png">
                <img class="todos bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="todos bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="todos bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="bisuterias" src="../Images/cuadro_grisOscuro.png">
                <img class="todos hogar" src="../Images/cuadro_grisOscuro.png">
                <img class="todos hogar" src="../Images/cuadro_grisOscuro.png">
                <img class="todos hogar" src="../Images/cuadro_grisOscuro.png">
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
    <script type="text/javascript" src="../Js/portafolio.js"></script>
</body>
</html>