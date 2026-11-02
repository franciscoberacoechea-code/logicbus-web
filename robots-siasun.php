<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.youtube.com">
    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="preconnect" href="https://use.fontawesome.com" crossorigin>

    <link rel="preload" as="image" href="images/banner/www/PorMarca/banner-siasun.webp">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-1007518778');
    </script>

    <title>Robots Colaborativos SIASUN | Logicbus</title>
    <meta name="description"
        content="El robot colaborativo SIASUN, con su alta flexibilidad, precisión y seguridad, abrirá una nueva forma de producción industrial.">
    <meta name="keywords"
        content="Robot, brazo robotico, cobot, automation, robotica, automatizacion, universal robots, robotica industrial, siasun, robot colaborativo, colaborative robot">
    <link rel="canonical" href="https://www.logicbus.com.mx/robots-siasun" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div id="main">
        <h1 class="sr-only">Robots Colaborativos SIASUN</h1>

        <div class="gridContArriba">
            <div class="griditemContA">
                <?php menucategorias(); ?>
            </div>

            <div class="griditemContA" id="subir">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item"><a href="robots-colaborativos">Robots Colaborativos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Siasun</li>
                    </ol>
                </nav>

                <div class="">
                    <img fetchpriority="high" src="images/banner/www/PorMarca/banner-siasun.webp"
                        alt="Robots Colaborativos SIASUN" title="Robots Colaborativos SIASUN" width="1200" height="400"
                        style="width: 100%; height: auto;">
                </div>
                <br>

                <p style="text-align: justify;">
                    SIASUN es una empresa de alta tecnología que pertenece a la Academia de Ciencias de China, que toma
                    como base la tecnología robótica y se centra en proporcionar productos y servicios inteligentes. Es
                    el líder del TOP 10 de empresas en la industria robótica china, quien tiene la línea de productos
                    robóticos más completa del mundo.
                    <br><br>
                    Como la base industrial de robots más grande de China, SIASUN se estableció en el año 2000. Su grupo
                    de oficinas centrales se localiza en Shenyang, las oficinas internacionales de oficinas centrales en
                    Shanghai y las oficinas centrales de finanzas se ubican en Beijing.
                </p>

                <div style="text-align: center;">
                    <nav class="navMenuSuper">
                        <ul>
                            <li><a href="https://tienda.logicbus.com.mx/siasun-cobots-logicbus" target="_blank"
                                    rel="noopener noreferrer">Ver en Tienda</a></li>
                            <li><a href="#modelos">Modelos</a></li>
                            <li><a href="#catalogos">Catálogos</a></li>
                            <li><a href="#videos">Videos</a></li>
                            <li><a href="#GuiasyManuales">Guias y Manuales</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="gridContAbajo">
            <div class="griditemContB">
                <div class="">
                    <p style="text-align: justify;">
                        Con parques industriales establecidos en Shenyang, Shanghai, Hangzhou y Qingdao, SIASUN ha
                        completado su red nacional de R&D y servicio, que cubre seis importantes regiones de China.
                        <br><br>
                        Mientras tanto, SIASUN comenzó a explorar que las sucursales del mercado global están
                        configuradas en China, Hong Kong y Singapur. Todo el grupo tiene más de 4,000 talentos en R&D, y
                        ha formado una cadena de valor industrial que consiste en tecnologías centrales, componentes
                        principales, productos líderes y soluciones de la industria. En la actualidad, el valor de
                        mercado de SIASUN es el tercero en la industria robótica a nivel mundial, que tiene la tasa de
                        crecimiento más rápida.
                    </p>
                    <p>El <strong>robot colaborativo SIASUN</strong>, con su alta flexibilidad, precisión y seguridad,
                        abrirá una nueva forma de producción industrial:</p>
                    <ul>
                        <li>Tiene capacidad de detección de colisiones, no requiere perímetro de seguridad.</li>
                        <li>Enseñanza con demostración de guiado a mano, fácil de programar para diferentes tareas.</li>
                        <li>Diseño redundante de DOF, para evitar obstáculos de manera flexible.</li>
                        <li>Conveniente desmontaje, rápida configuración.</li>
                        <li>Diseño ligero, ahorro de energía y respetuoso con el medio ambiente.</li>
                        <li>Sistema de guía visual opcional.</li>
                    </ul>
                </div>
            </div>

            <div class="griditemContB">
                <div style="text-align: center;">
                    <div class="griditemContC">
                        <div class="cardArticulos borange">
                            <h2 class="sr-only">Blog</h2>
                            <div style="text-align: center;">
                                <a href="https://www.logicbus.com.mx/blog/robots-industriales-vs-robots-colaborativos/"
                                    target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" class="imgBorde"
                                        src="images/articulos-portadas/robot-colaborativo-siasun.webp" width="400"
                                        height="300" style="width: 100%; height: auto;"
                                        alt="Portada Robots industriales vs Robots colaborativos">
                                </a>
                            </div>
                            <div class="">
                                <a href="https://www.logicbus.com.mx/blog/robots-industriales-vs-robots-colaborativos/"
                                    target="_blank" rel="noopener noreferrer">
                                    <h3 class="TituloArticulo">Robots Industriales vs Robots colaborativos</h3>
                                </a>
                                <div class="DesArticulo" style="text-align: justify;">
                                    Los robots colaborativos son la clave para el crecimiento de la industria 4.0 por
                                    brindar la solución perfecta a los problemas complejos que pueden presentarse en el
                                    ámbito industrial.
                                    <div style="text-align: center; margin-top: 10px;">
                                        <a href="https://www.logicbus.com.mx/blog/robots-industriales-vs-robots-colaborativos/"
                                            class="btnVerMas" target="_blank" rel="noopener noreferrer">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="modelos">
            <div class="griditemContB">
                <div class="divCentrado d-flex justify-content-center">
                    <div class="seccion">
                        <div class="col-center text-center">
                            <h2><span>Modelos</span></h2>
                        </div>
                    </div>
                </div>

                <div class="gridContMitad">
                    <div class="griditemContA" style="text-align: center;">
                        <div class="cardH gridContCard">
                            <div class="cardH-preview griditemCardA">
                                <a href="Cobot-SCR3">
                                    <img loading="lazy"
                                        src="imagenes/productos/cobots/robots-colaborativos-SIASUN/Cobot-SCR3-2.webp"
                                        alt="Robots Colaborativos SIASUN - Cobot-SCR3"
                                        title="Robots Colaborativos SIASUN - Cobot-SCR3" width="250" height="250"
                                        style="width: 80%; height: auto;">
                                </a>
                            </div>
                            <div class="cardH-info griditemCardA">
                                <a href="Cobot-SCR3">
                                    <p class="subTitulo">Cobot-SCR3</p>
                                </a>
                                <p style="text-align: justify;">Cobot-SCR3 es el robot antropomórfico de 7 grados de
                                    libertad con configuración rápida, enseñanza de tracción, guía visual y detección de
                                    colisiones.</p>
                                <a href="https://tienda.logicbus.com.mx/Cobot-SCR3_p_17463.html" title="Ir a Tienda"
                                    target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda"
                                        title="Ir a Tienda" class="carrito" width="30" height="28">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="cardH gridContCard">
                            <div class="cardH-preview griditemCardA">
                                <a href="DUCO-DSCR3">
                                    <img loading="lazy"
                                        src="imagenes/productos/cobots/robots-colaborativos-SIASUN/cobot-DUCO-DSCR3.webp"
                                        alt="Robots Colaborativos SIASUN - DUCO-DSCR3"
                                        title="Robots Colaborativos SIASUN - DUCO-DSCR3" width="250" height="250"
                                        style="width: 100%; height: auto;">
                                </a>
                            </div>
                            <div class="cardH-info griditemCardA">
                                <a href="DUCO-DSCR3">
                                    <p class="subTitulo">DUCO-DSCR3</p>
                                </a>
                                <p style="text-align: justify;">DUCO-SCR3 es el primer cobot de doble brazo en China. Se
                                    presenta con alta flexibilidad, seguridad extrema, evitación de obstáculos activa,
                                    despliegue rápido.</p>
                                <a href="https://tienda.logicbus.com.mx/DUCO-DSCR3_p_17464.html" title="Ir a Tienda"
                                    target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda"
                                        title="Ir a Tienda" class="carrito" width="30" height="28">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="griditemContA" style="text-align: center;">
                        <div class="cardH gridContCard">
                            <div class="cardH-preview griditemCardA">
                                <a href="DUCO-DSCR5">
                                    <img loading="lazy"
                                        src="imagenes/productos/cobots/robots-colaborativos-SIASUN/cobot-DUCO-DSCR5.webp"
                                        alt="Robots Colaborativos SIASUN - DUCO-DSCR5"
                                        title="Robots Colaborativos SIASUN - DUCO-DSCR5" width="250" height="250"
                                        style="width: 80%; height: auto;">
                                </a>
                            </div>
                            <div class="cardH-info griditemCardA">
                                <a href="DUCO-DSCR5">
                                    <p class="subTitulo">DUCO-DSCR5</p>
                                </a>
                                <p style="text-align: justify;">DUCO-SCR5 es el primer cobot de doble brazo en China. Se
                                    presenta con alta flexibilidad, seguridad extrema, evitación de obstáculos activa,
                                    despliegue rápido.</p>
                                <a href="https://tienda.logicbus.com.mx/DUCO-DSCR5_p_17461.html" title="Ir a Tienda"
                                    target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda"
                                        title="Ir a Tienda" class="carrito" width="30" height="28">
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="cardH gridContCard">
                            <div class="cardH-preview griditemCardA">
                                <a href="XCR20-1100">
                                    <img loading="lazy"
                                        src="imagenes/productos/cobots/robots-colaborativos-SIASUN/cobot-XCR20-1100.webp"
                                        alt="Robots Colaborativos SIASUN - XCR20-1100"
                                        title="Robots Colaborativos SIASUN - XCR20-1100" width="250" height="250"
                                        style="width: 100%; height: auto;">
                                </a>
                            </div>
                            <div class="cardH-info griditemCardA">
                                <a href="XCR20-1100">
                                    <p class="subTitulo">GCR20-1100</p>
                                </a>
                                <p style="text-align: justify;">SIASUN GCR20-1100 es el último producto Cobot de SIASUN
                                    con una carga útil de hasta 20KG, con ventajas como seguridad colaborativa, bajo
                                    consumo de energía.</p>
                                <a href="https://tienda.logicbus.com.mx/GCR20-1100_p_17472.html" title="Ir a Tienda"
                                    target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" src="images/shopping_cart.webp" alt="Ir a Tienda"
                                        title="Ir a Tienda" class="carrito" width="30" height="28">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="catalogos">
            <div class="griditemContB">
                <div class="divCentrado d-flex justify-content-center">
                    <div class="seccion">
                        <div class="col-center text-center">
                            <h2><span>Catálogos</span></h2>
                        </div>
                    </div>
                </div>

                <div class="gridContMitad">
                    <div class="griditemContB d-flex justify-content-center">
                        <div class="text-center">
                            <a href="pdf/catalogos/Robots-colaborativos.pdf" title="Ver archivo PDF" target="_blank"
                                rel="noopener noreferrer">
                                <img loading="lazy" class="imgBorde"
                                    src="pdf/catalogos/Robots-colaborativos.webp" alt="Ver archivo pdf"
                                    title="Ver archivo PDF" 
                                    style="width: 100%; max-width: 250px; height: 350px; object-fit: cover;">
                                <br>Ver Catálogo <br> Robots Colaborativos ESP
                            </a>
                        </div>
                    </div>
                    <div class="griditemContB d-flex justify-content-center">
                        <div class="text-center">
                            <a href="pdf/catalogos/Robots-Colaborativos-ENG.pdf" title="Ver archivo PDF" target="_blank"
                                rel="noopener noreferrer">
                                <img loading="lazy" class="imgBorde"
                                    src="pdf/catalogos/Robots-Colaborativos-ENG.webp" 
                                    style="width: 100%; max-width: 250px; height: 350px; object-fit: cover;" 
                                    alt="Ver archivo pdf" title="Ver archivo PDF">
                                <br>Ver Catálogo <br> Robots Colaborativos ENG
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="GuiasyManuales">
            <div class="griditemContB">
                <div class="divCentrado d-flex justify-content-center">
                    <div class="seccion">
                        <div class="col-center text-center">
                            <h2><span>Guias y Manuales</span></h2>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=siasun">
                        <div class="hoverchange">
                            <img loading="lazy" src="images/documentacion.svg" width="200" height="150"
                                style="width: 200px; height: auto;" class="mx-auto d-block" alt="img docs">
                            <div class="button button-circle-white d-flex"
                                style="display: inline-flex; justify-content: center; align-items: center;">
                                <b>Documentación</b>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        
        <section id="videos">
            <div class="griditemContB">
                <div class="divCentrado d-flex justify-content-center">
                    <div class="seccion">
                        <div class="col-center text-center">
                            <h2><span>Videos</span></h2>
                        </div>
                    </div>
                </div>
                <div class="griditemContB mx-auto d-block" style="max-width: 600px; width: 100%;">
                    <div class="video-container-youtube" data-video-id="Ri2WnyCWJ_M">
                        <img loading="lazy" src="https://img.youtube.com/vi/Ri2WnyCWJ_M/hqdefault.jpg"
                            alt="Video de Robots Colaborativos SIASUN" style="width:100%; border-radius:8px;">
                        <div class="play-button"></div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var videoContainers = document.querySelectorAll('.video-container-youtube');

    videoContainers.forEach(function(container) {
        container.addEventListener('click', function() {
            var videoId = this.dataset.videoId;

            var iframe = document.createElement('iframe');
            iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
                '?autoplay=1&rel=0');
            iframe.setAttribute('title', 'YouTube video player');
            iframe.setAttribute('allow',
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
            );
            iframe.setAttribute('allowfullscreen', '');
            // Ajustar el estilo del iframe para asegurar que ocupe todo el espacio
            iframe.style.width = "100%";
            iframe.style.height = "100%";
            iframe.style.minHeight = "350px"; 

            this.innerHTML = '';
            this.appendChild(iframe);
        });
    });
});
</script>

</html>