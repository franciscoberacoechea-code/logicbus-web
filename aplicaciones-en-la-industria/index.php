<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en la Industria | Logicbus</title>
    <meta name="description"
        content="Nuestras soluciones de automatización industrial se pueden aplicar a una amplia gama de industrias, desde la fabricación hasta la investigación.">
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

    <div class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en la Industria"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en la Industria" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-around px-3 px-md-5">
            <div>
                <h1 class="banner-title white font-weight-bold mb-0">APLICACIONES EN LA<p
                        class="maxi-text white font-weight-bold mb-0"> INDUSTRIA</p>
                </h1>
            </div>
            <div class="d-flex flex-wrap text-center justify-content-center">
                <a href="../celdas-de-carga" class="link-white-to-orange paragraph font-weight-bold">Celdas de carga</a>
                <div class="sm-orange-circle mx-3"></div><a href="../instrumentos-medicion"
                    class="link-white-to-orange paragraph font-weight-bold">Prueba y medición</a>
                <div class="sm-orange-circle mx-3"></div><a href="../torque-sensor"
                    class="link-white-to-orange paragraph font-weight-bold">Sensores de torque</a>
                <div class="sm-orange-circle mx-3"></div><a href="../pc-y-comunicaciones-industriales"
                    class="link-white-to-orange paragraph font-weight-bold">Computadoras industriales</a>
                <div class="sm-orange-circle mx-3"></div><a href="../oee-que-es"
                    class="link-white-to-orange paragraph font-weight-bold">OEE</a>
            </div>
        </div>
    </div>
    <section class="section-blue white">
        <div class="container tex-center py-5">
            <p class="paragraph text-center">Nuestras soluciones de automatización industrial se pueden aplicar a una
                amplia gama de industrias, desde la fabricación hasta la investigación. A continuación, se presentan
                algunos ejemplos de cómo nuestros productos pueden ayudar a las empresas a mejorar su eficiencia,
                productividad y seguridad:</p>
        </div>
    </section>

    <!-- Section Categorias -->
    <section class="container pb-3 mt-5">
        <h2 class="blue font-weight-bolder text-center mb-5">CATEGORIAS</h2>
        <p class="light-black text-center mb-5">Encuentra el producto adecuado a tu sector a través de nuestras
            soluciones principales si requieres alguna solución no dudes en contactarnos en nuestro chat o por WhatsApp.
        </p>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/academia.webp" class="card-img" alt="Academia e Investigación"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="academia-e-investigacion" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Academia e Investigación</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/agricultura.webp" class="card-img" alt="Agricultura"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="agricultura" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Agricultura</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/alimentosybebidas.webp" class="card-img" alt="Alimentos y Bebidas"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="alimentos-y-bebidas" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Alimentos y Bebidas</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/automotriz.webp" class="card-img" alt="Automotriz"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="automotriz" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Automotriz</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/construccion.webp" class="card-img" alt="Construcción"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="construccion" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Construcción</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/oem.webp" class="card-img" alt="OEM" style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="oem" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">OEM</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/materiales.webp" class="card-img" alt="Ensayos de Materiales"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="ensayos-de-materiales" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Ensayos de Materiales</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/espacial.webp" class="card-img" alt="Espacial, Defensa y Aeronáutica"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="espacial-defensa-y-aeronautica" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Espacial, Defensa y Aeronáutica</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/farmaceutica.webp" class="card-img" alt="Farmacéutica y Laboratorio"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="farmaceutica-y-laboratorio" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Farmacéutica y Laboratorio</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <a href="manufactura" class="white text-center link-orange"><img
                            src="img/industrias/manufactura.webp" class="card-img" alt="Manufactura"
                            style="width: 100%; height: auto;">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center"
                            style="background: rgba(0, 0, 0, .6);">
                            <h3 class="h5 font-weight-bold">Manufactura</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/robots.webp" class="card-img" alt="Robótica"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="robotica" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Robótica</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/transporte.webp" class="card-img" alt="Transporte"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="transporte" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Transporte</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 p-0">
                <div class="card text-white border-0 p-0 m-1">
                    <img src="img/industrias/logistica-y-almacenaje.webp" class="card-img" alt="Logística y Almacenaje"
                        style="width: 100%; height: auto;">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center"
                        style="background: rgba(0, 0, 0, .6);">
                        <a href="logistica-y-almacenaje" class="white text-center link-orange">
                            <h3 class="h5 font-weight-bold">Logística y Almacenaje</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Carrusel de Destacadas-->
    <section class="section-light-gray py-5 my-5">
        <div class="container">
            <h2 class="subtitle blue text-center">Marcas Destacadas</h2>
        </div>
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp"
                        alt="Futek" width="200px"></a>
                <a href="../madgetech"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/madgetech.webp"
                        alt="MadgeTech" width="200px"></a>
                <a href="../rfid-inc"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/rfid.webp"
                        alt="RFDI Inc" width="200px"></a>
                <a href="../fatek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/fatek.webp"
                        alt="Fatek" width="200px"></a>
                <a href="../davo-lin"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/davo-lin.webp"
                        alt="Davo Lin" width="200px"></a>
                <a href="../seneca"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/seneca.webp"
                        alt="Seneca" width="200px"></a>
                <a href="../teracom"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/teracom.webp"
                        alt="Teracom" width="200px"></a>
                <a href="../icp-das"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/icpdas.webp"
                        alt="ICP-DAS" width="200px"></a>
                <a href="../quasi"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/quasi.webp"
                        alt="quasi" width="200px"></a>
                <a href="../ipdisplays"><img class="m-3 gray-filter"
                        src="../images/nuestras_marcas/webp/ip-displays.webp" alt="Ip displays" width="200px"></a>
                <a href="../autoxing-technology"><img class="m-3 gray-filter"
                        src="../images/nuestras_marcas/webp/autoxing.webp" alt="Autoxing" width="200px"></a>
            </div>
        </div>
    </section>
    <!-- Section Aplicaciones-->
    <section class="my-5">
        <div class="container">
            <h2 class="subtitle blue text-center pb-5">Aplicaciones en la Industria</h2>
        </div>
        <div class="container d-flex justify-content-center">
            <form class="form-inline mb-5">
                <input id="inputApp" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar"
                    onclick="buscadorApps();" onkeyup="buscadorApps();">
            </form>
        </div>
        <div class="container-fluid">
            <div class="d-flex flex-wrap justify-content-center">


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Posicionamiento-Absoluto-para-Gruas-Trans-elevadoras.png"
                        alt="Posicionamiento Absoluto para Grúas Trans elevadoras (AS/RS)"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                           Posicionamiento Absoluto para Grúas Trans elevadoras (AS/RS)
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Posicionamiento-Absoluto-para-Gruas-Trans-elevadoras">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Monitoreo-de-Eficiencia-Energetica-en-Sistemas-de-Clasificacion.png"
                        alt="Monitoreo de Eficiencia Energética en Sistemas de Clasificación (Sorters)"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Monitoreo de Eficiencia Energética en Sistemas de Clasificación (Sorters)
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-Eficiencia-Energetica-en-Sistemas-de-Clasificacion">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/El-Corazon-del-Almacen-Automatizacion-de-Flujos-Internos-y-Elevacion-Inteligente.png"
                        alt="Automatización de Flujos Internos y Elevación Inteligente"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Automatización de Flujos Internos y Elevación Inteligente
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/El-Corazon-del-Almacen-Automatizacion-de-Flujos-Internos-y-Elevacion-Inteligente">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Sistema-de-Pesaje-Dinamico-de-Camiones-con-Reconocimiento-de-Matriculas.png"
                        alt="Sistema de Pesaje Dinámico de Camiones (Weigh-In-Motion) con Reconocimiento de Matrículas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Sistema de Pesaje Dinámico de Camiones (Weigh-In-Motion) con Reconocimiento de Matrículas
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Sistema-de-Pesaje-Dinamico-de-Camiones-con-Reconocimiento-de-Matriculas">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/control-de-inventario-en-silos-de-granos-y-polimeros.webp"
                        alt="Control de Inventario en Silos de Granos y Polímeros"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Control de Inventario en Silos de Granos y Polímeros
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/control-de-inventario-en-silos-de-granos-y-polimeros">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/control-de-gap-y-singulacion-en-bandas.webp"
                        alt="Control de Gap y Singulación en Bandas Clasificadoras (Sorters)"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Control de "Gap" y Singulación en Bandas Clasificadoras (Sorters)
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Control-de-Gap-y-Singulacion-en-Bandas-Clasificadoras-Sorters">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.webp"
                        alt="Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Trazabilidad de Cadena de Frío 4.0 con Alertas en Tiempo Real
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Control-de-tension-lazo-cerrado-en-maquinas-emplayadoras.png" class="card-img-top"
                        alt="Control de Tensión Lazo Cerrado en Máquinas Emplayadoras"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Control de Tensión "Lazo Cerrado" en Máquinas Emplayadoras
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Control-de-Tensi%C3%B3n-en-Lazo-Cerrado-para-M%C3%A1quinas-Emplayadoras">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica.png"
                        class="card-img-top" alt="Monitoreo de Impacto y Vibración en Transporte de Carga Crítica"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Monitoreo de Impacto y Vibración en Transporte de Carga Crítica
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Monitoreo-de-cadena-de-suministro-en-frio.png" class="card-img-top"
                        alt="Monitoreo de cadena de suministro en frío" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Monitoreo de cadena de suministro en frío
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-cadena-de-suministro-en-frio">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Sistema-DWS-Dimensioning-Weighing-Scanning-de-Alta-Velocidad.png"
                        class="card-img-top" alt="Sistema DWS (Dimensioning, Weighing, Scanning) de Alta Velocidad"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Sistema DWS (Dimensioning, Weighing, Scanning) de Alta Velocidad
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Sistema-DWS-de-Alta-Velocidad">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Mantenimiento-Predictivo-en-Sistemas-de-HVAC-para-Cuartos-Limpios.jpg"
                        class="card-img-top" alt="Mantenimiento Predictivo en Sistemas de HVAC para Cuartos Limpios"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Mantenimiento Predictivo en Sistemas de HVAC para Cuartos Limpios
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Mantenimiento-Predictivo-en-Sistemas-de-HVAC-para-Cuartos-Limpios">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Monitoreo-de-Procesos-de-Liofilizacion-Farmaceutica.png" class="card-img-top"
                        alt="Monitoreo de Procesos de Liofilización Farmacéutica"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Monitoreo de Procesos de Liofilización Farmacéutica
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-Procesos-de-Liofilizacion-Farmaceutica">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Verificacion-de-Etiquetas-Transparentes-y-Farmacode-en-Viales.png"
                        class="card-img-top" alt="Verificación de Etiquetas Transparentes y Farmacode en Viales"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Verificación de Etiquetas Transparentes y Farmacode en Viales
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Verificacion-de-Etiquetas-Transparentes-y-Farmacode-en-Viales">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Control-de-Calidad-Prueba-de-Dureza-y-Fractura-en-Tabletas-Farmaceuticas.png"
                        class="card-img-top"
                        alt="Control de Calidad: Prueba de Dureza y Fractura en Tabletas Farmacéuticas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Control de Calidad: Prueba de Dureza y Fractura en Tabletas Farmacéuticas
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Control-de-Calidad-Prueba-de-Dureza-y-Fractura-en-Tabletas-Farmaceuticas">
                            Ver
                        </a>
                    </div>
                </div>


                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Validacion-de-Perfiles-Termicos-en-Hornos-de-Curado-y-Secado.png"
                        class="card-img-top" alt="Validación de Perfiles Térmicos en Hornos de Curado y Secado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Validación de Perfiles Térmicos en Hornos de Curado y Secado
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/validacion-de-perfiles-termicos-en-hornos-de-curado-y-secado">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/Automatización_de_Tareas_de_Inspección_y_Clasificación_en_Transportadores.webp"
                        class="card-img-top"
                        alt="Automatización de Tareas de Inspección y Clasificación en Transportadores"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">
                            Automatización de Tareas de Inspección y Clasificación en Transportadores
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Automatización-de-Tareas-de-Inspección-y-Clasificación-en-Transportadores">
                            Ver
                        </a>
                    </div>
                </div>

                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/_Monitoreo de Temperatura en Procesos de Forja o Termoformado.webp"
                        class="card-img-top" alt="Monitoreo-de-Temperatura-en-Procesos-de-Forja-o-Termoformado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Temperatura en Procesos de Forja o Termoformado
                        </h5>
                        <a class="button button-circle-orange"
                            href="./Monitoreo-de-Temperatura-en-Procesos-de-Forja-o-Termoformado.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.png" class="card-img-top"
                        alt="Banco de Pruebas de Fuerza y Fatiga para Control de Calidad"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Banco de Pruebas de Fuerza y Fatiga para Control de Calidad
                        </h5>
                        <a class="button button-circle-orange"
                            href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="./img/monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion.webp"
                        class="card-img-top" alt="monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo Remoto de Procesos de Fermentación, Pasteurización o
                            Cocción
                        </h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-remoto-de-procesos-de-fermentacion-pasteurizacion-o-coccion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Monitoreo-de-Temperatura-y-Humedad-en-Camaras-de-Refrigeracion-y-Congelacion.png"
                        class="card-img-top"
                        alt="monitoreo-de-temperatura-humedad-en-camaras-refrigeracion-y-congelacion"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Temperatura y Humedad en Cámaras de Refrigeración y
                            Congelación
                        </h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-de-temperatura-humedad-en-camaras-refrigeracion-y-congelacion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/control-de-llenado-de-botellas-o-contenedores-de-liquidos.png" class="card-img-top"
                        alt="control-de-llenado-de-botellas-o-contenedores-de-liquidos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de llenado de botellas o contenedores de liquidos
                        </h5>
                        <a class="button button-circle-orange"
                            href="./control-de-llenado-de-botellas-o-contenedores-de-liquidos.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/deteccion-fallas-o-picos-electricos-en-sistemas-automatizados.png"
                        class="card-img-top" alt="Detección de Fallas o Picos Eléctricos en Sistemas Automatizados"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Detección de Fallas o Picos Eléctricos en Sistemas Automatizados
                        </h5>
                        <a class="button button-circle-orange"
                            href="./deteccion-fallas-o-picos-electricos-en-sistemas-automatizados.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/optimizacion-eficiencia-energetica-fabricacion-automoviles.png" class="card-img-top"
                        alt="Optimización de Eficiencia Energética en Fabricación de Automóviles"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Optimización de Eficiencia Energética en Fabricación de Automóviles
                        </h5>
                        <a class="button button-circle-orange"
                            href="./optimizacion-eficiencia-energetica-fabricacion-automoviles.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/diagnostico-electronico-de-vehiculos-para-calidad-en-planta.png" class="card-img-top"
                        alt="Diagnóstico Electrónico de Vehículos para Calidad en Planta"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Diagnóstico Electrónico de Vehículos para Calidad en Planta</h5>
                        <a class="button button-circle-orange"
                            href="./diagnostico-electronico-de-vehiculos-para-calidad-en-planta.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/automatizacion-logistica-para-lineas-de-ensamblaje-automotriz.png"
                        class="card-img-top" alt=" Automatización Logística para Líneas de Ensamblaje Automotriz"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5"> Automatización Logística para Líneas de Ensamblaje Automotriz</h5>
                        <a class="button button-circle-orange"
                            href="./automatizacion-logistica-para-lineas-de-ensamblaje-automotriz.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/solucion-validacion-rendimiento-para-componentes-automotrices.png"
                        class="card-img-top" alt="Solución de Validación de Rendimiento para Componentes Automotrices"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Solución de Validación de Rendimiento para Componentes Automotrices
                        </h5>
                        <a class="button button-circle-orange"
                            href="./solucion-validacion-rendimiento-para-componentes-automotrices.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/control-de-cintas-transportadoras-y-tolvas-de-alimentacion.png" class="card-img-top"
                        alt="Control de Cintas Transportadoras y Tolvas de Alimentación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de Cintas Transportadoras y Tolvas de Alimentación</h5>
                        <a class="button button-circle-orange"
                            href="./control-de-cintas-transportadoras-y-tolvas-de-alimentacion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/monitoreo-de-temperatura-en-hornos-de-calcinacion.png" class="card-img-top"
                        alt="Monitoreo de Temperatura en Hornos de Calcinación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Temperatura en Hornos de Calcinación</h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-de-temperatura-en-hornos-de-calcinacion.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/medicion-de-nivel-en-silos-de-cemento-y-clinker.png" class="card-img-top"
                        alt="Medición de Nivel en Silos de Cemento y Clinker" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Nivel en Silos de Cemento y Clinker</h5>
                        <a class="button button-circle-orange"
                            href="./medicion-de-nivel-en-silos-de-cemento-y-clinker.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento.png" class="card-img-top"
                        alt="Automatización del Sistema de Envasado y Ensacado de Cemento"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización del Sistema de Envasado y Ensacado de Cemento</h5>
                        <a class="button button-circle-orange"
                            href="./automatizacion-del-sistema-de-envasado-y-ensacado-de-cemento.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto.png"
                        class="card-img-top" alt=" Sincronización de Máquinas Dosificadoras en Procesos Multiproducto"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5"> Sincronización de Máquinas Dosificadoras en Procesos Multiproducto
                        </h5>
                        <a class="button button-circle-orange"
                            href="./sincronizacion-de-maquinas-dosificadoras-en-procesos-multiproducto.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/transporte-autonomo-de-materiales-entre-zonas-clasificadas.png" class="card-img-top"
                        alt="Transporte Autónomo de Materiales entre Zonas Clasificadas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Transporte Autónomo de Materiales entre Zonas Clasificadas</h5>
                        <a class="button button-circle-orange"
                            href="./transporte-autonomo-de-materiales-entre-zonas-clasificadas.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/monitoreo-continuo-de-temperatura-en-almacenes-gxp.png" class="card-img-top"
                        alt="Monitoreo Continuo de Temperatura en Almacenes GxP"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo Continuo de Temperatura en Almacenes GxP</h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-continuo-de-temperatura-en-almacenes-gxp.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Pruebas-de-Calidad-y-Validacion-de-Componentes-Electronicos.webp" class="card-img-top"
                        alt="Pruebas de Calidad y Validación de Componentes Electrónicos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de Calidad y Validación de Componentes Electrónicos</h5>
                        <a class="button button-circle-orange"
                            href="./pruebas-de-calidad-y-validacion-de-componentes-electronicos.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Automatizacion-en-Lineas-de-Ensamblaje-Electronico.webp" class="card-img-top"
                        alt="Automatización en Líneas de Ensamblaje Electrónico"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización en Líneas de Ensamblaje Electrónico</h5>
                        <a class="button button-circle-orange"
                            href="./automatizacion-en-lineas-de-ensamblaje-electronico.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Gestion-de-Activos-Hospitalarios.webp" class="card-img-top"
                        alt="Gestión de Activos Hospitalarios" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Gestión de Activos Hospitalarios</h5>
                        <a class="button button-circle-orange" href="./gestion-de-activos-hospitalarios.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Monitoreo-de-Temperatura-en-Almacenamiento-de-Vacunas-y-Medicamentos.webp"
                        class="card-img-top" alt="Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Temperatura en Almacenamiento de Vacunas y Medicamentos
                        </h5>
                        <a class="button button-circle-orange"
                            href="./monitoreo-de-temperatura-en-almacenamiento-de-vacunas-y-medicamentos.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/Automatizacion-del-Ensamble-Automotriz.webp" class="card-img-top"
                        alt="Automatización del Ensamble Automotriz" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización del Ensamble Automotriz</h5>
                        <a class="button button-circle-orange"
                            href="./transporte/automatizacion-del-ensamble-automotriz.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="img/IoT-en-la-Industria-Automotriz.webp" class="card-img-top"
                        alt="IoT en la Industria Automotriz" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">IoT en la Industria Automotriz</h5>
                        <a class="button button-circle-orange"
                            href="./transporte/iot-en-la-industria-automotriz.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Trazabilidad-Total-en-la-Produccion-Automotriz.webp" class="card-img-top"
                        alt="Trazabilidad Total en la Producción Automotriz" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Trazabilidad Total en la Producción Automotriz</h5>
                        <a class="button button-circle-orange"
                            href="./transporte/trazabilidad-total-en-la-produccion-automotriz.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Automatizacion-de-Pruebas-de-Calidad-en-Automoviles-.webp" class="card-img-top"
                        alt="Automatización de Pruebas de Calidad en Automóviles"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización de Pruebas de Calidad en Automóviles</h5>
                        <a class="button button-circle-orange"
                            href="./transporte/automatizacion-de-pruebas-de-calidad-en-automoviles.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Sistema-de-Gestion-de-Energia-y-Control-de-Consumo-en-Trenes.webp"
                        class="card-img-top" alt="Sistema de Gestión de Energía y Control de Consumo en Trenes"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sistema de Gestión de Energía y Control de Consumo en Trenes</h3>
                            <a class="button button-circle-orange"
                                href="./transporte/sistema-de-gestion-de-energia-y-control-de-consumo-en-trenes.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Integración-de-IoT-y-Sistemas-de-Comunicación-en-Trenes-y-Vías.webp"
                        class="card-img-top" alt="Integración de IoT y Sistemas de Comunicación en Trenes y Vías"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Integración de IoT y Sistemas de Comunicación en Trenes y Vías</h3>
                            <a class="button button-circle-orange"
                                href="./transporte/integracion-de-iot-y-sistemas-de-comunicacion-en-trenes-y-vias.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Sistema-de-Control-de-Accesos-y-Seguridad-en-Infraestructura-Ferroviaria.webp"
                        class="card-img-top"
                        alt="Sistema de Control de Accesos y Seguridad en Infraestructura Ferroviaria"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sistema de Control de Accesos y Seguridad en Infraestructura
                            Ferroviaria</h3>
                            <a class="button button-circle-orange"
                                href="transporte/sistema-de-control-de-accesos-y-seguridad-en-infraestructura-ferroviaria.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/Mantenimiento-Predictivo-y-Monitoreo-en-Tiempo-Real-en-la-Industria-Ferroviaria.png"
                        class="card-img-top" alt="Mantenimiento predictivo en infraestructura ferroviaria"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Mantenimiento predictivo en infraestructura ferroviaria</h3>
                            <a class="button button-circle-orange"
                                href="transporte/mantenimiento-predictivo-en-infraestructura-ferroviaria.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/botellas.png" class="card-img-top" alt="Llenado automático de botellas y líquidos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Llenado automático de botellas y líquidos</h3>
                            <a class="button button-circle-orange" href="llenado-automatico-de-botellas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/resorte.png" class="card-img-top" alt="Sistemas de Prueba de Resortes Automatizados"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sistemas de Prueba de Resortes Automatizados</h3>
                            <a class="button button-circle-orange" href="sistema-de-prueba-de-resorte">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/helicoptero.png" class="card-img-top" alt="rueba de fuerza del pedal de helicóptero"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de fuerza del pedal de helicóptero</h3>
                            <a class="button button-circle-orange"
                                href="prueba-de-fuerza-de-pedal-de-helicoptero">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/sujeto.jpg" class="card-img-top" alt="Monitoreo conductual de sujetos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo conductual de sujetos</h3>
                            <a class="button button-circle-orange" href="monitoreo-conductual-de-sujetos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/asiento.png" class="card-img-top" alt="Pruebas de asientos para automóvil"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de asientos para automóvil</h3>
                            <a class="button button-circle-orange" href="pruebas-de-asientos-para-automovil">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/elevador.png" class="card-img-top"
                        alt="Monitorización de peso en equipos de elevación para pacientes"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitorización de peso en equipos de elevación para pacientes</h3>
                            <a class="button button-circle-orange"
                                href="monitorizacion-de-peso-en-equipos-de-elevacion-para-pacientes">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/penetrometro.png" class="card-img-top"
                        alt="Medición de la Madurez de Frutas y Verduras" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de la madurez de frutas y verduras</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-la-madurez-de-frutas-y-verduras">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/dosificacion.png" class="card-img-top" alt="Pesaje de dosificación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pesaje de dosificación</h3>
                            <a class="button button-circle-orange" href="pesaje-de-dosificacion">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/flujo-de-masa.png" class="card-img-top"
                        alt="Medición del Flujo de Masa de Partículas Sólidas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición del flujo de masa de partículas sólidas</h3>
                            <a class="button button-circle-orange"
                                href="medicion-del-flujo-de-masa-de-particulas-solidas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/dispensador-tanque.png" class="card-img-top"
                        alt="Distribución de Contenidos en Tanques" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Distribución de contenidos en tanques</h3>
                            <a class="button button-circle-orange" href="distribucion-de-contenidos-en-tanques">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/oktoberfest.png" class="card-img-top"
                        alt="Monitoreo de Tanques de Fermentación en Cervecerías"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de tanques de fermentación en cervecerías</h3>
                            <a class="button button-circle-orange"
                                href="monitoreo-de-tanques-de-fermentacion-en-cervecerias">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/silos.png" class="card-img-top" alt="Medición de silos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de silos</h3>
                            <a class="button button-circle-orange" href="medicion-de-silos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/alimentador.png" class="card-img-top" alt="Alimentador avícola agrícola"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Alimentador avícola agrícola</h3>
                            <a class="button button-circle-orange" href="alimentador-avicola-agricola">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/residuos.png" class="card-img-top"
                        alt="Monitoreo de la Capacidad en Contenedores de Residuos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de la capacidad en contenedores de residuos</h3>
                            <a class="button button-circle-orange"
                                href="monitoreo-de-la-capacidad-en-contenedores-de-residuos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/caida-tren.png" class="card-img-top"
                        alt="Pruebas de Fuerza y Fatiga en Trenes de Aterrizaje"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de fuerza y fatiga en trenes de aterrizaje</h3>
                            <a class="button button-circle-orange"
                                href="pruebas-de-fuerza-y-fatiga-en-trenes-de-aterrizaje">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/orion.png" class="card-img-top"
                        alt="Medición de Fuerza en Despliegue de Paracaídas Aeroespaciales"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de fuerza en despliegue de paracaídas aeroespaciales</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-en-despliegue-de-paracaidas-aeroespaciales">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/cohete.png" class="card-img-top" alt="Soporte de empuje de motor del cohete"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Soporte de empuje de motor del cohete</h3>
                            <a class="button button-circle-orange" href="soporte-de-empuje-del-motor-cohete">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/uav.png" class="card-img-top" alt="Fuerza de lanzamiento de UAV"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Fuerza de lanzamiento de UAV</h3>
                            <a class="button button-circle-orange" href="fuerza-de-lanzamiento-de-uav">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/atornillador.png" class="card-img-top" alt="Fuerza de Apriete de Tuercas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Fuerza de apriete de tuercas</h3>
                            <a class="button button-circle-orange" href="fuerza-de-apriete-de-tuercas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/puerta.png" class="card-img-top"
                        alt="Medición de fuerza al cerrar puerta de automóvil"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de fuerza al cerrar puerta de automóvil</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-al-cerrar-puerta-de-automovil">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/grua.png" class="card-img-top" alt="Celda de carga para grúa"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Celda de carga para grúa</h3>
                            <a class="button button-circle-orange" href="celda-de-carga-para-grua">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/soldadura.jpg" class="card-img-top" alt="Soldadura por resistencia"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Soldadura por resistencia</h3>
                            <a class="button button-circle-orange" href="soldadura-por-resistencia">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/automovil.png" class="card-img-top"
                        alt="Prueba automática de fuerza en pedal de automóvil"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba automática de fuerza en pedal de automóvil</h3>
                            <a class="button button-circle-orange"
                                href="prueba-automatica-de-fuerza-en-pedal-de-automovil">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/perno.png" class="card-img-top" alt="Cierre de perno"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Cierre de perno</h3>
                            <a class="button button-circle-orange" href="cierre-de-perno">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/freno.jpg" class="card-img-top" alt="Frenos por sistema de cableado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Frenos por sistema de cableado</h3>
                            <a class="button button-circle-orange" href="freno-por-sistema-de-cableado">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/sensores-automotrices.jpg" class="card-img-top" alt="Sensores automotrices"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores automotrices</h3>
                            <a class="button button-circle-orange" href="sensores-automotrices">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/rodamiento.png" class="card-img-top" alt="Medición de carga en rodamientos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de carga en rodamientos</h3>
                            <a class="button button-circle-orange" href="medicion-de-carga-en-rodamientos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/dron.png" class="card-img-top" alt="Medición de Empuje y Torque en Drones"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de empuje y torque en drones</h3>
                            <a class="button button-circle-orange" href="prueba-de-helice-en-dron">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/suspension.png" class="card-img-top"
                        alt="Validación de rendimiento para sistemas de suspensión"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Validación de rendimiento para sistemas de suspensión</h3>
                            <a class="button button-circle-orange"
                                href="validacion-de-rendimiento-para-sistemas-de-suspension">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pantalla-tactil.png" class="card-img-top"
                        alt="Mejora en Interfaces de Entretenimiento Automotriz con Celdas de Carga"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Mejora en interfaces de entretenimiento automotriz con celdas de
                            carga</h3>
                            <a class="button button-circle-orange" href="retroalimentacion-de-pantalla-tactil">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/sensores-ciclicos.png" class="card-img-top"
                        alt="Monitoreo de Controles de Vuelo con Celdas de Carga de Cambio de Marchas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de controles de vuelo con celdas de carga de cambio de
                            marchas</h3>
                            <a class="button button-circle-orange" href="sensores-ciclicos-para-helicopteros">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/choque.png" class="card-img-top" alt="Sensores de prueba para choque"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de prueba para choque</h3>
                            <a class="button button-circle-orange" href="sensores-de-prueba-para-choque">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/valvula.png" class="card-img-top"
                        alt="Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de Torque de Reacción para Actuadores de Válvulas
                            Eléctricas</h3>
                            <a class="button button-circle-orange" href="pruebas-de-torque-en-valvulas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/ensamble.png" class="card-img-top" alt="Medición de herramientas de ensamble"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de herramientas de ensamble</h3>
                            <a class="button button-circle-orange" href="medicion-de-herramientas-de-ensamble">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/banco.jpg" class="card-img-top" alt="Pruebas de fuerza en tornillo de banco"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de fuerza en tornillo de banco</h3>
                            <a class="button button-circle-orange" href="pruebas-de-fuerza-en-tornillo-de-banco">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/motores.png" class="card-img-top" alt="Banco de pruebas de Torque de Motor"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Banco de pruebas de Torque de Motor</h3>
                            <a class="button button-circle-orange" href="banco-de-pruebas-de-torque-motor">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/motor-oem.png" class="card-img-top"
                        alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de Torque de Reacción para Motores Eléctricos Miniatura
                            </h3>
                            <a class="button button-circle-orange"
                                href="soporte-de-torque-de-reaccion-para-motores-electricos-miniatura">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/solar.png" class="card-img-top" alt="Pruebas con Sensores de Torque Rotacional "
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas con Sensores de Torque Rotacional </h3>
                            <a class="button button-circle-orange"
                                href="pruebas-con-sensores-de-torque-rotacional">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/prueba-motores.png" class="card-img-top"
                        alt="Sensores de Torque de Reacción en Auditoría de Motores"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de Torque de Reacción en Auditoría de Motores</h3>
                            <a class="button button-circle-orange" href="banco-de-pruebas-de-motores">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/direccion.png" class="card-img-top" alt="Sensor de torque para dirección"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensor de torque para dirección</h3>
                            <a class="button button-circle-orange" href="sensor-de-torque-para-direccion">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/brazo.png" class="card-img-top" alt="Brazo robótico automatizado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Brazo robótico automatizado</h3>
                            <a class="button button-circle-orange" href="brazo-robotico-automatizado">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/dual.png" class="card-img-top" alt="Control de nivel de tanque dual"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de nivel de tanque dual</h3>
                            <a class="button button-circle-orange" href="control-de-nivel-de-tanque-dual">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/impacto.jpg" class="card-img-top" alt="Medición de la Fuerza de Impacto"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de la fuerza de impacto</h3>
                            <a class="button button-circle-orange" href="medicion-de-fuerza-de-impacto">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tuberias.png" class="card-img-top" alt="Medición de expansión de tubos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de expansión de tubos</h3>
                            <a class="button button-circle-orange" href="medicion-de-expansion-de-tubos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/mordedura.png" class="card-img-top"
                        alt="Medición de la Fuerza de Mordida en Pacientes con Demencia"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de la Fuerza de Mordida en Pacientes con Demencia</h3>
                            <a class="button button-circle-orange" href="medicion-de-fuerza-de-mordedura">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pruebas-oem.png" class="card-img-top" alt="Banco de pruebas OEM"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Banco de pruebas OEM</h3>
                            <a class="button button-circle-orange" href="banco-de-pruebas-oem">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/jeringa.png" class="card-img-top" alt="Pruebas de jeringas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de jeringas</h3>
                            <a class="button button-circle-orange" href="pruebas-de-jeringas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/fluidos.png" class="card-img-top" alt="Medición del caudal de fluidos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición del caudal de fluidos</h3>
                            <a class="button button-circle-orange" href="medicion-del-caudal-de-fluidos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pastillas.png" class="card-img-top" alt="Medición de fuerza de compresión en píldoras"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de fuerza de compresión en píldoras</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-de-compresion-en-pildoras">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pesas.png" class="card-img-top"
                        alt="Sensores de peso para equipos de entrenamiento de gimnasio"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de peso para equipos de entrenamiento de gimnasio</h3>
                            <a class="button button-circle-orange"
                                href="sensores-de-peso-para-equipos-de-entrenamiendo-de-gimnasio">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/marte.png" class="card-img-top"
                        alt="Celda de carga criogénica para su uso en el explorador de Marte"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Celda de carga criogénica para su uso en el explorador de Marte</h3>
                            <a class="button button-circle-orange"
                                href="celda-de-carga-criogenica-para-su-uso-en-el-explorador-de-marte">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/cateter.jpg" class="card-img-top" alt="Medición de fuerza en catéter"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de fuerza en catéter</h3>
                            <a class="button button-circle-orange" href="medicion-de-fuerza-en-cateter">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/empuje.png" class="card-img-top"
                        alt="Medición de Empuje en Actuadores con Celdas de Carga tipo Dona"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Empuje en Actuadores con Celdas de Carga tipo Dona</h3>
                            <a class="button button-circle-orange" href="medicion-de-empuje-en-actuadores">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/soldadura-robot.png" class="card-img-top"
                        alt="Monitoreo de Fuerza en Pinzas de Soldadura por Puntos con Sensor de Carga FUTEK"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Fuerza en Pinzas de Soldadura por Puntos con Sensor de
                            Carga FUTEK</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-en-robot-de-soldadura-puntual">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/barco.png" class="card-img-top"
                        alt="Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga</h3>
                            <a class="button button-circle-orange"
                                href="./transporte/tension-de-las-velas-de-un-navio.php">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/vuelo.png" class="card-img-top" alt="Sensores de vuelo cableado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores de vuelo cableado</h3>
                            <a class="button button-circle-orange" href="sensores-de-vuelo-cableado">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/simulador.png" class="card-img-top" alt="Simulador de fuerza con retroalimentación"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Simulador de fuerza con retroalimentación</h3>
                            <a class="button button-circle-orange"
                                href="simulador-de-fuerza-con-retroalimentacion">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/guantes.png" class="card-img-top" alt="Rehabilitación con guantes robóticos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Rehabilitación con guantes robóticos</h3>
                            <a class="button button-circle-orange" href="rehabilitacion-con-guantes-roboticos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/endoscopia.jpg" class="card-img-top" alt="Control de fuerza en endoscopía"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de fuerza en endoscopía</h3>
                            <a class="button button-circle-orange" href="control-de-fuerza-en-endoscopia">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/bisagras.png" class="card-img-top"
                        alt="Medición de Torque en Bisagras de Torsión, Fricción Posición"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Torque en Bisagras de Torsión, Fricción Posición</h3>
                            <a class="button button-circle-orange" href="pruebas-de-torque-en-bisagras">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/taladro.png" class="card-img-top"
                        alt="Medición de Torque en Piezas de Mano Dentales Eléctricas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Torque en Piezas de Mano Dentales Eléctricas</h3>
                            <a class="button button-circle-orange" href="medicion-de-torque-en-taladro-dental">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/bola.jpg" class="card-img-top" alt="Prueba de caída de pelota"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de caída de pelota</h3>
                            <a class="button button-circle-orange" href="prueba-de-caida-de-pelota">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/presa.png" class="card-img-top" alt="Medición de Fuerza en Prensas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Fuerza en Prensas</h3>
                            <a class="button button-circle-orange" href="medicion-de-fuerza-en-prensa">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/laparoscopia.jpg" class="card-img-top"
                        alt="Calibración de herramientas laparoscópicas" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Calibración de herramientas laparoscópicas</h3>
                            <a class="button button-circle-orange"
                                href="calibracion-de-herramientas-laparoscopicas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/adn.png" class="card-img-top" alt="Síntesis de ADN"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Síntesis de ADN</h3>
                            <a class="button button-circle-orange" href="sintesis-de-adn">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pesaje-grua.png" class="card-img-top" alt="Pesaje en grúa portátil"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pesaje en grúa portátil</h3>
                            <a class="button button-circle-orange" href="pesaje-en-grua-portatil">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/union-cables.jpg" class="card-img-top" alt="Prueba de unión por cable"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de unión por cable</h3>
                            <a class="button button-circle-orange" href="prueba-de-union-por-cable">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/raquetas-nieve.png" class="card-img-top"
                        alt="Pruebas Comerciales para Raquetas de Nieve" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas Comerciales para Raquetas de Nieve</h3>
                            <a class="button button-circle-orange" href="prueba-de-raquetas-de-nieve">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/cables-industriales.png" class="card-img-top"
                        alt="Medición de tensión de cables industriales" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de tensión de cables industriales</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-tension-para-cables-industriales">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/paquete.png" class="card-img-top" alt="Prueba de caída de paquetes"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de caída de paquetes</h3>
                            <a class="button button-circle-orange" href="prueba-de-caida-de-paquetes">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/cadera.png" class="card-img-top" alt="Prueba de fatiga en prótesis de cadera"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de fatiga en prótesis de cadera</h3>
                            <a class="button button-circle-orange" href="prueba-de-fatiga-en-protesis-de-cadera">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/alambre.png" class="card-img-top" alt="Control de Tensión de Hilo"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de Tensión de Hilo</h3>
                            <a class="button button-circle-orange" href="tensor-de-alambre-de-precision">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/mordaza.jpg" class="card-img-top" alt="Soldadura Ultrasónica"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Soldadura Ultrasónica</h3>
                            <a class="button button-circle-orange"
                                href="fuerza-de-mordaza-en-soldadura-ultrasonica">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/torque.png" class="card-img-top" alt="Medición de Torque"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Torque</h3>
                            <a class="button button-circle-orange" href="medicion-de-torque-con-celdas-de-carga">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/paracaidas.png" class="card-img-top" alt="Prueba de Paracaídas de Aeronaves Militares"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de Paracaídas de Aeronaves Militares</h3>
                            <a class="button button-circle-orange" href="despliegue-de-paracaidas-para-jet">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tunel.png" class="card-img-top" alt="Pruebas en túnel de viento"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas en túnel de viento</h3>
                            <a class="button button-circle-orange" href="pruebas-en-tunel-de-viento">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tribometro.png" class="card-img-top"
                        alt="Pruebas de Fricción y Durabilidad de Materiales" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de Fricción y Durabilidad de Materiales</h3>
                            <a class="button button-circle-orange" href="tribometro-de-disco">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/guia-medica.png" class="card-img-top" alt="Cable guía para procesos quirúrgicos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Cable guía para procesos quirúrgicos</h3>
                            <a class="button button-circle-orange"
                                href="prueba-de-cable-guia-para-procesos-quirurgicos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tavar.png" class="card-img-top" alt="Durabilidad de válvula para catéter"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Durabilidad de válvula para catéter</h3>
                            <a class="button button-circle-orange" href="durabilidad-de-valvula-para-cateter">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/servomotor.png" class="card-img-top" alt="Control del torque en un servomotor"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control del torque en un servomotor</h3>
                            <a class="button button-circle-orange" href="control-del-torque-en-un-servomotor">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/robotica.png" class="card-img-top" alt="Pruebas de Equipo Deportivo"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de Equipo Deportivo</h3>
                            <a class="button button-circle-orange" href="automatizacion-industrial-robotica">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/reometro.png" class="card-img-top"
                        alt="Medición de Viscosidad y Propiedades Reológicas de Fluidos"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Viscosidad y Propiedades Reológicas de Fluidos</h3>
                            <a class="button button-circle-orange" href="medicion-de-torque-a-reometro">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tapas.png" class="card-img-top" alt="Prensa de tapas automática"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prensa de tapas automática</h3>
                            <a class="button button-circle-orange" href="prensa-de-tapas-automatica">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/fuerza-taladro.jpg" class="card-img-top"
                        alt="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">¿Qué es la fuerza de empuje y torque en el proceso de taladrado?
                            </h3>
                            <a class="button button-circle-orange"
                                href="que-es-la-fuerza-de-empuje-y-torque-en-el-proceso-de-taladrado">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/destornillador.png" class="card-img-top" alt="Torque de un desarmador en miniatura"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Torque de un desarmador en miniatura</h3>
                            <a class="button button-circle-orange" href="torque-de-un-desarmador-en-miniatura">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/tiburon.jpg" class="card-img-top" alt="Medición de la Fuerza de Mordida de un Tiburón"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de la Fuerza de Mordida de un Tiburón</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-para-mordida-de-tiburon">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/nasa.png" class="card-img-top"
                        alt="Celdas de Carga Criogénicas para Satélite Suomi NPP | Monitoreo Ambiental"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Celdas de Carga Criogénicas para Satélite Suomi NPP | Monitoreo
                            Ambiental</h3>
                            <a class="button button-circle-orange" href="celdas-de-carga-de-satelite-de-la-nasa">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/bascula.jpg" class="card-img-top" alt="Báscula de miligramos de alta precisión"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Báscula de miligramos de alta precisión</h3>
                            <a class="button button-circle-orange"
                                href="bascula-de-miligramos-de-alta-precision">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/piernas.png" class="card-img-top"
                        alt="Medición de Fuerzas de Tensión en Exoesqueletos de Rehabilitación para la Marcha"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Fuerzas de Tensión en Exoesqueletos de Rehabilitación
                            para la Marcha</h3>
                            <a class="button button-circle-orange"
                                href="dispositivo-robotico-de-rehabilitacion-de-piernas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/bolsas.png" class="card-img-top" alt="Pesaje de bolsas médicas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pesaje de bolsas médicas</h3>
                            <a class="button button-circle-orange" href="pesaje-de-bolsas-medicas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/bascula-multipesaje.png" class="card-img-top"
                        alt="Automatización de Líneas de Producción" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Automatización de Líneas de Producción</h3>
                            <a class="button button-circle-orange" href="bascula-de-pesaje-multiple">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/seguimiento-cateter.png" class="card-img-top"
                        alt="Prueba de fuerza de seguimiento del catéter" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Prueba de fuerza de seguimiento del catéter</h3>
                            <a class="button button-circle-orange"
                                href="prueba-de-fuerza-de-seguimiento-del-cateter">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/no-magnetico.jpg" class="card-img-top"
                        alt="Sensores en Ambientes de Campos Magnéticos Fuertes"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Sensores en Ambientes de Campos Magnéticos Fuertes</h3>
                            <a class="button button-circle-orange" href="soluciones-con-sensores-no-magneticos">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/biomedica.png" class="card-img-top" alt="Pruebas de Biomateriales"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de Biomateriales</h3>
                            <a class="button button-circle-orange" href="investigacion-biomedica">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/prostetico.png" class="card-img-top" alt="Análisis de Marcha en Prótesis Robóticas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Análisis de Marcha en Prótesis Robóticas</h3>
                            <a class="button button-circle-orange" href="simulador-de-pie-prostetico">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/palanca.png" class="card-img-top" alt="Medición de Fuerza de Prensado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Fuerza de Prensado</h3>
                            <a class="button button-circle-orange" href="abrazadera-de-palanca">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/cables-fabricacion.png" class="card-img-top"
                        alt="Control de tensión para fabricación de alambres y cables"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Control de tensión para fabricación de alambres y cables</h3>
                            <a class="button button-circle-orange"
                                href="control-de-tension-para-fabricacion-de-alambres-y-cables">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/pruebas-lineal.png" class="card-img-top" alt="Medición Precisa de Impactos y Prensas"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición Precisa de Impactos y Prensas</h3>
                            <a class="button button-circle-orange" href="pruebas-de-carga-lineal">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/llenado.png" class="card-img-top"
                        alt="Monitoreo de Distribución y Pesado en Líneas de Automatización"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Distribución y Pesado en Líneas de Automatización</h3>
                            <a class="button button-circle-orange" href="automatizacion-llenado-de-contenedores">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/fuerza-material.png" class="card-img-top" alt="Pruebas de fuerza en materiales"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Pruebas de fuerza en materiales</h3>
                            <a class="button button-circle-orange" href="pruebas-de-fuerza-en-materiales">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/sellador-bolsas.png" class="card-img-top"
                        alt="Medición de la Fuerza de Sello en Paquetes Esterilizados"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de la Fuerza de Sello en Paquetes Esterilizados</h3>
                            <a class="button button-circle-orange" href="validacion-de-sellado-de-bolsas">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/moldeo.png" class="card-img-top" alt="Medición de fuerza en moldeo por inyección"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de fuerza en moldeo por inyección</h3>
                            <a class="button button-circle-orange"
                                href="medicion-de-fuerza-en-moldeo-por-inyeccion">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/chips.png" class="card-img-top"
                        alt="Medición de Fuerzas en el Proceso de Die Attach en la Industria de Semiconductores"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Medición de Fuerzas en el Proceso de Die Attach en la Industria de
                            Semiconductores</h3>
                            <a class="button button-circle-orange" href="fuerza-de-ensamblaje-en-chips">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/desalinizacion.png" class="card-img-top" alt="Monitoreo de sistema de desalinización"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de sistema de desalinización</h3>
                            <a class="button button-circle-orange" href="monitoreo-de-sistema-de-desalinizacion">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/mano.jpg" class="card-img-top" alt="Detección táctil robótica"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Detección táctil robótica</h3>
                            <a class="button button-circle-orange" href="deteccion-tactil-robotica">Ver</a>
                    </div>
                </div>
                <div class="card m-3 app" style="width: 18rem;">
                    <img src="img/prensa.png" class="card-img-top"
                        alt="Monitoreo de Fuerza en Prensas Arbor para Ensambles de Ajuste a Presión y Remachado"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Monitoreo de Fuerza en Prensas Arbor para Ensambles de Ajuste a
                            Presión y Remachado</h3>
                            <a class="button button-circle-orange" href="verificacion-de-prensa-arbor">Ver</a>
                    </div>
                </div>
            </div>
            <!--<div class="text-center">
                <a href="#" class="button button-circle-orange btn-orange my-5">Ver Todas</a>
            </div>-->
    </section>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
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
    <?php echo $own_file_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $flickity_js; ?>
    <script>
        function buscadorApps() {
            var input, filter, btn, a, e;
            input = document.getElementById("inputApp");
            filter = input.value.toUpperCase();
            btn = document.getElementsByClassName("app");
            for (e = 0; e < btn.length; e++) {
                cardTitle = btn[e].getElementsByClassName("card-title")[
                    0]; // Obtener el primer elemento con la clase "card-title"
                if (cardTitle && cardTitle.textContent.toUpperCase().indexOf(filter) > -1 || input.value === '') {
                    btn[e].style.display = "block";
                } else {
                    btn[e].style.display = "none";
                }
            }
            //Evento cuando se da click en la X del input (para limpiar el filtro)
            input.addEventListener('input', function () {
                // Si el input está vacío, ejecutamos la función
                if (input.value === '') {
                    for (e = 0; e < btn.length; e++) {
                        cardTitle = btn[e].getElementsByClassName("card-title")[
                            0]; // Obtener el primer elemento con la clase "card-title"
                        btn[e].style.display = "block";
                    }
                }
            });
        }
    </script>

</body>
<?php echo $var_footer; ?>

</html>