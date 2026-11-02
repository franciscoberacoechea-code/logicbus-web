<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <title>Protocolo BACnet para Automatización de Edificios - Logicbus</title>
    <meta name="description"
        content="Conoce sobre el protocolo BACnet (Building Automation and Control Networks), el estándar de comunicación para la automatización y control de edificios.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://www.logicbus.com.mx/bacnet">

    <!--- Estilos Necesarios-->
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
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">BACnet</li>
            </ol>
        </nav>
    </div>

    <!-- TÍTULO Y DESCRIPCIÓN PRINCIPAL -->
    <div class="container-fluid my-5">
        <h1 class="banner-title blue font-weight-bolder mb-5">Protocolo <b class="banner-title light-orange">BACnet</b>
        </h1>
        <p class="light-black paragraph text-justify px-md-5 px-1">BACnet (Building Automation and Control Networks) es
            un protocolo de comunicación de datos estandarizado y específicamente diseñado para redes de automatización
            y control de edificios. Permite la integración, monitoreo y comunicación eficiente entre diferentes sistemas
            y dispositivos de control dentro de un inmueble.</p>
    </div>

    <!-- BOTONES DE NAVEGACIÓN INTERNA -->
    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/BacNet_c_1271.html" target="_blank"><button
                class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#contacto"><button class="button button-white">Contacto</button></a>
    </div>

    <!-- CONTACTO (FORMULARIO ODOO) -->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white text-uppercase">Conoce más sobre la conectividad BACnet</h2>
            <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su
                proyecto</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>