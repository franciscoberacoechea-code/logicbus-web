<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DAVITEQ - Productos IoT - Logicbus</title>

    <meta name="description" content="Daviteq ha desarrollado instrumentos de proceso, sensores inalámbricos de IoT, iConnector de puerta de enlace de IoT y una plataforma de IoT.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Teracom, sistema SCADA, protocolo M2M">
    
    <link rel="preload" as="image" href="https://www.logicbus.com.mx/images/banner/www/PorMarca/DAVITEQ-banner.webp" type="image/webp">

    <!--- Estilos Necesarios-->
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?> <!-- CSS General con las clases de la plantilla madre -->
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <!-- CSS ESPECÍFICO DE ESTA PÁGINA -->
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
                <li class="breadcrumb-item"><a href="tecnologia-cloud-iot" class="blue link-orange">IoT</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daviteq</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="https://www.logicbus.com.mx/images/banner/www/PorMarca/DAVITEQ-banner.webp" alt="DAVITEQ" title="DAVITEQ">
    </div>

    <!-- H1 con diseño base -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Instrumentos de Proceso y Soluciones IoT</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DAVITEQ</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <strong>Daviteq</strong> se especializa en investigación, desarrollo y producción de instrumentos de proceso y soluciones de IoT. Con un equipo de investigación y desarrollo profesional en hardware, firmware y software, Daviteq ha desarrollado instrumentos de proceso, sensores inalámbricos de IoT, iConnector de puerta de enlace de IoT y una plataforma de IoT, concretamente Globiots.
    </p>
    <p class="intro-text">
        Nuestros sensores inalámbricos IoT funcionan con baterías y tienen conexión inalámbrica. Se utilizan para medir temperatura, humedad, presión, corriente CA, entrada analógica, entrada digital, salida RS485 y salida digital.
    </p>
    <p class="intro-text">
        Basado en la plataforma IoT Globiots, puerta de enlace y sensores inalámbricos, <strong>Daviteq</strong> ha creado con éxito soluciones de monitoreo para energía, servicios públicos, máquinas/líneas de producción, producción y medio ambiente en fábricas industriales. Además de la aplicación industrial, Daviteq también ha desarrollado soluciones para monitorear almacenes de almacenamiento en frío, contenedores, congeladores y cajas móviles, barcazas, transbordadores, BTS, granjas camaroneras, estaciones de distribución eléctrica y redes de distribución de agua.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/daviteq-technologies-inc" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Productos</a>
        <a class="btn-circle" href="#catalogos">Catálogos</a>
    </nav>

    <!-- Sección Productos -->
    <h2 class="section-title" id="productos">Productos y Sensores</h2>
    <div class="products-grid">
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/CAP10CNC1000F.webp" alt="CAP10CNC1000F">
            <h4>CAP10CNC1000F</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/CAP10CNC1000F_p_36129.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/CAP10A1000FULL.webp" alt="CAP10A1000FULL">
            <h4>CAP10A1000FULL</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/CAP10A1000FULL_p_36128.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/WSLRW-AL-01.webp" alt="WSLRW-AL-01">
            <h4>WSLRW-AL-01</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/WSLRW-AL-01_p_36182.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/WSNB-TVS-3GDB.webp" alt="WSNB-TVS-3GDB">
            <h4>WSNB-TVS-3GDB</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/WSNB-TVS-3GDB_p_36171.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/MAQM-LRW-01S.webp" alt="MAQM-LRW-01S">
            <h4>MAQM-LRW-01S (Aire)</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/MAQM-LRW-01S_p_36152.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/STHC-B-ISG02DB-01.webp" alt="STHC-B-ISG02DB-01">
            <h4>Gateway IoT STHC</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/STHC-B-ISG02DB-01_p_36154.html" target="_blank">Ver producto</a>
        </div>
        <div class="product-card">
            <img loading="lazy" src="./imagenes/320/ISV-NANO-100.webp" alt="ISV-NANO-100">
            <h4>Servidor Globiots ISV</h4>
            <a class="btn-circle" href="https://tienda.logicbus.com.mx/ISV-NANO-100_p_36138.html" target="_blank">Ver producto</a>
        </div>
    </div>

    <!-- Sección Catálogos -->
    <h2 class="section-title" id="catalogos">Catálogos</h2>
    <div class="catalog-wrap mb-5">
        <a href="https://www.logicbus.com.mx/pdf/320/Daviteq%20Profile%20ENG.pdf" target="_blank" class="catalog-item">
            <span class="pdf-badge">PDF Digital</span>
            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/320/catalogo-portada.webp" alt="Daviteq Profile">
            <h4>Catálogo General Daviteq</h4>
        </a>
    </div>

    <!-- Contacto (Diseño Odoo Base) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE DAVITEQ?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Estamos aquí para ayudarte a encontrar las mejores soluciones y sensores IoT para tu proyecto industrial.</span>
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