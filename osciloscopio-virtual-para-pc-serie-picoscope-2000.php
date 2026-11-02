<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang = "es">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-1007518778');
    </script>
    <title>PicoScope 2000 - Osciloscopio virtual para PC - Logicbus S.A de C.V</title>
    <meta name="description" content="Gama ultracompacta de osciloscopios de 8 bits y osciloscopios de señal mixta (MSO). Los modelos 2000B ofrecen más memoria y ancho de banda.">

    <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Osciloscopios portátiles, Osciloscopios, Virtuales USB, Instrumento de Medición Eléctrico, interfaz USB Integrada, osciloscopios virtuales, osciloscopio usb, osciloscopios para pc, instrumentos de medición, ultracompacto, osciloscopios de 8 bits, osciloscopios de señal mixta, MSO, memoria, ancho de banda, interfaz USB, generador de funciones incorporado, AWG, analizador lógico, capacidad de señal mixta, decodificación de bus serie, análisis de protocolo, analizador de espectro FFT, generador de forma de onda arbitraria, generador de función, PicoScope 2000">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/diagramas.css" rel="stylesheet" >
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <!--------------->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

      function menu_actual(){
      document.getElementById("productos").className = "dropdown active";
      };
    </script>

    <style>
      * a{
        cursor: pointer;
      }
      p{
        text-align: justify;
        text-justify: inter-word;
      }
      h1{
        text-align: center;
      }
      ul{
        text-align: justify;
        text-justify: inter-word;
      }
    </style>
  </head>
  <body onLoad="menu_actual();">
    <?
    arriba();
    ?>

    <div id="main">
      <div class="gridContArriba">
        <div class="griditemContA">
          <?
          menucategorias();
          ?>
        </div>
        <div class="griditemContA">

          <!-- RUTA DE NAVEGACION -->
          <div class="ruta_productos">
            <a href="productos">Productos</a> -> <a href="instrumentos-medicion">Instrumentos de medición</a> -> <a href="stand_osciloscopios">Osciloscopios</a> -> <a href="osciloscopios-virtuales-para-pc">Osciloscopios virtuales para PC</a> -> Serie PicoScope® 2000
          </div> 
          <!-- NOMBRE DE LA CATEGORIA -->
          <h1 class="titulo_producto"> Osciloscopio virtual para PC<br>Serie PicoScope® 2000 </h1>

          <!-- LAS IMAGENES DEBEN DE ESTAR EN SU RESPECTIVA CARPETA, EL ANCHO SE AJUSTA EN PORCENTAJE Y SE PONE EL NOMBRE DEL PRODUCTO EN LAS ETIQUETAS ALT Y TITLE -->
          <div class="row mb-3">
            <div class="col" align="center">
              <img src="imagenes/productos/prueba-y-medicion/osciloscopios/PicoScope-2000-Series.png"  alt="Osciloscopios virtuales para PC con interfaz USB - Serie PicoScope® 2000" title="Osciloscopios virtuales para PC con interfaz USB - Serie PicoScope® 2000" width="50%">
            </div>
          </div>



          <!-- CARRITO DE COMPRAS A TIENDA MX -->
          <div align="right">
            <a href="https://tienda.logicbus.com.mx/Osciloscopios_c_2938.html" title="Ir a Tienda"  target="_blank"><img src="images/shopping_cart.png" class="carrito" border=0 alt="Comprar"></a>
          </div>

          <!-- TODOS LOS PARAFOS PONERLOS DENTRO DE LA ETIQUETA <P> Y ASEGURARSE DE CERRARLA </P> -->
          <p class="subtitulo"><b>Gama ultracompacta de osciloscopios de 8 bits y osciloscopios de señal mixta (MSO). Los modelos 2000B ofrecen más memoria y ancho de banda. Todos los modelos funcionan con USB y tienen un generador de funciones incorporado y AWG</b></p>

          <p>Osciloscopios USB y osciloscopios de señal mixta</p>

          <ul>
            <li>Modelos de 2 canales, 4 canales y MSO</li>
            <li>6 instrumentos en uno</li>
            <li>Diseño ultra compacto</li>
            <li>Ancho de banda de hasta 100 MHz</li>
            <li>Hasta 128 MS de memoria intermedia</li>
            <li>Decodifica 16 protocolos seriales como estándar</li>
            <li>Comunicación y alimentación por USB</li>
            <li>Software para Windows, Linux y Mac</li>
          </ul>


          <h2>Su completo laboratorio de pruebas y medición.</h2>


          <p>Puede usar su PicoScope 2000 Series como un osciloscopio avanzado, analizador de espectro, generador de funciones, generador de formas de onda arbitrarias y decodificador de protocolo de forma inmediata. Los modelos de señal mixta también agregan un analizador lógico de 16 canales. Un completo laboratorio de electrónica en una unidad compacta, de bajo costo y alimentada por USB.</p>

          <p>Los modelos PicoScope 2000A ofrecen una relación calidad-precio inmejorable y son ideales para uso educativo, de pasatiempos y de campo. En el laboratorio, el bajo costo permite un alcance por persona en lugar de tener que compartir.</p>

          <p>Los modelos PicoScope 2000B tienen los beneficios adicionales de memoria profunda (hasta 128 MS), mayor ancho de banda (hasta 100 MHz) y velocidades de actualización de formas de onda más rápidas. Los modelos PicoScope 2000B le brindan el rendimiento para llevar a cabo análisis avanzados de sus formas de onda. Son ideales para el diseño, depuración y decodificación en serie.</p>


          <h2>Osciloscopio de gama alta</h2>

          <p>En el corazón de cada PicoScope 2000 hay un osciloscopio avanzado que ofrece todo lo que usted esperaría y mucho más además:</p>

          <ul>
            <li>10,000 formas de onda circular buffer</li>
            <li>Tasa de actualización de hasta 80,000 formas de onda por segundo</li>
            <li>Prueba de límite de máscara</li>
            <li>Matemáticas avanzadas y filtrado</li>
            <li>Mediciones con estadísticas</li>
            <li>Activación digital avanzada</li>
            <li>Mejora de la resolución a 12 bits</li>
          </ul>


          <h2>Analizador lógico / capacidad de señal mixta</h2>


          <p>La serie PicoScope 2000 incluye modelos de señales mixtas que incluyen 16 entradas digitales para que pueda ver señales digitales y analógicas simultáneamente.</p>

          <p>Las entradas digitales se pueden mostrar individualmente o en grupos con nombre, con valores binarios, decimales o hexadecimales que se muestran en una pantalla de estilo bus. Se puede definir un umbral lógico separado de –5 V a +5 V para cada puerto de entrada de 8 bits. El disparador digital se puede activar mediante cualquier patrón de bits combinado con una transición opcional en cualquier entrada. Los disparadores lógicos avanzados se pueden configurar en los canales de entrada analógicos o digitales, o en ambos para habilitar el disparo complejo de señales mixtas.</p>

          <p>Las entradas digitales aportan potencia adicional a las opciones de decodificación en serie. Puede decodificar datos en serie en todos los canales analógicos y digitales simultáneamente, brindándole hasta 18 canales de datos. Por ejemplo, puede decodificar varias señales SPI, I²C, CAN bus, LIN bus y FlexRay al mismo tiempo.</p>


          <h2>Decodificación de bus serie y análisis de protocolo.</h2>

          <p>PicoScope puede decodificar 1 cable, ARINC 429, CAN, DCC, DMX512, Ethernet, FlexRay, I²C, I²S, LIN, PS / 2, SENT, SPI, UART (RS-232 / RS-422 / RS-485), y Los datos del protocolo USB 1.1 como estándar, con más protocolos en desarrollo y disponibles en el futuro con actualizaciones de software gratuitas.</p>

          <p>Se pueden capturar y decodificar múltiples protocolos, el único límite es el número de canales disponibles (18 para los modelos MSO). La capacidad de observar el flujo de datos a través de un puente (como el bus CAN hacia adentro, el bus LIN hacia afuera) es increíblemente poderosa.</p>

          <p>Los búferes de memoria profunda hacen que los modelos PicoScope 2000B sean ideales para la decodificación en serie, ya que es posible capturar y decodificar muchos miles de marcos de datos.</p>


          <h2>Analizador de espectro FFT</h2>

          <p>La vista de espectro traza la amplitud en función de la frecuencia, revelando detalles que de otra manera estarían ocultos en una vista de osciloscopio. Es ideal para detectar ruidos, interferencias o distorsiones en las señales.</p>

          <p>Puede visualizar múltiples vistas de espectro junto con vistas de osciloscopio de los mismos datos. Un conjunto completo de mediciones automáticas en el dominio de la frecuencia se puede agregar a la pantalla, incluyendo THD, THD + N, SNR, SINAD y IMD. Se puede aplicar una prueba de límite de máscara a un espectro e incluso puede utilizar el modo AWG y el espectro juntos para realizar un análisis de red escalar barrida.</p>

          <p>Con los modelos PicoScope 2000B, las FFT de hasta 1 millón de puntos se pueden calcular en milisegundos, lo que brinda una excelente resolución de frecuencia. Aumentar el número de puntos en una FFT también reduce el ruido de fondo, revelando señales ocultas.</p>


          <h2>Generador de forma de onda arbitraria (AWG) y generador de función</h2>

          <p>Todos los osciloscopios de la serie PicoScope 2000 tienen un generador de funciones incorporado y un generador de formas de ondas arbitrarias (AWG) que emiten señales en un panel frontal BNC.</p>

          <p>El generador de funciones puede producir formas de ondas sinusoidales, cuadradas, triangulares y de nivel de CC, y muchas más, mientras que el AWG le permite importar formas de ondas personalizadas de archivos de datos o crearlas y modificarlas utilizando el editor gráfico incorporado de AWG.</p>

          <p>Además de los controles de nivel, desplazamiento y frecuencia, las opciones avanzadas le permiten barrer en un rango de frecuencias. Combinado con el modo de espectro avanzado, con opciones que incluyen retención de picos, promedios y ejes lineales / logísticos, esto crea una herramienta poderosa para probar las respuestas de los filtros y el amplificador.</p>

          <p>Los modelos PicoScope 2000B tienen opciones de activación que permiten que se produzcan uno o más ciclos de una forma de onda cuando se cumplen varias condiciones, como la activación del alcance o el fallo de una prueba de límite de máscara.</p>







        </div>
      </div>
    </div>

    <?
    abajo();
    ?>
  </body>
</html>