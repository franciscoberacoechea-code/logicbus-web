<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
  <title>Inalámbrico | Registradores de Voltage | Logicbus</title>
  <meta name="description"
    content="Para PC con análisis en tiempo real, Registrador de Voltaje, Autónomo para análisis posterior en PC, Inalámbrico, Registradores de Voltage, Logicbus">
  <meta name="keywords"
    content="Inalámbrico, Registradores de Voltage, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, productos, data, logger, data logger, registradores, registrador, voltage, voltaje">
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
        <table width="100%" border="0">
          <tr>
            <td colspan="3"><a href="productos">Productos</a>-&gt;<a
                href="datalogger">Registradores</a>-&gt;Voltaje</td>
          </tr>
          <tr>
            <td colspan="3">
              <h1 align="center">Registrador de Voltaje </h1>
            </td>
          </tr>
          <tr>
            <td height="21" colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td width="203">
              <div align="center"><img src="imagenes/07/DataLoggers/adc16.gif" alt="ADC-10" width="150" border="0"
                  title="Para más información, haga click"></div>
            </td>
            <td width="509"><a href="voltage_realtime"><strong>Para PC con an&aacute;lisis en tiempo
                  real</strong></a></td>
            <td width="60" align="right"><a href="#"><img src="images/shopping_cart.png" alt="" border=0 width="40"></a>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><img src="imagenes/09/volt101a_single_2.jpg" width="130" border="0" alt="Volt101A">
              </div>
            </td>
            <td><strong><a href="voltage_autonomos">Aut&oacute;nomo para an&aacute;lisis posterior en
                  PC</a></strong></td>
            <td align="right"><a href="#"><img src="images/shopping_cart.png" alt="" border=0 width="40"></a></td>
          </tr>
          <tr>
            <td colspan="3">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><img src="imagenes/09/RFVolt2000A.jpg"
                  alt="RFVolt101A: Registrador de Voltaje DC de Nivel Bajo y Transmisor Inalámbrico" width="100"
                  border="0"></div>
            </td>
            <td><a href="voltage_wireless"><strong>Inal&aacute;mbrico</strong></a></td>
            <td align="right"><a href="https://tienda.logicbus.com.mx/Registradores-Inal%C3%A1mbricos_c_3419.html"
                target="_blank"><img src="images/shopping_cart.png" alt="" border=0 width="40"></a></td>
          </tr>

        </table>
      </div>
    </div>
  </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>