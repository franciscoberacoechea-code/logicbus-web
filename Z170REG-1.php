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
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Z170REG Duplicador y Aislador de Señal | Logicbus</title>
    
    <meta name="description" content="Módulo duplicador y aislador de señales analógicas universales Z170REG. Entrada configurable (TC, RTD, V, mA, Ohm) y dos salidas independientes.">
    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Capacitación, Capacitacion, Transporte, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, Indicador, Z170REG, Acondicionador, señal, entrada, análoga, analoga, universal">
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

        .intro-text strong {
            color: var(--lb-primary);
        }

        /* Listas personalizadas */
        .custom-list {
            font-size: 1.05rem;
            color: #555;
            line-height: 1.8;
            padding-left: 20px;
        }
        
        .custom-list li {
            margin-bottom: 8px;
        }
        
        .custom-list strong {
            color: #333;
        }

        /* Estilos Tabla Especificaciones */
        .specs-table th {
            background-color: #5499C7;
            color: white;
            text-align: left;
            font-weight: 600;
        }
        .specs-table td {
            vertical-align: middle;
        }
        .nested-list {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .nested-list li {
            margin-bottom: 5px;
        }
        .nested-list li::before {
            content: "•";
            color: var(--lb-primary);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
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
                <li class="breadcrumb-item"><a href="transductores_sensores" class="blue link-orange">Sensores / Transductores / Acondicionadores</a></li>
                <li class="breadcrumb-item"><a href="acondicionador-de-senal" class="blue link-orange">Universal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Z170REG</li>
            </ol>
        </nav>
    </div>

    <!-- Título Principal -->
    <h1 class="main-title mb-4">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">Z170REG-1</span>
        <span style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">DUPLICADOR Y AISLADOR DE SEÑAL</span>
    </h1>

    <!-- Contenido Superior e Introducción -->
    <div class="container mb-5">
        <div class="row align-items-center">
            <!-- Columna Imágenes -->
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <div class="d-flex justify-content-center align-items-center flex-wrap" style="gap: 15px;">
                    <img src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1.jpg" alt="Z170REG" title="Z170REG" class="img-fluid rounded border" style="max-height: 250px; object-fit: contain;">
                    <img src="https://tienda.logicbus.com.mx/assets/images/44/Z170REG-1%20(1).jpg" alt="Z170REG Frontal" title="Z170REG Frontal" class="img-fluid rounded border" style="max-height: 250px; object-fit: contain;">
                </div>
                <br>
                <a class="btn-circle mt-3" href="https://tienda.logicbus.com.mx/search.asp?keyword=Z170REG" target="_blank" style="width: 100%; max-width: 250px;">Comprar en Tienda</a>
            </div>
            
            <!-- Columna Texto -->
            <div class="col-md-7">
                <p class="intro-text" style="text-align: justify; margin-bottom: 20px; font-size: 1.15rem;">
                    <strong>Módulo duplicador y aislador de señales analógicas universales.</strong> 1 entrada universal configurable como voltaje (0-10 V), corriente (0-20 mA), potenciómetro (1 kΩ a 100 kΩ), termopar (J, K, R, S, T, B, E, N) o RTD (Pt100, Pt500, Pt1000, Ni100; de 2, 3 o 4 hilos).
                </p>
                <p class="intro-text" style="text-align: justify;">
                    2 salidas independientes configurables como voltaje (0-10 V) o corriente (0-20 mA activo o pasivo) con resolución de 14 bits. Aislamiento galvánico de 4 vías a 1500 Vac. Configuración mediante interruptores DIP, software o app móvil a través de puerto Micro-USB. Montaje en riel DIN. Alimentación: 10 a 40 Vdc o 19 a 28 Vac (fuente no incluida).
                </p>
            </div>
        </div>
    </div>

    <!-- Navegación Interna -->
    <nav class="btn-navigation">
        <a class="btn-circle" href="#caracteristicas">Características</a>
        <a class="btn-circle" href="#especificaciones">Especificaciones</a>
        <a class="btn-circle" href="#descargas">Descargas</a>
    </nav>

    <!-- Características -->
    <h2 class="section-title" id="caracteristicas">Características Principales</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <ul class="custom-list text-justify" style="columns: 1; @media (min-width: 768px) { columns: 2; }">
                    <li>Entrada seleccionable: V, mA, Ohm, termopar (TC), termorresistencia (RTD).</li>
                    <li>Doble salida seleccionable: V o mA (activo/pasivo).</li>
                    <li>Tiempo de muestreo de 5 a 20 ms.</li>
                    <li>Resolución a 14 bits.</li>
                    <li>Aislamiento galvánico de 1,500 Vca (alimentación / entrada / salidas).</li>
                    <li>Configuración mediante interruptores DIP, software o APP en Android.</li>
                    <li>Conector Micro USB en el panel frontal para fácil acceso.</li>
                    <li>Temperatura en operación de -10 a 60°C.</li>
                    <li>Requiere alimentación 10 a 40 Vdc o 19 a 28 Vac (no incluye fuente).</li>
                    <li>Alimentación para transductores integrada.</li>
                    <li>Diseño para montaje en riel DIN.</li>
                    <li>Certificación UL.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Especificaciones Técnicas -->
    <div class="bg-light-accent py-5" id="especificaciones">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">Especificaciones Técnicas</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered bg-white specs-table" style="max-width: 1000px; margin: 0 auto; border: 1px solid #dee2e6;">
                    <thead>
                        <tr>
                            <th width="35%" class="border-0">Parámetro</th>
                            <th width="65%" class="border-0">Especificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Alimentación</strong></td>
                            <td>10 a 40 Vdc o 19 a 28 Vac</td>
                        </tr>
                        <tr>
                            <td><strong>Alimentación para transductores</strong></td>
                            <td>Sí, Máx. 25 mA, 17 Vdc</td>
                        </tr>
                        <tr>
                            <td><strong>Consumo de energía</strong></td>
                            <td>0.5 a 2 W</td>
                        </tr>
                        <tr>
                            <td><strong>Aislamiento</strong></td>
                            <td>1,500 Vac</td>
                        </tr>
                        <tr>
                            <td><strong>LEDs de estado</strong></td>
                            <td>Alimentación, Alarma</td>
                        </tr>
                        <tr>
                            <td><strong>Clase de precisión</strong></td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td><strong>Interfaz</strong></td>
                            <td>Micro USB (panel frontal)</td>
                        </tr>
                        <tr>
                            <td><strong>Canal de entrada</strong></td>
                            <td>
                                1 entrada configurable:<br><br>
                                <ul class="nested-list" style="margin-left: 20px;">
                                    <li>VOLTAJE: 0 a 10 V</li>
                                    <li>CORRIENTE: 0..20 mA (módulo activo/pasivo)</li>
                                    <li>Potenciómetro: 1 kΩ..100 kΩ</li>
                                    <li>Termopar (TC): J, K, R, S, T, B, E, N</li>
                                    <li>Termorresistencia (RTD): Pt100, Pt500, Pt1000, Ni100</li>
                                    <li>Resolución: 14 bits</li>
                                    <li>Periodo de muestreo: Configurable de 5 a 20 ms</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Canales de salida</strong></td>
                            <td>
                                2 salidas configurables:<br><br>
                                <ul class="nested-list" style="margin-left: 20px;">
                                    <li>VOLTAJE: 0 a 10 V</li>
                                    <li>CORRIENTE: 0 a 20 mA (activo/pasivo)</li>
                                    <li>Resolución: 14 bits</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Tiempo de respuesta</strong></td>
                            <td>< 25 ms</td>
                        </tr>
                        <tr>
                            <td><strong>Deriva térmica</strong></td>
                            <td>0.01% / K</td>
                        </tr>
                        <tr>
                            <td><strong>Linealidad</strong></td>
                            <td><1% (entrada), 0.01% (salida)</td>
                        </tr>
                        <tr>
                            <td><strong>Programación</strong></td>
                            <td>Interruptores DIP<br>Software (EASY SETUP)<br>Aplicación Android (App EASY SETUP)</td>
                        </tr>
                        <tr>
                            <td><strong>Temperatura de operación</strong></td>
                            <td>-10 a 65°C</td>
                        </tr>
                        <tr>
                            <td><strong>Dimensiones (An x Al x Pr)</strong></td>
                            <td>17.5 x 100 x 112 mm</td>
                        </tr>
                        <tr>
                            <td><strong>Conexiones</strong></td>
                            <td>Bloques de terminales de tornillo extraíbles</td>
                        </tr>
                        <tr>
                            <td><strong>Carcasa</strong></td>
                            <td>Nylon 6 con 30% de fibra de vidrio</td>
                        </tr>
                        <tr>
                            <td><strong>Montaje</strong></td>
                            <td>Guía para riel DIN de 35 mm (IEC/EN 60715)</td>
                        </tr>
                        <tr>
                            <td><strong>Grado de protección</strong></td>
                            <td>IP20</td>
                        </tr>
                        <tr>
                            <td><strong>Peso</strong></td>
                            <td>200 g</td>
                        </tr>
                        <tr>
                            <td><strong>Estándar</strong></td>
                            <td>CE</td>
                        </tr>
                        <tr>
                            <td><strong>Normas</strong></td>
                            <td>EN 61000-6-4, EN 61000-6-2, EN 61010-1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Descargas / Manuales -->
    <div class="py-5" id="descargas">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Descargas</h2>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 20px;">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/assets/PDF/44/z170reg-1_datasheet_en.pdf" target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Hoja de Datos
                </a>
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/assets/PDF/44/Z170REG-1_manual_ES.pdf" target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Manual de Usuario
                </a>
            </div>
        </div>
    </div>

    <!-- Banner de Contacto Final (Formulario Odoo) -->
    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos para resolver tus dudas técnicas sobre el Z170REG.</span>
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