<?php require("admin/config.php");
include("libreria/libreria.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="es">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Logicbus/ Productos/ Sensores, Transductores y Acondicionadores/ Celdas de carga/ S-Beam</title>
  <meta name="description" content="Celdas de carga">
  <meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoc&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuct&aacute;n, Yucatan, Zacatecas, transductores, transductor, transmisor, sensores, celdas, carga, formas, rectangular, miniatura, boton, lrm200, lsb200">
  <?php echo $favicon; ?>
  <?php echo $boostrap_css; ?>
  <?php echo $own_file_css; ?>
  <?php echo $subcategorias; ?>
  <?php echo $menu; ?>
  <?php echo $estilos; ?>
  <?php echo $footer_css; ?>
  <?php echo $google_analytics; ?>
  <?php echo $var_headers; ?>

</head>

<body onLoad="menu_actual();">

  <body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA" id="subir">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
            <li class="breadcrumb-item"><a href="celdas-de-carga" class="blue link-orange">Celdas de carga</a></li>
            <li class="breadcrumb-item active" aria-current="page">S-Beam</li>
          </ol>
        </nav>

        <div id="main">
          <table width="100%" border="0">
            <tr>
              <td colspan="2">
                <h3 align="center">S-Beam</h3>
              </td>
            </tr>

            <tr>
              <td width="25%" align="center"><a href="pdf/36/LRM200.pdf" target="_blank"><img src="imagenes/36/LRM200.jpg" alt="LRM200" width="100" border="0"></a></td>
              <td><strong><a href="pdf/36/LRM200.pdf" target="_blank">LRM200</a></strong>
                <div align="justify"> Celdas de carga modelo LRM200, capacidades desde 1 lb hasta 100 lb (453.6 g hasta 45.35 Kg), salida de 2 mV/V, excitación de 0 ~ 10 V ac/dc </div>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <hr align="center" color="#CCCCCC">
              </td>
            </tr>
            <tr>
              <td width="25%" align="center"><a href="LSB200"><img src="imagenes/36/LSB200.jpg" alt="LSB200" width="100" border="0"></a></td>
              <td><strong><a href="LSB200">LSB200</a></strong>
                <div align="justify"> Celda de carga tipo S-Beam, capacidades desde 1 a 100 libras, salida de 2mV/V y excitación de 1 a 10Vdc </div>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <hr align="center" color="#CCCCCC">
              </td>
            </tr>
            <tr>
              <td>
                <div align="center"><img src="imagenes/36/LSB350.jpg" width="100"></div>
              </td>
              <td><strong><a href="pdf/lsb350.pdf">LSB350</a></strong><br>
                Celda de carga tipo S-Beam, capacidades desde 500 hasta 3000 lb, salida de 2mV/V </td>
            </tr>
            <tr>
              <td colspan="2">
                <hr align="center" color="#CCCCCC">
              </td>
            </tr>
            <tr>
              <td>
                <div align="center"><img src="imagenes/36/lsb400TR.jpg" height="100"></div>
              </td>
              <td><strong><a href="pdf/lsb400.pdf">LSB400</a></strong><br>
                Celda de carga tipo S-Beam, capacidades desde 5000 o 10000 lb, salida de 2mV/V </td>
            </tr>


          </table>
          </center>
        </div>
      </div>
    </div>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $own_file_js; ?>

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
  </body>
  <?php echo $var_footer; ?>

</html>