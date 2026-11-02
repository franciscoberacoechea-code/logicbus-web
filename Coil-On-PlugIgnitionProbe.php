<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html lang="es" >

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <link rel = "alternate" href = "https://www.logicbus.com.mx/" hreflang = "es" />
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

  <title>Logicbus/ Productos/ USB/ Automotriz/ Coil-On-Plug Ignition Probe</title>
  <meta name="description"
    content="La punta de ignición directa (COP) es la manera más rápida de checar la ignición directa y las bujías.">
  <meta name="keywords"
    content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Datos, 1024HLS, HLS">
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
            <td height="13" colspan="2"><a href="productos">Productos</a> -&gt;<a href="usb"> USB</a>-&gt;<a
                href="automotive_usb">Kit y Accesorios Automotrices</a>-&gt;Punta de Ignición directa</td>
          </tr>
          <tr>
            <td align="center">
              <h1> Punta de Ignición directa <br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span></h1>
            </td>
          </tr>
          <tr>
            <td align="center">
            <div class="cardSubA" style="Text-align:center;margin:auto;"> 
                  <a href="#" title="Ir a Tienda Logicbus" target="_blank">
                    <img src="imagenes/07/Automotive/coilonplug.gif" alt="Coil-On-Plug Ignition Probe" title="Coil-On-Plug Ignition Probe" width="200px">
                  </a>
                <br>
                <a href="#" title="Ir a Tienda Logicbus" target="_blank"><p class="subTitulo">Punta de Ignición directa</p></a>
                <div class="">
                  <p style="Text-align:justify;margin:auto;">La punta de ignición directa (COP) es la manera más rápida de checar
                la ignición directa y las bujías.</p>
                   
                </div>
              </div>
            </td>
          </tr>
          
          <tr>
            <td align="left">
              <div align="left">
                <ul>
                  <li>Encuentra fallas rápidamente
                  <li>Trabaja en todos los osciloscopios y en sistemas capaces de mostrar los patrones de encendido
                  <li>útil para usarse en la mayoría de sistemas convencionales de encendido
                  <li>Punta grande (36 cm / 14 inches incluyendo el mango)
                  <li>No requiere baterías </li>
                </ul>
              </div>
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