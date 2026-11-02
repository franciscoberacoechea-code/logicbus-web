<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>
    <title>Automatización - Que es, concepto, historia y usos de la automatizacion.</title>
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords" content="automatizacion, que es la automatizacion,uso de la automatizacion, automatizacion industrial, historia automatizacion,procesos informáticos, optimizar y mejorar el funcionamiento de una planta industrial, ejemplo de automatización,  Telar de Jacquard, revolución industrial, maquinas de vapor,producción en cadena, aparición de la computadora,   automotriz,  primera computadora, PLC, Fatek, comunicación celular, inteligencias artificial, robots, cobots, ">
    <meta name="description" content="La automatización es el conjunto de elementos o procesos informáticos, mecánicos y electromecánicos que operan con mínima o nula intervención del ser humano...">
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
    <?php require("libreria/header.view.php"); ?>
    <div>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">¿Qué es la automatización?</li>
                    </ol>
                </nav>
                <div align="center">
                    <h1 class="title blue">¿Qué es la automatización?</h1>
                    <img src="https://www.logicbus.com.mx/images/banner/www/banner-que-es-la-automatizacion.png" class="image_productos" class="img-responsive" width="100%" alt="¿Qué es la automatización?" title="¿Qué es la automatización?">
                </div>
                <p class="paragraph text-justify">La automatización es el conjunto de elementos o procesos informáticos, mecánicos y electromecánicos que operan con mínima o nula intervención del ser humano. estos normalmente se utilizan para optimizar y mejorar el funcionamiento de una planta industrial, pero igualmente puede utilizarse la automatización en un estadio, una granja o hasta en la propia infraestructura de las ciudades.</p>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="#aplicaciones">Aplicaciones</a>
                        </li>
                        <li>
                            <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container text-justify">
            <p class="paragraph mb-3">La retroalimentación y la capacidad de hacer ajustes con esa información es la que indica que tan autosuficiente es un sistema automatizado, un brazo robótico que se utiliza en el armado de autos es un ejemplo de alta independencia, ya que con sus sensores y su programación puede ejecutar su tarea sin intervención humana, un tanque de leche que solo tiene un sensor de temperatura, pero el apagado o prendido del mismo se hace de forma manual es un ejemplo de un sistema semiautomatizado.</p>
            <p class="paragraph mb-3">
                <center><img src="https://www.logicbus.com.mx/images/banner/www/PorMarca/ROB.jpg" alt="ROB" width="70%"><br>Brazo robótico</center>
            </p>
            <center>
                <div class="seccion" id="aplicaciones">
                    <div class="col-center">
                        <h2>Telar de Jacquard</h2>
                    </div>
                </div>
            </center>
            <p class="paragraph mb-3">El primer ejemplo de automatización real fue el Telar de Jacquard que en inicios del siglo XVIII utilizo tarjetas perforadas para automatizar el proceso de tejido, así mientras un experto del telar tradicional hacia 2 cm de brocado en una semana, el Telar de Jacquard era capaz de producir hasta sesenta cm de brocado en la misma semana.</p>
            <p class="paragraph mb-3">
                <center><img src="https://www.logicbus.com.mx/images/banner/www/PorMarca/Museo_Textil_Algoselan_Flandria_09.jpg" alt="Museo textil Algoselan Flandria" width="30%"><br>Telar de Jacquard</center>
            </p>
            
            <p class="paragraph mb-3">La llegada del Telar de Jacquard fue uno de los tantos avances que dieron paso a la revolución industrial, la revolución industrial no solo cambio por el uso de maquinas de vapor, también cambio la forma de trabajar de las plantas mismas al implementar la división del trabajo, anteriormente un solo obrero se encargaba de todo el proceso de una pieza, la división del trabajo permitió que uno o varios obreros se encargaran de una parte del proceso de fabricación de la pieza dejando el siguiente paso del proceso a otros compañeros, al optimizar el acomodo de áreas y el proceso de creación se genero lo que se conoce como producción en cadena. Esto fue importante para la automatización porque permitió verificar que partes del proceso eran propicias para ser mejoradas con el uso de máquinas.</p>
            <p class="paragraph mb-3">El siguiente gran paso de la automatización industrial sucedió con la aparición de la computadora ya que incremento el número de áreas en las que podía realizarse la automatización, uno de los primeros sectores que se beneficiaron de esto fue el automotriz que incluso fueron los primeros en utilizar lo que podría considerarse la primera computadora para la automatización, el PLC.</p>
            <p class="paragraph mb-3">
                <center><img src="https://www.logicbus.com.mx/imagenes/29/fatek.png" width="80%" alt="Ejemplos PLC FATEK"><br>Ejemplos de PLC</center>
            </p>
            <p class="paragraph mb-3"> La introducción del Internet y el aumento de la comunicación celular ha facilitado la interconexión entre varias plantas y el acceso a la información, antes era necesario que un ingeniero se trasladara a las plantas para conocer el status de estas, mientras en estos tiempo puede monitorear en tiempo real el estatus de las planta a través del celular.</p>
            <p class="paragraph mb-3"> En estos momentos estamos próximos a los inicios del siguiente gran paso de la automatización con la introducción de las inteligencias artificiales, hasta este momento los robots no realizan más acciones de las que les fueron programadas, pero con este paso los robots aprenderían de la experiencia o incluso podríamos tener una planta que se controle a si misma sin necesidad de la intervención de ningún humano.</p>
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