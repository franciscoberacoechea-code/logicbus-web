<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Fuentes, importancia en la industria- Logicbus S.A de C.V.</title>
  <meta name="description" content="Los aparatos electrónicos que utilizamos a diario, televisores, ordenadores, etc. se conectan a la red eléctrica a 230V de tensión en corriente alterna (C.A), pero estos aparatos y sus componentes, realmente trabajan en corriente continua (C.C.) y además a tensiones más bajas. Por este motivo siempre llevan una fuente de alimentación o también llamada fuente de poder.">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="fuentes,corriente alterna,corriente directa, CA,CD,fuentes-lineales, fuentes comutadas,Logicbus,ReginPower">
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
            <li class="breadcrumb-item active" aria-current="page">Fuentes, importancia en la industria</li>
          </ol>
        </nav>
        <h1 class="title blue">Fuentes, importancia en la industria</h1>
        <center><img src="https://www.logicbus.com.mx/imagenes/articulo/fuentes-de-poder-importacia.jpg" class="image_productos" width="80%" alt="Fuentes, importancia en la industria" title="Fuentes, importancia en la industria"></center>
        <p class="text-justify paragraph mt-5"><b>Resumen:</b> En el presente artículo, se tratara un tema de gran importancia en la industria, nos referimos a las fuentes de poder, los cuales son un elemento importante para que el sistema pueda alimentarse y llevar a cabo la función por la cual fue creada.</p>
      </div>
    </div>
    <div class="container text-justify paragraph">
      <h2 class="subtitle blue text-center mt-5 mb-3">Introducción</h2>
      <p>Los aparatos electrónicos que utilizamos a diario, televisores, ordenadores, etc. se conectan a la red eléctrica a 230V de tensión en corriente alterna (C.A), pero estos aparatos y sus componentes, realmente trabajan en corriente continua (C.C.) y además a tensiones más bajas. Por este motivo siempre llevan una fuente de alimentación o también llamada fuente de poder.</p>
      <p>Una fuente de alimentación electrónica transforma la corriente alterna en corriente continua y regula o cambia la tensión de salida a unos valores determinados. Por ejemplo, una fuente de alimentación puede conectarse en la entrada a 230V en corriente alterna (enchufe normal de una vivienda) y la transforma en corriente continua de 9V a la salida.</p>
      <p>En las aplicaciones actuales, por ejemplo en la ingeniería de control, es esencial tomar la decisión adecuada en cuanto a la selección y la planificación de la fuente de alimentación. Una conexión o un dimensionado incorrectos de la fuente de alimentación pueden afectar gravemente a la seguridad y/o la disponibilidad de toda la instalación. Por esto es importante conocer que son las fuentes de poder.</p>
      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/feunte-RG-conc.jpg" class="image_productos" style="max-width: 300px;" width="50%" alt="Figura 1. Imagen de una fuente de poder" title="Figura 1. Imagen de una fuente de poder"></center>
      <p class="text-center"><b class="text-center">Figura 1. Imagen de una fuente de poder</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">¿Qué es una fuente de poder?</h2>

      <p>Fuente de alimentación: circuito que convierte la tensión alterna (red industrial) en una tensión prácticamente continua.</p>
      <p>Características y utilidad:</p>
      <ul>
        <li>Casi todos los circuitos electrónicos necesitan una fuente de alimentación continua.</li>
        <li>En sistemas portátiles (poca potencia) batería.</li>
      </ul>
      <p>Bloques constituyentes: a grandes rasgos la fuente de alimentación regulada o estabilizada consta de tres bloques:</p>
      <ul>
        <li>Rectificador: Obtiene de la tensión alterna de la red industrial, una tensión unidireccional, variable en amplitud (pero no en sentido). Transformador Rectificador.</li>
        <li>Bloque de filtrado: Consigue una reducción importante de la variación en amplitud de la tensión rectificada Desde el p.d.v. matemático: El FILTRO disminuye la amplitud los armónicos de la onda rectificada.</li>
        <li>Bloque estabilizador. La señal rectificada y filtrada va a depender de la tensión de entrada, de la carga que alimenta el circuito, y de sus variaciones.</li>
        <li>Este bloque trata de limitar al máximo estos efectos MINIMIZARLOS.</li>
      </ul>
      <h2 class="subtitle blue text-center mt-5 mb-3">Clasificación de las fuentes de poder</h2>
      <p>Fuentes de alimentación, para dispositivos electrónicos, pueden clasificarse básicamente como fuentes de alimentación lineal y conmutada. Las lineales tienen un diseño relativamente simple, que puede llegar a ser más complejo cuanto mayor es la corriente que deben suministrar, sin embargo su regulación de tensión es poco eficiente. Una fuente conmutada, de la misma potencia que una lineal, será más pequeña y normalmente más eficiente pero será más complejo y por tanto más susceptible a averías.</p>
      <p>La elección del uso de una fuente de alimentación conmutada, o una fuente lineal en un diseño particular está basada en las necesidades de la aplicación. Ambos tipos de fuentes de alimentación tienen sus ventajas y desventajas.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/tipos-de-fuentes.JPG" class="image_productos" width="50%" alt=" Figura 2.  Diagrama de Fuentes Lineal" title=" Figura 2.  Diagrama de Fuentes Lineal"></center>
      <p class="text-center"><b> Figura 2. Diagrama de Fuentes Lineal</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Fuentes lineales</h2>
      <p>La fuente lineal ofrece al diseñador tres ventajas principales:</p>
      <ul>
        <li>Simplicidad de diseño.</li>
        <li>Operación suave y capacidad de manejar cargas.</li>
        <li>Bajo ruido de salida y una respuesta dinámica muy rápida.</li>
        <li>Para potencias menores a 10W, el costo de los componentes es mucho menor que el de las fuentes conmutadas.</li>
      </ul>

      <p> Las desventajas del regulador lineal es su límite de aplicación. Sólo pueden ser reductores de tensión, lo que significa que se necesitará una caída de tensión aceptable para poder controlar la polarización de la etapa de potencia lineal y la regulación en la línea. En aplicaciones de línea de 50Hz, deberán utilizarse transformadores de linea adicionales de gran volumen, condicionando su versatilidad y practicidad.</p>
      <p>Segundo, cada regulador lineal puede tener sólo una salida. Por esto, para cada salida regulada adicional necesaria, deberá incrementarse el circuito de potencia.</p>
      <p>Tercero, y quizas el más importante es su eficiencia. En aplicaciones normales, los reguladores lineales tienen una eficiencia del 30 al 60%. Esto significa que por cada Watt los costos se irán incrementando. Esta pérdida llamada “headroom loss“, ocurre en el transistor de paso y, desafortunadamente es necesaria para polarizar la etapa de potencia y para cumplir con las especificaciones de regulación de línea, cuando la mayoría del tiempo el regulador no funcionará en esas condiciones.</p>

      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/DiagramaFuenteAlimentacion.jpg" class="image_productos" width="50%" alt="Figura 3.  Diagrama de Fuentes Lineal" title="Figura 3.  Diagrama de Fuentes Lineal"></center>
      <p class="text-center"><b>Figura 3. Diagrama de Fuentes Lineal</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Fuentes conmutadas</h2>
      <p>Las fuentes conmutadas tienen las siguientes ventajas:</p>
      <p>La eficiencia de las fuentes conmutadas está comprendida entre el 68 y el 90%. Esto hace reducir el costo de los dispositivos de potencia. Además, los dispositivos de potencia funcionan en el régimen de corte y saturación, haciendo el uso más eficiente de un dispositivo de potencia. Debido a que la tensión de entrada es conmutada en un forma de alterna y ubicada en un elemento magnético, se puede variar la relación de transformación pudiendo funcionar como reductor, elevador, o inversor de tensión con múltiples salidas.</p>
      <p>No es necesario el uso del transformador de línea, ya que el elemento magnético de transferencia de energía lo puede reemplazar, funcionando no en 50/60 Hz, sino en alta frecuencia de conmutación, reduciendo el tamaño del transformador y en consecuencia, de la fuente; reduciendo el peso, y el coste.</p>
      <p>Un transformador de energía de 50/60 Hz tiene un volumen efectivo significativamente mayor que uno aplicado en una fuente conmutada, cuya frecuencia es típicamente mayor que 15 kHz.</p>
      <p>La desventajas de las fuentes conmutadas es su diseño más elaborado. Un diseño de una fuente conmutada puede llevar varias semanas o meses de desarrollo y puesta a punto, dependiendo de los requerimientos.</p>
      <p>Segundo, el ruido es mayor que el de las fuentes lineales. En la salida y entrada, radia interferencia electromagnética y de radiofrecuencia. Esto puede dificultar el control y no deberá ser ignorado durante la fase de diseño. Por éste motivo se deberán agregar de protección, de arranque suave, y filtros de línea adicionales como etapas previas.</p>
      <p>Tercero, la fuente conmutada toma proporciones de energía de la entrada en pulsos de tiempos limitados para transferirlo a la salida en otras condiciones de corriente y tensión, por lo que le llevará mayor tiempo de restablecimiento al circuito para soportar variaciones en la entrada. Esto se llama “respuesta transitoria en el tiempo“. Para compensar este funcionamiento lento, los capacitores de filtro de salida se deberán incrementar para almacenar la energía necesaria por la carga durante el tiempo en que la fuente conmutada se está ajustando.</p>
      <p>Generalmente, la industria está optando por el uso de fuentes conmutadas en la mayoría de las aplicaciones. En baja potencia, donde es necesario una mejor característica de rizado se está optando por insertar una fuente lineal en serie con la fuente conmutada.</p>
      <center><img src="https://www.logicbus.com.mx/imagenes/articulo/Fuente-conmutada.jpg" class="image_productos" width="50%" alt="Figura 4. Diagrama de una fuente de poder conmutada" title="Figura 4. Diagrama de una fuente de poder conmutada"></center>
      <p class="text-center"><b>Figura 4. Diagrama de una fuente de poder conmutada</b></p>

      <h2 class="subtitle blue text-center mt-5 mb-3">Aplicaciones en la industria</h2>
      <p>Las fuentes son cada vez más usadas para diversas aplicaciones, desde las fuentes para computadoras personales, fuentes para centrales telefónicas, fuentes para equipamiento médico, hasta fuentes normalizadas para uso industrial.</p>
      <p>Una de las aplicaciones más comunes de las fuentes de poder son para la alimentación en tableros de control en líneas de producción. Las líneas de producción actuales cuentan con varios componentes que trabajan a voltajes de corriente directa de 12 o 24 voltios que a fuerzas necesitan una fuente de poder para convertir la energía proveniente de líneas mono o trifásicas. Las fuentes de poder se necesitan para energizar:</p>
      <ul>
        <li>Sensores inductivos</li>
        <li>Sensores capacitivos</li>
        <li>Sensores fotoeléctricos</li>
        <li>Celdas de carga y electrónica de pesaje</li>
        <li>PLCs y otros controladores</li>
        <li>Monitores y computadoras</li>
        <li>Motores a pasos y actuadores</li>
        <li>Luces o indicadores</li>
      </ul>
      <p>Un sistema de línea de producción se vería conectado a una fuente de poder de la siguiente forma:</p>
      <center><img src="https://www.logicbus.com.mx/images/app/fuentes-de-poder-produccion.png" width="90%" alt="Diagrama de fuentes de poder en producción"></center>
      <p class="text-center"><b>Figura 5. Fuentes de poder</b>
      <p>Como podemos observar, podemos utilizar una sola fuente de poder para alimentar varios de los componentes de una línea automatizada industrial conectados en paralelo, claro, cuidando la cantidad de potencia que puede proporcionar la fuente. Hay líneas de producción que utilizan varias fuentes de poder, pero si calculamos bien nuestro consumo podemos utilizar solamente una para todo el sistema.</p>
      <p>En Logicbus manejamos fuentes de poder industriales para diversas aplicaciones de la marca Reign Power, perfectas para su uso en el ámbito industrial y disponibles en diferentes valores de potencia y tipo de conversión.</p>
      <h2 class="subtitle blue text-center mt-5 mb-3">Conclusiones</h2>
      <p>Las fuentes de poder son elementos indispensables en una planta industrial o en cualquier sistema, debido a que se requiere una correcta alimentación del sistema en cuestión. Además de verificar y mantener el correcto uso de las fuentes.</p>

      <p class="text-center"><a class="blue link-orange" href="https://www.logicbus.com.mx/pdf/articulos/Fuentes-Importancia-industria..pdf" target="_blank" title="Fuentes, importancia en la industria" alt="Fuentes, importancia en la industria">Leer Artículo Completo</a></p>
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