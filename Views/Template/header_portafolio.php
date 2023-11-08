
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="author" content="Sandor Luque">
    <meta name="theme-color" content="#009688">
    <title><?=$data['page_title']?></title>
    <link rel="icon" type="image/svg+xml" href="<?= media() ?>/portafolio/img/favicon.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= media() ?>/portafolio/css/estilos.css">
    <!--Archivos CSS para Alertify -->
	<!-- Alertify style -->
	<link href="<?= media()?>/portafolio/css/alertify/alertify.min.css" rel="stylesheet">
	<!-- Alertify theme -->
	<link href="<?=  media() ?>/portafolio/css/alertify/themes/default.min.css" rel="stylesheet">

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

</head>

<body>
    <div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
      </div>
    </div>
    <!-- SECCION I N I C I O -->
    <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>/SLF/</h1>
                    <nav id="nav" class="">
                        <ul id="links">
                            <?php if (isset($_SESSION['login'])) { ?>
                            <li id="welcome">Bienvenido:&nbsp;&nbsp;&nbsp;<?= $_SESSION['userData']['nombres'] . ' ' . $_SESSION['userData']['apellidos'] ?>&nbsp;&nbsp;&nbsp;</li>
                            <?php } ?>
                            <li><a href="#inicio" class="seleccionado" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="#sobremi" onclick="seleccionar(this)">SOBRE MI</a></li>
                            <li><a href="#servicios" onclick="seleccionar(this)">SERVICIOS</a></li>
                            <li><a href="#portfolio" onclick="seleccionar(this)">PORTAFOLIO</a></li>
                            <li><a href="#contacto" onclick="seleccionar(this)">CONTACTO</a></li>
                            <?php 
                            if (isset($_SESSION['login'])) {
                            ?>
                                <li><a href="<?= base_url() ?>/logout" onclick="seleccionar(this)"">
                                    SALIR
                                </a></li>
                                <li><a href="<?= base_url() ?>/logIN" onclick="seleccionar(this)"">
                                    CUENTA
                                </a></li>
                            <?php } else { ?>
                                <li><a href="<?= base_url() ?>/login" onclick="seleccionar(this)"">
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
            </header>
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
                <a class="button_medium" href="#portfolio">Ir a Portafolio</a>
            </div>
        </div>
    </section>