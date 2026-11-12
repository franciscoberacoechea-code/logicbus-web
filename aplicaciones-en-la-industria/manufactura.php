<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Manufactura | Logicbus</title>
    <meta name="description"
        content="La automatización está revolucionando la industria de la manufactura, optimizando la producción, mejorando la calidad de los productos y reduciendo tiempos y costos operativos.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones en Manufactura</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Manufactura"
            class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Manufactura" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Manufactura</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización está revolucionando la industria de la
                manufactura, optimizando la producción, mejorando la calidad de los productos y reduciendo tiempos y
                costos operativos. Desde líneas de producción robóticas hasta sistemas avanzados de control de calidad,
                la automatización permite una fabricación más rápida, precisa y eficiente. Las tecnologías como la
                robótica colaborativa, la inteligencia artificial y el Internet de las Cosas (IoT) están transformando
                las fábricas en ecosistemas inteligentes, donde los procesos se ajustan y supervisan en tiempo real.</p>
            <p class="paragraph light-black text-justify">Esta transformación no solo incrementa la capacidad de
                producción y reduce los desperdicios, sino que también facilita la personalización de productos y la
                adaptación rápida a las demandas del mercado.</p>
            <p class="paragraph light-black text-justify">Explora cómo la automatización está impulsando el futuro de la
                manufactura, ofreciendo soluciones innovadoras para un entorno industrial más eficiente, flexible y
                competitivo.</p>
        </div>
    </section>

    <!--APLICACIONES-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
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
                <img src="img/_Monitoreo de Temperatura en Procesos de Forja o Termoformado.webp"
                    class="card-img-top" alt="Monitoreo de Temperatura en Procesos de Forja o Termoformado"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Temperatura en Procesos de Forja o Termoformado
                    </h5>
                    <a class="button button-circle-orange"
                        href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/Monitoreo-de-Temperatura-en-Procesos-de-Forja-o-Termoformado.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.png"
                    class="card-img-top" alt="Banco de Pruebas de Fuerza y Fatiga para Control de Calidad"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Banco de Pruebas de Fuerza y Fatiga para Control de Calidad
                    </h5>
                    <a class="button button-circle-orange"
                        href="https://www.logicbus.com.mx/aplicaciones-en-la-industria/banco-de-pruebas-de-fuerza-fatiga-para-control-de-calidad.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/palanca.png" class="card-img-top" alt="Medición de Fuerza de Prensado"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between" style="height: 100%;">
                    <h5 class="card-title mb-4">Medición de Fuerza de Prensado</h5>
                    <a class="button button-circle-orange" href="abrazadera-de-palanca">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cables-fabricacion.png" class="card-img-top"
                    alt="Control de tensión para fabricación de alambres y cables"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Control de tensión para fabricación de alambres y cables</h5>
                    <a class="button button-circle-orange"
                        href="control-de-tension-para-fabricacion-de-alambres-y-cables">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pruebas-lineal.png" class="card-img-top" alt="Medición Precisa de Impactos y Prensas"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición Precisa de Impactos y Prensas</h5>
                    <a class="button button-circle-orange" href="pruebas-de-carga-lineal">Ver</a>
                </div>
            </div>
            <div class="card m-3 app" style="width: 18rem;">
                <img src="img/chips.png" class="card-img-top"
                    alt="Medición de Fuerzas en el Proceso de Die Attach en la Industria de Semiconductores"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Fuerzas en el Proceso de Die Attach en la Industria de
                        Semiconductores</h5>
                        <a class="button button-circle-orange" href="fuerza-de-ensamblaje-en-chips">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/llenado.png" class="card-img-top"
                    alt="Monitoreo de Distribución y Pesado en Líneas de Automatización"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Monitoreo de Distribución y Pesado en Líneas de Automatización</h5>
                    <a class="button button-circle-orange" href="automatizacion-llenado-de-contenedores">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bascula-multipesaje.png" class="card-img-top" alt="Automatización de Líneas de Producción"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Automatización de Líneas de Producción</h5>
                    <a class="button button-circle-orange" href="bascula-de-pesaje-multiple">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dual.png" class="card-img-top" alt="Control de nivel de tanque dual"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Control de nivel de tanque dual</h5>
                    <a class="button button-circle-orange" href="control-de-nivel-de-tanque-dual">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tapas.png" class="card-img-top" alt="Prensa de tapas automática"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Prensa de tapas automática</h5>
                    <a class="button button-circle-orange" href="prensa-de-tapas-automatica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/silos.png" class="card-img-top" alt="Medición de silos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de silos</h5>
                    <a class="button button-circle-orange" href="medicion-de-silos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pesaje-grua.png" class="card-img-top" alt="Pesaje en grúa portátil"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Pesaje en grúa portátil</h5>
                    <a class="button button-circle-orange" href="pesaje-en-grua-portatil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/union-cables.jpg" class="card-img-top" alt="Prueba de unión por cable"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Prueba de unión por cable</h5>
                    <a class="button button-circle-orange" href="prueba-de-union-por-cable">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/fuerza-material.png" class="card-img-top" alt="Pruebas de fuerza en materiales"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza en materiales</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-en-materiales">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/sellador-bolsas.png" class="card-img-top"
                    alt="Medición de la Fuerza de Sello en Paquetes Esterilizados"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de la Fuerza de Sello en Paquetes Esterilizados</h5>
                    <a class="button button-circle-orange" href="validacion-de-sellado-de-bolsas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/moldeo.png" class="card-img-top" alt="Medición de fuerza en moldeo por inyección"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de fuerza en moldeo por inyección</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-en-moldeo-por-inyeccion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/paquete.png" class="card-img-top" alt="Prueba de caída de paquetes"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Prueba de caída de paquetes</h5>
                    <a class="button button-circle-orange" href="prueba-de-caida-de-paquetes">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cadera.png" class="card-img-top" alt="Prueba de fatiga en prótesis de cadera"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Prueba de fatiga en prótesis de cadera</h5>
                    <a class="button button-circle-orange" href="prueba-de-fatiga-en-protesis-de-cadera">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/alambre.png" class="card-img-top" alt="Control de Tensión de Hilo"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Control de Tensión de Hilo</h5>
                    <a class="button button-circle-orange" href="tensor-de-alambre-de-precision">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/mordaza.jpg" class="card-img-top" alt="Soldadura Ultrasónica"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Soldadura Ultrasónica</h5>
                    <a class="button button-circle-orange" href="fuerza-de-mordaza-en-soldadura-ultrasonica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/chips.png" class="card-img-top"
                    alt="Medición de Fuerzas en el Proceso de Die Attach en la Industria de Semiconductores"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de Fuerzas en el Proceso de Die Attach en la Industria de
                        Semiconductores</h5>
                    <a class="button button-circle-orange" href="fuerza-de-ensamblaje-en-chips">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/soldadura-robot.png" class="card-img-top"
                    alt="Monitoreo de Fuerza en Pinzas de Soldadura por Puntos con Sensor de Carga FUTEK"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Monitoreo de Fuerza en Pinzas de Soldadura por Puntos con Sensor de
                        Carga FUTEK</h5>
                    <a class="button button-circle-orange"
                        href="medicion-de-fuerza-en-robot-de-soldadura-puntual">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/torque.png" class="card-img-top" alt="Medición de Torque"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de Torque</h5>
                    <a class="button button-circle-orange" href="medicion-de-torque-con-celdas-de-carga">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/barco.png" class="card-img-top"
                    alt="Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Monitoreo de Tensión en Jarcias de Velero con Sensores de Carga</h5>
                    <a class="button button-circle-orange"
                        href="./transporte/tension-de-las-velas-de-un-navio.php">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/botellas.png" class="card-img-top" alt="Llenado automático de botellas y líquidos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Llenado automático de botellas y líquidos</h5>
                    <a class="button button-circle-orange" href="llenado-automatico-de-botellas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/rodamiento.png" class="card-img-top" alt="Medición de carga en rodamientos"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de carga en rodamientos</h5>
                    <a class="button button-circle-orange" href="medicion-de-carga-en-rodamientos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/motores.png" class="card-img-top" alt="Banco de pruebas de Torque de Motor"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Banco de pruebas de Torque de Motor</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-de-torque-motor">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/atornillador.png" class="card-img-top" alt="Fuerza de Apriete de Tuercas"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Fuerza de apriete de tuercas</h5>
                    <a class="button button-circle-orange" href="fuerza-de-apriete-de-tuercas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/ensamble.png" class="card-img-top" alt="Medición de herramientas de ensamble"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de herramientas de ensamble</h5>
                    <a class="button button-circle-orange" href="medicion-de-herramientas-de-ensamble">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/servomotor.png" class="card-img-top" alt="Control del torque en un servomotor"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Control del torque en un servomotor</h5>
                    <a class="button button-circle-orange" href="control-del-torque-en-un-servomotor">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/banco.jpg" class="card-img-top" alt="Pruebas de fuerza en tornillo de banco"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza en tornillo de banco</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-en-tornillo-de-banco">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/valvula.png" class="card-img-top"
                    alt="Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas
                    </h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-valvulas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/motor-oem.png" class="card-img-top"
                    alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</h5>
                    <a class="button button-circle-orange"
                        href="soporte-de-torque-de-reaccion-para-motores-electricos-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bisagras.png" class="card-img-top"
                    alt="Medición de Torque en Bisagras de Torsión, Fricción Posición"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Medición de Torque en Bisagras de Torsión, Fricción Posición</h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-bisagras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/destornillador.png" class="card-img-top" alt="Torque de un desarmador en miniatura"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Torque de un desarmador en miniatura</h5>
                    <a class="button button-circle-orange" href="torque-de-un-desarmador-en-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/desalinizacion.png" class="card-img-top" alt="Monitoreo de sistema de desalinización"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Monitoreo de sistema de desalinización</h5>
                    <a class="button button-circle-orange" href="monitoreo-de-sistema-de-desalinizacion">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Monitoreo-Control-Maquinas-CNC.png" class="card-img-top"
                    alt="Monitoreo y Control de Máquinas CNC" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Monitoreo y Control de Máquinas CNC </h5>
                    <a class="button button-circle-orange" href="monitoreo-control-maquinas-cnc">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/Mantenimiento-Predictivo-en-Motores-y-Equipos-Industriales.png" class="card-img-top"
                    alt="Mantenimiento Predictivo en Motores y Equipos Industriales"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column justify-content-between text-center">
                    <h5 class="card-title mb-5">Mantenimiento Predictivo en Motores y Equipos Industriales </h5>
                    <a class="button button-circle-orange"
                        href="mantenimiento-predictivo-motores-equipos-industriales">Ver</a>
                </div>
            </div>
        </div>
    </section>

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