<?php
require("admin/config.php");
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Logicbus/ Productos/ PLC serie B1/B1z / Accesorios</title>
  <link rel="alternate" href="https://www.logicbus.com.mx/" hreflang="es" />
  <meta name="description" content="PLC Familia B1 / B1z - Accesorios. Modelo FBs-232P0-9F-150, FBs-232P0-9M-400,
  FBs-USBP0-180, FBs-PACK. Cables de comunicación, Memoria de expansión, PWMDA, Tarjeta RFID, FP-08: Programador personal. Panel de acceso de datos.">
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="PLC, FBs-10MCU, FBs-32MCU, FBs-TC6, FBs-CM25E, Familia B1, Familia B1z, controlador, controladores, Modulos, Expancion, comunicacion, E/S, digitales, Accesorios, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
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
            <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
          </ol>
        </nav>

        <h1 class="title blue text-center">Accesorios</h1>

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

  <!--PRODUCTOS-->
  <section class="container-fluid px-5">
    <div class="container" id="productos">
      <div class="my-5">
        <h2 class="subtitle text-center orange-text py-1 rounded-pill">Productos</h2>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td class="section-blue white font-weight-bold align-middle">Cables de comunicación</td>
            <td bgcolor="white"><img src="https://www.logicbus.com.mx/imagenes/29/Cable_4.jpg" alt="FBs-232P0-9F-150" title="FBs-232P0-9F-150" width="120px"></td>
            <td bgcolor="white"><img src="https://www.logicbus.com.mx/imagenes/29/Cable_3.jpg" alt="FBs-232P0-9M-400" title="FBs-232P0-9M-400" width="120px"></td>
            <td bgcolor="white"><img src="https://www.logicbus.com.mx/imagenes/29/Cable_2.jpg" alt="FBs-USBP0-180" title="FBs-USBP0-180" width="120px"></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Modelo</td>
            <td class="align-middle font-weight-bold">FBs-232P0-9F-<br>150</td>
            <td class="align-middle font-weight-bold">FBs-232P0-9M-400</td>
            <td class="align-middle font-weight-bold">FBs-USBP0-180</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Características</td>
            <td>Cable de comunicación para PLC serie FBs para puerto 0 (RS232) de 9-pines D-sub conector hembra, longitud 150cm</td>
            <td>Cable de comunicación para PLC serie FBs para puerto 0 (RS232) de 9-pines D-sub conector macho, longitud 400 cm</td>
            <td>Cable de comunicación para FBs, puerto principal 0 (USB) (cable comercial USB A ↔ B ), longitud de 180cm</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-232P0-9F-150" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-232P0-9M-400" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-USBP0-180" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td class="section-blue white font-weight-bold align-middle">Memoria de expansión</td>
            <td bgcolor="white"><a href="https://www.logicbus.com.mx/FBS-PACK"><img src="https://www.logicbus.com.mx/imagenes/29/tablas_fatek_a.JPG" alt="FBs-PACK" title="FBs-PACK" width="120px"></a>
            </td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Modelo</td>
            <td><a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/FBS-PACK">FBs-PACK</a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Memoria</td>
            <td>1M bits FLASH ROM</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Capacidad de memoria</td>
            <td>48 botones 20K palablas( programa) + 20K palabras (datos)</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Protección de escritura</td>
            <td>Proteccion con DIP Switch</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</span></td>
            <td class="align-middle text-center"><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-PACK" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td class="section-blue white font-weight-bold align-middle">PWMDA</td>
            <td><a href="https://www.logicbus.com.mx/PWMDA"><img src="https://www.logicbus.com.mx/imagenes/29/tablas_fatek_b.JPG" alt="PWMDA" title="PWMDA" width="120px"></a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Modelo</td>
            <td><a class="blue font-weight-bold link-orange" href="https://www.logicbus.com.mx/PWMDA">PWMDA</a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Rango de salida</td>
            <td>DC 0~10V</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Valor de salida</td>
            <td>0~1000</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Resoluciónescritura</td>
            <td>10mV(10V/1000)</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Salida de impedancia</td>
            <td>1KΩ</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Carga minima (≥10V)</td>
            <td>5.2KΩ</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Tiempo de conversión D / A</td>
            <td>&lt;50mS</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=PWMDA" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td class="section-blue white font-weight-bold align-middle">Tarjeta RFID</td>
            <td bgcolor="white">
              <img src="https://www.logicbus.com.mx/imagenes/29/tablas_fatek_c.JPG" alt="CARD-H" title="CARD-H" width="120px">
            </td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Modelo</td>
            <td>CARD-H</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">DAP Aplicable</td>
            <td>FBs-DAP-BR/CR</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Frecuencia de operación</td>
            <td>0~100013.56MHz</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Memoria</td>
            <td>de 64-bits con verfificacion redundante ciclica (CRC) en datos</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Temperatura de trabajo</td>
            <td>-25ºC ~ 50ºC (ISO7810)</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Fuente de energia</td>
            <td>Por RF</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Distancia de recepción</td>
            <td>10cm-15cm</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Regrabable</td>
            <td>al menos 10000 veces</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Dimensión (mm)</td>
            <td>86 X 54 X 0.76</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Peso</td>
            <td>5g</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=CARD-H" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td class="section-blue white font-weight-bold align-middle">FP-08: Programador personal</td>
            <td bgcolor="white"><a href="https://www.logicbus.com.mx/FP-08"><img src="https://www.logicbus.com.mx/imagenes/29/tablas_fatek_22.JPG" alt="FP-08" title="FP-08" width="120px"></a>
            </td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Modelo</td>
            <td><a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/FP-08">FP-08</a></td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Consumo de energía</td>
            <td>5V/100mA</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Teclado</td>
            <td>48 botones</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Pantalla</td>
            <td>matriz de puntos 5x7 LCD de 16-caracteres x 2, con luz de fondo</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Puerto de comunicación</td>
            <td>Puerto serial de comunicación RS232</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Dimensión</td>
            <td>188 x 90 x 32</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FP-08" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <tbody>
          <tr>
            <td colspan="2" class="section-blue white font-weight-bold align-middle">Panel de acceso de datos</td>
            <td bgcolor="white">
              <a href="https://www.logicbus.com.mx/FBS-DAP-B"><img src="https://www.logicbus.com.mx/imagenes/29/DAP.jpg" alt="FBs-DAP-B(R)" title="FBs-DAP-B(R)" width="120px"></a>
            </td>
            <td bgcolor="white">
              <a href="https://www.logicbus.com.mx/FBS-DAP-B"><img src="https://www.logicbus.com.mx/imagenes/29/DAP.jpg" alt="FBs-DAP-C(R)" title="FBs-DAP-C(R)" width="120px"></a>
            </td>
            <td bgcolor="white">
              <img src="https://www.logicbus.com.mx/imagenes/29/B1/thumbs/FBS-PEP_t.jpg" alt="FBs-PEP/PEPR" title="FBs-PEP/PEPR" width="120px">
            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Modelos</td>
            <td><a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/FBS-DAP-B">FBs-DAP-B(R)</a></td>
            <td><a class="blue link-orange font-weight-bold" href="https://www.logicbus.com.mx/FBS-DAP-B">FBs-DAP-C(R)</a></td>
            <td class="font-weight-bold">FBs-PEP/PEPR</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Número de variable de entrada</td>
            <td colspan="2">Matriz de puntos 5x7 LCD de 16-caracteres x 2, con luz de fondo</td>
            <td>Pantalla LCDOLE de 126x96 pixeles</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Teclado</td>
            <td colspan="2">20 botones</td>
            <td>8 botones</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Consumo de energía</td>
            <td>24V,41mA (48mA) máx.</td>
            <td>5V,100mA (120mA) máx.</td>
            <td>5V,100mA máx.</td>
          </tr>
          <tr>
            <td rowspan="3" bgcolor="#cccccc" class="font-weight-bold align-middle">Interfaz de comunicación</td>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Eléctrica</td>
            <td>RS485</td>
            <td>RS322</td>
            <td>RS232</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Mecanismo</td>
            <td>Bloque de terminales a tornillo europeo desmontable, 5-pines</td>
            <td>Conector D-sub de 9 pines macho</td>
            <td>Mini Din</td>
          </tr>
          <tr>
            <td bgcolor="#cccccc" class="font-weight-bold align-middle">Número de estaciones por unidad</td>
            <td>Máximo 16 estaciones</td>
            <td>1</td>
            <td>Solo una estacion</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Características generales</td>
            <td colspan="3">Temporizador, contador, registrador, relevador, acceso de contacto en PLC</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Características especiales</td>
            <td colspan="2">Alarma, pantalla de información, el usuario puede definir las teclas de acceso rápido</td>
            <td>Configuración de No.&nbsp; De PLC, control de Encendido / Apagado y configuración</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Características de la tarjeta de acceso</td>
            <td colspan="3">Disponible sólo en modelos -BR/-CR, con distancia máxima de 10 ~ 15 cm.</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Dimensión (mm)</td>
            <td colspan="2">112 x 148 x 39.10</td>
            <td>&nbsp;75.90 x 47.40 x 23.10</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#cccccc" class="font-weight-bold align-middle">Ir a Tienda Virtual</span></td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-DAP-B" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-DAP-C" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
            <td><a class="btn btn-orange" href="https://tienda.logicbus.com.mx/search.asp?keyword=FBs-PEP" target="_blank" rel="noopener noreferrer"><i class="fa fa-shopping-cart" style="font-size: 1.5rem;" aria-hidden="true"></i></a></td>
          </tr>
        </tbody>
      </table>
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