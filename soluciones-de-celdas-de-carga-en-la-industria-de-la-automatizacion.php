<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->



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

  <title>Aplicaciones en la Automatización - Soluciones en la industria  Logicbus</title>

  <meta name="description" content="Aplicaciones de celdas de carga en la industria de la automatización Logicbus, descripciones de la aplicacion, equipos utilizados y soporte y consultoria en eleccion del equipo.">

  <meta name="keywords" content="aplicaciones de celdas de carga, celdas de carga, celda de carga, sensores de celdas de carga,logicbus,futek,sensores de fuerza,seriede celdas de carga de tipo boton Futek,serie llb,serie iaa, tipos de sensores,pesaje de lotes,medidor de flujo de masa">

  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Menu movil - Icono menu - Tabla -->
  <link href="libreria/menu-movil.css" rel="stylesheet">

  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">

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
  seccionSoluciones();
  ?>

  <div id="main" class="container productos_page" >
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en la Automatizaci&oacute;n 
    <h1><hr class="hr-text" data-content="Automatizaci&oacute;n"></h1>
    <center>
      <nav class="navMenuSuper">
        <ul>
          <li>
            <a onclick="ocultarSensor(); mostrarCeldas(); mostrarSensor();">Celdas de carga</a>
            <!--<a href="#celdas-cate">Celdas de carga</a>-->
          </li>
          <li>
            <a onclick="ocultarCeldas(); mostrarSensor();">Sensores de torque</a>
            <!--<a href="#sensores-cate">Sensores de torque</a>-->
          </li>
          <li>
            <a onclick="ocultarCeldas(); ocultarSensor();">Instrumentos de medición</a>
          </li>
          <li>
            <?
            buscadorAppsCS();
            ?>  
          </li>
        </ul>
      </nav>
    </center>
    <center id="tCeldas">
      <a id="celdas-cate"></a>
      <div class="seccion">
        <div class="col-center">
          <h2><span>Celdas de carga</span></h2>
        </div>
      </div>
    </center>
    <div class="gridContTres"  id="apli-auto">
      <div class="gridCateC-item">
        <br>
        <center><a href="control-de-nivel-en-tanque-dual"><img src="imagenes/36/control-de-nivel-en-tanque-dual.png" alt="Control de nivel en tanque dual" title="Control de nivel en tanque dual" class="img-fluid"></a><br><br> 
          <b><a href="control-de-nivel-en-tanque-dual">Control de nivel en tanque dual</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="celda-de-carga-en-robot-humanoide"><img src="imagenes/soluciones-en-la-industria/Robotica/Celda-de-carga-en-robot-humanoide-portada.jpg" alt="Celda de carga en robot humanoide" title="Celda de carga en robot humanoide" class="img-fluid"></a><br><br> 
          <b><a href="celda-de-carga-en-robot-humanoide">Celda de carga en robot humanoide</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="soporte-de-prueba-oem"><img src="imagenes/36/soporte-de-prueba-oem.png" alt="Soporte de prueba OEM" title="Soporte de prueba OEM" class="img-fluid"></a><br><br> 
          <b><a href="soporte-de-prueba-oem">Soporte de prueba OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="soporte-de-prueba-de-jeringas"><img src="imagenes/soluciones-en-la-industria/farmaceutica-y-laboratorio/diagrama-soporte-de-prueba-de-jeringas-portada.jpg" alt="Soporte de prueba de jeringas" title="Soporte de prueba de jeringas" class="img-fluid"></a><br><br> 
          <b><a href="soporte-de-prueba-de-jeringas">Soporte de prueba de jeringas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="palancas-de-sujecion"><img src="imagenes/36/palancas-de-sujecion.png" alt="Palancas de sujeción" title="Palancas de sujeción" class="img-fluid"></a><br><br> 
          <b><a href="palancas-de-sujecion">Palancas de sujeción</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br><a href="control-de-tension-para-fabricacion-de-alambres-y-cables"><img src="imagenes/36/control-de-tension-para-fabricacion-de-alambres-y-cables.png" alt="Control de tensión para fabricación de alambres y cables" title="Control de tensión para fabricación de alambres y cables" class="img-fluid"></a><br><br> 
        <center><b><a href="control-de-tension-para-fabricacion-de-alambres-y-cables">Control de tensión para fabricación de alambres y cables</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="pruebas-de-carga-lineal"><img src="imagenes/36/pruebas-de-carga-lineal.png" alt="Pruebas de carga lineal" title="Pruebas de carga lineal" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-carga-lineal">Pruebas de carga lineal</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="pruebas-de-fuerza-en-prensa-hidraulica"><img src="imagenes/36/pruebas-de-fuerza-en-prensa-hidraulica.png" alt="Pruebas de fuerza en prensa hidráulica" title="Pruebas de fuerza en prensa hidráulica" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fuerza-en-prensa-hidraulica">Pruebas de fuerza en prensa hidráulica</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-precision-a-escala"><img src="imagenes/36/medicion-de-precision-a-escala.png" alt="Medición de precisión a escala" title="Medición de precisión a escala" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-precision-a-escala">Medición de precisión a escala</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="automatizacion-de-llenado-de-contenedores"><img src="imagenes/36/automatizacion-de-llenado-de-contenedores.png" alt="Automatización de llenado de contenedores" class="img-fluid"></a><br><br> 
          <b><a href="automatizacion-de-llenado-de-contenedores">Automatización de llenado de contenedores</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="soporte-de-prueba-de-panel-tactil"><img src="imagenes/36/soporte-de-prueba-de-panel-tactil.png" alt="Soporte de prueba de panel tactil" title="Soporte de prueba de panel tactil" class="img-fluid"></a><br><br> 
          <b><a href="soporte-de-prueba-de-panel-tactil">Soporte de prueba de panel táctil</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="banco-de-pruebas-de-confiabilidad"><img src="imagenes/36/banco-de-pruebas-de-confiabilidad.png" alt="Banco de pruebas de Confiabilidad" title="Banco de pruebas de Confiabilidad" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-de-confiabilidad">Banco de pruebas de Confiabilidad</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="sistema-de-prueba-de-resorte"><img src="imagenes/36/diagramas/agricultura/sistema-de-prueba-de-resorte-portada.jpg" alt="Sistema de prueba de resorte" title="Sistema de prueba de resorte" class="img-fluid"></a><br><br> 
          <b><a href="sistema-de-prueba-de-resorte">Sistema de prueba de resorte</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br><center><a href="pruebas-de-asientos-para-automovil"><img src="imagenes/36/pruebas-de-asientos-para-automovil.png" alt="Pruebas de asientos para automóvil" title="Pruebas de asientos para automóvil" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-asientos-para-automovil">Pruebas de asientos para automóvil</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prueba-de-insercion-y-extraccion-de-usb"><img src="imagenes/36/prueba-de-insercion-y-extraccion-de-usb.png" alt="Prueba de inserción y extracción de USB" title="Prueba de inserción y extracción de USB" class="img-fluid"></a><br><br> 
          <b><a href="prueba-de-insercion-y-extraccion-de-usb">Prueba de inserción y extracción de USB</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="celdas-de-carga-resistentes-a-vacio"><img src="imagenes/36/celdas-de-carga-resistentes-a-vacio.png" alt="Celdas de carga resistentes a vacío" title="Celdas de carga resistentes a vacío" class="img-fluid"></a><br><br> 
          <b><a href="celdas-de-carga-resistentes-a-vacio">Celdas de carga resistentes a vacío</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="llenado-automatico-de-botellas"><img src="imagenes/36/llenado-automatico-de-botellas.jpg" alt="Llenado automático de botellas" title="Llenado automático de botellas" class="img-fluid"></a><br><br> 
          <b><a href="llenado-automatico-de-botellas">Llenado automático de botellas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="grua-con-celda-de-carga"><img src="imagenes/36/grua-con-celda-de-carga-portada.jpg" alt="Grúa con celda de carga" title="Grúa con celda de carga" class="img-fluid"></a><br><br> 
          <b><a href="grua-con-celda-de-carga">Grúa con celda de carga</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="celda-de-carga-en-grillete-o-perno"><img src="imagenes/36/celda-de-carga-en-grillete-o-perno-portada.jpg" alt="Celda de carga en grillete o perno" title="Celda de carga en grillete o perno" class="img-fluid"></a><br><br> 
          <b><a href="celda-de-carga-en-grillete-o-perno">Celda de carga en grillete o perno</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="medicion-de-fuerza-en-moldeo-por-inyeccion"><img src="imagenes/36/medicion-de-fuerza-en-moldeo-por-inyeccion-portada.jpg" alt="Medición de fuerza en moldeo por inyección" title="Medición de fuerza en moldeo por inyección" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-fuerza-en-moldeo-por-inyeccion">Medición de fuerza en moldeo por inyección</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center>
          <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
    <center id="tTorque">
      <a id="sensores-cate"></a>
      <center>
        <div class="seccion">
          <div class="col-center">
            <h2><span>Sensores de torque</span></h2>
          </div>
        </div>
      </center>
    </center>
    <div class="gridContTres"  id="apli-autot">
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-con-sensor-de-torque"><img src="imagenes/36/banco-de-pruebas-para-motor-sensor-torque.png" alt="Banco de pruebas para motor con sensor de torque" title="Banco de pruebas para motor con sensor de torque" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-con-sensor-de-torque">Banco de pruebas para motor con sensor de torque</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center><a href="prensa-de-tapas-automatica"><img src="imagenes/36/prensa-de-tapas-automatica.png" alt="Prensa de tapas automática" title="Prensa de tapas automática" class="img-fluid"></a><br><br> 
          <b><a href="prensa-de-tapas-automatica">Prensa de tapas automática</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-para-pruebas-de-motores"><img src="imagenes/36/banco-para-pruebas-de-motores.png" alt="Soporte de prueba de jeringas" title="Soporte de prueba de jeringas" class="img-fluid"></a><br><br> 
          <b><a href="banco-para-pruebas-de-motores">Banco para pruebas de motores</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="automatizacion-industrial-robotica"><img src="imagenes/36/automatizacion-industrial-robotica.png" alt="Automatización industrial robótica" title="Automatización industrial robótica" class="img-fluid"></a><br><br> 
          <b><a href="automatizacion-industrial-robotica">Automatización industrial robótica</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="fuerza-de-empuje-torque-en-el-proceso-de-taladrado"><img src="imagenes/36/fuerza-de-empuje-torque-en-el-proceso-de-taladrado-portada.jpg" alt="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?" title="¿Qué es la fuerza de empuje y torque en el proceso de taladrado?" class="img-fluid"></a><br><br> 
          <b><a href="fuerza-de-empuje-torque-en-el-proceso-de-taladrado">¿Qué es la fuerza de empuje y torque en el proceso de taladrado?</a></b>
        </center><br>
      </div>
      <div class="gridCateC-item">
        <center><a href="alimentador-avicola-agricola"><img src="imagenes/36/diagramas/agricultura/alimentador-de-aves-agricola-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"></a><br><br> 
          <b><a href="alimentador-avicola-agricola">Alimentador avícola agrícola</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="carro-con-dinamometro-solar-de-stanford"><img src="imagenes/36/carro-con-dinamometro-solar-de-stanford.png"  alt="Carro con dinamómetro solar de Stanford" title="Carro con dinamómetro solar de Stanford" class="img-fluid"></a><br><br> 
          <b><a href="carro-con-dinamometro-solar-de-stanford">Carro con dinamómetro solar de Stanford</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="verificacion-y-calibracion-de-torque"><img src="imagenes/36/verificacion-de-torque-calibracion-de-sensor.png"  alt="Verificación de torque en Herramienta/Calibración de sensor" title="Verificación de torque en Herramienta/Calibración de sensor" class="img-fluid"></a><br><br> 
          <b><a href="verificacion-y-calibracion-de-torque">Verificación de torque en Herramienta/Calibración de sensor</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-torque-en-valvulas"><img src="imagenes/36/pruebas-de-torque-en-valvulas.png"  alt="Pruebas de torque en válvulas" title="Pruebas de torque en válvulas" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-torque-en-valvulas">Pruebas de torque en válvulas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"  alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"  alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensor-de-torque-para-monitorear-juntas-de-robot"><img src="imagenes/36/sensor-de-torque-para-monitorear-juntas-de-robot-portada.png"  alt="Sensor de torque para monitorear juntas de robot" title="Sensor de torque para monitorear juntas de robot" class="img-fluid"></a><br><br> 
          <b><a href="sensor-de-torque-para-monitorear-juntas-de-robot">Sensor de torque para monitorear juntas de robot</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="torque-de-reaccion-en-ruedas-de-satelite"><img src="imagenes/36/torque-de-reaccion-en-ruedas-de-satelite-portada.png"  alt="Torque de reacción en ruedas de satélite" title="Torque de reacción en ruedas de satélite" class="img-fluid"></a><br><br> 
          <b><a href="torque-de-reaccion-en-ruedas-de-satelite">Torque de reacción en ruedas de satélite</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-de-torque-en-cateter"><img src="imagenes/36/prueba-de-torque-en-cateter.png"  alt="Prueba de torque en catéter" title="Prueba de torque en catéter" class="img-fluid"></a><br><br> 
          <b><a href="prueba-de-torque-en-cateter">Prueba de torque en catéter</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="torque-de-un-desarmador-en-miniatura"><img src="imagenes/36/torque-de-un-desarmador-en-miniatura.png"  alt="Torque de un desarmador en miniatura" title="Torque de un desarmador en miniatura" class="img-fluid"></a><br><br> 
          <b><a href="torque-de-un-desarmador-en-miniatura">Torque de un desarmador en miniatura</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensor-de-torque-tipo-desarmador-electrico"><img src="imagenes/36/sensor-de-torque-tipo-desarmador-electrico.png"  alt="Sensor de torque tipo desarmador eléctrico" title="Sensor de torque tipo desarmador eléctrico" class="img-fluid"></a><br><br> 
          <b><a href="sensor-de-torque-tipo-desarmador-electrico">Sensor de torque tipo desarmador eléctrico</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center>
          <a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
    <center>
      <div class="seccion">
        <div class="col-center">
          <h2><span>Instrumentos de Medición</span></h2>
        </div>
      </div>
    </center>
    <div class="gridContTres" id="apli-autoia">
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"  alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"  alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="brazo-robotico-automatizado"><img src="imagenes/36/brazo-robotico-automatizado-portada.png"  alt="Brazo robótico automatizado" title="Brazo robótico automatizado" class="img-fluid"></a><br><br> 
          <b><a href="brazo-robotico-automatizado">Brazo robótico automatizado</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="presion-diferencial"><img src="imagenes/36/presion-diferencial-portada.png"  alt="Presión diferencial" title="Presión diferencial" class="img-fluid"></a><br><br> 
          <b><a href="presion-diferencial">Presión diferencial</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center>
          <a href="aplicaciones-de-instrumentos-medicion"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
    <script src="https://podio.com/webforms/25497888/1893814.js"></script>
    <script type="text/javascript">
      _podioWebForm.render("1893814")
    </script>
    <noscript>
      <a href="https://podio.com/webforms/25497888/1893814" target="_blank">Por favor, rellena el formulario</a>
    </noscript>
  </div>  

  <?
  abajo();
  ?>
  <script type="text/javascript">
    $(function() {
      var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.dropdownlink');
        dropdownlink.on('click',
          { el: this.el, multiple: this.multiple },
          this.dropdown);
      };

      Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
        $this = $(this),
        $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if(!e.data.multiple) {
          $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
        }
      }

      var accordion = new Accordion($('.accordion-menu'), false);
    })
  </script>
</body>
</html>
