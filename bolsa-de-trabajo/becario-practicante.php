<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Becario o practicante - Vacantes - Logicbus S.A de C.V</title>

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
            <img src="../images/banner/banner-vacante.webp" alt="Bolsa de trabajo - Logicbus" title="Bolsa de trabajo - Logicbus" width="100%">
        </div>
    </section>
    <div class="container-fluid py-5">
        <h1 class="title blue">Becario o Practicante</h1>
    </div>
    <div class="contianer-fluid px-5">
        <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
        <p class="paragraph blue pt-3 text-justify">Oportunidad de prácticas profesionales para estudiantes de los últimos semestres de diversas carreras, con el objetivo de brindarles experiencia práctica en un entorno laboral dinámico y multidisciplinario. Este programa de prácticas está diseñado para estudiantes de Ingeniería, Tecnologías de la Información, Administración, Contabilidad, Mercadotecnia, Recursos Humanos, Negocios Internacionales y áreas afines.</p>
        <p class="paragraph blue pb-5 text-justify">Esta oportunidad de prácticas ofrece a los estudiantes la posibilidad de aplicar los conocimientos adquiridos en el aula en un entorno laboral real, así como desarrollar habilidades profesionales y explorar diferentes áreas de interés dentro de la empresa.</p>
        <div class="row">
            <div class="col-12 col-md-7">
                <h2 class="med text-center orange-text py-1">Requisitos</h2>
                <ul class="paragraph blue pt-3 pb-5 text-justify">
                    <li>Estudiantes de los últimos semestres: Ing. en Mecatrónica, Electrónica o afin.</li>
                    <li>Ing. en Sistemas, Desarrollo Web, Computación o afín.</li>
                    <li>Lic. Contabilidad, Finanzas o afín.</li>
                    <li>Lic. Mercadotecnia, Comunicación, Diseño grafico o afín.</li>
                    <li>Lic. Recursos Humanos, Psicología, trabajo social o afín.</li>
                    <li>Negocios Internacionales, Comercio Internacional o afin.</li>
                </ul>
            </div>
            <div class="col-12 col-md-5">
                <h2 class="med text-center orange-text py-1">Ofrecemos:</h2>
                <ul class="paragraph blue pt-3 pb-5 text-justify">
                    <li>Liberación de prácticas profesionales.</li>
                    <li>2 horarios Lunes a Viernes de 8-1 o de 1-6, un sábado al mes de 10-1.</li>
                    <li>Oportunidad de aprendizaje y crecimiento profesión.</li>
                    <li>Contratación una vez finalizadas sus prácticas, de acuerdo al desempeño demostrado.</li>
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