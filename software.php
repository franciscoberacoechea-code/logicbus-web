<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Software y Herramientas de Desarrollo Industrial | Logicbus</title>
    <meta name="description" content="Explore nuestro catálogo de software para equipos industriales: sistemas SCADA, programación de PLCs, registro de datos y utilerías para proyectos de automatización.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://www.logicbus.com.mx/software-y-herramientas-de-desarrollo.php">
    
    <!--- Estilos Necesarios (Variables PHP) -->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- BREADCRUMBS -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="https://www.logicbus.com.mx/productos.php" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Software y Herramientas de Desarrollo</li>
            </ol>
        </nav>
    </div>

    <!-- BANNER DE VIDEO O IMAGEN -->
    <div class="mb-5">
        <video autoplay muted loop width="100%" poster="images/banner/www/banner-software.png">
            <source src="video/software-industrial.mp4" type="video/mp4">
        </video>
    </div>

    <!-- TÍTULO Y DESCRIPCIÓN PRINCIPAL -->
    <div class="container-fluid my-5">
        <h1 class="banner-title blue font-weight-bolder mb-5 text-center">
            Software y <b class="banner-title light-orange">Herramientas de Desarrollo</b>
        </h1>
        
        <div class="px-md-5 px-3">
            <p class="light-black paragraph text-justify">
                En <strong>Logicbus</strong> te ofrecemos 3 niveles de <strong>Software</strong> para tus proyectos de automatización y control:
            </p>
            
            <p class="light-black paragraph text-justify mt-4">
                <strong>1. Software SCADA:</strong><br>
                Por sus siglas en inglés (Supervisión, Control y Adquisición de Datos), este se utiliza para monitorear y controlar cientos o miles de variables. SCADA es robusto y configurable, especial para proyectos industriales donde se requiere confiabilidad y gestión remota.
            </p>

            <p class="light-black paragraph text-justify mt-4">
                <strong>2. Entornos de Programación y Desarrollo:</strong><br>
                Ambientes donde se puede generar código a la medida. Estos programas tienen muchas utilerías que pueden ayudarle al desarrollo de proyectos de medición y automatización en poco tiempo. Algunos ejemplos de los softwares son DasyLab, HMIware y Win ProLadder.
            </p>

            <p class="light-black paragraph text-justify mt-4">
                <strong>3. Aplicaciones Listas y Registro de Datos:</strong><br>
                Software o aplicaciones listas donde se pueden visualizar señales de las tarjetas DAQ o registradores de datos. Cuentan con funcionalidades como exportar a Excel, generar alarmas, enviar emails y visualizar históricos. Algunos ejemplos con estas funcionalidades son SensIT, EZ DataLogger, DAQami y TracerDAQ Pro.
            </p>

            <div class="section-white border-blue p-4 mt-5 text-center shadow-sm">
                <h4 class="blue font-weight-bold">Nota Técnica</h4>
                <p class="light-black paragraph mb-3">
                    ¿Sabes cómo seleccionar un Software de Adquisición de Datos para tarjetas de la familia USB, PCI-DAS y WEB? Te dejamos esta nota técnica para que puedas seleccionar la mejor opción disponible para tus aplicaciones.
                </p>
                <a href="https://www.logicbus.com.mx/softwaredaq" target="_blank" class="button button-orange button-text">Leer Nota Técnica</a>
            </div>
            
            <div class="text-center mt-5">
                <a class="button-text" href="https://tienda.logicbus.com.mx/software-y-herramientas-de-desarrollo.html" target="_blank">
                    <button class="button button-white">Ver catálogo completo en Tienda</button>
                </a>
            </div>
        </div>
    </div>

    <!-- SECCIÓN: CONTACTO / FORMULARIO ODOO -->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white text-uppercase">¿NECESITA ASESORÍA PARA ELEGIR SU SOFTWARE INDUSTRIAL?</h2>
            <span class="paragraph white">Póngase en contacto con nuestros ingenieros especializados. Le ayudaremos a seleccionar el sistema ideal (SCADA, DAQ, HMI) para la arquitectura de su proyecto.</span>
        </div>
        <!-- BEGIN Odoo web form -->
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen style="width:100%; min-height:1200px; border:0;"></iframe>
            </div>
        </div>
        <!-- END Odoo web form -->
    </div>

    <!-- PIE DE PÁGINA Y SCRIPTS -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>
</html>