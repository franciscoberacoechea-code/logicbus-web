<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digilent: Innovación en herramientas de diseño y desarrollo electrónico</title>
    <meta name="description" content="Digilent ofrece herramientas y soluciones para el diseño, desarrollo y aprendizaje en electrónica. Explorá FPGAs, microcontroladores, instrumentos y mucho más.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Teracom, sistema SCADA, protocolo M2M">
    
    <?php
    // Define un array con las RUTAS COMPLETAS de tus archivos CSS.
    // 'RUTA' ya debe estar definida.
    $css_urls = [
        RUTA . 'libreria/bootstrap/dist/css/bootstrap.min.css',
        RUTA . 'libreria/estilos.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', // Iconos
        RUTA . 'libreria/menus-2023.css',
        RUTA . 'libreria/subcategorias.css',
        RUTA . 'libreria/footer.css',
        RUTA . 'libreria/www.css',
    ];
    ?>
    <?php foreach ($css_urls as $url): ?>
        <link rel="preload" href="<?php echo $url; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="<?php echo $url; ?>">
        </noscript>
    <?php endforeach; ?>
    <?php echo $estilos; ?>

    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <!-- CSS ESPECÍFICO DE LA PLANTILLA MAESTRA -->
    <style>
        /* Ocultar barra lateral */
        #leftBar {
            display: none;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Digilent</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/banner-digilent.webp" alt="DIGILENT" title="DIGILENT">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Diseño y Desarrollo Electrónico</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DIGILENT</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <strong>Digilent Inc.</strong> es una empresa líder de productos de ingeniería electrónica que brinda servicios a estudiantes, universidades y OEM alrededor del mundo con herramientas de diseño educacional basado en la tecnología. Con sede en Pullman, Washington, EE. UU., Digilent diseña, fabrica y distribuye herramientas de diseño electrónico a nivel mundial. 
    </p>
    <p class="intro-text">
        Desde su fundación en 2000, los productos Digilent se pueden encontrar ahora en más de 2000 universidades en más de 70 países. Al ser una empresa multinacional con oficinas en EE. UU, Taiwán, China y Rumania, Digilent puede ofrecer soluciones asequibles y de calidad experta. Además de sus productos, ofrece servicios de fabricación y diseño de OEM para las empresas de tecnología líderes, entre ellas Xilinx, Analog Devices y Cypress Semiconductor.
    </p>
    <p class="intro-text">
        Digilent ofrece una variedad de dispositivos de prueba y medición diseñados para combinar la funcionalidad de un laboratorio profesional con un software flexible capaz de soportar y acelerar el descubrimiento y el diseño de aplicaciones.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/digilent" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
        <a class="btn-circle" href="#articulos">Artículos</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
    </nav>

    <!-- Sección Productos - Tarjetas de Desarrollo -->
    <h2 class="section-title" id="productos">Tarjetas de Desarrollo</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/240-114-1.webp" alt="Tarjeta 240-114-1">
            <h4>240-114-1</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/240-114-1_p_35841.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/410-348.webp" alt="Tarjeta 410-348">
            <h4>410-348</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/410-348_p_35846.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/410-351-20.webp" alt="Tarjeta 410-351-20">
            <h4>410-351-20</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/410-351-20_p_35842.html" target="_blank">Ver producto</a>
        </div>
    </div>

    <!-- Sección Productos - Accesorios -->
    <h2 class="section-title mt-5">Accesorios</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/240-114.webp" alt="Accesorio 240-114">
            <h4>240-114</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/240-114_p_35836.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/6002-240-001.webp" alt="Accesorio 6002-240-001">
            <h4>6002-240-001</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/6002-240-001_p_35843.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/313/240-141.webp" alt="Accesorio 240-141">
            <h4>240-141</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/240-141_p_35868.html" target="_blank">Ver producto</a>
        </div>
    </div>

    <!-- Sección Catálogos -->
    <h2 class="section-title mt-5" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="pdf/313/2023-CATALOG-MASTER-June20231.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="pdf/313/digilent-catalogo-2023.webp" alt="Catálogo General Digilent 2023">
            <h4>Catálogo General Digilent</h4>
        </a>
    </div>

    <!-- Sección Guías y Manuales -->
    <h2 class="section-title mt-5" id="GuiasyManuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=digilent" class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación</span>
        </a>
    </div>

    <!-- Sección Artículos -->
    <h2 class="section-title mt-5" id="articulos">Artículos</h2>
    <div class="articles-list">
        
        <!-- Artículo 1 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/aplicaciones-actuales-de-la-instrumentacion-y-desarrollo-embebido-digital-que-debes-de-conocer/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/11/Aplicaciones-actuales-de-la-instrumentacio%CC%81n-y-desarrollo-embebido-digital-que-debes-de-conocer.-scaled.png" alt="Aplicaciones actuales instrumentación">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/aplicaciones-actuales-de-la-instrumentacion-y-desarrollo-embebido-digital-que-debes-de-conocer/" target="_blank" style="text-decoration: none;">
                    <h3>Aplicaciones de la instrumentación y desarrollo embebido digital</h3>
                </a>
                <p>Hoy en día hay distintas marcas y fabricantes de equipo de instrumentación digital que ofrecen equipos muy avanzados y de alto nivel de procesamiento de datos y señales.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/aplicaciones-actuales-de-la-instrumentacion-y-desarrollo-embebido-digital-que-debes-de-conocer/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 2 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/digilent-una-nueva-solucion-en-instrumentacion-para-medicion-y-pruebas-electronicas/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/10/Digilent-Una-nueva-solucio%CC%81n-en-Instrumentacio%CC%81n-para-medicio%CC%81n-y-pruebas-electro%CC%81nicas-scaled.png" alt="Digilent: Una nueva solución">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/digilent-una-nueva-solucion-en-instrumentacion-para-medicion-y-pruebas-electronicas/" target="_blank" style="text-decoration: none;">
                    <h3>Una nueva solución en Instrumentación y pruebas electrónicas</h3>
                </a>
                <p>Una de las categorías más destacables de este fabricante son las soluciones que ofrecen para la medición de procesos y señales analógicas y digitales.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/digilent-una-nueva-solucion-en-instrumentacion-para-medicion-y-pruebas-electronicas/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 3 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/tarjetas-fpgas-para-desarrollar-deep-learning/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/11/Tarjetas-FPGAs-para-Desarrollar-Deep-Learning-2.png" alt="Tarjetas FPGAs">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/tarjetas-fpgas-para-desarrollar-deep-learning/" target="_blank" style="text-decoration: none;">
                    <h3>Tarjetas FPGAs para Desarrollar Deep Learning</h3>
                </a>
                <p>La inteligencia artificial (IA) ha desarrollado un gran impacto en nuestra sociedad. Conoce cómo las herramientas basadas en FPGA impulsan el Deep Learning.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/tarjetas-fpgas-para-desarrollar-deep-learning/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

        <!-- Artículo 4 -->
        <div class="article-card-hor">
            <div class="article-img-wrap">
                <a href="https://www.logicbus.com.mx/blog/que-es-una-tarjeta-fpga-y-cuales-son-sus-aplicaciones/" target="_blank">
                    <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2023/10/Que%CC%81-es-una-tarjeta-FPGA-scaled.png" alt="Qué es una tarjeta FPGA">
                </a>
            </div>
            <div class="article-content">
                <a href="https://www.logicbus.com.mx/blog/que-es-una-tarjeta-fpga-y-cuales-son-sus-aplicaciones/" target="_blank" style="text-decoration: none;">
                    <h3>¿Qué es una tarjeta FPGA, y cuales son sus aplicaciones?</h3>
                </a>
                <p>Hasta el día de hoy, existen muchas tecnologías de control industrial. Usualmente podemos encontrar tarjetas controladoras de diversos tipos y configuraciones.</p>
                <div class="btn-container">
                    <a class="btn-circle" href="https://www.logicbus.com.mx/blog/que-es-una-tarjeta-fpga-y-cuales-son-sus-aplicaciones/" target="_blank">Leer artículo</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Contacto (Diseño Odoo Base) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE DIGILENT?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí para encontrar las mejores soluciones y herramientas para tu proyecto electrónico.</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    
    <!-- Scripts -->
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
    
</body>
<?php echo $var_footer; ?>
</html>