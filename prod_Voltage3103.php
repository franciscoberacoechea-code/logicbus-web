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
  <title>LogicBus/Productos/USB-3103</title>
  <meta name="description" content="Dispositivo USB modelo USB-3103 marca Personal Measurement Device&trade;">
  <meta name="keywords"
    content="LogicBus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisición, Adquisicion, Datos, 1208LS, LS, Device">
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
            <td colspan="2"><a href="productos">Productos</a>-&gt;<a href="usb_categorias">USB</a>-&gt;<a
                href="tarjetaDAQ">Tarjetas DAQ</a>-&gt;<a href="usb_salida_analoga">Salida
                Análoga</a>-&gt;<a href="usb_Voltage">Voltaje</a>-&gt;USB-3103</td>
          </tr>
          <tr>
            <td colspan="2">
              <h1 align="center">USB-3103<br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~ </span>
              </h1>
              <p>Producto descontinuado, para un reemplazo el equipo recomendado es el <a href="https://tienda.logicbus.com.mx/USB-3104_p_1373.html"> USB-3104  </a><p>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div class="cardSubA" style="Text-align:center;margin:auto;">
                <a href="" title="Ir a Tienda Logicbus" target="_blank">
                  <img src="imagenes/01/usb-3104small.gif" alt="USB-3103" title="USB-3103"
                    style="max-width:200px;max-height:200px;">
                </a>
                <br>
                <a href="" title="Ir a Tienda Logicbus" target="_blank">
                  <p class="subTitulo">USB-3103<br><span style="color: #FF0000; font-weight:bold">~ DESCONTINUADO ~
                    </span>
                  </p>
                </a>
                <div class="">
                  <p style="Text-align:justify;margin:auto;">Dispositivo USB modelo USB-3103 marca Personal Measurement
                    Device&trade;.</p><br>
                    
                </div>
              </div><br>
            </td>
          </tr>
          </tr>
          <tr>
            <td align="left">
              
              <ul Style="text-align:left">
                <li>Salidas analógicas de voltaje/corriente de 16 bits <br>
                <li>8 E/S digitales <br>
                <li>Contador de eventos de 32 bits <br>
                <li>Incluye cable USB <br>
                <li>Calibrado desde fábrica<br>
                <li> Rangos de salida analógica de corriente/voltaje: &plusmn;10V, 0-10V, 0-20mA <br>
                <li>Completamente soportado por Measurement Studio- MCC edition , SoftWIRE&reg; , DASYLab&reg; , &amp;
                  LabVIEW</li>
                <br>
                <li> Requerimientos de sistema : <a href="pdf/Requerimientos%20para%20MCC.pdf">Descargar PDF </a></li>
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