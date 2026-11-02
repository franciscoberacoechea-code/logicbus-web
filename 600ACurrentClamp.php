<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html lang="es"   >

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

  <title>LogicBus/Productos/600A Current Clamp</title>
  <meta name="description"
    content="Productos->USB->Kit y Accesorios Automotrices->Pinza de Corriente 600A - Logicbus S.A. de C.V.">
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
            <td height="13"><a href="productos">Productos</a>-&gt;<a href="usb_categorias">USB</a>-&gt;<a
                href="automotive_usb">Kit y Accesorios Automotrices-</a>&gt;Pinza de Corriente 600A</td>
          <tr>
          <tr>
            <td align="center">
              <h1> <br>Pinza de Corriente 600A</h1>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div class="cardSubA" style="Text-align:center;margin:auto;">
                <a href="#" title="Ir a Tienda Logicbus" target="_blank">
                  <img src="imagenes/07/Automotive/current_clamp.gif" alt="600A Current Clamp"
                    title="600A Current Clamp" width="200px">
                </a>
                <br>
                <a href="#" title="Ir a Tienda Logicbus" target="_blank">
                  <p class="subTitulo">Pinza de Corriente 600A <br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span></p>
                </a>
              </div>





            </td>
          </tr>

          <tr>
            <td align="left">
              <div align="center">
                <table width="480" border="1" cellspacing="0" cellpadding="0">
                  <tr bgcolor="#999999">
                    <td rowspan="4"> Precisión: </td>
                    <td> DC </td>
                    <td> 0 a 600 A &plusmn; (2% lectura +2A) </td>
                  </tr>
                  <tr>
                    <td bgcolor="#CCCCCC"> AC </td>
                    <td bgcolor="#CCCCCC"> 0 a 300 A &plusmn; (2% lectura +2A) </td>
                  </tr>
                  <tr>
                    <td bgcolor="#999999"> AC/DC </td>
                    <td bgcolor="#999999"> 300 A a 500 A &plusmn; (3% lectura +2A) </td>
                  </tr>
                  <tr>
                    <td bgcolor="#CCCCCC"> AC/DC </td>
                    <td bgcolor="#CCCCCC"> 500 A a 600 A &plusmn; (6% lectura +2A) </td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#CCCCCC"> Rango de frecuencia AC</td>
                    <td bgcolor="#CCCCCC"> 50 Hz a 400 Hz </td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#999999"> Voltaje de salida </td>
                    <td bgcolor="#999999"> 1 mV por 1 A (0 a 600 mV AC &amp; DC) </td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#CCCCCC"> Max tamaño del conductor</td>
                    <td bgcolor="#CCCCCC"> 30 mm </td>
                  </tr>
                  <tr>
                    <td colspan="2" bgcolor="#999999"> Temperatura de Operación</td>
                    <td bgcolor="#999999"> 0 &deg;C a 50 &deg;C, 70% RH </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>

        </table>
      </div>
    </div>
    <br>
  </div>
  <?
  abajo();
  ?>
</body>

</html>