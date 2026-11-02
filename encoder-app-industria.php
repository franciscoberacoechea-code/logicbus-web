<?php
require ("admin/config.php");
include ("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <title>Encoders: Aplicaciones en la Industria - Logicbus S.A de C.V.</title>
    <meta name="description"
        content="Dentro de la industria son muy utilizados los encoders para el control de movimiento, específicamente por fabricantes de cintas transportadoras, de máquinas personalizadas.">
    <!-- Descripcion delo tema -->
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords"
        content="encoder,control movimiento,manejo de materiales, industris, embalaje, impresion y etiquetado, maquinas personalizadas,logicbus">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <?php require ("libreria/header.view.php"); ?>
    <div>
        <div class="gridContArriba">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa"
                                class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Encoders: Aplicaciones en la Industria
                        </li>
                    </ol>
                </nav>
                <div align="center">
                    <img class="img-fluid" src="https://www.logicbus.com.mx/imagenes/articulo/banner-encoders.png"
                        alt="Encoders, Aplicaciones en la Industria" title="Encoders, Aplicaciones en la Industria">
                </div>
                <h2 class="subtitle blue text-center my-5">Introducción</h2>
                <p class="paragraph text-justify mt-5">

                    Los encoders son ampliamente utilizados en diversas industrias, como la fabricación de cintas
                    transportadoras, maquinaria personalizada, sistemas de manejo de materiales, impresión y etiquetado,
                    y
                    embalaje. También se emplean en aplicaciones de corte, trazado, robótica, empaquetado,
                    automatización,
                    clasificación y relleno, entre otras. Estos dispositivos son clave para el control preciso del
                    movimiento en estas aplicaciones, lo que conduce a una mayor eficiencia y optimización en la
                    industria.
                </p>

            </div>
        </div>
        <br>
        <div class="divCentrado paragraph text-justify mt-5">
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Encoders-en-la-industria.png"
                    class="image_productos" class="img-responsive" width="40%" alt="Figura 1. Encoders en la industria"
                    title="Figura 1. Encoders en la industria"></center>
            <center><span>Figura 1. Encoders en la industria</span></center><br>

            <h2 class="subtitle blue text-center my-5">¿Qué es un encoder?</h2>
            <p class="paragraph text-justify">
                Antes de entrar a sus aplicaciones, debemos de partir definiendo el concepto de encoder. Por lo tanto,
                un encoder es un dispositivo de detección que proporciona una respuesta. Los Encoders convierten el
                movimiento en una señal eléctrica que puede ser leída por algún tipo de dispositivo de control en un
                sistema de control de movimiento, tal como un mostrador o PLC. <br> El encoder envía una señal de
                respuesta que puede ser utilizado para determinar la posición, contar, velocidad o dirección. Un
                dispositivo de control puede usar esta información para enviar un comando para una función particular.
                De igual manera este transductor rotativo, por medio de una señal eléctrica generalmente pulso o una
                señal senoidal, nos indica el ángulo girado. Además este sensor rotatorio al conectarlo mecánicamente
                con una rueda o un husillo, también permitirá medir distancias lineales. Para comprender un poco más el
                funcionamiento de los encoders , leer el siguiente articulo.
                <span><a href="https://www.logicbus.com.mx/info_encoders">Funcionamiento y tipos de
                        Encoders</a></span>
            </p>

            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Imagen-descriptiva-de-la-estructura-de-un-encoder.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 2. Imagen descriptiva de la estructura de un encoder"
                    title="Figura 2. Imagen descriptiva de la estructura de un encoder"></center>
            <center><span>Figura 2. Imagen descriptiva de la estructura de un encoder</span></center>

            <h2 class="subtitle blue text-center my-5">Aplicaciones en la industria</h2>

            <ul>
                <li>
                    <p class="med mt-5">UTILIZADO POR FABRICANTES DE CINTAS TRANSPORTADORAS</p>
                </li>
            </ul>

            <p class="paragraph text-justify">En este caso los productos que realizan estos fabricantes son enfocados
                para el manejo de materiales, estos productos tienen diversas formas desde bandas, listones, rodillos,
                etc., empaquetados con diferentes combinaciones de motor y accionamiento. <br> Como la mayoría de los
                transportadores no utilizan un servomotor que tiene un dispositivo de posicionamiento de realimentación.
                Además de estar compuestos con motores de CA o CC estándar y sin dispositivo de retroalimentación que
                hace que el paquete de control sea un sistema OPEN-LOOP. Por lo cual, si se requiere que el fabricante
                ofrezca la opción de un sistema de retroalimentación eléctrica CERRADO-BUCLE, esto llevara a la
                utilización de codificadores rotativos (encoder) y que estén montados en el eje de transmisión o de la
                fricción acoplada a la correa para medir la velocidad o la posición.</p>
            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-de-encoder-para-la-fabricacion-de-bandas.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 3. Aplicación de encoder para la fabricación de bandas"
                    title="Figura 3. Aplicación de encoder para la fabricación de bandas"></center>
            <center><span>Figura 3. Aplicación de encoder para la fabricación de bandas</span></center><br>

            <ul>
                <li>
                    <p class="med mt-5">MANEJO DE MATERIALES</p>
                </li>
            </ul>

            <p class="paragraph text-justify">Los transportadores se utilizan para transferir material de un lugar a
                otro en casi todas las partes de un sistema de manejo de materiales. El codificador proporciona
                retroalimentación eléctrica al accionamiento del motor del transportador. El codificador se usa para
                calcular la velocidad (tachuela) y proporcionar información de posición. Los codificadores están
                especialmente diseñados para montarse por encima o por debajo del transportador y montarse en el
                cinturón. También se pueden montar en el motor o en el eje.</p><br />
            <p class="paragraph text-justify">Gracias a las aplicaciones que ha ido teniendo el Big Data hoy en día el
                proceso de buscar posicionamiento y gusto hacia los mercados de negocios, es práctico y más aún por los
                equipos que existen hoy en día para la adquisición y procesamiento de datos que ayudan a llevar a cabo
                estos cálculos estadísticos tediosos y en ocasiones complejos, dependiendo del tamaño de los datos. Al
                mismo tiempo en los estudios de mercado actuales se pueden tener en forma rápida retroalimentación del
                mismo, incluso a nivel mundial sin tener que esperar mucho tiempo, que era lo que se hacía antes con un
                “focus group” o encuesta.</p>

            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-de-encoder-en-la-industria-de-manejo-de-materiales-transporte.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 4. Aplicación de encoder en la industria de manejo de materiales (transporte)."
                    title="Figura 4. Aplicación de encoder en la industria de manejo de materiales (transporte).">
            </center>
            <center><span>Figura 4. Aplicación de encoder en la industria de manejo de materiales (transporte).</span>
            </center>
            <ul>
                <li>
                    <p class="med mt-5">INDUSTRIA DE IMPRESIÓN Y ETIQUETADO</p>
                </li>
            </ul>
            <p class="paragraph text-justify">La industria de impresión y etiquetado utiliza muchos tipos de maquinaria
                automatizada. Los codificadores rotativos son cruciales para todas estas aplicaciones para proporcionar
                retroalimentación de posición y velocidad. Se utilizan en procesos tales como: impresión por chorro de
                tinta, guía de banda, alimentadores de papel, alineación y posicionamiento de etiquetas, automatización
                de alta velocidad, alineación de etiquetas en papel y la coordinación de ejes de rodillos múltiples.</p>
            <p class="paragraph text-justify"> El equipo de impresión generalmente mide y genera imágenes con
                resoluciones medidas en puntos por pulgada (DPI) o píxeles por pulgada (PPI). La resolución es una
                palabra clave para la industria de la impresión. Los impulsos de coincidencia (PPR) por revolución
                frente a (DPI) son muy importantes para optimizar la alineación correcta de una aplicación de impresión.
                Cuando se especifican codificadores rotativos para ciertas aplicaciones de impresión, la resolución del
                disco generalmente se correlaciona con la resolución de impresión. Por ejemplo, muchos sistemas
                industriales de impresión por chorro de tinta emplean un codificador giratorio para rastrear el
                movimiento del objeto a imprimir. Esto permite que el cabezal de impresión aplique la imagen a una
                ubicación controlada con precisión en el objeto.</p>

            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-de-los-encoders-en-la-industria-de-impresion-y-etiquetado.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 5.  Aplicación de los encoders en la industria de impresión y etiquetado."
                    title="Figura 5.  Aplicación de los encoders en la industria de impresión y etiquetado.">
            </center>
            <center><span>Figura 5. Aplicación de los encoders en la industria de impresión y etiquetado.</span>
            </center>
            <ul>
                <li>
                    <p class="med mt-5">FABRICANTES DE MAQUINAS PERSONALIZADAS</p>
                </li>
            </ul>
            <p class="paragraph text-justify">Los fabricantes de máquinas personalizadas fabrican máquinas altamente
                integradas y personalizadas en muchos sectores industriales, como el médico, el automotriz, el de
                alimentos y bebidas, y el manejo de materiales. Estas máquinas se utilizan en procesos tales como
                ensamblaje, pruebas, inspección, fabricación ajustada y muchos otros procedimientos de automatización.
                Todo el equipo producido por un generador de máquina personalizado requiere algún tipo de dispositivo de
                retroalimentación de posición o velocidad para determinar la posición de rotación de varias partes. En
                la industria del embalaje, el equipo / maquinaria generalmente implica un movimiento de rotación. Esto
                incluye movimientos o procedimientos tales como indexación, transporte, encolado o sellado, recortes
                voladores, así como otras funciones de la máquina que ofrecen eje giratorio. Para controlar todos estos
                procedimientos de embalaje y mantener la precisión, se necesita un codificador rotatorio.
            </p>

            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-de-encoders-para-fabricar-maquinas-especiales.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 6. Aplicación de encoders para fabricar maquinas especiales"
                    title="Figura 6. Aplicación de encoders para fabricar maquinas especiales"></center>
            <center><span>Figura 6. Aplicación de encoders para fabricar maquinas especiales</span></center>
            <ul>
                <li>
                    <p class="med mt-5">Embalaje</p>
                </li>
            </ul>
            <p class="paragraph text-justify">En la industria del embalaje, el equipo / maquinaria generalmente implica
                un movimiento de rotación. Esto incluye movimientos o procedimientos tales como indexación, transporte,
                encolado o sellado, recortes voladores, así como otras funciones de la máquina que ofrecen eje
                giratorio. Para controlar todos estos procedimientos de embalaje y mantener la precisión, se necesita un
                codificador rotatorio.<br> Logicbus nos presenta los siguientes encoder de la marca Tri-Tronics que
                ofrece a esta industria muchas opciones que funcionarán para varias aplicaciones adecuados para llevar a
                cabo esta función.
            </p>
            <center><img
                    src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-del-encoder-en-la-industria-del-embalaje.png"
                    class="image_productos" class="img-responsive" width="40%"
                    alt="Figura 7. Aplicación del encoder en la industria del embalaje"
                    title="Figura 7. Aplicación del encoder en la industria del embalaje"></center>
            <center><span>Figura 7. Aplicación del encoder en la industria del embalaje</span></center><br>

            <p class="paragraph text-justify">Logicbus nos presenta los siguientes encoder de la marca Tri-Tronics que
                ofrece a esta industria muchas opciones que funcionarán para varias aplicaciones adecuados para llevar a
                cabo esta función.</p>
            <p class="paragraph text-justify">Tarjeta DAQ HAT para Raspberry Pi. 8 Entradas Analogas de terminal comun,
                12 bit, 100KS/s. Rango + -10VDC. Alimentacion: 333 V proporcionada por la Raspberry pi. Se pueden apilar
                hasta ocho dispositivos MCC 118. Raspberry Pi no incluida</p>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Imagen-del-R22.png" width="30%"
                    alt="Figura 8. Imagen del R22-P240AJB/8-30S3MW1-0"
                    title="Figura 8. Imagen del R22-P240AJB/8-30S3MW1-0"></center>
            <center><span>Figura 8. Imagen del R22-P240AJB/8-30S3MW1-0</span></center><br>

            <p class="paragraph text-justify">Un codificador incremental que usa rueda(s) de medición de precisión para
                medir directamente el movimiento de una cinta transportadora, o para medir con precisión el material en
                movimiento. Los codificadores de ruedas realizan un seguimiento más preciso de la cinta transportadora u
                otro material que los codificadores de ejes. Dos problemas con los codificadores de ejes en esta
                aplicación son:<br /> (1) El deslizamiento de la cinta transportadora en el rodillo.<br /> (2) La
                inexactitud de los diámetros de los rodillos.<br /> Ambas contribuyen a las imprecisiones que reducen la
                eficiencia general de un sistema de clasificación de manejo de materiales o un sistema de medición de
                precisión.<br /> A diferencia de los codificadores de ruedas que se desplazan directamente sobre el
                material en movimiento, utilizando una banda de rodamiento que tiene un alto coeficiente de fricción y
                tienen un par de arranque muy bajo que prácticamente no produce deslizamiento de las ruedas en la
                correa. Además, las ruedas se muelen con precisión con tolerancias exactas.<br> Para la industria de
                impresión se utilizan codificadores incrementales con ruedas para la medición de precisión para medir
                directamente el movimiento de un conjunto de rodillos de impresión o etiquetado. Los codificadores de
                rueda se pueden montar directamente en un rodillo impulsor para determinar la velocidad o la
                retroalimentación de posicionamiento. Además, las ruedas están rectificadas con precisión a la
                tolerancia exacta.</p>

            <p class="med mt-5">Serie R</p>
            <p class="paragraph text-justify">Los codificadores de eje están planeados para acoplamiento directo a un
                eje de dispositivo. Por lo tanto, generan un pulso de salida específico para cada revolución de ese eje
                del Dispositivo. Para adaptar o ajustar la desalineación angular y rotacional entre dos ejes;
                Tri-Tronics recomienda un acoplamiento de eje flexible o similar. No se recomienda el montaje directo y
                puede minimizar o reducir la vida útil del cojinete. El R20 incorpora cojinetes de alta resistencia que
                se pueden usar para accionar un eje de distribución y / o sistema de poleas.</p>

            <p class="med mt-5">Serie HS</p>
            <p class="paragraph text-justify">Los codificadores de eje de orificio están diseñados con un eje pasante o
                un eje con agujero ciego, y están diseñados para montarse directamente en un motor u otro eje. Esto
                elimina la necesidad de un acoplamiento de eje a eje y adaptador de montaje, lo que permite ahorrar
                espacio y dinero. El codificador "flota" en el eje del motor. Un anclaje o soporte de montaje flexible
                evita que el codificador gire, pero se adapta a la desalineación eje a eje.</p>

            <h2 class="text-center title blue">Conclusiónes</h2>

            <p class="paragraph text-justify">Es conveniente utilizar encoder a codificadores de ejes debido a que
                evitamos problemas de precisión de medidas en diámetros de los rodillos utilizado en las cintas
                transportadoras, además de otorgarnos un seguimiento más preciso si requerimos realizar el transporte de
                los equipos u productos que producimos. Optimizando aún más su industria Optimizando aún más su
                industria.</p>

            <p class="text-center blue"><a class="link-orange"
                    href="https://www.logicbus.com.mx/pdf/articulos/encoder-industria.pdf" target="_blank"
                    title="Encoders, Aplicaciones en la Industria " alt="Encoders, Aplicaciones en la Industria "> Leer
                    Artículo Completo </a></p>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require ("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>