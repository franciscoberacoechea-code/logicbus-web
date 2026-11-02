<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teclados Industriales Uso Rudo | Alta Durabilidad | Logicbus</title>
    <meta name="description" content="Explora teclados industriales, médicos y resistentes a líquidos y polvo. Diseñados para entornos críticos, con opciones de montaje y conexión USB o PS/2.">
    <meta name="keywords" content="LogicBus, México, Mexico, Guadalajara, teclado industrial, teclados industriales, trackball, touchpad, Teclado de silicon, teclado metalico, teclado de cristal, teclado numerico, Teclado industrial en español, Teclado de cristal y aluminio, Mini teclado industrial de silicón, Mini teclado de acero inoxidable, robusto, Teclado de uso rudo, Teclado anti vandalismo, Teclados lavables">
    <link rel="canonical" href="https://www.logicbus.com.mx/teclados-industriales" />

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?> <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

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
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PCs y Comunicaciones Industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teclados industriales</li>
            </ol>
        </nav>
    </div>

    <div class="banner-container mb-5">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/BANNER-TECLADOS-INDUSTRIALES-MZ23.webp" alt="Teclados Logicbus" title="Teclados Logicbus" style="width: 100%;">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Alta Durabilidad y Resistencia</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">TECLADOS INDUSTRIALES</span>
    </h1>

    <div class="container mb-5">
        <p class="text-center font-weight-bold mb-4" style="color: var(--lb-primary); font-size: 1.2rem;">
            ¿Sabes qué teclado industrial elegir para el sector en el qué te encuentras?
        </p>
        <p class="intro-text text-justify">
            Nosotros tenemos la solución perfecta para todos los casos. Ofrecemos una gran variedad de teclados industriales: <strong>Teclados de acero inoxidable</strong>, ideales para montarse en kioscos o lugares con ambientes hostiles, ya que soportan golpes, derrame de líquidos o vandalismo, con layout en español o US, con o sin touchpad/trackball, interfaz USB y protección IP65 y NEMA4X.
        </p>
        <p class="intro-text text-justify">
            También contamos con <strong>Teclados de silicón</strong> 100% contra el agua y polvo, con carcasa de policarbonato ABS, teclado numérico y teclas de funciones. Así como teclados inalámbricos y de cristal de grado médico.
        </p>
        <p class="intro-text text-justify">
            Es importante considerar dónde emplearemos el teclado. Para espacios públicos la mejor opción es el acero inoxidable por su uso rudo; en entornos industriales deben ser reforzados, resistentes a los golpes, anti explosiones y a prueba de agua, polvo, suciedad, aceite y productos químicos.
        </p>

        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-5 text-center mb-4 mb-md-0">
                <a href="https://tienda.logicbus.com.mx/teclados-industriales.html" target="_blank">
                    <img loading="lazy" class="img-fluid rounded shadow-sm border" src="https://www.logicbus.com.mx/images/app/teclados-industriales.webp" alt="Teclado industrial con Trackball mouse" style="max-width: 90%;">
                </a>
            </div>
            <div class="col-12 col-md-5 text-center">
                <a href="pdf/catalogos/catalogo-logicbus-teclados-industriales.pdf" target="_blank">
                    <img loading="lazy" class="img-fluid rounded shadow-sm border" src="pdf/catalogos/catalogo-teclados-logicbus.webp" alt="Catálogo teclados Logicbus" style="max-width: 250px;">
                </a>
            </div>
        </div>
    </div>

    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/teclados-industriales.html" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="https://www.logicbus.com.mx/buscador-teclados" target="_blank" style="background-color: var(--lb-primary);">Buscador Avanzado</a>
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#videos">Videos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#documentacion">Catálogos</a>
    </nav>

    <div class="container my-5 text-center bg-light p-5 rounded border shadow-sm">
        <h3 style="color: var(--lb-primary); font-weight: bold;">¿Estás buscando un teclado único y diseñado específicamente para tu proyecto?</h3>
        <p class="text-muted text-justify mt-3 mb-4 mx-auto" style="max-width: 800px;">
            ¡Estás en el lugar correcto! Ofrecemos servicios de fabricación para OEMs y ODMs. Contáctanos con los detalles de tu proyecto y te proporcionaremos asesoramiento gratuito para encontrar la solución perfecta.
        </p>
        <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20sobre%20teclados%20OEM/ODM" target="_blank" class="btn-circle" style="display: inline-block; width: auto; padding: 10px 30px;"><i class="fa fa-whatsapp"></i> Solicitar Asesoría</a>
    </div>

    <h2 class="section-title mt-5" id="categorias">Categorías</h2>
    <div class="container mb-5">
        <div class="products-grid">
            
            <div class="product-card">
                <a href="https://www.logicbus.com.mx/teclados_industriales">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-metalicos.webp" alt="Teclados metálicos">
                </a>
                <h4 class="mt-3">Industriales Metálicos</h4>
                <p class="small text-muted text-justify flex-grow-1">Para escritorio o empotrables con layout en español o US, acero inoxidable, con o sin touchpad/trackball, protección IP65 y resistente al vandalismo.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.logicbus.com.mx/teclados_industriales">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/teclado-de-membrana-metlica.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-membrana.webp" alt="Teclado de membrana metálica">
                </a>
                <h4 class="mt-3">Membrana Metálica</h4>
                <p class="small text-muted text-justify flex-grow-1">Teclados de grado médico con protección IP66 y panel táctil. A prueba de polvo, impermeables, lavables y a prueba de vandalismo.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/teclado-de-membrana-metlica.html" target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/touchpad-mouse.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/touchpad-mouse.webp" alt="Touchpad Mouse">
                </a>
                <h4 class="mt-3">Touchpad Mouse</h4>
                <p class="small text-muted text-justify flex-grow-1">Touchpads metálicos de grado industrial con interfaces USB, modelos integrados con teclado numérico o módulos independientes.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/touchpad-mouse.html" target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/teclado-de-funcin-metlico.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-funcion.webp" alt="Teclado de funcion metálico">
                </a>
                <h4 class="mt-3">Función Metálico</h4>
                <p class="small text-muted text-justify flex-grow-1">Teclados exclusivos para teclas de función metálicos, disponibles con diferentes cantidades de botones para aplicaciones específicas.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/teclado-de-funcin-metlico.html" target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://www.logicbus.com.mx/teclados-de-silicon">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-silicon.webp" alt="Teclados de silicón">
                </a>
                <h4 class="mt-3">Teclados de Silicón</h4>
                <p class="small text-muted text-justify flex-grow-1">Silicón rígido con o sin trackball/touchpad. Conexión USB o Bluetooth, protección IP68 resistente al agua y ambientes polvosos.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.logicbus.com.mx/teclados-de-silicon">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Teclados-num%C3%A9ricos_c_1130.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-numericos.webp" alt="Teclados numéricos">
                </a>
                <h4 class="mt-3">Teclados Numéricos</h4>
                <p class="small text-muted text-justify flex-grow-1">Módulos numéricos iluminados de acero inoxidable con interfaz USB y protección IP68 impermeable y de alto impacto.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Teclados-num%C3%A9ricos_c_1130.html" target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/Teclado-de-cristal_c_3666.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/teclados-cristal.webp" alt="Teclados de cristal">
                </a>
                <h4 class="mt-3">Teclados de Cristal</h4>
                <p class="small text-muted text-justify flex-grow-1">Cristal y aluminio con conexión inalámbrica Bluetooth. Lavables y antibacterianos, de grado médico y diseño ultra limpio.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/Teclado-de-cristal_c_3666.html" target="_blank">Ver modelos</a>
            </div>

            <div class="product-card">
                <a href="https://tienda.logicbus.com.mx/apuntadores-y-mouse-industriales.html" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2022/pc-comunicaciones-industriales/trackball-mouse.webp" alt="Trackball mouse">
                </a>
                <h4 class="mt-3">Trackball Mouse</h4>
                <p class="small text-muted text-justify flex-grow-1">Módulos Trackball metálicos con protección IP65 a prueba de polvo, agua y vandalismo para integración en paneles de control.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://tienda.logicbus.com.mx/apuntadores-y-mouse-industriales.html" target="_blank">Ver modelos</a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="videos">Playlists Recomendadas</h2>
    <div class="container mb-5">
        <div class="products-grid">
            
            <div class="product-card">
                <a href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NuUWAW2fxOJTgiLe4jSNY3" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2023/teclados/p1.webp" alt="Teclados Industriales Metálicos">
                </a>
                <h4 class="mt-3">Modelos Metálicos</h4>
                <p class="small text-muted text-center flex-grow-1">Ideales para montarse en quioscos o ambientes hostiles.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NuUWAW2fxOJTgiLe4jSNY3" target="_blank" style="background-color: #333;"><i class="fa fa-youtube-play"></i> Ver Playlist</a>
            </div>

            <div class="product-card">
                <a href="https://www.youtube.com/playlist?list=PL9EhLTarrD6N1Yw01ljlLqgZQgRbjkQIK" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2023/teclados/p2.webp" alt="Teclados Industriales de Silicón">
                </a>
                <h4 class="mt-3">Modelos de Silicón</h4>
                <p class="small text-muted text-center flex-grow-1">Resistentes e impermeables de silicona suaves al tacto.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6N1Yw01ljlLqgZQgRbjkQIK" target="_blank" style="background-color: #333;"><i class="fa fa-youtube-play"></i> Ver Playlist</a>
            </div>

            <div class="product-card">
                <a href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NphtIUuGhiS_pdTch0h63E" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2023/teclados/p3.webp" alt="Teclados Industriales de Cristal">
                </a>
                <h4 class="mt-3">Modelos de Cristal</h4>
                <p class="small text-muted text-center flex-grow-1">Superficie capacitiva, lavables y antibacteriales.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6NphtIUuGhiS_pdTch0h63E" target="_blank" style="background-color: #333;"><i class="fa fa-youtube-play"></i> Ver Playlist</a>
            </div>

            <div class="product-card">
                <a href="https://www.youtube.com/playlist?list=PL9EhLTarrD6MEg9D-VcBiCk6c9PnD_IMQ" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/categorias/2023/teclados/p4.webp" alt="Trackball y Touchpad">
                </a>
                <h4 class="mt-3">Trackball y Touchpad</h4>
                <p class="small text-muted text-center flex-grow-1">En acero inoxidable, resistentes a polvo y golpes extremos.</p>
                <a class="btn-circle mt-auto mx-auto" href="https://www.youtube.com/playlist?list=PL9EhLTarrD6MEg9D-VcBiCk6c9PnD_IMQ" target="_blank" style="background-color: #333;"><i class="fa fa-youtube-play"></i> Ver Playlist</a>
            </div>

        </div>
    </div>

    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list mb-4">
        
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/como-elegir-un-teclado-industrial/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/como-elegir-un-teclado-industrial.webp" alt="Como elegir un teclado industrial">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/como-elegir-un-teclado-industrial/" target="_blank" style="text-decoration: none;">
                    <h3>¿Cómo elegir un teclado industrial?</h3>
                </a>
                <p>Los teclados industriales están diseñados para resistir ambientes adversos y ofrecer un rendimiento confiable.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/como-elegir-un-teclado-industrial/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/el-dispositivo-apuntador-perfecto-para-tu-teclado-industrial/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/el-dispositivo-apuntador-perfecto.webp" alt="El dispositivo apuntador perfecto">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/el-dispositivo-apuntador-perfecto-para-tu-teclado-industrial/" target="_blank" style="text-decoration: none;">
                    <h3>El Dispositivo Apuntador Perfecto</h3>
                </a>
                <p>La elección del dispositivo apuntador adecuado puede marcar una gran diferencia en la eficiencia de tus operaciones.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/el-dispositivo-apuntador-perfecto-para-tu-teclado-industrial/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/cuales-son-los-diferentes-tipos-de-instalacion-de-un-teclado-industrial/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/diferentes-tipos-de-instalacion-teclados.webp" alt="Tipos de instalación">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/cuales-son-los-diferentes-tipos-de-instalacion-de-un-teclado-industrial/" target="_blank" style="text-decoration: none;">
                    <h3>Tipos de Instalación</h3>
                </a>
                <p>Conoce las opciones de montaje para integrar teclados en situaciones difíciles de humedad, polvo o vibración.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/cuales-son-los-diferentes-tipos-de-instalacion-de-un-teclado-industrial/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/teclados-industriales-la-clave-para-la-eficiencia-en-maquinas-industriales/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/images/articulos-portadas/teclados-industriales-eficiencia-en-maquinas.webp" alt="Eficiencia en máquinas">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/teclados-industriales-la-clave-para-la-eficiencia-en-maquinas-industriales/" target="_blank" style="text-decoration: none;">
                    <h3>Clave para la Eficiencia</h3>
                </a>
                <p>En el entorno industrial contar con equipos confiables y duraderos es esencial, siendo el teclado una pieza clave.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/teclados-industriales-la-clave-para-la-eficiencia-en-maquinas-industriales/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>
    
    <div class="text-center mb-5">
        <a class="btn-circle" href="https://www.logicbus.com.mx/blog/" target="_blank" style="background-color: var(--lb-primary); display: inline-block; width: auto; padding: 10px 30px;">Ver todos los artículos en el Blog</a>
    </div>

    <h2 class="section-title mt-5 bg-transparent" id="documentacion">Documentación y Catálogos</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=teclados+industriales+logicbus+i" class="ghost-manual-box" style="text-decoration: none;">
            <img loading="lazy" src="https://www.logicbus.com.mx/images/documentacion.svg" alt="Ícono de Documentación" style="width: 150px; margin-bottom: 15px;">
            <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver Documentación Oficial y Manuales</span>
        </a>
    </div>

    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px; text-transform: uppercase;">CONOCE MÁS SOBRE NUESTROS TECLADOS INDUSTRIALES</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarle a encontrar las mejores soluciones de interfaz para su proyecto.</span>
        </div>
        
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe loading="lazy" src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
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
                    if(videoId) {
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