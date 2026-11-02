<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>
    <title>Sensores, Aplicaciones en la industria- Logicbus S.A de C.V.</title>
    <meta name="description" content="Sensores es un dispositivo eléctrico que responde al cambio en la intensidad de la luz. Estos sensores requieren de un componente emisor que genera la luz, y un componente receptor que percibe la luz generada por el emisor. ">
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
    <?php require("libreria/header.view.php"); ?>
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
                        <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sensores, Aplicaciones en la Industria</li>
                    </ol>
                </nav>

                <div align="center">
                    <h1 class="title blue">Sensores, Aplicaciones en la Industria</h1>
                    <img src="https://www.logicbus.com.mx/imagenes/articulo/Sensores-Aplicaciones-en-la-Industria.png" class="image_productos" class="img-responsive" width="80%" alt="Encoders, Aplicaciones en la Industria" title="Encoders, Aplicaciones en la Industria">
                </div><br>

                <p class="paragraph text-justify">Anteriormente la detección y clasificación de productos en las industrias era utilizando el recurso humano, en donde este tenia que estar al pendiente de que si el producto cumplía con las características para su proceso. Esto se ve principalmente en las industrias de exportación de alimentos, especialmente fruta, verificando que el producto es apto para su venta. Lo cual se realizaba tomando la característica especifica de su tonalidad. De igual manera en la industria farmacéutica se realizaba el mismo proceso para verificar el contenido de los envases de vidrio, para verificar su contenido. Hoy en día existen sensores que facilitan este proceso, estos son los sensores de colores y los de detección de transparencias.</p><br>
            </div>
        </div>
        <div class="container paragraph text-justify">
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Demo-realizada-en-Logicbus-acerca-de-la-utilizacion-de-sensores-de-colores-y-detecion-de-transparencias.png" class="image_productos" class="img-responsive" width="40%" alt="Demo sensores de colores y deteción de transparencias" title="Demo de sensores de colores y deteción de transparencias"></center>
            <center><span>Figura 1. Demo realizada en Logicbus acerca de la utilización de sensores de colores y deteción de transparencias</span></center>

            <div align="center">
                <h2 class="subtitle blue text-center my-5">¿QUÉ ES UN SENSOR?</h2>
            </div>
            <p align="justify">Al hablar de sensor se hace referencia al dispositivo que proporciona una respuesta (normalmente mediante la generación de una señal eléctrica) frente a estímulos o señales físicas o químicas.
            </p>
            <div align="center">
                <h2 class="subtitle blue text-center my-5">Características de diseño</h2>
            </div>
            <p align="justify">Hacen referencia a las interfaces eléctricas del sensor considerado éste como una «caja negra».</p>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Diseno-de-un-sensor.png" class="image_productos" class="img-responsive" width="40%" alt="Figura 2. Diseño de un sensor" title="Figura 2. Diseño de un sensor"></center>
            <center><span>Figura 2. Diseño de un sensor</span></center><br>
            <div align="center">
                <h2 class="subtitle blue text-center my-5">CLASIFICACIÓN DE LOS SENSORES</h2>
            </div>
            <ul>
                <p class="med mb-3">Según aporte de energía:</p>
                <li> Moduladores: precisan una fuente externa de alimentación. </li>
                <li> Generadores: toman únicamente la energía del medio donde miden. </li>
                Según la señal de salida
                <li> Analógicos: la salida varía de forma continua. Normalmente la información está en la amplitud. Cuando la información está en la frecuencia se denominan “cuasi-digitales”. </li>
                <li> Digitales: la salida varía en pasos discretos. </li>
                Según el modo de funcionamiento.
                <li> Deflexión: la magnitud medida genera un efecto físico (deflexión). </li>
                <li> Comparación: se intenta mantener nula la deflexión mediante la aplicación de un efecto opuesto al generado por la magnitud medida. </li>
                <li> Según la relación entrada-salida: orden cero, 1er orden, 2º orden </li>
                <li> Según el principio físico: resistivo, capacitivo, inductivo, termoeléctrico, piezoeléctrico.
                </li>
                <li> Según la magnitud media: temperatura, presión, aceleración, pH.</li>
            </ul>
            <p class="med mb-3">SENSOR DE COLOR</p>
            <p align="justify">Dentro de la clasificación de sensores antes presentda, existe uno en particular, el cual es el sensor de colo. Se trata de un sensor digital que puede detectar el color o la intensidad de la luz que entra por la pequeña ventana de la cara del sensor. Dispone de 3 modos:<br>
                <strong>Modo color</strong> Reconoce colores: negro, azul, verde, amarillo, rojo, blanco y sin color. Se aplica para programar una clasificación de objetos de colores o para detenerse cuando detecta el color.
                <strog>Modo intensidad de luz reflejada</strog><br> Mide la intensidad de la luz reflejada que emite su lámpara emisora de luz color rojo. El sensor utiliza la escala de. Es importante que el sensor se sostenga en ángulo recto cerca de la superficie que se examina pero sin tocarla. Esto permite programar un robot para moverse sobre una superficie blanca hasta detectar una línea oscura o para interpretar una tarjeta con código de color.<br>
                <strong>Modo intensidad de luz ambiental.</strong> Mide la intensidad de luz que entra por su ventana procedente de su entorno, como por ejemplo luz solar o el haz de una linterna. Devuelve un valor de 0 (muy oscuro) hasta de 100 (muy luminoso). De esta forma es posible programar que un robot emita una alarma al salir el sol por la mañana o para detenerse si las luces se apagan.
            </p>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Diseno-de-un-sensor.png" class="image_productos" class="img-responsive" width="40%" alt="Figura 2. Diseño de un sensor" title="Figura 2. Diseño de un sensor"></center>
            <center><span>Figura 2. Diseño de un sensor</span></center><br>


            <p class="med my-5">APLICACIÓN EN LA INDUSTRIA</p>

            <p align="justify">A continuación se muestra un video que ejemplificara aún más esta rama de aplicación. Los sensores e colores son utilizados en las industrias de fabricación y transporte de producto para realizar la clasificación de estos, tomando en cuenta alguna característica referente al color que contenga el producto. Esta característica puede ser el color de la tapa, por el color de etiqueta, por el color de producto, incluso verificar el contenido de producto por medio de sensores que reconocen las transparencias, de igual forma se verifica el sello de control de calidad. Para comprender un poco más como ayudan los sensores de colores a llevar a cabo estos procesos.<br>
                <strong>Proceso de clasificación de productos por el color de la tapa del envase.</strong><br> En las industrias que se dedican a la fabricación de cremas, shampoos, y artículos similares. Específicamente en el proceso de empaquetado, se apoyan de sensores de colores para realizar la clasificación de productos durante el transcurso por las bandas transportadoras para organizarlos en grupos dependiendo de acuerdo al color de la tapa del envase, lo que conlleva al a facilidad de empaquetado. Con esto en este proceso ya no se requiere del recurso humano para realizar esta clasificación manual, como se realizaba tiempo atrás, lo cual se refleja en tiempo reducido de realización de proceso.
            </p>

            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacionde-sensores-para-la-clasificacion-de-productos.png" class="image_productos" class="img-responsive" width="40%" alt="Figura 3. Aplicación de sensores para la clasificacion de productos." title="Figura 3. Aplicación de sensores para la clasificacion de productos."></center>
            <center><span>Figura 3. Aplicación de sensores para la clasificacion de productos.</span>
            </center>
            <p>

            <p class="med my-5">Modelos</p>
            <strong>Guía de corto alcance (CW-1 / CW-1S)</strong> La versión de corto alcance es útil cuando el color es uniforme en todo el producto: cuando el producto es pequeño; cuando el objetivo es una marca de registro de color; o cuando el objetivo es un color específico en una etiqueta. Las aplicaciones que se pueden resolver con los modelos de corto alcance son el color de la tapa, las marcas de registro, la orientación de la etiqueta, la codificación del color farmacéutico, la clasificación de los tote, etc.<br> La versión de corto alcance permite una selección de velocidad versus resolución para resolver aplicaciones de color de alta velocidad, así como también bajos niveles de cambios de color.
            </p>

            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Diseno-de-un-sensor.png" class="image_productos" class="img-responsive" width="40%" alt="Figura 2. Diseño de un sensor" title="Figura 2. Diseño de un sensor"></center>
            <center><span>Figura 2. Diseño de un sensor</span></center><br>

            <div align="center">
                <p class="med my-5">APLICACIÓN EN LA INDUSTRIA </p>
            </div><br>

            <p align="justify">A continuación se muestra un video que ejemplificara aún más esta rama de aplicación.
            </p>

            <p>Los sensores e colores son utilizados en las industrias de fabricación y transporte de producto para realizar la clasificación de estos, tomando en cuenta alguna característica referente al color que contenga el producto. Esta característica puede ser el color de la tapa, por el color de etiqueta, por el color de producto, incluso verificar el contenido de producto por medio de sensores que reconocen las transparencias, de igual forma se verifica el sello de control de calidad. Para comprender un poco más como ayudan los sensores de colores a llevar a cabo estos procesos.<br>
                <strong>Proceso de clasificación de productos por el color de la tapa del envase.</strong><br> En las industrias que se dedican a la fabricación de cremas, shampoos, y artículos similares. Específicamente en el proceso de empaquetado, se apoyan de sensores de colores para realizar la clasificación de productos durante el transcurso por las bandas transportadoras para organizarlos en grupos dependiendo de acuerdo al color de la tapa del envase, lo que conlleva al a facilidad de empaquetado. Con esto en este proceso ya no se requiere del recurso humano para realizar esta clasificación manual, como se realizaba tiempo atrás, lo cual se refleja en tiempo reducido de realización de proceso.
            </p>

            <p align="justify"><strong>Control del procesador de color</strong><br> Para una industria dedicada a alimentos se debe de verificar la cocción del producto final, y esto depende del color de cocción. Cuando el producto tenga el tono de cocción adecuado, pasa al siguiente proceso si no se retira. El proceso es similar en la clasificación de frutas, en donde se verifica si esta adecuado para su venta y si no se retira.
            </p>

            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Imagen-del-sensor-ColorWise.png" class="image_productos" class="img-responsive" width="40%" alt="Figura 4. Imagen del sensor ColorWise" title="figura 4. Imagen del sensor ColorWise"></center>
            <center><span>Figura 4.Imagen del sensor ColorWise</span></center><br>

            <p align="justify">Logicbus ofrece los siguientes sensores de la marca Tritronics que realizan estas funciones.
            </p>

            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Aplicacion-de-encoder-en-la-industria-de-manejo-de-materiales-transporte-2.png" class="image_productos" class="img-responsive" width="30%" alt="Figura 5. Aplicación de encoder en la industria de manejo de materiales (transporte)" title="Figura 5. Aplicación de encoder en la industria de manejo de materiales (transporte)">
            </center>
            <center><span>Figura 5. Aplicación de encoder en la industria de manejo de materiales (transporte)</span></center><br>

            <p align="justify">El sensor de color con más funciones disponible. Diseñado para funcionar tan bien como un instrumento o espectrómetro, este sensor puede resolver las aplicaciones de color más difíciles a mayor velocidad que las cámaras a color o el producto competitivo de precio más cercano. El monitor de 4 canales proporciona una confirmación visual del rendimiento sin tener que cambiar las selecciones de canal o tocar el sensor de ninguna manera. Al proporcionar una opción en velocidad versus resolución, este sensor pone los controles del rendimiento del sensor en manos del operador; permitiendo más soluciones de aplicaciones y eliminando los límites que solo la velocidad o la resolución pueden ofrecer.<br> Características y Opciones:
            <ul>
                <li>4 salidas digitales (NPN o PNP)</li>
                <li>Monitor de 4 canales para una evaluación de rendimiento de un vistazo</li>
                <li>3 salidas analógicas (XYZ o xyY); 0 a 5 VDC</li>
                <li>Tolerancia ajustable para cada canal</li>
                <li>Temporizadores ajustables para cada canal: One Shot; Con retraso; Desactivado Retraso; Pestillo
                </li>
                <li>Conector de bloqueo de 1/4 de vuelta de 1/4 de vuelta y 14 pines de 14 "con espiga o versión de cable
                </li>
                <li>Intensidad de luz LED ajustable</li>
                <li>Seleccione alta velocidad en comparación con alta resolución (solo modelo CW-1)</li>
                <li>Modelos de corto alcance y largo alcance disponibles</li>
                <li>Captura de color remota</li>
                <li>Bloqueo de botones</li>
            </ul>
            Beneficios:
            <ul>
                <li>Flexible y convertible para muchas aplicaciones de diferentes colores</li>
                <li>Útil para la clasificación del color y las aplicaciones de verificación del color todo en un solo sensor</li>
                <li>Configuración sin contacto a través de un cable de captura de color remoto (entrada seleccionable, NPN / Negativo o PNP / Positivo)</li>
                <li>Reduzca los costos y acelere las restricciones de las cámaras o espectrómetros a color</li>
                <li>Cambio digital rápido</li>
                <li>A prueba de manipulaciones con la función de bloqueo del botón</li>
            </ul>
            </p>
            <div align="center">
                <p class="med my-5">Modelos</p>
            </div><br>
            <p align="justify"><strong>Guía de corto alcance (CW-1 / CW-1S)</strong> La versión de corto alcance es útil cuando el color es uniforme en todo el producto: cuando el producto es pequeño; cuando el objetivo es una marca de registro de color; o cuando el objetivo es un color específico en una etiqueta. Las aplicaciones que se pueden resolver con los modelos de corto alcance son el color de la tapa, las marcas de registro, la orientación de la etiqueta, la codificación del color farmacéutico, la clasificación de los tote, etc.<br> La versión de corto alcance permite una selección de velocidad versus resolución para resolver aplicaciones de color de alta velocidad, así como también bajos niveles de cambios de color</p>
            <p align="justify">Logicbus nos presenta los siguientes encoder de la marca Tri-Tronics que ofrece a esta industria muchas opciones que funcionarán para varias aplicaciones adecuados para llevar a cabo esta función</p>

            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/cw-shortrange.JPG" class="image_productos" class="img-responsive" width="30%" alt="Figura 6. Gráfica del modelo de corto alcance" title="Figura 6. Gráfica del modelo de corto alcance"></center>
            <center><span>Figura 6. Gráfica del modelo de corto alcance</span></center><br>

            <p align="justify"><strong>Guía de largo alcance (CW-2)</strong> Los modelos de largo alcance se deben usar cuando la distancia al objetivo excede el rango del modelo de corto alcance, las limitaciones físicas o mecánicas requieren un rango más largo o el producto necesita un punto de luz mayor para promediar, como en aplicaciones tales como textiles, alimentos o productos granulados o superficies. El modelo de largo alcance proporciona una amplia gama de distancias focales, con un haz grande para ver sobre superficies que requieren más promedios de color sobre muchas texturas de superficies de sustrato diferentes.</p>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/cw-longrange1.JPG" class="image_productos" class="img-responsive" width="30%" alt="Figura 7. Gráfica del modelo de largo alcance" title="Figura 7. Gráfica del modelo de largo alcance"></center>
            <center><span>Figura 7. Gráfica del modelo de largo alcance</span></center><br>

            <div align="center">
                <h2 class="subtitle blue text-center my-5">CONCLUSIONES</h2>
            </div>

            <p align="justify"> En la actualidad los sensores son una herramienta de gran ayuda para las industrias, debido a que facilitan el monitoreo y detección de características de los productos a procesar. Facilitando la clasificación de productos o como se vio anteriormente en este artículo incluso son de suma importancia en el control de calidad.</p>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>