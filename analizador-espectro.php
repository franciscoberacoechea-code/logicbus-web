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
  <title>Analizador de Espectro - Logicbus S.A de C.V.</title>
  <meta name="description" content="Un analizador de espectro es un sistema electrónico creado para estudiar un espectro de frecuencia, este espectro se extrae de una señal que es introducida desde el analizador a través de un sensor, los analizadores de espectro pueden incluir sensores para señales acústicas, ópticas o eléctricas ....">

  <meta name="keywords" content="analizador, espectro, Osciloscopios, frecuencia,  FOURIER, analogicos, digitales, señales, RBW, amplitud, frecuencia, filtro de resolucion, busqueda de pico, siglent, LOGICBUS">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
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
            <li class="breadcrumb-item active" aria-current="page">Analizador de espectro</li>
          </ol>
        </nav>
        <h1 class="title blue">Analizador de espectro</h1>
        <div align="center"><img src="https://www.logicbus.com.mx/images/banner/www/analizador-de-espectro.png" alt="Analizador de espectro" title="Analizador de espectro" width="70%"></div>
        <p class="paragraph text-justify my-5">En todos los ámbitos del estudio de la señal, hay diversos tipos de onda: periódicas, no periódicas, deterministas, etc., para poder caracterizar una onda y obtener las conclusiones sobre lo que queremos hacer con ella, hay diversas multitudes de instrumentos para llevar a cabo el proceso, si nos enfocamos a conocer las características de las señales con respecto al tiempo, es necesario disponer el uso de los osciloscopios, la cual existen dos tipos: analógico y digitales.</p>
      </div>
    </div>
  </div>
  <div class="container paragraph text-justify">
    <p>De esta manera podemos obtener las características tales como por ejemplo, forma de la señal, su amplitud, su fase, etc. Para poder analizar por ejemplo las señales periódicas, no es necesario la utilidad de un osciloscopio, en este caso se necesitan instrumentos de medida que se denomina como analizadores de espectros, tanto analógicos como <a class="blue link-orange" href="https://tienda.logicbus.com.mx/Osciloscopios_c_1083.html">digitales</a>, que hoy en día es uno de los instrumentos más poderoso cuyo manejo nos servirá de mucho para lograr mejores resultados.</p>

    <nav class="navMenuSuper mb-5">
      <ul>
        <li>
          <a href="https://tienda.logicbus.com.mx/prueba-y-medicion-analizadores-de-espectro" target="_blank">Ver en Tienda</a>
        </li>
        <li>
          <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
        </li>
      </ul>
    </nav>
    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/espectro.jpg" class="image_productos" width="40%" alt="Figura 1. Analizadores de Espectro" title="Figura 1. Analizadores de Espectro">
    </center>
    <p class="text-center"><b>Figura 1. Analizadores de Espectro</b></p>
    <h2 class="subtitle blue text-center mb-3">Analizadores de Espectro</h2>
    <p>Un analizador de espectro es un sistema electrónico creado para estudiar un espectro de frecuencia, este espectro se extrae de una señal que es introducida desde el analizador a través de un sensor, los analizadores de espectro pueden incluir sensores para señales acústicas, ópticas o eléctricas.</p>
    <p>Los analizadores de espectro nos muestran todas las frecuencias que se encuentra dentro de los 20Hz a los 20kHz, ya que esta herramienta es muy fácil de comprender.</p>
    <p>Con un analizador de espectro podemos ver el ancho de banda, viendo en el punto medio de la frecuencia central de la señal de entrada, ya que se puede ver todo tipo de ondas ya mencionadas en estas herramientas.</p>
    <p>El análisis espectral está relacionado con una herramienta llamada transformada de FOURIER. Este análisis puede llevarse a cabo para pequeños intervalos de tiempo, además la transformada de FOURIER de una función no solo permite hacer una descomposición espectral de los formantes de una onda o señal oscilatoria, si no que con el espectro generado por el análisis de FOURIER incluso se puede reconstruir, o sintetizar la función original mediante la transformada inversa.</p>
    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/espectro2.jpg" class="image_productos" width="40%" alt="Figura 2. Transformada de Fourier" title="Figura 2. Transformada de Fourier">
    </center>
    <p class="text-center"><b>Figura 2. Transformada de Fourier.</b></p>

    <h2 class="text-center subtitle blue mb-3">Funciones básicas de un analizador de espectros</h2>

    <p>Cuando estamos hablando acerca de los analizadores de espectro, es muy importante destacar que esta es una de las maquinas que representa los componentes espectrales de una señal de medida, ya sea acústica, óptica o eléctrica, en el uso de este procedimiento seremos capaces de visualizar parámetros que pueden ser trabajados por un osciloscopio en el dominio del tiempo. Este tipo de productos son muy responsables cuando se quieres hacer mediciones o pruebas de alta velocidad en ámbitos como las telecomunicaciones, las prueba de video de alta definición, etc.</p>
    <p> Hay dos maneras de obtener el espectro de la señal, cuando se habla de alta frecuencia, el analizador de espectro usa un filtro de banda y modula la señal a banda base, luego pasa a un filtro llamado RBW (filtro de resolución) que es muy útil para detectar la potencia en cada componente, si la frecuencia es baja, se utiliza un osciloscopio con el método matemático ya mencionado de Fourier para transformar una señal en el dominio del tiempo al de la frecuencia y viceversa.</p>

    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/espectro3.jpg" class="image_productos" width="40%" alt="Figura 3. Filtro de resolución." title="Figura 3. Filtro de resolución."></center>
    <p class="text-center"><b>Figura 3. Filtro de resolución.</b></p>
    <p>Debemos tomar en cuenta que cada uno de los analizadores de espectro suele contar con una serie de funciones básicas para llevar el control y poder darle un funcionamiento, de las cuales son las siguientes:</p>
    <ul>
      <li><b>Amplitud</b><br>Esto indica el valor de cada división de la pantalla del instrumento en dBm/división, ya que se puede activar con un preamplificador si la señal de entrada es demasiada baja.</li>
      <li><b>Frecuencia</b><br> En este punto nos muestra el intervalo de frecuencia que será mostrada en la pantalla, se puede definir la frecuencia inicial y la final al mostrar, o bien se indica la frecuencia central y el SPAN (ancho de la ventana).</li>
      <li><b>Filtro de resolución</b><br> Es uno de los filtros que pasa por todas la frecuencias de la señal seleccionada en el sector de la frecuencia, cuanto más pequeño sea el filtro, más precisa será la resolución de la medida y más tiempo se tardará.</li>
      <li><b>Marcador/Búsqueda de pico</b><br> Esto se coloca en diferentes puntos de interés de la señal, muestra el valor de frecuencia y potencia en dicho punto. La búsqueda de pico sitúa un marcador automáticamente en el punto mayor potencia de la señal en pantalla y se ajusta continuamente</p>
      </li>
    </ul>

    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/espectro4.jpg" class="image_productos" width="40%" alt="Figura 4. Funcionamiento del análisis espectral." title="Figura 4. Funcionamiento del análisis espectral."></center>
    <p class="text-center"><b>Figura 4. Funcionamiento del análisis espectral.</b></p>

    <h2 class="subtitle blue text-center mb-3">Tipos de analizado de espectro</h2>
    <p><b>Analógico</b></p>
    <p>Un analizador de espectro analógico es un instrumento electrónico que puede mostrar cómo está compuesto el espectro de ondas eléctricas, acústicas, ópticas, entre otras. Lo contrario a un osciloscopio, un analizador muestra las ondas en el dominio de frecuencia en vez del dominio de tiempo. Puede ser considerado un voltímetro de frecuencia selectiva, que responde a picos calibrados en valores RMS de la onda. Ya que estos analizadores utilizan un filtro pasa banda de frecuencia variables, cuya frecuencia central se afina automáticamente dentro de una gama fija.</p>
    <p><b>Digital</b></p>
    <p>Este analizador utiliza la “Fast Fourier Transformation” (FFT), un proceso matemático que transforma una señal en sus componentes espectrales. Algunas medidas requieren que se preserve la información completa de señal - frecuencia y fase, este tipo de análisis se llama vectorial. </p>

    <h2 class="subtitle blue text-center mb-3">Ejemplo de Analizadores de espectro</h2>
    <p>Los analizadores de espectro en su uso, más lo utilizan los profesionistas como investigadores para sus análisis, en la empresa <a class="blue link-orange" href="https://tienda.logicbus.com.mx/">Logicbus</a> podrá adquirir analizadores de espectro con rango de hasta 250Hz, de las cuales les daremos el ejemplo de uno de los productos de la marca SIGLENT:</p>

    <p><b>SSA3021X</b></p>
    <p>El analizador de espectro SSA3021X de Siglent cubre señales en el rango de 9 kHz a 2.1 GHz y mide la magnitud de una señal de entrada en función de la frecuencia en todo el rango de frecuencia del instrumento. Es ideal para medir la potencia del espectro de señales conocidas y desconocidas. El análisis de los espectros de señales eléctricas ayuda a caracterizar transmisores inalámbricos u otros dispositivos electrónicos, determinando frecuencia dominante, potencia, distorsión, armónicos, ancho de banda y otros componentes espectrales de una señal que no se detectan fácilmente en pantallas de dominio de tiempo.</p>
    <p> El analizador de espectro <a class="blue link-orange" href="https://tienda.logicbus.com.mx/SSA3021X_p_12830.html">SSA3021X</a> es liviano (10 lb) y tamaño pequeño (15,5 "x 8,2" x 4,6 "), con una interfaz fácil de usar en una gran pantalla TFT LCD de 10,1". Cuenta con 256 MB de memoria interna de almacenamiento, con hasta 32 GB admitidos externamente a través del puerto USB.</p>

    <center><img src="https://www.logicbus.com.mx/imagenes/articulo/SSA3021X.jpg" class="image_productos" width="40%" alt="Figura 5. Fotografía del producto SSA3021X " title="Figura 5. Fotografía del producto SSA3021X "></center>
    <p class="text-center"><b>Figura 5. Fotografía del producto SSA3021X</b></p>

    <h2 class="subtitle blue text-center">Conclusiones</h2>
    <p>Es sabido, según la transformada de Fourier que todas las señales eléctricas de interés pueden expresarse como suma de señales de distintas frecuencias. Es posible visualizar estas señales bien en el dominio del tiempo, mediante un osciloscopio, o bien en el dominio de la frecuencia mediante un analizador de espectros.</p>
    <p>El osciloscopio permite obtener información de amplitudes e intervalos de tiempo de la señal eléctrica, mientras que el analizador de espectro presenta información de amplitudes y frecuencias de las diferentes componentes discretas de la señal eléctrica.</p>
    <p>Como ya se ha visto el analizador de espectros es un aparato de medida que presenta en su pantalla las distintas componentes de una señal. De forma resumida el analizador de espectro permite realizar gran variedad de medidas con un único instrumento, por lo que es muy interesante para cualquier laboratorio. Su presencia, en muchos casos, evita la adquisición de un completo y costoso equipamiento específico para cada tipo de medidas.</p>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>