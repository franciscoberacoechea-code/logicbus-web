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
  <title>MATLAB | Logicbus</title>
  <meta name="description"
    content="MATLAB&reg; es un entorno de Software para adquisición de datos y desarrollo de aplicaciones. MATLAB&reg; soporta el proceso de adquisición de datos y análisis junto con la interconexión con dispositivos de adquisición de datos e instrumentos">
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
    p{
      text-align: justify;
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
            <td width="100%" height="13"><a href="productos">Productos</a>-&gt;<a href="software">Software y
                herramientas de desarrollo</a> -&gt;MATLAB&reg;&trade; </td>
          </tr>
          <tr>
            <td align="center">
              <h1>MATLAB&reg;&trade;</h1>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><img src="imagenes/01/io_matlab_265.jpg" width="265" height="200" border="0" alt="IO Matlab"></td>
          </tr>
          <tr>
            <td align="left">
              <div align="right"></div>
            </td>
          </tr>
          <tr>
            <td align="left">
              <p>MATLAB&reg; es un entorno de Software para adquisición de datos y desarrollo de aplicaciones.
                MATLAB&reg; soporta el proceso de adquisición de datos y análisis junto con la
                interconexión con dispositivos de adquisición de datos e instrumentos, analizando y
                visualizando los datos. También crea reportes con presentación de calidad para compartir
                los resultados con los demás usuarios.

              </p>
              <p>MATLAB&reg; soporta hardware USB y PCI mediante Data Acquisition Toolbox&trade; de MATLAB&reg; &trade;.
                Data Acquisition Toolbox&trade; permite a MATLAB&reg; adquirir y controlar datos del equipo de
                adquisición de datos y permite que los datos medidos sean mandados y analizados en tiempo real
                dentro de MATLAB&reg;. Los datos recolectados durante las pruebas y las herramientas de medición
                pueden ser introducidos directamente en el espacio de trabajo de MATLAB&reg; para un análisis de
                datos rápido y preciso, la manipulación de datos, y pre-y post-procesamiento.</p>
              <p>El análisis de los datos recolectados son fáciles de interpretar con MATLAB&reg;, Data
                Acquisition Toolbox&trade; y sus funciones integradas. Algunos de estos incluyen pico, valle y la
                búsqueda de cero, el análisis de Fourier, suavizado, interpolación, y la
                extracción de las secciones de los datos. </p>
            </td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left"><strong>Características:
              </strong>
              <ul Style="text-align:left">
                <li>Soportada por el Data Acquisition Toolbox&trade; para la mayoría de las tarjetas DAQ USB y PCI</li>
                <li>Comunicación con el hardware de adquisición de datos para ser monitoreados en tiempo
                  real</li>
                <li>Los datos recolectados en las pruebas y herramientas de medición pueden ser importados
                  directamente al espacio de trabajo de MATLAB&reg; para un análisis de datos rápido y
                  preciso, manipulación de datos, y pre- y post-procesamiento</li>
                <li>Visita www.MathWorks.com para obtener mas información sobre soporte en MATLAB&reg; Data
                  Acquisition Toolbox&trade;</li>

              </ul>
            </td>
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