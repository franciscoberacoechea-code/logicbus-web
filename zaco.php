<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaco | Robot barredora y aspiradora industrial - Logicbus</title>
    <meta name="description"
        content="ZACO es una marca internacional de robótica de limpieza especializada en robots barredora y aspiradora para suelos comerciales e industriales. Logicbus es distribuidor oficial en México, ofreciendo equipos con autonomía, eficiencia energética y navegación inteligente para grandes superficies.">
    <meta name="keywords"
        content="ZACO, Logicbus, distribuidor ZACO México, robot aspirador industrial, robot barredora comercial, limpieza automática, aspiradora para suelos industriales, robots de limpieza profesional, navegación inteligente, limpieza de almacenes, limpieza de fábricas, robótica de limpieza">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <!--- HEAD DE Página-->
    <?php echo $css_bundle; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <style>
        .product-gallery {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .main-image-container {
            margin-bottom: 15px;
            border: 1px solid #eee;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
        }

        .main-product-image {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            display: block;
        }

        .thumbnail-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 5px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: contain;
            cursor: pointer;
            padding: 3px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            margin-top: 5px;
        }

        .thumbnail:hover {
            border-color: #888;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .thumbnail.active {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Zaco</li>
            </ol>
        </nav>
    </div>
    <div class="mb-5">
        <video autoplay="" muted="" loop="" width="100%"
            poster="https://www.logicbus.com.mx/assets/videos/banner-zaco.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/banner-zaco.mp4" type="video/mp4">
        </video>
    </div>

    <section class="container text-center my-5">
        <h2 class="title blue mb-5">Robot barredora y aspiradora industrial para suelos comerciales
        </h2>
        <p class="text-dark font-weight-bold">En Logicbus somos distribuidores oficiales en México de ZACO, marca
            reconocida internacionalmente por su innovación en robótica de limpieza. Su modelo insignia, el ZACO X1000,
            es un robot barredora y aspiradora diseñado para suelos comerciales e industriales, ideal para grandes
            superficies como almacenes, fábricas, oficinas y espacios públicos.
            <br> <br>
            El ZACO X1000 combina tecnología avanzada, autonomía y eficiencia energética para ofrecer una limpieza
            profunda y constante en entornos de alto tráfico. Gracias a su capacidad de navegación inteligente y alto
            rendimiento, reduce costos de mantenimiento y optimiza el tiempo de operación, asegurando espacios más
            limpios, seguros y productivos.
            <br> <br>
            Con ZACO en México, Logicbus acerca soluciones de limpieza robótica profesional que apoyan la automatización
            y la transformación digital en la industria, garantizando calidad, confiabilidad y soporte especializado.
        </p>
        <div class="d-flex flex-wrap justify-content-center my-5">
            <a class="button-text" href="https://tienda.logicbus.com.mx/zaco" target="_blank"><button
                    class="button button-white">Ver en Tienda</button></a>
            <a class="button-text" href="#producto"><button class="button button-white">Producto</button></a>
            <a class="button-text" href="#videos"><button class="button button-white">Vídeo</button></a>
            <a class="button-text" href="#catalogos"><button class="button button-white">Catálogos</button></a>
        </div>
    </section>

    <section class="container" id="producto">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text mx-3 py-3 rounded-pill">PRODUCTO</h2>
        </div>
        <div class="d-grid flex-wrap justify-content-around pt-5">
            <div class="row">
                <div class="col mb-5">
                    <div class="product-gallery">
                        <div class="main-image-container">
                            <img id="mainProductImage" src="https://www.logicbus.com.mx/imagenes/346/1_ZACO_X1000.webp"
                                alt="Producto Principal" class="main-product-image">
                        </div>
                        <div class="thumbnail-container">
                            <img src="https://www.logicbus.com.mx/imagenes/346/1_ZACO_X1000.webp" alt="Miniatura 1"
                                class="thumbnail active" onclick="changeMainImage(this)">
                            <img src="https://www.logicbus.com.mx/imagenes/346/2_ZACO_X1000.webp" alt="Miniatura 2"
                                class="thumbnail" onclick="changeMainImage(this)">
                            <img src="https://www.logicbus.com.mx/imagenes/346/3_ZACO_X1000.webp" alt="Miniatura 3"
                                class="thumbnail" onclick="changeMainImage(this)">
                            <img src="https://www.logicbus.com.mx/imagenes/346/4_ZACO_X1000.webp" alt="Miniatura 4"
                                class="thumbnail" onclick="changeMainImage(this)">
                            <img src="https://www.logicbus.com.mx/imagenes/346/5_ZACO_X1000.webp" alt="Miniatura 5"
                                class="thumbnail" onclick="changeMainImage(this)">
                            <img src="https://www.logicbus.com.mx/imagenes/346/6_ZACO_X1000.webp" alt="Miniatura 6"
                                class="thumbnail" onclick="changeMainImage(this)">
                        </div>
                        <a class="button button-circle-orange position-absolute"
                            href="https://tienda.logicbus.com.mx/Zaco" role="button"
                            style="left: 50%; transform: translateX(-50%);">
                            Ver más
                        </a>
                    </div>

                </div>
                <div class="col paragraph mt-4">
                    <h3 class="subtitle mb-5">ZACO X1000 el robot aspirador para zonas comerciales</h3>
                    <p>ZACO X1000 - EL robot aspirador y su respuesta a las necesidades de
                        limpieza profesional en
                        entornos comerciales. Ofrece una integración perfecta en los procesos de limpieza existentes,
                        aliviando a sus empleados y optimizando sus procesos operativos. Con un impresionante
                        rendimiento de superficie de hasta 1.000 m² y una potencia de aspiración de 20.000 PA, establece
                        estándares en términos de limpieza e higiene.
                    </p>
                    <p>Con su avanzado sistema LDS, la ZACO X1000 escanea su área de trabajo y crea
                        mapas precisos para
                        garantizar una limpieza específica y eficaz. Al crear espacios higiénicos, la X1000 ayuda a
                        aumentar la satisfacción de los empleados y de los clientes en igual medida.
                    </p>
                    <ul>
                        <li>Limpieza rápida de 700m²-1000m² de superficie por ciclo de limpieza
                        </li>
                        <li>Potencia de aspiración ultrarrápida de hasta 20.000 Pa
                        </li>
                        <li>Navegación precisa gracias a los innovadores láseres de líneas cruzadas, LDS y tecnología de
                            sensores ToF para una cartografía precisa mediante IA
                        </li>
                        <li>Detección de obstáculos mediante tecnología de sensores de última generación
                        </li>
                        <li>Eficaz sistema de separación con sistema ciclónico de 2 etapas que separa el polvo y la
                            suciedad
                        </li>
                        <li>El filtro HEPA13 elimina el 99,95% de las partículas suspendidas en el aire
                        </li>
                        <li>Manejo sencillo e intuitivo directamente en la pantalla táctil de 5 pulgadas del dispositivo
                            o cómodamente a través de la app
                        </li>
                        <li>Soporte de software garantizado: al menos 5 años
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="videos">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text mx-3 py-3 rounded-pill">VIDEOS</h2>
        </div>
        <div class="row align-items-center justify-content-center">
            <iframe width="50%" height="300" src="https://www.youtube.com/embed/_5lwQPXLkIs?si=H5dygWGSyIRnlkG1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </section>

    <section class="container-fluid py-5" id="catalogos">
        <div class="container my-5">
            <div class="my-5">
                <h2 class="subtitle text-center orange-text mx-3 py-3 rounded-pill">CATÁLOGOS</h2>
            </div>
            <div class="d-flex direction-row justify-content-around">
                <div class="d-flex justify-content-around">
                    <a href=" https://www.logicbus.com.mx/pdf/346/Zarco-x1000-brochure.pdf" target="_blank"><img
                            src="https://www.logicbus.com.mx/pdf/346/Zarco-x1000-brochure.webp"
                            class="imgBorde img250"></a>
                </div>
                <div class="d-flex justify-content-around">
                    <a href=" https://www.logicbus.com.mx/pdf/346/Zaco-X1000.pdf" target="_blank"><img
                            src="https://www.logicbus.com.mx/pdf/346/Zaco-X1000.webp" class="imgBorde img250"></a>
                </div>
            </div>
        </div>
    </section>
    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿NECESITAS MÁS INFORMACIÓN SOBRE ZACO?</h2>
            <span class="paragraph white">¡Dejanos ayudarte, estamos aquí para ayudarte a encontrar las mejores
                soluciones
                para su proyecto!</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var videoContainers = document.querySelectorAll('.video-container-youtube');

            videoContainers.forEach(function (container) {
                container.addEventListener('click', function () {
                    var videoId = this.dataset.videoId;

                    var iframe = document.createElement('iframe');
                    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
                        '?autoplay=1&rel=0');
                    iframe.setAttribute('title', 'YouTube video player');
                    iframe.setAttribute('allow',
                        'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
                    );
                    iframe.setAttribute('allowfullscreen', '');

                    this.innerHTML = '';
                    this.appendChild(iframe);
                });
            });
        });
    </script>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <script>
        function changeMainImage(thumbnail) {
            const mainImage = document.getElementById('mainProductImage');
            mainImage.src = thumbnail.src;

            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbnail.classList.add('active');
        }
    </script>

</body>

<?php echo $var_footer; ?>

</html>