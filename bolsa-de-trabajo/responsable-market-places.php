<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Responsable de Market places - Vacantes - Logicbus</title>

    <meta name="description" content="Explora las emocionantes oportunidades de empleo en Logicbus S.A de C.V. Descubre nuestras vacantes y únete a un equipo dedicado a la innovación y el crecimiento en el campo de la tecnología." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <?php require("../libreria/header.view.php"); ?>
    <section class="pb-5">
        <div>
            <img src="../images/vacantes/banner-ventas.webp" alt="Bolsa de trabajo área de ventas - Logicbus" title="Bolsa de trabajo área de ventas - Logicbus" width="100%">
        </div>
        <div class="container-fluid py-5">
            <h1 class="title blue">Responsable de Market places (eBay, Amazon, Mercado Libre)</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <p class="paragraph blue pt-3 pb-5 text-justify">Será responsable de administrar y optimizar las operaciones de ventas en plataformas de comercio electrónico como eBay, Amazon y Mercado Libre. Esta posición requiere un individuo altamente organizado y orientado a los resultados, con habilidades técnicas en el manejo de plataformas y una sólida comprensión de estrategias comerciales.</p>
            <div class="row">
                <div class="col-12 col-md-7">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Atención y seguimiento al cliente.</li>
                        <li>Apertura y cierre de ventas.</li>
                        <li>Alcanzar objetivos de venta.</li>
                        <li>Implementación de estrategias comerciales.</li>
                        <li>Posicionamiento de producto.</li>
                        <li>Seguimiento de lanzamientos, promociones, descuentos.</li>
                        <li>Especificación, homologación, catalogación y carga de artículos.</li>
                        <li>Generación de reportes de ventas diarias, semanales, mensuales.</li>
                        <li>Administración y generación de inventario para las plataformas.</li>
                        <li>Manejo de indicadores comerciales.</li>
                        <li>Selección y desarrollo de artículos con base a demanda o estratégia.</li>
                        <li>Procesamiento de ordenes de las plataformas.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Escolaridad: Licenciatura trunca o concluida en Administración de Empresas, Mercadotecnia, Relaciones Internacionales, + Ing. en Tecnologías de la información, Comunicación, comercio electrónico o afín.</li>
                        <li>Experiencia: Indispensable en eBay, Amazon, Mercado Libre (Altas y bajas, catalogación, edición, administración de portal) + Se realizan pruebas de conocimiento.</li>
                        <li>Gusto por la atención a clientes y ventas.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- BEGIN Podio web form -->
            <script src="https://podio.com/webforms/5867157/458183.js"></script>
            <!-- Agregamos el texto personalizado antes del formulario -->
            <script type="text/javascript">
                _podioWebForm.render("458183");
            </script>
            <noscript>
                <a href="https://podio.com/webforms/5867157/458183" target="_blank">Por favor, rellena el formulario</a>
            </noscript>
            <div class="podio-webform-container"></div>
            <!-- END Podio web form -->
        </div>
    </section>

    <section class="section-blue  py-5">
        <div class="container">
            <p class="paragraph white text-justify">Si crees que tienes las habilidades y experiencia necesarias para unirte a nuestro equipo, envíanos tu CV a <strong>rh@logicbus.com</strong> nos pondremos en contacto contigo lo antes posible. ¡Gracias por tu interés en nuestra empresa!</p>
        </div>
    </section>

    <!-- PIE DE PAGINA -->
    <?php require("../libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>