<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>


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
  <title>Secuencia de medio paso Información de Motores a pasos</title>
  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords"
    content="motores a pasos, teoria, Logicbus, México, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatización, Automatizacion, Seguridad,  Consultoría, Consultoria,  Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
  <meta name="description" content="Secuencia de medio paso - Teoria sobre los motores de pasos">
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

        <h1><strong>Secuencia de medio paso</strong>
        </h1>
        <table width="80%" border="1">
          <tr>
            <td width="9%">
              <div align="center">PASO</div>
            </td>
            <td width="18%">
              <div align="center">BOBINA A</div>
            </td>
            <td width="18%">
              <div align="center">BOBINA B</div>
            </td>
            <td width="19%">
              <div align="center">BOBINA C</div>
            </td>
            <td width="18%">
              <div align="center">BOBINA D</div>
            </td>
            <td width="18%">&nbsp;</td>
          </tr>
          <tr>
            <td>
              <div align="center">1</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td><img src="imagenes/27/sec1A.jpg" width="123" height="129" alt="Diagrama Bobina A encendida"/></td>
          </tr>
          <tr>
            <td>
              <div align="center">2</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td><img src="imagenes/27/sec1AB.jpg" alt="" width="128" height="126" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">3</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td><img src="imagenes/27/sec2B.jpg" alt="" width="121" height="125" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">4</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td><img src="imagenes/27/sec2BC.jpg" alt="" width="127" height="127" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">5</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td><img src="imagenes/27/sec3C.jpg" alt="" width="122" height="124" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">6</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td><img src="imagenes/27/sec3CD.jpg" alt="" width="129" height="126" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">7</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td><img src="imagenes/27/sec4D.jpg" alt="" width="123" height="125" /></td>
          </tr>
          <tr>
            <td>
              <div align="center">8</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">OFF</div>
            </td>
            <td>
              <div align="center">
                <font color="#FF0000"><strong>ON</strong></font>
              </div>
            </td>
            <td><img src="imagenes/27/sec4DA.jpg" alt="" width="131" height="125" /></td>
          </tr>
        </table>
        <h4 align="left"><a href="info_motores_a_pasos">Regresar </a></h4>

      </div>
    </div>
  </div>
  <?
  abajo();
  ?>
</body>

</html>