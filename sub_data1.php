<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


<html lang = "es">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-31533636-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'AW-1007518778');
    </script>
    <title>Módulos de Adquisicion de datos RS-485
    </title>
    <meta name="description" content="I-7000: Módulos de Adquisicion de datos remotos por medio del protocolo DCON/RS-485.">

    <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, modulo, señales, entradas, salidas, adquisicion, datos, RS-485, remote, remoto">

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
    <!-- -->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="libreria/ie-emulation-modes-warning.js"></script>
    <script language="javascript">

      function menu_actual() {
        document.getElementById("productos").className = "dropdown active";
      }
      ;
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

          <a href="productos">Productos</a>-&gt;<a href="Serial_IO_Modules">Serial</a>-&gt;<a href="Serial_485">RS-485</a>-&gt;I-7000 <br>
          <h1>I-7000: M&oacute;dulos de Adquisici&oacute;n de datos remotos por medio del protocolo DCON/RS-485</h1>
          <br><br>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td><img src="imagenes/02/I-7011.jpg" class="img-responsive" alt="I-7011/I-7011D" title="I-7011/I-7011D"></td>
                <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                  <p><a href="https://www.logicbus.com.mx/TABLAS_ANALOGICOS_I-7000"><strong>I-7000 M&oacute;dulo de adquisici&oacute;n de datos anal&oacute;gicos</strong></a><br>
                    Módulos analógicos: Puede ser utilizado como DI o de baja velocidad (50 Hz), Se puede utilizar como alarma DO o Alta/Baja, necesidades externas resistencias 125 Ω, No necesidad de resistencias externa de 125 Ω, Aislados o no aislados o Aislamiento de canal a canal.</p>
                </td> 
                <td><a href="https://tienda.logicbus.com.mx/search.asp?keyword=i-7000&search=" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                </td>
              </tr>

              <tr>
                <td><img src="imagenes/02/I-7061.jpg" class="img-responsive" alt="I-7061" title="I-7061"></td>
                <td class="col-lg-8 col-md-8 col-sm-4 col-xs-4">
                  <p><a href="https://www.logicbus.com.mx/TABLAS_DIGITALES_I-7000"><strong>I-7000 M&oacute;dulo de adquisici&oacute;n de datos digitales</strong></a><br>
                    Módulos digitales: El canal DI puede ser utilizado como DI o de baja velocidad (100 Hz,50 Hz),Disipador, Fuente, Aislamiento con fuente común, Código Abierto.</p>
                </td>
                <td><a href="https://tienda.logicbus.com.mx/search.asp?keyword=i-7061&search=" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda" class="carrito"></a>
                </td>
              </tr>

            </tbody>
          </table>
          <br>

          <center>
            <a href="pdf/02/Pasos_para_modulos_I-7000.pdf" target="_blank"><strong>Pasos  para empezar a utilizar m&oacute;dulos I-7000</a> con el software EZ Data Logger.</strong>  <br>
            <a href="pdf/02/Pasos_para_modulos_I-7000.pdf" target="_blank"><img src="imagenes/iconpdf.jpg" width="30" height="30" border="0" alt="Ver archivo pdf"></a><br>
            <a href="pdf/02/Pasos_para_modulos_I-7000.pdf" target="_blank">Ver archivo pdf</a> <br><br>
            <h2>Ejemplo de esquema de conexi&oacute;n</h2> <br>
            <a href="imagenes/Esquema_adquisicion_datos_Wi-Fi.html" target="_blank"><img src="imagenes/Esquema_adquisicion_datos_Wi-Fi_ch.jpg" alt="Clic para ampliar esquema" title="Clic para ampliar esquema"></a>
          </center><br><br>

        </div>
      </div>
    </div>

    <?
    abajo();
    ?>
  </body>
</html>
