<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang = "es">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
    </script>
    <title>Logicbus/ Productos/ USB/ Automotriz/ TA012
    </title>
    <meta name="description" content="Dispositivo USB modelo 1024HLS marca Personal Measurement Device&trade;. - Logicbus S.A. de C.V.">

    <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Datos, 1024HLS, HL">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="language" content="Spanish">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="libreria/diagramas.css" rel="stylesheet" >
    <!--- Estilos Necesarios-->
    <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
    <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
    <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
    <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
    <!--------------->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

    function menu_actual(){
      document.getElementById("productos").className = "dropdown active";
    };
    </script>

    <style>
      * a{
        cursor: pointer;
      }
      p{
        text-align: justify;
        text-justify: inter-word;
      }
      h1{
        text-align: center;
      }
      ul{
        text-align: justify;
        text-justify: inter-word;
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

          <table width="100%"  border="0">
            <tr><td height="13" colspan="2"><a href="productos">Productos</a> -&gt;<a href="usb"> USB</a>-&gt;<a href="automotive_usb">Kit y Accesorios Automotrices</a>-&gt;TA012</td></tr>
            <tr><td align="center"><br><h1>TA012</h1><br></td></tr>

            <tr>
              <td align="center"><img src="imagenes/07/Automotive/2wirebreak_out_lead.gif" width="377" height="281" border="0" alt="TA012"></td>
            </tr>
            <tr>
              <td align="center"><div align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0 onClick="atienda()" alt="Comprar"></a></div></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">La punta TA012 permite que las lecturas de voltaje sean tomadas desde numerosos sensores en el compartimiento del motor. La punta s&oacute;lo se conecta en el inicio del cable, la se&ntilde;al de salida puede ser tomada desde los conectores de bananas de 4 mm en el osciloscopio automotriz utilizando la punta de pruebas TA000.<br>
                <br>
                Nota: Se requiere de un TA000 para convertir la conexi&oacute;n de banana de 4mm en el TA012 en un conector BNC &uacute;til para conectar el PicoScope </td>
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