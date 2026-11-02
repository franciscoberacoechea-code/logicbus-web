<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1007518778');
    </script>

    <title>La vida útil de los equipos dentro de una planta industrial.</title>
    <meta name="description" content="Para una planta industrial la vida útil de los equipos empleados para las labores diarias, es de suma importancia, ya que son los principales medios con los cuales se cumple con los objetivos de la industria, independientemente del rango industrial">
    <!-- Descripcion del tema -->
    <meta name="author" content="Logicbus">
    <meta name="copyright" content="Logicbus S.A. de C.V.">
    <meta name="keywords" content="protocolo,zigbee, domotica, automatización, IEE802.15.4, ICPDAS, ZT-2060-IOG ,Tecnologia Inalambrica, Wifi, Bluetooth, redes, logicbus">
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
        <div class="gridContArriba ">
            <div class="griditemContA">
                <?php
                menucategorias();
                ?>
            </div>
            <div class="griditemContA">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">La vida útil de los equipos dentro de una planta industrial</li>
                    </ol>
                </nav>
                <h1 class="title blue">La vida útil de los equipos dentro de una planta industrial</h1>
                <center><img src="https://www.logicbus.com.mx/images/banner/www/la-vida-util-de-los-equipos-dentro-de-una-planta-industrial.png" class="image_productos" width="60%" alt="La vida útil de los equipos dentro de una planta industrial." title="La vida útil de los equipos dentro de una planta industrial."></center>
                <p class="paragraph text-justify mt-5"><b>Resumen:</b> En el presente artículo, se abordara un tema de gran relevancia para la industria, nos referimos a La vida útil de una planta industrial, con el fin de conocer las medidas, métodos y acciones que se deben de tomar en cuenta para mantener la vida útil de una planta industrial, así como los tipos de mantenimientos correctivo, preventivo, predictivo y predictivo total.</p>
            </div>
        </div>
        <div class="container text-justify paragraph">
            <h2 class="subtitle blue text-center mt-5 mb-3">Introducción</h2>
            <p>Para una planta industrial la vida útil de los equipos empleados para las labores diarias, es de suma importancia, ya que son los principales medios con los cuales se cumple con los objetivos de la industria, independientemente del rango industrial. Este lapso de vida está determinado por los factores de uso y ambientales a los cuales está expuesto.</p>
            <p>Siendo uno de los problemas a resolver más importantes para la planta industrial, debido a que el problema consiste, para cada equipo que compone la instalación en determinar en qué periodo de tiempo sucederá esa obsolescencia, una vez que un equipo este equipo es obsoleto, debe haber una plan para reemplazarlo, ya que la obsolescencia lleva implícito, por un lado, que no es rentable seguir explotándolo, y por el otro, que ha perdido todo su valor. ¿Cuándo sucede esto para cada equipo? Es muy difícil estimar una cifra exacta qué funcione ben en todos los caso. Por esta razón a continuación se mencionaran los factores relevantes y de igual forma se mencionaran los tipos de mantenimientos a realizar para mantener y prolongar la vida útil de los equipos.</p>
            <h2 class="subtitle blue text-center mt-5 mb-3">Factores de estimación</h2>
            <p>Algunas de las estimaciones a considerar son los siguientes:</p>
            <ul>
                <li><b>Los equipos mecánicos rotativos:</b> Bien diseñados que se adapten bien a las condiciones de trabajo y que han tenido una operación y un mantenimiento adecuado suelen alcanzar el final de su vida útil tras 15 años de servicio. El principal problema por el que los equipos mecánicos suelen quedar obsoletos son bien por el mal estado que pueden presentar por degradación no recuperable, por falta de repuestos (que es el caso más habitual) o por menor rendimiento que los equipos más actualizados.</li>
                <li><b>Los equipos estáticos:</b> Que no sufren grandes cambios de temperatura bien diseñados que se adapten bien a las condiciones de trabajo y que han tenido una operación y un mantenimiento adecuado suelen alcanzar el final de su vida útil tras 30 años de servicio. Su principal problema suele estar relacionado con la corrosión interna o externa.</li>
                <li><b>Los equipos estáticos:</b> Relacionados con procesos de combustión o de intercambio de calor (hornos, calderas o intercambiadores) bien diseñados que se adapten bien a las condiciones de trabajo y que han tenido una operación y un mantenimiento adecuado suelen alcanzar el final de su vida útil tras 15 años de servicio. Sus problemas suelen estar relacionados con el taponamiento de tubos, los pinchazos, la corrosión y en general, la degradación no recuperable.</li>
                <li><b>Los equipos eléctricos:</b> De alta y media tensión suelen alcanzar bien diseñados que se adapten bien a las condiciones de trabajo y que han tenido una operación y un mantenimiento adecuado suelen alcanzar el final de su vida útil tras 30 años de servicio, a pesar de sufrir obsolescencia tecnológica.</li>
                <li><b>Los equipos electrónicos:</b> Relacionados con la instrumentación o con el control, bien diseñados que se adapten bien a las condiciones de trabajo y que han tenido una operación y un mantenimiento adecuado suelen alcanzar el final de su vida útil más temprano, en torno a los 10 años de servicio.</li>
                <li><b>Los equipos informáticos:</b> Apenas alcanzan 5 años de servicio, y se sustituyen por obsolescencia tecnológica.</li>
                <li><b>Los vehículos:</b> Al estar afectados por diferentes tipos de degradación, suelen alcanzar el final de su vida útil tras 10 años de servicio, aunque muy frecuentemente se sustituyen antes por insuficiente fiabilidad o por falta de prestaciones en comparación con los modelos más actualizados.</li>
                <li><b>Los medios de elevación:</b> Al contener una mezcla de equipos rotativos y equipos estáticos, pueden alcanzar los 20 años, aunque en realidad lo que queda obsoleto no son los elementos estructurales sino los equipos sometidos a rotación.</li>
                <li><b>Los equipos de comunicación:</b> Apenas alcanzan los dos años, y se sustituyen por obsolescencia tecnológica. Los propios fabricantes de los equipos incluyen a veces piezas que se degradan en ese tiempo, en lo que se conoce como obsolescencia programada.</li>
            </ul>
            <h2 class="subtitle blue text-center mt-5 mb-3">Tipos de mantenimiento</h2>
            <center><img src="https://www.logicbus.com.mx/imagenes/articulo/planta-industrialE.jpg" class="image_productos" width="40%" alt="Figura 2. Ejemplo de una planta industrial" title="Figura 2. Ejemplo de una planta industrial"></center>
            <p class="text-center"><b>Figura 2. Ejemplo de una planta industrial</b></p>
            <p>La palabra mantenimiento se emplea para designar las técnicas utilizadas para asegurar el correcto y continuo uso de equipos, maquinaria, instalaciones y servicios. Para los hombres primitivos, el hecho de afilar herramientas y armas, coser y remendar las pieles de las tiendas y vestidos, cuidar la estanqueidad de sus piraguas, etc.</p>
            <p>Durante la revolución industrial el mantenimiento era correctivo (de urgencia), los accidentes y pérdidas que ocasionaron las primeras calderas y la apremiante intervención de las aseguradoras exigiendo mayores y mejores cuidados, proporcionaron la aparición de talleres mecánicos.</p>
            <p>A partir de 1925, se hace patente en la industria americana la necesidad de organizar el mantenimiento con una base científica. Se empieza a pensar en la conveniencia de reparar antes de que se produzca el desgaste o la rotura, para evitar interrupciones en el proceso productivo, con lo que surge el concepto del mantenimiento Preventivo.</p>
            <p>A partir de los años sesenta, con el desarrollo de las industrias electrónica, espacial y aeronáutica, aparece en el mundo anglosajón el mantenimiento Predictivo.</p>
            <h2 class="subtitle blue text-center mt-5 mb-3">Mantenimiento correctivo</h2>
            <p>Es el conjunto de actividades de reparación y sustitución de elementos deteriorados por repuestos que se realiza cuando aparece el fallo. Este sistema resulta aplicable en sistemas complejos, normalmente componentes electrónicos o en los que es imposible predecir los fallos y en los procesos que admiten ser interrumpidos en cualquier momento y durante cualquier tiempo, sin afectar la seguridad. También para equipos que ya cuentan con cierta antigüedad. Tiene como inconvenientes, que el fallo puede sobrevenir en cualquier momento, muchas veces, el menos oportuno, debido justamente a que en esos momentos se somete al bien a una mayor exigencia.</p>

            <h2 class="subtitle blue text-center mt-5 mb-3">Mantenimiento preventivo</h2>
            <p>Es el conjunto de actividades programadas de antemano, tales como inspecciones regulares, pruebas, reparaciones, etc., encaminadas a reducir la frecuencia y el impacto de los fallos de un sistema. Las desventajas que presenta este sistema son:</p>
            <p>Los cambios necesarios para alcanzar la vida útil de un elemento se procede a su cambio, encontrándose muchas veces que el elemento que se cambia permitiría ser utilizado durante un tiempo más prolongado. En otros casos, ya con el equipo desmontado, se observa la necesidad de "aprovechar" para realizar el reemplazo de piezas menores en buen estado, cuyo coste es escaso frente al correspondiente de desmontaje y montaje, con el fin de prolongar la vida del conjunto. Estamos ante el caso de una anticipación del reemplazo o cambio prematuro.</p>

            <h2 class="subtitle blue text-center mt-5 mb-3">Mantenimiento predictivo</h2>
            <p>En esta parte se abarcan el conjunto de actividades de seguimiento y diagnostico continuo, es decir, la monitorización de un sistema, lo cual permite una intervención de corrección inmediata como consecuencia de la detección de algún síntoma de fallo.</p>
            <p>La base del mantenimiento predictivo, está en el hecho de que la mayoría de los fallos se produce lentamente y previamente, en algunos casos, arrojan indicios evidentes de un futuro fallo, esto por medio de la monitorización, lo que implica es la elección, medición y de algunos parámetros relevantes que representen el buen funcionamiento del equipo analizado. Algunos de los parámetros a considerar son los siguientes:</p>
            <ul>
                <li>La temperatura</li>
                <li>La presión </li>
                <li>La velocidad lineal </li>
                <li>La velocidad angular </li>
                <li>La resistencia eléctrica </li>
                <li>Los ruidos y vibraciones</li>
                <li>La rigidez dieléctrica</li>
                <li>La viscosidad</li>
                <li>El contenido de humedad</li>
                <li>De impurezas y de cenizas en aceites aislantes </li>
                <li>El espesor de chapas </li>
                <li>El nivel de un fluido, etc.</li>
            </ul>
            <p>Con esto se logra así, prolongar la vida útil de la planta industrial, además de determinar equipos
            obsoletos.</p>
            <h2 class="subtitle blue text-center mt-5 mb-3">Conclusiones</h2>
            <p>Una planta industrial depende en su mayoría de los equipos que la conforman, estos equipos sufren daños a diario, por lo cual se debe de optar por medidas mantenimiento para ayudar a mantenerlos en buen estado y funcionamiento. Una de la mejores opciones es inclinarse por el mantenimiento predictiva, ya que al utilizar equipos de monitorización el procedimiento de definir fallos es ágil y rápido, atendiendo con mayor eficacia el problema raíz. Ya que se reduciría en gran medida el mantenimiento correctivo, que se da cuando ya el fallo se hizo presente provocando daños a sus equipos y por tanto reduciendo la vida útil de la planta industrial.</p>

            <p class="text-center"><a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/articulos/vida-util-equipos.pdf" target="_blank" title="La vida útil de los equipos dentro de una planta industrial." alt="La vida útil de los equipos dentro de una planta industrial.">Leer Artículo Completo</a></p>
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