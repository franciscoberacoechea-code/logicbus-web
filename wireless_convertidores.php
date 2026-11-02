<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
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
  <title>Dispositivos de adquisicion de datos tipo ZigBee</title>
  <meta name="description"
    content="Tecnologia Zigbee, ZB-2052, ZB-2060, ZB-2060-T, ZB-2052, ZB-2052-T. ZigBee es un protocolo de alto nivel de comunicacion inalambrica de bajo consumo, basada en el estandar IEEE 802.15.4 (Wireless Personal Area Network, WPAN).">

  <meta name="keywords"
    content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Radio Frecuencia, Cubos, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas, Tecnologia ZigBee, Dispositivo de funcion completa - Coordinador ZigBee, Dispositivo de funcion completa - Router ZigBee, Dispositivo de función reducida - ZigBee Dispositivos Finales, ¿Quieres conocer un poco mas sobre la tecnologia ZigBee y nuestros dispositivos?">

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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="productos">Productos</a>-><a href="Industrial_Wireless"> Inalámbricos</a>-> Tecnología
                Zigbee <br>
                <h1>Tecnología Zigbee</h1>
                <p>ZigBee es un protocolo de alto nivel de comunicación inalámbrica de bajo consumo, basada en el
                  estándar IEEE 802.15.4 (Wireless Personal Area Network, WPAN). Es ideal para aplicaciones que
                  requieren una comunicación segura con una baja tasa de envío de datos optimizando la vida útil de sus
                  baterías. Se distingue de otras tecnologías gracias a: <br>
                <ul>
                  <li>Su bajo consumo.</li>
                  <li>Su topología de red en malla.</li>
                  <li>Su fácil integración (se pueden fabricar nodos con muy poca electrónica).</li>
                </ul>
                </p>

                <p>Hay tres tipos diferentes de dispositivos ZigBee dentro de una red ZigBee:</p>

                <ul class="text-justify">
                  <li><b>Dispositivo de función completa - Coordinador ZigBee (Maestro):</b><br>
                    Sólo existe un coordinador en cada red ZigBee. Su función es almacenar información sobre la red y
                    determinar la ruta de transmisión óptima entre dos nodos debtro de la red.</li>
                  <li><b>Dispositivo de función completa - Router ZigBee (Esclavo):</b><br>
                    El Router actúa como un nodo intermedio que siempre está en el modo activo. Su función principal es
                    transferir y pasar los datos entre los dispositivos.</li>
                  <li><b>Dispositivo de función reducida - ZigBee Dispositivos Finales (End Device - Slave):</b><br>
                    Este dispositivo contiene una cantidad mínima de funcionalidad para permitirle hablar con su nodo
                    padre (ya sea el coordinador o un router); normalmente está en modo de espera y no puede transmitir
                    datos directamente desde otros dispositivos. Estos son los dispositivos con entradas y salidas
                    digitales y analogas.</li>
                </ul>

                <p class="text-justify"><b>¿Quieres conocer un poco mas sobre la tecnologia ZigBee y nuestros
                    dispositivos?</b> visita nuestro blog <b><a
                      href="https://www.logicbus.com.mx/blog/what-is-zigbee-technology/" target="_blank">"Que es la
                      tecnologia ZigBee y sus dispositivos"</a></b>, donde explicamos las diferentes topologias que
                  podemos formar, asi como algunos ejemplos de como se puede usar los coordinadores, routers y
                  dispositvos finales para lograr extender una red existente o crear una nueva.</p>
                <br>


                <h2>Productos de Tecnología Zigbee</h2>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td><img src="imagenes/02/ZT-2550_1.jpg" class="img-responsive" alt="Convertidores Zigbee"
                          title="Convertidores Zigbee"></td>
                      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                        <p><a href="zigbee_convertidores"><strong>Convertidores Zigbee</strong></a><br>
                          Los módulos son pequeños convertidores inalámbricos ZigBee basados en el estándar IEEE802.15.4
                          que permiten que las interfaces RS-232, RS-485 puedan ser convertidas a una red personal
                          ZigBee.</p>
                      </td>
                      <td><a href="https://tienda.logicbus.com.mx/Convertidores-Zigbee_c_774.html" title="Ir a Tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                      </td>
                    </tr>

                    <tr>
                      <td><img src="imagenes/02/ZT-2510_1.jpg" class="img-responsive" alt="Repetidores Zigbee"
                          title="Repetidores Zigbee"></td>
                      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                        <p><a href="zigbee_repetidores"><strong>Repetidores Zigbee</strong></a><br>
                          Repetidor inalámbrico ZigBee (Esclavo, router ZigBee), distancia de comunicación de hasta 700
                          metros.</p>
                      </td>
                      <td><a href="https://tienda.logicbus.com.mx/Repetidores-Zigbee_c_775.html" title="Ir a Tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                      </td>
                    </tr>

                    <tr>
                      <td><img src="imagenes/02/ZT-2042_1.jpg" class="img-responsive" alt="E/S Digitales Zigbee"
                          title="E/S Digitales Zigbee"></td>
                      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                        <p><a href="zigbee_digitales"><strong>E/S Digitales Zigbee</strong></a><br>
                          Módulo inalámbrico ZigBee de 4 canales ZigBee Alliance de salida de relevador PhotoMOS y 4
                          canales de salida de colector abierto, soporta temperaturas de funcionamiento de -25 ~ +75 °C.
                        </p>
                      </td>
                      <td><a href="https://tienda.logicbus.com.mx/Serie-ZT-2000_ep_170-1.html#modulos"
                          title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda"
                            class="carrito"></a>
                      </td>
                    </tr>

                    <tr>
                      <td><img src="imagenes/02/ZT-2017_1.jpg" class="img-responsive" alt="E/S análogas Zigbee"
                          title="E/S análogas Zigbee"></td>
                      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                        <p><a href="zigbee_analogas"><strong>E/S análogas Zigbee</strong></a><br>
                          Módulo inalámbrico Zigbee con canales de entrada RTD, con eliminación de resistencia RTD de 3
                          hilos. Soporta protocolos DCON y Modbus RTU.</p>
                      </td>
                      <td><a href="https://tienda.logicbus.com.mx/Serie-ZT-2000_ep_170-1.html#modulos"
                          title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda"
                            class="carrito"></a>
                      </td>
                    </tr>

                    <tr>
                      <td><img src="imagenes/02/ZT-USBC.jpg" class="img-responsive" alt="Accesorios Zigbee"
                          title="Accesorios Zigbee"></td>
                      <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                        <p><a href="ZT-USBC"><strong>Accesorios Zigbee</strong></a><br>
                          El convertidor de USB a ZigBee ZT-USBC es un pequeño convertidor inalámbrico basado en la
                          alianza ZigBee en el protocolo estándar IEEE802.15.4, que permite a una interfaz USB ser
                          convertida a una red personal ZigBee.</p>
                      </td>
                      <td><a href="https://tienda.logicbus.com.mx/Accesorios_c_2084.html" title="Ir a Tienda"
                          target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>