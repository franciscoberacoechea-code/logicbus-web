<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores de Peso para Equipos de Entrenamiento de Gimnasio | Logicbus</title>
    <meta name="description" content="El uso de  la medición de fuerza durante los entrenamientos o  programas de entrenamiento de atletas puede cambiar la forma en que el personal de apoyo profesional aborda  el entrenamiento del rendimiento muscular...">
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
                <li class="breadcrumb-item active" aria-current="page">Sensores de Peso para Equipos de Entrenamiento de Gimnasio</li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Sensores de Peso para Equipos de Entrenamiento de Gimnasio" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Sensores de Peso para Equipos de Entrenamiento de Gimnasio" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Sensores de Peso para Equipos de Entrenamiento de Gimnasio</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/pesas.png" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="text-center light-black font-weight-bold">¿Cómo se utiliza la medición de fuerza para controlar el progreso del entrenamiento físico? ¿Y cómo se utiliza para hacer un seguimiento del crecimiento y la fuerza muscular?</p>

                <p class="light-black">El uso de la medición de fuerza durante los entrenamientos o programas de entrenamiento de atletas puede cambiar la forma en que el personal de apoyo profesional aborda el entrenamiento del rendimiento muscular, así como la prevención de lesiones y la prescripción de ejercicios de rehabilitación, ya que los sensores de IoT en equipos de fitness inteligentes permiten a los atletas rastrear con precisión la fuerza y la fatiga en diferentes partes del cuerpo.</p>

                <p class="light-black">Además, los sensores de fuerza y torsión proporcionan una nueva dimensión al seguimiento del entrenamiento y la gestión del riesgo de lesiones, permitiendo a los entrenadores prescribir de forma más perceptiva cargas de entrenamiento, identificar riesgos y evaluar la eficacia del entrenamiento.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo pueden los ingenieros diseñar los equipos de entrenamiento inteligentes del futuro?</p>
                <p class="light-black">Para crear productos de alto rendimiento para la industria de equipos de fitness, los ingenieros y diseñadores deben comprender cómo interactúa el cliente con ellos. Esto es crucial, dado que los fallos y las averías provocan lesiones a los usuarios, fracasos comerciales y, posiblemente, problemas legales.</p>

                <p class="light-black">Los datos de los sensores de fuerza y par permiten a los ingenieros y diseñadores recopilar, registrar y analizar con precisión las fuerzas de interacción entre personas y equipos y capturar los movimientos humanos naturales. Permiten el análisis de fallas, definen las limitaciones de los equipos y facilitan la evaluación de la confiabilidad de los equipos y el análisis del ciclo de vida del producto.</p>

                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Medición de la fuerza de tracción de las bandas de resistencia: </b> Se conectan celdas de carga en miniatura a cada una de las seis bandas de resistencia. A medida que el atleta tira de las bandas de resistencia, los sensores de fuerza miden las fuerzas de tracción multidireccionales.</li>
                    <li class="mb-3"><b>Medición de la carga del ejercicio de sentadilla:</b> Tradicionalmente, los entrenadores utilizan cinturones con pesas colgantes para medir la fuerza de sentadilla del atleta. La medición de la carga mediante una celda de carga conectada a un volante proporciona libertad de movimiento, resistencia variable y carga ilimitada.</li>
                    <li class="mb-3"><b>Máquina de remo: </b>
                        <ol type="A">
                            <li>Pruebas de eficiencia, fricción y par en la rueda giratoria y el embrague en un dispositivo de prueba para comprobar su fiabilidad. Esto se utilizaría para probar la máquina en un banco de pruebas utilizando sensores de par rotatorio para controlar el par, las RPM, el ángulo y la potencia.</li>
                            <li>Se instala un sensor de celda de carga en miniatura LCM200 entre el mango del remero y la cadena del volante. Durante la remada, el transductor de fuerza captura la curva de fuerza, lo que indica cómo varía la fuerza total a medida que el atleta usa las piernas, la espalda y los brazos durante el impulso.</li>
                            <li>Sensor de fuerza de pedal LAU220 en el remo para monitorear la fuerza de presión del pie del atleta y la fuerza de los dedos del pie durante el ejercicio.</li>
                        </ol>
                    </li>
                    <li class="mb-3"><b>Bicicleta de interior: </b>
                        <ol type="A">
                            <li>CG: monitoreo del centro de gravedad durante el ejercicio del atleta. Se puede utilizar el botón de carga de la serie LLB, la celda de carga tipo donut con orificio pasante de la serie LTH, la celda de carga tipo panqueque LCF o la celda de carga multieje MTA400.</li>
                            <li>Sensores de fuerza multieje MBA400 / MBA500 / MAU300 instalados en los mangos de equipos elípticos y cintas de correr para monitorear y estudiar la fuerza de agarre y la fuerza de tracción durante el ejercicio.</li>
                            <li>Pruebas de eficiencia y fricción midiendo el torque en la rueda. Sensores de torque rotatorios para monitorear torque, RPM, ángulo y potencia.</li>
                            <li>Sensor de fuerza del pedal para monitorear la fuerza del pie/dedo del pie.</li>
                        </ol>
                    </li>
                    <li class="mb-3"><b>Máquina elíptica: </b>
                        <ol type="A">
                            <li>Sensores de fuerza multieje MBA400 / MBA500 / MAU300 instalados en los mangos de equipos elípticos y cintas de correr para monitorear y estudiar la fuerza de agarre y la fuerza de tracción durante el ejercicio.</li>
                            <li>Sensor de fuerza de pedal LAU220 en la elíptica para monitorear la fuerza de presión del pie del atleta y la fuerza de los dedos del pie durante el ejercicio.</li>
                            <li>Pruebas de eficiencia y fricción midiendo el torque en la rueda. Sensores de torque rotatorios para monitorear torque, RPM, ángulo y potencia.</li>
                            <li>Pruebas de confiabilidad del desgaste de los cojinetes en todas las articulaciones y puntos de pivote bajo movimiento, así como pruebas de fatiga de los componentes bajo movimiento repetitivo.</li>
                        </ol>
                    </li>
                </ol>
                <center><a class="button button-circle-orange" href="#contacto">Contáctanos</a></center>
            </div>
        </div>
    </section>

    <!--EQUIPOS RECOMENDADOS-->
    <section class="container py-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill mb-5">EQUIPOS RECOMEDADOS</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCM200.jpg" alt="Serie LCM200" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCM200</p>
                <p>Celda de carga en línea roscada en miniatura</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-en-linea-lcm200" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/MBA400.jpg" alt="Serie MBA400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie MBA400</p>
                <p>Celda de carga biaxial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-multi-ejes-mba400" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/MBA500.jpg" alt="Serie MBA500" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie MBA500</p>
                <p>Sensor biaxial de par y empuje</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-multi-ejes-mba500" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/MTA400.jpg" alt="Serie MTA400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie MTA400</p>
                <p>Celda de carga triaxial</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-multi-ejes-mta400" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/MAU300.jpg" alt="Serie MAU300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie MAU300</p>
                <p>Celda de carga para palanca de cambios/perilla de cambio de marchas</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-multi-ejes-mau300" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04404-1.jpg" alt="Serie LAU220" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LAU220</p>
                <p>Sensor de fuerza del pedal</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-pedal-lau220" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/36/FSH04720.jpg" alt="USB" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Módulo USB</p>
                <p>Kit de salida USB de alta resolución y velocidad</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-instrumentos-modulos-usb" target="_blank">Comprar</a>
            </div>
        </div>
    </section>

    <!--VIDEOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">VIDEOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/j5yf6HRaWSQ?si=ba9OFrOv8JUmgxz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/oET32jL106c?si=hr5bgIqBnyezNooq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="embed-container">
                    <iframe src="https://www.youtube.com/embed/cp9xINRLz1U?si=_gHVv5Qmb0DX2FLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--ARTICULOS-->
    <section class="container-fluid py-5">
        <h2 class="container subtitle text-center orange-text py-1 rounded-pill mb-5">ARTICULOS</h2>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-4">
                <a href="http://https://www.logicbus.com.mx/blog/por-que-es-importante-calibrar-las-celdas-de-carga-y-los-sensores-de-torque/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/04/%C2%BFPor-que-es-importante-calibrar-una-celda-de-carga.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.logicbus.com.mx/blog/display-exclusivo-para-celdas-de-carga/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/02/Display-exclusivo-para-celdas-de-carga.png" alt="" width="100%">
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.logicbus.com.mx/blog/celdas-de-carga-en-el-control-de-procesos/" target="_blank" rel="noopener noreferrer">
                    <img src="https://www.logicbus.com.mx/blog/wp-content/uploads/2024/01/CELDAS-DE-CARGA-EN-EL-CONTROL-DE-PROCESOS.png" alt="" width="100%">
                </a>
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
                        <img src="img/industrias/academia.webp" class="card-img" style="filter: brightness(0.5);" alt="Academia e Investigación">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Academia e Investigación</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="agricultura">
                        <img src="img/industrias/agricultura.webp" class="card-img" style="filter: brightness(0.5);" alt="Agricultura">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Agricultura</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="alimentos-y-bebidas">
                        <img src="img/industrias/alimentosybebidas.webp" class="card-img" style="filter: brightness(0.5);" alt="Alimentos y Bebidas">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Alimentos y Bebidas</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="automotriz">
                        <img src="img/industrias/automotriz.webp" class="card-img" style="filter: brightness(0.5);" alt="Automotriz">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Automotriz</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="construccion">
                        <img src="img/industrias/construccion.webp" class="card-img" style="filter: brightness(0.5);" alt="Construcción">
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
                        <img src="img/industrias/materiales.webp" class="card-img" style="filter: brightness(0.5);" alt="Ensayos de Materiales">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Ensayos de Materiales</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="farmaceutica-y-laboratorio">
                        <img src="img/industrias/farmaceutica.webp" class="card-img" style="filter: brightness(0.5);" alt="Farmacéutica y Laboratorio">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Farmacéutica y Laboratorio</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="robotica">
                        <img src="img/industrias/robots.webp" class="card-img" style="filter: brightness(0.5);" alt="Robótica">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Robótica</h5>
                        </div>
                    </a>
                </div>
                <div class="card card-industry">
                    <a class="text-white" href="">
                        <img src="img/industrias/transporte.webp" class="card-img" style="filter: brightness(0.5);" alt="Transporte">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title link-orange">Transporte</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Contacto-->
    <div class="section-blue text-center py-5" id="contacto">
        <div class="container mb-5">
            <h2 class="title white">¿Necesitas ayuda con tu proyecto?</h2>
            <span class="paragraph white">Estamos aquí para ayudarte a encontrar las mejores soluciones para tu proyecto.</span>
        </div>
        <!-- BEGIN Podio web form -->
        <div class="podio-webform-container"></div>
        <div align="center">
            <script src="https://podio.com/webforms/14800971/993400.js"></script>
            <script type="text/javascript">
                _podioWebForm.render("993400")
            </script>
            <noscript>
                <a href="https://podio.com/webforms/14800971/993400" target="_blank">Por favor, rellena el formulario</a>
            </noscript>
        </div>
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