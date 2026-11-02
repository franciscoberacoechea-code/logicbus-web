<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html>
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
  <title>Buses especiales y legacy - Logicbus S.A de C.V</title>
  <meta name="description" content="De cientos de placas, tomando placas de bus PCI, por ejemplo; Se clasifican en tres series: PCI, PISO y PIO.">

  <meta name="keywords" content="Buses Especiales y Legacy,ISA, PC104,serie PCI,serie PISO, serie PIO, Adquisicion de datos, tarjetas de E / S , sistemas de automatización, tarjetas de E / S digitales, monitoreo y control señales lógica,  Logicbus">

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
        <div class="ruta_productos">
          <a href="productos">Productos</a>-> <a href="adquisicion-de-datos">Adquisición de datos</a> -> Buses Especiales y Legacy
        </div><br>
        <h1 align="center" class="titulo_producto"> Buses Especiales y Legacy</h1>
        <p align="justify"> 
          De cientos de placas, tomando placas de bus PCI, por ejemplo; Se clasifican en tres series: PCI, PISO y PIO. Las series PCI son de primera línea y alcanzan un rendimiento increíble con múltiples funciones y altas resoluciones; La serie PISO está haciendo hincapié en su capacidad de protección para evitar que la entrada de señal sufra un impacto directo; La serie PIO son formas rentables para uso general y, además, son adecuadas para aplicaciones de transmisión de alta velocidad.<br>
          Todas las tarjetas de E / S se aplican ampliamente en diversos campos de los sistemas de automatización. En resumen, las tarjetas de E / S digitales son para monitorear y controlar señales lógicas como botón, interruptor, relé, encendido / apagado, alta / baja y condiciones de apertura / cierre, las tarjetas de E / S analógicas son para la adquisición de señales analógicas o la aplicación de transmisión, y los tableros de temporizador, contador y frecuencia son para mediciones de señales de pulso.

        </p>
        <center>
          <div class="cardSimple">
            <div class="card-body contenido">
              <div align="center">
                <h2 class="titulos"><b>ISA</b></h2> 
              </div>
              <div align="center">
                <img class="zoom-image img-fluid" src="assets/images/categorias/ISA.png"  alt="Ethernet Modbus TCP" title="Ethernet Modbus TCP">
              </div>
              <div align="center" class="animado"><br>
                <center><button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/ISA_c_1370.html" target="_blank"><span>Ver más</span></a></button></center>
              </div>
            </div>
          </div>
        </center>
      </div>
    </div>
  </div><br>

  <?
  abajo();
  ?>
</body>
</html>