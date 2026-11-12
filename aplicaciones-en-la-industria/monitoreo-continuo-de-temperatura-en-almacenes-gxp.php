<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoreo Continuo de Temperatura en Almacenes GxP | Logicbus</title>

    <meta name="description"

        content="Sistema de monitoreo continuo GxP para temperatura y humedad en almacenes. Utiliza sensores RFRHTemp2000A, MadgeTech Cloud y alertas en tiempo real para garantizar la integridad de productos farmacéuticos, biotecnológicos y alimentarios.">

    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />



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



    <!--RUTAS-->

    <section class="container">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb pl-0">

                <li class="breadcrumb-item"><a href="./" class="blue link-orange">Aplicaciones en la Industria</a></li>

                <li class="breadcrumb-item active" aria-current="page">

                    Monitoreo Continuo de Temperatura en Almacenes GxP </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Monitoreo Continuo de Temperatura en Almacenes GxP" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Monitoreo Continuo de Temperatura en Almacenes GxP"

            class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0">Monitoreo Continuo de Temperatura en Almacenes GxP

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/monitoreo-continuo-de-temperatura-en-almacenes-gxp.png" alt="Diagrama" width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../arestech"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/arestech.webp" alt="arestech" width="200px"></a>

                    <a href="../madgetech"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/madgetech.webp" alt="madgetech" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">El sistema de monitoreo continuo de temperatura para almacenes

                    regulados bajo normas GxP (Good x Practice) garantiza el control ambiental necesario para mantener

                    la integridad de productos farmacéuticos, biotecnológicos y alimentarios. Utilizando sensores de

                    alta precisión, conectividad IoT y software de registro validado, este sistema permite visualizar,

                    registrar y alertar sobre cualquier desviación térmica en tiempo real.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Monitoreo con RFRHTemp2000A</b> <br>

                        Se instalan registradores inalámbricos MadgeTech <a

                            href="https://tienda.logicbus.com.mx/RFRHTEMP2000A_p_6664.html">RFRHTemp2000A</a> en las

                        zonas críticas del

                        almacén, como cámaras frías, pasillos y puntos cercanos a entradas o salidas de aire. Estos

                        dispositivos miden temperatura y humedad con alta precisión y transmiten los datos en tiempo

                        real al <a href="https://tienda.logicbus.com.mx/RFC1000-Cloud-Relay_p_19399.html">RFC1000 Cloud

                            Relay</a>, que funge como puente hacia la nube.

                    </li>

                    <li><b>Registro Validado en MadgeTech Cloud</b> <br>

                        Los datos recolectados se almacenan automáticamente en <b>MadgeTech Cloud</b>, una plataforma

                        validada

                        para entornos GxP que permite el acceso remoto y la trazabilidad completa.

                    </li>

                    <li class="mb-3"><b>Alertas Automáticas ante Desviaciones</b> <br>

                        Cuando las lecturas exceden los umbrales definidos (por ejemplo, entre 2 °C y 8 °C en

                        refrigeración), el sistema envía alertas por correo electrónico o SMS a los responsables. Esto

                        permite tomar acciones inmediatas para proteger la integridad de los productos.

                    </li>

                    <li class="mb-3"><b>Visualización Local con PPC-Z21PW-B62A1</b> <br>

                        La PC industrial <a

                            href="https://tienda.logicbus.com.mx/PPC-Z217RW-B62A1_p_31731.html">PPC-Z21PW-B62A1</a> se

                        utiliza como estación de monitoreo local. Desde esta PC, se

                        accede directamente a la plataforma MadgeTech Cloud mediante navegador web, permitiendo a los

                        operarios visualizar en tiempo real los datos ambientales, generar reportes, y consultar

                        gráficos históricos o mapas térmicos desde una interfaz robusta e industrializada.

                    </li>

                    <li class="mb-3"><b>Almacenamiento en la nube</b>

                        <br>

                        Toda la información está respaldada en servidores seguros en la nube.

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Detección Proactiva de Riesgos</b> Las alertas automáticas permiten actuar antes

                        de que ocurran pérdidas o se comprometa la calidad.

                    </li>

                    <li class="mb-3"><b>Reducción de Pérdidas</b>El monitoreo permanente evita desviaciones prolongadas

                        que puedan afectar los productos almacenados.

                    </li>

                    <li class="mb-3"><b>Escalabilidad Modular</b> Puede expandirse fácilmente agregando nuevos sensores

                        o áreas de monitoreo sin requerir cableado adicional.

                    </li>

                    <li class="mb-3"><b>Acceso Local y Remoto 24/7</b> La PC industrial PPC-Z21PW-B62A1 permite control

                        en sitio, mientras que MadgeTech Cloud ofrece supervisión desde cualquier parte del mundo.

                    </li>

                </ul>

                <a class="button button-circle-orange" href="#contacto">Contáctanos</a>

            </div>

        </div>

    </section>



    <!--EQUIPOS RECOMENDADOS-->

    <section class="container py-5">

        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>

        <div class="row justify-content-center">

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/rfrhtemp2000a.jpg" alt="RFRHTEMP2000A"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">RFRHTEMP2000A</p>

                <p>Registrador inalámbrico para temperatura (-20 a 60°C) y humedad (0 a 95%) con LCD de dos vías</p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/RFRHTEMP2000A_p_6664.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/09/RFC1000CloudRelay.jpg"

                    alt="RFC1000 Cloud Relay" width="150px">

                <p class="font-weight-bold mt-2 mb-0">RFC1000 Cloud Relay</p>

                <p>Centro de registro de datos de MadgeTech Cloud Services para usar con las series RFOT y RF2000A.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/RFC1000-Cloud-Relay_p_19399.html" target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/PPC-Z217PW-B61A1-1.jpg" alt="PPC-Z217RW-B62A1"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">PPC-Z217RW-B62A1</p>

                <p>La serie PPC-Z de Arestech, Panel PC de acero inoxidable 316 apto para uso alimentario, es una línea

                    de soluciones informáticas higiénicas, resistentes y excepcionalmente resistentes a la corrosión.

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/PPC-Z217RW-B62A1_p_31731.html" target="_blank">Comprar</a>

            </div>

        </div>

    </section>



    <!--VIDEOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/9i3pFE4_rsY?si=h7gOHcagaOQCxbqv"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/cvhAs3xziSE?si=LZfR_50Kl2b-z8Cl"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/j2_IDnYDpkQ?si=JHGasN3zceJ-RooE"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>





        </div>

    </section>



    <!--ARTICULOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/panel-pcs-con-procesadores-de-12va-generacion-de-taicenn/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/taicenn-4.png"

                        alt="Panel PCs con procesadores de 12va Generación de TAICENN" width="100%">

                    Panel PCs con procesadores de 12va Generación de TAICENN

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/nuevos-osciloscopios-sds7000a-ap-de-siglent-rendimiento-de-hasta-8-ghz-para-aplicaciones-avanzadas-de-prueba-y-analisis/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Nuevos-osciloscopios-SDS7000AAP-de-SIGLENT-scaled.jpg"

                        alt="Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas de prueba y análisis"

                        width="100%">

                    Nuevos osciloscopios SDS7000A/AP de SIGLENT: rendimiento de hasta 8 GHz para aplicaciones avanzadas

                    de prueba y análisis

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/por-que-siglent-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Por-que-SIGLENT-es-el-aliado-ideal-para-laboratorios-de-ingenieria-y-desarrollo-electronico-2048x1024.jpg"

                        alt="¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?"

                        width="100%">

                    ¿Por qué SIGLENT es el aliado ideal para laboratorios de ingeniería y desarrollo electrónico?

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/davo-lin-teclados-industriales-de-alta-resistencia-distribuidos-por-logicbus/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/DAVO-LIN-Teclados-Industriales-de-Alta-Resistencia-Distribuidos-por-Logicbus-scaled.jpg"

                        alt="DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus"

                        width="100%">

                    DAVO LIN: Teclados Industriales de Alta Resistencia Distribuidos por Logicbus</a>

            </div>



        </div>

    </section>



    <!--INDUSTRIAS-->

    <section class="container">

        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>

        <div class="container my-5">

            <div class="cards-industries d-flex flex-wrap justify-content-center text-center">

                <div class="card card-industry">

                    <a class="text-white" href="academia-e-investigacion">

                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Academia e Investigación">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Academia e Investigación</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="agricultura">

                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Agricultura">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Agricultura</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="alimentos-y-bebidas">

                        <img src="img/industrias/alimentosybebidas.webp" class="card-img"

                            style="filter: brightness(0.5);" alt="Alimentos y Bebidas">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="automotriz">

                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Automotriz">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Automotriz</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="construccion">

                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Construcción">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Construcción</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="oem">

                        <img src="img/industrias/oem.webp" class="card-img" style="filter: brightness(0.5);" alt="OEM">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">OEM</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="ensayos-de-materiales">

                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Ensayos de Materiales">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="farmaceutica-y-laboratorio">

                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Farmacéutica y Laboratorio">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="robotica">

                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Robótica">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Robótica</h5>

                        </div>

                    </a>

                </div>

                <div class="card card-industry">

                    <a class="text-white" href="">

                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);"

                            alt="Transporte">

                        <div class="card-img-overlay d-flex justify-content-center align-items-center">

                            <h5 class="card-title link-orange">Transporte</h5>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- MODAL DIAGRAMA -->

    <div class="modal fade" id="Diagrama1ModalCenter" tabindex="-1" role="dialog"

        aria-labelledby="Diagrama1ModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <img src="https://www.logicbus.com.mx/imagenes/36/infografia-futek.jpg"

                        alt="Monitoreo Continuo de Temperatura en Almacenes GxP" width="100%">

                </div>

                <div class="modal-footer">

                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>-->

                </div>

            </div>

        </div>

    </div>



            <!-- Sección Contacto / Formulario Odoo -->
<div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
        <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
        <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
    </div>
    
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

    <?php require("../libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>

    <?php echo $popper_js; ?>

    <?php echo $bootstrap_js; ?>

    <?php echo $own_file_js; ?>

    <?php echo $flickity_js; ?>



</body>

<?php echo $var_footer; ?>



</html>