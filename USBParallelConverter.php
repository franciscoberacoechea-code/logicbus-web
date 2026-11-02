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

  <title>Logicbus/ Productos/ USB/ Automotriz/ USB to Parallel Converter</title>
  <meta name="description" content="El convertidor de USB a paralelo te permite conectar el puerto paralelo del osciloscopio y los productos de adquisición de datos al puerto USB de una PC.">
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, 	Consultoría, Consultoria, Cubos,  Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua,Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de   Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, USB, Automotriz, converter, convertidor, paralelo, parallel, diagnostico, automotive">
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
        <table width="100%" border="0">
          <tr>
            <td height="13"><a href="productos">Productos</a>-&gt;<a href="usb">USB</a>-&gt;<a
                href="automotive_usb">Kit y Accesorios Automotrices</a>-&gt;Convertidor de USB a paralelo</td>
          <tr>
            <td>
              <h1 style="Text-align:center;"> Convertidor de USB a paralelo<br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span></h1>
            </td>
          </tr>
          <tr>
            <td align="center">
             <div class="cardSubA" style="Text-align:center;margin:auto;"> 
                  <a href="#" title="Ir a Tienda Logicbus" target="_blank">
                    <img src="imagenes/07/Automotive/usb_oscilloscope.jpg"
                  alt="USB to Parallel Converter" title="USB to Parallel Converter" width="200px">
                  </a>
                <br>
                <a href="#" title="Ir a Tienda Logicbus" target="_blank"><p class="subTitulo">Convertidor de USB a paralelo<br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span></p></a>
                <div class="">
                  <p style="Text-align:justify;margin:auto;">El convertidor de USB a paralelo te permite conectar el puerto paralelo del osciloscopio y
              los productos de adquisición de datos al puerto USB de una PC.<br>
              éste convertidor sólo es útil para usarse con los productos de puerto paralelo - no
              puede usarse con impresoras.</p>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td align="left">
              <strong>Características:</strong>
              <ul style="text-align:left;">
                <li>Con este adaptador todos los productos paralelo son compatible con USB. </li>
                <li>Libera tus puertos paralelos para imprimir</li>
                <li>Utiliza múltiples dispositivos en una sola PC</li>
                <li>Evita conflictos con IRQs</li>
                <li>No se necesita instalar una tarjeta extra ni de abrir la computadora</li>
                <li>Los LED indican si está corriendo</li>
                <li>Compatible con USB </li>
              </ul><br>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>