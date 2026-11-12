<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Gerente Operativo - Vacantes - Logicbus</title>

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
            <h1 class="title blue">Gerente Operativo</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <p class="paragraph blue pt-3 pb-5 text-justify">Será el responsable de liderar y supervisar todas las actividades relacionadas con la atención al cliente, ventas y gestión de solicitudes en línea. Este puesto requiere habilidades sólidas de liderazgo, comunicación efectiva y capacidad para trabajar bajo presión en un entorno dinámico. Además, se espera experiencia en ingeniería industrial, mecatrónica o áreas afines, así como dominio avanzado del inglés y Excel.</p>
            <div class="row">
                <div class="col-12 col-md-7">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Revisión de atención a todos los chats online que se reciben.</li>
                        <li>Asignación, control y seguimiento de las solicitudes de clientes.</li>
                        <li>Revisión de correos en Gmail para priorizar urgentes y de mayor valor.</li>
                        <li>Revisión de Cotizaciones y seguimientos.</li>
                        <li>Revisión de pedidos venta detenidos por trámite.</li>
                        <li>Autorización para proceder con alguna modificación de descuentos.</li>
                        <li>Solicitar a soporte técnico, logística o finanzas que apoye con soluciones según correspondan.</li>
                        <li>Control de eventos erróneos y corrección de cada caso.</li>
                        <li>Coordinación de equipo de ventas ante situaciones diferentes o poco cotidianas.</li>
                        <li>Asegurar la satisfacción del cliente.</li>
                        <li>Apoyo con dudas operativas.</li>
                        <li>Realización y presentación de Reportes de Ventas.</li>
                        <li>Modificación de estrategias de ventas u operativas.</li>
                        <li>Revisión de Reporte de actividades del equipo a cargo.</li>
                        <li>Actualización del reporte de actividades y métricas del equipo.</li>
                        <li>Realización de los cálculos de envío para cotizaciones.</li>
                        <li>Pláticas con el equipo para ejecutar planes de mejora por resultados personales.</li>
                        <li>Participar en el proceso de reclutamiento de vacantes del área operativa.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Ingeniería Industrial, Mecatrónica, o afin.</li>
                        <li>Ingles Avanzado.</li>
                        <li>Habilidades de liderazgo, gestión, comunicación.</li>
                        <li>Capacidad para trabajo bajo presión.</li>
                        <li>Experiencia en equipos de automatización, control y pruebas.</li>
                        <li>Experiencia en atención a clientes y ventas.</li>
                        <li>Trabajo en equipo.</li>
                        <li>Excel avanzado.</li>
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