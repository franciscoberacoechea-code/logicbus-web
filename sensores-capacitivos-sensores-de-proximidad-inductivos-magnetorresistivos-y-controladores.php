<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-31533636-1');
    gtag('config', 'AW-1007518778');
    </script>

    <title>Rechner Sensors: Sensores capacitivos y medición de nivel</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="Rechner Sensors diseña y fabrica sensores capacitivos para adaptarse a sus requisitos precisos, incluso para cantidades pequeñas.">
    <meta name="keywords"
        content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Estilos Necesarios -->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <h1 class="sr-only">RECHNER SENSORS</h1>

    <main id="main">
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php menucategorias(); ?>
            </div>

            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rechner Sensors</li>
                    </ol>
                </nav>

                <section style="margin:40px 0;">
                    <img 
                        src="https://www.logicbus.com.mx/images/banner/www/banner-rechner-logicbus.webp"
                        alt="Banner Rechner Sensors Logicbus"
                        width="869" height="248"
                        style="max-width:100%; height:auto; display:block; margin:0 auto;">
                </section>

                <br>
                <p style="text-align: justify;">
                    Desde hace 55 años, Rechner Sensors se ha comprometido con la calidad y se han convertido en
                    especialistas en
                    tecnología Sensores Capacitivos para aplicaciones de automatización, control de nivel y control de
                    calidad. La
                    línea de productos de Rechner incluye sensores de proximidad capacitivos, de proximidad inductivos,
                    magnetorresistivos, controladores lógicos de fuente de alimentación, sensores de flujo y barreras
                    EX: todos en
                    diferentes tamaños y opciones de montaje.<br><br>Todos los productos de Rechner llevan el marcado CE
                    de
                    acuerdo con elreglamento de la UE 765/2008
                </p>

                <nav class="navMenuSuper">
                    <ul>
                        <li><a href="https://tienda.logicbus.com.mx/rechner-sensors" target="_blank">Ver en Tienda</a>
                        </li>
                        <li><a href="#produ">Productos</a></li>
                        <li><a href="#aplicaciones">Aplicaciones</a></li>
                        <li><a href="#catalogos">Catálogos</a></li>
                        <li><a href="https://www.logicbus.com.mx/contacto">Contacto</a></li>
                        <li><a href="#GuiasyManuales">Guías y Manuales</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <center>
            <div class="centrar-texto">
                <section class="seccion" id="produ" style="text-align: center;">
                    <div class="col-center">
                        <h2><span>Productos</span></h2>
                    </div>
                </section>


                <!-- Productos -->
                <div class="gridContMitad" style="text-align: center;">
                    <div class="griditemContB">
                        <div class="cardH gridContCard">
                            <div class="cardH-preview">
                                <a href="https://tienda.logicbus.com.mx/Sensores-Inductivos_c_5849.html"
                                    target="_blank">
                                    <img loading="lazy"
                                    src="https://www.logicbus.com.mx/assets/images/308/transparent/inductivo-removebg-preview.webp"
                                    alt="Sensores Inductivos"
                                    width="250" height="250"
                                    style="max-width: 100%; height: auto;">
                                </a>
                            </div>

                            <div class="cardH-info">
                                <a href="https://tienda.logicbus.com.mx/Sensores-Inductivos_c_5849.html"
                                    target="_blank">
                                    <p class="subTitulo">Sensores Inductivos</p>
                                </a>
                                <p style="text-align: justify;">Sensores de proximidad para la detección de objetos
                                    metálicos.</p>
                                <a href="https://tienda.logicbus.com.mx/Sensores-Inductivos_c_5849.html" target="_blank"
                                    style="display:inline-block; min-width:48px; min-height:48px;">
                                    <img loading="lazy"
                                        src="https://www.logicbus.com.mx/images/shopping_cart.webp"
                                        alt="Ir a tienda Logicbus"
                                        width="48" height="48"
                                        style="display:inline-block; margin-top:10px;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="griditemContB">
                        <div class="cardH gridContCard">
                            <div class="cardH-preview">
                                <a href="https://tienda.logicbus.com.mx/Sensores-Capacitivos_c_5848.html"
                                    target="_blank">
                                       <img loading="lazy"
                                        src="https://www.logicbus.com.mx/assets/images/308/transparent/capacitivo-removebg-preview.webp"
                                        alt="Sensores Capacitivos"
                                        width="250" height="250"
                                        style="max-width:100%; height:auto; display:block; margin:0 auto;">
                                </a>
                            </div>
                            <div class="cardH-info">
                                <a href="https://tienda.logicbus.com.mx/Sensores-Capacitivos_c_5848.html"
                                    target="_blank">
                                    <p class="subTitulo">Sensores Capacitivos</p>
                                </a>
                                <p style="text-align: justify;">Sensores de proximidad y nivel para la detección de
                                    objetos no metálicos y metálicos.</p>
                                <a href="https://tienda.logicbus.com.mx/Sensores-Capacitivos_c_5848.html"
                                    target="_blank" style="display:inline-block; min-width:48px; min-height:48px;">
                                    <img loading="lazy"
                                        src="https://www.logicbus.com.mx/images/shopping_cart.webp"
                                        alt="Ir a tienda Logicbus"
                                        width="48" height="48"
                                        style="display:inline-block; margin-top:10px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fila inferior: Cables y adaptadores centrado -->
                <center>
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; align-items: center;">
                        <div class="griditemContB">
                            <div class="cardH gridContCard">
                                <div class="cardH-preview">
                                    <a href="https://tienda.logicbus.com.mx/Cables-y-adaptadores_c_5847.html"
                                        target="_blank">
                                         <img loading="lazy"
                                            src="https://www.logicbus.com.mx/assets/images/308/transparent/adapter-removebg-preview.webp"
                                            alt="Cables y adaptadores"
                                            width="250" height="250"
                                            style="max-width:100%; height:auto; display:block; margin:0 auto;">
                                    </a>
                                </div>
                                <div class="cardH-info" style="text-align: center;">
                                    <a href="https://tienda.logicbus.com.mx/Cables-y-adaptadores_c_5847.html"
                                        target="_blank">
                                        <p class="subTitulo">Cables y adaptadores</p>
                                    </a>
                                    <p style="text-align: justify;">Accesorios de conexión para los sensores de
                                        proximidad y nivel.</p>
                                    <a href="https://tienda.logicbus.com.mx/Cables-y-adaptadores_c_5847.html"
                                        target="_blank" style="display:inline-block; min-width:48px; min-height:48px;">
                                         <img loading="lazy"
                                            src="https://www.logicbus.com.mx/images/shopping_cart.webp"
                                            alt="Ir a tienda Logicbus"
                                            width="48" height="48"
                                            style="display:inline-block; margin-top:10px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </center>


        </center>
        <center>
            <!-- Aplicaciones -->
            <div class="centrar-texto">
                <section class="seccion" id="aplicaciones" style="text-align: center;">
                    <div class="col-center">
                        <h2><span>Aplicaciones</span></h2>
                    </div>
                </section>
            </div>
        </center>
        <div class="row2contP">

            <div class="boxProducto orange">
                <h3><strong>Control de nivel de polvos y sólidos</strong></h3>
                <p style="text-align: justify;">Existen aplicaciones comunes en el monitoreo de niveles de producto en
                    tolvas, silos o cualquier tipo de contenedor de almacenaje de productos sólidos como son diferentes
                    tipos de granos, leguminosas, alimentos del sector animal, plásticos, polvos, entre otros, donde el
                    monitoreo con sensores ultrasónicos no son una opción por lo que se utiliza el control de nivel bajo
                    y alto por medio de sensores capacitivos de contacto o externo.</p>
                <p class="centrar-texto">
                    <img loading="lazy" class="imgorange imgresp"
                        src="https://www.logicbus.com.mx/images/categorias/polvos-solidos.webp" alt="Polvos y sólidos"
                        style="transform: scale(0.6);">
                </p>
            </div>

            <div class="boxProducto blue">
                <h3><strong>Procesos de calidad en empaques sellados</strong></h3>
                <p style="text-align: justify;">Los sensores capacitivos son utilizados para diferentes procesos en los
                    que se desea el sensado de nivel o de detección producto dentro de envolturas, empaques, cajas,
                    botes, etc. en las líneas de producción para un proceso de rechazo en caso de que no cumpla con los
                    parámetros.</p>
                <p class="centrar-texto">
                    <img loading="lazy" class="imgblue"
                        src="https://www.logicbus.com.mx/images/categorias/empaques-sellados.webp"
                        alt="Empaques sellados">
                </p>
            </div>

            <div class="boxProducto orange">
                <h3><strong>Aplicaciones alimentarias</strong></h3>
                <p style="text-align: justify;">Los sensores capacitivos que ofrece Rechner cuentan con el material PFTE
                    (Politetrafluoroetileno) en el área activa de sensado así como en el material del cuerpo lo que los
                    hace especiales para aplicaciones de contacto en diferentes tipos de productos.</p>
                <p class="centrar-texto">
                    <img loading="lazy" class="imgorange"
                        src="https://www.logicbus.com.mx/images/categorias/aplicaciones-alimentarias.webp"
                        alt="Aplicaciones alimentarias">
                </p>
            </div>

        </div>

        <div class="row2contP">

            <div class="boxProducto blue">
                <h3><strong>Sensores de detección de fugas</strong></h3>
                <p style="text-align: justify;">Utilizados en sitios donde puede causar un peligro las fugas de líquidos
                    en áreas controladas provenientes de alguna máquina, bomba centrífuga, goteros, etc. Los sensores de
                    la serie LEAK de Rechner son utilizados para detectar la presencia de este tipo de fugas en
                    superficies planas mandando una señal de alarma para su control inmediato.</p>
                <div style="display: flex; justify-content: center;">
                    <img loading="lazy" class="imgblue"
                        src="https://www.logicbus.com.mx/images/categorias/deteccion-de-fugas.webp"
                        alt="Detección de fugas" style="min-width:48px; min-height:48px;">
                </div>
            </div>

            <!-- Catálogos -->
           
                <div class="boxProductoVacio">
                    <div class="centrar-texto">
                        <section class="seccion" id="catalogos">
                            <div class="col-center">
                                <h2><span>Catálogos</span></h2>
                            </div>
                        </section>
          
            <a href="pdf/catalogos/Katalog_Highlights_2025_ES_online.pdf" target="_blank"
                style="color: inherit; text-decoration: none; display:inline-block; min-width:48px; min-height:48px;">
                <img loading="lazy" class="imgBorde img250"
                    src="https://www.logicbus.com.mx/imagenes/catalogos/Katalog_Highlights_2025_ES_online.webp"
                    alt="Automation highlights Rechner Sensors">
                <br>
                <b>RECHNER Automation Highlights 2025</b>
            </a>
        </div>
        </div>

        <div class="boxProductoVacio div_pc"></div>

        </div>

        <br>
        <center>
            <!-- Guias y manuales -->
            <div class="centrar-texto">
                <section class="seccion" id="GuiasyManuales" style="text-align: center;">
                    <div class="col-center">
                        <h2><span>Guías y Manuales</span></h2>
                    </div>
                </section>
            </div>
        </center>
        <div class="d-flex justify-content-center">
            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=rechner+sensors"
                style="display:inline-block; min-width:48px; min-height:48px;">
                <div class="hoverchange">
                    <img loading="lazy" src="images/documentacion.svg" width="200px" class="mx-auto d-block"
                        alt="Documentación">
                    <button class="button button-circle-white d-flex"><b> Documentación</b></button>
                </div>
            </a>
        </div>
        <br>

        <!-- Pie de página -->
        <?php require("libreria/footer.view.php"); ?>
        <?php echo $bootstrap_js; ?>
        <?php echo $jquery_js; ?>
        <?php echo $own_file_js; ?>

    </main>
</body>
<?php echo $var_footer; ?>

</html>