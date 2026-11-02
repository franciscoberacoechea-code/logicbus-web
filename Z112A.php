<?php
require("admin/config.php");
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
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
    <title>Z112A Amplificador de Contacto Digital 1 Canal | Logicbus</title>
    
    <meta name="description" content="El módulo Z112A es un amplificador de contacto digital para sensores NAMUR, fotoeléctricos o NPN/PNP. Aísla y conmuta mediante relevador 5A 250Vac">
    <meta name="keywords" content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Automatizacion, Seguridad, Consultoría, Consultoria, Integración, Integracion, Proyecto, Radio Frecuencia, Cubos, Análisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">

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
        }

        .intro-text strong {
            color: var(--lb-primary);
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
                <li class="breadcrumb-item"><a href="transductores_sensores" class="blue link-orange">Sensores - Transductores - Acondicionadores</a></li>
                <li class="breadcrumb-item"><a href="signal6" class="blue link-orange">Acondicionador digital</a></li>
                <li class="breadcrumb-item active" aria-current="page">Z112A</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Z112A</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">AMPLIFICADOR DE CONTACTO DIGITAL 1 CANAL</span>
    </h1>

    <!-- Contenido -->
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="imagenes/44/Z112A.jpg" alt="Z112A" title="Z112A" class="img-fluid mb-4" style="max-height: 350px; object-fit: contain;">
                <br>
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/Z112A_p_4217.html" target="_blank" style="width: 100%; max-width: 250px;">Comprar en Tienda</a>
            </div>
            
            <div class="col-md-7">
                <p class="intro-text" style="text-align: justify; margin-bottom: 20px; font-size: 1.15rem;">
                    <strong>Amplificador y aislador digital de 1 canal para sensores ON/OFF.</strong> Acondiciona señales de múltiples tecnologías (NPN, PNP, NAMUR, Reed, Hall, Fotoeléctricos) de hasta 400 Hz, accionando de forma segura cargas de potencia mediante su salida a relevador SPDT (5 A). Incluye divisor de pulsos y montaje en riel DIN.
                </p>
                <p class="intro-text" style="text-align: justify;">
                    Amplificador digital para sensores ON/OFF de un solo canal. Cuenta con sistema divisor de pulsos (de 1 a 256) configurable por DIP-switches y duración de pulso de salida configurable (de 100 a 500 ms) con potenciometro. 1 entrada para contacto optoaislado, Reed, NPN de 2/3 hilos, PNP de 3 hilos, NAMUR, pulsos de 24 Vdc, sensor fotoeléctrico o sensor de efecto Hall (frecuencia máxima de 400 Hz). 1 salida a relevador SPDT (5 A a 250 Vac o 1 A a 30 Vdc en carga resistiva). Aislamiento galvánico de 3 vías a 1500 Vac. Montaje en riel DIN. Alimentación: 19 a 40 Vdc o 19 a 28 Vac (fuente no incluida).
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación Interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="#caracteristicas">Características</a>
        <a class="btn-circle" href="#especificaciones">Especificaciones</a>
        <a class="btn-circle" href="#esquemas">Esquemas</a>
        <a class="btn-circle" href="#aplicacion">Aplicación</a>
        <a class="btn-circle" href="#descargas">Descargas</a>
    </nav>

    <!-- Características -->
    <h2 class="section-title" id="caracteristicas">Características Principales</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <ul style="font-size: 1.1rem; color: #555; line-height: 1.8; text-align: justify;">
                    <li><strong>Entrada Universal Discreta:</strong> Contacto seco optoaislado, Reed, NPN (2/3 hilos), PNP (3 hilos), pulsos de 24 Vdc, NAMUR, fotoeléctrico y sensor Hall. Frecuencia máxima de 400 Hz.</li>
                    <li><strong>Salida de Potencia:</strong> 1 Relevador SPDT (Capacidad: 5 A a 250 Vac o 1 A a 30 Vdc en carga resistiva).</li>
                    <li><strong>Aislamiento Galvánico:</strong> 3 vías a 1500 Vac (protección entre Alimentación / Entrada / Salida).</li>
                    <li><strong>Divisor de Pulsos:</strong> Rango de 1 a 256, fácilmente configurable mediante DIP-switches.</li>
                    <li><strong>Ajuste de Salida:</strong> Duración del pulso de salida ajustable (de 100 a 500 ms) mediante potenciómetro frontal.</li>
                    <li><strong>Montaje:</strong> Estándar para Riel DIN de 35 mm.</li>
                    <li><strong>Alimentación:</strong> 19 a 40 Vdc o 19 a 28 Vac (50-60 Hz).</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Especificaciones Técnicas (Tabla Bootstrap) -->
    <div class="bg-light-accent py-5" id="especificaciones">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">Especificaciones Técnicas</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered bg-white" style="max-width: 900px; margin: 0 auto; border: 1px solid #dee2e6;">
                    <thead style="background-color: #5499C7; color: white; text-align: center;">
                        <tr>
                            <th width="40%" class="align-middle border-0">Parámetro</th>
                            <th width="60%" class="align-middle border-0">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle text-center"><strong>Alimentación</strong></td>
                            <td class="align-middle">19 a 40 Vdc ó 19 a 28 Vac 50-60 Hz</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Consumo de energía</strong></td>
                            <td class="align-middle">Máx. 2.5W</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Indicadores</strong></td>
                            <td class="align-middle">LED de encendido y relevador energizado</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Entrada</strong></td>
                            <td class="align-middle">Por contacto seco, NPN/PNP 2 o 3 hilos a 12 o 24 Vdc, pulsos 24 Vdc, sensor NAMUR, sensor fotoeléctrico, sensor Hall, frecuencia ó pulsos a 400 Hz</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Salida</strong></td>
                            <td class="align-middle">Relevador tipo SPDT a 1A-30 Vdc ó 5A -250 Vac</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Condiciones ambientales</strong></td>
                            <td class="align-middle">Temperatura: 0 a +50°C<br>Humedad: 30 a 90%, a +40°C</td>
                        </tr>
                        <tr>
                            <td class="align-middle text-center"><strong>Dimensiones y peso</strong></td>
                            <td class="align-middle">17.5 x 100 x 112 mm, 200g</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Esquemas -->
    <h2 class="section-title" id="esquemas">Esquemas</h2>
    <div class="container mb-5">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <h4 style="color: var(--lb-primary); font-size: 1.1rem; margin-bottom: 15px;">Esquema de alimentación, entrada y salida</h4>
                <img src="imagenes/44/Z112A-b.JPG" alt="Esquema de alimentación entrada y salida" class="img-fluid rounded border" style="max-width: 100%;">
            </div>
            <div class="col-md-6 mb-4">
                <h4 style="color: var(--lb-primary); font-size: 1.1rem; margin-bottom: 15px;">Esquema de alimentación</h4>
                <img src="imagenes/44/Z112A-c.JPG" alt="Esquema de alimentación" class="img-fluid rounded border" style="max-width: 100%;">
            </div>
        </div>
    </div>

    <!-- Aplicación -->
    <div class="bg-light-accent py-5" id="aplicacion">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Aplicación</h2>
            <img src="https://www.logicbus.com.mx/imagenes/44/caso-z112A.jpg" alt="Caso de Aplicación Z112A" class="img-fluid rounded shadow-sm mt-3" style="max-width: 100%;">
        </div>
    </div>

    <!-- Descargas / Manuales -->
    <div class="py-5" id="descargas">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Descargas</h2>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 20px;">
                <a class="btn-circle" href="https://www.logicbus.com.mx/pdf/44/z112a_ds.pdf" target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Hoja de Datos
                </a>
                <a class="btn-circle" href="https://www.logicbus.com.mx/pdf/44/Manual-de-usuario-Z112A.pdf" target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Manual de Usuario
                </a>
            </div>
        </div>
    </div>

    <!-- (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para ayudarte a resolver tus dudas sobre este amplificador.</span>
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