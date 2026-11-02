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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acondicionadores de Señal para Sensores Industriales | Logicbus</title>
    
    <meta name="description" content="Transforma y acondiciona señales de sensores como termopares, RTDs, celdas de carga y más con nuestros acondicionadores de señal.">
    <meta name="keywords" content="sensores y transductores, sensores, acondicionadores de señal, Logicbus, Mexico, Guadalajara, sensor, transductor, tipos de transductores, sensores fotoelectricos, sensores fotoelectricos Mexico, Futek, Seneca, acondicionador de señal, que son los acondicionadores de señal, acondicionador de señal digital, acondicionador de señal analogica, acondicionador de corriente, acondicionador de temperatura,acondicionador de Señal Universal, Logicbus, Seneca, acondicionadores de señales Mexico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!--- Estilos Necesarios-->
    <?php echo isset($favicon) ? $favicon : '<link rel="shortcut icon" href="images/favicon.ico">'; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>
    <?php echo isset($footer_css) ? $footer_css : ''; ?>
    <?php echo isset($flickity_css) ? $flickity_css : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>

    <style>
        #leftBar {
            display: none;
        }

        .btn-circle {
            text-transform: none !important;
            transition: all 0.3s ease;
        }

        /* --- CORRECCIÓN DEL HOVER --- */
        .btn-circle:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15) !important;
        }

        /* Cuadrícula de subcategorías */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        .category-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            padding: 35px 25px 25px;
            text-align: center;
            border: 1px solid #eaeaea;
            border-top: 5px solid var(--lb-primary, #0056b3);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,.12);
        }

        .category-card .icon-container {
            font-size: 3.5rem;
            color: var(--lb-primary, #0056b3);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .category-card:hover .icon-container {
            transform: scale(1.1);
            color: var(--lb-accent, #f37021);
        }

        .category-card h4 {
            font-size: 1.35rem;
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .category-card p {
            font-size: 0.95rem;
            color: #666;
            text-align: justify;
            line-height: 1.6;
            flex-grow: 1; 
            margin-bottom: 25px;
        }

        .category-card .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: auto;
        }
        
        .category-card .actions .btn-circle {
            width: 100%;
            margin: 0;
            padding: 8px 15px;
            font-size: 0.9rem;
        }

        .category-card .actions .btn-outline {
            background-color: transparent;
            color: var(--lb-primary);
            border: 2px solid var(--lb-primary);
        }

        .category-card .actions .btn-outline:hover {
            background-color: var(--lb-primary);
            color: #fff;
        }

        /* Listas personalizadas */
        .custom-list {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            padding-left: 20px;
            text-align: left;
            margin: 0 auto;
            max-width: 800px;
        }
        
        .custom-list li {
            margin-bottom: 8px;
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
                <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Acondicionador de señal</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal y Banner -->
    <h1 class="main-title mb-4 text-center">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">ACONDICIONADORES</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DE SEÑAL</span>
    </h1>

    <div class="container mb-5">
        <div class="row">
            
            <div class="col-md-10 mx-auto text-center">
                <p class="intro-text" style="font-size: 1.15rem; color: #444; line-height: 1.7; margin-bottom: 25px;">
                    El <strong>Acondicionador de Señal</strong> nos permite siempre obtener una lectura de calidad. Esto lo logran aislando las señales de campo mediante una protección de tipo galvánica, de modo que su sistema de control no se vea afectado por interferencias. Sus principales ventajas son:
                </p>
                <ul class="custom-list mb-4">
                    <li>Proteger la señal de medición frente a desviaciones.</li>
                    <li>Filtrar las interferencias electromagnéticas en campos cercanos.</li>
                    <li>Evitar que se produzcan compensaciones de corriente (bucles de tierra).</li>
                </ul>
                <a class="btn-circle d-inline-block mt-3" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal" target="_blank" style="min-width: 250px;">Ver catálogo completo en Tienda</a>
            </div>
        </div>
    </div>

    <!-- Categorías -->
    <div class="bg-light-accent py-5">
        <div class="container text-center mb-5">
            <h2 class="section-title" style="margin-top: 0 !important;">Tipos de Acondicionadores</h2>
        </div>

        <div class="products-grid">
            
            <!-- Digitales -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-microchip"></i>
                </div>
                <h4>Acondicionadores Digitales</h4>
                <p>Los acondicionadores de señal digital (discreta) y los módulos de relevadores son dispositivos fundamentales para interconectar de forma segura sistemas de control (como PLCs, PACs o microcontroladores) con los actuadores y sensores en producción.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="signal6">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal-digitales" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

            <!-- Corriente -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-plug"></i> <!-- ÍCONO CORREGIDO PARA FA 4.7.0 -->
                </div>
                <h4>Acondicionadores de Corriente</h4>
                <p>Los acondicionadores de corriente son muy efectivos cuando nuestro sistema digital puede medir señales análogas, pero solo en un rango de corriente de 0 a 20mA. De esta manera se puede medir altas tensiones o señales que los sistemas no aceptan directamente.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="acond_corriente">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal-analogos-corriente" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

            <!-- Voltaje -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-bolt"></i>
                </div>
                <h4>Acondicionadores de Voltaje</h4>
                <p>Los acondicionadores de voltaje son eficientes cuando se trata de medir altas tensiones o señales analógicas que los sistemas digitales no pueden aceptar en sus entradas. Ayudan a estandarizar señales físicas de diferentes índoles a salidas de 0~5Vdc, 0~10Vdc o 2~10Vdc.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="acond_voltaje">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal-analogos-voltaje" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

            <!-- Temperatura -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-thermometer-half"></i>
                </div>
                <h4>Acondicionadores de Temperatura</h4>
                <p>Nos permiten admitir una señal de entrada (RTD, Termopar) y realizar una amplificación de alta precisión, con derivas despreciables y poco ruido. Estos dispositivos pueden realizar diferentes funciones de linealización y compensación dependiendo el proyecto.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="acond_temperatura">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal-analogos-temperatura" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

            <!-- Universal -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-cogs"></i>
                </div>
                <h4>Acondicionadores Universales</h4>
                <p>Los acondicionadores de señal universales entregan un gran desempeño máximo en un solo dispositivo. Son programables por medio de software (o interruptores DIP), por lo que es posible recibir y enviar un amplio rango de tipos de señales estandarizadas.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="acondicionadores">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/sensores-y-transductores-acondicionadores-de-senal-analogos-universal" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

            <!-- Peso y Fuerza -->
            <div class="category-card">
                <div class="icon-container">
                    <i class="fa fa-balance-scale"></i>
                </div>
                <h4>Acondicionadores de Peso y Fuerza</h4>
                <p>Dispositivos indispensables para celdas de carga y galgas extensiométricas. Transforman señales extremadamente pequeñas en milivoltios (mV/V) a formatos analógicos o digitales robustos que pueden ser interpretados directamente por un PLC o sistema de adquisición de datos.</p>
                <div class="actions">
                    <a class="btn-circle btn-outline" href="acond_peso_fuerza">Ver Modelos</a>
                    <a class="btn-circle" href="https://tienda.logicbus.com.mx/Celdas-de-carga_c_3033.html" target="_blank"><i class="fa fa-shopping-cart"></i> Tienda</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA TÉCNICA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a seleccionar el acondicionador de señal adecuado para tu proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <!-- Archivos JS y Footer -->
    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>
</html>