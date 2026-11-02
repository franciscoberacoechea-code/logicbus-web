<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
?>


<html>
<head>

  <title>Logicbus/ Productos/ PLC/ PLC serie FBs/ PWMDA</title>

  <meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="PWMDA Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizaci&oacute;n, 
  Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila,
  Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, 
  Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, 
  Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas, PWM, Ancho de Pulso, modulaci�n, PLC, FBS">
  <meta name="description" content="PWMDA">
  <meta name="revisit after" content="14 days">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
  <meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- Bootstrap core CSS -->
  <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--- Estilos Necesarios-->
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
  <link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
  <link rel="stylesheet" type="text/css" href="libreria/marcas.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-hexa.css">
  <link rel="stylesheet" type="text/css" href="libreria/menu-acordeon.css">
  <script language="javascript">

    function menu_actual(){
      document.getElementById("productos").className = "dropdown active";
    };
  </script>

</head>
<body>

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
      <div class="griditemContA" id="subir">
        <a href="productos">Productos</a>-&gt;<a href="embedded_controllers">PLC</a>-&gt;<a href="serie_fbs">Serie FBs</a>-&gt;<a href="tablas_plc_fbs_accesorios#accesorios">Accesorios</a>-&gt;PWMDA<br>
        <center>
          <h1>PWMDA</h1>

          <img src="imagenes/29/tablas_fatek_b.JPG" alt="FP-08" width="250" border="0" align="texttop"><br>
        </center>
        <p align="justify">&Eacute;ste es un dispositivo que permite modular el ancho de pulso y puede transformar los diferentes anchos de las se&ntilde;ales digitales al voltaje anal&oacute;gico de salida correspondiente (0&#65374;10V).<br>
        </p>
        <nav class="navMenuSuper">
          <ul>
            <li>
              <a href="https://tienda.logicbus.com.mx/PWMDA_p_3466.html" target="_blank">Ver en Tienda</a>
            </li>
          </ul>
        </nav>
        <div align="center">
          <a href="pdf/catalogos/FBs_PLC_Catalog_en.pdf" target="_blank"><img src="imagenes/iconpdf.jpg" border="0" width="30"><br>
          Ver Catalogo Completo en PDF</a> 
        </div>
      </div>
    </div>
  </div>

  <?
  abajo();
  ?>
</body>
</html>

