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
  <title>Logicbus/Productos/Adquisición de datos RS-485/Analog IO/I-7044_Hardware</title>
  <meta name="description" content="I-7044/I-7044D: descripción del hardware Entrada digital aislada de 4 canales y módulo DO aislado de 8 canales ICP DAS">
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
          <tr>
            <td colspan="2" align="center">
              <div align="left"><a href="productos">Productos</a>-&gt;<a
                  href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;<a
                  href="sub_data1">I-7000</a>-&gt;<a href="TABLAS_DIGITALES_I-7000">Digital</a>-&gt;<a
                  href="I-7044_I-7044D">I-7044 / I-7044D</a>-&gt; Hardware </div>
            </td>
          </tr>
          <td valign="top">
            <h1><br>I-7044/I-7044D Hardware</h1>
          </td>
          </tr>
          <tr>
            <td height="16" valign="top">
              <div align="right"><a href="#"><img title="Ir a tienda" src="images/shopping_cart.png" border=0
                    onClick="atienda()" alt="Comprar"></a></div>
          </tr>
          <tr>
            <td height="16" valign="top">
              <p align="center"><strong>Internal I/O Structure</strong></p>
              <p align="center"><a href="imagenes/02/i-7044_internal[1].jpg" target="_blank"><img
                    src="imagenes/02/i-7044_internal[1].jpg" alt="Click para ampliar" width="277" height="234"
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
              <p><strong>PIN Assignment</strong></p>
              <p><a href="imagenes/02/i-7044[2].jpg" target="_blank"><img src="imagenes/02/i-7044[2].jpg"
                    alt="Click para ampliar" width="269" height="269" border="0"></a></p>
              <p><a href="imagenes/02/i-7044d[1].jpg" target="_blank"><img src="imagenes/02/i-7044d[1].jpg"
                    alt="Click para ampliar" width="269" height="269" border="0"></a></p>
            </td>
          </tr>
          <tr>
            <td colspan="2"><strong>Wire Connection </strong></td>
          </tr>
          <tr>
            <td><strong>Input Type</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Dry Contact Signal Input</strong></td>
          </tr>

          <tr>
            <td align="center"><img src="imagenes/02/dry_01[2].gif" border="0" alt="dry 01"><br><br><img
                src="imagenes/02/dry_02[1].gif" border="0" alt="dry 01"></td>

          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>TTL/CMOS Signal Input</strong></td>
          </tr>

          <tr>
            <td align="center"><img src="imagenes/02/ttl_01[2].gif" border="0" alt="ttl 01"><br><br><img
                src="imagenes/02/ttl_02[1].gif" border="0" alt="ttl 02"></td>

          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>NPN Output</strong></td>
          </tr>

          <tr>
            <td align="center"><img src="imagenes/02/open_01[2].gif" border="0" alt="open 01"><br><br><strong>NP
                Output<br><br></strong><img src="imagenes/02/open_02[1].gif" border="0" alt="open 02"></td>

          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong>Output Type</strong></td>
          </tr>
          <tr>
            <td align="center"><strong>Open Collector</strong></td>
          </tr>

          <tr>
            <td align="center"><img src="imagenes/02/open_output_01.gif" border="0" alt="open output 01"><br><br><img
                src="imagenes/02/open_output_02.gif" border="0" alt="open output 02"></td>

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