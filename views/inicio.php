<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("modulos/head.php");
        include("modulos/carrusel.php");
    ?>
    <link rel="stylesheet" href="../styles/style.css">
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
                <li class="active"><a href="inicio.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="portafolio.php">Portafolio</a></li>
                <li><a href="perfiles.php">Perfiles</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="tituloN1">
                <h1>Titulo No.1</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, alias fuga?
                    Eos aut amet id blanditiis non? Quis ab culpa, non eos doloremque mollitia quam fugiat
                    corrupti magni eaque nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Autem, impedit voluptates voluptate id odit ipsum saepe dolorum nihil reprehenderit officiis 
                    blanditiis pariatur illum! Itaque aliquam consequatur expedita excepturi sunt aliquid.
                </p>
            </div>
            <div class="carrusel">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide img1"><img src="../images/cuadro_blanco.png"></div>
                        <div class="swiper-slide img2"><img src="../images/cuadro_gris.png"></div>
                        <div class="swiper-slide img3"><img src="../images/cuadro_grisOscuro.png"></div>
                        <div class="swiper-slide img4"><img src="../images/cuadro_blanco.png"></div>
                        <div class="swiper-slide img5"><img src="../images/cuadro_gris.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </section>
        <section class="tipos_tejen">
            <div class="tittle_manos">
                <h2>
                    Manos que tejen historia
                </h2>
            </div>
            <div class="img_text">
                <div class="img_tradi">
                    <img src="../images/canasto_tradi.png">
                        <h3>Canasto Tradicional</h3>
                        <p>
                            El canasto tradicional es un recipiente que dispone<br>
                            de asas, tejidas por manos tocaimunas con cañas<br>
                            u otros materiales.<br>
                        </p>
                </div>
                <div class="img_bisu">
                    <img src="../images/bisuteria.png">
                        <h3>Bisutería</h3>
                        <p>
                            La bisutería es la creación artesanal de accesorios relacionados<br>
                            con las pulseras, anillos, collares y<br>
                            aretes.<br>
                        </p>
                </div>
                <div class="img_hogar">
                    <img src="../images/hogar.png">
                        <h3>Hogar</h3>
                        <p>
                            En este campo contamos con una alta glama de<br>
                            productos que van desde floreros hasta lámparas.
                        </p>
                </div>
            </div>
        </section>
        <section class="info_section">
            <div class="black"></div>
            <div class="text_info">
                <h2>
                    Quieres estar informado de <br>
                    nuestros eventos
                </h2>
                <p>
                    Ingresa tu correo electrónico y recibiras noticias de primera mano sobre nuestros<br>
                    eventos. 
                </p>
            </div>
            <form action="inicio.php" method="POST">
                <div class="save_email">
                    <input type="text" name="correo" class="text" placeholder="Correo electrónico">
                    <input type="submit" value="Enviar" class="send">
                </div>
            </form>
        </section>
        <section class="map">
            <div id="mapid"></div>
        </section>
        <section class="dudas">
            <div class="conteiner_1">
                <h2>Tienes alguna duda o comentario</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Facilisi id integer nibh felis praesent <br> 
                    nunc adipiscing. Arcu placerat maecenas rutrum aenean ultricies et <br> 
                    condimentum phasellus phasellus. Massa nibh sed duis quam vitae. Quisque <br>
                    integer ac dignissim fermentum gravida nec. Fringilla aenean quam sociis turpis <br>
                    sit imperdiet. Ut velit nam congue a. Gravida convallis nunc nisl morbi enim. Odio <br>
                    habitasse at nulla sed sed pulvinar. Ut nec morbi pulvinar eu elit augue sem <br>
                    diam. Id laoreet aliquet eget risus magnis a aliquet. Lacus aliquam sed mattis <br>
                    tellus netus nunc a adipiscing ut. Nulla feugiat dui nunc porttitor porttitor.</p>
            </div>
            <form action="sendEmail.php" method="post" class="conteiner_2">
                <input type="text" class="text" name="nombre" placeholder="Nombre y Apellidos">
                <input type="text" class="text" name="celular" placeholder="Celular">
                <input type="text" class="text" name="asunto" placeholder="Asunto">
                <input type="submit" value="Enviar" class="send">
            </form>
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
    <script type="text/javascript" src="../Js/inicio.js"></script>
</body>
</html>