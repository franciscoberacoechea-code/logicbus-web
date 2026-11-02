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
  <title>LogicBus/Productos/USB Voltage-Current </title>
  <meta name="description"
    content="Dispositivo USB modelo USB Voltage-Current marca Personal Measurement Device&trade;">
  <meta name="keywords"
    content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Datos, 1208LS, LS, Device, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatíán, Yucatan, Zacatecas">
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
        <table width="100%" border="0">
          <tr>
            <td align="center">
              <h1>USB Voltage-Current </h1>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div class="cardSubA" style="Text-align:center;margin:auto;">
                <a  title="Ir a Tienda Logicbus" target="_blank">
                  <img src="imagenes/01/usb-3104small.gif" alt="USB Voltage-Current" title="USB Voltage-Current"
                    style="max-width:200px;max-height:200px;">
                </a>
                <br>
                <a title="Ir a Tienda Logicbus" target="_blank">
                  <p class="subTitulo">USB Voltage-Current</p>
                </a>
                <div class="">
                  <p style="Text-align:justify;margin:auto;">Dispositivo USB modelo USB Voltage-Current marca Personal Measurement Device&trade;</p><br>
                  
                </div>
              </div><br>
            </td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left"><br>
              <ul Style="text-align:left">
                <li>16-bit analog voltage/current output<br><br>
                <li>8 digital I/O<br><br>
                <li>32-bit event counter<br><br>
                <li>Includes USB cable<br><br>
                <li>Out-of-the-box ready factory calibrated<br><br>
                <li> Analog voltage and current output ranges: &plusmn;10V, 0-10V, 0-20mA <br><br>
                <li>Fully supported by Measurement Studio- MCC edition , SoftWIRE&reg; , DASYLab&reg; , &amp;
                  LabVIEW<br><br>
                </li>
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