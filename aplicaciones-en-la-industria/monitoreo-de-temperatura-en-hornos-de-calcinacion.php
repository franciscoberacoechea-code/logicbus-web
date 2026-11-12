<?php

require("../admin/config.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoreo de Temperatura en Hornos de Calcinación | Logicbus</title>

    <meta name="description"

        content="Monitoreo y control de temperatura en hornos rotatorios para procesos de calcinación en la industria cementera o minera. Incluye sensores de alta temperatura, PLC, HMI y conectividad industrial para garantizar eficiencia, seguridad y calidad del producto final." />

    <meta name="keywords"

        content="control de temperatura, hornos rotatorios, calcinación, sensores de alta temperatura, termopares, PLC, HMI, SCADA, industria cementera, industria minera, monitoreo en tiempo real, optimización energética, calidad del producto, trazabilidad de procesos" />



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

                    Monitoreo de Temperatura en Hornos de Calcinación </li>

            </ol>

        </nav>

    </section>



    <!--BANNER-->

    <section class="card text-white" style="border: none; border-radius: 0;">

        <img src="img/aplicaciones-en-la-industria.png" alt="Banner"

            alt="Monitoreo de Temperatura en Hornos de Calcinación" class="hide-mobile">

        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Monitoreo de Temperatura en Hornos de Calcinación"

            class="hide-desktop">

        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">

            <h1 class="banner-title white font-weight-bold mb-0"> Monitoreo de Temperatura en Hornos de Calcinación

            </h1>

        </div>

    </section>



    <!--CONTENIDO-->

    <section class="container-fluid py-5">

        <div class="row justify-content-around">

            <div class="col-12 col-md-4">

                <img src="./img/monitoreo-de-temperatura-en-hornos-de-calcinacion.png" alt="Diagrama" width="100%">

                <div class="text-center mt-5">

                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>

                    <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"

                            alt="fatek" width="200px"></a>

                    <a href="../3onedata"><img class="m-3 gray-filter"

                            src="../images/nuestras_marcas/webp/3onedata.webp" alt="3onedata" width="200px"></a>

                    <a href="../cimon"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/cimon.webp"

                            alt="cimon" width="200px"></a>

                    <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp"

                            alt="seneca" width="200px"></a>



                </div>

            </div>



            <div class="col-12 col-md-7">

                <p class="light-black text-justify">En los procesos de calcinación, como en la industria cementera o

                    minera, el control de temperatura dentro de hornos rotatorios es fundamental para asegurar que las

                    reacciones térmicas ocurran de forma adecuada, eficiente y segura. La supervisión constante evita

                    daños estructurales al horno, mejora la eficiencia térmica y garantiza la calidad del producto

                    final. Esta solución integra sensores de alta temperatura, registradores de datos y sistemas de

                    adquisición para monitorear zonas críticas del horno en tiempo real.

                </p>



                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>

                <ol class="light-black text-justify">

                    <li><b>Instalación de Sensores de Temperatura en Zonas Críticas</b> <br>

                        <ul>

                            <li>Se colocan sensores industriales de alta temperatura como termopares tipo B o tipo S en

                                la carcasa externa, entrada, zona de combustión y salida del horno rotatorio. Estos

                                sensores deben estar protegidos contra polvo, vibración y temperaturas extremas. Los

                                datos son transmitidos mediante convertidores de señal como el modelo <a

                                    href="https://tienda.logicbus.com.mx/Z109TC2-1_p_13204.html">Z109TC2-1</a> de

                                SENECA, que acondicionan la señal para su lectura por parte de sistemas de control.</li>

                        </ul>

                    </li>

                    <li><b>Adquisición de Datos en Tiempo Real</b> <br>

                        Las señales analógicas son enviadas al PLC <a

                            href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html">ME3C6-1616TT</a> para el

                        procesamiento de datos en tiempo

                        real.

                    </li>

                    <li class="mb-3"><b>Visualización y Control Operativo</b> <br>

                        Una pantalla HMI industrial como la <a

                            href="https://tienda.logicbus.com.mx/CM-eXT07-D_p_36393.html">CM-eXT07-D</a> conectada al

                        sistema DAQ permite visualizar

                        gráficas en tiempo real de la temperatura en diferentes segmentos del horno. En caso de

                        sobrecalentamiento o temperatura insuficiente, el sistema puede activar alarmas visuales,

                        auditivas o enviar notificaciones remotas al personal. <br>

                        En configuraciones avanzadas, el sistema se integra con un PLC o sistema SCADA que ajusta

                        automáticamente parámetros de combustión, velocidad de rotación o flujo de aire según la curva

                        térmica deseada.

                    </li>

                    <li class="mb-3"><b>Conectividad y Comunicación Industrial</b> <br>

                        Para asegurar una comunicación estable y de alta velocidad entre el PLC, la HMI y otros módulos

                        de adquisición, se emplea un switch industrial gestionable como el <a

                            href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html">IES2300SL-5GT-2LV</a>.

                        <br>

                        Este equipo cuenta con puertos Gigabit Ethernet y diseño robusto para operar en ambientes con

                        vibración, polvo y temperaturas extremas. Su función principal es interconectar todos los

                        dispositivos del sistema, garantizando transmisión de datos sin interrupciones y habilitando la

                        segmentación de red para mejorar la seguridad y el rendimiento. <br>

                        Gracias a su capacidad de administración, permite priorizar el tráfico crítico (QoS) y

                        monitorear el estado de cada enlace, lo que resulta esencial para la operación continua del

                        sistema de control térmico.

                    </li>

                    <li class="mb-3"><b>Análisis Histórico y Trazabilidad</b>

                        <br>

                        El sistema puede almacenar datos localmente o enviarlos a la nube para análisis posterior que

                        permite generar reportes por lote, validar curvas de temperatura y cumplir con normativas de

                        seguridad industrial o control de calidad (como ISO o ASTM).

                    </li>

                </ol>

                <p class="text-center light-black font-weight-bold">Ventajas de la Aplicación</p>

                <ul class="light-black text-justify">

                    <li class="mb-3"><b>Mayor seguridad operativa: </b> Evita daños por sobretemperatura y reduce el

                        riesgo de accidentes o paros por falla térmica.

                    </li>

                    <li class="mb-3"><b>Optimización energética: </b>Control preciso del calor permite ahorrar

                        combustible y mantener un consumo eficiente.

                    </li>

                    <li class="mb-3"><b>Calidad del producto: </b> Asegura que el material (cemento, cal, mineral, etc.)

                        alcance la temperatura adecuada para una reacción completa y uniforme.

                    </li>

                    <li class="mb-3"><b>Reducción de mantenimiento: </b>El monitoreo continuo permite detectar zonas

                        frías o calientes que pueden causar desgaste irregular del horno.

                    </li>

                    <li class="mb-3"><b>Trazabilidad de procesos: </b>Los datos registrados permiten validar cada ciclo

                        de calcinación ante auditorías técnicas o regulatorias.

                    </li>

                    <li class="mb-3"><b>Escalabilidad: </b>Se pueden agregar más puntos de medición o integrar con

                        sistemas de control existentes (SCADA, MES).

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

                <img src="https://tienda.logicbus.com.mx/assets/images/44/z109tc2-1.jpg" alt="Z109TC2-1" width="150px">

                <p class="font-weight-bold mt-2 mb-0">Z109TC2-1</p>

                <p>Acondicionador para termopar (J/ K/ R/ S/ T/ B/ E/ N) con aislamiento galvánico/ salida análoga

                    configurable a corriente o voltaje. Alimentación de 10~40 Vdc/ 19~28 Vac. Montaje en riel DIN.

                    Programacion por medio de cable MicroUSB y APP

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/Z109TC2-1_p_13204.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/29/ME1C1-1616T.jpg" alt="ME1C1-1616T"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">ME1C1-1616T</p>

                <p>Unidad principal Fatek serie M, Motion avanzado, 16 entradas digitales y 16 salidas a transistor SINK

                    (NPN) 200KHz, E/S máximas: 1024/128, 11 ejes de control, 1 puerto Ethernet + 2 puertos RS-485

                    Maestro/Esclavo, 1 puerto USB Type C (2.0), 24 VCD.

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/ME1C1-1616T_p_37943.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/1681763382500-image.jpg" alt="CM-eXT07-D"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">CM-eXT07-D</p>

                <p>7 Pulgadas, eXT Xpanel, HMI Base

                </p>

                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/CM-eXT07-D_p_36393.html"

                    target="_blank">Comprar</a>

            </div>

            <div

                class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">

                <img src="https://tienda.logicbus.com.mx/assets/images/16/IES2300SL-5GT-2LV.jpg" alt="FBS-20MCR2-AC"

                    width="150px">

                <p class="font-weight-bold mt-2 mb-0">IES2300SL-5GT-2LV</p>

                <p>Sin administrar, 5*10/100/1000Base-T (x) RJ45, Fuente de alimentación dual 9 ~ 60VDC, Montaje de riel

                </p>

                <a class="button button-circle-orange"

                    href="https://tienda.logicbus.com.mx/IES2300SL-5GT-2LV_p_36582.html" target="_blank">Comprar</a>

            </div>

        </div>

    </section>



    <!--VIDEOS-->

    <section class="container-fluid py-5">

        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>

        <div class="row justify-content-center my-5">

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/Tclj-_f4pEE?si=C6u3kNbnyvDSRomQ"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/dpG28nEyW7s?si=V-duFfNfVdlJBQKG"

                        title="YouTube video player" frameborder="0"

                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>

            </div>

            <div class="col-12 col-md-4">

                <div class="embed-container">

                    <iframe src="https://www.youtube.com/embed/2PmrCWk8OYY?si=V1L9uGB88gjLt6Ni"

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

                    href="https://www.logicbus.com.mx/blog/medicion-de-nivel-en-silos-de-cemento-y-clinker/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Medicion-de-Nivel-en-Silos-de-Cemento-y-Clinker.jpg"

                        alt="Medición de Nivel en Silos de Cemento y Clinker" width="100%">

                    Medición de Nivel en Silos de Cemento y Clinker

                </a>



            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/logistica-autonoma-con-youibot-revolucionando-los-almacenes-con-robots-moviles/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Logistica-autonoma-con-Youibot-Revolucionando-los-almacenes-con-robots-moviles-scaled.jpg"

                        alt="Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles"

                        width="100%">

                    Logística autónoma con Youibot: Revolucionando los almacenes con robots móviles

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/08/Automatizacion-del-Sistema-de-Envasado-y-Ensacado-de-Cemento-scaled.jpg"

                        alt="Automatización del Sistema de Envasado y Ensacado de Cemento" width="100%">

                    Automatización del Sistema de Envasado y Ensacado de Cemento

                </a>

            </div>

            <div class="col-12 col-md-3 text-center mb-3">

                <a class="blue link-orange font-weight-bold"

                    href="https://www.logicbus.com.mx/blog/precision-en-la-produccion-registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion/"

                    target="_blank" rel="noopener noreferrer">

                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2025/07/Precision-en-la-produccion-Registradores-de-datos-para-la-optimizacion-del-proceso-de-fabricacion-scaled.jpg"

                        alt="Precisión en la producción: Registradores de datos para la optimización del proceso de fabricación"

                        width="100%">

                    Precisión en la producción: Registradores de datos para la optimización del proceso de

                    fabricación</a>

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

                        alt="Monitoreo de Temperatura en Hornos de Calcinación" width="100%">

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