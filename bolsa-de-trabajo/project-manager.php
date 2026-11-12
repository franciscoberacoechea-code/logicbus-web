<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title> Project Manager - Vacantes -Logicbus</title>

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
            <h1 class="title blue">Project Manager</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <ul class="paragraph blue pt-3 pb-5 text-justify">
                <li>Nivel de estudios: Mecatrónico, electico, sistemas electrónicos, Industrial.</li>
                <li>Experiencia profesional: 3 años en proyectos de automatización.</li>
                <li>Ingles Avanzado.</li>
                <li>Conocimiento en la industria electrónica e integración de proyectos.</li>
            </ul>
            <div class="row">
                <div class="col-12 col-md-7">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Desarrollar planes detallados de proyecto y oportunidades asignadas, que incluyen el alcance, los objetivos, los plazos y los recursos necesarios.</li>
                        <li>Gestionar el presupuesto de los proyectos, realizar un seguimiento de los costos y garantizar que se mantenga dentro de los límites establecidos.</li>
                        <li>Seleccionar y dirigir un equipo de trabajo, asignar tareas, motivar a los miembros del equipo y se asegura de que estén alineados con los objetivos del proyecto.</li>
                        <li>Mantener a todas las partes interesadas informadas sobre el progreso del proyecto, los problemas y las decisiones importantes.</li>
                        <li>Anticipar posibles obstáculos en el proceso de venta del proyecto y desarrollar estrategias para mitigarlos.</li>
                        <li>Garantizar que el proyecto se entregue con los niveles de calidad requeridos.</li>
                        <li>Supervisar constantemente el progreso del proyecto, realizar ajustes según sea necesario y garantizar que se cumplan los plazos.</li>
                        <li>Mantener registros y documentación del proyecto, para la revisión post proyecto.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Educación mínima: Educación superior - Licenciatura</li>
                        <li>3 años de experiencia</li>
                        <li>Idiomas: Inglés</li>
                        <li>Edad: entre 28 y 40 años</li>
                        <li>Conocimientos: Microsoft Excel</li>
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