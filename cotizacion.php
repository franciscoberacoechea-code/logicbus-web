<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Sección para Contactarnos - Logicbus</title>
    <meta name="description"
        content="Contáctanos, brindamos servicios de consultoría gratis y venta de equipos de automatización como: celdas de carga, plc, pantallas industriales, graficadores, una amplia variedad de sensores, robots o cobots, software scada, HMI, osciloscopios, convertidores de protocolos ">
    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatización, Seguridad, Consultoría, Integración, Proyecto, Radio Frecuencia, Cubos, Análisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico,  Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, Contacto con Logicbus, Como contactarme con Logicbus Guadalajara?, Empresa distribuidora de equipos de automatización, osciloscopio, automatización, pymes en México,  sensor de temperatura,  solución de monitoreo,  sensores y transductores">
    <meta name="revisit after" content="14 days">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * a {
            cursor: pointer;
        }

        p {
            text-justify: inter-word;
        }
    </style>
</head>

<body>
    <?
    arriba();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-10">
                <div class="card rounded border-0 shadow-lg" style="background-color: #235278; margin-top:30%;">
                    <div class="text-center">
                        <img src="https://www.logicbus.com.mx/imagenes/Ingenieros-LOGICBUS_1.png"
                            class="img-fluid rounded" alt="Logicbus" style="max-width: 70%;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center text-white mb-4">¿Listo para llevar tu industria al siguiente
                            nivel? ¡Contáctanos ahora y deja que nuestros
                            expertos en automatización industrial te ayuden a encontrar las soluciones que necesitas!
                        </h3>
                        <p class="card-text text-white">En Logicbus, estamos comprometidos con ofrecerte las mejores
                            soluciones de automatización industrial. ¡Contáctanos hoy mismo!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-10">
                <div class="atencion">
                    <!-- BEGIN Odoo web form -->
                    <div class="container">
                        <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                            <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                                style="width:100%; min-height:1200px; border:0;">
                            </iframe>
                        </div>
                    </div>
                    <!-- END Odoo web form -->
                </div>
            </div>
        </div>
    </div>
    <? abajo(); ?>


</body>

</html>