<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modulos de E/S Digitales para PLC serie B1/B1z - Logicbus S.A de C.V</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="PLC, FBs-10MCU, FBs-32MCU, FBs-TC6, FBs-CM25E, Familia B1, Familia B1z, controlador, controladores, Modulos, Expancion, comunicacion, E/S, digitales, relevador, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
  <meta name="description" content="PLC Familia B1 / B1z - Modulos de Entradas y Salidas Digitales">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
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
            <li class="breadcrumb-item active" aria-current="page">Módulos de Entradas y Salidas Digitales</li>
          </ol>
        </nav>

        <h1 class="title blue text-center">Módulos de Entradas y Salidas Digitales</h1>

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
            <td colspan="3" rowspan="2" class="section-blue white font-weight-bold align-middle">Modelos</td>
            <td class="white section-blue font-weight-bold">B1-8X</td>
            <td class="white section-blue font-weight-bold">B1-8YR</td>
            <td class="white section-blue font-weight-bold">B1-8(T/J)</td>
            <td class="white section-blue font-weight-bold">B1-8XYR</td>
            <td class="white section-blue font-weight-bold">B1-8XY(T/J)</td>
            <td class="white section-blue font-weight-bold">B1-16X</td>
            <td class="white section-blue font-weight-bold">B1-16YR</td>
          </tr>
          <tr>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_8x_t.jpg" alt="B1-10MR" title="B1-10MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_8y_t.jpg" alt="B1-10MT" title="B1-10MT" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_8y_t.jpg" alt="B1-14MR" title="B1-14MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_8xy_t.jpg" alt="B1-14MT" title="B1-14MT" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_8xy_t.jpg" alt="B1-20MR" title="B1-20MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_16x_t.jpg" alt="B1-16X" title="B1-16X" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_16y_t.jpg" alt="B1-16YR" title="B1-16YR" width="120px"></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" colspan="3">Ir a Tienda Virtual</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-8X" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-8YR" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-8YT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-8XYR" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-8XYT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-16X" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-16YR" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Entrada Digital</td>
            <td bgcolor="#cccccc">24VDC</td>
            <td bgcolor="#cccccc">Velocidad Baja</td>
            <td>8 puntos</td>
            <td>-----</td>
            <td>-----</td>
            <td>4 puntos</td>
            <td>4 puntos</td>
            <td>16 puntos</td>
            <td>-----</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" rowspan="2">Salida Digital</td>
            <td bgcolor="#cccccc">Relevador</td>
            <td bgcolor="#cccccc">AC/DC (2A)</td>
            <td>-----</td>
            <td>8 puntos</td>
            <td>-----</td>
            <td>4 puntos</td>
            <td>-----</td>
            <td>-----</td>
            <td>-----</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Transistor (5~30VDC)</td>
            <td bgcolor="#cccccc">Baja Velocidad</td>
            <td>-----</td>
            <td>-----</td>
            <td>8 puntos</td>
            <td>-----</td>
            <td>4 puntos</td>
            <td>-----</td>
            <td>16 puntos</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" colspan="3">Mecanismo de cableado</td>
            <td colspan="7">Bloque Europeo de terminales a tornillo de 5.00 mm</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" colspan="3">Dimensión</td>
            <td colspan="5">Figura 7 (Estandar), Figura 8 (Slim)</td>
            <td colspan="2">Figura 1 (Standar), Figura 2 (Slim)</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td colspan="3" rowspan="2" class="section-blue white font-weight-bold align-middle">Modelos</td>
            <td class="section-blue white font-weight-bold">B1-16Y(T/J)</td>
            <td class="section-blue white font-weight-bold">B1-16XYR</td>
            <td class="section-blue white font-weight-bold">B1-16XT(T/J)</td>
            <td class="section-blue white font-weight-bold">B1-24XYR</td>
            <td class="section-blue white font-weight-bold">B1-24XY(T/J)</td>
            <td class="section-blue white font-weight-bold">B1-40XYR</td>
            <td class="section-blue white font-weight-bold">B1-40XY(T/J)</td>
          </tr>
          <tr>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_16y_t.jpg" alt="B1-10MR" title="B1-10MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_16xy_t.jpg" alt="B1-10MT" title="B1-10MT" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_16x_t.jpg" alt="B1-14MR" title="B1-14MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_24xy_t.jpg" alt="B1-14MT" title="B1-14MT" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_24xy_t.jpg" alt="B1-20MR" title="B1-20MR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_40xy_t.jpg" alt="B1-40XYR" title="B1-40XYR" width="120px"></td>
            <td><img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/b1_40xy_t.jpg" alt="B1-40XY(T/J)" title="B1-40XY(T/J)" width="120px"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#cccccc">Ir a Tienda Virtual</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-16YT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-16XYR" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-16XYT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/B1-24XYR_p_8340.html" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-24XYT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-40XYR" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=B1-40XYT" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Entrada Digital</td>
            <td bgcolor="#cccccc">24VDC</td>
            <td bgcolor="#cccccc">Velocidad Baja</td>
            <td>-----</td>
            <td>8 puntos</td>
            <td>8 puntos</td>
            <td>14 puntos</td>
            <td>14 puntos</td>
            <td>24 puntos</td>
            <td>24 puntos</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" rowspan="2">Salida Digital</td>
            <td bgcolor="#cccccc">Relevador</td>
            <td bgcolor="#cccccc">AC/DC (2A) </td>
            <td>-----</td>
            <td>8 puntos</td>
            <td>-----</td>
            <td>10 puntos</td>
            <td>-----</td>
            <td>16 puntos</td>
            <td>-----</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc">Transistor (5~30VDC)</td>
            <td bgcolor="#cccccc">Baja Velocidad</td>
            <td>16 puntos</td>
            <td>-----</td>
            <td>8 puntos</td>
            <td>-----</td>
            <td>10 puntos</td>
            <td>-----</td>
            <td>16 puntos</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" colspan="3">Mecanismo de cableado</td>
            <td colspan="7">Bloque Europeo de terminales a tornillo de 5.00 mm</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" colspan="3">Dimensión</td>
            <td colspan="3">Figura 1 (Estandar), Figura 2 (Slim)</td>
            <td colspan="2">Figura 3 (Standar), Figura 4 (Slim)</td>
            <td colspan="2">Figura 5 (Standar), Figura 6 (Slim)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!--DIAGRAMAS-->
  <section class="container mt-5">
    <div class="d-flex justify-content-center flex-wrap">
      <img src="https://www.logicbus.com.mx/imagenes/29/B1/Esquemas/Figura 1-2.jpg" width="80%" alt="Figura 1 y 2">
      <img src="https://www.logicbus.com.mx/imagenes/29/B1/Esquemas/Figura 3-4.jpg" width="80%" alt="Figura 3 y 4">
      <img src="https://www.logicbus.com.mx/imagenes/29/B1/Esquemas/Figura 5-6.jpg" width="80%" alt="Imagen 5 y 6">
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