<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html  lang="es" >

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

  <title>Hardware I-7051/I-7051D - (ET-7000) - Logicbus S.A de C.V</title>
  <meta name="keywords"
    content="Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Consultoría, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, Ethernet, Modbus TCP,ET-7042, Módulo, modulo, 8 entradas, análogas, analoga, digital, daq, ET, ES, IO, proteccion de alto voltaje, 4 salidas, aisladas, SCADA, Modbus, TCP">
  <meta name="revisit after" content="14 days">
  <meta name="description" content="ET-7042: Módulo de 16 Salidas Digitales de Colector Abierto Tipo Sink">
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
            <td colspan="2" align="center">
              <div align="left"><a href="productos">Productos</a>-&gt;<a
                  href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a
                  href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_DIGITALES_I-7000">Digital</a>-&gt;<a
                  href="I-7051_I-7051D">I-7051 / I-7051D</a>-&gt; Hardware </div>
            </td>
          </tr>
          <tr>
            <td align="center">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="32" class="Estilo10"><h1> Hardware I-7051/I-7051D</h1> </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="Estilo1">


                    Estructura Interna E / S </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/Hardware/i-7051_internal.gif" width="450" height="368" alt="i-7051 internal">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="Estilo1">&nbsp;</td>
                </tr>
                <tr>
                  <td class="Estilo1"> Asignación de PIN </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/Hardware/i-7051.gif" width="450" height="390" alt="i-7051"></div>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <div align="center"><img src="imagenes/02/Hardware/i-7051d.gif" width="450" height="392" alt="i-7051d"></div>
                  </td>
                </tr>
                <tr>
                  <td class="Estilo1">&nbsp;</td>
                </tr>
                <tr>
                  <td class="Estilo1"> Conexión </td>
                </tr>
                <tr>
                  <td>
                    <table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" class="Estilo1">
                      <tr>
                        <td width="8%" rowspan="4" bgcolor="#CCCCCC" class="Estilo1">
                          <div align="center">Tipo de entrada </div>
                        </td>
                        <td colspan="2" bgcolor="#CCCCCC">
                          <div align="center"> Contacto Seco </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <div align="center"><img src="imagenes/02/Hardware/i-7051_dry.gif" width="306" height="81" alt="i-7051_dry">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#CCCCCC">
                          <div align="center"> Contacto húmedo </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="47%">
                          <div align="right"><img src="imagenes/02/Hardware/i-7051_wet_1.gif" width="280" height="70" alt="i-7051 wet 1">
                          </div>
                        </td>
                        <td width="45%"><img src="imagenes/02/Hardware/i-7051_wet_2.gif" width="292" height="74" alt="i-7051 wet 2"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width="255" align="center">
              <div align="left"></div>
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