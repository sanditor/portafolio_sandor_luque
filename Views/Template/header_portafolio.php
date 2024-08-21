<?php

use Mpdf\Tag\Em;

$url = $_SERVER['REQUEST_URI'];
$page_name = getLastSegmentFromURL($url);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="author" content="Sandor Luque">
    <meta name="theme-color" content="#009688">
    <title><?= $data['page_title'] ?></title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="SLF Desarrollador Web Full stack" />
    <meta name="description" content="Desarrollo web a medida. Consulte..." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://portafolio.sandorluqueweb.com/" />
    <meta property="og:title" content="SLF Desarrollador Web Full stack" />
    <meta property="og:description" content="Desarrollo web a medida. Consulte..." />
    <meta property="og:image" content="<?= media() ?>/portafolio/img/logo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://portafolio.sandorluqueweb.com/" />
    <meta property="twitter:title" content="SLF Desarrollador Web Full stack" />
    <meta property="twitter:description" content="Desarrollo web a medida. Consulte..." />
    <meta property="twitter:image" content="<?= media() ?>/portafolio/img/logo.png" />

    <link rel="icon" type="image/svg+xml" href="<?= media() ?>/portafolio/img/favicon.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= media() ?>/portafolio/css/estilos.css">
    <!--Archivos CSS para Alertify -->
    <link href="<?= media() ?>/portafolio/css/alertify/alertify.min.css" rel="stylesheet">
    <!-- Alertify theme -->
    <link href="<?= media() ?>/portafolio/css/alertify/themes/default.min.css" rel="stylesheet">

</head>

<body>
    <div id="divLoading">
        <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
    </div>
    <!-- SECCION I N I C I O -->
    <section class="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>/SLF/</h1>
                    <nav id="nav" class="">
                        <ul class="links">
                            <?php if (isset($_SESSION['login'])) { ?>
                                <li id="welcome">Bienvenido:&nbsp;&nbsp;&nbsp;<?= $_SESSION['userData']['nombres'] . ' ' . $_SESSION['userData']['apellidos'] ?>&nbsp;&nbsp;&nbsp;</li>
                            <?php } ?>
                            <li><a href="home#inicio"  onclick="seleccionar(this, 0)">INICIO</a></li>
                            <li><a href="home#sobremi" onclick="seleccionar(this, 1)">SOBRE MI</a></li>
                            <li><a href="home#servicios" onclick="seleccionar(this, 2)">SERVICIOS</a></li>
                            <li><a href="home#portfolio" onclick="seleccionar(this, 3)">PORTAFOLIO</a></li>
                            <li><a href="home#contacto" onclick="seleccionar(this, 4)">CONTACTO</a></li>
                            <li class="list__item">
                                <a class="linkSoftrans" href="<?= base_url(); ?>/softransPage" onclick="seleccionar(this, 5)">SOFTRANS+</a>
                                <ul class="list__show">
                                    <li>
                                        <a href="softransPage#modules" class="nav__link nav__link--inside" onclick="seleccionar(this, 6)">Módulos</a>
                                    </li>

                                    <li>
                                        <a href="softransPage#whySoftrans" class="nav__link nav__link--inside" onclick="seleccionar(this, 7)">¿Por qué Escoger?</a>
                                    </li>

                                    <li>
                                        <a href="softransPage#forWhom" class="nav__link nav__link--inside" onclick="seleccionar(this, 8)">¿Para quién es?</a>
                                    </li>

                                    <li>
                                        <a href="softransPage#questions" class="nav__link nav__link--inside" onclick="seleccionar(this, 9)">Preguntas Frecuentes</a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                            if (isset($_SESSION['login'])) {
                            ?>
                                 <li><a href=" <?= base_url() ?>/login" onclick="seleccionar(this, 10)"">
                                    CUENTA
                                </a></li>
                                <li><a href="<?= base_url() ?>/logout" onclick="seleccionar(this, 11)"">
                                    SALIR
                                </a></li>                               
                            <?php } else { ?>
                                <li><a href=" <?= base_url() ?>/login" onclick="seleccionar(this, 12)"">
                                    INICIAR SESIÓN
                                </a></li>
                            <?php } ?>
                        </ul>
                    </nav>

                    <!-- Icono del menu responsive -->
                    <div id="icono-nav" onclick="responsiveMenu()">
                                        <i class="fa-solid fa-bars"></i>
                </div>

                <div class="redes">
                    <a href="https://www.youtube.com/channel/UCCoEZ9s1qSGEK3_g_j5VsEg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.facebook.com/Sandor1978" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/sandor-luque-farf%C3%A1n-28666b136/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
        </div>
        </div>
        </header>
        <?php if ($page_name == "home" || empty($page_name)) { ?>
            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2>Soy <span>Sandor Luque Farfán</span>, Desarrollador Web</h2>
                <p class="descripcion">
                    Soy desarrollador fullStack, con experiencia en diferentes lenguajes de programación, me especializo
                    principalmente en el desarrollo Full Stack, tengo experiencia realizando API RESTFULL.
                    Me dedico a crear software a medida, tiendas en línea(MarketPlace), facturadores en línea, gestores de servicio de transporte
                    intermunicipal, buscando siempre proyectos retadores e interesantes. Aparte de mi trabajo
                    diario, dedico mi tiempo libre a estudiar nuevas tecnologías de la información, las más demandas.
                    Soy bastante autodidacta.
                </p>
                <a class="button_medium" href="home#portfolio">Ir a Portafolio</a>
            </div>
        <?php } else if ($page_name == "softransPage") { ?>
            <div class="hero_softrans">
                <div class="text_content">
                    <h2>Software de Gestión de Transporte intermunicipal y encomiendas</h2>
                    <p class="descripcion">
                        <b>Optimiza y transforma la logística con nuestro software de gestión de transporte intermunicipal y encomiendas.</b>
                        Diseñado para empresas que buscan eficiencia y precisión, nuestra plataforma ofrece una solución integral para
                        la planificación de rutas, seguimiento de vehículos y encomienda, gestión de horarios y mucho más.
                        Con herramientas avanzadas de análisis y reportes, facilita la toma de decisiones informadas y mejora la experiencia
                        del cliente. Todo lo que necesitas para llevar tu operación al siguiente nivel, en una interfaz intuitiva y moderna.
                    </p>
                    <a class="button_medium" href="<?= base_url() ?>/home#contacto">Contáctanos para un demo</a>
                </div>
                
                <figure class="hero_figure">
                    <img src="<?= media() ?>/portafolio/img/proyecto1.jpg" alt="proyecto_1" class="hero__img img-galeria">
                </figure>
            </div>
        <?php } ?>

    </section>
    <div class="imagen-light">
        <img src="<?= media() ?>/portafolio/img/close.svg" alt="" class="close">
        <img src="" alt="" class="agregar-imagen">
    </div>