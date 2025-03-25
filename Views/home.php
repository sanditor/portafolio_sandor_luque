<?php headerPortafolio($data); ?>
<!-- SECCION S O B R E M I -->
<section id="sobremi">
    <div class="contenedor-foto">
        <img src="<?= media() ?>/portafolio/img/foto.jpg" alt="">
    </div>
    <div class="sobremi">
        <p class="titulo-seccion">Sobre Mi</p>
        <h2>Hola, Soy <span>Sandor Luque Farfán</span> </h2>portafolio/
        <h3>Desarrollador Web Full Stack</h3>
        <p>
            Tecnólogo en análisis y desarrollo de sistemas de información con experiencia en el desarrollo de
            aplicaciones web full stack,
            implementación de la seguridad informática, soporte a aplicaciones web, Programación de las nuevas
            tecnologías
            de la información de acuerdo a necesidades del cliente, generación de nuevas pautas de desarrollo,
            administración y análisis de
            bases de datos con competencias tales como productividad, seguimiento de instrucciones, trabajo en
            equipo y orientación al servicio.
        </p>
        <a href="<?= media() ?>/portafolio/files/H.V. SANDOR LUQUE FARFAN.docx">Descargar CV</a>
    </div>
</section>

<!-- SECCION S E R V I C I O S -->
<section id="servicios" class="servicios">
    <h3 class="titulo-seccion">MIS SERVICIOS</h3>
    <div class="fila">
        <div class="servicio">
            <span class="icono"> <i class="fa-solid fa-code"></i></span>
            <h4>Diseño de Sitios Web</h4>
            <hr>
            <ul class="servicios-tag">
                <li>Web</li>
                <li>Responsive Design</li>
                <li>SEO</li>
            </ul>
            <p> Planificación, creación y organización de todos los elementos visuales funcionales como: colores,
                tipografía,
                imágenes, gráficos de un sitio web con el objetivo de lograr una experiencia de usuario
                atractiva(UX), efectiva y coherente.
            </p>
        </div>
        <div class="servicio">
            <span class="icono"><i class="fa-solid fa-file-code"></i></span>
            <h4>Programación PHP</h4>
            <hr>
            <ul class="servicios-tag">
                <li>PHP</li>
                <li>Nativo</li>
                <li>Laravel</li>
            </ul>
            <p>
                Creación de aplicaciones web utilizando el lenguaje de programación PHP (Hypertext Preprocessor)
                nativo y con framework: laravel.
                PHP es un lenguaje de programación ampliamente utilizado para el desarrollo de aplicaciones web
                dinámicas y sitios web interactivos.
            </p>
        </div>
        <div class="servicio">
            <span class="icono"><i class="fa-solid fa-arrow-trend-up"></i></span>
            <h4>Posicionamiento SEO</h4>
            <hr>
            <ul class="servicios-tag">
                <li>Web</li>
                <li>Design</li>
                <li>SEO</li>
            </ul>
            <p>
                El posicionamiento SEO (Search Engine Optimization) se refiere a las estrategias y técnicas
                utilizadas para mejorar la visibilidad y
                clasificación de un sitio web en los motores de búsqueda como Google, Bing y Yahoo. El objetivo
                principal del SEO es aumentar el tráfico
                orgánico, es decir, aquel que proviene de resultados de búsqueda no pagados, a un sitio web.
            </p>
        </div>
    </div>
    <div class="fila">
        <div class="servicio">
            <span class="icono"><i class="fa-solid fa-database"></i></span>
            <h4>Alojamiento de Sitios</h4>
            <hr>
            <ul class="servicios-tag">
                <li>Web</li>
                <li>Hosting</li>
                <li>Cloud</li>
            </ul>
            <p>
                Me encargo de configurar los sitios web en la nube con el fin de dar soporte a los mismos. El
                alojamiento web proporciona un espacio en servidores de Internet
                para almacenar y hacer accesible un sitio web en línea. Es un componente fundamental para que un
                sitio web esté disponible en la World Wide Web
                y sea accesible para los usuarios de todo el mund
            </p>
        </div>
        <div class="servicio">
            <span class="icono"><i class="fa-solid fa-palette"></i></span>
            <h4>Desarrollador web a medida</h4>
            <hr>
            <ul class="servicios-tag">
                <li>Web</li>
                <li>Developer</li>
                <li>Full Stack</li>
            </ul>
            <p>
                Me especializo en la creación y personalización de sitios web y aplicaciones web específicamente
                adaptados a las necesidades y requerimientos de un cliente o empresa.
            </p>
        </div>
        <div class="servicio">
            <span class="icono"><i class="fa-solid fa-person-circle-question"></i></span>
            <h4>Seguridad Web</h4>
            <hr>
            <ul class="servicios-tag">
                <li>Web</li>
                <li>Hacking</li>
                <li>Ético</li>
            </ul>
            <p>
                La seguridad es una preocupación importante en el desarrollo web a medida. Implemento medidas de
                seguridad para proteger el sitio web y los datos del cliente de amenazas cibernéticas.
            </p>
        </div>
    </div>
</section>

<!-- SECCION H A B I L I D A D E S -->
<div class="contenedor-skills" id="skills">
    <h3>HABILIDADES </h3>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>Html & Css & Bootstrap v5</p>
            <span class="porcentaje">90%</span>
        </div>

        <div class="barra">
            <div class="" id="html"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>Javascript</p>
            <span class="porcentaje">85%</span>
        </div>

        <div class="barra">
            <div class="" id="js"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>node.js</p>
            <span class="porcentaje">70%</span>
        </div>

        <div class="barra">
            <div class="" id="nodejs"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>vue.js</p>
            <span class="porcentaje">70%</span>
        </div>

        <div class="barra">
            <div class="" id="vuejs"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>php</p>
            <span class="porcentaje">100%</span>
        </div>

        <div class="barra">
            <div class="" id="php"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>Laravel</p>
            <span class="porcentaje">80%</span>
        </div>

        <div class="barra">
            <div class="" id="laravel"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>Api Rest</p>
            <span class="porcentaje">80%</span>
        </div>

        <div class="barra">
            <div class="" id="api"></div>
        </div>
    </div>
    <div class="skill">
        <div class="info">
            <p> <span class="lista"> </span>Bases de Datos</p>
            <span class="porcentaje">80%</span>
        </div>

        <div class="barra">
            <div class="" id="bd"></div>
        </div>
    </div>
</div>

<!-- SECCION PORTAFOLIO -->
<section id="portfolio">
    <h3 class="titulo-seccion">Mis Proyectos</h3>
    <div class="fila">
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto1.jpg" alt="">
            <div class="info">
                <h3>Descripcion Proyecto</h3>
                <p>
                    Sistema gestor de empresas de transporte municipal. Desarrollado con PHP orientado a objetos(POO),mvc, bootstrap, ajax, mysql. (En construcción)
                </p>
                <a href="https://softrans.sandorluqueweb.com/" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto2.jpg" alt="">
            <div class="info">
                <h3>Descripcion Proyecto</h3>
                <p>
                    Sistema tienda en línea. Desarrollado con PHP orientado a objetos(POO),mvc, bootstrap, ajax, mysql.
                </p>
                <!-- <a href="https://onlinestorewebtest.000webhostapp.com/" target="_blank">Ver más</a> -->
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto3.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>
                    Sistema facturador en línea. Desarrollado con PHP orientado a objetos(POO),mvc, bootstrap, ajax, mysql.
                </p>
                <a href="https://facturadorslf.sandorluqueweb.com/login" target="_blank">Ver más</a>
            </div>
        </div>
    </div>
    <div class="fila">
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto4.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>Página web plana hecha en HTML, CSS, JS, conexión a api privada</p>
                <a href="https://business.savingtheamazon.org/" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto5.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>Página desarrollada con wordpress con tienda shopify, google analytics, Jquery y php puro</p>
                <a href="https://rappi.savingtheamazon.org/" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto6.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>Página web plana hecha en HTML, CSS, JS, conexión a api privada </p>
                <a href="https://tarjetaamazonia.com/" target="_blank">Ver más</a>
            </div>
        </div>
    </div>
    <div class="fila">
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto7.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>
                <p>Página desarrollada con shopify, html, css3, js puro, jquery, google analytics, Jquery y php puro</p>
                </p>
                <a href="https://savingtheamazon.org/" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto8.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>Este proyecto es un ejemplo de una aplicación CRUD que utiliza Vue.js desde un CDN en el frontend, PHP en el backend y MySQL con PDO para administrar una base de datos.</p>
                <a href="https://github.com/sanditor/crud_vue_php_msql_PDO" target="_blank">Ver GitHub</a>
            </div>
        </div>
        <div class="proyecto">
            <div class="overlay"></div>
            <img class="img-galeria" src="<?= media() ?>/portafolio/img/proyecto9.jpg" alt="">
            <div class="info">
                <h4>Descripcion Proyecto</h4>
                <p>Aplicación web parecida a instagram, desarrollada con laravel 5.6, mysql, bootstrap, jquery.</p>
                <a href="https://github.com/sanditor/Photovel.git" target="_blank">Ver GitHub</a>
            </div>
        </div>
    </div>
</section>
<div class="imagen-light">
    <img src="<?= media() ?>/portafolio/img/close.svg" alt="" class="close">
    <img src="" alt="" class="agregar-imagen">
</div>

<!-- SECCTION C O N T A C T O -->
<section id="contacto">
    <div class="contenedor-form">
        <h3 class="titulo-seccion">Contactame ahora</h3>
        <form id="frmContacto" action="" method="POST">
            <div class="form-control fila">
                <input type="text" id="txtNombreContacto" name="txtNombreContacto" placeholder="Nombre Completo *" class="input-full">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control fila">
                <input type="email" id="txtEmailContacto" name="txtEmailContacto" placeholder="Dirección de Email" class="input-full">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control fila">
                <input type="text" id="txtTemaContacto" name="txtTemaContacto" placeholder="Tema..." class="input-full">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control fila">
                <textarea id="txtMensajeContacto" name="txtMensajeContacto" cols="30" rows="10" placeholder="Tu Mensaje..." class="input-full"></textarea>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <input type="submit" value="Enviar Mensaje" class="btn-enviar">
        </form>
    </div>
    <div class="contacto-info">
        <h4>Más Información</h4>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> Calle 167 # 58B-96, casa 12</li>
            <li><i class="fas fa-phone"></i> +57 312 4769266</li>
            <li><i class="fas fa-envelope-open-text"></i> contacto@sandorluqueweb.com</li>
        </ul>
        <p>No te preocupes cotiza que nosotros te lo programamos a nivel web y desarrollo a medida<br><br>
            <b>portafolio.sandorluqueweb.com</b>
        </p>

    </div>
</section>

<?php footerPortafolio($data) ?>