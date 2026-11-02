<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <title>Encoders - Mide la posición del eje del motor - Logicbus S.A de C.V</title>
  <meta name="description" content="Un encoder convierte el movimiento en una señal eléctrica, la cual puede ser leída por equipos de adquisición de datos o directamente por un PLC.">

  <meta name="author" content="Logicbus">
  <meta name="copyleft" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="Convertidores, protocolo, Serial, Asíncrono, Sincrono, Comunicacion, Repetidores, Hub, USB, Ethernet, Fibra Optica, tarjetas, CAN, DeviceNET, WAN, RS-232, RS-422, RS-485, RS-530, FR-Net, Baud Rate, Chip, UART, al�mbrico, inal�mbrico, PCI, bajo perfil, PCMCIA, ISA, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
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
  <div>
    <div class="gridContArriba">
      <div class="griditemContA">
        <?php
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb pl-0">
            <li class="breadcrumb-item"><a href="seccion-informativa" class="blue link-orange">Artículos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Encoders</li>
          </ol>
        </nav>
        <div class="griditemContA">
          <h1 class="title blue">Encoders</h1>
          <div align="center">
            <a href="https://tienda.logicbus.com.mx/sensores-y-transductores-sensores-encoders"><img src="https://www.logicbus.com.mx/imagenes/224/banner-ENCODERS.png" width="80%" alt="Clic para ir a la Tienda" title="Clic para ir a la Tienda"></a>
          </div><br>
          <p class="paragraph text-justify">Todo lazo de control requiere de una retroalimentación, y el control de movimiento no es la excepción. Para medir la posición del eje del motor, requerimos de los encoders.</p><br>
          <p class="paragraph text-justify">Un encoder convierte el movimiento en una señal eléctrica, la cual puede ser leída por equipos de adquisición de datos o directamente por un PLC.</p>

          <div align="center">
            <a href="https://www.logicbus.com.mx/imagenes/224/ENCODERS-TRITRONICS.png"><img src="https://www.logicbus.com.mx/imagenes/224/ENCODERS-TRITRONICS.png" width="40%" alt="Encoders Tri-tronics" class="img-responsivo"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container paragraph text-justify">
      <p>Los Encoders utilizan diferentes tipos de tecnologías para convertir el movimiento en una señal eléctrica, estos pueden ser mecánicos, magnéticos, resistivo u ópticos, siendo estos últimos los más comunes.<br><br> En este tipo de encoders, utilizan un haz emitida por un LED que pasa a través de un disco de código, antes de ser detectada por un fotodiodo, con esto el encoder puede "contar" los grados y saber, el numero de vueltas, la velocidad o la posición. </p>

      <div align="center" class="my-3">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder04.png" width="40%" alt="partes de un encoder" border="5" class="img-responsivo">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder03.png" width="25%" alt="rueda de un Encoder en funcionamiento" border="5" class="img-responsivo">
      </div>

      <p>Para saber el sentido de el giro, los encoders utilizan una segunda línea ranurada desfasada 90°, dependiendo del sentido de giro, primero se activa el canal A o el canal B como se puede observar en las siguientes imágenes. Algunos modelos utilizan también una tercer línea con una sola abertura, la cual indica cuando se completa una vuelta, a esta salida se llama index o Z.</p>

      <div align="center">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder05.png" width="40%" alt="Diagrama de codificacion de una rueda de Encoder explicada" class="img-responsivo">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder06.png" width="40%" alt="Diagrama que explica el sentido de giro de un Encoder" class="img-responsivo">
      </div>

      <h2 class="subtitle blue text-center my-5">¿Cuál es la diferencia entre los Encoders Absoluto y los Encoders Incrementales?</h2>

      <p>Los encoders pueden producir señales ya sea incrementales o absolutas. Las señales incrementales no indican la posición específica, sólo que la posición ha cambiado. Los Encoders absolutos, por otra parte, utilizan una "palabra" diferente para cada posición, lo que significa que un encoder absoluto proporciona tanto una señal que indica que la posición ha cambiado y una señal de la posición absoluta del encoder.</p>

      <div align="center">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder07.jpg" width="50%" alt="encoder incremental" class="img-responsivo">
        <img src="https://www.logicbus.com.mx/imagenes/224/encoder08.jpg" width="45%" alt="precision de un encoder" class="img-responsivo">
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