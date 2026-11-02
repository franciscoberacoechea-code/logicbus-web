<?php require("admin/config.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Logicbus | Soluciones tecnológicas a través de videos</title>
    <meta name="description" content="Logicbus, tu aliado para transformar tu negocio con soluciones tecnológicas personalizadas. Explora nuestra biblioteca de videos informativos y tutoriales.">

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
    <h1 class="sr-only"> videos</h1>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <!-- Menu banner -->
    <div class="card text-white">
        <img src="images/banner/banner-logicbus-online.jpg" class="card-img gridoOcultarMB" alt="Banner Videos">
        <img src="images/banner/mobile/mini-banner-logicbus-online.jpg" class="card-img gridoOcultarPC" alt="Banner Videos">
        <div class="card-img-overlay">
            <div class="horizontal-list card-text">
                <a class="med link-white-to-orange shadow-text" href="https://www.youtube.com/@LogicbusVideos/videos" target="_blank">Videos</a>
                <div class="sm-orange-circle"></div>
                <a class="med link-white-to-orange shadow-text" href="https://youtube.com/playlist?list=PL9EhLTarrD6N76DMir4JgZ71ZlYeF7-cK" target="_blank">Webinarios</a>
                <div class="sm-orange-circle"></div>
                <a class="med link-white-to-orange shadow-text" href="https://youtube.com/playlist?list=PL9EhLTarrD6PODaODvz0uPyz9nZco8Y1j" target="_blank">Unboxing</a>
                <div class="sm-orange-circle"></div>
                <a class="med link-white-to-orange shadow-text" href="https://youtube.com/playlist?list=PL9EhLTarrD6ODkU7Pa_d5H9Iqm1n07Pgk" target="_blank">Tutoriales</a>
                <div class="sm-orange-circle"></div>
                <a class="med link-white-to-orange shadow-text" href="https://www.logicbus.com.mx/blog/">Blog</a>
            </div>
        </div>
    </div>
    <!--Menu banner fin -->

    <section class="py-5">
        <div class="container text-center my-3">
            <h2 class="title blue text-center">¡Bienvenido a nuestra sección de videos!</h2>
            <p class="paragraph light-black text-justify">Descubre el fascinante mundo de nuestros productos a través de unboxings detallados que revelan su funcionalidad y potencial para impulsar tu industria. Sumérgete en una amplia gama de contenido en video que abarca nuestras marcas, productos y soluciones tecnológicas. No te pierdas nuestros webinars y seminarios dirigidos por ingenieros expertos, donde profundizarás en la automatización industrial.</p>
            <p class="paragraph light-black text-justify">¡Explora nuestra sección de videos y descubre todo lo que tenemos para ti!</p>
            <a class="button-text" href="https://www.youtube.com/@LogicbusVideos" target="_blank"><button class="button btn btn-orange rounded-pill">¡Visitanos en Youtube!</button></a>
        </div>
        <div class="container">
            <div class="embed-container">
                <iframe src="https://www.youtube.com/embed/FojmBCa1W4I?si=6Q4Wg9HCpLZfa4Ux" title="Logicbus - YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="container  text-center">
            <h2 class="title blue">Capacítate con nosotros</h2>
            <p class="paragraph blue">¿Quieres aprender nuevas habilidades y ampliar tus conocimientos en tecnología y automatización?</p>
            <p class="paragraph blue">¡Entonces no te pierdas los cursos y webinars gratuitos de Logicbus!</p>
        </div>
        <div class="pb-3">
            <div class="carousel" data-flickity='{ "lazyLoad":15, "autoPlay": true, "wrapAround": true}'>
                <div class="carousel-cell novedades-carousel-cell py-3">
                    <a class="carousel-link" href="https://youtu.be/EbvSL9O6OCs?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/SEMINARIO-QUe-ES-EL-OEE-Y-CoMO-COMENZAR-A-IMPLEMENTARLO.png" alt="Seminario - ¿Qué es el OEE y cómo comenzar a implementarlo" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/BG1sb1MWqEY?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Magia-o-tecnologia-Las-zonas-de-seguridad-invisibles-de-tu-robot-AMR.png" alt="¿Magia o tecnología? - Las zonas de seguridad invisibles de tu robot AMR" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/G3sf-33ZVtI?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/WEBINAR-COMPONENTES-INTERNOS-DE-UN-AMR-LOGICBUS.png" alt="Webinar - Componentes internos de un AMR Logicbus" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/Bz3rvn0tM_I?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/WEBINAR-SENSORES-DE-FUERZA-LOGICBUS.png" alt="Webinar - Sensores de fuerza" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/2_SqdfrMuwk?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Bloqueo-y-reasignacion-de-funciones-de-teclas-en-windows-de-teclados.png" alt="Webinar - Bloqueo y reasignación de funciones de teclas en Windows de teclados" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/oODYfSQy058?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Control-de-PLCs-Fatek-por-medio-de-comandos-ASCII.png" alt="Control de PLCs FATEK por medio de comandos ASCII" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/l_xa-4KupwQ?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Arma-tramas-Modbus-con-codigo-ASCII.png" alt="Arma tramas MODBUS con código ASCII" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/Ss_pMLn2vnQ?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Como-funcionan-un-sensor-de-temperatura-infrarrojo.png" alt="¿Cómo funciona un sensor de temperatura infrarrojo?" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/HAvcTczZ_ps?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Conoce-los-codigos-de-deteccion-de-errores-CRC-y-Checksum.png" alt="Conoce los errores de detección de códigos CRC y CHECKSUM" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://youtu.be/GR3IlF_wx-Y?feature=shared" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/Uso-del-Display-LCD-16x2-en-Arduino-controllino.png" alt="Uso del display LCD 16x2 en Arduino/Controllino" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.youtube.com/watch?v=lhKzMPJW7UY" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/webinario-que-es-un-osciloscopio-y-como-funciona-siglent.jpg" alt="Webinario Gratuito: Lectura de Celdas de Carga desde un PLC" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.youtube.com/watch?v=0CLyWR3csCM" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/webinario-gratuito-lectura-de-celdas-de-carga-desde-un-plc.jpg" alt="Webinario ¿Qué es un Osciloscopio y cómo funciona? - Siglent" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.youtube.com/watch?v=WYCCxSjWQrc" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/webinario-que-son-las-celdas-de-carga-y-como-funionan-futek.jpg" alt="Webinario ¿Qué son las Celdas de Carga y Cómo Funcionan? - Futek" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.youtube.com/watch?v=bv8uQYNNDZI" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/webinar-celdas-de-carga.jpg" alt="Webinar - Celdas de Carga" /></a>
                </div>
                <div class="carousel-cell novedades-carousel-cell">
                    <a class="carousel-link" href="https://www.youtube.com/watch?v=tJ9CEecEEng" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/webinar-protocolos-diferentes-como-los-puedo-comunicar.jpg" alt="Webinar - Protocolos diferentes.... ¿Cómo los puedo comunicar???" /></a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5">
        <h2 class="title blue h1">Listas de reproducción</h2>
        <div class="cards-categoria">
            <div class="card-categoria">
                <img src="images/videos/logicbus-te-explica.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Logicbus te explica</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Aprende de los expertos</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6PkMzMSr_gDwig29SwfHrbS" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
            <div class="card-categoria">
                <img src="images/videos/casos-de-exito.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Casos de Éxito</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Proyectos</li>
                        <div class="sm-orange-circle"></div>
                        <li>Aplicaciones</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6NBBeIETJlFalf9CODrbwre" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
            <div class="card-categoria">
                <img src="images/videos/nuevos-lanzamientos.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Nuevos lanzamientos</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Últimas actualizaciones en la industria</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6PXwtq0uYtM0IL5apA4zED6" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
            <div class="card-categoria">
                <img src="images/videos/aplicaciones.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Aplicaciones</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Soluciones innovadoras y eficientes</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6MKKgcvJ0Y643OIv-JT_-UG" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
            <div class="card-categoria">
                <img src="images/videos/PRODUCTOS.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Productos</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Unboxing</li>
                        <div class="sm-orange-circle"></div>
                        <li>Reseñas</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6MS7cPQKQExfurBLfmgKYZJ" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
            <div class="card-categoria">
                <img src="images/videos/EVENTOS.png" width="400px">
                <div class="card-desc">
                    <p class="concept white">Eventos</p>
                    <hr>
                    <div class="categoria-list mb-3">
                        <li>Cursos</li>
                        <div class="sm-orange-circle"></div>
                        <li>Webinarios</li>
                    </div>
                    <a class="button-text mt-5" href="https://youtube.com/playlist?list=PL9EhLTarrD6NSe5Vd4N9u9jrlQi74kyWP" target="_blank"><button class="button button-circle-orange">Ver videos</button></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center">
            <h3 class="title blue h2">Conoce las marcas y productos que tenemos para ti</h3>
            <p class="paragraph ligh-black">Descubre nuestras marcas y productos diseñados para satisfacer tus necesidades de automatización industrial. Con una amplia gama de marcas disponibles, ¡tenemos todo lo que necesitas!</p>
            <p class="paragraph ligh-black">Explora nuestras listas de reproducción y descubre la diversidad de productos que tenemos para ofrecerte.</p>
        </div>
        <div class="box-slider container-fluid">
            <div class="slider">
                <h4 class="text-center subtitle blue">Adquisición de datos</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6O1KQdCsLSX1gFxHseWhH6C" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/ela.jpg" alt="Ela innovation" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6ME58Umx1IRpmAhkYKCFfS0" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/RFID.jpg" alt="RFID Inc" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Oo1dSneFQFAFM_lYHq0QFn" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/SENECA.jpg" alt="SENECA" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MkUn1SuS4GfH974mZqP1Uc" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/DATA-TRANSLATION.jpg" alt="Data Translation" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NxYIO0Z4pnhACSVGVLTrxC" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/SEALEVEL.jpg" alt="Sealevel" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Oo1dSneFQFAFM_lYHq0QFn" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/mcc.jpg" alt="MCC" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Oo1dSneFQFAFM_lYHq0QFn" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/ICPDAS.jpg" alt="ICP DAS" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">Celdas de carga y electronica de pesaje</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 1, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Oo1dSneFQFAFM_lYHq0QFn" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/FUTEK.jpg" alt="Futek" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">Computadoras industriales</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 5, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6OfoMcMfVtH5xQzHJbNk0mL" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/TAICENN.jpg" alt="Taicenn" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6P_0f145r1CneMwH8jIMNr9" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/WINSONIC.jpg" alt="Winsonic" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6M2G8yl9nbAUjZcXHK6KEUq" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/WINMATE.jpg" alt="Winmate" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6PrTECuqqfxED1sqEK_Q94O" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/CINCOZE.jpg" alt="CINCOZE" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MIOw5sdqPMvNlSpj995Z1Z" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/TECLADOS.jpg" alt="Teclados Industriales" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">PLC's, gateways y SCADA</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 10, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MaMk3yS9DSvbPNVv83zYea" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/NCD.jpg" alt="NCD" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NmBsUqadzoAhGecImRy8kJ" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/CIMON.jpg" alt="CIMON" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6M-PcSoEOzgT5cYpwSHQZ18" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/RTA.jpg" alt="RTA" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NbkAbB6JOSqpkr_X6jKEMS" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/TERACOM.jpg" alt="Teracom" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6OvBRcKfqYccDg1KtZDgi0j" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Applied.jpg" alt="Applied Motion" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MUaGoyfyvJFPJTUbMoHcQk" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/RTA.jpg" alt="Real Time Automation" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NpKpPG0TjH1J5-Gf40oaTM" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/FATEK-PLC.jpg" alt="FATEK" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Oq2wmI6fpRECMkWTI3DPBs" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Fatek-hmi.jpg" alt="Serie HMI de Fatek - FATEK" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NslqpS3HNhY-s96zzA9vNO" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/NCD.jpg" alt="National Control Devices" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6PptTCIj6yceyn2Y_B3oxG2" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/controllino.jpg" alt="Controllino" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">Registradores y graficadores de datos</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 4, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MFqls0JbnOR_F-BdWH6qCc" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Graphtec.jpg" alt="Graphtec" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6MolBYOGqu4XEM8TdGcehrz" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Pico.jpg" alt="Pico Technology" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NeZ78tHRL_2wdAQ0GrXEx3" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Madgetech.jpg" alt="MADGETECH" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6OiioXL2k4vU2_qA_idNrOj" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Siglent.jpg" alt="Siglent" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">Robótica y Sistemas de apoyo para carga</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 3, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6PyfWW41jgEvfbH5d5ys3Xn" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/YOUIBOT.jpg" alt="Youibot" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Pv9EGO6IfsU5xLYeYfshHr" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/SIASUN.jpg" alt="SIASUN" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6M9jBA5NEdOrg3wBAwFMXeI" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/Brooks.jpg" alt="Brooks" /></a>
                    </div>
                </div>
            </div>

            <div class="slider">
                <h4 class="text-center subtitle blue">Sensores</h4>
                <div class="carousel" data-flickity='{ "lazyLoad": 6, "autoPlay": true, "wrapAround": true }'>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NEcVBW7shIg9ZIyb6Awfvr" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/WAYCON.jpg" alt="Waycon" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6PHcCjG-MjWsyiW8Z6c9Ghc" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/STI.jpg" alt="STI Vibration Monitoring Inc." /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6Nr71D5FDrM0xlN_B_q3_JI" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/calex.jpg" alt="Calex" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6NCEqakZxgHqLGcBio605fl" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/REIGNPOWER.jpg" alt="Reign Power" /></a>
                    </div>
                    <div class="carousel-cell novedades-carousel-cell">
                        <a class="carousel-link" href="https://youtube.com/playlist?list=PL9EhLTarrD6PEG5zfzMUF8q_DXwgEjBMa" target="_blank"><img class="carousel-cell-image" data-flickity-lazyload="images/videos/unidades-negocio/TRI-TRONICS.jpg" alt="Tri-Tronics" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require("libreria/footer.view.php"); ?>

    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
</body>

<?php echo $var_footer; ?>

</html>