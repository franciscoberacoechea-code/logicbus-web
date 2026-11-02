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
  <title>Aplicaciones en la Automotriz - Soluciones en la industria Logicbus</title>

  <meta name="description" content="Aplicaciones en la industria --> Aplicaciones en la Automotriz">

  <meta name="keywords" content="aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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

  <script language="javascript">

    function menu_actual(){
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

  <style>
    h1{
      text-align: center;
    }
    table td{
      text-align: center;
    }


    .img-aplicaiones{
      padding: 5px 5px 0px 5px;
    }

    .btnVermas{
      padding: 5px 5px 10px 5px;
    }
    .text-aplicaciones{
      padding: 10px 5px 10px 5px;
    }
    .seccion-aplicaiones{
      padding: 5px;
    }

    .seccion-aplicaiones2{
      padding: 10px 5px 10px 5px;
    }
    .margen{
      border-bottom: 6px solid #ff7e00; 
      padding-bottom: 15px;
      padding-left: 20px;
      padding-right: 20px; 
    }
  </style>

</head>
<body onLoad="menu_actual();">

  <?
  arriba();
  ?>

  <div id="main" class="container productos_page">
    <?
    seccionSoluciones();
    ?>
    <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en la Automotriz
    <?
    menuMovilApp();
    ?>
    <h1 class=""><hr class="hr-text" data-content="Automotriz"></h1>
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
        <a href="prueba-de-caida-de-tren-de-aterrizaje"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/prueba-de-caida-de-tren-de-aterrizaje-portada.jpg" alt="soluciones en la industria farmaceutica y laboratorio" title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br> 
        <center><b><a href="prueba-de-caida-de-tren-de-aterrizaje">Prueba de caída de tren de aterrizaje</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <a href="mecanismo-de-despliegue-de-orion"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/mecanismo-de-despliegue-de-orion-portada.jpg"  alt="soluciones en la industria Alimenticia" title="soluciones en la industria Alimenticia" class="img-fluid"></a><br><br> 
        <center><b><a href="mecanismo-de-despliegue-de-orion">Mecanismo de despliegue de orion</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <a href="soporte-de-empuje-del-motor-cohete"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/soporte-de-empuje-del-motor-cohete-portada.jpg"  alt="soluciones en la industria academia e investigacion" title="soluciones en la industria academia e investigacion" class="img-fluid"></a><br><br> 
        <center><b><a href="soporte-de-empuje-del-motor-cohete">Soporte de empuje del motor cohete</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <a href="fuerza-de-lanzamiento-de-uav"><img src="https://www.logicbus.com.mx/imagenes/soluciones-en-la-industria/aeroespacial/fuerza-de-lanzamiento-de-uav-portada.jpg" alt="soluciones en la industria farmaceutica y laboratorio" title="soluciones en la industria farmaceutica y laboratorio" class="img-fluid"></a><br><br> 
        <center><b><a href="fuerza-de-lanzamiento-de-uav">Fuerza de lazamiento de UAV</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="fuerza-de-atornillador">
          <img src="imagenes/36/diagramas/fuerza-de-atornillador-portada.png"  alt="Fuerza de atornillador" title="Fuerza de atornillador" class="img-fluid"></a><br><br> 
          <b><a href="fuerza-de-atornillador">Fuerza de atornillador</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-fuerza-al-cerrar-ventana"><img src="imagenes/36/diagramas/medicion-de-fuerza-al-cerrar-ventana.png"  alt="Medición de fuerza al cerrar ventana" title="Medición de fuerza al cerrar ventana" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-fuerza-al-cerrar-ventana">Medición de fuerza al cerrar ventana</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="grua-con-celda-de-carga"><img src="imagenes/36/grua-con-celda-de-carga-portada.jpg" alt="Grúa con celda de carga" title="Grúa con celda de carga" class="img-fluid"></a><br><br> 
          <b><a href="grua-con-celda-de-carga">Grúa con celda de carga</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="soldadura-por-resistencia"><img src="imagenes/36/soldadura-por-resistencia.png" alt="Soldadura por resistencia" title="Soldadura por resistencia" class="img-fluid"></a><br><br> 
          <b><a href="soldadura-por-resistencia">Soldadura por resistencia</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-automatica-de-fuerza-en-pedal"><img src="imagenes/36/prueba-automatica-de-fuerza-en-pedal.png" alt="Prueba automática de fuerza en pedal" title="Prueba automática de fuerza en pedal" class="img-fluid"></a><br><br> 
          <b><a href="prueba-automatica-de-fuerza-en-pedal">Prueba automática de fuerza en pedal</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-de-fuerza-del-pedal-de-helicoptero"><img src="imagenes/soluciones-en-la-industria/aeroespacial/prueba-de-fuerza-del-pedal-de-helicoptero-portada.jpg" alt="Prueba de fuerza del pedal de helicóptero" title="Prueba de fuerza del pedal de helicóptero" class="img-fluid"></a><br><br> 
          <b><a href="prueba-de-fuerza-del-pedal-de-helicoptero">Prueba de fuerza del pedal de helicóptero</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="cierre-de-perno"><img src="imagenes/soluciones-en-la-industria/aeroespacial/cierre-de-perno-portada.jpg" alt="Cierre de perno" title="Cierre de perno" class="img-fluid"></a><br><br> 
          <b><a href="cierre-de-perno">Cierre de perno</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="frenos-por-sistema-cableado"><img src="imagenes/36/frenos-por-sistema-cableado-portada.jpg" alt="Frenos por sistema cableado" title="Frenos por sistema cableado" class="img-fluid"></a><br><br> 
          <b><a href="frenos-por-sistema-cableado">Frenos por sistema cableado</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensores-automotrices"><img src="imagenes/36/sensores-automotrices.png" alt="Sensores automotrices" title="Sensores automotrices" class="img-fluid"></a><br><br> 
          <b><a href="sensores-automotrices">Sensores automotrices</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-carga-en-rodamientos"><img src="imagenes/36/medicion-de-carga-en-rodamientos.jpg" alt="Medición de carga en rodamientos" title="Medición de carga en rodamientos" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-carga-en-rodamientos">Medición de carga en rodamientos</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sistema-de-prueba-de-resorte"><img src="imagenes/36/diagramas/agricultura/sistema-de-prueba-de-resorte-portada.jpg" alt="Sistema de prueba de resorte" title="Sistema de prueba de resorte" class="img-fluid"></a><br><br> 
          <b><a href="sistema-de-prueba-de-resorte">Sistema de prueba de resorte</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-de-propela-en-dron"><img src="imagenes/36/prueba-de-propela-en-dron.png" alt="Prueba de propela en dron" title="Prueba de propela en dron" class="img-fluid"></a><br><br> 
          <b><a href="prueba-de-propela-en-dron">Prueba de propela en dron</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-asientos-para-automovil"><img src="imagenes/36/pruebas-de-asientos-para-automovil.png" alt="Pruebas de asientos para automóvil" title="Pruebas de asientos para automóvil" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-asientos-para-automovil">Pruebas de asientos para automóvil</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="validacion-de-rendimiento-para-sistemas-de-suspension"><img src="imagenes/36/diagramas/validacion-de-rendimiento-para-sistemas-de-suspension.png" alt="Validación de rendimiento para sistemas de suspensión" title="Validación de rendimiento para sistemas de suspensión" class="img-fluid"></a><br><br> 
          <b><a href="validacion-de-rendimiento-para-sistemas-de-suspension">Validación de rendimiento para sistemas de suspensión</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="retroalimentacion-de-pantalla-tactil"><img src="imagenes/36/diagramas/retroalimentacion-de-pantalla-tactil.png" alt="Retroalimentación de pantalla táctil" title="Retroalimentación de pantalla táctil" class="img-fluid"></a><br><br> 
          <b><a href="retroalimentacion-de-pantalla-tactil">Retroalimentación de pantalla táctil</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensores-ciclicos-para-helicopteros"><img src="imagenes/soluciones-en-la-industria/aeroespacial/sensores-ciclicos-para-helicopteros-portada.jpg" alt="Sensores cíclicos para helicópteros" title="Sensores cíclicos para helicópteros" class="img-fluid"></a><br><br> 
          <b><a href="sensores-ciclicos-para-helicopteros">Sensores cíclicos para helicópteros</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensores-de-prueba-para-choques"><img src="imagenes/36/diagramas/sensores-de-prueba-para-choques.png" alt="Sensores de prueba para choques" title="Sensores de prueba para choques" class="img-fluid"></a><br><br> 
          <b><a href="sensores-de-prueba-para-choques">Sensores de prueba para choques</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br><br>
        <center>
          <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>  
      </div>
    </div>
    <center id="tTorque">
      <a id="sensores-cate"></a>
      <div class="seccion">
        <div class="col-center">
          <h2><span>Sensores de torque</span></h2>
        </div>
      </div>
    </center>  
    <div class="gridContTres"  id="apli-autot">
      <div class="gridCateC-item">
        <center><a href="fuerza-de-atornillador"><img src="imagenes/36/diagramas/fuerza-de-atornillador-portada.png"  alt="Fuerza de atornillador" title="Fuerza de atornillador" class="img-fluid"></a><br><br> 
          <b><a href="fuerza-de-atornillador">Fuerza de atornillador</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-torque-en-valvulas"><img src="imagenes/36/pruebas-de-torque-en-valvulas.png" alt="Pruebas de torque en válvulas" title="Pruebas de torque en válvulas" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-torque-en-valvulas">Pruebas de torque en válvulas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="torque-para-ajuste-de-tuercas"><img src="imagenes/36/torque-para-ajuste-de-tuercas-portada.png" alt="Torque para ajuste de tuercas" title="Torque para ajuste de tuercas" class="img-fluid"></a><br><br> 
          <b><a href="torque-para-ajuste-de-tuercas">Torque para ajuste de tuercas</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="medicion-de-una-herramienta-de-ensamble"><img src="imagenes/36/medicion-de-una-herramienta-de-ensamble-portada.png" alt="Medición de una herramienta de ensamble" title="Medición de una herramienta de ensamble" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-una-herramienta-de-ensamble">Medición de una herramienta de ensamble</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-fuerza-en-tornillo-de-banco"><img src="imagenes/36/pruebas-de-fuerza-en-tornillo-de-banco-portada.jpg" alt="Pruebas de fuerza en tornillo de banco" title="Pruebas de fuerza en tornillo de banco" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fuerza-en-tornillo-de-banco">Pruebas de fuerza en tornillo de banco</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-para-pruebas-de-motores"><img src="imagenes/36/banco-para-pruebas-de-motores.png" alt="Banco para pruebas de motores" title="Banco para pruebas de motores" class="img-fluid"></a><br><br> 
          <b><a href="banco-para-pruebas-de-motores">Banco para pruebas de motores</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png" alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="carro-con-dinamometro-solar-de-stanford"><img src="imagenes/36/carro-con-dinamometro-solar-de-stanford.png" alt="Carro con dinamómetro solar de Stanford" title="Carro con dinamómetro solar de Stanford" class="img-fluid"></a><br><br> 
          <b><a href="carro-con-dinamometro-solar-de-stanford">Carro con dinamómetro solar de Stanford</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-con-sensor-de-torque"><img src="imagenes/36/banco-de-pruebas-para-motor-sensor-torque.png" alt="Banco de pruebas para motor con sensor de torque" title="Banco de pruebas para motor con sensor de torque" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-con-sensor-de-torque">Banco de pruebas para motor con sensor de torque</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensor-de-torque-para-direccion"><img src="imagenes/36/diagramas/sensor-de-torque-para-direccion.png" alt="Sensor de torque para dirección" title="Sensor de torque para dirección" class="img-fluid"></a><br><br>
          <b><a href="sensor-de-torque-para-direccion">Sensor de torque para dirección</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br><br>
        <center>
          <a href="aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
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
        <center><a href="medicion-de-fuerza-al-cerrar-ventana"><img src="imagenes/36/diagramas/medicion-de-fuerza-al-cerrar-ventana.png"  alt="Medición de fuerza al cerrar ventana" title="Medición de fuerza al cerrar ventana" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-fuerza-al-cerrar-ventana">Medición de fuerza al cerrar ventana</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="soldadura-por-resistencia"><img src="imagenes/36/soldadura-por-resistencia.png" alt="Soldadura por resistencia" title="Soldadura por resistencia" class="img-fluid"></a><br><br> 
          <b><a href="soldadura-por-resistencia">Soldadura por resistencia</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="prueba-de-propela-en-dron"><img src="imagenes/36/prueba-de-propela-en-dron.png" alt="Prueba de propela en dron" title="Prueba de propela en dron" class="img-fluid"></a><br><br> 
          <b><a href="prueba-de-propela-en-dron">Prueba de propela en dron</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="brazo-robotico-automatizado"><img src="imagenes/36/brazo-robotico-automatizado-portada.png" alt="Brazo robótico automatizado" title="Brazo robótico automatizado" class="img-fluid"></a><br><br> 
          <b><a href="brazo-robotico-automatizado">Brazo robótico automatizado</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png" alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br>
          <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sensores-ciclicos-para-helicopteros"><img src="imagenes/soluciones-en-la-industria/aeroespacial/sensores-ciclicos-para-helicopteros-portada.jpg" alt="Sensores cíclicos para helicópteros" title="Sensores cíclicos para helicópteros" class="img-fluid"></a><br><br> 
          <b><a href="sensores-ciclicos-para-helicopteros">Sensores cíclicos para helicópteros</a></b>
        </center>
      </div>
      <div class="gridCateC-item">
        <br>
        <center>
          <a href="aplicaciones-de-instrumentos-medicion"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
  </div><br>

  <script src="https://podio.com/webforms/25497888/1893814.js"></script>
  <script type="text/javascript">
    _podioWebForm.render("1893814")
  </script>
  <noscript>
    <a href="https://podio.com/webforms/25497888/1893814" target="_blank">Por favor, rellena el formulario</a>
  </noscript>

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
