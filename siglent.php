<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
    </script>
    <title>Siglent | Osciloscopios digitales | Analizadores de espectro</title>
    <meta name="description"
        content="SIGLENT es una empresa internacional de alta tecnología que se concentra en investigación y desarrollo, ventas, producción y servicios de productos de...">

    <meta name="keywords"
        content="Logicbus, México, Mexico, Guadalajara, Instrumentos de medición, analizadores de espectro, Osciloscopios, de entorno, Fuentes de poder de banco, Generadores de funciones, Laboratorio Academico, Multimetros, Tacometros, Mediciones específicas de AC, Siglent, Seneca, Pico Technology">

    <?php echo $favicon; ?>

    <?php echo $boostrap_css; ?>
    <?php echo $menu; ?>

    <?php echo str_replace('<link', '<link media="print" onload="this.media=\'all\'"', $own_file_css); ?>
    <?php echo str_replace('<link', '<link media="print" onload="this.media=\'all\'"', $subcategorias); ?>
    <?php echo str_replace('<link', '<link media="print" onload="this.media=\'all\'"', $estilos); ?>
    <?php echo str_replace('<link', '<link media="print" onload="this.media=\'all\'"', $footer_css); ?>
    <?php echo str_replace('<link', '<link media="print" onload="this.media=\'all\'"', $flickity_css); ?>

    <?php echo $var_headers; ?>
    <link rel="preload" as="style" href="css/own.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/own.css">
    </noscript>

    <style>
    /* Mejora de contraste de colores (WCAG AA) */
    :root {
        --primary-orange-accessible: #D34200; /* Naranja con mejor contraste sobre blanco */
        --dark-text: #333;
    }

    /* Corrección de Aspect Ratio para el logo de Logicbus (Best Practices) */
    .logo-logicbus {
        width: 100%;
        max-width: 280px; 
        height: auto; 
        aspect-ratio: 3.37 / 1; 
    }

    .img-catalogo {
        width: 100%;
        max-width: 250px;
        height: auto; /* Ajuste para mantener proporción natural */
        aspect-ratio: 250 / 350;
        object-fit: cover;
    }

    .seccion {
        float: none !important;
    }

    /* Corrección de contraste para breadcrumbs y títulos */
    .breadcrumb-item.active {
        color: #555 !important;
    }

    .titulo-naranja {
        color: var(--primary-orange-accessible) !important;
    }

    /* Mejora de legibilidad en botones */
    .btnVerMas {
        background-color: var(--primary-orange-accessible);
        color: #fff !important;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        text-decoration: none;
    }
    
    .btnVerMas:hover {
        background-color: #b33800;
        text-decoration: underline;
    }

    /* Aumentar tamaño de clics en menú para targets táctiles */
    .navMenuSuper ul li a {
        padding: 12px 15px;
        display: inline-block;
        min-width: 44px; /* Tamaño mínimo recomendado para touch */
        min-height: 44px;
    }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <main id="main">

        <h1 class="titulo_producto sr-only">SIGLENT - Instrumentos de Medición Electrónica</h1>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php menucategorias(); ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="Ruta de navegación">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Siglent</li>
                    </ol>
                </nav>
                <div class="">
                    <img fetchpriority="high" src="images/banner/www/PorMarca/BANNER-SIGLENT.webp"
                        alt="Banner publicitario de productos SIGLENT en México" title="SIGLENT - México" width="1200" height="400"
                        style="width: 100%; height: auto;">
                </div>
                <br>
                <p class="text-justify"><b class="titulo-naranja">SIGLENT TECHNOLOGIES</b> es líder mundial en
                    investigación,
                    desarrollo, fabricación, ventas y soporte de servicio para equipos electrónicos de prueba y medición
                    que combinan características y funcionalidades innovadoras con un fuerte compromiso con la calidad y
                    el rendimiento. Además de que SIGLENT cuenta con las certificaciones ISO 9001: 2015 e ISO 14001:
                    2015 por sus programas de gestión ambiental y de calidad de sus productos.<br><br>
                    La innovación es uno de los valores fundamentales para SIGLENT, es por ello por lo que invierte
                    anualmente en investigación y desarrollo. SIGLENT con el tiempo ha adquirido y desarrollado una
                    serie de patentes, con ello creando una tendencia global con sus tecnologías. Algunos ejemplos de
                    esto es la tecnología denominada EasyHunting la cual permitió un aumento de 2-4 veces en la
                    precisión de los osciloscopios SIGLENT en comparación con modelos similares. Otro claro ejemplo es
                    el osciloscopio digital SDS1000CF con su ancho de banda de 300 MHz y cuatro canales. Y también los
                    osciloscopios portátiles aislados pertenecientes a la serie SHS1000, que es un producto líder a
                    nivel nacional. </p>
                <br>
                <nav class="navMenuSuper text-center" aria-label="Menú de secciones de Siglent">
                    <ul>
                        <li>
                            <a href="https://tienda.logicbus.com.mx/SIGLENT_bymfg_125-7-1.html" target="_blank">Ver en
                                Tienda</a>
                        </li>
                        <li>
                            <a href="#produ">Productos</a>
                        </li>
                        <li>
                            <a href="#catalogos">Catálogos</a>
                        </li>
                        <li>
                            <a href="#videos">Videos</a>
                        </li>
                        <li>
                            <a href="#articulos">Artículos</a>
                        </li>
                        <li>
                            <a href="#GuiasyManuales">Guías y Manuales</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="gridContMitad">
            <div class="griditemContB">
                <div class="text-center">
                    <a href="https://www.logicbus.com.mx/osciloscopios-portatiles" target="_blank" aria-label="Ver osciloscopios portátiles Siglent">
                        <img loading="lazy" src="imagenes/09/osciloscopios-de-mano.webp" class="imgBorde" width="600"
                            style="max-width: 100%; height: auto;" alt="Osciloscopios portátiles industriales de mano Siglent">
                    </a>
                </div>
            </div>

            <div class="griditemContB">
                <div class="seccion text-center mx-auto" id="aplicaciones">
                    <div class="col-center">
                        <h2><span>¿Qué es un osciloscopio?</span></h2>
                    </div>
                </div>
                <p class="text-justify">Un <a
                        href="https://www.logicbus.com.mx/osciloscopio"><strong>Osciloscopio</strong></a> es
                    un instrumento de medición electrónico utilizado para visualizar y analizar señales eléctricas
                    variables en el tiempo. Proporciona una representación gráfica en la pantalla de un tubo de rayos
                    catódicos (CRT) o una pantalla LCD, donde se muestra la amplitud (voltaje) de la señal en el eje
                    vertical y el tiempo en el eje horizontal.</p>
                <div style="text-align: center;">
                    <a href="https://www.logicbus.com.mx/SDS1202X-E" target="_blank" aria-label="Ver detalles del Osciloscopio SDS1202X-E">
                        <img loading="lazy" src="imagenes/09/SDS1202X-E.webp" width="450"
                            style="max-width: 100%; height: auto;" alt="Modelo de Osciloscopio SDS1202X-E de Siglent">
                    </a>
                </div>
            </div>
        </div>

        <div class="seccion text-center mx-auto" id="produ">
            <div class="col-center">
                <h2><span>Productos</span></h2>
            </div>
        </div>

        <div class="divCentrado">
            <div class="tabla_subcategorias_grid my-5">

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="osciloscopios_digitales_escritorio">
                            <img loading="lazy" src="imagenes/238/SDS1000DL-Series.webp"
                                alt="Osciloscopio Digital de Escritorio Siglent"
                                title="Siglent México - Osciloscopios Digitales" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="osciloscopios_digitales_escritorio">
                            <h3>Osciloscopios Digitales</h3>
                        </a>
                        <p>Los osciloscopios tienen un ancho de banda que va desde los 50 MHz hasta 1 GHz, cuenta con
                            escalas verticales de bajo ruido de hasta 500 uV/div. También incluyen una decodificación en
                            serie y capacidades MSO.</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Osciloscopios-de-escritorio_c_2948.html"
                            aria-label="Comprar Osciloscopios de escritorio en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="generadores-de-funciones">
                            <img loading="lazy" src="imagenes/238/SDG1062X_01.webp"
                                alt="Generador de funciones Siglent modelo SDG1062X"
                                title="Siglent México - Generador de funciones" width="100%"></a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="generadores-de-funciones">
                            <h3>Generador de funciones</h3>
                        </a>
                        <p>Los generadores de función/forma de onda arbitraria utilizan tecnología avanzada de síntesis
                            de
                            frecuencia digital (DDS) para producir una función estándar de alta calidad y señales de
                            forma de onda arbitrarias. También proporcionan una amplia gama de funciones de modulación
                            analógica y digital.</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Generador-de-funciones_c_2939.html"
                            aria-label="Comprar Generador de funciones en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="https://tienda.logicbus.com.mx/Serie-SSG3000X_c_3075.html">
                            <img loading="lazy" src="imagenes/238/SSG3000X.webp" alt="Generador de señal RF Serie SSG3000X"
                                title="Siglent México - Generador de RF" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="https://tienda.logicbus.com.mx/Serie-SSG3000X_c_3075.html">
                            <h3>Generador de RF</h3>
                        </a>
                        <p>La serie SSG3000X de generadores de señal tiene un rango de frecuencia de 9 kHz a 2.1 GHz /
                            3.2 GHz. Proporcionan una modulación analógica normal, como AM, FM y PM. También
                            proporcionan modulación de impulsos y generador de tren de impulsos. Además, cuando se
                            utilizan con un generador de banda base como SDG6000X, pueden generar señales moduladas IQ.
                            Con su alta precisión y sus resultados puros, la serie SSG3000X es la opción correcta para
                            R&D, educación y fabricación</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Serie-SSG3000X_c_3075.html" aria-label="Comprar Generador de RF en tienda"
                            target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="fuentes-programables">
                            <img loading="lazy" src="imagenes/238/SPD1305X-1.webp"
                                alt="Fuente de alimentación de CC programable Siglent"
                                title="Siglent México - Fuentes de alimentación de CC programables" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="fuentes-programables">
                            <h3>Fuentes de alimentación de CC programables</h3>
                        </a>
                        <p>Las fuentes de alimentación de CC lineales programables de alta precisión con muchas
                            funciones útiles que incluyen la programación del panel frontal, la salida de temporización,
                            la pantalla de interfaz gráfica, un ventilador silencioso inteligente controlado por
                            temperatura y la comunicación del control remoto.
                        </p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Fuentes-de-poder-de-banco_c_2940.html"
                            aria-label="Comprar Fuentes de alimentación en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="https://tienda.logicbus.com.mx/carga-electrnica-dc.html">
                            <img loading="lazy" src="images/categorias/Cargas-electronicas.webp"
                                alt="Carga electrónica DC programable Siglent" title="Siglent México - cargas electrónicas"
                                width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="https://tienda.logicbus.com.mx/carga-electrnica-dc.html">
                            <h3>Cargas electrónicas</h3>
                        </a>
                        <p>Las cargas electrónicas de CC programables de la serie SDL1000X presentan un rango de
                            entradas de hasta 150 V/30A/300W. La frecuencia del modo dinámico CC es de hasta 25 kHz.
                            Ofrece estabilidad en una amplia gama de aplicaciones y puede cumplir con todo tipo de
                            requisitos de prueba, incluidos: medición de energía, diseño de baterías (para dispositivos
                            portátiles), iluminación LED, electrónica automotriz y aeroespacial.</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/carga-electrnica-dc.html" aria-label="Comprar Cargas electrónicas en tienda"
                            target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="https://tienda.logicbus.com.mx/Analizadores-de-espectro_c_2941.html">
                            <img loading="lazy" src="imagenes/238/SSA3021X-01.webp"
                                alt="Analizador de espectro Siglent SSA3021X"
                                title="Siglent México - Analizadores de espectro" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="https://tienda.logicbus.com.mx/Analizadores-de-espectro_c_2941.html">
                            <h3>Analizadores de espectro</h3>
                        </a>
                        <p>Los innovadores analizadores de espectro proporcionan una precisión de medición confiable y
                            una amplia gama de funciones de medición de RF. Incorporan tecnología IF totalmente digital
                            y tienen rangos de frecuencia de 9 kHz a 3.2 GHz para su uso en casi cualquier aplicación.
                        </p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Analizadores-de-espectro_c_2941.html"
                            aria-label="Comprar Analizadores de espectro en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="osciloscopios-portatiles">
                            <img loading="lazy" src="imagenes/238/SHS810_02.webp"
                                alt="Osciloscopio portátil de mano Siglent serie SHS"
                                title="Siglent México - Osciloscopios de mano" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="osciloscopios-portatiles">
                            <h3>Osciloscopios de mano</h3>
                        </a>
                        <p>Los osciloscopios de mano son versátiles osciloscopios de mano que integran las funciones de
                            un osciloscopio digital, multímetro y registrador (incluidas las tendencias y el registrador
                            de formas de onda) en una unidad.</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Osciloscopios-port%C3%A1tiles_c_2949.html"
                            aria-label="Comprar Osciloscopios de mano en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>

                <div class="row row-striped tabla_subcategorias_row">
                    <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ text-center">
                        <a href="multimetros-de-banco-SDM">
                            <img loading="lazy" src="imagenes/238/SDM3045X_01.webp"
                                alt="Multímetro digital de banco Siglent SDM3045X"
                                title="Siglent México - Multímetros digitales" width="100%">
                        </a>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 my-auto text-left">
                        <a href="multimetros-de-banco-SDM">
                            <h3>Multímetros digitales</h3>
                        </a>
                        <p>Los multímetros digitales de la serie SDM3000 ofrecen resolución de 4½, 5½ y 6½ dígitos con
                            una precisión de hasta 35 PPM DCV y un potente conjunto de características.</p>
                    </div>
                    <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
                        <a href="https://tienda.logicbus.com.mx/Multimetros-de-Banco_c_2959.html"
                            aria-label="Comprar Multímetros de banco en tienda" target="_blank">
                            <img loading="lazy" src="images/shopping_cart.webp" alt="Carrito de compras" width="100%">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion text-center mx-auto" id="articulos">
            <div class="col-center">
                <h2><span>Artículos</span></h2>
            </div>
        </div>

        <div class="gridContCuatro">
            <div class="griditemContC">
                <div class="cardArticulos borange h-100">
                    <div class="text-center">
                        <a href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/"
                            target="_blank" aria-label="Leer artículo sobre series SHS800X y SHS1000X">
                            <img loading="lazy" class="imgBorde"
                                src="images/articulos-portadas/Siglent-SHS800X-SHS1000X.webp" width="100%"
                                alt="Portada artículo Osciloscopios SHS800X">
                        </a>
                    </div>
                    <div class="">
                        <a href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/">
                            <h3 class="TituloArticulo">Osciloscopios portátiles de las series SHS800X y SHS1000X</h3>
                        </a>
                        <p class="DesArticulo text-justify">
                            La serie SHS X de osciloscopios portátiles aprovecha los años de investigación y desarrollo
                            de SIGLENT. El diseño utiliza conjuntos de chips que están altamente integrados...
                        </p>
                        <div class="text-center mt-3 mb-3">
                            <a class="btnVerMas"
                                href="https://www.logicbus.com.mx/blog/osciloscopios-portatiles-series-shs800x-shs1000x/"
                                target="_blank" aria-label="Ver más sobre osciloscopios portátiles SHS">
                                <span>Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="griditemContC">
                <div class="cardArticulos borange h-100">
                    <div class="text-center">
                        <a href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/"
                            target="_blank" aria-label="Leer artículo diferencias SDS1000X-U y SDS1000X-E">
                            <img loading="lazy" class="imgBorde"
                                src="images/articulos-portadas/Siglent-SDS1000X-U-SDS1000X-E.webp" width="100%"
                                alt="Comparativa de modelos SDS1000X">
                        </a>
                    </div>
                    <div class="">
                        <h3 class="TituloArticulo"><a
                                href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/"
                                target="_blank">Diferencias en los modelos de osciloscopios SDS1000X-U y
                                SDS1000X-E</a></h3>
                        <p class="DesArticulo text-justify">
                            Los modelos de SIGLENT SDS1000X-E de cuatro canales y los
                            osciloscopios SDS1000X-U se basan en plataformas digitales muy similares...
                        </p>
                        <div class="text-center mt-3 mb-3">
                            <a class="btnVerMas"
                                href="https://www.logicbus.com.mx/blog/diferencias-modelos-osciloscopios-sds1000x-u-sds1000x-e/"
                                target="_blank" aria-label="Ver más sobre diferencias SDS1000X">
                                <span>Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="griditemContC">
                <div class="cardArticulos borange h-100">
                    <div class="text-center">
                        <a href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/" target="_blank" aria-label="Leer artículo sobre tipos de osciloscopios">
                            <img loading="lazy" class="imgBorde"
                                src="images/articulos-portadas/Siglent-osciloscopios digitales.webp" width="100%"
                                alt="Tipos de osciloscopios digitales en electrónica">
                        </a>
                    </div>
                    <div class="">
                        <h3 class="TituloArticulo"><a
                                href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/"
                                target="_blank">Tipos de osciloscopios digitales</a></h3>
                        <p class="DesArticulo text-justify">
                            Los osciloscopios son un equipo esencial que se utiliza en los laboratorios de electrónica
                            para la resolución de problemas...
                        </p>
                        <div class="text-center mt-3 mb-3">
                            <a class="btnVerMas"
                                href="https://www.logicbus.com.mx/blog/tipos-de-osciloscopios-digitales/"
                                target="_blank" aria-label="Ver más sobre tipos de osciloscopios">
                                <span>Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="griditemContC">
                <div class="cardArticulos borange h-100">
                    <div class="text-center">
                        <a href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/"
                            target="_blank" aria-label="Leer artículo sobre fuente SPS5000X">
                            <img loading="lazy" class="imgBorde"
                                src="images/articulos-portadas/Siglent-SPS5000X.webp" width="100%"
                                alt="Fuente SPS5000X Siglent">
                        </a>
                    </div>
                    <div class="">
                        <h3 class="TituloArticulo"><a
                                href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/"
                                target="_blank">Fuente de alimentación DC de conmutación programable serie
                                SPS5000X</a></h3>
                        <p class="DesArticulo text-justify">
                            La electrónica de potencia ha ganado importancia en los últimos años. La tecnología de
                            equipos de prueba juega un papel fundamental...
                        </p>
                        <div class="text-center mt-3 mb-3">
                            <a class="btnVerMas"
                                href="https://www.logicbus.com.mx/blog/fuente-alimentacion-dc-conmutacion-programable-serie-sps5000x/"
                                target="_blank" aria-label="Ver más sobre serie SPS5000X">
                                <span>Ver más</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion text-center mx-auto" id="videos">
            <div class="col-center">
                <h2><span>Videos</span></h2>
            </div>
        </div>

        <div class="container text-center mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="video-container-youtube" data-video-id="oDSwdcNCp80">
                        <img loading="lazy" src="https://img.youtube.com/vi/oDSwdcNCp80/hqdefault.jpg"
                            alt="Video Unboxing Analizadores de espectro Siglent"
                            style="width:100%; border-radius:8px; cursor: pointer;">
                        <div class="play-button" aria-hidden="true"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="video-container-youtube" data-video-id="opwVg78aIIw">
                        <img loading="lazy" src="https://img.youtube.com/vi/opwVg78aIIw/hqdefault.jpg"
                            alt="Video Unboxing Fuente de alimentación SPD3303X-E"
                            style="width:100%; border-radius:8px; cursor: pointer;">
                        <div class="play-button" aria-hidden="true"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="video-container-youtube" data-video-id="Q407JEr4IN4">
                        <img loading="lazy" src="https://img.youtube.com/vi/Q407JEr4IN4/hqdefault.jpg"
                            alt="Video Unboxing Osciloscopio SDS1104X-E"
                            style="width:100%; border-radius:8px; cursor: pointer;">
                        <div class="play-button" aria-hidden="true"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="video-container-youtube" data-video-id="FuW4f4O2TBs">
                        <img loading="lazy" src="https://img.youtube.com/vi/FuW4f4O2TBs/hqdefault.jpg"
                            alt="Video Unboxing Generador de funciones SDG2042X"
                            style="width:100%; border-radius:8px; cursor: pointer;">
                        <div class="play-button" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion text-center mx-auto" id="catalogos">
            <div class="col-center">
                <h2><span>Catálogos</span></h2>
            </div>
        </div>

        <div class="gridContTres">
            <div class="griditemContB text-center">
                <a href="pdf/catalogos/Siglent-Guia-de-Instrumentos-ESP.pdf" title="Ver guía de instrumentos PDF" target="_blank"
                    rel="noopener noreferrer" aria-label="Descargar Guía de Instrumentos Siglent en Español">
                    <img loading="lazy" src="pdf/catalogos/Catalog-Siglent.webp" class="imgBorde img-catalogo"
                        alt="Portada de Catálogo de Osciloscopios">
                    <br>Ver Catálogo de Siglent <br> Catálogo de Osciloscopios
                </a>
            </div>
            <div class="griditemContB text-center">
                <a href="pdf/catalogos/Catalogo-Siglent-Osciloscopios-ESP.pdf" title="Ver catálogo equipos industriales PDF" target="_blank"
                    rel="noopener noreferrer" aria-label="Descargar Catálogo de Equipos Industriales Siglent">
                    <img loading="lazy" src="pdf/catalogos/Selection-Guide-Siglent.webp" class="imgBorde img-catalogo"
                        alt="Portada de Catálogo de Equipos Industriales">
                    <br>Ver Catálogo de Siglent <br> Catálogo de Equipos Industriales
                </a>
            </div>
            <div class="griditemContB text-center">
                <a href="pdf/Siglent-Products-Catalog-March2020.pdf" title="View Siglent catalog in English" target="_blank"
                    rel="noopener noreferrer" aria-label="Download Siglent Products Catalog in English">
                    <img loading="lazy" src="documentacion/portada-siglent-pdf-Eng.webp" class="imgBorde img-catalogo"
                        alt="Siglent Catalog English Version">
                    <br>Ver Catálogo de Siglent <br>en Inglés
                </a>
            </div>
        </div>

        <div class="seccion text-center mx-auto" id="GuiasyManuales">
            <div class="col-center">
                <h2><span>Guías y Manuales</span></h2>
            </div>
        </div>

        <div class="d-flex justify-content-center pb-5">
            <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=siglent" aria-label="Ir a la sección de documentación de Siglent">
                <div class="hoverchange">
                    <img loading="lazy" src="images/documentacion.svg" width="200" height="150"
                        style="width: 200px; height: auto;" class="mx-auto d-block" alt="Ícono de documentos">
                    <div class="button button-circle-white d-flex"
                        style="display: inline-flex; justify-content: center; align-items: center;">
                        <b>Documentación</b>
                    </div>
                </div>
            </a>
        </div>

    </main> <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Corrección de errores de consola (scrollLeft de librerías externas)
        if (!document.body.scrollLeft) {
            Object.defineProperty(document.body, 'scrollLeft', {
                value: 0,
                writable: true
            });
        }

        var videoContainers = document.querySelectorAll('.video-container-youtube');

        videoContainers.forEach(function(container) {
            container.style.position = 'relative';
            container.style.aspectRatio = '16 / 9';
            container.style.overflow = 'hidden';
            container.style.cursor = 'pointer';

            container.addEventListener('click', function() {
                var videoId = this.dataset.videoId;
                if (!videoId) return;

                var iframe = document.createElement('iframe');
                iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
                    '?autoplay=1&rel=0&modestbranding=1');
                iframe.setAttribute('title', 'YouTube video player');
                iframe.setAttribute('allow',
                    'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
                    );
                iframe.setAttribute('allowfullscreen', '');
                iframe.setAttribute('loading', 'lazy');

                iframe.style.position = 'absolute';
                iframe.style.top = '0';
                iframe.style.left = '0';
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.border = '0';

                this.innerHTML = '';
                this.appendChild(iframe);
            }, {
                once: true
            });
        });
    });
    </script>
</body>
<?php echo $var_footer; ?>

</html>