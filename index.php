<?php
session_start();
include "modelo/conexion.php";
include "controlador/controlador_login.php";
include "controlador/controlador_register.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Turismo Huinganco</title>
    <meta name="description"
        content="Descubrí lo que Huinganco tiene para dar. Conocé la variedad de propuestas de la ciudad y planificá tu viaje para que todo salga como lo soñaste en el jardin del neuquen.">
    <meta name="author" content="Ciclista Sin Licencia">
    <meta name="Robots" content="no-index"> <!-- Evitar Indexasion -->

    <link rel="stylesheet" href="style/global.css?a">
    <link rel="stylesheet" href="style/index.css?v2">

    <script defer src="script/global.js?v2"></script>
    <script defer src="script/index.js?v2"></script>

    <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link defer rel="shortcut icon" type="image/x-icon" href="/img/favi-con.ico" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="light">
<?php
include "components/header.php";
include "components/login.php";
?>





<!-- -------------------------
          BANNER
-------------------------- -->

    <div class="banner">
   <img class="banner-background" src="img/Banner.webp" alt="imagen de fondo">

        <div class="content-banner">
            <h1 class="banner-titulo"> El jardin del Neuquen</h1>
            <p class="banner-text">Huingán-có es una localidad Argentina del departamento Minas, en la provincia del Neuquén.
                Ubicado a los pies de la Cordillera del Viento. La comunidad cuenta con una población de alrededor de mil habitantes, fue fundada el 16 de abril de 1964.
            </p>
            <a href="#" class="banner-btn" aria-label="Boton para mas informacion">Más Info...</a>
        </div>

    </div>
 



<!-- -------------------------
          JOYAS
-------------------------- -->
    <main>
        <div id="cnt-titulo-joyas">
            <p>Conoce las</p>
            <h2 class="titulo-joyas">Joyas de Huingáncó</h2>
        </div>


        <div class="ctn-joyas">

            <!-- san pedro -->
            <div class="bloque-joyas">
                <img src="img/sanPedro.webp " alt="Imagen cerro corona" class="bloque-img-joyas">
              
                <h2 class="titulo-bloque-joyas"><a href="#" class="anchor-titulo-bloque-joyas">Mirador San
                        Pedro</a> </h2>
                <p class="texto-bloque-joyas">Arrancamos en el pueblo de huinganco con una subida de 30-40 minutos, que
                    nos deleita con una de las mejores vistas del Lugar, desde la cima se puede avistar, el cerro
                    corona, andacollo, la cordillera andina y la cordillera del viento</p>
                    <div class="ctn-altura-dificultad">
                    <p class="dificultad" id="facil">Dificultad: Baja</p>
                    <p class="altura">Altura: 1600.msnm</p>
                </div>
            </div>


            <!-- pino  huacho -->
            <div class="bloque-joyas">

                <img src="img/pino.webp" alt="imagen pino huacho" class="bloque-img-joyas">

              
                <h2 class="titulo-bloque-joyas"><a href="#" class="anchor-titulo-bloque-joyas">Sendero Pino
                        Huacho</a> </h2>
                <p class="texto-bloque-joyas">El sendero comienza por los bosques de pinos, todo en subida hasta el
                    mirador pino Huacho , donde tendremos una vista única de la zona. <br>
                    Siguiendo el camino bordeamos la montaña hasta encontrar un refugio y regresaremos descendiendo por
                    otra montaña
                </p>
                <div class="ctn-altura-dificultad">
                    <p class="dificultad" id="media">Dificultad: Media</p>
                    <p class="altura">Altura: 1300.msnm</p>
                </div>
            </div>

            <!--corona  -->
            <div class="bloque-joyas">
                <img src="img/corona.webp" alt="imagen cerro corona" class="bloque-img-joyas">
               
                <h2 class="titulo-bloque-joyas"><a href="#" class="anchor-titulo-bloque-joyas">Cerro Corona</a>
                </h2>
                <p class="texto-bloque-joyas">La corona del pueblo, aunque esta no es, ya que la foto es del Frey,
                    igualmente lindo, y al menos tenemos foto
                </p>
                <div class="ctn-altura-dificultad">
                    <p class="dificultad" id="dificil">Dificultad: Alta </p>
                    <p class="altura">Altura: 2983.msnm</p>
                </div>
            </div>
        </div>
    </main>


<!-- -------------------------
          BANNER OCTUBRE
-------------------------- -->
<article>
    <div id="banner-octubre">
        <!-- Carousel -->
        <section class="section-carousel">
            <div class="carousel" data-carousel>
                <button class=" carousel-button next" data-carousel-button="next">&#10095;</button>
                <button class=" carousel-button prev" data-carousel-button="prev">&#10094;</button>
                <ul data-slides>

                    <li class="slide" data-active>

                        <img loading="lazy" width=" 200px" height="200px" src="img/carousel3.webp" alt="">
                    </li>

                    <li class="slide">
                        <img loading="lazy" width=" 200px" height="200px" src="img/carousel 5.webp" alt="">
                    </li>


                    <li class="slide">
                        <img loading="lazy" width=" 200px" height="200px" src="img/carousel 4.webp" alt="">
                    </li>

                </ul>
            </div>
        </section>
        <!-- FIN CAROUSEL -->

        <div class="octubre-huignanco">
            <h2> Trail del viento - Octubre</h2>

            <p class="octubre-text"> El 10 de octubre, el norte neuquino recibe a la destacada prueba. Incluye los 50
                kilómetros, una expedición que llega a la cumbre del Cerro Corona de Huinganco.


            <p class="text-desktop">
                La prueba más corta es la 5K, una carrera ideal para hacer en familia pero que no deja de ser un reto, a
                partir de los caminos nevados. Los 10K están destinados a los que buscan iniciarse en carreras de
                montaña. El 70% de los 400 participantes elige estas modalidades.

                <br>
                Le siguen los 25K, para los que ya se animan a una aventura más exigente y todoterreno. La frutilla del
                postre son los 50K que incluyen por primera vez la cumbre en el Cerro Corona, a casi 3.000 metros de
                altura. Esto la convierte en el Trail en el que más alto se corre de la Patagonia.

            </p>


            <a href="#" class="btn-banner">Conocé más</a>
            <a href="reserva.php" class="btn-banner" id="btn-reserva" target="_blank">Reserva tu
                lugar!</a>

        </div>
    </div>
</article>

<!-- -------------------------
     DEJANOS TU CONSULTA!
-------------------------- -->
<section>
    <div class="ctn-comentario">
        <h2 class="titulo-comentario"> Dejanos tu consulta </h2>
        <p class="texto-comentario">responderemos a la brevedad</p>
    </div>

    <form action="" class="form" id="form-consul">
        <div class="ctn-form">
            <div class="ctn-input">
                <input type="text" placeholder="Nombre" class="form-input" required pattern="[a-zA-Z]{2,}"
                    class="email-consul" id="nombre">

                <input type="text" placeholder="eMail" class="form-input " id="email-consul"
                    oninput="validationConsul()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required
                    attribute="value">

            </div>


            <textarea name="" class="textarea" cols="100%" rows="100%" placeholder="hay bandurrias?" required
                minlength="8"></textarea>

            <input type="submit" class="btn-enviar"
                title="Tu informacion puede que sea manipulada por el gobierno chino" id="btn-submit-consul">


        </div>
    </form>
</section>


<!-- -------------------------
          FOOTER
-------------------------- -->
<?php
include "components/footer.php";
?>
  
</body>
</html>