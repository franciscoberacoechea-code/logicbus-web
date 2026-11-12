<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Gerente Administrativo - Vacante - Logicbus</title>
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
            <img src="../images/vacantes/banner-administrativo.webp" alt="Bolsa de trabajo área administrativa - Logicbus" title="Bolsa de trabajo área administrativa - Logicbus" width="100%">
        </div>
        <div class="container-fluid py-5">
            <h1 class="title blue">Gerente Administrativo</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <ul class="paragraph blue pt-3 pb-5 text-justify">
                <li>Licenciatura en Finanzas, Contabilidad, Administración, Negocios, o afín.</li>
                <li>Conocimientos contables, financieros y de gestión.</li>
                <li>Experiencia de 2 a 4 años en el puesto.</li>
                <li>Conocimiento avanzado de Excel.</li>
                <li>Inglés avanzado.</li>
            </ul>
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Supervisar las actividades de Recursos Humanos, Contabilidad, Compras y Logística.</li>
                        <li>Revisión de cuentas bancarias y flujos contables para la optima operación y administración.</li>
                        <li>Reportar a dirección del aspecto financiero y presentar alternativas.</li>
                        <li>Mantener actualizada la base de pagos de clientes y a su vez hacer revisiones al proceso de cobranza para mantener cartera actualizada.</li>
                        <li>Realizar pago a proveedores.</li>
                        <li>Supervisar el proceso de integración de personal.</li>
                        <li>Supervisar los procesos administrativos inherentes al departamento de recursos humanos como son relaciones laborales y proceso de nómina.</li>
                        <li>Planeación de gastos.</li>
                        <li>Coordinar al equipo para que las investigaciones crediticias para clientes sean realizadas.</li>
                        <li>Asegurarse de la calidad en la atención a todas las actividades administrativas de cada dpto del área.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Educación mínima: Educación superior - Licenciatura</li>
                        <li>5 años de experiencia</li>
                        <li>Idiomas: Inglés</li>
                        <li>Edad: entre 35 y 45 años</li>
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