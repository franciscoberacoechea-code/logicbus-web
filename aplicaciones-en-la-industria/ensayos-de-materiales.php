<?php
require("../admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Aplicaciones en Ensayos de Materiales | Logicbus</title>
    <meta name="description" content="La automatización en los ensayos/pruebas de materiales está revolucionando la forma en que evaluamos la calidad, resistencia y durabilidad de materiales en diversas industrias.">
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
                <li class="breadcrumb-item active" aria-current="page">Aplicaciones de Ensayos y Materiales</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Aplicaciones en Ensayos de Materiales" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Aplicaciones en Ensayos de Materiales" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Aplicaciones en Ensayos de Materiales</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section>
        <div class="container my-5">
            <p class="paragraph light-black text-justify">La automatización en los ensayos/pruebas de materiales está revolucionando la forma en que evaluamos la calidad, resistencia y durabilidad de materiales en diversas industrias. Con equipos automatizados y sistemas de control avanzados, es posible realizar pruebas precisas y repetitivas en menor tiempo y con una precisión inigualable, permitiendo obtener resultados consistentes y confiables en cada prueba. Desde laboratorios que emplean robots para manipulación de muestras hasta sistemas de software que procesan y analizan datos automáticamente, la automatización está elevando los estándares de calidad y seguridad.</p>
            <p class="paragraph light-black text-justify">Esta tecnología permite también la detección temprana de defectos y la optimización del desarrollo de nuevos materiales, mejorando la eficiencia y reduciendo el tiempo de salida al mercado.</p>
            <p class="paragraph light-black text-justify">Descubre cómo la automatización está impulsando el futuro de los ensayos y pruebas de materiales, garantizando la confiabilidad y precisión en cada etapa del proceso de control de calidad.</p>
        </div>
    </section>

    <!--APPS-->
    <section class="container-fluid my-5">
        <h2 class="subtitle text-center blue">Aplicaciones</h2>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="img/impacto.jpg" class="card-img-top" alt="Medición de la Fuerza de Impacto" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la fuerza de impacto</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-impacto">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bola.jpg" class="card-img-top" alt="Prueba de caída de pelota" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de caída de pelota</h5>
                    <a class="button button-circle-orange" href="prueba-de-caida-de-pelota">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/mordedura.png" class="card-img-top" alt="Medición de la Fuerza de Mordida en Pacientes con Demencia" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la Fuerza de Mordida en Pacientes con Demencia</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-de-mordedura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pruebas-oem.png" class="card-img-top" alt="Banco de pruebas OEM" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Banco de pruebas OEM</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-oem">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/jeringa.png" class="card-img-top" alt="Pruebas de jeringas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de jeringas</h5>
                    <a class="button button-circle-orange" href="pruebas-de-jeringas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tuberias.png" class="card-img-top" alt="Medición de expansión de tubos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de expansión de tubos</h5>
                    <a class="button button-circle-orange" href="medicion-de-expansion-de-tubos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cateter.jpg" class="card-img-top" alt="Medición de fuerza en catéter" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de fuerza en catéter</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-en-cateter">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/presa.png" class="card-img-top" alt="Medición de Fuerza en Prensas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Fuerza en Prensas</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-en-prensa">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/laparoscopia.jpg" class="card-img-top" alt="Calibración de herramientas laparoscópicas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Calibración de herramientas laparoscópicas</h5>
                    <a class="button button-circle-orange" href="calibracion-de-herramientas-laparoscopicas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/adn.png" class="card-img-top" alt="Síntesis de ADN" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Síntesis de ADN</h5>
                    <a class="button button-circle-orange" href="sintesis-de-adn">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/pesaje-grua.png" class="card-img-top" alt="Pesaje en grúa portátil" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pesaje en grúa portátil</h5>
                    <a class="button button-circle-orange" href="pesaje-en-grua-portatil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/elevador.png" class="card-img-top" alt="Monitorización de peso en equipos de elevación para pacientes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitorización de peso en equipos de elevación para pacientes</h5>
                    <a class="button button-circle-orange" href="monitorizacion-de-peso-en-equipos-de-elevacion-para-pacientes">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/union-cables.jpg" class="card-img-top" alt="Prueba de unión por cable" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de unión por cable</h5>
                    <a class="button button-circle-orange" href="prueba-de-union-por-cable">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/perno.png" class="card-img-top" alt="Cierre de perno" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Cierre de perno</h5>
                    <a class="button button-circle-orange" href="cierre-de-perno">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/helicoptero.png" class="card-img-top" alt="rueba de fuerza del pedal de helicóptero" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fuerza del pedal de helicóptero</h5>
                    <a class="button button-circle-orange" href="prueba-de-fuerza-de-pedal-de-helicoptero">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/automovil.png" class="card-img-top" alt="Prueba automática de fuerza en pedal de automóvil" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba automática de fuerza en pedal de automóvil</h5>
                    <a class="button button-circle-orange" href="prueba-automatica-de-fuerza-en-pedal-de-automovil">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/raquetas-nieve.png" class="card-img-top" alt="Pruebas Comerciales para Raquetas de Nieve" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas Comerciales para Raquetas de Nieve</h5>
                    <a class="button button-circle-orange" href="prueba-de-raquetas-de-nieve">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cables-industriales.png" class="card-img-top" alt="Medición de tensión de cables industriales" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de tensión de cables industriales</h5>
                    <a class="button button-circle-orange" href="medicion-de-tension-para-cables-industriales">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/paquete.png" class="card-img-top" alt="Prueba de caída de paquetes" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de caída de paquetes</h5>
                    <a class="button button-circle-orange" href="prueba-de-caida-de-paquetes">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/cadera.png" class="card-img-top" alt="Prueba de fatiga en prótesis de cadera" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de fatiga en prótesis de cadera</h5>
                    <a class="button button-circle-orange" href="prueba-de-fatiga-en-protesis-de-cadera">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/alambre.png" class="card-img-top" alt="Control de Tensión de Hilo" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control de Tensión de Hilo</h5>
                    <a class="button button-circle-orange" href="tensor-de-alambre-de-precision">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/mordaza.jpg" class="card-img-top" alt="Soldadura Ultrasónica" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Soldadura Ultrasónica</h5>
                    <a class="button button-circle-orange" href="fuerza-de-mordaza-en-soldadura-ultrasonica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/rodamiento.png" class="card-img-top" alt="Medición de carga en rodamientos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de carga en rodamientos</h5>
                    <a class="button button-circle-orange" href="medicion-de-carga-en-rodamientos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/silos.png" class="card-img-top" alt="Medición de silos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de silos</h5>
                    <a class="button button-circle-orange" href="medicion-de-silos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/torque.png" class="card-img-top" alt="Medición de Torque" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Torque</h5>
                    <a class="button button-circle-orange" href="medicion-de-torque-con-celdas-de-carga">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/residuos.png" class="card-img-top" alt="Monitoreo de la Capacidad en Contenedores de Residuos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de la capacidad en contenedores de residuos</h5>
                    <a class="button button-circle-orange" href="monitoreo-de-la-capacidad-en-contenedores-de-residuos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/paracaidas.png" class="card-img-top" alt="Prueba de Paracaídas de Aeronaves Militares" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prueba de Paracaídas de Aeronaves Militares</h5>
                    <a class="button button-circle-orange" href="despliegue-de-paracaidas-para-jet">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/soldadura.jpg" class="card-img-top" alt="Soldadura por resistencia" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Soldadura por resistencia</h5>
                    <a class="button button-circle-orange" href="soldadura-por-resistencia">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tunel.png" class="card-img-top" alt="Pruebas en túnel de viento" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas en túnel de viento</h5>
                    <a class="button button-circle-orange" href="pruebas-en-tunel-de-viento">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/dron.png" class="card-img-top" alt="Medición de Empuje y Torque en Drones" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de empuje y torque en drones</h5>
                    <a class="button button-circle-orange" href="prueba-de-helice-en-dron">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tribometro.png" class="card-img-top" alt="Pruebas de Fricción y Durabilidad de Materiales" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de Fricción y Durabilidad de Materiales</h5>
                    <a class="button button-circle-orange" href="tribometro-de-disco">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/guia-medica.png" class="card-img-top" alt="Cable guía para procesos quirúrgicos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Cable guía para procesos quirúrgicos</h5>
                    <a class="button button-circle-orange" href="prueba-de-cable-guia-para-procesos-quirurgicos">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tavar.png" class="card-img-top" alt="Durabilidad de válvula para catéter" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Durabilidad de válvula para catéter</h5>
                    <a class="button button-circle-orange" href="durabilidad-de-valvula-para-cateter">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/prueba-motores.png" class="card-img-top" alt="Sensores de Torque de Reacción en Auditoría de Motores" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción en Auditoría de Motores</h5>
                    <a class="button button-circle-orange" href="banco-de-pruebas-de-motores">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/servomotor.png" class="card-img-top" alt="Control del torque en un servomotor" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Control del torque en un servomotor</h5>
                    <a class="button button-circle-orange" href="control-del-torque-en-un-servomotor">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/banco.jpg" class="card-img-top" alt="Pruebas de fuerza en tornillo de banco" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de fuerza en tornillo de banco</h5>
                    <a class="button button-circle-orange" href="pruebas-de-fuerza-en-tornillo-de-banco">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/robotica.png" class="card-img-top" alt="Pruebas de Equipo Deportivo" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas de Equipo Deportivo</h5>
                    <a class="button button-circle-orange" href="automatizacion-industrial-robotica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/reometro.png" class="card-img-top" alt="Medición de Viscosidad y Propiedades Reológicas de Fluidos" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Viscosidad y Propiedades Reológicas de Fluidos</h5>
                    <a class="button button-circle-orange" href="medicion-de-torque-a-reometro">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tapas.png" class="card-img-top" alt="Prensa de tapas automática" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Prensa de tapas automática</h5>
                    <a class="button button-circle-orange" href="prensa-de-tapas-automatica">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/fuerza-taladro.jpg" class="card-img-top" alt="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">¿Qué es la fuerza de empuje y torque en el proceso de taladrado?</h5>
                    <a class="button button-circle-orange" href="que-es-la-fuerza-de-empuje-y-torque-en-el-proceso-de-taladrado">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/solar.png" class="card-img-top" alt="Pruebas con Sensores de Torque Rotacional " style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Pruebas con Sensores de Torque Rotacional </h5>
                    <a class="button button-circle-orange" href="pruebas-con-sensores-de-torque-rotacional">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/motor-oem.png" class="card-img-top" alt="Sensores de Torque de Reacción para Motores Eléctricos Miniatura" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Motores Eléctricos Miniatura</h5>
                    <a class="button button-circle-orange" href="soporte-de-torque-de-reaccion-para-motores-electricos-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/valvula.png" class="card-img-top" alt="Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Sensores de Torque de Reacción para Actuadores de Válvulas Eléctricas</h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-valvulas">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/bisagras.png" class="card-img-top" alt="Medición de Torque en Bisagras de Torsión, Fricción Posición" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de Torque en Bisagras de Torsión, Fricción Posición</h5>
                    <a class="button button-circle-orange" href="pruebas-de-torque-en-bisagras">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/destornillador.png" class="card-img-top" alt="Torque de un desarmador en miniatura" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Torque de un desarmador en miniatura</h5>
                    <a class="button button-circle-orange" href="torque-de-un-desarmador-en-miniatura">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/tiburon.jpg" class="card-img-top" alt="Medición de la Fuerza de Mordida de un Tiburón" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Medición de la Fuerza de Mordida de un Tiburón</h5>
                    <a class="button button-circle-orange" href="medicion-de-fuerza-para-mordida-de-tiburon">Ver</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img/prensa.png" class="card-img-top" alt="Monitoreo de Fuerza en Prensas Arbor para Ensambles de Ajuste a Presión y Remachado" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-5">Monitoreo de Fuerza en Prensas Arbor para Ensambles de Ajuste a Presión y Remachado</h5>
                    <a class="button button-circle-orange" href="verificacion-de-prensa-arbor">Ver</a>
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