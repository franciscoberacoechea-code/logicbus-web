<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-31533636-1');
  </script>

  <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-1007518778');
  </script>
  <title>OctVolt - Registrador de Voltaje de bajo nivel de 8 canales</title>
  <meta name="description" content="Logicbus/Productos/Data Logger/Voltage/Autónomo/ OctVolt">
  <meta name="keywords"
    content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad, Capacitaci&oacute;n, Capacitacion, Transporte, Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoc&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yuct&aacute;n, Yucatan, Zacatecas, Process110, Registrador, Recorder, Voltage, Vlotaje, bajo nivel, low level, 8 canales, 8 channels">
  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="language" content="Spanish">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link href="libreria/diagramas.css" rel="stylesheet">
  <!--- Estilos Necesarios-->
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
  <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
  <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
  <!-- -->
  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="libreria/ie-emulation-modes-warning.js"></script>
  <script language="javascript">

    function menu_actual() {
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

  <style>
    * a {
      cursor: pointer;
    }


  </style>
</head>

<body onLoad="menu_actual();">
  <?
  arriba();
  ?>

  <div id="main">
    <div class="gridContArriba">
      <div class="griditemContA">
        <?
        menucategorias();
        ?>
      </div>
      <div class="griditemContA">
        <table width="100%" border="0">
          <tr>
            <td width="842"><a href="productos">Productos</a>-&gt; <a href="datalogger">Registradores</a>-&gt;
              <a href="voltage_logger">Voltaje</a>-&gt; <a href="voltage_autonomos">Aut&oacute;nomos</a>-&gt;
              OctVolt
            </td>
          </tr>
          <tr>
            <td align="center">
              <h2>OctVolt</h2>
            </td>
          </tr>
          <tr>
            <td align="center"><img src="imagenes/09/Voltaje-Corriente/octvolt.gif" width="139" height="100" border="0"
                alt="OctVolt - 8 Channel Low Level Voltage Recorder"></td>
          </tr>
          <tr>
            <td align="center">
              <div align="center"><strong>Registrador de nivel de voltaje con 8 Chanales</strong></div>
            </td>
          </tr>
          <tr>
            <td align="center">
              <div align="right"><a href="#" title="Ir a Tienda"><img src="images/shopping_cart.png" border=0
                    onClick="atienda2('OCTVOLT')"></a></div>
            </td>
          </tr>
          <tr align="justify">
            <td>Capacidad de hasta 32,767 registros de voltaje DC con fecha y hora en que se realiza el registro. Acepta
              se&ntilde;ales de voltaje de sensores, transductores y de muchos otros dispositivos de voltaje. Ofrece
              programaci&oacute;n de unidades de Ingenier&iacute;a y calculo de offset/ganancia para que as&iacute; la
              entrada de voltaje pueda ser escalada adecuadamente a la medici&oacute;n que se esta realizando. Por
              ejemplo, un sensor de flujo con salida de voltaje puede ser mostrado como medici&oacute;n de flujo en
              grafica y datos dentro del software. Est&aacute;n disponibles cuatro rangos de voltaje. (El modelo de
              &plusmn;100mV puede ser utilizado con entrada diferencial). Ocho canales con entrada a terminal de
              tornillo. </td>
          </tr>
        </table>

        <div align="center">

          <table class="table table-striped table-bordered table-hover table-sm tabla_especificaciones_producto">
            <thead>
              <tr>
                <td colspan="2" align="center">
                  <strong>Especificaciones T&eacute;cnicas</strong>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Rango</div>
                </td>
                <td>
                  <div align="left">&plusmn;100mVDC<br>
                    0 a 2.5VDC<br>
                    0 a 15VDC<br>
                    0 a 30VDC</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Resoluci&oacute;n</div>
                </td>
                <td>
                  <div align="left">5&mu;VDC<br>
                    0.1mVDC<br>
                    0.5mVDC<br>
                    1.0mVDC</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Precisi&oacute;n</div>
                </td>
                <td>
                  <div align="left">&plusmn;0.01%FSR @ 25&deg;C<br>
                    &plusmn;0.01%FSR @ 25&deg;C<br>
                    &plusmn;0.10%FSR @ 25&deg;C<br>
                    &plusmn;0.10%FSR @ 25&deg;C</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Memoria</div>
                </td>
                <td>
                  <div align="left">32,767 registros </div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Dimensiones</div>
                </td>
                <td>
                  <div align="left">3.5&rdquo; x 4.4&rdquo; x 1.5&rdquo; (89mm x 112mm x 39mm)</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Certificado NIST</div>
                </td>
                <td>
                  <div align="left">No</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Inicio retardado</div>
                </td>
                <td>
                  <div align="left">0 a 180 d&iacute;as </div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Alarma</div>
                </td>
                <td>
                  <div align="left">No</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Resistente al agua</div>
                </td>
                <td>
                  <div align="left">No</div>
                </td>
              </tr>
              <tr>
                <td class="titulo_espec_lat">
                  <div align="left">Caracter&iacute;sticas</div>
                </td>
                <td>
                  <div align="left">Unidades de de ingenier&iacute;a programables, calibraci&oacute;n por software,
                    reutilizable, tama&ntilde;o compacto , agujeros para montaje </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>


        <p align="center"><strong>Accesorios</strong></p>
        <div align="center">
          <a href="accesorios#IFC200"><img src="imagenes/09/Accesorios/ifc200.jpg"
              alt="IFC200 - USB Interface Cable & Software Package" width="200">
            <br>IFC-200</a>
        </div>

        <p align="center"><strong>Software</strong></p>
        <div align="center">
          <img src="imagenes/09/Voltaje-Corriente/sw_octvolt.jpg" alt="Software OctVolt" width="80%">
          <br>

        </div>
        </center>
      </div>

    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>