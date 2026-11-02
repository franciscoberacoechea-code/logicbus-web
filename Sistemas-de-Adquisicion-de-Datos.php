<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html>
<head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>Sistemas de Adquisición de Datos</title>
  <meta name="description" content="Sistema, Tarjetas, Caja para tarjetas, Accesorios para cableado, Tarjetas opcional con filtro anti-aliasing, Cajas de adquisición de datos.">

  <meta name="keywords" content="Sistemas de adquisicion de datos,Tarjetas, Caja para tarjetas, Accesorios para cableado, Tarjetas opcional con filtro anti-aliasing, Cajas de adquisición de datos, Tarjetas controladoras, Aislamiento óptico, Fuente de poder, Software, Soportes de montaje, Resistencias shunt, USB y Cables DB25, Logicbus">

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
        <div class="ruta_productos">
          <a href="productos">Productos</a>-> <a href="adquisicion-de-datos">Adquisición de datos</a> -> Ethernet
        </div><br>
        <!-- NOMBRE DE LA CATEGORIA -->
        <h1 align="center" class="titulo_producto"> Dispositivos de Adquisición de Datos tipo Ethernet</h1>

        <p>Un Sistema de Adquisición de Datos no es mas que un equipo electrónico cuya función es el control o simplemente el registro de una o varias variables de un proceso cualquiera, de forma general puede estar compuesto por los siguientes elementos.</p>
        <div class="gridContMitad">
          <div>
            <ul>
              <li>Sensores.</li>
              <li>Amplificadores operacionales.</li>
              <li>Amplificadores de instrumentación.</li>
              <li>Aisladores.</li>
              <li>Multiplexores analógicos.</li>
              <li>Multiplexores digitales.</li>
              <li>Circuitos Sample and Hold.</li>
            </ul>
          </div>
          <div>
            <ul>
              <li>Conversores A-D.</li>
              <li>Conversores D-A.</li>
              <li>Microprocesadores.</li>
              <li>Contadores.</li>
              <li>Filtros.</li>
              <li>Comparadores.</li>
              <li>Fuentes de potencia.</li>
            </ul>
          </div>
        </div>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/Ethernet_c_1486.html" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <center>
      <div class="seccion" id="equipos">
        <div class="col-center">
          <h2><span>Productos</span></h2>
        </div>
      </div>
    </center>
    <div class="gridContMitad">
      <center>
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h2 class="titulos"><b>Osciloscopios para PC</b></h2> 
            </div>
            <div align="center">
              <img class="zoom-image img-fluid" src="assets/images/categorias/instrunet.png"  alt="Ethernet Modbus TCP" title="Ethernet Modbus TCP">
            </div>
            <div align="center" class="animado">
              <br>
              <button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/instruNet_c_2210.html" target="_blank"><span>Ver más</span></a></button>
            </div>
          </div>
        </div>
      </center>

      <center>
        <div class="cardSimple">
          <div class="card-body contenido">
            <div align="center">
              <h2 class="titulos"><b>Osciloscopios para PC</b></h2> 
            </div>
            <div align="center">
              <img class="zoom-image img-fluid" src="assets/images/categorias/IDCS-8000.png"  alt="Ethernet BacNet" title="Ethernet BacNet">
            </div>
            <div align="center" class="animado">
              <br>
              <button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/IDCS-8000_c_2580.html" target="_blank"><span>Ver más</span></a></button>
            </div>
          </div>
        </div>
      </center>

    </div>
  </div>

  <?
  abajo();
  ?>
</body>
</html>