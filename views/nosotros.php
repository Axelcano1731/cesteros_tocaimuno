<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("modulos/head.php");
        include("modulos/carrusel.php");
    ?>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/styleNosotros.css">
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
                <li class="active"><a href="nosotros.php">Nosotros</a></li>
                <li><a href="#">Portafolio</a></li>
                <li><a href="#">Perfiles</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="section_nosotros">
            <div class="img">
                <img src="../Images/señoraConCanasto.png">
            </div>
            <div class="text">
                <div class="text_1">
                    <h1>Nosotros</h1>
                    <p>El rincón cestero ‘tocaimuno’, es obra de artesanos de Tocaima, Cundinamarca quienes tienen por objetivo  mantener las<br>
                    prácticas ancestrales, desarrollándose y promocionándolas por medio de actividades económicas, culturales y sociales<br>
                    necesarias para el progreso de los oriundos. Por más de 60 años esta labor ha sido el sustento de las familias que<br>
                    habitan el Camellón del río, lugar donde nació la práctica gracias a la cercanía con el Río Bogotá.
                    </p>
                </div>
                <div class="text_2">
                    <h2>Misión</h2>
                    <p>El rincón cestero ‘tocaimuno’ , es un conjunto de personas que se caracteriza por consagrar la práctica artesanal<br>
                    distinguida por su excelente fabricación y procedencia, que permite enaltecer la identidad cultural y tradicional de la<br>
                    cestería del municipio de Tocaima. Ofreciendo sus productos y artículos coloniales transformados para todo público;<br>
                    elaborados por oriundos que anclan esta costumbre ancestral, convirtiéndose en un proyecto sostenible y amigable.
                    </p>
                </div>
                <div class="text_3">
                    <h2>Visión</h2>
                    <p>El rincón cestero ‘tocaimuno’ se convertirá en el ejemplo de recuperación de conocimiento ancestral y económico que<br>
                    liderará en la región del alto magdalena, manteniendo viva la tradición y cultura de cada municipio,  a través de la<br>
                    diversificación de sus tejidos e innovando con nuevas técnicas y materiales, preservando la calidad de cada pieza que<br>
                    contribuye al fortalecimiento de la cadena de valor en las actividades artesanales.
                    </p>
                </div>
            </div>
        </section>
        <section class="section_historia">
            <div class="text">
                <h2>Nuestra Historia</h2>
                <div class="text_p">
                    <p>
                    La cesta ha acompañado a la civilización humana desde sus primeros pasos, aunque no siempre ha sido como la conocemos hoy en día. Su principal uso por el hombre Neolítico se dio, en<br>
                    labores de recolección de frutos silvestres  para atender á su subsistencia, e incluso la mujer medieval iba al mercado o a la feria comarcal y sus criados portaban un cesto totalmente<br>
                    distinto para cada producto del hogar. Así, a lo largo de la historia la cesta ha estado inmersa en el centro de la vida de las personas dándole usos prácticos que abarca las distintas formas<br>
                    y expresiones de nuestra cultura..
                    </p>

                    <p>
                    El arte de tejer alcanzó su perfección,creando distintas unidades para el uso diario. Una mirada que nos acerque al tejido de las fibras duras elaboradas por cesteros que con ingenio se<br>
                    disponen a producir un objeto peculiar que nunca contradice la belleza, el orden, el equilibrio y las proporciones. Es impensable ver como el ojo, la mano y hasta los dientes del tejedor se<br>
                    disponen a crear historias. La amplia cultura artesanal abarca trabajos de canastos y anchetas con caña de castilla que crece en humedales , especialmente en lagos y/o ríos.
                    </p>
                </div>
            </div>
            <div class="tittle_galeria">
                <h2>Galería Historíca</h2>
            </div>
            <div class="carrusel">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="../Images/cuadro_vinotinto.png"></div>
                    <div class="swiper-slide"><img src="../Images/cuadro_rosa.png" alt=""></div>
                    <div class="swiper-slide"><img src="../Images/cuadro_vinotinto.png"></div>
                    <div class="swiper-slide"><img src="../Images/cuadro_rosa.png" alt=""></div>
                    <div class="swiper-slide"><img src="../Images/cuadro_vinotinto.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
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
    <script type="text/javascript" src="../Js/Inicio.js"></script>
</body>
</html>