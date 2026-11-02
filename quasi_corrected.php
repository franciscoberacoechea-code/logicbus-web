<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Quasi Robotics | Robots Móviles AMR para Transporte Interno de Materiales</title>
    <meta name="description"
        content="Quasi Robotics desarrolla robots de automatización impulsados por el exclusivo paquete de inteligencia Q.AI: AMRs completamente integrados para cualquier instalación.">

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
    <style>
        .buttonTT {
            width: 20px;
            height: 20px;
            background-image: url('https://www.logicbus.com.mx/imagenes/iconos/circulito-pro2.gif');
            /* Ruta de la imagen del icono */
            background-size: cover;
            /* Ajustar el tamaño del icono */
            background-repeat: no-repeat;
            /* Evitar la repetición del icono */
            background-position: center;
            /* Posición central del icono */
            border: 2px solid #fff;
            border-radius: 50%;
            position: absolute;
            cursor: pointer;
            animation: pulse 1s ease infinite alternate;
            /* Animación de pulso */
        }

        .tooltipCn {
            position: absolute;
            background-color: var(--white);
            /* Fondo blanco */
            color: var(--light-black);
            /* Texto negro */
            border: 1px solid #ccc;
            /* Borde delgado gris */
            border-radius: 5px;
            /* Bordes redondeados */
            padding: 3px;
            /* Espaciado interno */
            display: none;
            /* Oculto inicialmente */
            z-index: 1;
            /* Asegura que esté encima de otros elementos */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
            width: 180px;
            /* Ancho del tooltip */
            text-align: center;
            /* Alineación del texto */
        }

        @media (max-width: 768px) {
            .tooltipCn {
                top: 250px;
                left: 20px;
            }
        }

        .list-unstyled li::before {
            font-family: 'FontAwesome';
            font-weight: 400;
            font-size: .8rem;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            left: -10px;
            content: "\f00c";
            color: var(--white);
            background-color: var(--light-orange);
            width: 18px;
            height: 18px;
            padding: 0px;
            border-radius: 100%;
            text-align: center;
            line-height: 20px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <h1 class="sr-only">Quasi</h1>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos"
                        class="blue link-orange">Automatización y Control de Procesos</a></li>
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv"
                        class="blue link-orange">Robots Móviles Autónomos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Quasi</li>
            </ol>
        </nav>
    </div>
    <div class="mb-5">
        <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/quasi.webp">
            <source src="https://www.logicbus.com.mx/assets/videos/quasi.webm" type="video/webm">
        </video>
    </div>
    <section class="container text-justify">
        <p class="title text-center blue">Robots Inteligentes para Mejorar el Mundo</p>
        <p class="paragraph">Quasi es una destacada empresa de robótica que crea robots móviles autónomos (AMR)
            inteligentes, diseñados para mejorar la eficiencia y la seguridad en diversas industrias. Con una innovadora
            combinación de tecnologías avanzadas, Quasi ofrece soluciones de automatización que se integran
            perfectamente con los sistemas existentes para optimizar los flujos de trabajo.</p>
    </section>
    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/quasi" target="_blank"><button
                class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
        <a class="button-text" href="#caracteristicas"><button class="button button-white">Características</button></a>
        <a class="button-text" href="#industrias"><button class="button button-white">Industrias</button></a>
        <a class="button-text" href="#doc"><button class="button button-white">Catálogos</button></a>
    </div>

    <!-- PRODUCTOS -->
    <div class="container my-5" id="productos">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">PRODUCTOS</h2>
    </div>
    <div class="container-fluid">
        <p class="text-center title blue">Optimice la entrega con el Model C2 escalable y fácil de usar</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <div class="p-4 text-center paragraph">
                    <h3 class="subtitle light-black mb-3">Model C2 AMR</h3>
                    <p class="text-justify">Elimine de sus flujos de trabajo los suministros que consumen mucho tiempo y
                        reponga los niveles de existencias antes de que se produzca una escasez.</p>
                    <p class="text-justify">El carro autónomo Model C2 navega por sus instalaciones y entrega materiales
                        de forma autónoma, lo que permite a su personal asumir tareas más críticas y satisfactorias.</p>
                    <a href="https://tienda.logicbus.com.mx/C2_p_37124.html"
                        class="button button-circle-orange btn-orange">Más información</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img loading="lazy" src="./images/amr/quasi/Model-C2.webp" alt="Model-C2.webp" class="img-fluid p-1" width="100%">
                <div class="buttonTT" id="buttonTT1" style="top: 100px; left: 81px;"></div>
                <div class="buttonTT" id="buttonTT2" style="top: 15px; left: 320px;"></div>
                <div class="buttonTT" id="buttonTT3" style="top: 225px; left: 465px;"></div>
                <div class="tooltipCn d-none" id="tooltipCn1" style="top: 140px; left: 110px;">
                    <h4 class="paragraph">Pantalla</h4>
                    <p>7 pulgadas, pantalla táctil</p>
                </div>
                <div class="tooltipCn d-none" id="tooltipCn2" style="top: 70px; left: 380px;">
                    <h4 class="paragraph">Sensores</h4>
                    <p>Los sensores avanzados de tiempo de vuelo (ToF)</p>
                </div>
                <div class="tooltipCn d-none" id="tooltipCn3" style="top: 290px; left: 530px;">
                    <h4 class="paragraph">Llantas</h4>
                    <p>Integrado con ruedas/motor</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CARACTERISTICAS -->
    <div class="container my-5" id="caracteristicas">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">CARACTERÍSTICAS</h2>
    </div>
    <div class="container">
        <p class="paragraph text-center">Robots de automatización AMR inteligentes y adaptables diseñados para navegar
            por sus instalaciones y optimizar los flujos de trabajo de entrega mientras recopilan información basada en
            datos. Desarrollado por su plataforma de automatización integrada Q.AI patentada para una automatización
            integral de instalaciones, adaptable a entornos dinámicos y operaciones en evolución.</p>
    </div>
    <div class="container-fluid">
        <div class="row my-5 justify-content-center">
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-tablet mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Control intuitivo</h3>
                <ul class="list-unstyled">
                    <li>Aplicación móvil: informes de estado C2 móviles, lecturas de sensores y navegación por puntos de
                        referenci</li>
                    <li>Pantalla táctil mejorada de 8″: toque capacitivo para un control más brillante e intuitivo.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-video-camera mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Cámara visión estéreo</h3>
                <ul class="list-unstyled">
                    <li>Cámara estéreo mejorada para localización rápida y actualización de mapas.</li>
                    <li>Mapeo de áreas mejorado con visualización detallada del mapa y puntos de referencia.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-cubes mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Construcción adaptable</h3>
                <ul class="list-unstyled">
                    <li>Bandejas y compartimentos disponibles para una organización adaptada a las necesidades de las
                        instalaciones.</li>
                    <li>Selección ampliada de LiDAR con opciones para tamaños de habitaciones de 30, 60 y 100 metros de
                        ancho.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-map-marker mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Navegación autónoma</h3>
                <ul class="list-unstyled">
                    <li>La inteligencia Q.AI mantiene un mapa del entorno en tiempo real.</li>
                    <li>Sensores LiDAR y ToF para detección de obstáculos en tiempo real y planificación de rutas.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-wifi mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">WiFi opcional</h3>
                <ul class="list-unstyled">
                    <li>Totalmente funcional sin Wi-Fi para instalaciones con limitaciones / restricciones de conexión.
                    </li>
                    <li>Optional Cloud Connect available anytime for data and collaborative intelligenc</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-rocket mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Implementación instantánea</h3>
                <ul class="list-unstyled">
                    <li>Despliegue en 45 minutos y modificación instantánea de puntos de referencia para adaptabilidad
                        inmediata.</li>
                    <li>Actualizaciones de software automáticas y remotas para el rendimiento en constante evolución de
                        carritos robóticos.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-battery-full mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Durabilidad y Recarga Rápida</h3>
                <ul class="list-unstyled">
                    <li>Batería recargable de iones de litio con 16 horas de duración por carga.</li>
                    <li>Capacidad de recarga rápida para hasta un 50% de recarga en 60 minutos.</li>
                </ul>
            </div>
            <div class="col-md-3 col-10 d-flex flex-column align-items-center m-3">
                <i class="fa fa-th-large mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold text-center">Conectividad y Escalabilidad</h3>
                <ul class="list-unstyled">
                    <li>Integración sencilla con la automatización y sistemas existentes de la instalación.</li>
                    <li>Inteligencia colectiva de la flota para compartir conocimientos, mejorar el rendimiento y
                        facilitar la incorporación.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- INDUSTRIAS -->
    <div class="container">
        <p class="title blue text-center">La inteligencia Q.AI impulsa la automatización AMR adaptable del Model C2
        </p>
        <div class="row my-5 align-items-center">
            <div class="col-md-6 col-12 my-3 order-1 order-md-1">
                <h2 class="subtitle light-black">Implemente y modifique carros robóticos personalizados en minutos</h2>
                <p class="text-justify">La configuración del Model C2 es rápida y sencilla: simplemente guíe el carro de
                    entrega autónomo a través de un recorrido por sus instalaciones y marque los destinos de entrega en
                    su mapa generado automáticamente. La interfaz sin código con controles de pantalla táctil y
                    elementos gráficos no requiere capacitación para su uso.</p>
                <ul class="text-justify">
                    <li>Configurado en menos de una hora</li>
                    <li>Interfaz de usuario intuitiva con pantalla táctil y control de aplicaciones móviles</li>
                    <li>Actualización de software remota e indolora</li>
                    <li>Lista creciente de capacidades y características en expansión</li>
                </ul>
            </div>
            <div class="col-md-6 my-3 order-2 order-md-2">
                <img loading="lazy"src="./images/amr/quasi/All-C2-Models.webp" alt="All-C2-Models.webp" width="100%">
            </div>

            <div class="col-md-6 my-3 order-md-3 order-4">
                <img loading="lazy"src="./images/amr/quasi/Model-C2-UI.webp" alt="C2-Cart-14-Small.webp" width="100%">
            </div>
            <div class="col-md-6 my-3 order-md-4 order-3">
                <h2 class="subtitle light-black">Integre y conecte un carrito robótico sin problemas</h2>
                <p class="text-justify">Q.AI permite que el Model C2 se conecte con el software existente (ERP, LIS,
                    LIMS, etc.) para la automatización del flujo de trabajo de un extremo a otro. Con WiFi y Quasi Cloud
                    Connect habilitados, la inteligencia adquirida se comparte entre todos los carros robóticos Quasi.
                    Con mapas, rutas e inteligencia compartidos entre los robots de la flota, la configuración y el
                    escalado son muy sencillos.</p>
                <ul class="text-justify">
                    <li>Conectividad flexible (funciona con o sin Wi-Fi)</li>
                    <li>Intercambio instantáneo de conocimientos para una colaboración eficiente de robots y
                        conocimiento colectivo</li>
                    <li>Integrable con todos los sistemas y automatización de instalaciones y otros robots cuasi móviles
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-12 my-3 order-5 order-md-5">
                <h2 class="subtitle light-black">Únase a la automatización existente</h2>
                <p class="text-justify">Habilite el control centralizado y el intercambio de datos para optimizar los
                    flujos de trabajo y desbloquear todo el potencial de su inversión en automatización.</p>
                <ul class="text-justify">
                    <li>Control centralizado : administre toda su flota de automatización y obtenga información basada
                        en datos desde nuestra plataforma central Cloud Connect .</li>
                    <li>Inteligencia colaborativa : comparta el conocimiento adquirido en todos los carros C2 de forma
                        instantánea para optimizar el rendimiento de toda la flota.</li>
                    <li>Arquitectura abierta : conecte el Model C2 con sistemas existentes sin esfuerzo a través de
                        interfaces abiertas y API estandarizadas.</li>
                </ul>
            </div>
            <div class="col-md-6 col-12 my-3 order-6 order-md-6">
                <img loading="lazy"src="./images/amr/quasi/Customize-Loading…-2024-03-05-22-22-28.webp" width="100%"
                    alt="pestañas-de-interfaz.webp">
            </div>
        </div>
    </div>


    <div class="container my-5">
        <p class="title blue text-center">Carro Autónomo Modelo C2</p>
        <p class="subtitle light-black text-center">
            Especificaciones técnicas y rendimiento avanzado.
        </p>

        <!-- TABLA DE ESPECIFICACIONES -->
        <div class="wpb_wrapper">
            <table style="width:100%; border-collapse: collapse; border: 1px solid #ddd;">
                <thead>
                    <tr>
                        <th style="text-align: center; border: 1px solid #ddd; padding: 8px 12px;">
                            <img loading="lazy"src="images/quasi/quasi-Modelo-C2-Mini.webp" alt="Modelo C2 Mini"
                                style="max-width:150px; height:auto; display:block; margin:0 auto 8px;">
                            <h3 class="blue paragraph font-weight-bold my-3">
                                <a href="https://tienda.logicbus.com.mx/QC2M-00001_p_38213.html" target="_blank"
                                    style="color: inherit; text-decoration: none;">Modelo C2 Mini</a>
                            </h3>
                        </th>
                        <th style="text-align: center; border: 1px solid #ddd; padding: 8px 12px;">
                            <img loading="lazy"src="images/quasi/quasi-Modelo-C2-Standard.webp" alt="Modelo C2 Standard"
                                style="max-width:150px; height:auto; display:block; margin:0 auto 8px;">
                            <h3 class="blue paragraph font-weight-bold my-3">
                                <a href="https://tienda.logicbus.com.mx/QC2-00001_p_37124.html" target="_blank"
                                    style="color: inherit; text-decoration: none;">Modelo C2 Standard</a>
                            </h3>
                        </th>
                        <th style="text-align: center; border: 1px solid #ddd; padding: 8px 12px;">
                            <img loading="lazy"src="images/quasi/quasi-Modelo-C2-Large.webp" alt="Modelo C2 Large"
                                style="max-width:150px; height:auto; display:block; margin:0 auto 8px;">
                            <h3 class="blue paragraph font-weight-bold my-3">
                                <a href="https://tienda.logicbus.com.mx/QC2L-00001_p_37904.html" target="_blank"
                                    style="color: inherit; text-decoration: none;">Modelo C2 Large</a>
                            </h3>
                        </th>
                        <th style="text-align: center; border: 1px solid #ddd; padding: 8px 12px;">
                            <img loading="lazy"src="images/quasi/QC2P-00001.webp" alt="Modelo C2 PartPorter"
                                style="max-width:150px; height:auto; display:block; margin:0 auto 8px;">
                            <h3 class="blue paragraph font-weight-bold my-3">
                                <a href="https://tienda.logicbus.com.mx/QC2P-00001_p_38212.html" target="_blank"
                                    style="color: inherit; text-decoration: none;">Modelo C2 PartPorter</a>
                            </h3>
                        </th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Largo: 18,50 in (470 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Largo: 33,00 in (840 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Largo: 40,50 in (1030 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Largo: 40,50 in (1030 mm)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho: 18,50 in (470 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho: 18,50 in (470 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho: 24,42 in (620 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho: 24,42 in (620 mm)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Altura: 41,50 in (1055 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Altura: 41,50 in (1055 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Altura: 41,50 in (1055 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Altura: 41,50 in (1055 mm)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (sin batería): 32,1 lb (15 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (sin batería): 39,6 lb (18 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (sin batería): 50,7 lb (23 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (sin batería): 48,5 lb (22 kg)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (con batería): 44,1 lb (20 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (con batería): 50,7 lb (23 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (con batería): 61,7 lb (28 kg)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Peso (con batería): 59,5 lb (27 kg)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Dimensiones del estante: 14,6 in x 14,6
                            in (370 mm x 370 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Dimensiones del estante: 24,4 in x 14,6
                            in (620 mm x 370 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Dimensiones del estante: 32,25 in x 20,5
                            in (820 mm x 520 mm)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Dimensiones del estante: 32,25 in x 20,5
                            in (820 mm x 520 mm)</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho mínimo de pasillo: 2,5 pies (0,76
                            m)</td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho mínimo de pasillo: 3 pies (0,9 m)
                        </td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho mínimo de pasillo: 4 pies (1,2 m)
                        </td>
                        <td style="border: 1px solid #ddd; padding: 6px 12px;">Ancho mínimo de pasillo: 5 pies (1,5 m)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>






    <div class="container my-5" id="industrias">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">INDUSTRIAS</h2>
    </div>
    <div class="container my-5">
        <p class="paragraph text-center">Descubra cómo las soluciones inteligentes de transporte de materiales de Quasi
            Robotics, que incluyen el Model C2 y un paquete patentado de algoritmos Q.AI, pueden revolucionar su
            industria al mejorar la eficiencia, la seguridad y el rendimiento general.</p>
        <div class="row my-5 justify-content-center">

            <div class="col-md-4 text-center my-3">
                <i class="fa fa-flask mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold my-3">Ciencias de la vida</h3>
                <p class="text-justify">Potencie los procesos de investigación, clínicos y farmacéuticos con carros
                    autónomos para optimizar la preparación de experimentos, la gestión de suministros y los protocolos
                    de saneamiento.</p>
            </div>

            <div class="col-md-4 text-center my-3">
                <i class="fa fa-heartbeat mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold my-3">Cuidado de la salud</h3>
                <p class="text-justify">Garantice la preparación y el cumplimiento normativo con carros robóticos para
                    abordar los desafíos de dotación de personal en hospitales, centros de atención médica y hogares de
                    ancianos.</p>
            </div>

            <div class="col-md-4 text-center my-3">
                <i class="fa fa-shopping-basket mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold my-3">Comercio minorista y hostelería</h3>
                <p class="text-justify">Mejore la experiencia del cliente mientras agiliza las operaciones con entrega
                    robótica para reabastecimiento, gestión de inventario y reducción de la tensión en su fuerza
                    laboral.</p>
            </div>

            <div class="col-md-4 text-center my-3">
                <i class="fa fa-industry mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold my-3">Fabricación</h3>
                <p class="text-justify">Facilite el movimiento fluido de materiales entre estaciones de trabajo mediante
                    robótica en logística para clasificación y manipulación para minimizar el trabajo manual.</p>
            </div>

            <div class="col-md-4 text-center my-3">
                <i class="fa fa-angle-double-right mb-3 light-orange" aria-hidden="true" style="font-size: 4rem;"></i>
                <h3 class="blue paragraph font-weight-bold my-3">Otras industrias</h3>
                <p class="text-justify">Explore aplicaciones versátiles de nuestra robótica logística en sectores
                    adicionales, desde seguridad nacional hasta educación y aplicación de la ley.</p>
            </div>

        </div>
    </div>
    <!-- Blogs -->
    <section class="my-5">
        <div class="container mb-5">
            <h2 id="blogs" class="subtitle text-center orange-text py-1">BLOGS</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 text-center mb-3">
                    <a class="blue link-orange font-weight-bold"
                        href="https://www.logicbus.com.mx/blog/quasi-robotics-expande-su-alcance-en-mexico-y-la-costa-oeste-con-la-asociacion-de-logicbus-para-la-distribucion-del-modelo-c2-amr/"
                        target="_blank" rel="noopener noreferrer">
                        <img loading="lazy" src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/08/Quasi-x-Logicbus--2048x1024.webp"
                            alt="Optimización de la Limpieza Industrial con el K900 de KEMARO: Una Solución Innovadora para el Mantenimiento de Fábricas"
                            width="100%">
                        QUASI ROBOTICS EXPANDE SU ALCANCE EN MÉXICO Y LA COSTA OESTE CON LA ASOCIACIÓN DE LOGICBUS PARA
                        LA DISTRIBUCIÓN DEL MODELO C2 AMR
                    </a>
                </div>
            </div>
        </div>
    </section>


<!-- Videos -->
<div class="container my-5" id="videos">
    <h2 class="subtitle text-center orange-text py-1 rounded-pill">VIDEOS</h2>
</div>

<div class="container-fluid"
     style="display:flex; justify-content:center; align-items:center; gap:30px; flex-wrap:wrap;">

    <!-- Video 1 -->
    <div class="griditemContB" style="max-width:300px; text-align:center;">
        <div class="video-container-youtube" data-video-id="SyFwCW6Qn3M" style="cursor:pointer;">
            <img loading="lazy"
                src="https://img.youtube.com/vi/SyFwCW6Qn3M/hqdefault.jpg"
                alt="Adquisición de datos con precisión por USB"
                style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>

    <!-- Video 2 -->
    <div class="griditemContB" style="max-width:300px; text-align:center;">
        <div class="video-container-youtube" data-video-id="KzlKfFZeDBc" style="cursor:pointer;">
            <img loading="lazy"
                src="https://img.youtube.com/vi/KzlKfFZeDBc/hqdefault.jpg"
                alt="Adquisición de datos con precisión por USB"
                style="width:100%; border-radius:8px;">
            <div class="play-button"></div>
        </div>
    </div>

</div>

    <!-- Catalogos -->
    <div class="container-fluid mb-5" id="doc">
        <div class="row justify-content-around">
            <div class="col-12 col-md-6">
                <div class="container my-5">
                    <h2 class="subtitle text-center orange-text py-1 rounded-pill">Catálogos</h2>
                </div>
                <div class="d-flex flex-wrap justify-content-center text-center">
                    <div class="m-3">
                        <a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.pdf"
                            target="_blank">
                            <img loading="lazy" src="https://www.logicbus.com.mx/pdf/catalogos/quasi-brochure.webp"
                                alt="Ver archivo pdf" class="imgBorde" width="250px"><br>
                            Quasi Brochure
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="container my-5">
                    <h2 class="subtitle text-center orange-text py-1 rounded-pill">Guías y Manuales</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="https://www.logicbus.com.mx/documentos?clave=&amp;tagArray%5B%5D=quasi">
                        <div class="hoverchange">
                            <img loading="lazy" src="images/documentacion.svg" width="200px" class="mx-auto d-block" alt="img docs">
                            <button class="button button-circle-white d-flex"><b>Documentación</b></button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">CONOCE MÁS SOBRE QUASI</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para su
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


    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <script>
        var buttons = document.querySelectorAll('.buttonTT');
        var tooltipCns = document.querySelectorAll('.tooltipCn');

        buttons.forEach(function (button, index) {
            button.addEventListener('mouseenter', function () {
                tooltipCns[index].className = 'd-block tooltipCn';
            });
            button.addEventListener('mouseleave', function () {
                tooltipCns[index].className = 'd-none tooltipCn';
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var videoContainers = document.querySelectorAll('.video-container-youtube');

        videoContainers.forEach(function (container) {
        container.addEventListener('click', function () {
        var videoId = this.dataset.videoId;

        var iframe = document.createElement('iframe');
        iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId +
        '?autoplay=1&rel=0');
        iframe.setAttribute('title', 'YouTube video player');
        iframe.setAttribute('allow',
        'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        );
        iframe.setAttribute('allowfullscreen', '');

        this.innerHTML = '';
        this.appendChild(iframe);
        });
        });
        });
    </script>
</body>
<?php echo $var_footer; ?>

</html>
