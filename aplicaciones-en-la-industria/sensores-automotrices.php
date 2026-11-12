<?php
require("../admin/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensores Automotrices | Logicbus</title>
    <meta name="description" content="Las pruebas de durabilidad automotriz respaldan la evaluación de los vehículos, subsistemas y componentes por parte de los fabricantes de equipos originales y de componentes para determinar la vida útil esperada del producto.">
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
                <li class="breadcrumb-item active" aria-current="page">Sensores Automotrices </li>
            </ol>
        </nav>
    </section>

    <!--BANNER-->
    <section class="card text-white" style="border: none; border-radius: 0;">
        <img src="img/aplicaciones-en-la-industria.png" alt="Banner" alt="Sensores Automotrices" class="hide-mobile">
        <img src="img/banner-mobile.webp" alt="Banner-mobile" alt="Sensores Automotrices" class="hide-desktop">
        <div class="card-img-overlay text-center d-flex flex-column justify-content-center px-5">
            <h1 class="banner-title white font-weight-bold mb-0">Sensores Automotrices</h1>
        </div>
    </section>

    <!--CONTENIDO-->
    <section class="container-fluid py-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                <img src="./img/sensores-automotrices.jpg" alt="Diagrama" width="100%">
                <div class="text-center mt-5">
                    <h3 class="blue font-weight-bold">Marcas recomendadas</h3>
                    <a href="../futek"><img class="m-3 gray-filter" src="../images/nuestras_marcas/webp/futek.webp" alt="Futek" width="200px"></a>
                </div>
            </div>

            <div class="col-12 col-md-7 text-justify">
                <p class="light-black font-weight-bold">Pruebas de durabilidad y fatiga de componentes automotrices: validación del diseño</p>

                <p class="light-black">Las pruebas de durabilidad automotriz respaldan la evaluación de los vehículos, subsistemas y componentes por parte de los fabricantes de equipos originales y de componentes para determinar la vida útil esperada del producto. Las pruebas utilizan movimientos y fuerzas del mundo real para evaluar y validar el diseño y mejorar la calidad. FUTEK respalda a los fabricantes de equipos originales y de subsistemas automotrices al ofrecer una amplia gama de sensores optimizados para pruebas automotrices (sensores para automóviles). Además de los vehículos completos, las pruebas de durabilidad automotriz evalúan componentes como el motor, la suspensión, la palanca de cambios, los frenos, el volante, las ventanas, el chasis, el marco, el sistema de infoentretenimiento, las bisagras de las puertas y los asientos, los interiores y la suspensión. Las capacidades incluyen pruebas de fatiga cíclica, seguridad funcional, deflexión, vibración electrodinámica, mediciones de deformación y más.</p>

                <p class="light-black">Esta nota de aplicación proporciona una lista de sensores de automóviles y sus funciones, y describe muchas aplicaciones de sensores de fuerza y torsión para la validación del diseño de vehículos.</p>

                <p class="light-black font-weight-bold">Cumplimiento de las normas de la industria automotriz</p>
                <ul>
                    <li class="mb-3">FMVSS 118: Sistemas de paneles de techo, particiones y ventanas accionados eléctricamente.</li>
                    <li class="mb-3">ASTM D3574 B1 / ISO 2439: Fuerza de deflexión de la espuma del asiento (IFD).</li>
                    <li class="mb-3">SAE J2909: Procedimiento de prueba de distancia de frenado en seco y mojado de vehículos livianos (prueba de frenos).</li>
                    <li class="mb-3">ECE R13H: Disposiciones para el frenado de turismos.</li>
                    <li class="mb-3">ISO 7975: Automóviles de pasajeros. Frenado en curva. Método de ensayo de bucle abierto.</li>
                    <li class="mb-3">ISO 13849-1:2015 Seguridad de la maquinaria - Partes de los sistemas de control relacionadas con la seguridad.</li>
                    <li class="mb-3">ISO 26262-1:2018 Vehículos de carretera - Seguridad funcional.</li>
                    <li class="mb-3">FMVSS No. 206: Cerraduras de puertas y componentes de retención de puertas.</li>
                </ul>
                <p class="light-black font-weight-bold">Capacidades de pruebas automotrices de sensores FUTEK</p>
                <ul>
                    <li>Prueba de durabilidad y rendimiento.</li>
                    <li>Prueba de fatiga y vibración.</li>
                    <li>Ensayos de torsión y rotación.</li>
                    <li>Prueba de durabilidad multieje.</li>
                    <li>Seguridad funcional.</li>
                    <li>Validación del circuito de control electromecánico.</li>
                </ul>
            </div>
            <div class="container text-justify">
                <p class="text-center light-black font-weight-bold">¿Cómo funciona?</p>
                <ol class="light-black">
                    <li class="mb-3"><b>Retroalimentación háptica de la pantalla táctil:</b> al incorporar celdas de carga para medir la fuerza de contacto, la computadora de a bordo puede confirmar entradas correctas e incorrectas utilizando fuerzas de golpeteo variables distribuidas en los ejes x e y de la pantalla, lo que garantiza que la entrada se valide correctamente. Los nanosensores QLA414 se encuentran en cada esquina de los puntos de montaje de la pantalla táctil. A medida que el usuario toca la pantalla, las celdas de carga miden la fuerza de golpeteo de la pantalla táctil.</li>

                    <li class="mb-3"><b>Pinzamiento de ventanas y techos corredizos:</b> con la celda de carga de pinzamiento de FUTEK (también conocida como sensor de fuerza de pinzamiento), los fabricantes de automóviles pueden verificar la fuerza de pinzamiento en las ventanas y los techos corredizos eléctricos. Este sensor portátil, preciso y fácil de usar, está diseñado para ayudar a los fabricantes de automóviles a cumplir con la Norma Federal de Seguridad de Vehículos Motorizados FMVSS 118 (sistemas de ventanas, mamparas y paneles de techo accionados eléctricamente) y las normas internacionales. Estas normas especifican los requisitos para los sistemas de ventanas, mamparas y paneles de techo accionados eléctricamente para minimizar la probabilidad de muerte o lesiones por su funcionamiento accidental</li>.

                    <li class="mb-3"><b>Pruebas de bisagras de puertas:</b> cuando se trata de pruebas de bisagras, se utilizan celdas de carga para medir las fuerzas aplicadas a la bisagra o panel de la puerta prototipo durante la prueba. La fuerza requerida depende del peso de la puerta, la distancia de recorrido o el arco de movimiento de cerrado a abierto y si las bisagras deben mantener la puerta o el panel parcialmente abierto o si la puerta siempre se mueve de completamente abierta a completamente cerrada. Al utilizar la celda de carga en línea FUTEK LCM, los ingenieros pueden trazar la curva de fuerza-desplazamiento registrando la fuerza aplicada y el desplazamiento (movimiento) correspondiente de la bisagra. Los datos de las celdas de carga también ayudan a estimar las fuerzas de fricción de la bisagra, lo que es esencial para operaciones seguras y confiables, además de brindar una buena experiencia de usuario.</li>

                    <li class="mb-3"><b>Durabilidad de los asientos:</b> en la industria automotriz, se utilizan robots para realizar pruebas cíclicas de desgaste y durabilidad de los asientos. Los fabricantes de automóviles investigan cómo las personas de todas las formas y tamaños afectan la tapicería, los cojines y las estructuras de los asientos a lo largo de la vida útil del vehículo. La precisión es un factor muy importante al medir la deflexión de la fuerza de indentación (IFD) durante las pruebas de asientos de automóviles de conformidad con ASTM D3574 B1. La celda de carga tipo panqueque con clasificación de fatiga LCF456 de FUTEK está integrada en el efector final del brazo robótico para medir la fuerza de compresión aplicada sobre un asiento.</li>

                    <li class="mb-3"><b>Dinamómetro de motor (brazo de torsión):</b> los fabricantes de motores y los laboratorios de pruebas de rendimiento utilizan dinamómetros de motor (o dinamometro de motor) para aislar la potencia de salida del motor y medir factores de rendimiento como caballos de fuerza, aceleración y kilometraje. El dinamómetro de chasis (o dinamometro de automóvil) aplica una carga contra el motor y el par absorbido por el mecanismo de carga se transfiere luego por un brazo de torsión a un sensor de celda de carga, que está integrado en el dispositivo de absorción de energía. La celda de carga LCF400 mide con precisión la carga aplicada por el brazo de torsión del dinamómetro de motor. Luego, los ingenieros pueden analizar la transferencia de potencia al motor y optimizar el rendimiento del vehículo.</li>

                    <li class="mb-3"><b>Prueba de cambio de marchas manual:</b> el sensor de cambio de marchas manual MAU300 es otro producto exclusivo que se ofrece para la industria automotriz y es ideal para aplicaciones de medición de fuerza de accionamiento de cambio de marchas en automóviles. Diseñado para probar las cargas Fx y Fy que se producen durante el cambio de marchas, el MAU300 está diseñado para uso manual/pruebas humanas.</li>

                    <li class="mb-3"><b>Fuerza de los pedales de aceleración y freno:</b> las pruebas del sistema de frenos se llevan a cabo normalmente durante varias etapas del proceso de fabricación. Comienzan en la etapa de desarrollo inicial, siguen con las pruebas de resistencia, de laboratorio y de pista, y continúan durante el proceso de producción para una mayor garantía de calidad. Al utilizar sensores de fuerza de pedal LAU220 (también conocidos como celdas de carga de freno), los fabricantes de automóviles pueden verificar la seguridad y confiabilidad de la mecánica de frenado de sus automóviles. Los sensores de fuerza de pedal (sensores del vehículo) están diseñados para medir la carga aplicada a los pedales de freno, acelerador y embrague durante los eventos de aceleración, desaceleración y cambio de transmisión.</li>

                    <li class="mb-3"><b>Volante:</b> La tecnología Steer-by-Wire (SbW) en la industria automotriz es el uso de componentes electrónicos, actuadores y algoritmos para reemplazar las conexiones hidráulicas y mecánicas entre el volante y la carretera. Durante la fase de validación del producto, el sensor de par y empuje de perfil bajo QMA148 proporciona a los ingenieros de control y garantía de calidad las herramientas adecuadas para medir el par de rotación aplicado a los controles de dirección.</li>

                    <li class="mb-3"><b>Barra de acoplamiento de suspensión - Pruebas de durabilidad y fatiga del bastidor de suspensión delantera:</b> Los complejos sistemas de suspensión multipunto que se utilizan en vehículos de alto rendimiento requieren el uso de modelos y simulación para garantizar el cumplimiento bajo carga. Sin embargo, el paso final para validar el modelo de simulación es la prueba en vivo. Para lograr esto, las celdas de carga se colocan en línea con cada brazo de suspensión, lo que proporciona datos de la carga que pasa por cada brazo, mediciones precisas de la carga de la dirección y agarre indirecto de los neumáticos delanteros que permite ajustes del sistema de suspensión para optimizar el rendimiento y el manejo.</li>

                    <li class="mb-3"><b>Pinza de freno:</b> En los sistemas de freno por cable, los controladores centrales requieren información precisa sobre la fuerza de sujeción entre la pastilla de freno y el disco en función del desplazamiento de la pastilla, que generalmente se denota como la curva característica de la pinza. Debido al envejecimiento, la temperatura y otras variaciones ambientales, las curvas características de la pinza varían con el tiempo. Por lo tanto, la calibración automática de la pinza en tiempo real es vital para la acción de frenado de alto rendimiento y la seguridad del vehículo. Además, durante la validación del diseño, los ingenieros utilizan un sistema de medición de fuerza para validar y calibrar los sistemas de circuito cerrado de freno por cable. La lavadora de carga QLA307 tiene un perfil bajo y puede soportar cargas masivas, y se usa comúnmente para la celda de carga de pinza para pruebas de pastillas de freno.</li>
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
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LMD300.jpg" alt="Serie LMD300" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LMD300</p>
                <p>Sensor de fuerza de pinzamiento</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-aplicaciones-medicas-lmd300" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/TFF400.jpg" alt="Serie TFF400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie TFF400</p>
                <p>Sensor de par de reacción</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-torque-sensor-de-torque-de-reaccion-tff400" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCF456.jpg" alt="LCF456" width="150px">
                <p class="font-weight-bold mt-2 mb-0">LCF456</p>
                <p>Celda de carga de tipo pancake</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake-lcf456" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCF400.jpg" alt="Serie LCF400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCF400</p>
                <p>Celda de carga universal tipo pancake</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-pancake-lcf400" target="_blank">Comprar</a>
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
                <p>Sensor de fuerza de tipo pedal</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-celdas-de-carga-futek-tipo-pedal-lau220" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/QSH02089.jpg" alt="QMA148" width="150px">
                <p class="font-weight-bold mt-2 mb-0">QMA148</p>
                <p>Sensor biaxial de par y empuje de perfil bajo personalizado</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/QSH02089_p_31691.html" target="_blank">Comprar</a>
            </div>
            <div class="col-6 col-md-3 mb-5 blue text-center d-flex flex-column justify-content-between align-items-center">
                <img src="https://tienda.logicbus.com.mx/assets/images/categorias/sensors/LCB400.jpg" alt="Serie LCB400" width="150px">
                <p class="font-weight-bold mt-2 mb-0">Serie LCB400</p>
                <p>Celda de carga de extremo de varilla roscada</p>
                <a class="button button-circle-orange" href="https://tienda.logicbus.com.mx/LCB400_c_1836.html" target="_blank">Comprar</a>
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