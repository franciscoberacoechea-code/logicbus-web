<?php
require("admin/config.php");
?>

<!DOCTYPE html>


<html lang="es">

<head>
    <!-- Google tag (gtag.js) event - delayed navigation helper -->
    <script>
    // Helper function to delay opening a URL until a gtag event is sent.
    // Call it in response to an action that should navigate to a URL.
    function gtagSendEvent(url) {
        var callback = function() {
            if (typeof url === 'string') {
                window.location = url;
            }
        };
        gtag('event', 'conversion_event_contact', {
            'event_callback': callback,
            'event_timeout': 2000,
            // <event_parameters>
        });
        return false;
    }
    </script>
    <title>Inscribete a nuestro boletín - Logicbus</title>
    <meta name="description"
        content="Suscríbete al boletín de Logicbus y recibe novedades, promociones y contenido exclusivo sobre automatización industrial y tecnología Logicbus.">

    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Seguridad, Consultoría, Integración, Proyecto, Radio Frecuencia, Cubos, Análisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico,  Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, Contacto con Logicbus, Como contactarme con Logicbus Guadalajara?, Empresa distribuidora de equipos de automatización, osciloscopio, automatización, pymes en México,  sensor de temperatura,  solución de monitoreo,  sensores y transductores">

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

<body style="overflow-x:hidden;">
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!--ATENCIÓN AL CLIENTE-->
    <iframe src="https://tienda.logicbus.mx/inscribete-nuestro-boletin" style="width: 100vw;
  min-height: 1080px;
  border: none;
  " frameborder="0"></iframe>


    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

    <script>
    $(document).ready(function() {
        $('.toggle-btn').on('click', function() {
            var target = $(this).attr('data-target') || $(this).attr('href');
            $('.collapse').not(target).collapse('hide');
            $(this).addClass('subrayado');
        });

        $('.collapse').on('show.bs.collapse', function() {
            $('.collapse').not(this).collapse('hide');
        });

        $('.collapse').on('hide.bs.collapse', function() {
            var target = $(this).attr('id');
            $('a[data-target="#' + target + '"], a[href="#' + target + '"]').removeClass('subrayado');
        });
    });
    </script>
</body>
<?php echo $var_footer; ?>

</html>