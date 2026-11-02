<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>EMDOOR - Laptops Industriales Logicbus</title>
    <meta name="description" content="Emdoor es un fabricante de tablets de uso rudo, laptops industriales, PC y computadoras montadas en vehículos resistentes.">
    <meta name="keywords" content="Logicbus,emdoor Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--- Estilos Necesarios-->
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?> 
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

    <style>

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
                <li class="breadcrumb-item active" aria-current="page">Emdoor</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Imagen 100% -->
    <div class="banner-container mb-5">
        <img loading="lazy" src="images/banner/www/PorMarca/BANNER-EMDOOR-MZ23.webp" alt="Emdoor Laptops Industriales y Tablets de uso rudo" title="Emdoor">
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Laptops y Tablets de Uso Rudo</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">EMDOOR</span>
    </h1>

    <!-- Textos de introducción -->
    <p class="intro-text">
        <strong>Emdoor</strong> es un fabricante de tablets de uso rudo, laptops industriales, PC y computadoras montadas en vehículos resistentes, así como proveedor de soluciones de hardware y software personalizadas.
    </p>
    <p class="intro-text">
        En conjunto con <strong>Logicbus</strong>, nos destacamos por brindar soluciones industriales eficientes en logística de almacenes, automatización industrial, atención médica, exploración de petróleo, mapeo al aire libre, inspección automotriz, control de carreteras, educación, patrulla fronteriza, servicios minoristas, terminales de autoservicio, visión artificial, hogar inteligente, transporte inteligente y mucho más.
    </p>

    <!-- Navegación interna -->
    <nav class="btn-navigation mb-5">
        <a class="btn-circle" href="#categorias">Categorías</a>
        <a class="btn-circle" href="#GuiasyManuales">Guías y Manuales</a>
    </nav>

    <!-- Sección Categorías (Productos) -->
    <h2 class="section-title" id="categorias">Categorías</h2>
    <div class="products-grid" style="max-width: 900px; margin: 0 auto;">
        
        <!-- Producto 1 -->
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/laptop-industrial.webp" alt="Laptops Industriales">
            <h4>Laptops Industriales</h4>
            <p class="small text-muted text-justify flex-grow-1">
                Tienen un rendimiento de procesamiento sólido con procesadores de alto rendimiento Intel i5/i7 y Windows 10. Cuentan con interfaces enriquecidas, puertos de red duales y algunas pueden modificarse a interfaces de aviación de acuerdo a tus necesidades.
            </p>
            <div class="mt-auto d-flex justify-content-center flex-wrap gap-2">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/laptops-industriales.html" target="_blank" style="padding: 8px 15px; font-size: 0.9rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/industrial-laptop.html" target="_blank" style="padding: 8px 15px; font-size: 0.9rem;">Tienda US</a>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="product-card">
            <img loading="lazy" src="images/categorias/2022/pc-comunicaciones-industriales/tablet-pc-resistentes.webp" alt="Tablets de uso rudo">
            <h4>Tablets de Uso Rudo</h4>
            <p class="small text-muted text-justify flex-grow-1">
                Las tablets industriales de uso rudo de Emdoor las puedes encontrar de 8 a 12 pulgadas. Son compatibles con diferentes sistemas operativos como Android, Windows o Linux para satisfacer las exigencias de tu aplicación industrial.
            </p>
            <div class="mt-auto d-flex justify-content-center flex-wrap gap-2">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/Tablets-Industriales_c_4579.html" target="_blank" style="padding: 8px 15px; font-size: 0.9rem;">Tienda MX</a>
                <a class="btn-circle" href="https://www.logicbus.com/industrial-tablets.html" target="_blank" style="padding: 8px 15px; font-size: 0.9rem;">Tienda US</a>
            </div>
        </div>

    </div>

    <!-- Sección Guías y Manuales -->
    <h2 class="section-title mt-5" id="GuiasyManuales">Guías y Manuales</h2>
    <div class="text-center mb-5 pb-4">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=emdoor" class="ghost-manual-box" style="text-decoration: none;">
            <img loading="lazy" src="images/documentacion.svg" alt="Ícono de Documentación" style="width: 150px; margin-bottom: 15px;">
            <span class="d-block" style="font-weight: bold; color: var(--lb-primary); font-size: 1.1rem;">Ver Documentación Oficial</span>
        </a>
    </div>

    <!-- Contacto (Diseño Odoo Base) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS MÁS INFORMACIÓN SOBRE EMDOOR?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">¡Déjanos ayudarte! Estamos aquí para encontrar el equipo de cómputo rudo y móvil perfecto para tu proyecto.</span>
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