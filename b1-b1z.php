<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PLC Controlador Logico Programable serie B1/B1z</title>
  <meta name="description" content="PLC Familia B1 / B1z incorpora los mas sofisticados procesos de manufactura y alta calidad en el diseño de tarjetas de dos capas">
  <meta name="keywords" content="PLC, FBs-10MCU, FBs-32MCU, FBs-TC6, FBs-CM25E, Familia B1, Familia B1z, controlador, controladores, Modulos, Expancion, comunicacion, E/S, digitales, relevador, Unidades Expandibles (B1), Unidades No Expandibles (B1z), Módulos de Entradas y Salidas Digitales, Módulos de Entradas y Salidas Analogas, Módulos de Comunicación, Accesorios, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
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
            <li class="breadcrumb-item"><a href="./transductores-sensores" class="blue link-orange">Automatización y Control de Procesos</a></li>
            <li class="breadcrumb-item"><a href="./plc" class="blue link-orange">PLC</a></li>
            <li class="breadcrumb-item active" aria-current="page">PLC Familia B1 / B1z</li>
          </ol>
        </nav>

        <h1 class="sr-only">PLC Familia B1 / B1z</h1>
        <img class="mx-auto" src="https://www.logicbus.com.mx/images/banner/www/Banner-PLC-b1b2.jpg" alt="PLC Familia B1 / B1z" title="PLC Familia B1 / B1z" width="100%">
        <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
          <a class="button-text" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-serie-b1-b1z" target="_blank"><button class="button button-white">Ver en Tienda MX</button></a>
          <a class="button-text" href="#productos"><button class="button button-white">Productos</button></a>
          <a class="button-text" href="#catalogos"><button class="button button-white">Catálogos</button></a>
          <a class="button-text" href="./contacto"><button class="button button-white">Contacto</button></a>
        </div>
        <p class="paragraph text-justify">Con el diseño del hardware optimizado y la alta tecnología de componentes SoC integrados, el número de componentes requeridos en los PLC de la serie B1/B1z se reduce significativamente, además combinando la alta calidad de sus componentes yl os rigurosos procedimientos de control de calidad, Logicbus crea un PLC de la más alta calidad para la industria de hoy.</p>
      </div>
    </div>
    <div class="container mt-5">
      <h2 class="paragraph text-justify font-weight-bold">Compacto y robusto</h2>
      <p class="paragraph text-justify">Los componentes comunes están ahora integrados en el integrado principal, por lo que el procesador y la etapa de E / S ahora se pueden fabricar en una sola PCB reducir sustancialmente el tamaño total y el aumento de la fiabilidad de los controladores de la serie B1/B1z.</p>
      <h2 class="paragraph text-justify font-weight-bold">Precio competitivo</h2>
      <p class="paragraph text-justify">El diseño optimizado de la tecnología SoC reduce significativamente los costos de hardware, además los PLC de la serie B1/B1z incorporan el proceso del fabricación más sofisticada y un diseño de PCB de dos capas de alta calidad. Esto hace que los PLC B1/B1z tengan un precio muy competitivo en el mercado de PLCs.</p>
    </div>
  </section>

  <section class="container-fluid px-5" id="productos">
    <div class="my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">Productos</h2>
    </div>
    <div class="d-flex justify-content-center flex-wrap">
      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://tienda.logicbus.com.mx/assets/images/29/B1/b1_16y_t.jpg" class="card-img" alt="Unidades Expandibles (B1)">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./b1-expandibles">Unidades Expandibles (B1)</a></h3>
              <p class="card-text text-justify">Fácil de utilizar, con juego de instrucciones comunes los PLC de la serie B1/B1z proporcionan instrucciones fáciles de usar pero potentes. Tanto los PLC de la serie B1/B1z y FBs se programan por el mismo software - "Winproladder".</p>
            </div>
          </div>
          <div class="col-2 m-auto text-center">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/search.asp?keyword=b1-"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://tienda.logicbus.com.mx/assets/images/29/b1/b1z_24m.jpg" class="card-img" alt="Unidades No Expandibles (B1z)">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./b1z">Unidades No Expandibles (B1z)</a></h3>
              <p class="card-text text-justify">Los componentes comunes están ahora integrados en el integrado principal, por lo que el procesador y la etapa de E / S ahora se pueden fabricar en una sola PCB reducir sustancialmente el tamaño total y el aumento de la fiabilidad de los controladores de la serie B1/B1z.</p>
            </div>
          </div>
          <div class="col-2 m-auto text-center">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/search.asp?keyword=b1z"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://tienda.logicbus.com.mx/assets/images/29/B1/b1_8x_t.jpg" class="card-img" alt="Módulos de Entradas y Salidas Digitales">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./b1-digitales">Módulos de Entradas y Salidas Digitales</a></h3>
              <p class="card-text text-justify">Estos dispositivos se encargan del trabajo de intercomunicación entre los dispositivos industriales exteriores que envían señales de tipo digital o discreta al PLC y todos los circuitos electrónicos de baja potencia que comprenden a la unidad central de proceso del PLC, que es donde se almacena y ejecuta el programa de control.</p>
            </div>
          </div>
          <div class="col-2 m-auto text-center">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-serie-b1-b1z-modulos-de-expansion-a-la-derecha"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://tienda.logicbus.com.mx/assets/images/29/B1/b1_l4ad_t.jpg" class="card-img" alt="Módulos de Entradas y Salidas Análogas">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./b1-analogos">Módulos de Entradas y Salidas Análogas</a></h3>
              <p class="card-text text-justify">Estos dispositivos se encargan del trabajo de intercomunicación entre los dispositivos industriales exteriores que envían señales de tipo análoga al PLC y todos los circuitos electrónicos de baja potencia que comprenden a la unidad central de proceso del PLC, que es donde se almacena y ejecuta el programa de control.</p>
            </div>
          </div>
          <div class="col-2 m-auto text-center">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-serie-b1-b1z-modulos-de-expansion-a-la-izquierda"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="card m-3 d-flex justify-content-center" style="max-width: 85vh;">
        <div class="row no-gutters">
          <div class="col-md-3 m-auto">
            <img src="https://tienda.logicbus.com.mx/assets/images/FBS-232P0-9M-400.jpg" class="card-img" alt="Accesorios">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h3 class="card-title text-center"><a class="blue link-orange" href="./b1-accesorios">Periféricos y Accesorios</a></h3>
              <p class="card-text text-justify">Complementos para las PLC B1/B1z, Módulos de expansión, y Módulos de Entrada/Salida.</p>
            </div>
          </div>
          <div class="col-2 m-auto text-center">
            <a class="btn btn-orange" target="_blank" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-plc-fatek-plc-serie-b1-b1z-perifericos-y-accesorios"><i class="fa fa-shopping-cart" style="font-size: 2rem;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Documentación-->
  <section class="container-fluid px-5" id="catalogos">
    <div class="my-5">
      <h2 class="subtitle text-center orange-text py-1 rounded-pill">Catálogos</h2>
    </div>
    <div class="d-flex flex-wrap justify-content-center text-center">
      <div class="m-3">
        <a class="blue link-orange paragraph font-weight-bold" href="https://www.logicbus.com.mx/pdf/catalogos/Catalogo%20B1%20B1z.pdf" target="_blank"><img src="https://www.logicbus.com.mx/pdf/catalogos/Catalogo-B1-B1z.jpg" alt="Ver archivo pdf" class="imgBorde" width="220px"><br> Ver catálogo
        </a>
      </div>
      <div class="m-3">
        <a class="blue link-orange paragraph font-weight-bold" href="https://www.logicbus.com.mx/pdf/catalogos/Lista%20B1-B1z.pdf" target="_blank"><img src="https://www.logicbus.com.mx/pdf/catalogos/Lista-B1-B1z.jpg" alt="Ver archivo pdf" class="imgBorde" width="220px"><br> Ver lista
        </a>
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