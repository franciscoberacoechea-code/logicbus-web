<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modulos de E/S Analogas para PLC serie B1/B1z - Logicbus S.A de C.V</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="PLC, FBs-10MCU, FBs-32MCU, FBs-TC6, FBs-CM25E, Familia B1, Familia B1z, controlador, controladores, Modulos, Expancion, comunicacion, E/S, Modulos de Entradas, Salidas, Analogas, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
  <meta name="description" content="PLC Familia B1 / B1z - Modulos de Entradas y Salidas Analogas">
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
            <li class="breadcrumb-item"><a href="./b1-b1z" class="blue link-orange">PLC Familia B1 / B1z</a></li>
            <li class="breadcrumb-item active" aria-current="page">Módulos de Entradas y Salidas Análogas</li>
          </ol>
        </nav>

        <h1 class="title blue text-center">Módulos de Entradas y Salidas Análogas</h1>

        <h2 class="paragraph text-justify font-weight-bold">Fácil de utilizar, con juego de instrucciones comunes</h2>
        <p class="paragraph text-justify">Los PLC de la serie B1/B1z proporcionan instrucciones fáciles de usar pero potentes. Tanto los PLC de la serie B1/B1z y FBs se programan por el mismo software - "Winproladder".</p>

        <h2 class="paragraph text-justify font-weight-bold">Alta calidad y alta fiabilidad</h2>
        <p class="paragraph text-justify">Con el diseño del hardware optimizado y la alta tecnología de componentes SoC integrados, el número de componentes requeridos en los PLC de la serie B1/B1z se reduce significativamente, además combinando la alta calidad de sus componentes yl os rigurosos procedimientos de control de calidad, Logicbus crea un PLC de la más alta calidad para la industria de hoy.</p>

        <h2 class="paragraph text-justify font-weight-bold">Compacto y robusto</h2>
        <p class="paragraph text-justify">Los componentes comunes están ahora integrados en el integrado principal, por lo que el procesador y la etapa de E / S ahora se pueden fabricar en una sola PCB reducir sustancialmente el tamaño total y el aumento de la fiabilidad de los controladores de la serie B1/B1z.</p>

        <h2 class="paragraph text-justify font-weight-bold">Precio competitivo</h2>
        <p class="paragraph text-justify">El diseño optimizado de la tecnología SoC reduce significativamente los costos de hardware, además los PLC de la serie B1/B1z incorporan el proceso del fabricación más sofisticada y un diseño de PCB de dos capas de alta calidad. Esto hace que los PLC B1/B1z tengan un precio muy competitivo en el mercado de PLCs.</p>
      </div>
    </div>
  </section>

  <!--TABLAS-->
  <section class="container-fluid px-5">
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td rowspan="2" class="section-blue white font-weight-bold align-middle">Modelos</td>
            <td class="section-blue white font-weight-bold">B1-L2DA</td>
            <td class="section-blue white font-weight-bold">B1-L4AD</td>
            <td class="section-blue white font-weight-bold">B1-L2A2D</td>
            <td class="section-blue white font-weight-bold">B1-L4NTC</td>
          </tr>
          <tr>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_l2da_t.jpg" width="120px" alt="B1-L2DA" title="B1-L2DA"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_l4ad_t.jpg" width="120px" alt="B1-L4AD" title="B1-L4AD"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_l2a2d_t.jpg" width="120px" alt="B1-L2A2D" title="B1-L2A2D"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_l4ntc_t.jpg" width="120px" alt="B1-L4NTC"></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Ir a Tienda Virtual</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-L2DA" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-L4AD" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-L2A2D" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-L4NTC" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Características</td>
            <td>2 canales de salidas analogas de 12 bits (0~10V o 0~20mA)</td>
            <td>4 canales de entradas analogas de 12 bits (0~10V o 0~20mA)</td>
            <td>2 canales de entradas analogas y 2 canales de salidas analogas 12 bits (0~10V o 0~20mA)</td>
            <td>4 canales de entradas de sensor de temperatura de 12 bits (0~10V o 0~20mA)</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Mecanismo de cableado</td>
            <td colspan="4">Bloque Europeo de terminales a tornillo de 5.00 mm</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Dimensión</td>
            <td colspan="4">Figura 11 (Estandar), Figura 12 (Slim)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!--DIAGRAMAS-->
  <section class="container mt-5">
    <div class="d-flex justify-content-center flex-wrap">
      <img src="https://www.logicbus.com.mx/imagenes/29/B1/Esquemas/Figura%2011-12.jpg" width="80%" alt="Figura 11 y 12">
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