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

  <title>Logicbus/ Productos/ Serial/ RS-485/ I-7000/ Analog/ I-7017 hardware</title>
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="author" content="Logicbus">
  <meta name="description" content="Modulos I-7017 hardware">
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, Analog, I/O, input, ouput, data, acquisition, modules, I-7017, hardware">

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
        <table width="100%">
          <tr align="center">
            <td valign="top">
              <div align="left"><a href="productos">Productos</a>-&gt;<a
                  href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a
                  href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_ANALOGICOS_I-7000">Analog</a>-&gt;<a
                  href="I-7017">I-7017</a>-&gt;Hardware</div>
            </td>
          </tr>
          <tr align="center">
            <td valign="top">
              <h1> I-7017 Hardware</h1>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top">
          </tr>
          <tr>
            <td height="16" valign="top">
              <p align="center"><strong>Estructura interna de entrada y salida</strong></p>
              <p align="center"><a href="imagenes/02/i-7017f_internal.jpg" target="_blank"><img
                    src="imagenes/02/i-7017f_internal.jpg" alt="Click para ampliar" width="277" height="234"
                    border="0"></a></p>
          </tr>

          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">
              <p><strong> Asignación de pernos</strong></p>
              <p><a href="imagenes/02/I-7017PIN.jpg" target="_blank"><img src="imagenes/02/I-7017PIN.jpg"
                    alt="Click para ampliar" width="269" height="269" border="0"></a></p>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <div align="center">
                <p><strong> Conexión de cables</strong></p>
                <p> Analog Input Channel 0 to 5 Wire Connection<br>
                  <img src="imagenes/02/i-701718_analog_input-1.gif" width="300" height="107" border="0" alt="diagrma 1">
                </p>
                <p><img src="imagenes/02/7017TransmitterConnect02.gif" width="330" height="162" border="0"  alt="diagrma 2"></p>
                <p><img src="imagenes/02/i-701112_analog_input-2.gif" width="300" height="108" border="0"  alt="diagrma 3"><br>
                  Note: When connecting to a current source, an optional external 125-Ohn resistor is required.</p>
              </div>
            </td>

          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <div align="center">
                <p> Analog Input Channel 6 and 7 Digital</p>
                <p> <strong>8 different mode</strong><br>
                  <img src="imagenes/02/i-7017_analog_input-67E7a.gif" width="300" height="313" border="0"  alt="diagrma 4">
                </p>
                <p><strong> INIT* mode<br></strong><img src="imagenes/02/i-7017_analog_input-67E7b.gif" width="300"
                    height="317" border="0"  alt="diagrma 5"></p>
              </div>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <p align="center">&nbsp;</p>
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