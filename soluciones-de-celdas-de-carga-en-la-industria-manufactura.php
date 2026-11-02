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

<title>Aplicaciones en la Manufactura - Soluciones en la industria Logicbus</title>

<meta name="description" content="Aplicaciones de celdas de carga en la industria de la manufactura Logicbus, descripciones de la aplicacion, equipos utilizados y soporte y consultoria en eleccion del equipo.">

<meta name="keywords" content="aplicaciones de celdas de carga, celdas de carga, celda de carga, sensores de celdas de carga,logicbus,futek,sensores de fuerza,seriede celdas de carga de tipo boton Futek,serie llb,serie iaa, tipos de sensores,pesaje de lotes,medidor de flujo de masa,aplicaciones de celdas de carga,celda de carga,Logicbus,futek Mexico, distrbuidor Guadalajara,automatizacion,las celdas de carga de Futek,aplicaciones industriales de llenado de contenedores,sensor de fuerza ,proyectos de automatizacion de celdas de carga,aplicacion de celda de carga,agricultura, ejemplo de aplicacion de celdas de carga,aplicacion alimenticia, Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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
  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones en la Manufactura 
    
  <h1 class=""><hr class="hr-text" data-content="Manufactura"></h1>
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
      <h2 class="divider gradient" style="font-weight: bold;">Celdas de carga</h2>
    </center>
    <div class="gridContTres"  id="apli-auto">
    <div class="gridCateC-item">
      <div class="">
      <center><a href="palancas-de-sujecion"><img src="imagenes/36/palancas-de-sujecion.png" alt="Palancas de sujeción" title="Palancas de sujeción"></a><br><br>
      <b><a href="palancas-de-sujecion">Palancas de sujeción</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
      <center><a href="control-de-tension-para-fabricacion-de-alambres-y-cables"><img src="imagenes/36/control-de-tension-para-fabricacion-de-alambres-y-cables.png" alt="Control de tensión para fabricación de alambres y cables" title="Control de tensión para fabricación de alambres y cables"></a><br><br>
      <b><a href="control-de-tension-para-fabricacion-de-alambres-y-cables">Control de tensión para fabricación de alambres y cables</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="pruebas-de-carga-lineal"><img src="imagenes/36/pruebas-de-carga-lineal.png" alt="Pruebas de carga lineal" title="Pruebas de carga lineal"></a><br><br>
      <b><a href="pruebas-de-carga-lineal">Pruebas de carga lineal</a></b></center>
      </div>
    </div>  
    <div class="gridCateC-item">
      <div class="">
        <center><a href="automatizacion-de-llenado-de-contenedores"><img src="imagenes/36/automatizacion-de-llenado-de-contenedores.png" alt="Automatización de llenado de contenedores"></a><br><br>
        <b><a href="automatizacion-de-llenado-de-contenedores">Automatización de llenado de contenedores</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="bascula-de-presaje-multiple"><img src="imagenes/36/bascula-de-presaje-multiple-futek.png" alt="Báscula de presaje múltiple" title="Báscula de presaje múltiple"></a><br><br>
      <b><a href="bascula-de-presaje-multiple">Báscula de presaje múltiple</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="control-de-nivel-en-tanque-dual"><img src="imagenes/36/control-de-nivel-en-tanque-dual.png" alt="Control de nivel en tanque dual" title="Control de nivel en tanque dual"></a><br><br>
      <b><a href="control-de-nivel-en-tanque-dual">Control de nivel en tanque dual</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="prensa-de-tapas-automatica"><img src="imagenes/36/prensa-de-tapas-automatica.png" alt="Prensa de tapas automática" title="Prensa de tapas automática" class="img-fluid"></a><br><br> 
          <b><a href="prensa-de-tapas-automatica">Prensa de tapas automática</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="medicion-de-silos"><img src="imagenes/36/diagramas/agricultura/medicion-de-silos-portada.jpg" alt="Medición de silos" title="Medición de silos" class="img-fluid"></a><br><br> 
      <b><a href="medicion-de-silos">Medición de silos</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="pesaje-en-grua-portatil"><img src="imagenes/36/pesaje-en-grua-portatil.png" alt="Pesaje en grúa “portátil”" title="Pesaje en grúa “portátil”" class="img-fluid"></a><br><br> 
        <b><a href="pesaje-en-grua-portatil">Pesaje en grúa “portátil”</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="verificacion-de-prensa-para-forja"><img src="imagenes/36/verificacion-de-prensa-para-forja.png" alt="Verificación de prensa para forja" title="Verificación de prensa para forja" class="img-fluid"></a><br><br> 
        <b><a href="verificacion-de-prensa-para-forja">Verificación de prensa para forja</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="pruebas-de-union-de-cable"><img src="imagenes/36/pruebas-de-union-de-cable.png" alt="Pruebas de unión de cable" title="Pruebas de unión de cable" class="img-fluid"></a><br><br> 
        <b><a href="pruebas-de-union-de-cable">Pruebas de unión de cable</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="pruebas-de-fuerza-en-materiales"><img src="imagenes/36/pruebas-de-fuerza-en-materiales.png" alt="Pruebas de fuerza en materiales" title="Pruebas de fuerza en materiales" class="img-fluid"></a><br><br> 
        <b><a href="pruebas-de-fuerza-en-materiales">Pruebas de fuerza en materiales</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center>
          <a href="validacion-de-sellado-de-bolsas">
          <img src="imagenes/36/validacion-de-sellado-de-bolsas.png" alt="Validación de sellado de bolsas" title="Validación de sellado de bolsas" class="img-fluid">
          </a><br><br> 
          <b><a href="validacion-de-sellado-de-bolsas">Validación de sellado de bolsas</a></b>
        </center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center>
          <a href="medicion-de-fuerza-en-moldeo-por-inyeccion">
          <img src="imagenes/36/medicion-de-fuerza-en-moldeo-por-inyeccion-portada.jpg" alt="Medición de fuerza en moldeo por inyección" title="Medición de fuerza en moldeo por inyección" class="img-fluid">
          </a><br><br> 
          <b><a href="medicion-de-fuerza-en-moldeo-por-inyeccion">Medición de fuerza en moldeo por inyección</a></b>
        </center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center>
          <a href="prueba-de-caida-de-paquete">
          <img src="imagenes/36/prueba-de-caida-de-paquete.png" alt="Prueba de caída de paquete" title="Prueba de caída de paquete" class="img-fluid">
          </a><br><br> 
          <b><a href="prueba-de-caida-de-paquete">Prueba de caída de paquete</a></b>
        </center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="prueba-de-fatiga-en-prostetico-de-cintura"><img src="imagenes/36/prueba-de-fatiga-en-prostetico-de-cintura.png" alt="Prueba de fatiga en prostético de cintura" title="Prueba de fatiga en prostético de cintura" class="img-fluid"></a><br><br> 
        <b><a href="prueba-de-fatiga-en-prostetico-de-cintura">Prueba de fatiga en prostético de cintura</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="tensionador-preciso-para-cable"><img src="imagenes/36/tensionador-preciso-para-cable.png" alt="Tensionador preciso para cable" title="Tensionador preciso para cable" class="img-fluid"></a><br><br> 
        <b><a href="tensionador-preciso-para-cable">Tensionador preciso para cable</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="fuerza-de-mordaza-en-soldadura-ultrasonica"><img src="imagenes/36/fuerza-de-mordaza-en-soldadura-ultrasonica.png" alt="Fuerza de mordaza en Soldadura ultrasónica" title="Fuerza de mordaza en Soldadura ultrasónica" class="img-fluid"></a><br><br> 
        <b><a href="fuerza-de-mordaza-en-soldadura-ultrasonica">Fuerza de mordaza en Soldadura ultrasónica</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="fuerza-de-ensamblaje-en-chips"><img src="imagenes/36/fuerza-de-ensamblaje-en-chips.png" alt="Fuerza de ensamblaje en chips" title="Fuerza de ensamblaje en chips" class="img-fluid"></a><br><br> 
      <b><a href="fuerza-de-ensamblaje-en-chips">Fuerza de ensamblaje en chips</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="medicion-de-fuerza-en-robot-de-soldadura-puntual"><img src="imagenes/36/medicion-de-fuerza-en-robot-de-soldadura-puntual.png" alt="Medición de fuerza en robot de soldadura puntual" title="Medición de fuerza en robot de soldadura puntual" class="img-fluid"></a><br><br> 
        <b><a href="medicion-de-fuerza-en-robot-de-soldadura-puntual">Medición de fuerza en robot de soldadura puntual</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="medicion-de-torque-con-celdas-de-carga"><img src="imagenes/36/medicion-de-torque-con-celdas-de-carga.png" alt="Medición de torque con celdas de carga" title="Medición de torque con celdas de carga" class="img-fluid"></a><br><br> 
        <b><a href="medicion-de-torque-con-celdas-de-carga">Medición de torque con celdas de carga</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="tension-de-las-velas-de-un-navio"><img src="imagenes/36/tension-de-las-velas-de-un-navio.png" alt="Tensión de las velas de un navío" title="Tensión de las velas de un navío" class="img-fluid"></a><br><br> 
        <b><a href="tension-de-las-velas-de-un-navio">Tensión de las velas de un navío</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="llenado-automatico-de-botellas"><img src="imagenes/36/llenado-automatico-de-botellas.jpg" alt="Llenado automático de botellas" title="Llenado automático de botellas" class="img-fluid"></a><br><br> 
        <b><a href="llenado-automatico-de-botellas">Llenado automático de botellas</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="medicion-de-carga-en-rodamientos"><img src="imagenes/36/medicion-de-carga-en-rodamientos.jpg" alt="Medición de carga en rodamientos" title="Medición de carga en rodamientos" class="img-fluid"></a><br><br> 
        <b><a href="medicion-de-carga-en-rodamientos">Medición de carga en rodamientos</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class="">
        <center><a href="celda-de-carga-para-escalas-de-tolva"><img src="imagenes/36/diagramas/agricultura/medicion-de-silos-portada.jpg" alt="Celda de carga para escalas de tolva" title="Celda de carga para escalas de tolva" class="img-fluid"></a><br><br> 
        <b><a href="celda-de-carga-para-escalas-de-tolva">Celda de carga para escalas de tolva</a></b></center>
      </div>
    </div>
    <div class="gridCateC-item">
      <div class=""><br>
        <br><center>
        <a href="https://www.logicbus.com.mx/aplicaciones-de-celdas-de-carga"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a>
        </center>
      </div>
    </div>
  </div>
  <center id="tTorque">
    <a id="sensores-cate"></a>
        <h2  class="divider gradient" style="font-weight: bold;">Sensores de torque</h2>
      </center>
      <div class="gridContTres"  id="apli-autot">
        <div class="gridCateC-item">
          <center><a href="banco-para-pruebas-de-motores"><img src="imagenes/36/banco-para-pruebas-de-motores.png" alt="Soporte de prueba de jeringas" title="Soporte de prueba de jeringas" class="img-fluid"></a><br><br> 
          <b><a href="banco-para-pruebas-de-motores">Banco para pruebas de motores</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="medicion-de-una-herramienta-de-ensamble"><img src="imagenes/36/medicion-de-una-herramienta-de-ensamble-portada.png" alt="Medición de una herramienta de ensamble" title="Medición de una herramienta de ensamble" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-una-herramienta-de-ensamble">Medición de una herramienta de ensamble</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="torque-para-ajuste-de-tuercas"><img src="imagenes/36/torque-para-ajuste-de-tuercas-portada.png" alt="Torque para ajuste de tuercas" title="Torque para ajuste de tuercas" class="img-fluid"></a><br><br> 
          <b><a href="torque-para-ajuste-de-tuercas">Torque para ajuste de tuercas</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="control-del-torque-en-un-servomotor"><img src="imagenes/36/control-del-torque-en-un-servomotor.jpg" alt="Control del torque en un servomotor" title="Control del torque en un servomotor" class="img-fluid"></a><br><br> 
          <b><a href="control-del-torque-en-un-servomotor">Control del torque en un servomotor</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="medicion-de-torque-con-celdas-de-carga"><img src="imagenes/36/medicion-de-torque-con-celdas-de-carga.png" alt="Medición de torque con celdas de carga" title="Medición de torque con celdas de carga" class="img-fluid"></a><br><br> 
          <b><a href="medicion-de-torque-con-celdas-de-carga">Medición de torque con celdas de carga</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="pruebas-de-fuerza-en-tornillo-de-banco"><img src="imagenes/36/pruebas-de-fuerza-en-tornillo-de-banco-portada.jpg" alt="Pruebas de fuerza en tornillo de banco" title="Pruebas de fuerza en tornillo de banco" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fuerza-en-tornillo-de-banco">Pruebas de fuerza en tornillo de banco</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="pruebas-de-torque-en-valvulas"><img src="imagenes/36/pruebas-de-torque-en-valvulas.png"  alt="Pruebas de torque en válvulas" title="Pruebas de torque en válvulas" class="img-fluid"></a><br><br> 
            <b><a href="pruebas-de-torque-en-valvulas">Pruebas de torque en válvulas</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"  alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br> 
          <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"  alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br> 
          <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="prueba-de-torque-en-cateter"><img src="imagenes/36/prueba-de-torque-en-cateter.png"  alt="Prueba de torque en catéter" title="Prueba de torque en catéter" class="img-fluid"></a><br><br> 
            <b><a href="prueba-de-torque-en-cateter">Prueba de torque en catéter</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="torque-de-un-desarmador-en-miniatura"><img src="imagenes/36/torque-de-un-desarmador-en-miniatura.png"  alt="Torque de un desarmador en miniatura" title="Torque de un desarmador en miniatura" class="img-fluid"></a><br><br> 
            <b><a href="torque-de-un-desarmador-en-miniatura">Torque de un desarmador en miniatura</a></b></center>
        </div>
        <div class="gridCateC-item">
          <center><a href="sensor-de-torque-tipo-desarmador-electrico"><img src="imagenes/36/sensor-de-torque-tipo-desarmador-electrico.png"  alt="Sensor de torque tipo desarmador eléctrico" title="Sensor de torque tipo desarmador eléctrico" class="img-fluid"></a><br><br> 
            <b><a href="sensor-de-torque-tipo-desarmador-electrico">Sensor de torque tipo desarmador eléctrico</a></b></center>
        </div>
        <div class="gridCateC-item">
          <br><br><center>
            <a href="https://www.logicbus.com.mx/aplicaciones-de-sensores-de-torque"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a></center>
        </div>
    </div>
    <center>
      <a></a>
      <h2 class="divider gradient" style="font-weight: bold;">Instrumentos de Medición</h2><br>
    </center>
    <div class="gridContTres" id="apli-autoia">
      <div class="gridCateC-item">
        <center><a href="pruebas-de-fuerza-en-tornillo-de-banco"><img src="imagenes/36/pruebas-de-fuerza-en-tornillo-de-banco-portada.jpg" alt="Pruebas de fuerza en tornillo de banco" title="Pruebas de fuerza en tornillo de banco" class="img-fluid"></a><br><br> 
        <b><a href="pruebas-de-fuerza-en-tornillo-de-banco">Pruebas de fuerza en tornillo de banco</a></b></center>
      </div>
      <div class="gridCateC-item">
        <center><a href="sistema-para-monitoreo-de-desalineaciones"><img src="imagenes/36/sistema-para-monitoreo-de-desalineaciones.png" alt="Sistema para monitoreo de desalineaciones" title="Sistema para monitoreo de desalineaciones" class="img-fluid"></a><br><br> 
        <b><a href="sistema-para-monitoreo-de-desalineaciones">Sistema para monitoreo de desalineaciones</a></b></center>
      </div>
      <div class="gridCateC-item">
        <center><a href="banco-de-pruebas-para-motor-oem"><img src="imagenes/36/banco-de-pruebas-para-motor-oem.png"  alt="Banco de pruebas para motor OEM" title="Banco de pruebas para motor OEM" class="img-fluid"></a><br><br> 
        <b><a href="banco-de-pruebas-para-motor-oem">Banco de pruebas para motor OEM</a></b></center>
      </div>
      <div class="gridCateC-item">
        <center><a href="pruebas-de-fatiga-de-bisagras"><img src="imagenes/36/pruebas-de-fatiga-de-bisagras.png"  alt="Pruebas de fatiga de Bisagras" title="Pruebas de fatiga de Bisagras" class="img-fluid"></a><br><br> 
        <b><a href="pruebas-de-fatiga-de-bisagras">Pruebas de fatiga de Bisagras</a></b></center>
      </div>
      <div class="gridCateC-item">
      <br>
      <center>
        <a href="aplicaciones-de-instrumentos-medicion"><button type="button" class="btn box-shad boton_mas btnVermas"> Ver más <br> aplicaciones</button></a></center>
      </div>
    </div>
  </div><!--  /main -->

<!-- BEGIN Odoo web form -->
<div class="container">
<div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
<iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
style="width:100%; min-height:1200px; border:0;">
</iframe>
</div>
</div>
<!-- END Odoo web form -->
<br><br><br>
    

<?
 abajo();
?>
<script type="text/javascript">
   $(function() {
    var Accordion = function(el, multiple) {
      this.el = el || {};
      // more then one submenu open?
      this.multiple = multiple || false;
    
      var dropdownlink = this.el.find('.dropdownlink');
      dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})

   
 </script>
</body>
</html>
