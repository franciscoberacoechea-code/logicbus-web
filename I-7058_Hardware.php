<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
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

  <title>I-7058/I-7058D Hardware - Estructura interna -Logicbus S.A de C.V</title>
  <meta name="description" content="Modulos I-7052 hardware">
  <meta name="keywords"
  content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, Analog, I/O, input, ouput, data, acquisition, modules, I-7052, hardware">
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
  
</head>

<body>
  <?php
  arriba();
  ?>
  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <table width="100%">
          <tr align="center">
            <tr>
              <td colspan="2" align="center">
                <div align="left">
                  <a href="productos">Productos</a>-&gt;<a
                  href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a
                  href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_DIGITALES_I-7000">Digital</a>-&gt;<a
                  href="I-7058_I-7058D">I-7058 / I-7058D</a>-&gt; Hardware 
                </div>
              </td>
            </tr>
            <td valign="top">
              <h1>I-7058/I-7058D Hardware</h1>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top"></td>
          </tr>
          <tr>
            <td height="16" valign="top">
            </td>
          </tr>
          <tr>
            <td height="16" valign="top">
              <p align="center"><strong>Internal I/O Structure</strong></p>
              <p align="center">
                <a href="imagenes/02/i-7058d_internal.jpg" target="_blank">
                  <img src="imagenes/02/i-7058d_internal.jpg" alt="Click para ampliar" width="277" height="234" border="0">
                </a>
              </p>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">
              <p><strong>PIN Assignment</strong></p>
              <p><a href="imagenes/02/i-7058a.jpg" target="_blank"><img src="imagenes/02/i-7058a.jpg"
                alt="Click para ampliar" width="269" height="269" border="0"></a>
              </p>
              <p><a href="imagenes/02/i-7058da.jpg" target="_blank"><img src="imagenes/02/i-7058da.jpg"
                alt="Click para ampliar" width="269" height="269" border="0"></a>
              </p>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="left"><strong>Wire Connection </strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Digital Input</strong></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><img src="imagenes/02/i-7058_digital_01.gif" border="0" alt="i-7058_digital_01"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <?php
  abajo();
  ?>
</body>
</html>