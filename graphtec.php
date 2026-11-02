<?php
ob_start();
require("admin/config.php");
include("libreria/libreria.php");
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Graphtec | Registradores de datos portátiles</title>
    <meta name="description"
        content="Graphtec ofrece registradores gráficos y graficadores de datos de alto rendimiento con memoria integrada, conectividad inalámbrica y funciones avanzadas como alarmas, reportes automáticos y monitoreo remoto. Logicbus es distribuidor autorizado en México.">
    <meta name="keywords"
        content="Graphtec, Logicbus, registrador gráfico, graficador de datos, data logger, registrador portátil, GL100, GL240, GL840, monitoreo remoto, adquisición de datos, LAN inalámbrica, registrador multicanal, automatización industrial, registrador de temperatura, registrador de humedad, registrador de presión">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>
        /* Barra */
        #leftBar {
            display: none;
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

        .btn-wsp {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 0 !important;
            text-decoration: none !important;
        }

        .btn-wsp .icono {
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
            display: block !important;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3" id="subir">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Graphtec America Inc.</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/banner-graphtec.webp"
            alt="Instrumentos de adquisición y registro de datos GRAPHTEC" title="GRAPHTEC" style="width: 100%;">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Instrumentos de adquisición y
            registro de datos</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">GRAPHTEC</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <p class="intro-text text-justify" style="max-width: 100%;">
                    Los registradores gráficos o graficadores están cambiando más rápido que nunca; la capacidad de
                    memoria de los mismos aumenta considerablemente y los dispositivos están cambiando hacia sistemas
                    complejos con alarmas, comunicación inalámbrica, reporte automático de eventos vía correo
                    electrónico y descarga automática de los resultados.
                </p>
                <p class="intro-text text-justify" style="max-width: 100%;">
                    Nuestros dispositivos son, de manera implícita, independientes con memoria integrada que se utiliza
                    para almacenar los datos de señal adquiridos. Es un complejo de instrumentos multicanal que admite
                    el registro desatendido para el análisis de señales del mundo real.
                </p>
                <p class="intro-text text-justify" style="max-width: 100%;">
                    Los registradores de datos le permiten acceder a las comunicaciones inalámbricas para el análisis de
                    eventos, informe automático de alarmas y control remoto a través de LAN. Con una página web interna,
                    FTP y alertas por email, los datos grabados ayudan a facilitar un análisis significativo y una
                    solución rápida.
                </p>
            </div>
            <div class="col-md-5 text-center mt-4 mt-md-0">
                <a href="https://tienda.logicbus.com.mx/graficadores.html" target="_blank">
                    <img loading="lazy" src="images/app/graphtec-diagrama.webp"
                        class="img-fluid rounded shadow-sm border p-2 bg-white"
                        alt="Diagrama Graficador de Datos Graphtec">
                </a>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/Graphtec-America-Inc_bymfg_146-7-1.html"
            target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#manuales">Manuales</a>
    </nav>

    <h2 class="section-title mt-5" id="productos">Productos</h2>
    <div class="container mb-5">
        <div class="products-grid" style="max-width: 800px; margin: 0 auto;">

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Portatiles_c_2616.html" target="_blank">
                    <img loading="lazy"
                        src="images/categorias/2022/adquisicion-registro-datos/registrador-de-datos-portatil.webp"
                        alt="Registrador de datos portátil">
                </a>
                <h4 class="mt-3">Registrador de Datos Portátil</h4>
                <p class="small text-muted text-justify flex-grow-1">La serie de registradores de datos multicanal capaz
                    de reducir su ciclo de inicio de prueba. Ejecutan hasta 200 canales por unidad para diversas
                    aplicaciones que involucran temperatura, humedad, presión y más.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Portatiles_c_2616.html"
                    target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Registrador-Compacto_c_3676.html" target="_blank">
                    <img loading="lazy"
                        src="images/categorias/2022/adquisicion-registro-datos/registrador-de-datos-compacto.webp"
                        alt="Registrador de datos compacto">
                </a>
                <h4 class="mt-3">Registrador de Datos Compacto</h4>
                <p class="small text-muted text-justify flex-grow-1">El GL100 es un nuevo registrador portátil compacto.
                    Su cuerpo con entrada universal permite cambiar sensores. Incluye modelos con LAN inalámbrica
                    (GL100-WL), pantalla retroiluminada y almacenamiento Micro SD.</p>
                <a class="btn-circle mt-auto mx-auto"
                    href="https://tienda.logicbus.com.mx/Registrador-Compacto_c_3676.html" target="_blank">Ver
                    modelos</a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="https://www.logicbus.com.mx/assets/PDF/catalogos/Catalog-Graphtec-ENG.pdf" target="_blank"
            class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="assets/images/catalogos/catalogo-graphtec-product-guide.webp"
                alt="Catálogo Graphtec Product Guide">
            <h4>Catálogo Graphtec Product Guide</h4>
        </a>
    </div>

    <h2 class="section-title mt-5" id="manuales">Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=Graphtec+America+Inc&tagArray%5B%5D=graphtec+america+inc."
            class="ghost-manual-box" style="text-decoration: none;">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación"
                style="width: 150px; margin-bottom: 15px;">
            <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver
                Documentación Oficial</span>
        </a>
    </div>

    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list mb-4">

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/que-se-puede-hacer-con-la-opcion-de-lan-inalambrica/"
                    target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/lan-inalambrica.webp"
                        alt="Graphtec Lan inalámbrica">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/que-se-puede-hacer-con-la-opcion-de-lan-inalambrica/"
                    target="_blank" style="text-decoration: none;">
                    <h3>¿Qué se puede hacer con la opción de LAN inalámbrica?</h3>
                </a>
                <p>¿Sabías que la opción de WLAN permite la comunicación inalámbrica con otro dispositivo? Esta se
                    conecta a la unidad inalámbrica GL100-WL de forma remota.</p>
                <div class="btn-container">
                    <a class="btn-circle"
                        href="https://www.logicbus.com.mx/blog/que-se-puede-hacer-con-la-opcion-de-lan-inalambrica/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/registrador-grafico-grafica-automaticamente/" target="_blank">
                    <img loading="lazy" src="images/articulos-portadas/registrador-grafico.webp" alt="Graficadores">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/registrador-grafico-grafica-automaticamente/" target="_blank"
                    style="text-decoration: none;">
                    <h3>No solo registres datos o señales, Gráfica automáticamente</h3>
                </a>
                <p>¿Sabes lo que es un registrador gráfico o graficador? Te contamos… es un instrumento usado para
                    registrar de manera eficiente diversos procesos y señales.</p>
                <div class="btn-container">
                    <a class="btn-circle"
                        href="https://www.logicbus.com.mx/blog/registrador-grafico-grafica-automaticamente/"
                        target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>
    <div class="text-center mb-5">
        <a class="btn-circle d-inline-block" href="https://www.logicbus.com.mx/blog/?tag=Graphtec+America+Inc"
            target="_blank" style="width: auto; padding: 10px 30px;">Ver todos los artículos</a>
    </div>

    <h2 class="section-title mt-5" id="videos">Videos</h2>
    <div class="container mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="-NBptDy5lk8">
                    <img loading="lazy" src="https://img.youtube.com/vi/-NBptDy5lk8/hqdefault.jpg" alt="Review GL240">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="RU7ryXzeDfY">
                    <img loading="lazy" src="https://img.youtube.com/vi/RU7ryXzeDfY/hqdefault.jpg"
                        alt="UNBOXING DATA LOGGER">
                    <div class="play-button"></div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="video-container" data-video-id="DIQPLTius7M">
                    <img loading="lazy" src="https://img.youtube.com/vi/DIQPLTius7M/hqdefault.jpg"
                        alt="Registradores de Datos Portátiles">
                    <div class="play-button"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE
                GRAPHTEC?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí
                para encontrar el mejor equipo de adquisición y registro de datos para tu proyecto.</span>
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
                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                    iframe.setAttribute('allowfullscreen', '');

                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>