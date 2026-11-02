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
    <title>Software: DASYLab | Logicbus</title>
    <meta name="description"
        content="DASYLab es una aplicación GUI que te permite desarrollar rápidamente aplicaciones DAQ personalizadas sin necesidad de programar.">

    <meta name="keywords"
        content="Software, DASYLab, Logicbus, aplicación GUI, aplicaciones DAQ, DASYLab Lite, DASYLab Basic, DASYLab Full, DASYLab Pro, laboratorio, Sistema, Adquisicion de Datos, DAQ">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://www.logicbus.com.mx/dasylab">
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


    <div id="main">
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
        menucategorias();
        ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item"><a href="software" class="blue link-orange">Software y
                                herramientas de
                                desarrollo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DASYLab</li>
                    </ol>
                </nav>

                <h1>DASYLab - El laboratorio de Sistemas de Adquisición de Datos</h1>

                <div align="center">
                    <img src="imagenes/01/dasylab_screen_collage.gif" alt="DASYLab" title="DASYLab" width="60%"
                        class="image_productos">
                </div>

                <div align="right">
                    <a href="https://tienda.logicbus.com.mx/DASYLab-Lite_p_14111.html" title="Ir a Tienda"
                        target="_blank"><img src="images/shopping_cart.png" border=0 alt="Comprar"></a>
                </div>

                <p>DASYLab es una aplicación GUI que te permite desarrollar rápidamente aplicaciones DAQ personalizadas
                    sin
                    necesidad de programar. Si no se tiene el tiempo o las habilidades para programar para escribir un
                    programa
                    DAQ,
                    ¡Se necesitara el DASYLab! Usando ésta intuitiva hoja de trabajo, módulos y funciones de cableado,
                    sólo
                    estarás a unos clics de una aplicación completa.</p>

                <strong>Encuentra el DASYLab que sea apropiado para ti</strong><br>
                <p>Ofrecemos un amplio rango de paquetes DASYLab para que puedas seleccionar la versi&oacute;n que se
                    acomode
                    mejor a sus necesidades. Para una comparaci&oacute;n detallada de &eacute;stas cuatro versiones de
                    DASYLab, <a href="dasylab_versions" target="_parent"><strong>clic aqu&iacute;</strong></a></p>
                <br>

                <ul>
                    <li><a href="DASYLab-Lite" target="_parent">DASYLab Lite</a></li>
                    <li><a href="DASYLab-Basic" target="_parent">DASYLab Basic</a></li>
                    <li><a href="DASYLab-Full" target="_parent">DASYLab Full</a></li>
                    <li><a href="DASYLab-Pro" target="_parent">DASYLab Pro</a></li>
                </ul>

                <strong>Más de 90 Funciones de Adquisición de Datos, Control, Procesamientos y Display</strong><br><br>

                <p align="justify">DASYLab ofrece librerías de funciones extensivas en las siguientes
                    categorías/módulos:</p>
                <ul>
                    <li>Entradas/Salidas</li>
                    <li>Display</li>
                    <li>Matemáticas</li>
                    <li>Procesamiento de Señales</li>
                    <li>Archivos</li>
                    <li>Estadísticas</li>
                    <li>Trigger</li>
                    <li>Reducción de Datos</li>
                    <li>Red</li>
                    <li>Control</li>
                </ul>

                <p align="justify">Para ver una lista completa de funciones por m&oacute;dulos, <a
                        href="dasylab_mods"><strong>clic aqu&iacute;</strong></a>.</p>

                <center><strong>Diferencias entre versiones de Dasy LAB</strong></center><br>

                <center>
                    <img src="https://www.logicbus.com.mx/imagenes/01/dasylab-12-comparison.gif" alt="DASYLab"
                        title="DASYLab" width="70%" class="image_productos">
                </center>
                <br><br>
            </div>
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