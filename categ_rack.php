<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


<html lang="es">

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
  <title>Controladores programables para montaje en Rack I-8000</title>
  <meta name="description"
    content="Son PLC diseñado para comunicaciones via internet/ethernet encargados de la comunicacion, son programables y para su uso en rack">

  <meta name="keywords"
    content="Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Seguridad, Consultoria, Integracion, Proyecto, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur">

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
  <!--------------->
  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="libreria/ie-emulation-modes-warning.js"></script>
  <script language="javascript">

    function menu_actual() {
      document.getElementById("productos").className = "dropdown active";
    }
    ;
  </script>

  <style>
    * a {
      cursor: pointer;
    }

    p {
      text-align: justify;
      text-justify: inter-word;
    }

    h1 {
      text-align: center;
    }

    ul {
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

        <!-- RUTA DE NAVEGACION -->
        <div class="ruta_productos">
          <a href="productos">Productos</a>-&gt;<a href="embedded_controllers">PLC</a>-&gt;I-8000 Controladores
          para rack
        </div>
        <!-- NOMBRE DE LA CATEGORIA -->
        <h1 class="titulo_producto">I-8000 Controladores para Rack</h1>
        <div class="">
          <img src="images/banner/www/banner-controladores-rack.png" alt="Controladores para Rack"
            title="Controladores para Rack" width="100%">
        </div>
        <br>
        <p>Son controladores de comunicaciones vía internet/ethernet que se encarga de aplicaciones de
          comunicación. De acuerdo a las diferentes aplicaciones, pueden ser utilizados como servidores de datos,
          conversores de ethernet a RS-232/485/422 direccionables o controladores internet/ethernet embebidos,
          diseñados para montaje en gabinete o Rack.
        </p>
        <br>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-controladores-autonomos-programables-pac-controladores-programables-para-rack"
                target="_blank">Ver en
                Tienda</a>
            </li>
            <li>
              <a href="#produ">Productos</a>
            </li>
            <li>
              <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
            </li>
          </ul>
        </nav>
        <br>
        <p>Los rack, también conocidos como gabinetes o chasis, es la parte medular de un sistema PLC, ya que permiten
          la conexión física o ensamble a todos los componentes de Entrada/Salida, de igual manera, funciona como
          vinculo de comunicación o bus de comunicación entre dichas partes.
        </p>
        <br>
        <center>
          <div class="seccion" id="produ">
            <div class="col-center">
              <h2>Productos</h2>
            </div>
          </div>
        </center>
        <div class="tabla_subcategorias_grid mt-3 mb-5">
          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="I-8437">
                <img src="imagenes/02/I-8437.jpg" alt="PLC para Rack I-8437" title="PLC para Rack I-8437" width="50%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
              <h2><a href="categ_rack1">PLC con programaci&oacute;n en escalera </a></h2>
              <p>La familia I-8xx7 ofrece una solución modular y de gran alcance, para los consumidores de PLC. El
                I-8xx7
                toma la todas las ventajas del software compatible del IEC-61131 de ICS Triplex, para entregar lo último
                en
                flexibilidad y facilidad de uso en el desarrollo de programas. De la familia I-8000. Controlador
                equipado
                con ISaGRAF, con montaje en Rack y diseñado para desarrollo con lenguaje escalera</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Programables-para-rackbr_c_782.html" title="Ir a Tienda Logicbus"
                target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="I-8411">
                <img src="imagenes/02/I-8411.jpg" alt="PLC para Rack I-8411" title="PLC para Rack I-8411" width="50%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
              <h2><a href="categ_rack2">PLC con programaci&oacute;n en lenguaje C </a></h2>
              <p>La familia de reguladores I-8x1x ofrece un compromiso ideal entre la familia de micro reguladores
                I-7188, y
                los reguladores de la serie W-8000. El I-8000 es una solución flexible y resistente para los usuarios
                que
                buscan implementar localizaciones. Controlador equipado con ISaGRAF, con montaje en Rack y diseñado para
                desarrollo con lenguaje C</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Programables-para-rackbr_c_782.html" title="Ir a Tienda Logicbus"
                target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="categ_rack3">
                <img src="imagenes/02/I-8430.jpg" alt="PLC para Rack I-8430" title="PLC para Rack I-8430" width="50%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
              <h2><a href="categ_rack3">PLC con Ethernet y programaci&oacute;n en lenguaje
                  C </a></h2>
              <p>La familia de reguladores I-8x1x ofrece un compromiso ideal entre la familia de micro reguladores
                I-7188, y
                los reguladores de la serie W-8000. El I-8000 es una flexible y resistente solución para los usuarios
                que
                buscan implementar una localización. De la familia I-8000. Controlador equipado con ISaGRAF, con montaje
                en
                Rack y diseñado para desarrollo con lenguaje escalera y contiene interface ethernet</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Programables-para-rackbr_c_782.html" title="Ir a Tienda Logicbus"
                target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
          <div class="row row-striped tabla_subcategorias_row">
            <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
              <a href="categ_rack4">
                <img src="imagenes/02/i-8831-80.jpg" alt="PLC para Rack I-8431" title="PLC para Rack I-8431"
                  width="50%">
              </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
              <h2><a href="categ_rack4">PLC con protocolo Modbus y programaci&oacute;n en
                  lenguaje C</a></h2>
              <p>De la familia I-8000. Controlador equipado con ISaGRAF, con montaje en Rack y diseñado para desarrollo
                con
                lenguaje C y compatible con protocolo MODBUS. Por lo tanto, la PC, HMI o PLC puede usar Modbus/TCP y
                Modbus/RTU para comunicarse con módulos de E/S en la unidad por medio de la interfaz RS-232/485 o de
                Ethernet.</p>
            </div>
            <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
              <a href="https://tienda.logicbus.com.mx/Programables-para-rackbr_c_782.html" title="Ir a Tienda Logicbus"
                target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" width="100%"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?
    abajo();
    ?>
</body>

</html>