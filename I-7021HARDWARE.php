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

  <title>Logicbus/ Productos/ Serial/ RS-485/ I-7000/ Analog/ I-7021 hardware</title>
  <meta name="description" content="Modulos I-7021 hardware">
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michocán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuctán, Yucatan, Zacatecas, Analog, I/O, input, ouput, data, acquisition, modules, I-7021, hardware">

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
                  href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_ANALOGICOS_I-7000">Analogicos</a>-&gt;<a
                  href="I-7021">I-7021</a>-&gt;Hardware</div>
            </td>
          </tr>
          <tr align="center">
            <td valign="top">
              <h1> I-7021 Hardware</h1>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top">
          </tr>
          <tr>
            <td height="16" valign="top">
              <div align="right"><a href="#"><img title="Ir a tienda" src="images/shopping_cart.png" border=0
                    onClick="atienda()" alt="Comprar"></a></div>
          </tr>
          <tr>
            <td height="16" valign="top">
              <p align="center"><strong>Estructura interna de entrada y salida</strong></p>
              <p align="center"><a href="imagenes/02/i-7021p_internal.jpg" target="_blank"><img
                    src="imagenes/02/i-7021p_internal.jpg" alt="Click para ampliar" width="277" height="234"
                    border="0"></a></p>
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
              <p><strong> Asignación de pernos</strong></p>
              <p><a href="imagenes/02/I-7021PIN.jpg" target="_blank"><img src="imagenes/02/I-7021PIN.jpg"
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
                <p> Voltage Output Wire Connection<br>
                  <img src="imagenes/02/i-702x_voltage_output.gif" width="350" height="189" border="0" alt="i-702x_voltage_output">
                </p>
              </div>
            </td>

          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
              <p align="center"> Current Output Wire Connection

              </p>
              <p align="center"> <img src="imagenes/02/i-702x_current_output-1.gif" width="350" height="189" border="0" alt="i-702x_current_output-1">
              </p>
              <p align="center"><img src="imagenes/02/i-702x_current_output-2.gif" width="350" height="189" alt="i-702x_current_output-2"
                  border="0"><br>
                Note: To access the jumpers, the cover must be opened.</p>
            </td>
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