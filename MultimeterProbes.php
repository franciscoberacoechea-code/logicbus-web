<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


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

  <title>LogicBus/Productos/Multimeter Probes </title>
  <meta name="description"
    content="Las puntas de multímetro ofrecen una solución rápida y fácil en donde la conexión permanente no se requiere. ">
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
            <td height="13" colspan="2"><a href="productos">Productos</a>-&gt;<a href="usb">USB</a>-&gt;<a
                href="automotive_usb">Kit y Accesorios Automotrices</a>-&gt;Puntas de Multímetro</td>
          </tr>
          <tr>
            <td align="center">
              <h1>Puntas de Multímetro<br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span></h1>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div class="cardSubA" style="Text-align:center;margin:auto;"> 
                  <a href="#" title="Ir a Tienda Logicbus" target="_blank">
                    <img style="max-height:300px;max-width:200px"  src="imagenes/07/Automotive/multimeter_probe.gif"  alt="Puntas de Multímetro" title="Puntas de Multímetro" >
                  </a>
                <br>
                <a href="#" title="Ir a Tienda Logicbus" target="_blank"><p class="subTitulo">Puntas de Multímetro</p></a>
                <div class="">
                  <p style="Text-align:justify;margin:auto;">Las puntas de multímetro ofrecen una solución rápida y fácil en donde la conexión
              permanente no se requiere. El socket de 4 mm en el mango de las puntas se conectan directamente en la
              punta de pruebas TA000.</p>
                  
                </div>
              </div>
            </td>
          </tr>
          
          <tr>
            <td align="left"><p style="Text-align:justify;margin:auto;">Las puntas de multímetro ofrecen una solución rápida y fácil en donde la conexión
              permanente no se requiere. El socket de 4 mm en el mango de las puntas se conectan directamente en la
              punta de pruebas TA000.</p>
              <ul style="Text-align:left;" >
                <li>Largo - 115 mm
                <li>Diámetro - 20 mm </li>
              </ul>
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