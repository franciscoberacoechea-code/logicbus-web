<?php
require("../admin/config.php");
include("../libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Contador - Vacante - Logicbus</title>
    <meta name="description" content="¿Buscas trabajo como contador? Descubre nuestra vacante en Logicbus. Únete a un equipo dinámico y crece profesionalmente. ¡Aplica ahora!">
    <meta name="keywords" content="Contador, Contabilidad, Empleo, Vacante, LogicBus, Finanzas, Auditoría, Impuestos, Balance, Estados financieros, Experiencia contable, Habilidades contables, Análisis financiero, Gestión financiera, Normativas contables, Software contable, Excel, Trabajo en equipo, Desarrollo profesional">
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
            <img src="../images/vacantes/banner-contador.png" alt="Bolsa de trabajo contador - Logicbus" title="Bolsa de trabajo contador - Logicbus" width="100%">
        </div>
        <div class="container-fluid py-5">
            <h1 class="title blue">Vacante Contador</h1>
        </div>
        <div class="contianer-fluid px-5">
            <h2 class="med text-center orange-text py-1">Perfil de puesto</h2>
            <p class="paragraph blue pt-3 text-justify">En Logicbus estamos en búsqueda de un contador con experiencia en despacho contable para unirse a nuestro equipo. Si tienes experiencia en el área contable, manejo de impuestos, sistemas contables y cuentas por pagar, ¡queremos conocerte!</p>
            <p class="paragraph blue pb-5 text-justify">En Logicbus, empresa líder en soluciones tecnológicas, ofrecemos un ambiente de trabajo dinámico y retador, donde podrás desarrollar tus habilidades y crecer profesionalmente. Si buscas un ambiente de trabajo colaborativo, con oportunidades de crecimiento y desarrollo, ¡esta es tu oportunidad!</p>
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2 class="med text-center orange-text py-1">Actividades a desarrollar:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Presentación declaraciones anuales</li>
                        <li>Captura de movimiento contables diarios en sistema SAI</li>
                        <li>Conciliaciones bancarias / Cierres de mes</li>
                        <li>Elaboración de estados financieros</li>
                        <li>Solicitud de pago de facturas a tesorería</li>
                        <li>Manejo de Sistema Contpaqi Nominas para su elaboración</li>
                        <li>Cálculo de impuestos</li>
                        <li>Identificación de depósitos</li>
                        <li>Realizar facturación</li>
                        <li>Manejo de portal del SAT descarga de CFDIs y Facturas</li>
                        <li>Elaboración de cheques para el pago de impuestos</li>
                        <li>Atender solicitudes de crédito</li>
                        <li>Realizar seguimientos de Cobranza</li>
                        <li>Altas/Bajas en IMSS</li>
                        <li>Obtención de impuestos estatales/municipales y solicitar su pago</li>
                        <li>Elaboración de reportes en Excel</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="med text-center orange-text py-1">Requisitos:</h2>
                    <ul class="paragraph blue pt-3 pb-5 text-justify">
                        <li>Licenciatura en Contabilidad</li>
                        <li>Experiencia mínima de 2 años en despacho contable</li>
                        <li>Excel intermedio avanzado</li>
                        <li>Manejo de Sistema Contpaqi, Nomipaq y SAI</li>
                        <li>Manejo de impuestos</li>
                        <li>Ingles Intermedio</li>
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