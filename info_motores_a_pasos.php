<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
 include("libreria/libreria.php");
?>



<html>
<head>
<title>Logicbus/ Productos/ Motores a pasos</title>
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
  <meta name="keywords" content="motores a pasos, teoria, Logicbus, Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Seguridad, Consultoria,  Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mxico, Estado de Mexico, Michoacn, Michoacan, Morelos, Nayarit, Nuevo Len, Nuevo Leon, Oaxaca, Puebla, Quertaro, Queretaro, Quintana Roo, San Luis Potos, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatn, Yucatan, Zacatecas">
  <meta name="description" content="El motor a pasos es un dispositivo electromecánico que convierte una serie de impulsos eléctricos en desplazamientos angulares discretos, lo que significa que es capaz de avanzar una serie de grados (paso) dependiendo de sus entradas de control.">
  <meta name="revisit after" content="14 days">
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
<center>
  <table width="100%" border="0">
    <tr align="center">
      <td width="100%" valign="top"><div align="left"><a href="productos">Productos</a>-&gt;<a href="control_movimiento">Control de Movimiento</a>-&gt;Informacion de Motores a pasos</div></td>
    </tr>
    <tr align="center"><td valign="top"><h1>Motores a pasos</h1></td></tr>
    <tr>
      <td >El motor a pasos es un dispositivo electromecánico que convierte una serie de impulsos eléctricos en desplazamientos angulares discretos, lo que significa que es capaz de avanzar una serie de grados (paso) dependiendo de sus entradas de control. <br>
          <br>
          Estos pueden ser:
        <ul>
          <li>Unipolares</li>
          <li>Bipolares</li>
      </ul></td>
    </tr>
    <tr>
      <td align="center" valign="middle" ><img src="News_Mail/2016/julio/pasos1.jpg" width="220" height="240" alt="Bipolar"><img src="News_Mail/2016/julio/pasos2.jpg" width="233" height="240" alt="Unipolar"></td>
    </tr>
    <tr>
      <td >Su funcionamiento es similar a los motores eléctricos comunes, que solo giran cuando se aplica el voltaje, pero a diferencia de estos cuentan con más de 2 estatores lo que divide una rotación completa (360°) en un gran número de pasos rotacionales. En el siguiente ejemplo tenemos 4 estatores a los que su polaridad varía en secuencia, obteniendo 4 pasos:</td>
    </tr>
    <tr align="center" valign="middle">
      <td ><img src="News_Mail/2016/julio/pasos3.jpg" width="309" height="271" alt="Bipolar"></td>
    </tr>
    <tr>
      <td ><p>Las ventajas de los motores a pasos son:</p>
        <p><br>
          1. El ángulo de rotación es proporcional a los pulsos de entrada.<br>
          2. El motor tiene torque máximo cuando el mismo está enclavado (no girando pero con las bobinas energizadas).<br>
          3. Exactitud en la posición y repetición de movimientos. (error de 3 a 5% del ángulo mínimo)<br>
          4. Excelente respuesta ante arranque, parada y reversa.<br>
          5. El motor responde a pulsos de entrada digitales, lo que permite un control de lazo abierto, haciendo un control más simple y barato.<br>
          6. Es posible lograr una velocidad de rotación muy baja en forma sincrónica con carga acoplada directamente sobre el eje.<br>
          7. Pueden tener un gran rango de velocidades de rotación, dado que la misma es proporcional a la frecuencia de los pulsos de entrada.<br>
          <br>
        Para controlar el motor es necesario utilizar un puente H y enviarle una secuencia lógica. Estos dos circuitos se encuentran por lo general en el driver del controlador, al que solo se le introduce el pulso de paso y dirección</p></td>
    </tr>
    <tr>
      <td align="center" valign="middle" ><img src="News_Mail/2016/julio/pasos4.jpg" width="456" height="276" alt="Bipolar"></td>
    </tr>
    <tr>
      <td ><p>Dependiendo de la secuencia introducida, se pueden tener tres modos de trabajo:<br>
        <br>
        <strong>Secuencia Normal</strong>. Esta es la secuencia más usada y la que generalmente recomienda el fabricante. Con esta secuencia el motor avanza un paso a la vez y debido a que siempre hay al menos dos bobinas activadas, se obtiene un alto torque de paso y retención. (<a href="https://www.logicbus.com.mx/motores_pasos_tabla1">Véase Tabla</a>)</p>
        <p><br>
          <strong>Secuencia Wave Drive</strong>: En esta secuencia se activa solo una bobina a la vez. En algunos motores esto brinda un funcionamiento más suave. La desventaja es que al estar solo una bobina activada, el torque de paso y retención es menor. (<a href="https://www.logicbus.com.mx/motores_pasos_tabla2" target="_blank">Véase Tabla</a>)</p>
        <p><br>
        <strong>Secuencia de medio paso</strong>. Es esta secuencia se activa las bobinas de tal forma que se puede brindar un movimiento igual a la mitad del paso real. Para ello se activan primero 2 bobinas y luego solo una y así sucesivamente. Como vemos en la <a href="https://www.logicbus.com.mx/motores_pasos_tabla3" target="_blank">tabla</a> la secuencia completa consta de 8 movimientos en lugar de 4.</p></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td ><a href="javascript:history.go(-1)">Regresar <--</a></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
  </table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>
