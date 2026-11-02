<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arestech - Computadoras Industriales y Pantallas Multitáctiles - Logicbus</title>
    
    <meta name="description" content="Arestech ofrece una gama completa de sistemas inteligentes que incluyen PC de caja integrada, PC de panel industrial y pantallas multitáctiles.">
    <meta name="keywords" content="Logicbus, Mexico, Guadalajara, Arestech, computadoras industriales, panel PC, pantallas multitáctiles, sistemas inteligentes, automatizacion">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778'); 
    </script>

    <?php echo $favicon; ?>
    <?php echo $css_bundle; ?>
    <?php echo $estilos; ?> <!-- Tu CSS General con el Sistema de Diseño -->

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
                <li class="breadcrumb-item active" aria-current="page">Arestech</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-ARESTECH-MAY23.webp" alt="Arestech computadoras industriales" title="Arestech">
    </div>

    <!-- H1 con diseño Shift4Shop -->
    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Sistemas Integrados y Paneles PC</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">ARESTECH</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <strong>Arestech Co. Ltd.</strong> se especializa en el desarrollo de soluciones de computación integrada innovadoras, de alta calidad y alto rendimiento para diversas aplicaciones de automatización.
    </p>
    <p class="intro-text">
        Ofrecemos una gama completa de sistemas inteligentes que incluyen PC de caja integrada, PC de panel industrial y pantallas multitáctiles, que atienden a diversos entornos industriales hostiles. Con un soporte ágil, experiencia dinámica en el mercado integrado y flexibilidad, Arestech ofrece no solo soluciones llave en mano rentables, sino también un tiempo de comercialización más corto.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/arestech" target="_blank">Ver en Tienda</a>
        <a class="btn-circle" href="#productos">Equipos Destacados</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
    </nav>

    <!-- Sección Productos Destacados -->
    <h2 class="section-title" id="productos">Equipos Destacados</h2>
    <div class="products-grid">
        
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/TPM-3617P-B6A2.webp" alt="Monitor Táctil TPM-3617P-B6A2">
            <h4>Monitor Táctil TPM-3617P-B6A2</h4>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Monitor táctil industrial de alto rendimiento diseñado para resistir entornos exigentes.</p>
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;" class="mt-auto">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/TPM-3617P-B6A2_p_31707.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/TPM-3617P-B6A2_p_30910.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem; background-color: transparent !important; color: var(--lb-accent) !important;">Tienda US</a>
            </div>
        </div>

        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/PPC-Z103PW-B61A2.webp" alt="Panel PC PPC-Z103PW-B61A2">
            <h4>Panel PC PPC-Z103PW-B61A2</h4>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Solución de PC de panel integrada ideal para sistemas de automatización complejos.</p>
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;" class="mt-auto">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/PPC-Z103PW-B61A2_p_31715.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/PPC-Z103PW-B61A2_p_30866.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem; background-color: transparent !important; color: var(--lb-accent) !important;">Tienda US</a>
            </div>
        </div>

        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/PPC-Z217PW-B62A1.webp" alt="Panel PC PPC-Z217PW-B62A1">
            <h4>Panel PC PPC-Z217PW-B62A1</h4>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Panel PC robusto con pantalla amplia, preparado para los ambientes industriales más duros.</p>
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;" class="mt-auto">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/PPC-Z217PW-B62A1_p_31730.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/PPC-Z217PW-B62A1_p_31040.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem; background-color: transparent !important; color: var(--lb-accent) !important;">Tienda US</a>
            </div>
        </div>

        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/PPC-N157P-1A1.webp" alt="Panel PC PPC-N157P-1A1">
            <h4>Panel PC PPC-N157P-1A1</h4>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px; text-align: justify;">Eficiencia y durabilidad combinadas en un Panel PC compacto y potente.</p>
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;" class="mt-auto">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/PPC-N157P-1A1_p_33577.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/PPC-N157P-1A1_p_30878.html" target="_blank" style="padding: 10px 15px; font-size: 0.85rem; background-color: transparent !important; color: var(--lb-accent) !important;">Tienda US</a>
            </div>
        </div>

    </div>
    
    <div class="text-center mb-5">
        <a class="btn-circle" href="https://tienda.logicbus.com.mx/arestech" target="_blank" style="background-color: var(--lb-accent) !important; border-color: var(--lb-accent) !important;">Ver catálogo completo en tienda</a>
    </div>

    <!-- Sección Guías y Manuales -->
    <h2 class="section-title" id="GuiasyManuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=arestech" class="ghost-manual-box">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación">
            <span>Ver Documentación</span>
        </a>
    </div>

    <!-- Contacto (Diseño Odoo) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">COTIZA TUS EQUIPOS ARESTECH</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestro equipo de ingenieros está listo para ayudarte a seleccionar el sistema integrado ideal para tu proyecto.</span>
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
    <!-- Orden correcto de scripts para evitar errores con Bootstrap y el icono de WhatsApp -->
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>

</body>
<?php echo $var_footer; ?>
</html>