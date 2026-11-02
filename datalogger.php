<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
  <title>Data Loggers para Monitoreo Industrial | Logicbus
  </title>

  <meta name="description" content="Explora nuestra amplia gama de data loggers: desde modelos portátiles y autónomos hasta soluciones con conectividad IoT y protocolos industriales como Modbus y MQTT.">


  <meta name="Un registrador de datos (datalogger) es un dispositivo electrónico que registra datos en el tiempo o en relación a la ubicación por medio de instrumentos...">

  <meta name="keywords" content="Temperatura, Registradores, Humedad, Presión, Voltaje, Evento, Pulso, Estado, Corriente, Shock/Vibración, Nivel de Agua, PH, Bridge/Strain, Inalámbricos, Sistemas meteorológicos, Dióxido de Carbono, Multivariables, Potencia eléctrica, LogicBus, M&eacute;xico, Mexico, Guadalajara,datalogger,data logger, que son los registrasdores de datos, concepto de datalogger">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--- Estilos Necesarios-->
  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $flickity_css; ?>

  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>

</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="adquisicion-y-registro-de-datos-daq" class="blue link-orange">Adquisición y registro de datos - DAQ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registradores</li>
          </ol>
        </nav>
        <div class="">
          <center>
            <h1>Registradores</h1>
          </center>
          <br>
          <img src="images/banner/www/banner-registradores.png" alt="Registradores" title="Registradores" width="100%">
        </div><br>
        <p align="justify">Un <b>registrador de datos</b> (datalogger) es un dispositivo electrónico que registra datos
          en el tiempo o en relación a la ubicación por medio de instrumentos y sensores propios o conectados
          externamente. Casi todos están basados en microcontroladores. Por lo general son pequeños, con pilas,
          portátiles, y equipados con un microprocesador, memoria interna para almacenamiento de datos y sensores.
          Algunos registradores de datos se comunican con un ordenador personal y utilizan software específico para
          activar el registrador de datos, ver y analizar los datos recogidos, mientras que otros tienen un dispositivo
          de interfaz local (teclado, pantalla LCD) y puede ser utilizado como un dispositivo independiente.</p>

        <p align="justify">Los registradores de datos varían entre los de propósito general para una amplia gama de
          aplicaciones a los dispositivos de medición muy específicos para medir en un medio ambiente o aplicación
          particular. Es común que los tipos de propósito general sean programables sin embargo muchos siguen como
          máquinas estáticas con un número limitado de parámetros variables. Registradores de datos electrónicos han
          reemplazado a los registradores de carta en muchas aplicaciones.</p>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/adquisicion-y-registro-de-datos-daq-registradores" target="_blank">Ver en
                Tienda</a>
            </li>
            <li>
              <a href="#produ">Productos</a>
            </li>
            <li>
              <a href="#catalogos">Catálogos</a>
            </li>
            <li>
              <a href="https://www.logicbus.com.mx/contacto">Contacto</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="gridContMitad">
      <div class="griditemContB">
        <div align="center">
          <a href="wireless_temperatura" target="_blank">
            <img src="images/app/registrador-temperatura-humedad.png" class="imgBorde" width="90%" alt="Registrador de datos de temperatura y Humedad">
          </a>
        </div>
      </div>
      <div class="griditemContB">
        <p align="justify">Uno de los principales beneficios del uso de registradores de datos es la capacidad para
          recopilar automáticamente datos las 24 horas del día. Tras la activación, los registradores de datos
          normalmente se dejan sin vigilancia para medir y registrar la información durante toda la duración del período
          de seguimiento. Esto permite una visión global y precisa de las condiciones ambientales objeto de seguimiento,
          tales como la temperatura del aire y la humedad relativa.</p>
        <center>
          <div class="seccion" id="catalogos">
            <div class="col-center">
              <h2><span>Catálogos</span></h2>
            </div>
          </div>
        </center>
        <div align="center">
          <a href="https://www.logicbus.com.mx/pdf/09/Gui%CC%81a%20de%20registradores%20de%20MadgeTech.pdf" target="_blank">
            <img src="https://www.logicbus.com.mx/pdf/09/Portada-Guia-de-registradores-de-MadgeTech.jpg" alt="Guía de registradores de MadgeTech" class="imgBorde img250">
            <br><strong>Ver Aplicaciones</strong>
          </a><br><br>
        </div>
      </div>
    </div>
    <div class="divCentrado">
      <center>
        <div class="seccion" id="produ">
          <div class="col-center">
            <h2><span>Productos</span></h2>
          </div>
        </div>
      </center>
      <div class="tabla_subcategorias_grid my-5">

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="high_temperature_products" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores.jpg" alt="Registradores Alámbricos Gama Alta" title="Registradores Alámbricos Gama Alta" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="high_temperature_products" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores Alámbricos Gama Alta</h2>
            </a>
            <p>Los Registradores de datos pueden validar la temperatura y la presión. Estos dispositivos resistentes,
              completamente sumergibles y autónomos se pueden enlazar directamente, proporcionando un perfil general de
              temperatura y presión para validar todo el ciclo de esterilización.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-Gama-Alta_c_3417.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="wireless_temperatura" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-inalambricos.jpg" alt="Registradores Inalámbricos" title="Registradores Inalámbricos" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="wireless_temperatura" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores Inalámbricos</h2>
            </a>
            <p>Los Registradores de datos inalámbricos pueden validar la temperatura y la presión. Estos dispositivos
              resistentes, completamente sumergibles y autónomos se pueden enlazar directamente, proporcionando un
              perfil general de temperatura y presión para validar todo el ciclo de esterilización.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-Inal%C3%A1mbricos_c_3419.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-Gama-Media_c_3459.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-gama-media.jpg" alt="Registradores Alámbricos Gama Media" title="Registradores Alámbricos Gama Media" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-Gama-Media_c_3459.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores Alámbricos Gama Media</h2>
            </a>
            <p>Extensa gama de dispositivos de monitorización de temperatura y humedad, los registradores de datos se
              utilizan principalmente en soluciones de gestión de la cadena de frío que garantizan que los alimentos,
              productos médicos y farmacéuticos se almacenan y se transportan en las condiciones requeridas de
              temperatura.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-Gama-Media_c_3459.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="temperature_autonomos" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-alambricos.jpg" alt="Registradores Alámbricos con USB Integrado" title="Registradores Alámbricos con USB Integrado" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="temperature_autonomos" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores Alámbricos con USB Integrado</h2>
            </a>
            <p>Registradores de datos de temperatura independientes proporcionan soluciones de registro y monitoreo de
              datos para registrar termopares, RTD y mediciones de termistor. Dependiendo del registrador de datos, las
              mediciones pueden incluir cambios de temperatura, humedad, voltaje, corriente y eventos o estados.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-Al%C3%A1mbricos-con-USB-Integrado_c_3418.html" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-wifi.jpg" alt="Registradores conexión Wi-Fi" title="Registradores conexión Wi-Fi" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores conexión Wi-Fi</h2>
            </a>
            <p>Dispositivos inalámbricos de registro de temperatura y humedad de adquisición de datos (DAQ), con hasta
              dos entradas de sensor, al menos 1 millón de muestras de temperatura y más de 500,000 muestras de
              temperatura/humedad, con un ancho de banda de hasta 11 Mbps.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-conexi%C3%B3n-Wi-Fi_c_3420.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>


        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/Portatiles_c_3523.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-portatiles.jpg" alt="Portatiles" title="Portatiles" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/Portatiles_c_3523.html" title="Ir a Tienda Logicbus" alt="Ir a Tienda Logicbus" target="_blank">
              <h2>Portátiles</h2>
            </a>
            <p>Registrador autónomo para monitoreo de datos inalámbrico con sensor de humedad/temperatura.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Portatiles_c_3523.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>

        <div class="row row-striped tabla_subcategorias_row">
          <div class="col-7 col-md-2 col-lg-3 my-auto mx-auto img_categ" align="center">
            <a href="https://tienda.logicbus.com.mx/Registradores-Inteligentes_c_3421.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <img src="images/categorias/2022/registradores/registradores-inteligentes.jpg" alt="Registradores Inteligentes" title="Registradores Inteligentes" width="80%">
            </a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 my-auto" align="left">
            <a href="https://tienda.logicbus.com.mx/Registradores-Inteligentes_c_3421.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank">
              <h2>Registradores Inteligentes</h2>
            </a>
            <p>WISE (Web Inside, Smart Engine) son controladores de adquisición de datos basados ​​en Modbus TCP que
              permiten la supervisión remota y el control lógico a través de una interfaz web. Pueden activar salidas
              basadas en entradas, enviar alarmas de correo electrónico y pueden mostrar el estado a través de una
              página web.</p>
          </div>
          <div class="col-3 col-md-2 col-lg-1 my-auto ml-auto img_tienda">
            <a href="https://tienda.logicbus.com.mx/Registradores-Inteligentes_c_3421.html" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" target="_blank"><img src="images/shopping_cart.png" alt="Ir a Tienda Logicbus" title="Ir a Tienda Logicbus" width="100%"></a>
          </div>
        </div>



      </div>
    </div>
  </div><!-------- MAIN ------------>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>