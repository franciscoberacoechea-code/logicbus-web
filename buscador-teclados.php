<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>
    <script>
        gtag('config', 'AW-1007518778/wX-hCOLx9YQDELqItuAD', {
            'phone_conversion_number': '33-3854-5975'
        });
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buscador de Teclados - Logicbus</title>
    
    <meta name="description" content="Buscador de Teclados">
    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Sensores fotoeléctricos, TRI-TRONICS, tri-tronics, tritronics, tri tronics, SmartEye, Label Eye, Sensor de hueco, sensor de ranura, hueco, ranura">

    <!--- Estilos Necesarios-->
    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : ''; ?>
    <?php echo isset($own_file_css) ? $own_file_css : ''; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    
    <link href="libreria/celda-table/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="libreria/celda-table/fixedHeader.dataTables.min.css">

    <style>
        /* Ajustes de la nueva plantilla */
        #leftBar {
            display: none;
        }

        .btn-circle {
            text-transform: none !important;
        }

        /* Estilos específicos del buscador */
        .celda-img {
            width: 150px;
        }

        td {
            font-family: 'Titillium Web', sans-serif;
        }

        .page-item.active .page-link {
            background-color: #22527A !important;
            border-color: #22527A !important;
        }

        /* 1. Forzar el color azul específico del thead contra los estilos oscuros de Bootstrap/DataTables */
        #celdas thead th,
        #celdas thead td {
            background-color: #22527A !important; 
            color: #ffffff !important;
            font-family: 'Titillium Web', sans-serif;
            text-align: center;
        }

        /* 2. Quitar el color azul por defecto de los enlaces del número de parte */
        #celdas tbody a {
            color: #444444 !important; /* Gris oscuro neutro */
            text-decoration: none !important;
            font-weight: 500;
        }
        
        #celdas tbody a:hover {
            color: #22527A !important; /* Azul específico solo al pasar el cursor */
            text-decoration: underline !important;
        }

        #celdas_paginate {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="pc-y-comunicaciones-industriales" class="blue link-orange">PCs y Comunicaciones Industriales</a></li>
                <li class="breadcrumb-item"><a href="teclados-indice" class="blue link-orange">Teclados industriales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buscador de Teclados</li>
            </ol>
        </nav>
    </div>

    <!-- Banner Completo en lugar de la sección izquierda -->
    <div class="banner-container mb-5">
        <img src="images/banner/www/PorMarca/buscador-teclados-industriales.png" alt="Buscador de teclados" title="Buscador de teclados" style="width: 100%; height: auto; display: block;">
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">BUSCADOR DE TECLADOS</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">INDUSTRIALES</span>
    </h1>

    <!-- Contenido Superior (Texto) -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <p class="intro-text" style="text-align: justify; margin-bottom: 15px;">
                    <strong>Bienvenido a nuestro Buscador de Teclados:</strong> tu herramienta esencial para encontrar el teclado perfecto que se adapte a las necesidades específicas de tu proyecto. En el mundo de la tecnología, la selección del teclado adecuado va más allá de la apariencia; es una decisión fundamentada en múltiples parámetros que definen la experiencia de usuario.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 15px;">
                    Logicbus presenta este buscador de teclados diseñado para simplificar tu búsqueda y ayudarte a localizar rápidamente el modelo ideal.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 25px;">
                    Nuestro buscador está diseñado para optimizar el proceso de selección, ahorrándote tiempo y asegurándote que encuentres la solución exacta para tu sistema.
                </p>
                
                <!-- Botones de Navegación centrados -->
                <div class="d-flex flex-wrap justify-content-center" style="gap: 15px;">
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/teclados-industriales.html" target="_blank" style="min-width: 200px; text-align: center;">Ver en Tienda</a>
                    <a class="btn-circle" href="https://www.logicbus.com.mx/teclados-indice" target="_blank" style="min-width: 200px; text-align: center;">Teclados Industriales</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de la Tabla Buscador -->
    <div class="bg-light-accent py-5" id="aplicaciones">
        <div class="container-fluid" style="max-width: 1400px;">
            <h2 class="section-title mb-4" style="margin-top: 0 !important;">Encuentra tu Teclado</h2>
            
            <div class="table-responsive bg-white p-4 rounded shadow-sm" style="border: 1px solid #dee2e6;">
                <div id="filtros"></div>
                <table id="celdas" class="table table-hover table-bordered w-100 text-center align-middle">
                    <thead class="thead-dark">
                        <tr>
                            <th>Material</th>
                            <th>Imagen</th>
                            <th>Número de parte</th>
                            <th>Dispositivo apuntador</th>
                            <th>Layout / Idioma</th>
                            <th>Tipo de protección</th>
                            <th>Tipo de conexión</th>
                        </tr>
                        <!-- Fila de Filtros -->
                        <tr>
                            <th class="filterhead">Número de parte</th>
                            <th id="img" class="filterhead">Imagen</th>
                            <th id="num" class="filterhead">Material</th>
                            <th class="filterhead">Dispositivo apuntador</th>
                            <th class="filterhead">Layout / Idioma</th>
                            <th class="filterhead">Tipo de protección</th>
                            <th class="filterhead">Tipo de conexión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Los datos se inyectarán mediante DataTables (script2.js) -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a encontrar el teclado ideal para tu sistema.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer -->
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>
    
    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    
    <!-- Scripts de DataTables -->
    <script src="libreria/celda-table/jquery.dataTables.min.js"></script>
    <script src="libreria/celda-table/dataTables.bootstrap5.min.js"></script>
    <script src="libreria/celda-table/dataTables.fixedHeader.min.js"></script>
    <script src="libreria/script2.js"></script>

    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>
</html>