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
<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'AW-1007518778');
</script>
<?php

echo "
<!--prueba lang-->
    <link rel='alternate' href='https://www.logicbus.com.mx/' hreflang='es-mx' />
    <link rel='alternate' href='https://www.logicbus.com.mx/' hreflang='en-us' />


<!-- Facebook Pixel Code libreria -->
<script async>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '467719200701292');
  fbq('track', 'PageView');
</script>
  <noscript>
  <img height=\"1\" width=\"1\" 
  src=\"https://www.facebook.com/tr?id=467719200701292&ev=PageView
  &noscript=1\"/>
  </noscript>

  <!-- End Facebook Pixel Code -->";




// Inserta el codigo para mostrar el encabezado de la pagina
function arriba()
{
  require("admin/config.php");
  echo '
    
  <!-- Header  -->
  <link href="libreria/www.css" type="text/css" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menus-2023.css">
  <link rel="stylesheet" type="text/css" href="libreria/footer.css">
  <?php echo $footer_css; ?>
  
  ';
  require("header.view.php");

}



function lado1()
{
  echo '<section id="central">
                             <div class="container">
                             <div class="row">
                             <div class="col-3 mr-1 sidebar_productos">
                             <h3 class="list-group-item-heading text-center" style="color:#000000"; padding-top:5px; font-weight:bold; font-size:18px;">Productos</h3>
                             <div class="accordion" id="accordionExample">
                             <div class="card">
                             <div class="card-header p-0" id="headingOne">
                             <h2 class="mb-0">
                             <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <i class="fas fa-tasks"></i> Categorías
                             </button>
                             </h2>
                             </div>

                             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                             <div class="card-body m-0 pl-1 pr-0 py-0">

                             <div class="list-group">

                             <a class="list-group-item list-group-item-action" id="Adquisicion-y-registro-de-datos-DAQ" href="Adquisicion-y-registro-de-datos-DAQ" alt="Adquisici&oacute;n y registro de datos - DAQ" title="Adquisici&oacute;n y registro de datos - DAQ">Adquisici&oacute;n de datos</a>
                             <a class="list-group-item list-group-item-action" id="automatizacion-control-procesos" href="automatizacion-control-procesos" alt="Automatización y control de procesos" title="Automatización y control de procesos">Automatización y control de procesos</a>
                             <a class="list-group-item list-group-item-action" id="consumo" href="Consumo-y-analisis-de-energia-electrica" alt="consumo y analisis de energia" title="Consumo y análisis de energía eléctrica">Consumo y análisis de energía eléctrica</a>
                             <a class="list-group-item list-group-item-action" id="pc-y-comunicaciones-industriales" href="pc-y-comunicaciones-industriales" alt="PCs y Comunicaciones Industriales" title="PCs y Comunicaciones Industriales">PCs y Comunicaciones Industriales</a>
                             <a class="list-group-item list-group-item-action" id="instrumentos_medicion" href="instrumentos-medicion" alt="Prueba y medición" title="Prueba y medición">Prueba y medición</a>
                             <a class="list-group-item list-group-item-action" id="transductores_sensores" href="transductores-sensores" alt="Sensores y Transductores" title="Sensores y Transductores">Sensores y Transductores</a>
                             <a class="list-group-item list-group-item-action" id="software" href="software" alt="Software" title="Software">Software y herramientas de desarrollo</a>
                             <a class="list-group-item list-group-item-action" id="software" href="cursos" alt="Cursos" title="Cursos">Cursos</a>



                             </div><!--/list-group -->

                             </div>
                             </div>
                             </div>
                             <div class="card">
                             <div class="card-header p-0" id="headingTwo">
                             <h2 class="mb-0">
                             <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             <i class="fas fa-tasks"></i> Marcas
                             </button>
                             </h2>
                             </div>
                             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                             <div class="card-body m-0 pl-1 pr-0 py-0">
                             <div class="list-group ">
                             <a class="list-group-item list-group-item-action" id="arcus" href="Applied-Motion-Products" alt="APPLIED MOTION PRODUCTS " title="APPLIED MOTION PRODUCTS ">APPLIED MOTION PRODUCTS (USA)</a>
                             <a class="list-group-item list-group-item-action" id="calex" href="calex" alt="CALEX" title="CALEX">CALEX (UK)</a>
                             <a class="list-group-item list-group-item-action" id="cincoze" href="cincoze" alt="CINCOZE" title="CINCOZE">CINCOZE (Taiwan)</a>
                             <a class="list-group-item list-group-item-action" id="controllino" href="controllino" alt="CONTROLLINO" title="CONTROLLINO">CONTROLLINO (Austria)</a>
                             <a class="list-group-item list-group-item-action" id="data-translation" href="mc" alt="DATA TRANSLATION" title="DATA TRANSLATION">DATA TRANSLATION (USA)</a>
                             <a class="list-group-item list-group-item-action" id="fatek" href="fatek" alt="FATEK" title="FATEK">FATEK (Taiwán)</a>
                             <a class="list-group-item list-group-item-action" id="futek" href="futek" alt="FUTEK" title="FUTEK">FUTEK (USA)</a>
                             <a class="list-group-item list-group-item-action" id="graphtec" href="Graphtec" alt="GRAPHTEC" title="GRAPHTEC">GRAPHTEC (Japon)</a>
                             <a class="list-group-item list-group-item-action" id="gw-instruments" href="gw-instruments" alt="GW INSTRUMENTS" title="GW INSTRUMENTS">GW INSTRUMENTS (USA)</a>
                             <a class="list-group-item list-group-item-action" id="icp-das" href="icp-das" alt="" title="">ICP DAS (Taiwán)</a>
                             <a class="list-group-item list-group-item-action" id="IKEY" href="ikey" alt="IKEY" title="IKEY">IKEY(USA)</a>
                             <a class="list-group-item list-group-item-action" id="iotech" href="mc" alt="IO TECH" title="IO TECH">IO TECH (USA)</a>
                             <a class="list-group-item list-group-item-action" id="laumas" href="laumas" alt="LAUMAS" title="LAUMAS">LAUMAS (Italia)</a>
                             <a class="list-group-item list-group-item-action" id="LoggerFlex" href="LoggerFlex" alt="LoggerFlex" title="LoggerFlex">LOGGERFLEX (Canada)</a>
                             <a class="list-group-item list-group-item-action" id="laumas" href="equipos-logicbus" alt="Logicbus" title="Logicbus">LOGICBUS</a>
                             <a class="list-group-item list-group-item-action" id="microstrain" href="lord-sensing-microstrain" alt="" title="">LORD SENSING MICROSTRAIN (USA)</a>
                             <a class="list-group-item list-group-item-action" id="madgetech" href="MadgeTech" alt="MADGETECH" title="MADGETECH">MADGETECH (USA)</a>
                             <a class="list-group-item list-group-item-action" id="measurement_computing" href="mc" alt="MEASUREMENT COMPUTING" title="MEASUREMENT COMPUTING">MEASUREMENT COMPUTING (USA)</a>
                             <a class="list-group-item list-group-item-action" id="national_control_device" href="national-control-devices-ncd" alt="National Control Devices" title="National Control Devices">NATIONAL CONTROL DEVICES (USA)</a>
                             <a class="list-group-item list-group-item-action" id="onrobot" href="robots-OnRobot" alt="ON ROBOT" title="ON ROBOT">ON ROBOT (Dinamarca)</a>
                             <a class="list-group-item list-group-item-action" id="owon" href="owon" alt="OWON" title="OWON">OWON (China)</a>
                             <a class="list-group-item list-group-item-action" id="photocraft" href="photocraft" alt="PHOTOCRAFT" title="">PHOTOCRAFT (USA)</a>
                             <a class="list-group-item list-group-item-action" id="pico-technology" href="pico-technology" alt="PHOTOCRAFT" title="">PICO TECHNOLOGY (USA)</a>
                             <a class="list-group-item list-group-item-action" id="precise_automation" href="robots-Precise-Automation" alt="PRECISE AUTOMATION" title="PRECISE AUTOMATION">PRECISE AUTOMATION (USA)</a>
                             <a class="list-group-item list-group-item-action" id="RFID" href="rfid-inc" alt="RFID Inc" title="RFID Inc">RFID Inc. (USA)</a>
                             <a class="list-group-item list-group-item-action" id="rta" href="rta" alt="" title="">RTA (USA)</a>
                             <a class="list-group-item list-group-item-action" id="sealevel" href="sealevel" alt="" title="">SEALEVEL (USA)</a>
                             <a class="list-group-item list-group-item-action" id="seneca" href="seneca" alt="SENECA" title="SENECA">SENECA (Italia)</a>
                             <a class="list-group-item list-group-item-action" id="siasun" href="robots-siasun" alt="SIASUN" title="SIASUN">SIASUN (China)</a>
                             <a class="list-group-item list-group-item-action" id="siglent" href="siglent" alt="SIGLENT" title="SIGLENT">SIGLENT (China)</a>
                             <a class="list-group-item list-group-item-action" id="smartray" href="smartray" alt="SMARTRAY" title="SMARTRAY">SMARTRAY (Alemania)</a>
                             <a class="list-group-item list-group-item-action" id="teracom" href="teracom" alt="Teracom" title="Teracom">TERACOM (B&eacute;lgica)</a>
                             <a class="list-group-item list-group-item-action" id="tri-tonics" href="tri-tronics" alt="TRI-TRONICS" title="TRI-TRONICS">TRI-TRONICS (USA)</a>
                             <a class="list-group-item list-group-item-action" id="tri-tonics" href="vitrek" alt="VITREK" title="VITREK">VITREK (USA)</a>
                             <a class="list-group-item list-group-item-action" id="WAYCON" href="WayCon" alt="WAYCON" title="WINSONIC">WAYCON (Alemania)</a>
                             <a class="list-group-item list-group-item-action" id="winsonic" href="winsonic" alt="WINSONIC" title="WINSONIC">WINSONIC (Taiwan)</a>
                             <a class="list-group-item list-group-item-action" id="YOUIBOT" href="youibot" alt="YOUIBOT" title="YOUIBOT">YOUIBOT (China)</a>


                             </div><!--/list-group -->
                             </div>
                             </div>
                             </div>

                             </div>



                             </div>

                             <div class="col">


                             ';
}

function menucategorias()
{
  echo '<div class="cardMP hide-mobile">
    <p class="mt-3 med blue text-center">Categorías</p>
    <div class="bodyMP">
        <ul>
            <li class=""><a href="adquisicion-y-registro-de-datos-daq"> Adquisición y registro de datos - DAQ </a></li>
            <li class=""><a href="automatizacion-control-procesos"> Automatización y control de procesos </a></li>
            <li class=""><a href="consumo-y-analisis-de-energia-electrica"> Consumo y análisis de energía eléctrica </a></li>
            <li class=""><a href="pc-y-comunicaciones-industriales"> PCs y Comunicaciones Industriales </a></li>
            <li class=""><a href="instrumentos-medicion"> Prueba y medición </a></li>
            <li class=""><a href="transductores-sensores"> Sensores y Transductores </a></li>
            <li class=""><a href="software"> Software y herramientas de desarrollo </a></li>
            <li class=""><a href="cursos"> Cursos </a></li>
        </ul>
    </div>
    <div class="pl-2"><a class="med blue link-orange font-weight-bold" href="productos">Productos &raquo;</a></div>
    <div class="pl-2"><a class="med blue link-orange font-weight-bold" href="marcas-logicbus">Marcas &raquo;</a></div>
</div>';
}
function productsCat()
{
  echo '<div  style="background-color: #2A5C84; color: #fff; ">
                            <div class="navbar-nav">
                            <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                            <a class="navbar-brand" href="#"  style="color: #fff; ">Categorias</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"  aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">

                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>

                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>


                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>



                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>


                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>


                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ssssssssssssssss">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>



                            <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: #fff; ">
                            categoria1
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub1</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub2</a></li>
                            <li><a class="dropdown-item" href="#"  style="color: #000; ">Sub23</a></li>
                            </ul>
                            </li>
                            </ul>


                            </div>
                            </div>
                            </nav> 
                            </div>
                            </div>';
}


function lado2()
{
  echo '<section id="central">
                            <div class="container">
                            <div class="row">
                            <div class="col-3 mr-1 sidebar_productos">


                            <h3 class="list-group-item-heading text-center" style="color:#000000"; padding-top:5px; font-weight:bold; font-size:18px;">Productos</h3>



                            <div class="accordion" id="accordionExample">
                            <div class="card">
                            <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-tasks"></i> Categorías
                            </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body m-0 pl-1 pr-0 py-0">

                            <div class="list-group">

                            <a class="list-group-item list-group-item-action" id="adquisicion_de_datos" href="adquisicion-de-datos"><i class="fas fa-database"></i> Adquisición y Registro de Datos, DAQ</a>
                            <a class="list-group-item list-group-item-action" id="bacnet" href=""><i class="fas fa-project-diagram"></i> Automatización de procesos</a>
                            <a class="list-group-item list-group-item-action" id="clemas_conectores" href=""><i class="fas fa-bolt"></i> Consumo y Análisis de Energía Eléctrica</a>
                            <a class="list-group-item list-group-item-action" id="comunicacion_celular" href="productosCelulares"><i class="fas fa-weight"></i> Prueba y Medición</a>
                            <a class="list-group-item list-group-item-action" id="control_movimiento" href="control_movimiento"><i class="fas fa-microchip"></i> Sensores y Transductores</a>
                            <a class="list-group-item list-group-item-action" id="controladores_programables" href=""><i class="fab fa-microsoft"></i> Software y Herramientas de Desarrollo </a>   
                            </div><!--/list-group -->

                            </div>
                            </div>
                            </div>
                            <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                            <h2 class="mb-0">
                            <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-tasks"></i> Marcas
                            </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body m-0 pl-1 pr-0 py-0">
                            <div class="list-group">

                            <a class="list-group-item list-group-item-action" id="measurement_computing" href="mc">Measurement Computing</a>
                            <a class="list-group-item list-group-item-action" id="futek" href="futek">FUTEK</a>
                            <a class="list-group-item list-group-item-action" id="sealevel" href="sealevel">SEALEVEL</a>
                            <a class="list-group-item list-group-item-action" id="calex" href="calex">CALEX</a>
                            <a class="list-group-item list-group-item-action" id="fatek" href="fatek">FATEK</a>
                            <a class="list-group-item list-group-item-action" id="madgetech" href="MadgeTech">MadgeTech</a>
                            <a class="list-group-item list-group-item-action" id="seneca" href="seneca"> Seneca </a>
                            <a class="list-group-item list-group-item-action" id="siglent" href="siglent">Siglent</a>
                            <a class="list-group-item list-group-item-action" id="rta" href="rta">RTA</a>
                            <a class="list-group-item list-group-item-action" id="precise_automation" href="robots-Precise-Automation">PRECISE AUTOMATION</a>
                            <a class="list-group-item list-group-item-action" id="onrobot" href="robots-OnRobot">On Robot</a>
                            <a class="list-group-item list-group-item-action" id="siasun" href="robots-siasun">SIASUN</a>
                            <a class="list-group-item list-group-item-action" id="net-module" href="net-module">Net Module</a>
                            <a class="list-group-item list-group-item-action" id="united-electronics-industries" href="united-electronics-industries">United Electronics Industries</a>
                            <a class="list-group-item list-group-item-action" id="icp-das" href="icp-das">ICP DAS</a>
                            <a class="list-group-item list-group-item-action" id="data-translation" href="data-translation">Data Translation</a>
                            <a class="list-group-item list-group-item-action" id="iotech" href="iotech">IO Tech</a>
                            <a class="list-group-item list-group-item-action" id="owon" href="owon">Owon</a>
                            <a class="list-group-item list-group-item-action" id="graphtec" href="Graphtec">Graphtec</a>
                            <a class="list-group-item list-group-item-action" id="altus" href="Altus">Altus</a>
                            <a class="list-group-item list-group-item-action" id="indusoft" href="indusoft">Indusoft</a>
                            <a class="list-group-item list-group-item-action" id="cryopak" href="temperature_autonomos#cryopak">Cryopak</a>
                            <a class="list-group-item list-group-item-action" id="tri-tonics" href="sensores-fotoelectricos">Tri-Tonics</a>
                            <a class="list-group-item list-group-item-action" id="photocraft" href="https://www.logicbus.com.mx/encoder">Photocraft - Tri-Tronics</a>
                            <a class="list-group-item list-group-item-action" id="pico_technology" href="osciloscopios-virtuales-para-pc">Pico Technology</a>
                            <a class="list-group-item list-group-item-action" id="dawson-tools" href="dawson-tools">DAWSON TOOLS</a>
                            <a class="list-group-item list-group-item-action" id="teledyne" href="https://www.teledynedalsa.com/en/home/">TELEDYNE</a> 
                            </div><!--/list-group -->
                            </div>
                            </div>
                            </div>

                            </div>

                            </div>

                            <div class="col">
                            ';
}

function menuMovilApp()
{
  echo '<div class="ocultar-div accordion-menu">  
                            <ul>
                            <li>
                            <div class="dropdownlink"><strong>Por Industria</strong>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <ul class="submenuItems">
                            <li><a class="" id="academia e investigacion" href="soluciones-de-celdas-de-carga-en-la-industria-academia-e-investigacion" alt="soluciones en la industria energetica" title="soluciones en la industria energetica">Academia e investigación</a></li>
                            <li><a class="" id="agricultura" name="Agricultura" href="soluciones-de-celdas-de-carga-en-la-industria-agricultura" alt="Agricultura" title="Agricultura">Agrícultura</a></li>
                            <li><a class="" id="alimenticia" href="soluciones-de-celdas-de-carga-en-la-industria-alimenticia" alt="Alimenticia" title="Alimenticia">Alimenticia</a> </li>
                            <li><a class="" id="automatizacion" href="soluciones-de-celdas-de-carga-en-la-industria-de-la-automatizacion" alt="automatizacion" title="automatizacion">Automatización</a> </li>
                            <li><a class="" id="automotriz" href="soluciones-de-celdas-de-carga-en-la-industria-automotriz" alt="soluciones en la industria aeronautica" title="soluciones en la industria aeronautica">Automotriz</a></li>
                            <li><a class="" id="construccion" href="soluciones-de-celdas-de-carga-en-la-industria-construccion" alt="soluciones en la industria de la Agricultura" title="aplicaciones en la industria de la Agricultura">Construcción</a></li>
                            <li><a class="" id="materiales" href="https://www.logicbus.com.mx/soluciones-de-celdas-de-carga-en-la-industria-ensayos-de-materiales-y-resistencia" alt="soluciones en la industria de Ensayos de materiales y resistencia" title="soluciones en la industria Ensayos de materiales y resistencia">Ensayos de materiales y resistencia</a>  </li>
                            <li><a class="" id="espacial-defensa-aeronáutica" href="soluciones-de-celdas-de-carga-en-la-industria-espacial-defensa-aeronautica" alt="aplicaciones-industria-construccion" title="soluciones-industria-construccion">Espacial, Defensa y Aeronáutica</a></li>
                            <li><a class="" id="farmaceutica-y-laboratorio" name="Farmaceutica y laboratorio" href="soluciones-de-celdas-de-carga-en-la-industria-farmaceutica-y-laboratorio" alt="Farmaceutica y laboratorio" title="Farmaceutica y laboratorio">Farmacéutica y laboratorio</a></li>
                            <li><a class="" id="Manufactura" href="soluciones-de-celdas-de-carga-en-la-industria-manufactura" alt="Manufactura" title="Manufactura">Manufactura</a></li>
                            <li><a class="" id="Alimenticia" href="soluciones-de-celdas-de-carga-en-la-industria-robotica" alt="" title="">Robótica</a></li>
                            <li><a class="" id="transporte" href="soluciones-de-celdas-de-carga-en-la-industria-transporte" alt="soluciones en la industria de transporte" title="soluciones en la industria automotriz">Transporte</a>  </li>
                            </ul>
                            </li>
                            <li>
                            <div class="dropdownlink"><strong>Por Producto</strong>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <ul class="submenuItems">

                            <li><a class="" id="celdas-de-carga" href="aplicaciones-de-celdas-de-carga" alt="Celdas de carga" title="Celdas de carga">Celdas de carga</a></li>
                            <li><a class="" id="sensores" href="aplicaciones-de-sensores-de-torque" alt="Sensores" title="Sensores">Sensores de torque</a></li>
                            <li><a class="" id="Instrumentos de Medición" href="aplicaciones-de-instrumentos-medicion" alt="Instrumentos de Medición" title="Instrumentos de Medición">Instrumentos de Medición</a></li>
                            </ul>
                            </li>
                            </ul>
                            </div>';
}

function menuPC()
{
  echo '<div class="div_pc" style="float: right;">
                            <center>
                            <span>Menú</span>
                            <span  class="tooltip-toggle" data-tooltip="Para ver todas las aplicaciones de celdas de carga, haga clic en el icono del men&uacute; azul.">
                            <i class="far fa-question-circle"></i>
                            </span></center>

                            <a href="aplicaciones-de-celdas-de-carga">  
                            <span style="float: right;">
                            <img class="imgm" src="icono-menu-prueba.png" title="Ver aplicaciones de celda de carga">
                            </span>
                            </a>
                            </div>&nbsp;&nbsp;';
}


function menuCincoze()
{
  echo '<div class="ocultar-div accordion-menu">  
                            <ul>
                            <li>
                            <div class="dropdownlink"><strong>Por Industria</strong>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <ul class="submenuItems">
                            <li><a class="" id="Industria Aeroportuaria" href="implementacion-de-sistema-de-rayos-x-de-cuerpo-completo-en-aeropuertos" alt="Industria Aeroportuaria" title="Industria Aeroportuaria">Aeroportuaria</a></li>
                            <li><a class="" id="industria de transporte" href="almacenes-inteligentes-y-computadoras-industriales" alt="industria de transporte" title="industria de transporte">Almac&eacute;n y Log&iacute;stica</a></li>
                            <li><a class="" id="Industria farmaceutica" href="sistemas-inteligentes-de-gestion-de-energia" alt="Industria farmaceutica" title="Industria Farmaceutica">Energ&eacute;tica</a></li>
                            <li><a class="" id="Industria fabricacion" href="computadoras-industriales-cincoze-industria-fabricacion" alt="Industria fabricacion" title="Industria fabricacion">Fabricaci&oacute;n</a></li>
                            <li><a class="" id="kioskos" href="computadoras-industriales-para-kioskos-modernos" alt="Kioskos" title="Kioskos">Kioskos</a></li>
                            <li><a class="" id="seguridad" href="procesamiento-y-reconocimiento-de-imagenes-en-tiempo-real" alt="Seguridad y vigilancia" title="Seguridad y vigilancia">Seguridad y vigilancia</a></li>
                            <li><a class="" id="Industria Transporte" href="computadoras-industriales-cincoze-industria-transporte" alt="Industria Transporte" title="Industria Transporte">Transporte</a></li>
                            </ul>
                            </li>      
                            <li>
                            <div class="dropdownlink"><strong>Por Producto</strong>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <ul class="submenuItems">
                            <li><a class="" id="computadoras-industriales" href="aplicaciones-de-computadoras-industriales-cincoze" alt="computadoras industriales" title="computadoras industriales">Computadoras industriales</a></li>
                            </ul>
                            </li>
                            </ul>
                            </div>';
}

function buscadorAppsCS()
{
  echo ' <script type="text/javascript">
                function buscadorAppC() {
                  var input, filter, div, btn, a, e;
                  input = document.getElementById("inputApp");
                  filter = input.value.toUpperCase();
                  div = document.getElementById("apli-auto");
                  btn = div.getElementsByTagName("div");
                  for (e = 0; e < btn.length; e++) {
                    a = btn[e].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      btn[e].style.display = "block";
                    } else {
                      btn[e].style.display = "none";
                    }
                  }
                }
                function buscadorAppS() {
                  var input, filter, div, btn, a, e;
                  input = document.getElementById("inputApp");
                  filter = input.value.toUpperCase();
                  div = document.getElementById("apli-autot");
                  btn = div.getElementsByTagName("div");
                  for (e = 0; e < btn.length; e++) {
                    a = btn[e].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      btn[e].style.display = "block";
                    } else {
                      btn[e].style.display = "none";
                    }
                  }
                }
                function buscadorAppIA() {
                  var input, filter, div, btn, a, e;
                  input = document.getElementById("inputApp");
                  filter = input.value.toUpperCase();
                  div = document.getElementById("apli-autoia");
                  btn = div.getElementsByTagName("div");
                  for (e = 0; e < btn.length; e++) {
                    a = btn[e].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      btn[e].style.display = "block";
                    } else {
                      btn[e].style.display = "none";
                    }
                  }
                }

                function ocultarCeldas() {
                  document.getElementById("tCeldas").style.display = "none";
                  document.getElementById("apli-auto").style.display = "none";
                }
                function ocultarSensor() {
                  document.getElementById("tTorque").style.display = "none";
                  document.getElementById("apli-autot").style.display = "none";
                }
                function mostrarCeldas() {
                  document.getElementById("tCeldas").style.display = "";
                  document.getElementById("apli-auto").style.display = "";
                }
                function mostrarSensor() {
                  document.getElementById("tTorque").style.display = "";
                  document.getElementById("apli-autot").style.display = "";
                }
              </script>
                                  <input type="text" class="inputP" id="inputApp" onclick="mostrarCeldas(); mostrarSensor();" onkeyup="buscadorAppC(); buscadorAppS(); buscadorAppIA();" placeholder="Buscar Aplicaci&oacute;n" title="Escribe un nombre"> &nbsp;<i class="fas fa-search" style="color: #2D5680;"></i>';
}

function abajo2()
{
  echo (' </div>  <!-- /col -->
                                    </div> <!-- /row -->
                                    </div> <!-- /container --><section id="footer">
                                    <div class="container">
                                    <div class="row justify-content-around mb-4">

                                    <div class="col-12 col-sm-4 col-md-3 metodos_pago" align="left">
                                    <b>Métodos de pago</b> <br>
                                    <img src="images/metodos_de_pago02.jpg" alt="Métodos de pago" title="Métodos de pago" width="100%">
                                    <b>Transferencias electrónicas</b>
                                    </div>

                                    <div class="col-12 col-sm-4 col-md-4 metodos_pago" align="left">
                                    <b>Métodos de envío</b>
                                    <img src="images/metodos_de_envio.png" alt="Métodos de envío" title="Métodos de envío" width="100%">
                                    <br><b><i class="fas fa-dolly"></i>Envíos a todo el mundo</b>
                                    </div>

                                    <div class="col-12 col-sm-4 col-md-3">
                                    <b>Síguenos en:</b><br>
                                    <div align="">
                                    <!--Facebook-->
                                    <a href="https://www.facebook.com/Logicbus-172684612754642/" class="social_icon"><i class="fab fa-facebook-f" alt="Facebook" title="Facebook"></i></a>
                                    <!--Twitter-->
                                    <a href="https://twitter.com/Logicbus" class="social_icon" alt="X" title="X"><i class="fab fa-twitter"></i></a>
                                    <!--linkedin-->
                                    <a href="https://www.linkedin.com/company/logicbus" class="social_icon" alt="LinkedIn" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    <!--Instagram-->
                                    <a href="https://www.instagram.com/logicbus_sa/" class="social_icon" alt="Instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <!--Youtube-->
                                    <a href="https://www.youtube.com/user/LogicbusVideos" class="social_icon" alt="Youtube" title="Youtube"><i class="fab fa-youtube"></i></a>
                                    <br>
                                    <div class="fb-like mt-2" data-href="https://www.facebook.com/logicbus" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                    </div>
                                    </div>


                                    </div>



                                    <div class="row footer_main justify-content-around">

                                    <div class="col-12 col-md-2 seccion_links ">
                                    <b>Navegación</b>
                                    <ul>
                                    <li><a href="/" alt="Inicio" title="Inicio">Inicio</a> <span>|</span></li>
                                    <li><a href="productos" alt="Productos" title="Productos">Productos</a> <span>|</span></li>
                                    <li><a href="empresa" alt="Empresa" title="Empresa">Empresa</a> <span>|</span></li>
                                    <li><a href="servicios" alt="Servicios" title="Servicios">Servicios</a><span>|</span></li>
                                    <li><a href="eventos" alt="Eventos" title="Eventos">Eventos</a><span>|</span></li>
                                    <li  class="nav-item dropdown">
                                    <a class="nav-link" ><!--<i class="fas fa fa-envelope">-->CONTACTO</a>
                                    <div class="dropdown-menu dropdown-content-s">
                                    <a href="https://www.logicbus.com.mx/contacto#contactanos" target="_blank"><b>Contacto</b></a>
                                    <a href="servicios" target="_blank"><b>Servicios</b></a>
                                    </div>
                                    </li>
                                    <li><a href="https://www.logicbus.com.mx/blog" alt="Blog" title="Blog">Blog</a></li>
                                    </ul>
                                    </div>

                                    <div class="col-12 col-md-2 seccion_links">
                                    <b>Enlaces</b>
                                    <ul class="">
                                    <li><a href="https://tienda.logicbus.com.mx" alt="Tienda en México" title="Tienda en México">Tienda en México</a><span>|</span></li>
                                    <li><a href="https://www.logicbus.com/" alt="Tienda en USA" title="Tienda en USA">Tienda en USA</a><span>|</span></li>
                                    <li><a href="dist_int" alt="Integradores" title="Integradores">Integradores</a><span>|</span></li>
                                    <li><a href="compras" alt="Como comprar" title="Como comprar">Como comprar</a><span>|</span></li>
                                    <li><a href="productos" alt="Marcas" title="Marcas">Marcas</a> <span>|</span></li>
                                    <li><a href="clientes-logicbus" alt="Clientes" title="Clientes">Clientes</a><span>|</span></li>
                                    <li><a href="https://tienda.logicbus.com.mx/Vacantes" alt="Vacantes" title="Vacantes">Vacantes</a></li>
                                    </ul>
                                    </div>


                                    <div class="col-12 col-md-2 seccion_links">
                                    <b>Información</b>
                                    <ul class="">
                                    <li><a href="documentacion/pdf/Catalogo.pdf" target="_blank" alt="Catálogo" title="Catálogo">Catálogo</a> <span>|</span></li>
                                    <li><a href="Glosario" alt="Glosario" title="Glosario">Glosario</a> <span>|</span></li>
                                    <li><a href="documentos" alt="Documentación" title="Documentación">Documentación</a> <span>|</span></li>
                                    <li><a href="eventos" alt="Calendario" title="Calendario">Calendario</a> <span>|</span></li>
                                    <li><a href="boletines" alt="Boletín" title="Boletín">Boletín</a> <span>|</span></li>
                                    <li><a href="https://www.logicbus.com.mx/blog/category/bitacora/" alt="Noticias" title="Noticias">Noticias</a> <span>|</span></li>
                                    <li><a href="videos" alt="Videos" title="Videos">Videos</a> </li>
                                    <li><a href="seccion-informativa" alt="seccion-informativa" title="Seccion informativa">Sección informativa</a> </li>
                                    </ul>
                                    </div> 

                                    <div class="col-12 col-md-6 contacto_footer">
                                    <div class="row">
                                    <div class="col-12 col-md-6 dir_mx">
                                    <b>Oficina en México</b><br>
                                    Logicbus S.A. De C.V. © 2019.<br>
                                    <i class="fas fa-phone"></i> Tel / Fax: +52 (33)-3854-5975 <br>
                                    <i class="fas fa-phone"></i><a href="tel:+523338545975"> Tel: +52 (33)-3823-4349</a> <br>
                                    <i class="fas fa-phone"></i> <a href="tel:+16196167350"> Fuera de México: +1 619 616 7350 </a><br>
                                    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp: +52 55-5431-6718</a>
                                    </div>

                                    <div class="col-12 col-md-6 dir_usa">
                                    <b>Oficina en USA</b> <br>
                                    Logicbus INC © 2019.<br>
                                    863 Bowsprit Road, Chula Vista,<br>
                                    CA. 91914 Logicbus Inc. 2018. <br>
                                    <i class="fas fa-phone"></i> <a href="tel:+16196167350" > +1 (619)-616-7350</a>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col" align="center">
                                    <h2><i class="fas fa-dolly"></i> Envíos a todo el mundo</h2>
                                    </div>
                                    </div>

                                    </div>


                                    </div> 

                                    <div class="row mt-3 mt-md-0 justify-content-center">
                                    <div id="sf4144775b9e152fc73bc0a7fd6bddd36ec98e811ca5f0889b" data-type="signupform" style="">
                                    <div id="customForm">
                                    <div class="quick_form_2_css" style="background-color: rgb(238, 238, 238); z-index: 2; font-family: Arial; overflow: hidden; width: 500px; height: 200px;" name="SIGNUP_BODY">
                                    <div style="text-align: center; height: 200px;">
                                    <span style="font-size:14px;font-family:"Arial";font-weight:bold;color:#ffffff;text-align:center;padding: 15px 0;width:100%;display: block;background-color:#00aff0;" id="SIGNUP_HEADING">Inscríbete a nuestro boletín</span>
                                    <div style="position:relative;">
                                    <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                    <tr>
                                    <td width="10%">
                                    <img class="successicon" src="https://fcpu.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle">
                                    </td>
                                    <td>
                                    <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <form method="POST" id="zcampaignOptinForm" style="margin:0px;width:100%" action="https://maillist-manage.com/weboptin.zc" target="_zcSignup">
                                    <div style="background-color: rgb(255, 235, 232); padding: 10px; color: rgb(210, 0, 0); font-size: 11px; margin: 20px 10px 0px; border: 1px solid rgb(255, 217, 211); opacity: 1; display: none;" id="errorMsgDiv">Por favor, corrija el campo marcado(s) a continuación.</div>
                                    <div style="position:relative;width: 218px;height: 30px;margin-top:20px;display: inline-block;">
                                    <div id="Zc_SignupSuccess" style="position: absolute;width: 87%;background-color: white;padding: 3px;border: 3px solid rgb(194, 225, 154);margin-bottom: 10px;word-break: break-all;opacity: 1;display:none;">
                                    <div style="width: 20px;padding: 5px;display:table-cell">
                                    <img class="successicon" src="https://campaigns.zoho.com/images/challangeiconenable.jpg" style="width:20px;">
                                    </div>
                                    <div style="display:table-cell">
                                    <span id="signupSuccessMsg" style="color: rgb(73, 140, 132);font-family: sans-serif;font-size: 14px;word-break:break-word;line-height: 30px;display: block;"></span>
                                    </div>
                                    </div>
                                    <input type="text" style="font-size:12px;border-width:1px;border-color:rgb(235, 235, 235);border-style:solid;width: 100%;height: 100%;z-index:4;outline:none;box-sizing:border-box;padding:5px 10px;color:rgb(136, 136, 136);text-align:center;font-family:"Arial";border-radius:5px" placeholder="Correo Electrónico" changeitem="SIGNUP_FORM_FIELD" name="CONTACT_EMAIL" id="EMBED_FORM_EMAIL_LABEL">
                                    </div>
                                    <div style="position:relative;width: 218px;height: 30px;margin-top:20px;display: inline-block;">
                                    <input type="text" style="font-size:12px;border-width:1px;border-color: rgb(235, 235, 235);border-style:solid;width: 100%;height: 100%;z-index:4;outline:none;padding:5px 10px;box-sizing:border-box;color:rgb(136, 136, 136);text-align:center;font-family:"Arial";border-radius:5px" placeholder="Nombre" changeitem="SIGNUP_FORM_FIELD" name="FIRSTNAME" id="FIRSTNAME">
                                    </div>
                                    <div style="position:relative;width: 113px;height: 30px;margin:20px 0 15px;display: inline-block;">
                                    <input type="button" style="text-align:center;width:100%;height:100%;z-index:5;border:0;color:#ffffff;border-radius:2px;cursor: pointer;outline:none;font-size:14px;background-color:#00aff0;border-color:#00aff0;" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" value="Suscribirme">
                                    </div><!-- Do not edit the below Zoho Campaigns hidden tags -->
                                    <input type="hidden" id="fieldBorder" value="">
                                    <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                                    <input type="hidden" id="emailReportId" name="emailReportId" value="">
                                    <input type="hidden" id="formType" name="formType" value="QuickForm">
                                    <input type="hidden" name="zx" id="cmpZuid" value="1294f5a69">
                                    <input type="hidden" name="zcvers" value="3.0">
                                    <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                                    <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                                    <input type="hidden" id="zcld" name="zcld" value="1802dc5e56eb2789">
                                    <input type="hidden" id="document_domain" value="">
                                    <input type="hidden" id="zc_Url" value="fcpu.maillist-manage.com">
                                    <input type="hidden" id="new_optin_response_in" value="0">
                                    <input type="hidden" id="duplicate_optin_response_in" value="0">
                                    <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload="">
                                    <input type="hidden" id="zc_formIx" name="zc_formIx" value="4144775b9e152fc73bc0a7fd6bddd36ec98e811ca5f0889b"><!-- End of the Zoho Campaigns hidden tags -->
                                    <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span>
                                    <span style="display:none" id="dt_FIRSTNAME">1,false,1,First Name,2</span>
                                    <span style="display:none" id="dt_LASTNAME">1,false,1,Last Name,2</span>
                                    </form>
                                    </div>
                                    </div>
                                    </div>
                                    <img src="https://fcpu.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
                                    </div>
                                    <input type="hidden" id="signupFormType" value="QuickForm_Vertical">
                                    <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
                                    <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                                    <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                                    <img src="https://fcpu.maillist-manage.com/images/videoclose.png">
                                    </span>
                                    <div id="zcOptinSuccessPanel"></div>
                                    </div>




                                    </div>


                                    <div class="container">


                                    <div class="row contacto_footer_movil" align="center">
                                    <div class="col">
                                    <b>Logicbus S.A. De C.V. © 2019.</b><br>
                                    <i class="fas fa-phone"></i> Tel / Fax: + 52 (33)-3854-5975<br> 
                                    <i class="fas fa-phone"></i> Tel: +52 (33)-3823-4349<br>
                                    <i class="fas fa-phone"></i> Fuera de México: +1 619 616 7350<br>
                                    <a href="https://api.whatsapp.com/send?phone=525554316718&text=Hola%20Logicbus,me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp: +52 55-5431-6718</a>
                                    </div>
                                    </div>


                                    <div class="row keywords_footer">
                                    <div class="col"> 
                                    <a href="transductores-sensores" alt="Acondicionadores de Señal" title="Acondicionadores de Señal">Acondicionadores de Señal</a>
                                    | <a href="adquisicion-de-datos" alt="Adquisición de Datos" title="Adquisición de Datos">Adquisición de Datos</a>
                                    | <a href="analizador-espectro" alt="Analizador de Espectro" title="Analizador de Espectro">Analizador de Espectro</a>
                                    | <a href="automatizacion-control-procesos" alt="Automatización" title="Automatización">Automatización</a>
                                    | <a href="celdas_de_carga" alt="Celdas de carga" title="Celdas de carga">Celdas de carga</a>
                                    | <a href="robots" alt="Cobots" title="Cobots">Cobots</a>
                                    | <a href="industrial_computing" alt="Computadoras Industriales" title="Computadoras Industriales">Computadoras Industriales</a>
                                    | <a href="convertidores_protocolos" alt="Convertidores de Protocolo" title="Convertidores de Protocolo">Convertidores de Protocolo</a>
                                    | <a href="datalogger" alt="Dataloggers" title="Dataloggers">Dataloggers</a>
                                    | <a href="fatek" alt="Fatek" title="Fatek">Fatek</a>
                                    | <a href="fuentes_programables" alt="Fuentes programables" title="Fuentes programables">Fuentes programables</a>
                                    | <a href="futek" alt="Futek" title="Futek">Futek</a>
                                    | <a href="instrumentos-medicion" alt="Instrumentación" title="Instrumentación">Instrumentación</a>
                                    | <a href="MadgeTech" alt="Madgetech" title="Madgetech">Madgetech</a>
                                    | <a href="mc" alt="Measurement Computing" title="Measurement Computing">Measurement Computing</a>
                                    | <a href="sensores-temperatura" alt="Medición de Temperatura" title="Medición de Temperatura">Medición de Temperatura</a>
                                    | <a href="multimetros" alt="Multímetros" title="Multímetros">Multímetros</a>
                                    | <a href="stand_osciloscopios" alt="Osciloscopios Digitales" title="Osciloscopios Digitales">Osciloscopios Digitales</a>
                                    | <a href="industrial_computing" alt="Panel PC" title="Panel PC">Panel PC</a>
                                    | <a href="industrial_touchscreens" alt="Pantallas HMI" title="Pantallas HMI">Pantallas HMI</a>
                                    | <a href="pico-technology" alt="Picotech" title="Picotech">Picotech</a>
                                    | <a href="plc" alt="PLC" title="PLC">PLC</a>
                                    | <a href="convertidores_protocolos" alt="Protocolos de Comunicación" title="Protocolos de Comunicación">Protocolos de Comunicación</a>
                                    | <a href="multivariables_logger" alt="Registradores Gráficos" title="Registradores Gráficos">Registradores Gráficos</a>
                                    | <a href="rta" alt="RTA" title="RTA">RTA</a>
                                    | <a href="sensores_RTD" alt="RTD" title="RTD">RTD</a>
                                    | <a href="software" alt="SCADA" title="SCADA">SCADA</a>
                                    | <a href="sensores-temperatura" alt="Sensores de temperatura" title="Sensores de temperatura">Sensores de temperatura</a>
                                    | <a href="torque_sensor" alt="Sensores de torque" title="Sensores de torque">Sensores de torque</a>
                                    | <a href="siglent" alt="Siglent" title="Siglent">Siglent</a>
                                    | <a href="sensores-fotoelectricos" alt="Tritronics" title="Tritronics">Tritronics</a>
                                    | <a href="seccion-informativa" alt="Sección informativa" title="Sección informativa">Sección informativa</a>
                                    </div>
                                    </div>

                                    <div class="row estados_footer">
                                    <div class="col"> 
                                    Aguascalientes | Baja California | Baja California Sur | Campeche | Chiapas | Chihuahua | Coahuila de Zaragoza | Colima | Durango | Estado de México | Guanajuato | Guerrero | Hidalgo | Jalisco | Michoacán de Ocampo | Morelos | Nayarit | Nuevo León | Oaxaca | Puebla | Querétaro | Quintana Roo | San Luis Potosí | Sinaloa | Sonora | Tabasco | Tamaulipas | Tlaxcala | Veracruz | Yucatán | Zacatecas
                                    </div>
                                    </div>

                                    </div>

                                    <div class="aviso_privacidad">
                                    <div class="container">
                                    <div class="row">

                                    <div class="col-12" align="center">
                                    <a href="aviso_privacidad" alt="Aviso de Privacidad" title="Aviso de Privacidad">Aviso de Privacidad</a> | <a href="Terminos-y-Condiciones_ep_2-1" alt="Términos y Condiciones" title="Términos y Condiciones">Términos y Condiciones</a>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </section>
                                    <script src="libreria/bootstrap/dist/js/bootstrap.min.js"></script>
                                    <script type="text/javascript">
                    $("#navbarPhone, #navbarNav").on("show.bs.collapse", function () {
                      $("#navbarPhone, #navbarNav").collapse("hide");
                    })
                  </script>
                                      ');
}
// Inserta el codigo para mostrar los pies de pagina
function abajo()
{
  require("libreria/footer.view.php");
  echo ('<script src="libreria/js/www.js"></script>');
}





function seccionSoluciones()
{
  echo '<section id="central">
  <div class="container">
  <div class="gridContArriba">
  <div class=" griditemContA">


  <h3 class="list-group-item-heading text-center" style="color:#000000"; padding-top:5px; font-weight:bold; font-size:18px;">Aplicacion</h3>



  <div class="accordion" id="seccionSoluciones">
  <div class="card">
  <div class="card-header p-0" id="headingOne">
  <h2 class="mb-0">
  <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  <i class="fas fa-tasks"></i> Por Industria
  </button>
  </h2>
  </div>

  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#seccionSoluciones">
  <div class="card-body m-0 pl-1 pr-0 py-0">

  <div class="list-group">
  <a class="list-group-item list-group-item-action" id="academia e investigacion" href="soluciones-de-celdas-de-carga-en-la-industria-academia-e-investigacion" alt="soluciones en la industria energetica" title="soluciones en la industria energetica">Academia e investigación</a>
  <a class="list-group-item list-group-item-action" id="agricultura" href="soluciones-de-celdas-de-carga-en-la-industria-agricultura" alt="Agricultura" title="Agricultura">Agrícultura</a>
  <a class="list-group-item list-group-item-action" id="alimenticia" href="soluciones-de-celdas-de-carga-en-la-industria-alimenticia" alt="Alimenticia" title="Alimenticia">Alimenticia</a>
  <a class="list-group-item list-group-item-action" id="automatizacion" href="soluciones-de-celdas-de-carga-en-la-industria-de-la-automatizacion" alt="soluciones de la automatizacion" title="soluciones en la industria aeronautica">Automatizaci&oacute;n</a>
  <a class="list-group-item list-group-item-action" id="automotriz" href="soluciones-de-celdas-de-carga-en-la-industria-automotriz" alt="soluciones en la industria aeronautica" title="soluciones en la industria aeronautica">Automotriz</a>
  <a class="list-group-item list-group-item-action" id="construccion" href="soluciones-de-celdas-de-carga-en-la-industria-construccion" alt="soluciones en la industria de la Agricultura" title="aplicaciones en la industria de la Agricultura">Construcción</a>
  <a class="list-group-item list-group-item-action" id="construccion" href="soluciones-de-celdas-de-carga-en-la-industria-desarrollo-de-productos-y-oem" alt="Desarrollo de productos y OEM" title="Desarrollo de productos y OEM">Desarrollo de productos y OEM</a>
  <a class="list-group-item list-group-item-action" id="materiales" href="soluciones-de-celdas-de-carga-en-la-industria-ensayos-de-materiales-y-resistencia" alt="soluciones en la industria de Ensayos de materiales y resistencia" title="soluciones en la industria Ensayos de materiales y resistencia">Ensayos de materiales y resistencia</a>
  <a class="list-group-item list-group-item-action" id="espacial-defensa-aeronáutica" href="soluciones-de-celdas-de-carga-en-la-industria-espacial-defensa-aeronautica" alt="aplicaciones-industria-construccion" title="soluciones-industria-construccion">Espacial, Defensa y Aeronáutica</a>
  <a class="list-group-item list-group-item-action" id="farmaceutica-y-laboratorio" href="soluciones-de-celdas-de-carga-en-la-industria-farmaceutica-y-laboratorio" alt="Farmaceutica y laboratorio" title="Farmaceutica y laboratorio">Farmacéutica y laboratorio</a>
  <a class="list-group-item list-group-item-action" id="Manufactura" href="soluciones-de-celdas-de-carga-en-la-industria-manufactura" alt="Manufactura" title="Manufactura">Manufactura</a>
  <a class="list-group-item list-group-item-action" id="Alimenticia" href="soluciones-de-celdas-de-carga-en-la-industria-robotica" alt="soluciones en la industria academia e investigación" title="soluciones en la industria academia e investigacion">Robótica</a>
  <a class="list-group-item list-group-item-action" id="transporte" href="soluciones-de-celdas-de-carga-en-la-industria-transporte" alt="soluciones en la industria de transporte" title="soluciones en la industria automotriz">Transporte</a>
  
  </div><!--/list-group -->
  </div>
  </div>
  </div>
  <div class="card">
  <div class="card-header p-0" id="headingTwo">
  <h2 class="mb-0">
  <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  <i class="fas fa-tasks"></i>Por Producto 
  </button>
  </h2>
  </div>
  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#SeccionSoluciones">
  <div class="card-body m-0 pl-1 pr-0 py-0">
  <div class="list-group ">

  <a class="list-group-item list-group-item-action" id="celdas-de-carga" href="aplicaciones-de-celdas-de-carga" alt="Celdas de carga" title="Celdas de carga">Celdas de carga</a>
  <a class="list-group-item list-group-item-action" id="sensores" href="aplicaciones-de-sensores-de-torque" alt="Sensores" title="Sensores">Sensores de torque</a>
  <a class="list-group-item list-group-item-action" id="instrumentosm" href="aplicaciones-de-instrumentos-medicion" alt="Instrumentos" title="Instrumentos">Instrumentos de Medición</a>   
  
  </div><!--/list-group -->
  </div>
  </div>
  </div>

  </div>



  </div>

  <div class="griditemContA">';
}

function seccionAppCompus()
{
  echo '<section id="central">
  <div class="container">
  <div class="row">
  <div class="col-3 mr-1 sidebar_productos">

  <h3 class="list-group-item-heading text-center" style="color:#000000; padding-top:5px; font-weight:bold; font-size:18px;">Aplicacion</h3>

  <div class="accordion" id="seccionSoluciones">
  <div class="card">
  <div class="card-header p-0" id="headingOne">
  <h2 class="mb-0">
  <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  <i class="fas fa-tasks"></i> Por Industria
  </button>
  </h2>
  </div>

  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#seccionSoluciones">
  <div class="card-body m-0 pl-1 pr-0 py-0">

  <div class="list-group">
  <a class="list-group-item list-group-item-action" id="Industria Aeroportuaria" href="implementacion-de-sistema-de-rayos-x-de-cuerpo-completo-en-aeropuertos" alt="Industria Aeroportuaria" title="Industria Aeroportuaria">Aeroportuaria</a>
  <a class="list-group-item list-group-item-action" id="industria de transporte" href="almacenes-inteligentes-y-computadoras-industriales" alt="industria de transporte" title="industria de transporte">Almac&eacute;n y Log&iacute;stica</a>
  <a class="list-group-item list-group-item-action" id="Industria farmaceutica" href="sistemas-inteligentes-de-gestion-de-energia" alt="Industria farmaceutica" title="Industria Farmaceutica">Energ&eacute;tica</a>
  <a class="list-group-item list-group-item-action" id="Industria fabricacion" href="computadoras-industriales-cincoze-industria-fabricacion" alt="Industria fabricacion" title="Industria fabricacion">Fabricaci&oacute;n</a>
  <a class="list-group-item list-group-item-action" id="kioskos" href="computadoras-industriales-para-kioskos-modernos" alt="Kioskos" title="Kioskos">Kioskos</a>
  <a class="list-group-item list-group-item-action" id="seguridad" href="procesamiento-y-reconocimiento-de-imagenes-en-tiempo-real" alt="Seguridad y vigilancia" title="Seguridad y vigilancia">Seguridad y vigilancia</a>
  <a class="list-group-item list-group-item-action" id="Industria Transporte" href="computadoras-industriales-cincoze-industria-transporte" alt="Industria Transporte" title="Industria Transporte">Transporte</a>
  
  </div><!--/list-group -->
  </div>
  </div>
  </div>
  <div class="card">
  <div class="card-header p-0" id="headingTwo">
  <h2 class="mb-0">
  <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  <i class="fas fa-tasks"></i>Por Producto 
  </button>
  </h2>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#SeccionSoluciones">
  <div class="card-body m-0 pl-1 pr-0 py-0">
  <div class="list-group">

  <a class="list-group-item list-group-item-action" id="computadoras-industriales" href="aplicaciones-de-computadoras-industriales-cincoze" alt="computadoras industriales" title="computadoras industriales">Computadoras industriales</a>
  </div><!--/list-group -->
  </div>
  </div>
  </div>

  </div>



  </div>

  <div class="col">';
}

?>
<!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

<script type="text/javascript" src="https://fcpu.maillist-manage.com/js/optin.min.js" onload="setupSF('sf4144775b9e152fc73bc0a7fd6bddd36ec98e811ca5f0889b','ZCFORMVIEW',false,'light')"></script>
<script type="text/javascript">
  function runOnFormSubmit_sf4144775b9e152fc73bc0a7fd6bddd36ec98e811ca5f0889b(th) {
    /*Before submit, if you want to trigger your event, "include your code here"*/
  };
</script>

<style>
  #customForm.quick_form_2_css * {
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
    word-break: break-word;
    overflow-wrap: break-word;
  }

  /*** RESPONSIVE START */
  @media only screen and (max-width: 200px) {
    .quick_form_2_css[name='SIGNUP_BODY'] {
      width: 100% !important;
      min-width: 100% !important;
      margin: 0px auto !important;
      padding: 0px !important
    }
  }

  /*Major Mobiles*/
  @media screen and (min-width: 320px) and (max-width: 580px) and (orientation : portrait) {
    .quick_form_2_css[name='SIGNUP_BODY'] {
      max-width: 300px !important;
      margin: 0px auto !important;
      padding: 0px !important;
    }
  }

  /* iPads*/
  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
    .quick_form_2_css[name='SIGNUP_BODY'] {
      max-width: 500px !important;
      margin: 0px auto !important;
    }
  }

  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
    .quick_form_2_css[name='SIGNUP_BODY'] {
      max-width: 700px !important;
      margin: 0px auto !important;
    }
  }

  @media screen and (min-width: 475px) and (max-width: 980px) and (orientation : landscape) {
    .quick_form_2_css[name='SIGNUP_BODY'] {
      max-width: 400px !important;
      margin: 0px auto !important;
      padding: 0px !important;
    }
  }



  .dropdown-content-s {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    /*min-width: 160px;*/
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content-s a {
    color: black;
    padding: 5px 10px 5px 10px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content-s a:hover {
    background-color: #f1f1f1
  }

  .dropdown:hover .dropdown-content-s {
    display: block;
  }

  /*** RESPONSIVE END */
</style>

<!--Zoho Campaigns Web-Optin Form's Header Code Ends Here-->
<script>
  var w = window;
  var p = w.location.protocol;
  if (p.indexOf("http") < 0) {
    p = "http" + ":";
  }
  var d = document;
  var f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
  s.type = 'text/javascript';
  s.async = false;
  if (s.readyState) {
    s.onreadystatechange = function() {
      if (s.readyState == "loaded" || s.readyState == "complete") {
        s.onreadystatechange = null;
        try {
          loadwaprops("27218d28c96aa859e0eeb1bd3ffffea76", "278aa3345250e3338d71b62c3142be692",
            "24144775b9e152fc79f147dc2b82826fa40fbf6cd35f5c50c", "23ef75e03f535a3a172b19f46407a08bc",
            "0.0");
        } catch (e) {}
      }
    };
  } else {
    s.onload = function() {
      try {
        loadwaprops("27218d28c96aa859e0eeb1bd3ffffea76", "278aa3345250e3338d71b62c3142be692",
          "24144775b9e152fc79f147dc2b82826fa40fbf6cd35f5c50c", "23ef75e03f535a3a172b19f46407a08bc", "0.0");
      } catch (e) {}
    };
  };
  s.src = p + "//marketinghub.zoho.com/hub/js/WebsiteAutomation.js";
  f.parentNode.insertBefore(s, f);
</script>
<script type="text/javascript">
  /////////FUNCION PARA LIGAR PRODUCTOS DESDE WWW.LOGICBUS.COM A TIENDA.LOGICBUS.COM MEDIANTE ICONO DE COMPRAS CREADO POR LOGICBUS AGOSTO 9 DEL 2012 INICIO////////////////////////////////
  function atienda() {
    var paginactual = document.location
      .href ///obtiene pagina actual ejemplo--> http://www.logicbus.com.mx/serie_fbs.php
    var largocadenapagina = paginactual.length ///////saca el tamaño de la cadena--> largocadenapagina = 40
    var paginactualcortada = paginactual.substr(28,
      largocadenapagina) //////le corta a la pagina actual "http://www.logicbus.com.mx/" entonces queda paginaactualcortada = serie_fbs.php
    var largocadenapaginacortada = paginactualcortada
      .length ////determina el tamaño de la nueva cadena  largocadenapaginacortada = 13
    largocadenapaginacortada = largocadenapaginacortada -
      4 /////determina el largo de la cadena sin ".php"  largocadenapaginacortada = 9
    //var numeroparte = paginactualcortada.substr(0, largocadenapaginacortada)///elimina el .php de la cadenacortada entonces numerodeparte = serie_fbs

    /// Modificado por LOGICBUS
    var numeroparte = paginactualcortada.split(".")[
      0] /// paginactualcortada se divide en un arreglo de 2 elementos al encontrarse un punto con la funcion split(".") -> serie_fbs y php
    /// y se asigna a numeroparte el primer elemento que sería serie_fbs

    var dato2 = "http://tienda.logicbus.com.mx/search.asp?keyword="
    var dato3 = "&search.x=0&search.y=0"
    var dato4 = dato2 + numeroparte +
      dato3 //concatena el numero de parte con el codigo de busqueda y genera la direccion con la palabra clave  dato4=http://tienda.logicbus.com.mx/search.asp?keyword=SERIE_FBS&search.x=0&search.y=0

    window.open(dato4,
      "nuevo"); //abre una ventana nueva con la direccion de busqueda y la palabra clave obtenida de la pagina actual que a su ves es un numero de parte

  }


  function atienda2(
    producto) // Función para utilizar en productos que se encuentran en una misma página, se debe especificar el nombre del producto
  {

    var numeroparte = producto
    var dato2 = "http://tienda.logicbus.com.mx/search.asp?keyword="
    var dato3 = "&search.x=0&search.y=0"
    var dato4 = dato2 + producto +
      dato3 //concatena el numero de parte con el codigo de busqueda y genera la direccion con la palabra clave  dato4=http://tienda.logicbus.com.mx/search.asp?keyword=SERIE_FBS&search.x=0&search.y=0

    window.open(dato4,
      "nuevo"); //abre una ventana nueva con la direccion de busqueda y la palabra clave obtenida de la pagina actual que a su ves es un numero de parte

  }
  /////////FUNCION PARA LIGAR PRODUCTOS DESDE WWW.LOGICBUS.COM A TIENDA.LOGICBUS.COM MEDIANTE ICONO DE COMPRAS CREADO POR LOGICBUS AGOSTO 9 DEL 2012 FIN///////////////////////////////
</script>