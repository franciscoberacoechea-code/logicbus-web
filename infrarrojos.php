<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sensores de temperatura de tipo infrarrojos - Logicbus</title>
    <meta name="description"
        content="Los sensores de temperatura infrarrojos o sondas de temperatura por infrarrojos, son sensores para medida de temperatura sin contacto.">

    <meta name="keywords"
        content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <link rel="canonical" href="https://www.logicbus.com.mx/infrarrojos" />

    <!--- Estilos Necesarios-->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $carrusel_productos; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <section class="container-fluid">
        <div class="row">
            <div class="col-3 hide-mobile">
                <?php menucategorias(); ?>
            </div>
            <div class="col-12 col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="./productos" class="blue link-orange">Productos</a>
                        </li>
                        <li class="breadcrumb-item"><a href="./transductores-sensores"
                                class="blue link-orange">Sensores y
                                Transductores</a></li>
                        <li class="breadcrumb-item"><a href="./sensores-temperatura"
                                class="blue link-orange">Sensores de
                                Temperatura</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Infrarrojos</li>
                    </ol>
                </nav>

                <h1 class="sr-only">Sensores de temperatura de tipo Infrarrojos</h1>
                <img class="mx-auto"
                    src="https://www.logicbus.com.mx/images/banner/www/banner-sensores-temperatura-infrarrojos.png"
                    alt="Sensores de temperatura de tipo Infrarrojos"
                    title="Sensores de temperatura de tipo Infrarrojos" width="100%">
                <p class="paragraph text-justify mt-5">Los sensores infrarrojos son compactos de alta calidad y bajo
                    costo,
                    miden la temperatura de objetos y materiales inaccesibles o en movimiento. Con precisión,
                    consistencia y un
                    sorprendente tiempo de respuesta.</p>
                <p class="text-justify paragraph">Estos sensores son óptimos para la industria alimenticia, del vidrio,
                    papelera, del plástico, acerera, asfáltica, automotriz y energética.</p>
                <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
                    <a class="button-text"
                        href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos"
                        target="_blank"><button class="button button-white">Ver en Tienda MX</button></a>
                    <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
                    <a class="button-text" href="./contacto"><button
                            class="button button-white">Contacto</button></a>
                </div>
            </div>
        </div>
        <p class="container paragraph text-justify">Realizan mediciones de alto rendimiento, miden temperaturas desde
            -20ºC
            a 2000ºC. Son compatibles con gran variedad de instrumentación sin realizar interface o acondicionamiento de
            señal. Existen diversas resoluciones ópticas, se pueden configurar desde una computadora mediante software
            el cual
            es incluido. Permite configurar el rango y la emisividad, aplicar filtros, lecturas mínimas, lecturas
            máximas,
            medias e instantáneas. Funciona en ambientes de hasta 50°C aunque existe una versión con chasis para
            refrigerar
            con agua y de un collar para salida de aire para condiciones más adversas.</p>
    </section>

    <section class="container-fluid px-5">
        <div class="container" id="productos">
            <div class="my-5">
                <h2 class="subtitle text-center orange-text py-1 rounded-pill">Productos</h2>
            </div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/extemp/extemp.jpg"
                            class="card-img" alt="EXTEMP">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-extemp">EXTEMP</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo intrínsecamente seguro, certificado
                                ATEX e IECEx.
                            </p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-extemp"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocan/pyrocan.jpg"
                            class="card-img" alt="PYROCAN">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocan">PYROCAN</a></h3>
                            <p class="card-text">Pirómetro con interfaz digital CAN.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocan"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocouple/pyrocouple.jpg"
                            class="card-img" alt="PYROCOUPLE">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocouple">PYROCOUPLE</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo con salida análoga de corriente,
                                voltaje o termopar.
                            </p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocouple"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_g/pyrocube_g.png"
                            class="card-img" alt="PYROCUBE G">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocube-g">PYROCUBE G</a></h3>
                            <p class="card-text">Pirómetro para aplicaciones de vidrio.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-g"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-pyrocube-m-metal.png"
                            class="card-img" alt="PYROCUBE M">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocube-m">PYROCUBE M</a></h3>
                            <p class="card-text">Pirómetro de respuesta rápida y pequeño punto de medición, para metales
                                a baja
                                temperatura.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-m"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_p/pyrocube_p.png"
                            class="card-img" alt="PYROCUBE P">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocube-p">PYROCUBE P</a></h3>
                            <p class="card-text">Pirómetro para película delgada de plástico.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-p"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/sensor-temperatura-infrarrojo-PCU-S55-5M-5V.jpg"
                            class="card-img" alt="PYROCUBE S y F">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocube-s-f">PYROCUBE S y F</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo con respuesta rápida, pequeño punto de
                                medición y
                                observación LED.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-s-and-f"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrocube_xs/pyrocube_xs.jpg"
                            class="card-img" alt="PYROCUBE XS">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrocube-xs">PYROCUBE XS</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo con óptica enfocada para medir
                                objetivos
                                extremadamente pequeños.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrocube-sx"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyroepsilon/pyroepsilon.jpg"
                            class="card-img" alt="PYROEPSILON">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyroepsilon">PYROEPSILON</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo, con emisividad configurable, salida
                                de 4~20 mA.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyroepsilon"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini/pyromini.jpg"
                            class="card-img" alt="PYROMINI">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyromini">PYROMINI</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo fijo con sensor remoto.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyromini"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyromini22/pyromini22.jpg"
                            class="card-img" alt="PYROMINI 2.2">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyromini22">PYROMINI 2.2</a></h3>
                            <p class="card-text">Pirómetro de dos partes para objetivos y metales de alta temperatura.
                            </p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyromini-2.2"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominibus/pyrominibus.jpg"
                            class="card-img" alt="PYROMINIBUS">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrominibus">PYROMINIBUS</a></h3>
                            <p class="card-text">Sistema de monitoreo de temperatura por infrarrojos multicanal, RS485
                                Modbus.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrobus"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrousb/pyrousb.jpg"
                            class="card-img" alt="PYROUSB">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrousb">PYROUSB</a></h3>
                            <p class="card-text">Sensores de temperatura infrarrojos configurables para PC con salida de
                                4-20 mA.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrousb-version-nueva"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyrominiusb/pyrominiusb.jpg"
                            class="card-img" alt="PYROMINIUSB">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyrominiusb">PYROMINIUSB</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo USB para mesa de trabajo, laboratorio
                                y educación.
                            </p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyrominiusb"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/productos/transductores-sensores/temperatura/infrarojos/pyronfc/pyronfc.jpg"
                            class="card-img" alt="PYRONFC">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./sensores-temperatura-infrarrojos-pyronfc">PYRONFC</a></h3>
                            <p class="card-text">Sensor de temperatura infrarrojo pequeño y de bajo costo con
                                configuración de
                                teléfono inteligente vía NFC.</p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-pyronfc"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
                <div class="row no-gutters">
                    <div class="col-md-3 m-auto">
                        <img src="https://www.logicbus.com.mx/imagenes/79/accinfra.jpg" class="card-img"
                            alt="Accesorios">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title text-center"><a class="blue link-orange"
                                    href="./acc-infrarrojos">Accesorios</a>
                            </h3>
                            <p class="card-text">Accesorios para sensores de temperatura infrarrojos de cualquier tipo.
                            </p>
                        </div>
                    </div>
                    <div class="col-2 m-auto">
                        <a class="btn btn-orange" target="_blank"
                            href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-accesorios"><i
                                class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>