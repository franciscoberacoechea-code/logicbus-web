<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>8004EC - Tarjeta PCI Express con 16 Entradas Digitales Aisladas y 16 Salidas a Relevador Reed | Logicbus
    </title>

    <meta name="description"
        content="Tarjeta PCI Express con 16 entradas digitales aisladas ópticamente (3-30 Vdc) y 16 salidas a relevador Reed (500 mA / 10W máx. por canal). Incluye cable de 72 pulgadas (1.82 mts) con conector DB78 macho a un DB37 hembra (entradas) y un DB37 macho (salidas). Se recomienda adquirir 2 kits de bloques de terminales TB02-KT para conexión a tornillo">
    <meta name="keywords"
        content="8004EC, Tarjeta PCI, entradas digitales, interfaz PCI, salidas a relevador, Sealevel, Logicbus">

    <?php echo isset($favicon) ? $favicon : ''; ?>
    <?php echo isset($boostrap_css) ? $boostrap_css : '<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">'; ?>
    <?php echo isset($own_file_css) ? $own_file_css : '<link rel="stylesheet" type="text/css" href="libreria/estilos.css">'; ?>
    <?php echo isset($subcategorias) ? $subcategorias : ''; ?>
    <?php echo isset($menu) ? $menu : ''; ?>
    <?php echo isset($estilos) ? $estilos : ''; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo isset($footer_css) ? $footer_css : ''; ?>

    <style>
        /* Reutilizando los estilos de la plantilla principal */
        #leftBar {
            display: none;
        }

        .btn-circle {
            text-transform: none !important;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 800px;
            margin: 0 auto 50px;
            padding: 0 15px;
        }

        @media (min-width: 992px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }
    </style>
</head>

<body onLoad="if(typeof menu_actual === 'function') menu_actual();">
    <?php echo isset($var_body) ? $var_body : ''; ?>
    <?php if (file_exists("libreria/header.view.php")) require("libreria/header.view.php"); ?>

    <div class="container mt-4 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="pci_express" class="blue link-orange">PCI express</a></li>
                <li class="breadcrumb-item"><a href="pci_express_digi" class="blue link-orange">Digital E/S</a></li>
                <li class="breadcrumb-item active" aria-current="page">8004EC</li>
            </ol>
        </nav>
    </div>

    <h1 class="main-title">
        <span style="color: var(--lb-primary); font-size: inherit; line-height: inherit;">8004EC</span>
        <span
            style="color: var(--lb-accent); font-size: inherit; line-height: inherit; display: block; margin-top: 5px;">TARJETA
            PCI EXPRESS E/S DIGITAL AISLADA</span>
    </h1>

    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="https://www.logicbus.com.mx/imagenes/03/8004EC-3.jpg" alt="Tarjeta PCI: 8004EC"
                    class="img-fluid mb-4" style="max-height: 350px; object-fit: contain;">
                <br>
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/8004EC_p_38477.html" target="_blank"
                    style="width: 100%; max-width: 250px;">Comprar en Tienda</a>
            </div>

            <div class="col-md-7">
                <p class="intro-text" style="text-align: justify; margin-bottom: 15px;">
                    La interfaz de E/S digital PCI Express 8004EC proporciona 16 entradas ópticamente aisladas y 16
                    salidas de relé Reed. Las entradas aisladas protegen la PC y otros equipos sensibles de los picos de
                    voltaje y las corrientes de bucle de tierra que son comunes en entornos industriales. Las salidas
                    proporcionan cierres de interruptor de contacto seco de alta calidad y larga duración adecuados para
                    aplicaciones de baja corriente. Los relés de láminas normalmente están abiertos y cerrados cuando
                    están energizados. La placa es compatible con PCI Express X1 y es compatible con cualquier ranura
                    PCI Express.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 15px;">
                    Las entradas del modelo 8004EC soportan un rango amplio de 3 a 30 Vdc, eliminando la necesidad de
                    ordenar una versión especial para aplicaciones estándar de 24 Vdc. Si requiere un rango
                    personalizado de hasta 36 Vdc o la flexibilidad de cambiar las resistencias de entrada usted mismo,
                    consulte el modelo <a href="https://tienda.logicbus.com.mx/8004HEC_p_38478.html" target="_blank"
                        style="color: var(--lb-primary); font-weight: bold;">8004HEC</a>.
                </p>
                <p class="intro-text" style="text-align: justify; margin-bottom: 15px;">
                    Los controladores y utilidades del software SeaIO Classic facilitan la instalación y operación del
                    8004EC en Microsoft y el paquete SeaIO Classic – Linux para SO Linux.
                </p>
                <p class="intro-text" style="text-align: justify;">
                    Comience a desarrollar su E/S digital con el Manual de E/S digital que le proporcionará información
                    útil que utilizará una y otra vez. Consulte el Capítulo 1 para obtener una descripción general de
                    los principios lógicos.
                </p>
            </div>
        </div>
    </div>

    <nav class="btn-navigation">
        <a class="btn-circle" href="#caracteristicas">Características</a>
        <a class="btn-circle" href="#especificaciones">Especificaciones</a>
        <a class="btn-circle" href="#accesorios">Accesorios</a>
        <a class="btn-circle" href="#descargas">Descargas</a>
    </nav>

    <h2 class="section-title" id="caracteristicas">Características Principales</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <ul style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                    <li>Cumple con las directivas RoHS y WEEE</li>
                    <li>16 salidas de relé Reed (SPST)</li>
                    <li>16 entradas ópticamente aisladas con rango de 10 a 30 Vdc</li>
                    <li>Relevadores Reed de 10W altamente confiables</li>
                    <li>Alimentación (+ 5V y + 12V) y conexión a tierra en el conector</li>
                    <li>Compatible con bus universal (3.3V y 5V)</li>
                    <li>Incluye cable de 72 pulgadas (1.82 mts) con conector DB78 Macho a un DB37 Macho y un DB37 Hembra
                    </li>
                    <li>El software SeaIO Classic es compatible con los sistemas operativos Microsoft Windows</li>
                    <li>Soporte de software para Linux disponible</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-light-accent py-5" id="especificaciones">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0 !important;">Datos Técnicos</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center bg-white"
                    style="max-width: 900px; margin: 0 auto; border: 1px solid #dee2e6;">
                    <thead style="background-color: #5499C7; color: white;">
                        <tr>
                            <th width="40%" class="align-middle border-0">Especificación</th>
                            <th width="60%" class="align-middle border-0">Detalle Técnico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle"><strong>Conector de la Tarjeta</strong></td>
                            <td class="align-middle">DB-78F (Hembra)</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Conector(es) del Cable</strong></td>
                            <td class="align-middle">(1) DB-37M (Macho) y (1) DB-37F (Hembra)</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Corriente de Contacto</strong></td>
                            <td class="align-middle">500 mA</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Voltaje de Contacto</strong></td>
                            <td class="align-middle">100 VDC/VAC</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>E/S Digitales</strong></td>
                            <td class="align-middle">Entradas Aisladas, Salidas a Relevador Reed</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Rango de Humedad</strong></td>
                            <td class="align-middle">10 – 90% Humedad Relativa, sin condensación</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Corriente de Entrada</strong></td>
                            <td class="align-middle">3 – 50 mA</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Aislamiento de Entrada</strong></td>
                            <td class="align-middle">300V</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Rango de Entrada</strong></td>
                            <td class="align-middle">3-30 VDC</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Interfaz de Host</strong></td>
                            <td class="align-middle">PCI Express</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Número de Entradas</strong></td>
                            <td class="align-middle">16</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Número de Salidas</strong></td>
                            <td class="align-middle">16</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Temperatura de Operación</strong></td>
                            <td class="align-middle">0°C a 70°C</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Especificación de Salida</strong></td>
                            <td class="align-middle">10VA (10W)</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Bracket de PC</strong></td>
                            <td class="align-middle">Altura Estándar</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Número de Puertos</strong></td>
                            <td class="align-middle">16 Entradas / 16 Salidas</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Cumplimiento RoHS</strong></td>
                            <td class="align-middle">Sí</td>
                        </tr>
                        <tr>
                            <td class="align-middle"><strong>Temperatura de Almacenamiento</strong></td>
                            <td class="align-middle">-50°C a 105°C</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h2 class="section-title" id="accesorios">Accesorios Recomendados</h2>
    <div class="products-grid">
        <div class="product-card text-center d-flex flex-column p-4 border rounded"
            style="background-color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/03/TB02.jpg" alt="TB02"
                style="max-height: 200px; object-fit: contain; margin-bottom: 20px;">
            <h4 style="color: var(--lb-primary); margin-bottom: 15px;">TB02</h4>
            <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/TB02_p_5374.html" target="_blank"
                style="width: 100%;">Ver en Tienda</a>
        </div>

        <div class="product-card text-center d-flex flex-column p-4 border rounded"
            style="background-color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <img loading="lazy" src="https://tienda.logicbus.com.mx/assets/images/03/tb02-kt.jpg" alt="TB02-KT"
                style="max-height: 200px; object-fit: contain; margin-bottom: 20px;">
            <h4 style="color: var(--lb-primary); margin-bottom: 15px;">TB02-KT</h4>
            <a class="btn-circle mt-auto" href="https://tienda.logicbus.com.mx/TB02-KT_p_5375.html" target="_blank"
                style="width: 100%;">Ver en Tienda</a>
        </div>
    </div>

    <div class="bg-white py-5" id="descargas">
        <div class="container text-center">
            <h2 class="section-title" style="margin-top: 0 !important;">Catálogos y Manuales</h2>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 20px;">
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/assets/PDF/03/8004ec-datasheet.pdf"
                    target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Hoja de Datos (Datasheet)
                </a>
                <a class="btn-circle" href="https://tienda.logicbus.com.mx/assets/PDF/03/8004ec-User-Manual.pdf"
                    target="_blank" style="min-width: 250px;">
                    <i class="fa fa-file-pdf-o" style="margin-right: 8px;"></i> Manual de Usuario
                </a>
            </div>
        </div>
    </div>

    <div class="section-blue text-center py-5 mt-5" style="background-color: var(--lb-primary);">
        <div class="container mb-5">
            <h2 class="title" style="color: var(--lb-white); margin-bottom: 15px;">¿NECESITAS ASESORÍA?</h2>
            <span class="paragraph" style="color: var(--lb-white); font-size: 1.1rem;">Nuestros ingenieros están listos
                para ayudarte a integrar la tarjeta ideal a tu sistema.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
    </div>

    <?php echo isset($google_analytics) ? $google_analytics : ''; ?>
    <?php echo isset($var_headers) ? $var_headers : ''; ?>
    <?php if (file_exists("libreria/footer.view.php")) require("libreria/footer.view.php"); ?>

    <?php echo isset($jquery_js) ? $jquery_js : '<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'; ?>
    <?php echo isset($bootstrap_js) ? $bootstrap_js : '<script src="libreria/bootstrap/dist/js/bootstrap.bundle.min.js"></script>'; ?>
    <?php echo isset($own_file_js) ? $own_file_js : ''; ?>
    <?php echo isset($var_footer) ? $var_footer : ''; ?>
</body>

</html>