<?php
require("admin/config.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Infografías Industriales | Logicbus</title>
    <meta name="description"
        content="Explora nuestra galería de infografías para comprender de forma visual y rápida el funcionamiento y aplicaciones de nuestros equipos industriales.">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

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
        /* Ajustes específicos para iPads, Surface y móviles */
        @media (max-width: 1024px) {
            h1.banner-title {
                font-size: 6vw !important;
            }

            span.maxi-text {
                font-size: 11vw !important;
                line-height: 1.1 !important;
                margin-top: 5px;
            }

            .card-img-overlay {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }
        }

        /* Estilos de apoyo para la navegación de filtros */
        .btn-navigation {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }
        
        /* Efecto visual para indicar qué botón está activo, en caso de que btn-circle no lo tenga nativamente */
        .btn-navigation .btn-circle.active {
            background-color: #003366 !important; /* Azul Logicbus */
            color: #ffffff !important;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div class="card text-white" style="border: none; border-radius: 0;">
        <img src="./images/infografias/infografias.png" alt="Banner Infografías Industriales" class="hide-mobile"
            style="width: 100%; height: auto; object-fit: cover;">
        <img src="./images/infografias/infografias.webp" alt="Banner Mobile Infografías Industriales"
            class="hide-desktop" style="width: 100%; height: auto; object-fit: cover;">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-around px-3 px-md-5">
            <div>
                <h1 class="banner-title white font-weight-bold mb-0">
                    INFOGRAFÍAS
                    <span class="maxi-text white font-weight-bold mb-0 d-block">INDUSTRIALES</span>
                </h1>
            </div>
        </div>
    </div>

    <section class="section-blue white">
        <div class="container text-center py-5">
            <p class="paragraph text-center">Explora nuestra galería visual de diagramas e infografías diseñadas para
                simplificar conceptos y facilitar la integración de nuestros equipos. Encuentra información valiosa de
                manera rápida y clara.</p>
        </div>
    </section>

    <section class="my-5" id="galeria">
        <div class="container">
            <h2 class="subtitle blue text-center pb-5">Galería de Infografías</h2>
        </div>

        <!-- Buscador y Botones de Filtro -->
        <div class="container d-flex flex-column align-items-center mb-5">
            <form class="form-inline mb-4" onsubmit="return false;" style="width: 100%; max-width: 500px;">
                <input id="inputApp" class="form-control w-100" type="search" placeholder="Buscar infografía..."
                    aria-label="Buscar" onkeyup="aplicarFiltros();">
            </form>

            <nav class="btn-navigation">
                <a class="btn-circle active button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('todos', this)">Todas</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('adquisicion-datos', this)">Adquisición y registro de datos - DAQ</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('automatizacion-control', this)">Automatización y control de procesos</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('consumo-energia', this)">Consumo y análisis de energía eléctrica</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('pcs-comunicaciones', this)">PC's y comunicaciones industriales</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('prueba-medicion', this)">Prueba y medición</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('sensores-transductores', this)">Sensores y transductores</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('software-desarrollo', this)">Software y herramientas de desarrollo</a>
                <a class="btn-circle button button-circle-orange" href="javascript:void(0);" onclick="filtrarCategoria('vision-artificial', this)">Visión Artificial</a>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center px-2 px-md-4">

                <!-- 3onedata MES6400PHR -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/3onedata-mes6400phr.webp" target="_blank">
                            <img src="./images/infografias/3onedata-mes6400phr.webp" alt="3onedata MES6400PHR" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                3onedata MES6400PHR
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/3onedata-mes6400phr.webp" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Acero inoxidable 304 vs 316 -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="sensores-transductores prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/acero-inoxidable-304-vs-316.png" target="_blank">
                            <img src="./images/infografias/acero-inoxidable-304-vs-316.png" loading="lazy"
                                alt="Acero inoxidable 304 vs 316"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Acero inoxidable 304 vs 316
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/acero-inoxidable-304-vs-316.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aislamiento en redes industriales -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/aislamiento-en-redes-industriales.png" target="_blank">
                            <img src="./images/infografias/aislamiento-en-redes-industriales.png" loading="lazy"
                                alt="Aislamiento en redes industriales"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Aislamiento en redes industriales
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/aislamiento-en-redes-industriales.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Analizador de redes Seneca -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="consumo-energia prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/analizador-de-redes-seneca.webp" target="_blank">
                            <img src="./images/infografias/analizador-de-redes-seneca.webp" loading="lazy"
                                alt="Analizador de redes Seneca"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Analizador de redes Seneca
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/analizador-de-redes-seneca.webp" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Anatomía del OEE -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control consumo-energia">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/anatomia-del-oee.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/anatomia-del-oee.png" loading="lazy"
                                alt="Anatomía del OEE"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Anatomía del OEE
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/anatomia-del-oee.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aplicaciones HiTemp140 -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/aplicaciones-hitemp140.png" target="_blank">
                            <img src="./images/infografias/aplicaciones-hitemp140.png" alt="Aplicaciones HiTemp140" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Aplicaciones HiTemp140
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/aplicaciones-hitemp140.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arquitectura MQTT para protección antiheladas -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="pcs-comunicaciones automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/arquitectura-mqtt-para-proteccion-antiheladas.webp"
                            target="_blank">
                            <img src="./images/infografias/arquitectura-mqtt-para-proteccion-antiheladas.webp" loading="lazy"
                                alt="Arquitectura MQTT para protección antiheladas"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Arquitectura MQTT para protección antiheladas
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/arquitectura-mqtt-para-proteccion-antiheladas.webp"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calcular el PPR necesario -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/calcular-el-ppr-necesario.png" target="_blank">
                            <img src="./images/infografias/calcular-el-ppr-necesario.png" loading="lazy"
                                alt="Calcular el PPR necesario"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Calcular el PPR necesario
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/calcular-el-ppr-necesario.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Celdas de carga FUTEK para aplicaciones médicas -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="sensores-transductores prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/celdas-de-carga-futek-para-aplicaciones-medicas.webp"
                            target="_blank">
                            <img src="./images/infografias/celdas-de-carga-futek-para-aplicaciones-medicas.webp" loading="lazy"
                                alt="Celdas de carga FUTEK para aplicaciones médicas"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Celdas de carga FUTEK para aplicaciones médicas
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/celdas-de-carga-futek-para-aplicaciones-medicas.webp"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cómo medir torque en motores eléctricos -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="prueba-medicion sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/como-medir-torque-en-motores-electricos.png" target="_blank">
                            <img src="./images/infografias/como-medir-torque-en-motores-electricos.png" loading="lazy"
                                alt="Cómo medir torque en motores eléctricos"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Cómo medir torque en motores eléctricos
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/como-medir-torque-en-motores-electricos.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Control de gap y singulación en bandas clasificadoras -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/control-de-gap-y-singulacion.png" target="_blank">
                            <img src="./images/infografias/control-de-gap-y-singulacion.png" loading="lazy"
                                alt="Control de gap y singulación en bandas clasificadoras"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Control de gap y singulación en bandas clasificadoras
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/control-de-gap-y-singulacion.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controllino Mega -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/controllino-mega.webp" target="_blank">
                            <img src="./images/infografias/controllino-mega.webp" alt="Controllino Mega" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Controllino Mega
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/controllino-mega.webp" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data loggers para transporte refrigerado -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/data-loggers-para-transporte-refrigerado.webp" target="_blank">
                            <img src="./images/infografias/data-loggers-para-transporte-refrigerado.webp" loading="lazy"
                                alt="Data loggers para transporte refrigerado"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Data loggers para transporte refrigerado
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/data-loggers-para-transporte-refrigerado.webp"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diseña el estudio antes de instalar el primer sensor -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="sensores-transductores consumo-energia">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/diseña-el-estudio-antes-de-instalar-el-primer-sensor.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/diseña-el-estudio-antes-de-instalar-el-primer-sensor.png" loading="lazy"
                                alt="Diseña el estudio antes de instalar el primer sensor"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Diseña el estudio antes de instalar el primer sensor
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/diseña-el-estudio-antes-de-instalar-el-primer-sensor.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- El mapa de consumos que nadie mide -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="consumo-energia">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/el-mapa-de-consumos-que-nadie-mide.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/el-mapa-de-consumos-que-nadie-mide.png" loading="lazy"
                                alt="El mapa de consumos que nadie mide"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                El mapa de consumos que nadie mide
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/el-mapa-de-consumos-que-nadie-mide.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Energía por unidad producida -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="consumo-energia automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/energia-por-unidad-producida.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/energia-por-unidad-producida.png" loading="lazy"
                                alt="Energía por unidad producida"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Energía por unidad producida
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/energia-por-unidad-producida.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Funciones clave en la pantalla de un osciloscopio -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/funciones-clave-en-la-pantalla-de-un-osciloscopio.png"
                            target="_blank">
                            <img src="./images/infografias/funciones-clave-en-la-pantalla-de-un-osciloscopio.png" loading="lazy"
                                alt="Funciones clave en la pantalla de un osciloscopio"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Funciones clave en la pantalla de un osciloscopio
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/funciones-clave-en-la-pantalla-de-un-osciloscopio.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guía GL260 -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/gl260-guia.png" target="_blank">
                            <img src="./images/infografias/gl260-guia.png" alt="Guía GL260" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Guía GL260
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/gl260-guia.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guía rápida de PoE -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/guia-rapida-de-poe.png" target="_blank">
                            <img src="./images/infografias/guia-rapida-de-poe.png" alt="Guía rápida de PoE" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Guía rápida de PoE
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/guia-rapida-de-poe.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guía rápida para seleccionar controladores de revelaciones -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/Guia-rapida-para-seleccionar-controladores-de-revelaciones.png"
                            target="_blank">
                            <img src="./images/infografias/Guia-rapida-para-seleccionar-controladores-de-revelaciones.png" loading="lazy"
                                alt="Guía rápida para seleccionar controladores de revelaciones"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Guía rápida para seleccionar controladores
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/Guia-rapida-para-seleccionar-controladores-de-revelaciones.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HMI vs SCADA: Qué nivel necesita tu planta -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control software-desarrollo">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/HMI-vs-scada-que-nivel-necesita-tu-planta.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/HMI-vs-scada-que-nivel-necesita-tu-planta.png" loading="lazy"
                                alt="HMI vs SCADA: Qué nivel necesita tu planta"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                HMI vs SCADA: Qué nivel necesita tu planta
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/HMI-vs-scada-que-nivel-necesita-tu-planta.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lógica de escalera vs bloques de función -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control software-desarrollo">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/logica-de-escalera-vs-bloques-de-funcion.png" target="_blank">
                            <img src="./images/infografias/logica-de-escalera-vs-bloques-de-funcion.png" loading="lazy"
                                alt="Lógica de escalera vs bloques de función"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Lógica de escalera vs bloques de función
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/logica-de-escalera-vs-bloques-de-funcion.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mantenimiento con Excel vs Neovero -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="software-desarrollo automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/mantenimiento-con-excel-vs-neovero.jpg" target="_blank">
                            <img src="./images/infografias/mantenimiento-con-excel-vs-neovero.jpg" loading="lazy"
                                alt="Mantenimiento con Excel vs Neovero"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Mantenimiento con Excel vs Neovero
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/mantenimiento-con-excel-vs-neovero.jpg" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mantenimiento predictivo en sistemas de HVAC para cuartos limpios -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/mantenimiento-predictivo-en-sistemas-de-hvac-para-cuartos-limpios.png"
                            target="_blank">
                            <img src="./images/infografias/mantenimiento-predictivo-en-sistemas-de-hvac-para-cuartos-limpios.png" loading="lazy"
                                alt="Mantenimiento predictivo en sistemas de HVAC para cuartos limpios"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Mantenimiento predictivo en sistemas de HVAC
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/mantenimiento-predictivo-en-sistemas-de-hvac-para-cuartos-limpios.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MIL-STD-810G -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="prueba-medicion pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/mil-std-810g.jpg" target="_blank">
                            <img src="./images/infografias/mil-std-810g.jpg" alt="MIL-STD-810G" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                MIL-STD-810G
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/mil-std-810g.jpg" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Monitoreo de eficiencia energética en sistemas de clasificación -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="consumo-energia automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/monitoreo-de-eficiencia-energetica-en-sistemas-de-clasificacion.jpg"
                            target="_blank">
                            <img src="./images/infografias/monitoreo-de-eficiencia-energetica-en-sistemas-de-clasificacion.jpg" loading="lazy"
                                alt="Monitoreo de eficiencia energética en sistemas de clasificación"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Monitoreo de eficiencia energética en sistemas de clasificación
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/monitoreo-de-eficiencia-energetica-en-sistemas-de-clasificacion.jpg"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Monitoreo de impacto y vibración en transporte de carga crítica -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica.png"
                            target="_blank">
                            <img src="./images/infografias/monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica.png" loading="lazy"
                                alt="Monitoreo de impacto y vibración en transporte de carga crítica"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Monitoreo de impacto y vibración en transporte de carga crítica
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/monitoreo-de-impacto-y-vibracion-en-transporte-de-carga-critica.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Motores a pasos en bombas dosificadoras -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/motores-a-pasos-en-bombas-dosificadoras.jpg" target="_blank">
                            <img src="./images/infografias/motores-a-pasos-en-bombas-dosificadoras.jpg" loading="lazy"
                                alt="Motores a pasos en bombas dosificadoras"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Motores a pasos en bombas dosificadoras
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/motores-a-pasos-en-bombas-dosificadoras.jpg"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MTBF vs MTTR -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control software-desarrollo">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/MTBF-vs-MTTR.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/MTBF-vs-MTTR.png" loading="lazy"
                                alt="MTBF vs MTTR"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                MTBF vs MTTR
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/MTBF-vs-MTTR.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nearshoring en México -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/nearshoring-mexico.png" target="_blank">
                            <img src="./images/infografias/nearshoring-mexico.png" alt="Nearshoring en México" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Nearshoring en México
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/nearshoring-mexico.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEMA y UL Type -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="https://www.logicbus.com.mx/images/infografias/nema-y-ul-type.png" target="_blank">
                            <img src="https://www.logicbus.com.mx/images/infografias/nema-y-ul-type.png" loading="lazy"
                                alt="NEMA y UL Type"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                NEMA y UL Type
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="https://www.logicbus.com.mx/images/infografias/nema-y-ul-type.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Porque las auditorías industriales exigen más automatización -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/porque-las-auditorias-industriales-exigen-mas-automatizacion.png"
                            target="_blank">
                            <img src="./images/infografias/porque-las-auditorias-industriales-exigen-mas-automatizacion.png" loading="lazy"
                                alt="Porque las auditorías industriales exigen más automatización"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Porque las auditorías industriales exigen más automatización
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/porque-las-auditorias-industriales-exigen-mas-automatizacion.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posicionamiento absoluto para grúas transelevadoras -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control sensores-transductores">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/posicionamiento-absoluto-para-gruas-transelevadoras.jpg"
                            target="_blank">
                            <img src="./images/infografias/posicionamiento-absoluto-para-gruas-transelevadoras.jpg" loading="lazy"
                                alt="Posicionamiento absoluto para grúas transelevadoras"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Posicionamiento absoluto para grúas transelevadoras
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/posicionamiento-absoluto-para-gruas-transelevadoras.jpg"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Puntos críticos de medición en productos sensibles -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/puntos-criticos-de-medicion-en-productos-sensibles.jpg"
                            target="_blank">
                            <img src="./images/infografias/puntos-criticos-de-medicion-en-productos-sensibles.jpg" loading="lazy"
                                alt="Puntos críticos de medición en productos sensibles"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Puntos críticos de medición en productos sensibles
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/puntos-criticos-de-medicion-en-productos-sensibles.jpg"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Qué es la Prueba de Hipot -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="prueba-medicion">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/que-es-la-prueba-de-hipot.png" target="_blank">
                            <img src="./images/infografias/que-es-la-prueba-de-hipot.png" loading="lazy"
                                alt="Qué es la Prueba de Hipot"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Qué es la Prueba de Hipot
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/que-es-la-prueba-de-hipot.png" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Qué fuente de alimentación DC necesitas -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control consumo-energia">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/que-fuente-de-alimentacion-dc-necesitas.png" target="_blank">
                            <img src="./images/infografias/que-fuente-de-alimentacion-dc-necesitas.png" loading="lazy"
                                alt="Qué fuente de alimentación DC necesitas"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Qué fuente de alimentación DC necesitas
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/que-fuente-de-alimentacion-dc-necesitas.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rol del PLC en la automatización industrial -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/rol-del-plc-en-la-automatizacion-industrial.png" target="_blank">
                            <img src="./images/infografias/rol-del-plc-en-la-automatizacion-industrial.png" loading="lazy"
                                alt="Rol del PLC en la automatización industrial"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Rol del PLC en la automatización industrial
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/rol-del-plc-en-la-automatizacion-industrial.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistema de monitoreo y control IOT para tráilers -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/sistema-de-monitoreo-y-control-iot.jpg" target="_blank">
                            <img src="./images/infografias/sistema-de-monitoreo-y-control-iot.jpg" loading="lazy"
                                alt="Sistema de monitoreo y control IOT para tráilers"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Sistema de monitoreo y control IOT para tráilers
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/sistema-de-monitoreo-y-control-iot.jpg" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soluciones y servicios -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/soluciones-y-servicios.jpg" target="_blank">
                            <img src="./images/infografias/soluciones-y-servicios.jpg" alt="Soluciones y servicios" loading="lazy"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Soluciones y servicios
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/soluciones-y-servicios.jpg" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tecnología que impulsa la nueva logística -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="automatizacion-control pcs-comunicaciones">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/tecnologia-que-impulsa-la-nueva-logistica.png" target="_blank">
                            <img src="./images/infografias/tecnologia-que-impulsa-la-nueva-logistica.png" loading="lazy"
                                alt="Tecnología que impulsa la nueva logística"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Tecnología que impulsa la nueva logística
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/tecnologia-que-impulsa-la-nueva-logistica.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terminales embarcadas y escaneo móvil -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="pcs-comunicaciones adquisicion-datos">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/terminales-embarcadas-y-escaneo-movil.png" target="_blank">
                            <img src="./images/infografias/terminales-embarcadas-y-escaneo-movil.png" loading="lazy"
                                alt="Terminales embarcadas y escaneo móvil"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Terminales embarcadas y escaneo móvil
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/terminales-embarcadas-y-escaneo-movil.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trazabilidad de cadena de frío 4.0 -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos software-desarrollo">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/trazabilidad-de-cadena-de-frio-4.0.jpg" target="_blank">
                            <img src="./images/infografias/trazabilidad-de-cadena-de-frio-4.0.jpg" loading="lazy"
                                alt="Trazabilidad de cadena de frío 4.0"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Trazabilidad de cadena de frío 4.0
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/trazabilidad-de-cadena-de-frio-4.0.jpg" target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trazabilidad de cadena de frio 4.0 con alertas en tiempo real -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="adquisicion-datos software-desarrollo">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.jpg"
                            target="_blank">
                            <img src="./images/infografias/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.jpg" loading="lazy"
                                alt="Trazabilidad de cadena de frio 4.0 con alertas en tiempo real"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Trazabilidad de cadena de frio con alertas en tiempo real
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/trazabilidad-de-cadena-de-frio-4.0-con-alertas-en-tiempo-real.jpg"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trazabilidad energética en fábricas inteligentes -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="consumo-energia automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/trazabilidad-energetica-en-fabricas-inteligentes.png"
                            target="_blank">
                            <img src="./images/infografias/trazabilidad-energetica-en-fabricas-inteligentes.png" loading="lazy"
                                alt="Trazabilidad energética en fábricas inteligentes"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Trazabilidad energética en fábricas inteligentes
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/trazabilidad-energetica-en-fabricas-inteligentes.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Verificación de Etiquetado en Viales Farmacéuticos -->
                <div class="col-10 col-md-5 col-lg-3 mb-4 app" data-categoria="vision-artificial automatizacion-control">
                    <div class="card h-100"
                        style="border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden;">
                        <a href="./images/infografias/verificacion-de-etiquetado-en-viales-farmaceuticos.png"
                            target="_blank">
                            <img src="./images/infografias/verificacion-de-etiquetado-en-viales-farmaceuticos.png" loading="lazy"
                                alt="Verificación de Etiquetado en Viales Farmacéuticos"
                                style="height: 220px; width: 100%; object-fit: cover; object-position: top; border-bottom: 1px solid #eee; cursor: zoom-in; transition: transform 0.3s ease;">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between p-4">
                            <h5 class="card-title mb-4"
                                style="font-size: 15px; color: #003366; font-weight: 600; line-height: 1.4;">
                                Verificación de Etiquetado en Viales Farmacéuticos
                            </h5>
                            <div>
                                <a class="button button-circle-orange"
                                    style="display: inline-block; font-weight: normal; font-size: 14px; padding: 8px 20px;"
                                    href="./images/infografias/verificacion-de-etiquetado-en-viales-farmaceuticos.png"
                                    target="_blank">
                                    Ver Infografía
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu
                proyecto.</span>
        </div>
        <div class="container">
            <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
                <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
                    style="width:100%; min-height:1200px; border:0;">
                </iframe>
            </div>
        </div>
    </div>

    <?php require("libreria/footer.view.php"); ?>

    <?php echo $own_file_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $flickity_js; ?>

    <script>
        // Variable para guardar el estado del filtro actual
        let categoriaActual = 'todos';

        function filtrarCategoria(categoria, elemento) {
            categoriaActual = categoria;

            // Remover clase active de todos los botones en la navegación
            let botones = document.querySelectorAll('.btn-navigation .btn-circle');
            botones.forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Agregar clase active al botón seleccionado
            elemento.classList.add('active');

            // Aplicar filtros de búsqueda y categoría combinados
            aplicarFiltros();
        }

        function aplicarFiltros() {
            var input = document.getElementById("inputApp");
            var filterText = input.value.toUpperCase();
            var items = document.getElementsByClassName("app");

            for (var e = 0; e < items.length; e++) {
                var cardTitle = items[e].querySelector(".card-title");
                var itemCat = items[e].getAttribute("data-categoria");
                
                // 1. Evaluar texto del buscador
                var coincideTexto = false;
                if (cardTitle) {
                    coincideTexto = (cardTitle.textContent.toUpperCase().indexOf(filterText) > -1 || filterText === '');
                }

                // 2. Evaluar categoría (Soporte para múltiples categorías)
                var coincideCat = false;
                if (categoriaActual === 'todos') {
                    coincideCat = true;
                } else if (itemCat) {
                    // Separar las categorías por espacio en un arreglo y verificar si contiene la actual
                    var categoriasArray = itemCat.split(' ');
                    if (categoriasArray.includes(categoriaActual)) {
                        coincideCat = true;
                    }
                }

                // 3. Mostrar solo si cumple con AMBAS condiciones (Buscador y Botón)
                if (coincideTexto && coincideCat) {
                    items[e].style.display = "block";
                } else {
                    items[e].style.display = "none";
                }
            }
        }
    </script>

</body>
<?php echo $var_footer; ?>

</html>