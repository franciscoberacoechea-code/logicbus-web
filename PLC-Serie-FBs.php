<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>Productos PLC de la Serie FBs - nucleo SoC - Logicbus S.A de C.V</title>
  <meta name="keywords"
    content="PLC, FBs-10MCU, FBs-32MCU, FBs-TC6, FBs-CM25E, Modulos, Expansion, comunicacion, E/S, digitales, relevador, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, unidades, unidades basicas, unidades avanzadas, unidades de posicionamiento, fuentes de poder, modulos de expansión, modulos de comunicacion, ejemplos de programacion plcs, ejemplos de programacion serie fbs">
  <meta name="description"
    content="Conoce todas las caracteristicas de cada uno de nuestros productos en la serie de unidades PLC">
  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="language" content="Spanish">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link href="libreria/diagramas.css" rel="stylesheet">
  <!--- Estilos Necesarios-->
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
  <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
  <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
  <!-- -->
  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="libreria/ie-emulation-modes-warning.js"></script>
  <script language="javascript">

    function menu_actual() {
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

  <style>
    * a {
      cursor: pointer;
    }

    p {
      text-align: justify;
      text-justify: inter-word;
    }
	
	td img {
		max-width:130px;
		max-height:130px;
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
        <div id="main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h1>Productos PLC de la Serie FBs</h1>
                <img src="imagenes/29/serie.jpg" alt="PLCs serie FBs" style="width:100%; max-width:700px;" class="img-responsive"><br><br>
                <p align="justify"><strong>Tecnología del nucleo SoC</strong><br>
                  El diseño del PLC FBs incorpora un sistema en chip (SoC – System on Chip) desarrollado por la marca Fatek. El chip BGA se compone de más de 120.000 puertas que integra poderosas características como una unidad de procesamiento central (CPU), memoria, hardware Logic Solver (HLS), 5 puertos de comunicación velocidad alta, 4 sets de contadores / temporizadores de alta velocidad, 4 ejes para control de posicionamiento (con interpolación lineal), 16 entradas interruptores y captura de alta velocidad.
                  <br>
                  El PLC FBs representa alta funcionalidad y fiabilidad con valor excepcional comparado con otros PLCs en su clase. <br>
                  <br><strong>Fácil de usar y con potentes conjuntos de instrucciones</strong><br>
                  El FBs cuenta con más de 300 instrucciones las cuales adoptan una estructura de función de multi-salida y multi-entrada amigable y de lectura fácil para el usuario. Con su estructura de funciones multi-salida el usuario puede derivar muchos tipos de funcionabilidad, las cuales, otros tipos de PLC requieren el uso de muchas instrucciones para lograr esto. También el resultado de la operación puede ser enviado directamente a salidas internas o externas.<br>
                  Para aumentar la legibilidad del programa, las entradas o salidas para cada instrucción de función tienen su propio símbolo mnemónico y el contenido de cada operación también es desplegado. Para aplicaciones de gama alta, tales como redes PLC (LINK), control PID y posicionamiento NC, el PLC FBs
                  ofrece Instrucciones prácticas para ayudar en el desarrollo del programa.<br>
                  <br><strong>PLC y Control NC en uno y lenguaje dedicado de posicionamiento NC</strong><br>
                  Las unidades de control de posicionamiento NC está incorporado en el sistema de chip (SoC) de el PLC serie FBs el cual integra control PLC+NC en una unidad para compartir recursos y reducir la necesidad de intercambio de datos. La unidad de control de posicionamiento NC adopta un lenguaje de comandos de posicionamiento especiales, que permite ser programado por unidades mecánicas o eléctricas y controlar los cambios de parámetros durante la ejecución.<br>
                  Una unidad tiene hasta 4 ejes de salidas con una frecuencia máxima de 920KHz y están equipados con funciones de interpolación lineales multieje. Si se combina con los 4 sets HHSC (Hardware High Speed Counter) integrados se puede obtener un control absoluto sobre el control de posicionamiento.
                </p>

                <h2>PLC (Cerebro)</h2>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><img src="assets/images/29/FBs-20MAT2-D24-C.jpg" class="tim"
                          alt="Producto serie FBs"></td>
                      <td>
                        <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_1_2"
                            title="Productos FBs básicos"><strong>Unidades básicas</strong></a><br>
                          Las unidades basicas de PLC Serie FBs están diseñados para realizar trabajos básicos de la industria. Son PLC compactos y económicos, para efectivizar el espacio, realizar proyectos con mejor rentabilidad y todo eso sin perder calidad.</p>
                      </td>
                      <td>
                        <a href="https://tienda.logicbus.com.mx/Bsicos_c_1322.html" title="Ir a Tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="assets/images/29/FBS-8.gif" class="tim"
                          alt="Producto serie FBs"></td>
                      <td>
                        <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_3_4" title=""><strong>Unidades
                              avanzadas</strong></a><br>
                          La serie FBs de PLC representa la más alta funcionalidad y confiabilidad de los PLC de su clase. La tecnología SoC (System on Chip) le permite integrar en un solo chip una CPU de alto rendimiento (5 puertos de comunicación de alta velocidad, contadores, temporaizadores y salidas de pulso de alta velocidad para control de hasta 4 ejes de posicionamiento)</p>
                      </td>
                      <td>
                        <a href="https://tienda.logicbus.com.mx/Avanzados_c_1323.html" title="Ir a tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="" class="carrito"></a>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="assets/images/29/FBs-20MN.gif" class="tim"
                          alt="Producto serie FBs"></td>
                      <td>
                        <p><a href="https://www.logicbus.com.mx/tabla_plc_fbs_5" title=""><strong>Unidades de
                              posicionamiento NC</strong></a><br>
                          Las unidades de control de posicionamiento NC está incorporado en el Sistema de Chips (SoC) de el PLC serie FBs el cual integra control PLC+NC en una unidad para compartir recursos y reducir la necesidad de intercambio de datos.</p>
                      </td>
                      <td>
                        <a href="https://tienda.logicbus.com.mx/Posicionamiento_c_1324.htm" title="Ir a tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="" class="carrito"></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <h2>Fuentes de poder</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/FBS-EPOW.jpg"
                        alt="Modulos de expansión de PLC" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_fuentes" title=""><strong>Fuente de
                            poder para módulos de expansión</strong></a><br>
                        Los PLC de la serie FBs tienen 3 tipos de circuitos internos: un circuito lógico de 5VDC, un circuito de salida de 24VDC y un circuito de entrada de 24VDC.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Fuentes-de-poder_c_1328.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>M&oacute;dulos de expansi&oacute;n</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBs-40MCU/DSC04325.JPG" alt="Unidades e/s digitales y fuente de alimentacion integrada" class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_digitales#digitales"
                          title=""><strong>Unidades con entradas/salidas digitales y fuente de alimentación integrada</strong></a><br>
                        Los módulos de expansión permiten ampliar el número de entradas y salidas que posee el PLC, cuando la capacidad de éste no cumple con los requerimientos de una aplicación de automatización.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Mdulos-de-E-S-digitales-y-fuente-de-alimentacin-integrada_c_1331.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-24EA.png" alt=""
                        class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_digitales#ModulosDigitales"
                          title=""><strong>Módulos con entradas y salidas digitales</strong></a><br>
                        Estos módulos se encargan del trabajo de intercomunicación entre los dispositivos industriales exteriores al PLC y todos los circuitos electrónicos de baja potencia que comprenden a la unidad central de proceso del PLC.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Mdulos-de-E-S-digitales_c_1330.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-16EY.png" alt=""
                        class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_digitales#DigitalesAltaDensidad"
                          title=""><strong>Módulos de entradas y salidas digitales de alta densidad</strong></a><br>
                        Los módulos de entrada tienen un tiempo de filtro para mejorar la calidad de la medida y una fuente de alimentación integrada para sensores (determinados módulos). Los módulos de salida tienen protección de cortocircuito y sobrecarga y puede controlar hasta 500 mA por canal.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Mdulos-de-E-S-digitales-de-alta-densidad_c_1332.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-6AD.png" alt=""
                        class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_analogas" title=""><strong>Módulos con
                            entradas y salidas análogas</strong></a><br>
                        Los módulos de entradas analógicos, usualmente, tienen varios canales. Dependiendo del diseño del módulo, cada canal puede medir corriente, voltaje o ambos; además se pueden conectar en modo diferencial o single ended.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Mdulos-de-E-S-anlogas_c_1333.html" title=""
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/FBs-B2DA.png" alt="" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_analogas#analogas1"
                          title=""><strong>Tarjetas con entradas y salidas análogas</strong></a><br>
                        proporcionan el vínculo entre la CPU del controlador programable y los dispositivos de campo del sistema. A través de ellas se origina el intercambio de información, ya sea con la finalidad de adquirir de datos, o para el mando o control de las máquinas presentes en el proceso.</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Tarjetas-de-E-S-anlogas_c_1334.html" title=""
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>M&oacute;dulos de comunicaci&oacute;n</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-CM22.png" alt="FBS-CM22"
                        class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/plc"
                          title=""><strong>Módulos de expansión de comunicación</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Mdulos_c_1335.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/fbs-cb55.jpg"
                        class="tim img-responsive"  alt="FBS-CB55"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/plc#Tarjetas"
                          title=""><strong>Tarjetas de expansión de comunicación</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Tarjetas_c_1336.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>M&oacute;dulos especiales</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="assets/images/29/fbs-2lc.jpg" class="tim" alt="Modulo fbs-2lc para celda de carga"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_ModulosEspeciales#especiales2"
                          title=""><strong>Módulo para celda de carga</strong></a><br>
                      </p>
                    </td>
                    <td><a href="https://tienda.logicbus.com.mx/Mdulo-para-celda-de-carga_c_875.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a></td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-32DGI.png" alt="FBS-32DGI" class="tim">
                    </td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_ModulosEspeciales"
                          title=""><strong>Módulos de entrada para interruptor tipo Thumbwheel</strong></a><br>
                      </p>
                    </td>
                    <td><a
                        href="https://tienda.logicbus.com.mx/Mdulo-de-entrada-para-interruptor-tipo-Thumbwheel_c_876.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a></td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBs-7SG2/DSC03134.JPG" alt="DSC03134"
                        class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_ModulosEspeciales#especiales"
                          title=""><strong>Módulos LED de 7/16-segmentos</strong></a><br>
                      </p>
                    </td>
                    <td><a href="https://tienda.logicbus.com.mx/Mdulos-LED-de-7-16-segmentos_c_877.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a></td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-TC2.png" alt="FBS-TC2" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_ModulosEspeciales#especiales1"
                          title=""><strong>Módulos de medición de temperatura</strong></a><br>
                      </p>
                    </td>
                    <td><a href="https://tienda.logicbus.com.mx/Mdulos-de-medicin-de-temperatura_c_878.html"
                        title="Ir a tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito"></a></td>
                  </tr>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/Nueva%20carpeta/FBS-4PT.png" alt="FBS-4PT" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_ModulosEspeciales#especiales2"
                          title=""><strong>Módulos especiales</strong></a><br>
                      </p>
                    </td>
                    <td><a href="https://tienda.logicbus.com.mx/Mdulos-especiales_c_879.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda" class="carrito"></a></td>
                  </tr>
                </tbody>
              </table>
              <h2>Software</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="https://www.logicbus.com.mx/imagenes/29/software.jpg" alt=""
                        class="tim img-responsive"></td>
                    <td>
                      <p><a href="" title=""><strong>WinProladder</strong></a><br>
                        V2.50 Build 12905 <br>
                        Software de programación con simulador para PLCs serie FBs <br>
                        Última actualización: 17 de Agosto de 2010</p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Tarjetas_c_1336.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito img-responsive"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>Accesorios</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="assets/images/29/HD30-22AWG-200.gif"
                        alt="cables comunicacion Logicbus" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_accesorios#cables"
                          title="Ver productos"><strong>Cables de comunicación</strong></a><br>
                      </p>
                    </td>
                    <td><a href="https://tienda.logicbus.com.mx/Cables-de-comunicacin_c_880.html" title="Ir a tienda"
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito img-responsive"></a></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/fbs-pep.jpg"
                        alt="paneles Logicbus FBs" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_accesorios#accesorios1"
                          title="Ver productos"><strong>Panel de acceso a datos</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Panel-de-acceso-a-datos_c_881.html" title=""
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito img-responsive"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/FBS-PACK.jpg" alt="" class="tim"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_accesorios#accesorios2"
                          title=""><strong>Memoria de expansión</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Memoria-de-expansin_c_882.html" title=""
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito img-responsive"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/db.56_thumbnail.jpg" alt=""
                        class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_accesorios#pantallas"
                          title=""><strong>Pantallas LED 16 / 7 Segmentos</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/7-segmentos_c_2272.html" title="" target="_blank"><img
                          src="images/shopping_cart.png" alt="Ir a tienda" class="carrito img-responsive"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="https://img.directindustry.es/images_di/photo-mg/151162-8769198.jpg" alt=""
                        class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_accesorios#rfid"
                          title=""><strong>Tarjeta RFID</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Tarjetas-RFID_c_884.html" title="" target="_blank"><img
                          src="images/shopping_cart.png" alt="Ir a tienda" class="carrito img-responsive"></a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/FBs-TBOX.gif" alt=""
                        class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/tablas_plc_fbs_box" title=""><strong>Set de
                            entrenamiento para PLCs</strong></a><br>
                      </p>
                    </td>
                    <td>
                      <a href="https://tienda.logicbus.com.mx/Set-de-entrenamiento-para-PLCs_c_885.html" title=""
                        target="_blank"><img src="images/shopping_cart.png" alt="Ir a tienda"
                          class="carrito img-responsive"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <h2>Drivers</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img
                        src="https://webforpc.com/wp-content/uploads/2015/12/Windows-XP-SP3-Free-Download-Bootable-ISO.png"
                        alt="" class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/descargas/PL-2303_Driver_Installer.exe"
                          title=""><strong>Driver USB para Windows XP</strong></a><br>
                        Para acceder a estos drivers, favor de comunicarse con nuestro equipo de soporte</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img
                        src="https://3.bp.blogspot.com/-_lvqojfGCaU/T5rAN_gJiuI/AAAAAAAADcg/rQwJjQfLhrM/s1600/windows-vista-sp2-service-pack-2.jpg"
                        alt="" class="tim img-responsive"></td>
                    <td>
                      <p><a
                          href="https://www.logicbus.com.mx/descargas/vista-prolific-chip-driver-for-serial-adapters.zip"
                          title=""><strong>Driver USB para Windows Vista</strong></a><br>
                        Para acceder a estos drivers, favor de comunicarse con nuestro equipo de soporte</p>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <h2>FAQs</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img
                        src="https://3.bp.blogspot.com/-FihAyOoX0aU/WDWRB_ME1RI/AAAAAAAABPY/xL81dM-DHdQZgWZCVVOqcm3t8npC1fJpQCLcB/s1600/FAQs.gif"
                        alt="" class="tim img-responsive"></td>
                    <td>
                      <p><a href="" title=""><strong>PLCs Serie FBs</strong></a></p>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <h2>Ejemplos de programación</h2>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img src="assets/images/01/USB-601_1.jpg"
                        alt="Ejemplo programación" class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Temperatura_con_Modulo_FBs-TC6.pdf"
                          title=""><strong>Monitoreo de temperatura</strong></a><br>
                        Es una herramienta eficiente, completa y sencilla de controlar que le permitirá mejorar la visibilidad y ganar control de toda la cadena de frío de sus productos.</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Control_Motor_a_Pasos.pdf" title=""><strong>Control de motor a pasos</strong></a><br>
                        El motor paso a paso conocido también como motor de pasos es un dispositivo electromecánico que convierte una serie de impulsos eléctricos en desplazamientos angulares discretos, lo que significa que es capaz de girar una cantidad de grados (paso o medio paso) dependiendo de sus entradas de control.</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="assets/images/29/FBS-24MC.gif"
                        alt="Ejemplo programación" class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Lector_Codigo_de_Barras.pdf" title=""><strong>Lector de código de barras</strong></a><br>
                        Un lector de códigos de barras es un dispositivo electrónico que por medio de un láser lee el código de barras y emite el número que muestra el código de barras, no la imagen.</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Contador_ALta_Vel.pdf" title=""><strong>Contador de alta velocidad</strong></a><br>
                        Un contador es un dispositivo capaz de medir (contar) el número de cambios de nivel en una señal de entrada, activando una señal de salida cuando se alcanza un valor prefijado.</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="https://www.megaelektrikshop.net/urun-images/FBsB2DA-500x500.png"
                        alt="Ejemplo programación" class="tim img-responsive"></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Mensajes_en_el_FBs-DAP.pdf" title=""><strong>Mensajes en módulo FBs-DAP</strong></a><br>
                        El registro cronológico de errores contiene mensajes de error, aviso e información que se envían a los usuarios.<br>
                        Para clasificar los mensajes de un modo mejor que hacerlo simplemente por las categorías de error, aviso e información, puede definir identificadores individuales para cada mensaje escrito en el registro.</p>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <p><a href="https://www.logicbus.com.mx/pdf/Escalar_Valores.pdf" title=""><strong>Escalar valores</strong></a><br>
                        Monitorear la temperatura de un sensor con salida a corriente (4 – 20mA) mediante la utilización de una tarjeta de expansión de entradas análogas “FBs-B4AD”, además de visualizar el valor de la temperatura “°C” en el display de 7 segmentos delkit de practicas FBs-TBOX.</p>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td><img
                        src="https://www.logicbus.com.mx/imagenes/Esquema_Monitoreo_Control_a_distancia_Ethernet.jpg"
                        alt="Esquemas Logicbus" class="tim"></td>
                    <td><strong><a href="" title="">Ejemplos de esquemas de  conexión</a></strong>
                      <p>Cuando se habla de esquemas de conexion, se hace referencia a las diferentes formas que existen para enlazar nuestros productos de la serie FBs</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </center>
        </div>
      </div>
    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>