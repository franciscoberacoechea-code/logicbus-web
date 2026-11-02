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
    <title>Que es un Osciloscopio&#9474; Logicbus</title>
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
                        <li class="breadcrumb-item"><a href="instrumentos-medicion" class="blue link-orange">Instrumentos de medición</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Osciloscopios</li>
                    </ol>
                </nav>
                <div align="center">
                    <h1>¿Que es un Osciloscopio?</h1>
                    <img src="imagenes/BANNER-OSCILOSCOPIO.png" class="image_productos" class="img-responsive" width="100%" alt="¿Que es un Osciloscopio?" title="¿Que es un Osciloscopio?">
                </div>
                <br>
                <p align="justify">Un <strong>osciloscopio</strong> es un instrumento de medición electrónico utilizado
                    para visualizar y analizar
                    señales eléctricas variables en el tiempo. Proporciona una representación gráfica en la pantalla de
                    un tubo de rayos catódicos (CRT) o una pantalla LCD,
                    donde se muestra la amplitud (voltaje) de la señal en el eje vertical y el tiempo en el eje
                    horizontal.</p>
                <p align="justify">La pantalla del <strong>osciloscopio</strong> consta de 2 ejes, el X (horizontal) que
                    representa el tiempo,
                    y el eje Y (vertical) que representa el voltaje.</p>
                <p align="justify">Se utilizan principalmente para visualizar fenómenos transitorios así como formas de
                    ondas en circuitos eléctricos y
                    electrónicos.</p>
                <br>
                <nav class="navMenuSuper">
                    <ul>
                        <li>
                            <a href="https://tienda.logicbus.com.mx/prueba-y-medicion-osciloscopios" target="_blank">Ver
                                en
                                Tienda</a>
                        </li>
                        <li>
                            <a href="#aplicaciones">Aplicaciones</a>
                        </li>
                        <li>
                            <a href="#articulos">Artículos</a>
                        </li>
                        <li>
                            <a href="#videos">Videos</a>
                        </li>
                        <li>
                            <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="gridContMitad">
            <div class="griditemContB">
                <div class="center">
                    <a href="osciloscopios_digitales_escritorio" target="_blank">
                        <img src="images/app/osciloscopios-digitales-siglent.png" class="imgBorde" width="90%" alt="Osciloscopios Digitales Siglent">
                    </a>
                </div>
            </div>

            <div class="griditemContB">
                <center>
                    <div class="seccion" id="aplicaciones">
                        <div class="col-center">
                            <h2><span>Aplicaciones</span></h2>
                        </div>
                    </div>
                </center>
                <br>
                <p>Es muy utilizado en el diagnóstico de circuitos, por ejemplo, una persona que se
                    dedica a reparar televisiones, utilizar el osciloscopio para verificar la señal que le
                    entregan los diferentes componentes de la televisión, ya que las ondas encontradas de los
                    distintos puntos de los circuitos están bien definidas, y mediante su análisis podemos
                    diagnosticar con facilidad cuáles son los problemas del funcionamiento.</p>


                <br>
                <p>Existen 2 diferentes tipos de osciloscopios:</p>
                <ul>
                    <li>Osciloscopios Analogicos</li>
                    <li>Osciloscopios Digitales</li>
                </ul><br>
                <div style="text-align: center;">
                    <img src="images/app/S1.png" width="500px" alt="Osciloscopios Analogicos y Osciloscopios Digitales">
                </div>
            </div>
        </div>
        <div class="gridContArriba">
            <div class="griditemContA"></div>
            <div class="griditemContA">
                <center>
                    <div class="seccion" id="aplicaciones">
                        <div class="col-center">
                            <h2><span>Osciloscopios Analógicos</span></h2>
                        </div>
                    </div>
                </center>
                <p>En este tipo de <strong>osciloscopios</strong> su funcionamiento se basa en la posibilidad de desviar
                    un haz de electrones por medio de la creación de campos
                    eléctricos y magnéticos.
                    Su funcionamiento es muy sencillo, pero con cierta limitantes propias de su funcionamiento:</p>
                <ul>
                    <li>Las señales deben ser periódicas.</li>
                    <li>Las señales muy rápidas reducen el brillo.</li>
                    <li>Las señales lentas no forman una traza.</li>
                    <li>Sólo se pueden ver transitorios si éstos son repetitivos.</li>
                </ul>
                <br>
                <center><a href="imagenes/osciloscopio5.jpg" target="new"><img src="imagenes/osciloscopio5.jpg" width="400" height="351" alt="Osciloscopio Analogico"></a></center>
                <br>

                <center>
                    <div class="seccion" id="aplicaciones">
                        <div class="col-center">
                            <h2><span>Osciloscopios Digitales</span></h2>
                        </div>
                    </div>
                </center>
                <p>Hoy en día los <strong>osciloscopios</strong> analógicos están siendo desplazados en gran medida por
                    los <strong>osciloscopios</strong> digitales, uno de los principales problemas a vencer era la
                    velocidad de conversión, ya que se recomienda digitalizar una señal a una frecuencia 10 veces más de
                    la que se requiere medir,
                    esto es si tenemos una señal de 20MHz, debemos tener un equipo capaz de obtener datos a 200M
                    muestras por segundo</p>
                <p>Los <strong>osciloscopios</strong> digitales también brindan ciertas ventajas en contra de los
                    análogos:</p>
                <ul>
                    <li>Medida automática de valores de pico, máximos y mínimos de señal. Verdadero valor eficaz.</li>
                    <li>Medida de flancos de la señal y otros intervalos.</li>
                    <li>Captura de transitorios.</li>
                    <li>Cálculos avanzados, como la FFT para calcular el espectro de la señal. también sirve para medir
                        señales de tensión.</li>
                </ul>
                <br>
                <center>
                    <img src="imagenes/osciloscopio7.jpg" width="245" height="221" alt="Osciloscopio Digital">
                </center>
                <br>

                <p>Otra opción dentro de los osciloscopios digitales son los <strong>osciloscopios</strong> virtuales,
                    los cuales no cuentan con alguna pantalla para mostrar información,
                    si no que requieren de una PC para mostrar la gráfica, en si son tarjetas de adquisición de datos de
                    alta velocidad, que funcionan igual que un <strong>osciloscopio</strong>.
                    Por lo general son de conexión USB y podemos encontrar modelos desde un canal hasta 8 canales.
                    Los de un canal básicamente son la punta del <strong>osciloscopio</strong> con una conexión USB.</p>
                <p>Son portátiles, no requieren fuente de alimentación externa y su tamaño es pequeño.</p>
            </div>
        </div>
        <center>
            <div class="seccion" id="articulos">
                <div class="col-center">
                    <h2><span>Artículos</span></h2>
                </div>
            </div>
        </center>
        <div class="gridContCuatro">
            <div class="griditemContC">
                <div class="cardArticulos borange">
                    <center><a href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/Siglent-SHS800X-SHS1000X.jpg" width="100%" alt="Osciloscopios de mano"></a>
                    </center>
                    <div class="">
                        <a href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/">
                            <h3 class="TituloArticulo">Osciloscopios portátiles de las series SHS800X y SHS1000X</h3>
                        </a>
                        <p class="DesArticulo" align="justify">
                            La serie SHS X de osciloscopios portátiles aprovecha los años de investigación y desarrollo
                            de SIGLENT. El
                            diseño utiliza conjuntos de chips que están altamente integrados, tienen un bajo consumo de
                            energía y una
                            huella muy pequeña.<br>
                            <center>
                                <button class="btnVerMas"><a class="aSinLinea" href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/" target="_blank"><span>Ver más</span></a></button>
                            </center>
                        </p>
                    </div>
                </div>
            </div>
            <div class="griditemContC">
                <div class="cardArticulos borange">
                    <center><a href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/Siglent-SDS1000X-U-SDS1000X-E.jpg" width="100%" alt="Diferencia entre los modelos de osciloscopio SDS1000X-U Y SDS1000X-E">
                        </a>
                    </center>
                    <div class="">
                        <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/" target="_blank">Diferencias en los modelos de osciloscopios SDS1000X-U y SDS1000X-E</a>
                        </h3>
                        <p class="DesArticulo" align="justify">
                            Los modelos de SIGLENT SDS1000X-E de cuatro canales (modelos SDS1104X-E y SDS1204X-E) y los
                            osciloscopios
                            SDS1000X-U se basan en plataformas digitales muy similares y comparten muchas
                            características<br>
                            <center>
                                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/" target="_blank"><span>Ver más</span></a></button>
                            </center>
                        </p>
                    </div>
                </div>
            </div>
            <div class="griditemContC">
                <div class="cardArticulos borange">
                    <center>
                        <a href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/" target="_blank">
                            <img class="imgBorde" src="images/articulos-portadas/Siglent-osciloscopios digitales.png" width="100%" alt="Tipos de osciloscopios digitales">
                        </a>
                    </center>
                    <div class="">
                        <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/" target="_blank">Tipos de osciloscopios digitales</a></h3>
                        <p class="DesArticulo" align="justify">
                            Los osciloscopios son un equipo esencial que se utiliza en los laboratorios de electrónica
                            para la
                            resolución de problemas y análisis de señales en una PCB.<br>
                            <center>
                                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/" target="_blank"><span>Ver más</span></a></button>
                            </center>
                        </p>
                    </div>
                </div>
            </div>
            <div class="griditemContC">
                <div class="cardArticulos borange">
                    <center><a href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/" target="_blank"><img class="imgBorde" src="images/articulos-portadas/Siglent-SPS5000X.jpg" alt="Siglent-SPS5000X" width="100%"></a>
                    </center>
                    <div class="">
                        <h3 class="TituloArticulo"><a href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/" target="_blank">Fuente de alimentación DC de conmutación programable de amplio rango
                                serie SPS5000X</a>
                        </h3>
                        <p class="DesArticulo" align="justify">
                            La electrónica de potencia ha ganado importancia en los últimos años. La tecnología de
                            equipos de prueba
                            adecuada juega un papel fundamental en el desarrollo y la optimización de diseños
                            modernos.<br>
                            <center>
                                <button class="btnVerMas"><a href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/" target="_blank"><span>Ver más</span></a></button>
                            </center>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <div class="seccion" id="videos">
                <div class="col-center">
                    <h2><span>Videos</span></h2>
                </div>
            </div>
        </center>
        <div class="gridContCuatro" id="id5">
            <div class="griditemContB">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/oDSwdcNCp80" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="griditemContB">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/opwVg78aIIw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="griditemContB">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Q407JEr4IN4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="griditemContB">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/FuW4f4O2TBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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