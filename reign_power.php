<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reign Power | Fuentes de Poder | Alta Eficiencia y Diseño Compacto</title>
    <meta name="description"
        content="Fuentes de Alimentación Conmutadas de Alta Eficiencia – Compactas, RoHS, para Riel DIN, Bajo Costo">
    <meta name="keywords" content="Logicbus, Fuentes de Poder, Reign Power, Automatización, Electrónica">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php
    echo $favicon;
    echo $boostrap_css;
    echo $own_file_css;
    if (!empty($subcategorias)) echo $subcategorias;
    if (!empty($menu)) echo $menu;
    if (!empty($estilos)) echo $estilos;
    if (!empty($footer_css)) echo $footer_css;
    if (!empty($flickity_css)) echo $flickity_css;
    echo $google_analytics;
    if (!empty($var_headers)) echo $var_headers;
    ?>

    <style>
        /* Barra */
        #leftBar {
            display: none;
        }

        /* Scroll */
        body,
        html {
            overflow-x: hidden;
            max-width: 100%;
        }

        /* Videos */
        .video-container {
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            padding-top: 56.25%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #000;
            width: 100%;
        }

        /* Imagen */
        .video-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        /* Iframe */
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Boton */
        .video-container .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Triangulo */
        .video-container .play-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 12px 0 12px 20px;
            border-color: transparent transparent transparent white;
        }

        /* Hover */
        @media (hover: hover) {
            .video-container:hover img {
                opacity: 1;
            }

            .video-container:hover .play-button {
                background-color: var(--lb-accent);
                transform: translate(-50%, -50%) scale(1.1);
            }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reign Power</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-REIGN-POWER-MZ23.webp" alt="Banner Reign Power"
            title="Reign Power" style="width: 100%;">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Alta Eficiencia y Diseño
            Compacto</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">REIGN
            POWER</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-7">
                <p class="intro-text text-justify">
                    <strong>Reign Power Co. Ltd.</strong> se ha centrado, desde 1990, en el inventario de fuentes de
                    alimentación conmutadas, junto con tecnología de punta para garantizar que los clientes tengan
                    satisfacción y generar mayor reconocimiento en el mercado.
                </p>
                <p class="intro-text text-justify">
                    Logicbus, como distribuidor autorizado, trae la mejor tecnología a bajo costo desde China para su
                    distribución a nivel nacional e internacional.
                </p>
            </div>
            <div class="col-12 col-md-5 text-center mt-4 mt-md-0">
                <a href="https://tienda.logicbus.com.mx/Reign-Power_c_2834.html" target="_blank">
                    <img loading="lazy" src="imagenes/240/reignpower-venta.webp" alt="Reign Power General"
                        class="img-fluid rounded shadow-sm border p-2 bg-white" style="max-width: 80%;">
                </a>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/Reign-Power_bymfg_129-0-1.html" target="_blank">Ver
            en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#documentacion">Catálogos</a>
        <a class="btn-circle" href="#videos">Videos</a>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Con Reign Power encontrarás:</h4>
                    <ul class="text-muted mt-3 small pl-3">
                        <li>Una gran variedad de rangos de voltaje/corriente para diferentes tipos de aplicaciones.</li>
                        <li>Diseño compacto con montaje en riel DIN.</li>
                        <li>Opción en RoHS.</li>
                        <li>Equipos de bajo costo.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Beneficios clave:</h4>
                    <ul class="text-muted mt-3 small pl-3">
                        <li><strong>Fácil instalación:</strong> Puesta en marcha muy sencilla y rápida.</li>
                        <li><strong>Alta eficiencia:</strong> Diseño innovador que alcanza valores de eficiencia arriba
                            del 95%.</li>
                        <li><strong>No genera ruido:</strong> Refrigeración por convección (flujo natural de aire).</li>
                        <li><strong>Instalaciones limpias:</strong> Menor generación de calor permite un diseño estético
                            y compacto.</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="bg-light p-4 rounded shadow-sm border h-100">
                    <h4 style="color: var(--lb-primary); font-weight: bold;">Industrias aplicables:</h4>
                    <ul class="text-muted mt-3 small pl-3">
                        <li>Industria de automatización y control</li>
                        <li>Luz industrial</li>
                        <li>Instrumentación</li>
                        <li>Control de procesos</li>
                        <li>Integración de tableros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title mt-5" id="productos">Línea de Productos</h2>
    <div class="container mb-5">
        <div class="products-grid" style="max-width: 400px; margin: 0 auto;">

            <div class="product-card">
                <a href="power_supply" target="_blank">
                    <img loading="lazy" src="images/categorias/2022/fuentes-de-poder/fuentes-de-poder.webp"
                        alt="Fuentes de poder fijas de montaje en riel DIN">
                </a>
                <h4 class="mt-3">Fuentes de poder de montaje en riel DIN</h4>
                <p class="small text-muted text-justify flex-grow-1">Fuente de poder de AC a DC. Montaje en riel DIN o
                    con tornillos, voltaje de entrada seleccionable y display indicador del voltaje de salida.</p>
                <div class="d-flex justify-content-center gap-2 mt-auto">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Fuentes-de-Poder_c_2802.html"
                        target="_blank" style="background-color: var(--lb-primary);"><i class="fa fa-shopping-cart"></i>
                        Comprar</a>
                </div>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list mb-5">

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/por-que-elegir-los-modulos-de-alimentacion-ac-cc-reign-power-opcionales/"
                    target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/Reign-power-ac-cc.webp"
                        alt="Módulos de alimentación AC-CC">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/por-que-elegir-los-modulos-de-alimentacion-ac-cc-reign-power-opcionales/"
                    target="_blank" style="text-decoration: none;">
                    <h3>¿Por qué elegir los módulos de alimentación AC-CC Reign Power?</h3>
                </a>
                <p>En el mercado, los módulos de potencia son casi todos AC a DC. Los módulos de alimentación de CA a CC
                    de Logicbus pueden reemplazar transformadores y adaptadores convencionales.</p>
                <div class="btn-container">
                    <a class="btn-circle"
                        href="https://www.logicbus.com.mx/blog/por-que-elegir-los-modulos-de-alimentacion-ac-cc-reign-power-opcionales/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>

    <h2 class="section-title mt-5 bg-transparent" id="documentacion">Documentación y Catálogos</h2>
    <div class="container mb-5 pb-4">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 d-flex justify-content-center">
                <div class="catalog-wrap m-0">
                    <a href="https://tienda.logicbus.com.mx/assets/PDF/catalogos/Catalog-Reign-Power-Logicbus.pdf"
                        target="_blank" class="catalog-item">
                        <span class="pdf-badge">PDF</span>
                        <img loading="lazy" src="assets/PDF/catalogos/Portada-Reign-Power-Logicbus.webp"
                            alt="Catálogo Reign Power">
                        <h4>Catálogo de Productos Reign Power</h4>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center d-flex justify-content-center">
                <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=reign+power"
                    class="ghost-manual-box" style="text-decoration: none;">
                    <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación"
                        style="width: 150px; margin-bottom: 15px;">
                    <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver
                        Manuales Oficiales</span>
                </a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="video-container" data-video-id="buETCMm6sFU">
                    <img loading="lazy" src="https://img.youtube.com/vi/buETCMm6sFU/hqdefault.jpg"
                        alt="Video Reign Power 1">
                    <div class="play-button"></div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="video-container" data-video-id="lfIYfuDau-0">
                    <img loading="lazy" src="https://img.youtube.com/vi/lfIYfuDau-0/hqdefault.jpg"
                        alt="Video Reign Power 2">
                    <div class="play-button"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px; text-transform: uppercase;">¿NECESITAS
                MÁS INFORMACIÓN SOBRE REIGN POWER?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarle a
                encontrar la fuente de poder ideal y de alta eficiencia para su proyecto.</span>
        </div>

        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0"
                    allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
        // JAVASCRIPT PARA CARGAR VIDEOS DE YOUTUBE AL HACER CLIC
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;
                    if (videoId) {
                        var iframe = document.createElement('iframe');
                        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                        iframe.setAttribute('title', 'YouTube video player');
                        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                        iframe.setAttribute('allowfullscreen', '');

                        this.innerHTML = '';
                        this.appendChild(iframe);
                    }
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>