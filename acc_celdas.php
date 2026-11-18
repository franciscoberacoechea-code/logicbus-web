<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accesorios para Celdas de Carga | Logicbus</title>

    <meta name="description"
        content="Descubre la mejor selección de accesorios para celdas de carga, incluyendo rodamientos, cables USB, tarjetas adaptadoras y conectores. Amplia selección en Logicbus.">
    <meta name="keywords"
        content="accesorios celdas de carga, rodamientos macho, cables USB, tarjetas adaptadoras, conectores logicbus">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <style>
        #leftBar {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }

        .btn-circle {
            text-transform: none !important;
        }

        /* ----- CATEGORÍAS ----- */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-card img, .img-placeholder {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
            border: 1px dashed #cbd5e0;
            border-radius: 8px;
            padding: 10px;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a0aec0;
            font-size: 0.9rem;
        }

        .area-badge {
            background-color: #f1f5f9;
            color: var(--lb-primary, #22527A);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            margin-bottom: 15px;
            align-self: flex-start;
        }

        .product-card h4 {
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--lb-primary, #22527A);
            margin-bottom: 15px;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 15px;
            justify-content: flex-start;
        }

        .tag-badge {
            border: 1px solid #ddd;
            color: #666;
            font-size: 0.75rem;
            padding: 3px 8px;
            border-radius: 4px;
        }

        .product-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="celdas_de_carga" class="blue link-orange">Celdas de carga</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
            </ol>
        </nav>
    </div>

    <!-- Títulos y Textos Intro -->
    <div class="container mb-5 mt-4">
        <h1 class="main-title text-center">
            <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Accesorios para</span>
            <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px; text-transform: uppercase;">CELDAS DE CARGA</span>
        </h1>

        <p class="intro-text text-justify mx-auto mt-4" style="max-width: 1100px;">
            Completa y optimiza tus sistemas de medición de fuerza con nuestra variedad de accesorios para celdas de carga. Ofrecemos rodamientos macho, cables de extensión USB, kits de conectores y tarjetas adaptadoras compatibles para asegurar una conexión precisa y duradera en tus proyectos de automatización.
        </p>
    </div>

    <!-- Navegación interna -->
    <div class="container text-center my-5">
        <nav class="btn-navigation d-flex flex-wrap justify-content-center" style="gap: 15px;">
            <a class="btn-circle" href="#categorias">Modelos Disponibles</a>
            <a class="btn-circle" href="#contacto">Contacto</a>
        </nav>
    </div>

    <!-- CATEGORÍAS DE PRODUCTO -->
    <div class="text-center mb-5" id="categorias">
        <h2 class="section-title mx-auto" style="margin-bottom: 10px;">MODELOS DISPONIBLES</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Nuestra variedad de accesorios para celdas de carga</p>
    </div>

    <div class="products-grid">
        <div class="product-card">
            <span class="area-badge">Rodamiento</span>
            <img loading="lazy" src="imagenes/36/ZAC100_ch.png" alt="ZAC100">
            <h4>ZAC100 (Accesorio)</h4>
            <div class="tags-container">
                <span class="tag-badge">Rodamiento Macho</span>
                <span class="tag-badge">Zinc Plated Steel</span>
            </div>
            <p>Male Rod-End Bearing, Male Rod-End Bearing w/Jam-Nut, Material - Zinc Plated Steel, #10-32-Thread, Standard, Max Load 900 lb (F1146-1).</p>
            <a class="btn-circle text-center" style="width: 100%;" href="ZAC100" target="_blank">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Cable USB</span>
            <img loading="lazy" src="imagenes/36/GOD03196.jpg" alt="GOD3196">
            <h4>GOD3196 (Accesorio)</h4>
            <div class="tags-container">
                <span class="tag-badge">USB 2.0</span>
                <span class="tag-badge">2 m Long</span>
            </div>
            <p>Cable, USB 2.0, A-B Male, Black, 2 m Long.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#" target="_blank">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Tarjeta Adaptadora</span>
            <img loading="lazy" src="imagenes/36/FSH03520_1.jpg" alt="FSH03520">
            <h4>FSH03520 (Model: ZCC993)</h4>
            <div class="tags-container">
                <span class="tag-badge">USB Screw Terminal</span>
                <span class="tag-badge">2 ft Long</span>
            </div>
            <p>USB Screw Terminal Adapter Board, For Use With USB210/USB215/USB220/USB230/USB320, 2 ft Long.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="pdf/36/zcc993.pdf" target="_blank">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Tarjeta Adaptadora</span>
            <img loading="lazy" src="imagenes/36/FSH03520_1.jpg" alt="FSH03756">
            <h4>FSH03756 (Model: ZCC993)</h4>
            <div class="tags-container">
                <span class="tag-badge">USB Screw Terminal</span>
                <span class="tag-badge">2 ft Long</span>
            </div>
            <p>USB Screw Terminal Adapter Board, For Use With USB410, 2 ft Long.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="pdf/36/zcc993.pdf" target="_blank">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Cable de Extensión</span>
            <img loading="lazy" src="imagenes/36/GOD03135.jpg" alt="GOD03135">
            <h4>GOD03135 (Accesorio)</h4>
            <div class="tags-container">
                <span class="tag-badge">USB 2.0</span>
                <span class="tag-badge">10 ft long</span>
            </div>
            <p>USB Gold Extension Cable for USB 2.0 Cables, Type A (M/F), 10 ft long.</p>
            <a class="btn-circle text-center" style="width: 100%;" href="#" target="_blank">Descubrir más</a>
        </div>

        <div class="product-card">
            <span class="area-badge">Kit Conector</span>
            <img loading="lazy" src="imagenes/36/FSH03320_t.jpg" alt="FSH03320">
            <h4>FSH03320 (Model: ZCO940)</h4>
            <div class="tags-container">
                <span class="tag-badge">Connector Plug Kit</span>
                <span class="tag-badge">12 pos</span>
            </div>
            <p>Connector Plug Kit for USB215/USB220/USB320. Includes 12 pos. connector plug and appropriate size bushing (4.0, 4.5, 5.0).</p>
            <a class="btn-circle text-center" style="width: 100%;" href="pdf/36/zco940.pdf" target="_blank">Descubrir más</a>
        </div>
    </div>

    <!-- Contacto (Iframe) -->
    <div class="section-blue text-center py-5 mt-5" id="contacto" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA TÉCNICA?</h2>
            <span class="paragraph"
                style="color: var(--lb-white); font-size: 1.1rem; display: block; max-width: 800px; margin: 0 auto;">
                Contáctanos para ayudarte a seleccionar el accesorio ideal para tus requerimientos.
            </span>

            <div class="d-flex justify-content-center flex-wrap mt-4" style="gap: 15px;">
                <a href="#contacto" class="btn font-weight-bold"
                    style="background-color: var(--lb-accent); color: #fff; border: 2px solid var(--lb-accent); border-radius: 30px; padding: 10px 30px; text-decoration: none; transition: all 0.3s ease;">
                    Solicitar cotización
                </a>
                <a href="https://tienda.logicbus.com.mx/" target="_blank" class="btn font-weight-bold"
                    style="background-color: transparent; color: #fff; border: 2px solid #fff; border-radius: 30px; padding: 10px 30px; text-decoration: none; transition: all 0.3s ease;">
                    Ver en tienda
                </a>
            </div>
        </div>

        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer -->
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <!-- 1. jQuery -->
    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>

    <!-- 2. Bootstrap -->
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>

    <!-- 3. Propios -->
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>

    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>