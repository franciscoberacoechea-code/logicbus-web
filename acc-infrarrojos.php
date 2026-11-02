<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Accesorios para sensores de temperatura infrarrojo</title>
  <meta name="description" content="Accesorios - Sensor de temperatura miniatura infrarrojo, salida de 4~20mA, rango de temperatura desde 100°C hasta 2000°C, salidas de 4 a 20 mA o modbus RS485.">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, GueLeon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcalarrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo , Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Sensores, Transductores, Acondicionadores, Celda de Carga, Sensores de Temperatura, Sensores de Torque, Emncoders, Transductores de temperatura, Transductores de temperatura y humedad, Acondicionador de Temperatura, sensores, temperatura, infrarrojo, sensores de temperatura, tipos de sensores, termopares infrarrojos, infrared, sensores de temperatura infrarrojos, temperatura infrarrojo, alta temperatura, Accesorios">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

  <!--- Estilos Necesarios-->
  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $flickity_css; ?>
  <?php echo $carrusel_productos; ?>
  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>
</head>

<body>
  <?php echo $var_body; ?>
  <?php require("libreria/header.view.php"); ?>

  <section class="container-fluid">
    <div class="row">
      <div class="col-3 hide-mobile">
        <?php menucategorias(); ?>
      </div>
      <div class="col-12 col-md-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="./productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="./transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item"><a href="./sensores-temperatura" class="blue link-orange">Sensores de Temperatura</a></li>
            <li class="breadcrumb-item"><a href="./infrarrojos" class="blue link-orange">Infrarrojos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
          </ol>
        </nav>

        <h1 class="blue title text-center">Accesorios para sensores de temperatura infrarrojos</h1>
        <center>
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/79/ABS.jpg" alt="ABL" title="ABL" width="250px">
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/79/APL.jpg" alt="APL" title="APL" width="250px">
          <img class="mx-auto" src="https://www.logicbus.com.mx/imagenes/79/APM.jpg" alt="APM" title="APM" width="250px">
        </center>
        <div class="text-right">
          <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-infrarrojos-accesorios"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
        </div>
        <p class="text-justify paragraph">Accesorios para sensores de temperatura infrarrojos de cualquier tipo, contamos con soportes ajustables para sensores compactos como PyroCouple, PyroUSB, PyroBus o PyroEpsilon. Dentro de los accesorios se encuentran las herramientas de medición que se adaptan al sensor para mejorar las mediciones.</p>
        <p class="text-justify paragraph">Dentro de los accesorios se encuentran módulos para ajustar la emisividad de los sensores, cajas con conexiones para sensores ModBus, Terminales con pantalla para muestra y registro de datos con alarma.</p>
      </div>
  </section>

  <section class="container-fluid px-5">
    <div class="container" id="productos">
      <div class="my-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">Productos</h2>
      </div>
    </div>
    <div class="d-flex justify-content-center flex-wrap">

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh; width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/ABS.jpg" class="card-img" alt="ABL">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./abl">ABL</a></h3>
              <p class="card-text">Soporte Ajustable para PyroUSB.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/ABL_p_9029.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/ABS.jpg" class="card-img" alt="ABS">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./abs">ABS</a></h3>
              <p class="card-text">Soporte ajustable para sensores compactos (PyroCouple, PyroBus y PyroEpsilon).</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/ABS_p_4720.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/APL.jpg" class="card-img" alt="ABS">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">APL</h3>
              <p class="card-text">Collar aislador de ambiente, mantiene el polvo, humo, humedad y otros contaminantes lejos de la lente del sensor. El aire fluye en la conexión de al lado y hacia afuera de la abertura en la parte delantera.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/APL_p_4639.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/APM.jpg" class="card-img" alt="APM">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">APM</h3>
              <p class="card-text">Collar de purga de aire para sensor ExTemp. Se utiliza para mantener el polvo, los humos, la humedad y otros contaminantes lejos de la lente. El aire fluye en el accesorio en el lado y fuera de la abertura en el frente.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/APM_p_16107.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/APL.jpg" class="card-img" alt="APSN">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">APSN</h3>
              <p class="card-text">Collar de purga por aire para sensores compactos (PyroCouple, PyroBus y PyroEpsilon) con campo de visión de 15:1, 30:1 y foco cerrado.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/APSN_p_4640.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/APL.jpg" class="card-img" alt="APSW">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">APSW</h3>
              <p class="card-text">Collar de purga por aire para sensores compactos (PyroCouple, PyroBus y PyroEpsilon) con campo de visión de 2:1.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/APSW_p_4641.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/ATR121AD.jpg" class="card-img" alt="ATR121AD">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">ATR121AD</h3>
              <p class="card-text">Controlador con doble punto de ajuste|Alimentación: 12~24VAC 12~35VDC|Display: 3 dígitos color rojo LED|Ambiente de operación: 0~40°C, 35~95%RH|#Entradas: 1 configurable|Acción de control: Encendido/Apagado, PID|Protección IP54|Salida: 2 Relevadores + SSR.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/ATR121AD_p_17384.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/ATR142.jpg" class="card-img" alt="ATR142-ABC">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">ATR142-ABC</h3>
              <p class="card-text">Controlador/Indicador de montaje en panel con 3 puntos de ajuste, doble pantalla LED de 4 dígitos y 2 salidas a relevador y una salida de SSR.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/ATR121AD_p_17384.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/79/ATR142.jpg" class="card-img" alt="ATR142-ABC-T">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center">ATR142-ABC-T</h3>
              <p class="card-text">Controlador/Indicador de montaje en panel con 3 puntos de ajuste, doble pantalla LED de 4 dígitos y 1 salida a relevador, una salida de SSR y comunicación RS485 Modbus RTU.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/ATR121AD_p_17384.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://www.logicbus.com.mx/imagenes/lct_small.png" class="card-img" alt="LCT">
          </div>
          <div class="col-md-7">
            <div class="card-body">
            <h3 class="card-title text-center"><a class="blue link-orange" href="./lct">LCT</a></h3>
              <p class="card-text">Herramienta de configuración de lazo (adaptador USB), para uso sobre el lado seguro del aislador, y software de configuración del sensor de la serie ExTemp. Se une al lazo 4~20mA vía conectores tipo mini gancho.</p>
            </div>
          </div>
          <div class="col-2 m-auto">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/LCT_p_9592.html"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>