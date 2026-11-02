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
  <title>LogicBus/Productos/Voltage</title>
  <meta name="description" content="Registrador de voltaje DC, nivel bajo con Bater&iacute;a de 10 a&ntilde;os de vida">
  <!-- keywords -->
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
            <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a
                href="voltage_logger">Voltaje</a>-&gt;Aut&oacute;nomos</td>
          </tr>
          <tr>
            <td colspan="2">
              <h2 align="center"><strong> </strong>Aut&oacute;nomo para an&aacute;lisis posterior en PC</h2>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td width="316" height="39">
              <div align="center"><a href="LBR1-531011"><img src="imagenes/53/r1_1-1.jpg" height="150"
                    border="0"></a></div>
            </td>
            <td width="502"><a href="LBR1-531011"><strong>LBR1-531011</strong></a><br>
              Registrador de Voltaje/Corriente </td>
          </tr>
          <tr>
            <td height="20" colspan="2">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td height="20">
              <div align="center"><a href="LBR2-53104"><img src="imagenes/53/r2_104_1b.jpg"
                    alt="Temp101- Temperature Recorder" height="150" border="0"></a></div>
            </td>
            <td><a href="LBR2-53104"><strong>LBR2-53104</strong></a><br>
              Registrador de Voltaje/Corriente </td>
          </tr>
          <tr>
            <td height="20" colspan="2">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="voltage-corriente_volt101A"><img src="imagenes/09/volt101a_single_2.jpg"
                    width="130" border="0" alt="Volt101A"></a></div>
            </td>
            <td><a href="voltage-corriente_volt101A"><strong>Volt101A</strong></a><br>
              Registrador de voltaje DC, nivel bajo con Bater&iacute;a de 10 a&ntilde;os de vida </td>
          </tr>
          <tr>
            <td colspan="2">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="voltage-corriente_quadvolt"><img
                    src="imagenes/09/Voltaje-Corriente/quadvolt.gif" width="130" border="0"
                    alt="QuadVolt - 4 Channel Low Level Voltage Recorder"></a></div>
            </td>
            <td><a href="voltage-corriente_quadvolt"><strong>QuadVolt </strong></a><br>
              Registrador de voltaje DC de 4 canales, nivel bajo, entrada diferencial</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="voltage-corriente_octvolt"><img
                    src="imagenes/09/Voltaje-Corriente/octvolt.gif" width="130" border="0"
                    alt="OctVolt - 8 Channel Low Level Voltage Recorder"></a></div>
            </td>
            <td><a href="voltage-corriente_octvolt"><strong>OctVolt</strong></a><br>
              Registrador de voltaje DC de 8 canales, nivel bajo, entrada diferencial</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <hr align="center" color="#CCCCCC">
            </td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="Usb_503"><img src="imagenes/01/usb-503.gif" alt="USB-503" width="130"
                    border="0"></a></div>
            </td>
            <td><a href="Usb_503"><strong>USB-503</strong></a><br>
              Registrador de Datos de voltaje de 0 a 30 VDC</td>
          </tr>
          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
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