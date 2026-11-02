
<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sensores de Temperatura Resistiva RTD - Tipos y Funcionamiento</title>

<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="modulo, RTD, RTDS, RTDs, temperatura, rango, alto, alta, elevada, sensor, sensores de temperatura, tipos de sensores de temperatura, funcionamiento de sensores de temperatura">
  <meta name="description" content="Logicbus tiene a la venta Sensores de temperatura RTD, te mostramos cuales son los tipos de sensores de temperatura que existen y cual es su funcionamiento, adquiere ahora mismo un sensor de temperatura en nuestra tienda online.">
  <meta name="revisit after" content="14 days">
 <link rel="shortcut icon" href="images/favicon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  <style type="text/css">
<!--
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo2 {color: #FFFFFF}
-->
p{
  text-align: justify;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="libreria/estilos.css" rel="stylesheet" >
    
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="libreria/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
			};
</script>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">
 <div class="container-fluid">
<div class="row">
      <p><a href="seccion-informativa">Ir a  Secci&oacute;n informativa</a></p>
    
      <center><img src="imagenes/30/RTD.jpg" class="img-responsive img-thumbnail" alt="rtd"></center>
      <h1 align="center">Sensores de Temperatura RTD</h1>
    
     <div align="right"><a href="https://tienda.logicbus.com.mx/RTD_c_1196.html" title="Ir a Tienda" target="_blank"><img src="images/shopping_cart.png" class="img-responsive" alt="buy"></a></div>
  
    <p>Los <strong>term&oacute;metros de resistencia </strong> o <strong>term&oacute;metros a resistencia </strong> son transductores  de temperatura, los cuales se basan en la dependencia de la resistencia el&eacute;ctrica  de un material con la temperatura, es decir, son capaces de transformar una variaci&oacute;n de temperatura en una variaci&oacute;n de resistencia el&eacute;ctrica. </p>
    <p>Los <strong>RTD </strong> son sensores  de temperatura resistivos. En ellos se aprovecha el efecto que tiene la temperatura en la conducci&oacute;n de los electrones  para que, ante un aumento de temperatura, haya un aumento de la resistencia el&eacute;ctrica  que presentan.</p>
    <p>Este efecto suele aproximarse a un sistema de primer o segundo orden para facilitar los c&aacute;lculos. Los sensores RTD suelen ir asociados a montajes el&eacute;ctricos tipo Puente de Wheatstone, que responden a la variaci&oacute;n de la resistencia el&eacute;ctrica por efecto de la temperatura para originar una se&ntilde;al anal&oacute;gica de 4-20 mA que es la que se utiliza en el sistema de control correspondiente como se&ntilde;al de medida.</p>
    <p>Un tipo de RTD son las <strong>Pt100 </strong> o <strong>Pt1000</strong>. Estos sensores deben su nombre al hecho de estar fabricados de platino  (Pt) y presentar una resistencia de 100ohms o 1000ohms respectivamente a 0&ordm;C. Son dispositivos muy lineales en un gran rango de temperaturas.</p>
    
    <p>El platino tiene la particularidad de tener una relaci&oacute;n resistencia-temperatura sumamente lineal, por lo cual es el material m&aacute;s utilizado y generalmente se le denominan a estos term&oacute;metros IPRT ( <em>Industrial Platinum Resistance Thermometer </em>) o RTD ( <em>Resistance Temperature Detector </em>). El platino tiene las ventajas de:</p> 
      <ul>
          <li>Ser qu&iacute;micamente inerte
          <li>Tiene un elevado punto de fusi&oacute;n (2041,4 K)
          <li>Como ya hemos dicho, tiene una alta linealidad
          <li>Puede ser obtenido con un alto grado de pureza. </li>
      </ul>
    <strong>Aplicaciones: </strong>
      <ul>
        <li> Inyecci&oacute;n de pl&aacute;stico</li>
        <li> Procesos alimenticios</li>
        <li> Procesos industriales</li>
        <li> Equipo de empaque </li>
      </ul>
      <h3>Medición de temperatura y control PID</h3>
    <p>El <a href="PLC-Serie-FBs" title="Productos PLC">PLC FBs</a> proporciona módulos de temperatura de termopar (J, K, R, S, E, T, B, N) así como un módulo de temperatura RTD (para Pt-100 y Pt-1000). Los <a href="termopares" title="">termopares</a> son adecuados para la medición de grandes rangos de temperatura, como un proceso de caldera. Los RTD son buenos para la medición de baja temperatura, gamas más pequeñas de temperatura y una resolución más alta tal como aplicaciones de refrigeración y de aire acondicionado. Debido a las características del control de temperatura, multiplexeo en el escaneo de entradas de temperatura y el <a href="lb-tb-pid" title="Control PID">control PID</a> de múltiples lazos hacen que un solo PLC FBs sea capaz de realizar hasta 32 lazos de control de temperatura PID. Con la instrucción conveniente de la medición de temperatura y control de temperatura PID en el desarrollo del programa en escalera reduce significativamente la dificultad, el costo, el tiempo de desarrollo y pruebas de monitoreo de programas de control.</p>
    <center><img src="imagenes/control-pid.jpg" alt="Control PID" class="img-responsive img-thumbnail" alt="control pdi"></center>
   <center> <img src="https://tienda.logicbus.com.mx/assets/images/30/LB-30107-213-55-1p-45XB-200cm-X.png" class="img-responsive" alt="LB 30107">
   <br><p><strong>Preguntas y Respuestas Frecuentes (FAQ): <a href="pdf/30/FAQ_RTDs_Termopares.pdf" target="_blank">RTDs y Termopares</a></strong></p>
        <table class="table-hover table-bordered">
        <tr bgcolor="#666666">
          <td colspan="2" valign="top"><div align="center"><strong><font color="#FFFFFF">RTD </font></strong></div></td>
         </tr> 
          <tr>
            <td>Tipo</td>
            <td>Pt100</td>
          </tr>
          <tr>
            <td>Rango de temperatura</td>
            <td>0&deg;C ~ 1250 &deg;C</td>
          </tr>
          <tr>
            <td>Material del RTD</td>
            <td>Platino</td>
          </tr>
          <tr>
            <td>Precisi&oacute;n</td>
            <td>0.01 &deg;C</td>
          </tr>
          <tr>
            <td>Di&aacute;metro del tubing </td>
            <td>3/16</td>
          </tr>
          <tr>
            <td>Longitud del tubing</td>
            <td>1.5</td>
          </tr>
          <tr>
            <td>Material del tubing</td>
            <td>Acero inoxidable</td>
          </tr>
          <tr>
            <td>Tipo de uni&oacute;n</td>
            <td>Aislado </td>
          </tr>
          <tr>
            <td>Resistencia sonda a 0&deg;C </td>
            <td> 100 &Omega;</td>
          </tr>
          <tr bgcolor="#666666">
            <td><strong><font color="#FFFFFF">Aislante </font></strong></td>
          </tr>
          <tr>
            <td>Material de la extensi&oacute;n</td>
            <td>Tefl&oacute;n</td>
          </tr>
          <tr>
            <td>Rango de temperatura </td>
            <td>-190&deg;C ~ 260&deg;C </td>
          </tr>
          <tr>
            <td>Longitud de la extensi&oacute;n</td>
            <td>2 m</td>
          </tr>
          <tr>
            <td>N&uacute;mero de hilos</td>
            <td>3 hilos</td>
          </tr>
          <tr>
            <td>Resistencia a la abrasi&oacute;n</td>
            <td>Muy buena</td>
          </tr>
          <tr>
            <td>Resistencia a la humedad</td>
            <td>Excelente</td>
          </tr>
          <tr>
            <td>Resistencia a la producci&oacute;n del petr&oacute;leo</td>
            <td>Excelente</td>
          </tr>
          <tr bgcolor="#666666">
            <td><strong><font color="#FFFFFF">C&oacute;digo de orden </font></strong></td>
          </tr>
          <tr>
            <td>RTD con 2 metros de aislante</td>
            <td>LB-30102-423-21-1PLG1/2-1-B2m-1</td>
          </tr>
        </table>
        </center>
      <h2 align="center">Ejemplo de esquema de conexi&oacute;n </h2>
    <div align="center"><a href="imagenes/Esquema_Monitoreo_Control_Temperatura.html" target="_blank"><img src="imagenes/Esquema_Monitoreo_control_temperatura_ch.jpg" alt="Esquema solución" class="img-responsive img-thumbnail"></a></div>
 </div> <!--Row -->
</div>
</div>

<?
 abajo();
?>
</body>
</html>
