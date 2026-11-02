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
    <title>La Importancia de los PLC's en la industria de la electronica</title>
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, 
        LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, industria, caracteristicas, definición, concepto, revolucion, revolucion industrial, fabricas, IoT, electronica, plc, plcs,">
    <meta name="description" content="Las siglas del PLC significan Controlador Lógico Programable; y se trata de un dispositivo digital o computadora empleada en la automatización industrial cuyo objetivo consiste en controlar las líneas de montaje en las fábricas mediante el control de las máquinas y sus respectivos procesos.">
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
                        <li class="breadcrumb-item active" aria-current="page">La Importancia de los PLC's</li>
                    </ol>
                </nav>
                <div align="center">
                    <h1 class="title blue">La Importancia de los PLC's</h1>
                    <img src="https://www.logicbus.com.mx/images/banner/www/banner-importancia-plc.png" class="image_productos" class="img-responsive" width="100%" alt="La importancia de los PLC's" title="La importancia de los PLC's">
                </div>
                <p class="paragraph text-justify mt-5">Para quienes hayan visto la película de Hacker: Amenaza en la Red (Blackhat), la cual trata de unos agentes norteamericanos que se ven obligados a colaborar con la autoridades de China debido a un atentado ciberterrorista que para ello recurren de mala gana con un convicto cuyo código es la clave para desenmascarar y capturar a los responsables de esta inesperada atrocidad, podrán identificar la gran importancia que tienen los PLCs en nuestro mundo.</p>
            </div>
        </div>
        <div class="container paragraph text-justify">
            <p>Este suspenso tecnológico del director Michael Mann y protagonista Chris Hemsworth (Thor) hace referencia al famoso PLC ya que durante la trama, estos controladores son infectados provocando que los sensores de enfriamiento de una Planta Nuclear en Honk Kong se deshabiliten dando comienzo a un sobrecalentamiento enseguida de una inminente explosión masiva.</p>
            <br>
            <center><img src="https://www.logicbus.com.mx/imagenes/29/serie.jpg" width="70%" alt="PLC (Controlador Lógico Programable)"></center><br>
            <p>Ahora para quienes vieron la película o están por verla… <strong>Las siglas del PLC significan Controlador Lógico Programable;</strong> y se trata de un dispositivo digital o computadora empleada en la automatización industrial <strong>cuyo objetivo consiste en controlar las líneas de montaje en las fábricas mediante el control de las máquinas y sus respectivos procesos.</strong></p>
            <p>Esto mediante <strong>señales de entrada y de salida, rangos de temperatura, resistencia a la vibración y tiempo</strong>. De estos elementos requiere la maquinaria para que su funcionamiento brinde los resultados deseables en las máquinas envasadoras, hornos automáticos, sistemas de seguridad y transportación como recientemente se ha venido aplicando a los semáforos.</p>

            <div align="center"><img src="https://www.logicbus.com.mx/imagenes/articulo/diagrama-plc.gif" width="70%" alt="Diagrama de configuración del sistema"></div><br>

            <p>Hoy en día, los <strong><a class="link-orange" href="PLC-Serie-FBs" title="">PLC's</a></strong> son programados desde la lógica de escalera de relés o mediante diagramas de estado (un lenguaje de alto nivel). Sus funciones incluyen el <a class="link-orange" href="control_movimiento" title="Concepto control de movimiento">control de movimiento</a>, los procesos de fabricación, distribución-transferencia, operaciones aritméticas y comunicación por red. <strong>La gran ventaja radica en la reprogramación en menor tiempo y costo de las actividades</strong>.
            </p>
            <p>Para darte una mejor idea de su alcance e importancia, recomiendo se vea esta película dada la magnitud que puede llegar a alcanzar y a su vez el constante riesgo si la parte no se encuentra bien asegurada ya que para ello su sistema de almacenaje debe estar supervisada para que las instrucciones se lleven correctamente a cabo.
            </p>
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