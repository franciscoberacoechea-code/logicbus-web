<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html lang="es"  >

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

  <title>LogicBus/Productos/20:1 Attenuator </title>
  <meta name="description" content="El PP198 ha sido diseñado para permitir que las formas de onda del inyector de combustible y el encendido sean medidas. El PP198 es un atenuador de 20 a 1.">
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
                href="automotive_usb">Kit y Accesorios Automotrices</a>-&gt;Atenuador 20:1 </td>
          </tr>
          <tr>
            <td align="center">
              <h1><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span> Atenuador 20:1 </h1>
            </td>
          </tr>
          <tr>
            <td align="center"><img src="imagenes/07/Automotive/attenuator.gif" alt="20:1 Attenuator" width="232"
                height="91" border="0" title="Para más información, haga click"></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">El PP198 ha sido diseñado para permitir que las formas de onda del inyector de
              combustible y el encendido sean medidas. El PP198 es un atenuador de 20 a 1. ésto significa que una
              señal de 20 V en la entrada, aparecerá como una señal de 1V a la salida. Como la
              señal es atenuada, el PP198 permite que voltajes mas grandes d el rango de &plusmn;20 V sean
              medidos .<br>
              Cuando se usa con un osciloscopio proporciona protección de entrada incrementada contra sobrecargas
              cuando se trabaja con señales inductivas como inyectores e ignición primaria. Bajo ninguna
              circunstancia se debe usar éste atenuador para medir las formas de onda de la ignición
              secundaria.</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
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