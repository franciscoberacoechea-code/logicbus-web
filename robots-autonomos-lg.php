<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Robots Autónomos | LG Business - Logicbus</title>
    <meta name="description" content="Descubre los robots autónomos de servicio CLOi de LG. Innovación y eficiencia con robots autónomos diseñados para mejorar la atención">
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
    <h1 class="sr-only">Robots autonomos LG</h1>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                <li class="breadcrumb-item"><a href="automatizacion-control-procesos" class="blue link-orange">Automatización y Control de Procesos</a></li>
                <li class="breadcrumb-item"><a href="robots-moviles-autonomos-amr-agv" class="blue link-orange">Robots Móviles Autónomos</a></li>
                <li class="breadcrumb-item active" aria-current="page">LG</li>
            </ol>
        </nav>
    </div>

    <div class="mb-5">
        <video autoplay muted loop width="100%" poster="imagenes/327/bannerlg.png">
            <source src="https://www.logicbus.com.mx/assets/videos/LG.mp4" type="video/mp4">
        </video>
    </div>

    <p class="title blue text-center">Soluciones Robóticas para las Necesidades Cotidianas</p>
    <div class="container text-justify my-5 paragraph">
        <p>LG está revolucionando la manera en que interactuamos con la tecnología a través de sus innovadoras soluciones robóticas. Diseñadas para satisfacer las necesidades cotidianas de hogares y empresas, las soluciones robóticas de LG combinan lo último en inteligencia artificial y automatización para ofrecer eficiencia, comodidad y precisión inigualables.</p>
        <p>Explora cómo LG está transformando tareas diarias y procesos industriales con productos que no solo mejoran la productividad, sino que también elevan la calidad de vida. Desde robots de limpieza avanzados hasta asistentes robóticos inteligentes, las soluciones de LG están aquí para facilitar la vida y ayudar a centrarse en lo que realmente importa.</p>
    </div>

    <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
        <a class="button-text" href="https://tienda.logicbus.com.mx/lg-robots" target="_blank"><button class="button button-white">Ver en Tienda</button></a>
        <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
        <a class="button-text" href="#industrias"><button class="button button-white">Industrias</button></a>
        <a class="button-text" href="#Catalogos"><button class="button button-white">Catálogos</button></a>
        <a class="button-text" href="#videos"><button class="button button-white">Videos</button></a>
    </div>

    <div class="my-5">
        <video autoplay muted loop width="100%" poster="imagenes/327/minibanner.jpg">
            <source src="imagenes/327/CLOi-Guidebot.mp4" type="video/mp4">
        </video>
    </div>

    <section class="container" id="productos">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1">PRODUCTOS</h2>
        </div>
    </section>

    <div class="container-flex px-4 pb-5">
        <div class="pb-3 px-md-5">
            <div class="carousel align-middle" data-flickity='{ "lazyLoad": 12, "autoPlay": 4000, "wrapAround": true , "pageDots": false, "Friction": 0.03 }' tabindex='0'>
                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLTR30.png" class="card-img-top" alt="LDLTR30">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLOi ServeBot (LDLTR30)<br><br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-servebot-ldltr30" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(0)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/RSCGD20.png" class="card-img-top" alt="RSCGD20">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLOi GuideBot (RSCGD20)<br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-guidebot-rscgd20" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(1)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLAXBT10.png" class="card-img-top" alt="LDLAXBT10">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CarryBot (LDLAXBT10)<br><br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-carrybot-ldlaxbt10" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(2)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLAXWT10.png" class="card-img-top" alt="LDLAXWT10">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLOi CarryBot (LDLAXWT10)<br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-carrybot-ldlaxwt10" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(3)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLAXRO10.png" class="card-img-top" alt="LDLAXRO10">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLoi CarryBot (LDLAXRO10)<br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-carrybot-ldlaxro10" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(4)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLAXVT10.png" class="card-img-top" alt="LDLAXVT10">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLOi CarryBot (LDLAXVT10)<br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-carrybot-ldlaxvt10" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(5)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-cell novedades-carousel-cell">
                    <div class="card" style="cursor: pointer; max-width: 300px;">
                        <img src="imagenes/327/LDLIM21.png" class="card-img-top" alt="LDLIM21">
                        <div class="card-body rounded text-center">
                            <h3 class="card-title text-center">CLOi ServeBot (LDLIM21)<br><br><br></h3>
                            <a href="https://www.logicbus.com.mx/cloi-servebot-ldlim21" class="btn btn-orange text-center">Ver modelo</a>
                            <a style="color:white" onclick="listing(7)" class="comparer btn btn-orange text-center">Comparar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table tab table-hover text-center align-middle ">
                <thead>
                    <tr>
                        <th class="section-blue white" scope="col"></th>
                        <th class="section-blue white" scope="col">CLOi ServeBot (LDLTR30)</th>
                        <th class="section-blue white" scope="col">CLOi GuideBot (RSCGD20)</th>
                        <th class="section-blue white" scope="col">CLOi CarryBot (LDLAXBT10)</th>
                        <th class="section-blue white" scope="col">CLOi CarryBot (LDLAXWT10)</th>
                        <th class="section-blue white" scope="col">CLOi CarryBot (LDLAXRO10)</th>
                        <th class="section-blue white" scope="col">CLOi CarryBot (LDLAXVT10)</th>
                        <th class="section-blue white" scope="col">CLOi ServeBot (LDLIM21)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="section-blue white" scope="row ">Pantalla</th>
                        <td>10.1" Display Touch LCD</td>
                        <td>Cabeza : 9.2" Display LCD, Cuerpo: 27" Display Touch LCD</td>
                        <td>9.2" Display Touch LCD</td>
                        <td>9.2" Display Touch LCD</td>
                        <td>9.2" Display Touch LCD</td>
                        <td>9.2" Display Touch LCD</td>
                        <td>9.2" Display Touch LCD</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Sensores</th>
                        <td>LIDAR / ToF / Cámara RGBD / Celda de carga </td>
                        <td>LiDAR / ToF / parachoque / Magnetico/ Profundidad</td>
                        <td>LiDAR / ToF / Cámara RGBD / Magnetico</td>
                        <td>LiDAR / ToF / Cámara RGBD</td>
                        <td>LiDAR / ToF / Cámara RGBD</td>
                        <td>LiDAR / ToF / Cámara RGBD / Magnetico</td>
                        <td>LiDAR / Cámara 3D / ToF / parachoque</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Capacidad de Carga</th>
                        <td>40 kg (cada cajón soporta hasta 10Kg)</td>
                        <td><b>Ninguna </b> (cuenta con voz y display en ingles / coreano, soporte Multilenguaje en futuras actualizaciones)</td>
                        <td>30 kg</td>
                        <td>30 kg</td>
                        <td>65 kg</td>
                        <td>30 kg </td>
                        <td>30kg (cada cajón soporta hasta 10Kg) cuenta con voz y display en coreano / ingles / español / frances / japones </td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Dimensiones del AMR (mm)</th>
                        <td>56 x 137 x 55 cm</td>
                        <td>51 x 150 x 51 cm</td>
                        <td>51 x 148 x 51 cm</td>
                        <td>51 x 51 x 148 cm</td>
                        <td>51 x 51 x 134 cm</td>
                        <td>51 x 51 x 148 cm</td>
                        <td>51 x 130 x 51 cm</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Dimensión del Estante/Jaula</th>
                        <td>440 x 530mm</td>
                        <td>N/A</td>
                        <td>760 x 417 x 657 mm</td>
                        <td>760 x 417 x 657 mm</td>
                        <td>760 x 500 x 1050 mm</td>
                        <td>465 x217x730 mm</td>
                        <td>3,500 x 400 mm</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">almacenamiento de carga</th>
                        <td>25 000 mAH</td>
                        <td>1 250W (625W x 2)</td>
                        <td>25 Ah x 2</td>
                        <td>25 Ah x 2</td>
                        <td>25 Ah x 2</td>
                        <td>25 Ah x 2</td>
                        <td>23 000 mAH</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Velocidad (Max) </th>
                        <td>1.2 m/s (ajustable)</td>
                        <td>1 m/s</td>
                        <td>1.2 m/s</td>
                        <td>1.2 m/s</td>
                        <td>1.2 m/s</td>
                        <td>1.2 m/s</td>
                        <td>1.0m/s (ajustable)</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Tiempo de Carga</th>
                        <td>Manual: 4-4.5Hrs Automatica: 3-3.5Hrs </td>
                        <td>Automatica: 5 Horas</td>
                        <td>Automatica: 6 Horas</td>
                        <td>Automatica: 6 Horas</td>
                        <td>Automatica: 6 Horas</td>
                        <td>Automatica: 6 Horas</td>
                        <td>Manual: 5 Horas</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Tiempo de Operación Contiuna</th>
                        <td>11 hours (0.7 m/s)</td>
                        <td>9 Horas</td>
                        <td>Min: 18 hrs / Typ: 18.5 hrs</td>
                        <td>Min: 18 hrs / Typ: 18.5 hrs</td>
                        <td>Min: 18 hrs / Typ: 18.5 hrs</td>
                        <td>Min: 18 hrs / Typ: 18.5 hrs</td>
                        <td>11 Horas</td>
                    </tr>

                    <tr>
                        <th class="section-blue white" scope="row ">Ir a tienda</th>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-ServeBot-LDLTR30_p_37067.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-GuideBot-RSCGD20_p_37068.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXBT10_p_37070.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXWT10_p_37071.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXRO10_p_37072.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXVT10_p_37073.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                        <td><a href="https://tienda.logicbus.com.mx/CLOi-ServeBot-LDLIM21_p_37075.html" class="btn btn-orange text-center">Ir a Tienda</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <section>
        <div class="container-fluid pt-4">
            <h2 class="title blue text-center">Soluciones AMR de CLOi CarryBots</h2>
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center px-5">
                    <img src="imagenes/327/carrybot.png" class="img-fluid " alt="carrybot">
                    <a class="button-text mt-n3" href="https://www.logicbus.com.mx/cloi-carrybots">
                        <button class="button button-circle-orange">Conocer más</button>
                    </a>
                </div>
                <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                    <div class="text-justify paragraph p-4">
                        <p>CLOi CarryBots son robots móviles autónomos (AMR) utilizados en la automatización de la gestión de almacenes. Estos AMR vienen en dos modelos: tipo de montaje y tipo rolltainer. Estos robots apoyan la operación eficiente del almacén mediante el uso de un algoritmo de conducción junto con el Sistema de Gestión de Flotas (FMS), que permite a los AMR establecer la ruta más rápida hacia el destino. Los CarryBots también cuentan con un Sistema de Control de Materiales (MCS) que optimiza la distribución y programación de pedidos, y un Sistema de Gestión de Robots (RMS) que proporciona información sobre los robots.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <h2 class="title blue text-center">CLOi ServeBot 3.0</h2>
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                    <div class="text-justify paragraph p-4">
                        <p>El CLOi ServeBot 3.0 es un avanzado robot de servicio diseñado por LG para mejorar la eficiencia en entornos comerciales y hospitalarios. Equipado con navegación autónoma y una interfaz intuitiva, este robot es capaz de entregar alimentos, medicamentos y otros artículos directamente a los destinatarios. Su diseño compacto y su capacidad de evitar obstáculos lo hacen ideal para operar en espacios concurridos, proporcionando un servicio confiable y eficiente.</p>
                    </div>
                </div>
                <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="imagenes/327/cloi-servebot-03.gif" style="width: 90%; height: auto;">
                    <a class="button-text mt-n3" href="https://www.logicbus.com.mx/cloi-servebots">
                        <button class="button button-circle-orange">Conocer más</button>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <h2 class="title blue text-center">CLOi GuideBot </h2>
            <div class="row ">
                <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center px-5">
                    <img src="imagenes/327/guidebot.png" class="img-fluid" alt="guidebot">
                    <a class="button-text mt-n3" href="https://www.logicbus.com.mx/cloi-guidebot-rscgd20">
                        <button class="button button-circle-orange">Conocer más</button>
                    </a>
                </div>
                <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                    <div class="text-justify paragraph p-4">
                        <p class="fs-2">El CLOi GuideBot de LG es un robot guía avanzado diseñado para asistir a visitantes en entornos como centros comerciales, aeropuertos y museos. Equipado con capacidades de navegación autónoma y una pantalla interactiva, el GuideBot proporciona direcciones, información y asistencia en tiempo real. Su diseño intuitivo y amigable permite una interacción fácil y eficiente, mejorando la experiencia del usuario y optimizando el flujo de visitantes en diversos espacios públicos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="industrias">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1">INDUSTRIAS</h2>
        </div>
    </section>

    <div class="container-flex">
        <div class="d-flex justify-content-center">
            <div class="container row d-flex justify-content-around">
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Almacenamiento.webp" alt="Almacenamiento">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Almacenamiento </p>
                    </div>
                </div>
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Industria-Hotelera.webp" alt="Hotelera">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Industría Hotelera</p>
                    </div>
                </div>
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Restaurantera.webp" alt="Restaurantera">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Industría Restaurantera </p>
                    </div>
                </div>
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Comercio-minorista.webp" alt="Comercio-minorista">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Comercio minorista </p>
                    </div>
                </div>
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Salud.png" alt="Salud">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Salud </p>
                    </div>
                </div>
                <div class="col-md-6 card-I text-center">
                    <img src="imagenes/327/Educacion.webp" alt="Educacion">
                    <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto">
                        <p style="margin: auto">Educación </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catalogos-->
    <div class="container-fluid" id="Catalogos">
        <div class="container my-5">
            <h2 class="subtitle text-center orange-text py-1">Catálogos</h2>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="m-3">
                <a class="link-orange" href="imagenes/327/CLOi_Guidebot.pdf" target="_blank"><img src="imagenes/327/CLOi_Guidebot.png" alt="Ver archivo pdf" class="imgBorde" width="220px"><br>
                    <p align="center">CLOi Guidebot</p>
                </a>
            </div>
            <div class="m-3">
                <a class="link-orange" href="imagenes/327/CLOi_ServeBot.pdf" target="_blank"><img src="imagenes/327/CLOi_ServeBot.png" alt="Ver archivo pdf" class="imgBorde" width="220px"><br>
                    <p align="center">CLOi ServeBot</p>
                </a>
            </div>
            <div class="m-3">
                <a class="link-orange" href="imagenes/327/CLOi_CarryBot.pdf" target="_blank"><img src="imagenes/327/CLOi_CarryBot.png" alt="Ver archivo pdf" class="imgBorde" width="220px"><br>
                    <p align="center">CLOi CarryBot</p>
                </a>
            </div>
        </div>
    </div>

    <section class="container" id="videos">
        <div class="my-5">
            <h2 class="subtitle text-center orange-text py-1">VIDEOS</h2>
        </div>
    </section>

    <div class="container-flex  pb-5">
        <div class="container">
            <div class="container-flex row  d-flex justify-content-around">
                <div class="col-md-6 card-d my-3 ">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z-ZzkqWYV0Y?si=gc00620DKRNdft-K" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 card-d my-3 ">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/BY2bbq-HnYQ?si=D79veCuvaURly3W7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid  p-md-5 px-0 py-4  text-center section-blue text-white">
        <h2>¿NECESITAS MÁS INFORMACIÓN?</h2>
        <h2 class="  p-md-5 px-1 py-4 m-3">¡Contáctanos hoy mismo y descubre como podemos colaborar en tu próximo proyecto!</h2>

        <script src="https://podio.com/webforms/14800971/993400.js"></script>
        <script type="text/javascript">
            _podioWebForm.render("993400")
        </script>
        <noscript>
            <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el formulario</a>
        </noscript>
        <div class="podio-webform-container">
        </div>
    </div>


    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <script>
        // full hide
        var list = [1, 1, 1, 1, 1, 1, 1, 1];
        var hidder = ' th:nth-child(1),  td:nth-child(1),';
        for (i in list) {
            if (list[i] > 0) {
                var n = parseInt(i) + 2;
                hidder = hidder + ' th:nth-child(' + n + '),  td:nth-child(' + n + '),';
            }
        }
        hidder = hidder.slice(0, -1);
        const columnCells = document.querySelectorAll(hidder);
        columnCells.forEach(cell => {
            cell.classList.add('cell-animation');
            cell.style.display = 'none';
            cell.style.width = '0px';
        });


        //show metod
        function listing(x) {

            const comparar = document.querySelector('a[onclick="listing(' + x + ')"]');
            const parentElement = comparar.parentElement.parentElement;

            var count = 0;
            var hidder = '';
            var showger = ' th:nth-child(1),  td:nth-child(1),';
            if (list[x] > 0) {
                list[x] = 0;
                parentElement.style.border = '2px solid var(--blue)';
                parentElement.style.transition = 'all 0.2s ease-in-out';
            } else {
                list[x] = 1;
                parentElement.style.transition = 'all 0.2s ease-in-out';
                parentElement.style.border = '1px solid rgba(0,0,0,.125)';
            }

            for (i in list) {

                var n = parseInt(i) + 2;
                if (list[i] > 0) {

                    hidder = hidder + ' th:nth-child(' + n + '),  td:nth-child(' + n + '),';
                } else {
                    showger = showger + ' th:nth-child(' + n + '),  td:nth-child(' + n + '),';
                    count++;
                }
            }
            try {
                hidder = hidder.slice(0, -1);
                if (count == 0) {
                    hidder = hidder + ', th:nth-child(1),  td:nth-child(1)';
                    showger = '';
                }
                const columnCellsa = document.querySelectorAll(hidder);
                columnCellsa.forEach(cell => {
                    cell.style.transition = 'all 0.4s ease';
                    cell.style.opacity = '0';
                    setTimeout(() => {
                        cell.style.display = 'none';
                    }, 300);
                });

            } catch (e) {}
            try {
                showger = showger.slice(0, -1);
                const columnCellsb = document.querySelectorAll(showger);
                columnCellsb.forEach(cell => {
                    cell.removeAttribute('style');
                    cell.style.transition = 'all 0.4s ease';
                    cell.style.opacity = '0';
                    setTimeout(() => {
                        cell.style.opacity = '1';
                    }, 10);
                });
            } catch (e) {}

        }
    </script>
</body>

<?php echo $var_footer; ?>

</html>