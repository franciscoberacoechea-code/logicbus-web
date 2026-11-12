<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Ingeniero de Ventas Técnicas - Vacantes - Logicbus</title>

    <meta name="description" content="Explora las emocionantes oportunidades de empleo en Logicbus S.A de C.V. Descubre nuestras vacantes y únete a un equipo dedicado a la innovación y el crecimiento en el campo de la tecnología." />
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
            <img src="../images/vacantes/banner-ingenieria.webp" alt="Bolsa de trabajo área de ingeniería - Logicbus" title="Bolsa de trabajo área de ingeniería - Logicbus" width="100%">
        </div>
        <div class="container-fluid py-5">
            <h1 class="title blue">Ingeniero de Ventas Técnicas</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <ul class="paragraph blue pt-3 pb-5 text-justify">
                <li>Nivel de Ingles Avanzado.</li>
                <li>Lic. o Ingeniería en Mecatrónica, Electrónica, Industrial, o afín.</li>
                <li>Experiencia mínima de 3 años en ventas de equipo electrónico de automatización.</li>
                <li>Conocimiento en PLCs, Sensores, Adquisición de datos, PCs, etc.</li>
                <li>Manejo de lenguaje y software de programación como Visual Basic, C++ o LabVIEW.</li>
                <li>Gusto por la atención a clientes y consultoría técnica.</li>
            </ul>
            <div class="row">
                <div class="col-12 col-md-7">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Capacitarse para ser un consultor técnico profesional, detector de oportunidades.</li>
                        <li>Validar la entrega de presupuestos y cotizaciones a los clientes.</li>
                        <li>Dar seguimiento hasta vender o perder las cotizaciones.</li>
                        <li>Revisar que los pedidos de los clientes los haya levantado correctamente el ejecutivo de atención a clientes asignado.</li>
                        <li>Atender las quejas de los clientes y buscar darles una solución.</li>
                        <li>Llevar un control administrativo(Excel) de las visitas, tasa de conversión y ventas personales.</li>
                        <li>Cumplir con las metas de ventas.</li>
                        <li>Apoyar a los compañeros de equipo y mantener una actitud profesional de servicio.</li>
                        <li>Realizar videos explicativos, cursos de ingeniería, seminarios y webinarios técnicos para obtener prospectos.</li>
                        <li>Visita o reuniones virtuales con contactos de las empresas clientes y prospectos.</li>
                        <li>Brindar consultoría técnica de calidad para selección de equipos.</li>
                        <li>Búsqueda de Prospectos que cumplan con el perfil para venderle nuestras soluciones.</li>
                        <li>Cumplir con su quota de visitas o meetings mensuales.</li>
                        <li>Apoyar al departamento de cobranza cuando una cuenta se torne complicada.</li>
                        <li>Mantenerse informado y capacitado de las actividades del Ramo, tendencias, nuevas propuestas.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Educación mínima: Educación superior - Licenciatura</li>
                        <li>3 años de experiencia</li>
                        <li>Idiomas: Inglés</li>
                        <li>Edad: entre 28 y 45 años</li>
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