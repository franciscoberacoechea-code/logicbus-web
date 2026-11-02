<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-31533636-1");
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "AW-1007518778");
    </script>

    <title>
        Preguntas Frecuentes- CONTROLLINO PLC industrial -Logicbus S.A de C.V
    </title>
    <meta name="description"
        content="CONTROLLINO es un PLC de nivel industrial con compatibilidad 100% Arduino. Se puede utilizar para casi cualquier prop�sito de control y automatizaci�n." />

    <meta name="keywords"
        content="Logicbus, controllino M�xico, controllino mexico, controllino Guadalajara, PLC, nivel industrial, compatibilidad Arduino, control, automatizaci�n, controlador l�gico programable, controlador, programable, entradas digitales, salidas digitales,software libr, entradas analogas, salidas analogas, 100% compatible con Arduino,simplicidad y flexibilidad del ecosistema de Arduino,PLC CONTROLLINO,PLC compatible con arduiono, plc facil de programar" />
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<style>
    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* Estilos para hacer que la tabla sea responsiva */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .contenedor {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    /* Estilos básicos para el menú desplegable */
    .faq {
        max-width: 90%;
        margin: 0 auto;
    }

    /* Estilos para el rectángulo de encabezado */
    .faq-header {
        text-align: center;
        background-color: #ff7e00;
        margin-top: 20px;
        margin-bottom: 20px;
        padding: 5px;
        width: 100%;
        border-radius: 6px;
        color: white;
    }

    .left {
        max-width: 90%;
    }

    .question {
        margin-bottom: 20px;
    }

    .question-header {
        display: grid;
        grid-template-columns: 1fr 50px;
        align-items: center;
        /* Centra verticalmente el contenido */
        cursor: pointer;
        background-color: #f0f0f0;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .question-header img {
        margin-left: 10px;
        /* Espacio entre el título y la imagen/icono */
    }

    .answer {
        max-height: 0;
        align-items: center;
        overflow: hidden;
        margin-top: 10px;
        transition: max-height 0.3s ease-in-out;
    }

    /* Estilos para mostrar/ocultar las respuestas al hacer clic en la pregunta */
    .question:hover .question-header {
        background-color: #ccc;
    }

    .question:hover .answer {
        max-height: 1000px;
        /* Cambia el valor a un número grande para mostrar completamente la respuesta */
    }

    h3 {
        font-size: 1rem;
        font-weight: bold;

        font-family: 'Open Sans', sans-serif;
    }

    .card {
        width: 200px;
        margin: 10px;
        padding: 10px;
        text-align: center;
        transition: transform 0.3s;
        background-color: #2f2f2f;
        border-radius: 40px;
        color: white;
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card img:hover {
        transform: scale(1.2);
    }

    .card:hover {
        transform: scale(1.01);
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center center;
        z-index: 1;
        position: relative;
        border-radius: 10px;
    }


    .controllinos-tienda {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }


    .tabla table {
        width: 83%;
        margin: 10%;
        border-collapse: collapse;
        background-color: #f0f0f0;
        border-radius: 8px;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    .tabla tr:nth-child(even) {
        background-color: #FF7E00;
        color: white;
    }

    .tabla a {
        color: white !important;
    }

    .circle {
        position: absolute;

        bottom: 0;
        left: 0;
        border-radius: 50%;
        background: #deff00;
        animation: ripple 15s infinite;
        box-shadow: 0px 0px 1px 0px #caf880;
    }

    .medium {
        width: 80px;
        height: 80px;
        left: -40px;
        bottom: -40px;
    }

    .large {
        width: 120px;
        height: 120px;
        left: -60px;
        bottom: -60px;
    }

    .xlarge {
        width: 160px;
        height: 160px;
        left: -80px;
        bottom: -80px;
    }

    .xxlarge {
        width: 200px;
        height: 200px;
        left: -100px;
        bottom: -100px;
    }

    .shade1 {
        opacity: 0.2;
    }

    .shade2 {
        opacity: 0.5;
    }

    .shade3 {
        opacity: 0.7;
    }

    .shade4 {
        opacity: 0.8;
    }

    @keyframes ripple {
        0% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(0.8);
        }
    }

    .div3 {
        z-index: 2;
    }

    body {
        font-family: 'Open Sans', sans-serif;
    }


    .header {
        background-color: #ff7e00;
        color: white;
        text-align: center;
        padding: 10px;
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
    }

    .menu-logo {
        flex: 1;
    }

    .menu-items {
        flex: 1;
        text-align: right;
    }

    .menu-items a {
        text-decoration: none;
        margin: 0 20px;
        color: #333;
    }

    .content {
        padding: 20px;
    }

    /* Estilos para hacer la página responsive en dispositivos móviles */
    @media (max-width: 768px) {
        .menu {
            flex-direction: column;
        }

        .menu-logo {
            text-align: center;
        }

        .menu-items {
            text-align: center;
            margin-top: 10px;
        }

        .menu-items a {
            display: block;
            margin: 10px 0;
        }

        iframe {
            width: 90%
        }
    }

    @media (max-width: 768px) {
        .podio-webform-container {
            padding: 10px;
        }
    }

    .podio-webform-container {
        max-width: 100%;
        margin: auto;
    }
</style>


</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div id="main">
        <!--- Estilos Necesarios-->
        <link rel="stylesheet" type="text/css" href="libreria/estilos.css" />
        <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css" />
        <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css" />
        <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css" />
        <link rel="stylesheet" type="text/css" href="libreria/marcas.css" />
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
                </br><br>
                <div class="tabla">
                    <table>
                        <tr>
                            <th>Hojas de Datos</th>
                        </tr>
                        <tr>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/100-000-00-Datasheet.pdf">Controllino
                                    MINI</a>
                            </td>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/100-000-00-Datasheet.pdf"><img
                                        src="imagenes/iconos/pdf-icono.png" alt="icono pdf" width="30px"></a></td>
                        </tr>
                        <tr>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/100-100-00-DataSheet.pdf"
                                    style="color:black!important;">Controllino MAXI</a></td>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/100-100-00-DataSheet.pdf"
                                    style="color:black!important;"><img src="imagenes/iconos/pdf-icono.png"
                                        alt="icono pdf" width="30px"></a></td>
                        </tr>
                        <tr>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/CONTROLLINO_MEGA_Datasheet.pdf">Controllino
                                    MEGA</a></td>
                            <td><a href="https://tienda.logicbus.com.mx/assets/PDF/265/CONTROLLINO_MEGA_Datasheet.pdf"><img
                                        src="imagenes/iconos/pdf-icono.png" alt="icono pdf" width="30px"></a></td>
                        </tr>
                        <tr>
                            <th>Manual de Usuario</th>
                        </tr>
                        <tr>
                            <td><a
                                    href="pdf/265/CONTROLLINO-Instruction-Manual-V1.3-2023-05-15.pdf">CONTROLLINO-Instruction-Manual</a>
                            </td>
                            <td><a href="pdf/265/CONTROLLINO-Instruction-Manual-V1.3-2023-05-15.pdf"><img
                                        src="imagenes/iconos/pdf-icono.png" alt="icono pdf" width="30px"></a></td>
                        </tr>
                    </table>
                </div>
                <a href="https://www.logicbus.com.mx/blog/?s=controllino&category_name&tag"><img
                        src="imagenes/265/blog-controllino.png" alt="blog controllino"
                        style="width: 83%; margin-left: 10%;"></a>
            </div>
            <div class="griditemContA" id="subir">
                <div class="">
                    <h1 class="titulo_producto" align="center" width="100%">
                        Preguntas Frecuentes Controllino PLC industrial
                    </h1>
                    <a href="https://tienda.logicbus.com.mx/controllino">
                        <img src="images/banner/www/FAQs-banner.png"
                            alt="CONTROLLINO PLC industrial compatible con Arduino"
                            title="CONTROLLINO PLC industrial compatible con Arduino" width="100%" />
                    </a>
                </div>


                <!------ Aplicaciones -------->
                <div class="faq-header">
                    <h3>
                        Bienvenido a la sección de preguntas frecuentes (FAQ) de Controllino
                    </h3>
                </div>

                <p style="text-align: justify;">
                    Bienvenido al mundo en donde la innovación en automatización se
                    encuentra en su máximo esplendor. Nuestro equipo de ingenieros en
                    Logicbus difunden día a día su experiencia y amor por el producto,
                    elaborando soluciones realistas, listas para la industria y de código
                    abierto. <br /><br />

                    La sección de Preguntas Frecuentes <strong>Controllino</strong> PLC
                    industrial (FAQ´s) sobre Controllino abarca una variedad de temas clave
                    relacionados con estos controladores industriales. Los usuarios pueden
                    encontrar respuestas a preguntas sobre la introducción y características
                    de Controllino, cómo instalar y programar estos dispositivos, gestionar
                    conexiones y entradas/salidas, así como solucionar problemas y obtener
                    soporte técnico. También se proporcionan recursos adicionales como
                    manuales y documentación técnica. Esta sección es una fuente útil de
                    información para aquellos interesados en aprender más y resolver dudas
                    sobre Controllino en entornos industriales. <br /><br />

                    Controllino no sólo una empresa: es una familia unida por una búsqueda
                    incesante de la excelencia, impulsada a diseñar productos pioneros que
                    eleven sus creaciones industriales y de IoT al siguiente nivel.
                    <br /><br />

                    No espere más para redefinir lo que es posible en su línea de producción
                    o proyecto educativo. El futuro de la automatización industrial ya está
                    aquí y es de código abierto, robusto y está listo para usted.
                    Experimente la revolución Controllino hoy mismo. <br />
                </p>
                <div class="faq-header">
                    <h3>Preguntas Frecuentes</h3>
                </div>
                <div class="videos">
                    <div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cuáles son las 5 principales características de los PLC´s Controllino?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/CyhCU5IZG_Y?si=l8pF2s_Z9XTdZr-y"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cuáles son las diferencias entre los 3 principales PLC´s Controllino?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/NpFL_R9wdbk?si=Ggr2tfFHA-G1onbD"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿En qué industrias y cómo se aplica el PLC Controllino?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/4lzMjYvCxGs?si=kzgBZxWIy9yIyYms"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo configurar mi biblioteca IDE Arduino para comunicar el PLC Controllino a una
                                    PC?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/lpczvE1HSEo?si=ZS_75asq-swe2vP_"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo leer una entrada análoga y activar salidas digitales en el PLC Controllino?
                                </h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/X83aDg0MGJc?si=bQXm4FHmVw3i1MQY"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo linealizar entradas análogas en el PLC Controllino?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/19944aAsvIU?si=wCXAvumqwxPUeZjr"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo crear un código de programación con ChatGPT para el PLC Controllino?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/8szyTqu_SGI?si=-GXKCiQlNqcnt9QR"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo comunicar el PLC Controllino con una HMI por Modbus?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/e0xKCzI0L24?si=YwWGALyDCNCDuPnj"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-header">
                                <h3>¿Cómo comunicar el PLC Controllino a la nube con protocolo HTTP con GET y POS?</h3>
                                <img src="imagenes/265/video-tutorial.png" alt="Tutorial" width="35px" />
                            </div>
                            <div class="answer">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/Lhz3MnlL5Fg?si=scW7xWhSoM3-W6X2"
                                    title="Video tutorial: Cómo instalar las librerías de Controllino en Arduino"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="faq">
                    <h1 class="titulo_producto" align="center">
                        ¿Más dudas acerca de Controllino? Te invitamos a ver nuestro webinario de 1:20 hr,
                        "Introducción a los
                        PLCs Controllino"
                    </h1>
                    <br />
                    <center><iframe width="560" height="315"
                            src="https://www.youtube.com/embed/vbuSry0O7no?si=P1UMZZfTAJhrhgvy"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen loading="lazy">
                        </iframe></center>

                </div>
                </br>
                <center>
                    <div class="seccion" id="productos">
                        <div class="col-center">
                            <h2><span>Equipos</span></h2>
                        </div>
                    </div>
                </center>
                <div class="controllinos-tienda">
                    <div class="card" style=" overflow: hidden; position: sticky">
                        <div class="ripple-background" style="z-index: 1">
                            <div class="circle xxlarge shade1"></div>
                            <div class="circle xlarge shade2"></div>
                            <div class="circle large shade3"></div>
                            <div class="circle mediun shade4"></div>
                        </div>
                        <div class="div3">
                            <h3>Controllino Mini</h3>
                            <a
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-000-00">
                                <img src="imagenes/265/mini-controllino-proyecto.png" alt="Controllino Mini">
                            </a>
                        </div>
                    </div>
                    <div class="card" style=" overflow: hidden; position: sticky">
                        <div class="ripple-background" style="z-index: 1">
                            <div class="circle xxlarge shade1"></div>
                            <div class="circle xlarge shade2"></div>
                            <div class="circle large shade3"></div>
                            <div class="circle mediun shade4"></div>
                        </div>
                        <div class="div3">
                            <h3>Controllino Maxi</h3>
                            <a
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-100-00">
                                <img src="imagenes/265/maxi-controllino-proyecto.png" alt="Controllino Maxi">
                            </a>
                        </div>
                    </div>
                    <div class="card" style=" overflow: hidden; position: sticky">
                        <div class="ripple-background" style="z-index: 1">
                            <div class="circle xxlarge shade1"></div>
                            <div class="circle xlarge shade2"></div>
                            <div class="circle large shade3"></div>
                            <div class="circle mediun shade4"></div>
                        </div>
                        <div class="div3">
                            <h3>Controllino Mega</h3>
                            <a
                                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-200-00">
                                <img src="imagenes/265/mega-controllino-proyecto.png" alt="Controllino Mega" />
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
                    <thead>
                        <tr class="titulo_espec" align="center">
                            <td> </td>
                            <td>MINI </td>
                            <td>MAXI </td>
                            <td>MAXI Automation</td>
                            <td>MAXI Power </td>
                            <td>MAXI Power Automation </td>
                            <td>MEGA</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">Analog/Digital Inputs </td>
                            <td align="center">6 (2x only Analog) </td>
                            <td align="center">10 </td>
                            <td align="center">12 </td>
                            <td align="center">10 </td>
                            <td align="center">12 </td>
                            <td align="center">16</td>
                        </tr>
                        <tr>
                            <td align="center">Only Digital Inputs </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">6 </td>
                            <td align="center">2 </td>
                            <td align="center">6 </td>
                            <td align="center">5</td>
                        </tr>
                        <tr>
                            <td align="center">Analog 0-10V Inputs </td>
                            <td align="center"> </td>
                            <td align="center"> </td>
                            <td align="center">2 </td>
                            <td align="center"> </td>
                            <td align="center">2 </td>
                            <td align="center"> </td>
                        </tr>
                        <tr>
                            <td align="center">Interrupt Inputs </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2</td>
                        </tr>
                        <tr>
                            <td align="center">Digital 2A Outputs </td>
                            <td align="center">8 (3 PWM) </td>
                            <td align="center">12 (all PWM) </td>
                            <td align="center">8 (all PWM) </td>
                            <td align="center">12 (all PWM) </td>
                            <td align="center">8 (all PWM) </td>
                            <td align="center">24 (15 PWM)</td>
                        </tr>
                        <tr>
                            <td align="center">Analog 0-10V Outputs </td>
                            <td align="center"> </td>
                            <td align="center"> </td>
                            <td align="center">2 </td>
                            <td align="center"> </td>
                            <td align="center">2 </td>
                            <td align="center"> </td>
                        </tr>
                        <tr>
                            <td align="center">Relay Outputs </td>
                            <td align="center">6 (parallel to Digital Outputs) </td>
                            <td align="center">10 </td>
                            <td align="center">10 </td>
                            <td align="center">5 (16A) </td>
                            <td align="center">5 (16A) </td>
                            <td align="center">16</td>
                        </tr>
                        <tr>
                            <td align="center">Serial TTL Interface </td>
                            <td align="center">1 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2 </td>
                            <td align="center">2</td>
                        </tr>
                        <tr>
                            <td align="center">I²C Interface </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1</td>
                        </tr>
                        <tr>
                            <td align="center">SPI Interface </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1</td>
                        </tr>
                        <tr>
                            <td align="center">RS485 Interface </td>
                            <td align="center"> </td>
                            <td align="center">1 </td>
                            <td align="center"> </td>
                            <td align="center">1 </td>
                            <td align="center"> </td>
                            <td align="center">1</td>
                        </tr>
                        <tr>
                            <td align="center">RTC </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1</td>
                        </tr>
                        <tr>
                            <td align="center">Ethernet Interface </td>
                            <td align="center"> </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1 </td>
                            <td align="center">1</td>
                        </tr>

                        <tr>
                        </tr>
                        <tr>
                            <td align="center"> </td>
                            <td align="center"><a href="https://tienda.logicbus.com.mx/100-000-00_p_19880.html"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                            <td align="center"><a
                                    href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-controllino-100-100-00"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                            <td align="center"><a href="https://tienda.logicbus.com.mx/100-101-00_p_19875.html"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                            <td align="center"><a href="https://tienda.logicbus.com.mx/100-102-00_p_23101.html"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                            <td align="center"><a href="https://tienda.logicbus.com.mx/100-104-00_p_23102.html"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                            <td align="center"><a href="https://tienda.logicbus.com.mx/100-200-00_p_19878.html"
                                    title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png"
                                        class="carrito" border="0" alt="Comprar Controllino Logicbus"></a></td>
                        </tr>

                    </tbody>
                </table>


                <br><br>

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
        <!-- PIE DE PAGINA -->
        <?php require("libreria/footer.view.php"); ?>
        <?php echo $bootstrap_js; ?>
        <?php echo $jquery_js; ?>
        <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>