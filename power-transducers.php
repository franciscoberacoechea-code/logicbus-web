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
  <title>Potencia Eléctrica y Transductores de Corriente. Logicbus</title>
  <meta name="description" content="Medición de Variables Eléctricas, Potencia Eléctrica, Transductores de Corriente, Transformadores de Corriente y Dispositivos Auxiliares, Logicbus">

  <meta name="keywords" content="Medición de Variables Eléctricas, Potencia Eléctrica, Transductores de Corriente, Transformadores de Corriente y Dispositivos Auxiliares, Logicbus, Convertidores, protocolo, Serial, Asíncrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, alámbrico, inalámbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">

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
            <li class="breadcrumb-item"><a href="transductores-sensores" class="blue link-orange">Sensores y Transductores</a></li>
            <li class="breadcrumb-item active" aria-current="page">Potencia Eléctrica</li>
          </ol>
        </nav>
        <h1>Potencia Eléctrica</h1>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/Potencia-electrica_c_3026.html" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav><br>
        <div class="gridContTres">

          <div class="griditemContB">
            <div class="cardSimple">
              <div class="card-body contenido">
                <div align="center">
                  <h2 class="titulos"><b>Medición de Variables Eléctricas</b></h2>
                </div>
                <div align="center">
                  <img class="zoom-image img-fluid" src="imagenes/17/CPM-50.jpg" alt="Medición de Variables Eléctricas" title="Medición de Variables Eléctricas">
                </div>
                <div align="center" class="animado">
                  <br><br>
                  <button class="btnVerMas"><a class="aSinLinea" href="power_transducers1" target="_blank"><span>Ver más</span></a></button>
                  <button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/Potencia-electrica_c_3026.html" target="_blank"><span>Ver Productos</span></a></button>
                </div>
              </div>
            </div>
          </div>

          <div class="griditemContB">
            <div class="cardSimple">
              <div class="card-body contenido">
                <div align="center">
                  <h2 class="titulos"><b>Transductores de Corriente</b></h2>
                </div>
                <div align="center">
                  <img class="zoom-image img-fluid" src="imagenes/T201.jpg" alt="Transductores de Corriente" title="Transductores de Corriente">
                </div>
                <div align="center" class="animado">
                  <br>
                  <button class="btnVerMas"><a class="aSinLinea" href="power_transducers2" target="_blank"><span>Ver más</span></a></button>
                  <button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/Potencia-electrica_c_3026.html" target="_blank"><span>Ver Productos</span></a></button>
                </div>
              </div>
            </div>
          </div class="griditemContB">

          <div class="griditemContB">
            <div class="cardSimple">
              <div class="card-body contenido">
                <div align="center">
                  <h2 class="titulos"><b>Transformadores de Corriente y Dispositivos Auxiliares</b></h2>
                </div>
                <div align="center">
                  <img class="zoom-image img-fluid" src="imagenes/MCTZ-03.jpg" alt="Transformadores de Corriente y Dispositivos Auxiliares" title="Transformadores de Corriente y Dispositivos Auxiliares">
                </div>
                <div align="center" class="animado">
                  <br><br><br>
                  <button class="btnVerMas"><a class="aSinLinea" href="power_transducers4" target="_blank"><span>Ver más</span></a></button>
                  <button class="btnVerMas"><a class="aSinLinea" href="https://tienda.logicbus.com.mx/Potencia-electrica_c_3026.html" target="_blank"><span>Ver Productos</span></a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PIE DE PAGINA -->
  <?php require("libreria/footer.view.php"); ?>
  <?php echo $bootstrap_js; ?>
  <?php echo $jquery_js; ?>
  <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>