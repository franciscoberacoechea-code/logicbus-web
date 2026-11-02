<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Monitoreo y control remoto de temperatura-Web DAQ316  - Logicbus S.A de C.V.</title>
<meta name="description" content="Los registradores de temperatura son los instrumentos utilizado para registrar fuentes de temperatura, humedad y señales de proceso, es un tema que se ha profundizado actualmente, por eso en este artículo se tratara el tema de monitoreo y control  remoto de temperatura a través de dispositivos móviles, bajo un servidor web....."><!-- Descripcion delo tema -->
<meta name="author" content="Logicbus">
  <meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="keywords" content="termopar,monitoreo, control de temperatura, servidor webdaq, control de temperatura, automatizacion, control de temperatura en logistica, refrigeracion">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">


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
    <![endif]color azul#184797-->




<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
			};
</script>
<style>

h1 { 
     font-size: 5em;
    font-weight: normal;
    text-align: center;
    color: #184797;
    font-family: fantasy;
}
h2 { 
 margin-top: 50px;
    font-size: 1.5em;
    font-weight: bold;
     color: black;
     font-family: "Times New Roman", serif;
  } 
   
.arch{
  width: 500px;
  height: 300px;
}
span{
  color:#ED9210;
}
p{
	font-size: 13pt;
text-align: justify;
font-family: small fonts;

	}
</style>
</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>
<div id="main">
 <div class="container-fluid">
 <span><a href="https://www.logicbus.com.mx/seccion-de-articulos" title="Teclados">Artículos/</a></span>
   <div class="row">
    <h1 align="center" style="color:  #FAFAFA; text-shadow: 5px 1px 2px #DF7401, 0 0 25px #0080FF, 0 0 20px #0B0B61;">Monitoreo y control remoto de temperatura-Web DAQ316  </h1><br><br>

<center><img src="https://www.logicbus.com.mx/imagenes/articulo/monitoreo-control-temperatura.png" class="image_productos" width ="90%"alt="Fuentes, importancia en la industria " title="Monitoreo y control remoto de temperatura-Web DAQ316"></center>
        <p style="text-align: right; font-size: 15px" align="right"><b>By: Josefina, Mejia Cruz - 30 de Octubre del 2018</b></p><br>
    
<p align="justify">Dentro de la informática de medición, están los registradores de datos, para procesar gran volumen de datos, en esta categoría están los  registradores de datos de termopar, hasta ahora esos datos podían ser registrados por medio de dispositivos que tienen que ser conectados a una PC. Por ejemplo, el <a href="https://tienda.logicbus.com.mx/USB-501-TC_p_1385.html"> USB-501-TC </a>de venta en Logicbus, tiene un Registrador de datos con entrada para termopar K(-200°C a 1350°C), J ( -200°C a 1190°C) y T( -200°C a 390°C), Registra hasta 32k lecturas, frecuencia de muestreo: 1s hasta 12hrs, protección IP67, batería/software/termopar tipo k (0 a 200°C) incluido, este dispositivo es ideal si solo requieres hacer lecturas de temperatura, guardar estos registros y verlos después a través de una PC, pero si se desea realizar la lectura y al mismo tiempo visualizarlo a través de una pantalla con estos dispositivos sería difícil llevar a cabo esta tarea, a lo cual existen los registradores de datos de termopar, además de estar habilitado para Internet, y acceder desde cualquier dispositivo móvil. Todo este tema se tratara a gran detalle en el desarrollo de este artículo</p><br>
<center><a href="https://tienda.logicbus.com.mx/USB-501-TC_p_1385.html"><img src="https://tienda.logicbus.com.mx/assets/images/USB-501-TC.JPG" width ="40%" alt="Figura 1.tipos de señales" title="Figura 1.tipos de señales"></a></center><p><center><b>Figura 1.Imagen del <a href="https://tienda.logicbus.com.mx/USB-501-TC_p_1385.html">USB-501-TC</a>:, registrador de temperatura con entrada para termopar</b></p></center>

<div align="center"><h2> REGISTRADOR DE DATOS DE TERMOPAR</h2></div><br>
<p align="justify">Los registradores de temperatura son los instrumentos utilizado para registrar fuentes de temperatura, humedad y señales de proceso. Los registradores de temperatura más tradicionales graban datos en papel. El papel se hace pasar bajo una plumilla y esta es desviada en función de la señal. El resultado es un gráfico o tabla de datos. Los registradores de temperatura están disponibles en estilos individuales o multicanal (de una o múltiples plumillas) y en varias configuraciones. Muchos de los registradores de hoy en día también puede grabar la información en formato digital para su descarga a un ordenador. Ahora gracias a la evolución tecnológica se han desarrollado los registradores de datos de termopar habilitado para Internet, como en Logicbus estamos a la vanguardia tecnológica, ya contamos con estos registradores, el WebDAQ 316 este dispositivo es un registrador inteligente, presenta monitoreo y control remotos de tiempo real datos de temperatura.
</p>
<center><a href="https://tienda.logicbus.com.mx/WebDAQ-316_p_14100.html"><img src="https://tienda.logicbus.com.mx/assets/images/WebDAQ_316.jpg" width ="40%" alt="Figura 1.tipos de señales" title="Figura 1.tipos de señales"></a></center><p><center><b>Figura 1. <a href="https://tienda.logicbus.com.mx/WebDAQ-316_p_14100.html">WebDAQ 316</a>:registrador inteligente, presenta monitoreo y control remotos de tiempo real datos de temperatura.</b></p></center>

<div align="center"><h2> WEBDAQ 316 </h2></div><br>
<p align="justify">El WebDAQ 316 es un registrador de temperatura independiente, diseñada para control remoto monitorear y controlar. Toda la inteligencia está incorporada en el WebDAQ, eliminando la necesidad de una PC o software adicional. Mediante el uso de la web incrustada de WebDAQ servidor, los usuarios pueden configurar fácilmente aplicaciones simples o sofisticadas, registrar la temperatura datos, actualizar salidas digitales y / o enviar notificaciones basadas en condiciones de alarma, y ver datos en tiempo real desde cualquier ubicación y cualquier dispositivo con un navegador web.
El WebDAQ 316 proporciona 16 entradas de termopar aisladas y cuatro aisladas, Bits digitales que pueden utilizarse como entradas de disparo o salidas de alarma. Alojado en un trabajo pesado En el chasis, el WebDAQ 316 es lo suficientemente resistente para aplicaciones industriales. Cuenta con software integrado y hardware
El sistema operativo integrado de la serie WebDAQ y servidor web proporciona un paquete todo en uno para el registro de datos independiente y alarmante. <br>
Los usuarios pueden monitorear y controlar sus Aplicaciones desde cualquier lugar con un navegador  web. 
El servidor web de WebDAQ está optimizado para uso tanto de escritorio como móvil. Usuarios puede realizar tareas de adquisición de datos desde Teléfonos, tabletas y portátiles con una sola, Interfaz de usuario intuitiva</p>

<div align="center"><h2> INTERFAZ WEB WEBDAQ</h2></div><br>
<p align="justify">Un servidor web incorporado proporciona un limpio, Interfaz intuitiva para acceder a toda la configuración. y tareas de gestión de datos. Los ajustes de hardware, disparador y alarma son contenido en una sola tarea, o "trabajo" multiple. 
Los "trabajos" se pueden ejecutar en un "calendario" para aplicaciones de registro de datos más complejas. Por ejemplo, los usuarios pueden crear un horario de trabajos en los que un trabajo se ejecuta automáticamente después de una condición de alarma, se dispara en un trabajo diferente, como cuando una temperatura se alcanza o cuando cambia una entrada digital. El funcionamiento independiente del dispositivo le permite monitorear y controlar de forma remota el WebDAQ 316 desde Cualquier dispositivo con navegador web.
</p>

<h2> CARACTERÍSTICAS :</h2>

<li>Alarmas y notificaciones de eventos</li>
<li>Crea múltiples alarmas utilizando fuentes de canales analógicos o digitales.</li>
<li>Configure las alarmas para restablecer y volver a armar cuando la condición desaparezca, o restablézcalos de forma remota con su navegador. Ver el estado de la alarma. en la interfaz web. Recibe notificaciones de eventos y alarmas en una o más direcciones mediante correo electrónico y mensajes SMS.</li>
<li>Almacenamiento virtualmente ilimitado</li>
<li>Almacenar archivos de datos y ajustes de configuración localmente en interno memoria flash, o guardar en un dispositivo de almacenamiento masivo USB o tarjeta SD.</li>
<li>Transfiere fácilmente archivos entre ubicaciones remotas y locales. Ver Espacio disponible para cada ubicación de almacenamiento en cualquier momento.</li>
<li>Visualización de datos en tiempo real</li>
<li>Ver los datos a medida que se adquieren o desde un archivo almacenado. Los usuarios pueden especificar un rango de datos para ver y acercar o alejar. Los datos se trazan en</li>
<li>Trazado gráfico y pantallas escalares. </li>
<li>Control de acceso de lectura y escritura Los usuarios pueden controlar quién puede ver y modificar la configuración del trabajo mediante</li>
<li>Definir una contraseña y establecer el nivel de seguridad.</li>
<li>Ejecutar la programación en el inicio</li>
<li>Ejecutar automáticamente la programación cuando se inicia el sistema.</li>
<li>Los trabajos múltiples en el horario se ejecutan consecutivamente.</li>
<li>Reloj en tiempo real. Un reloj en tiempo real proporciona una referencia de tiempo absoluta para la marca de tiempo datos. El reloj se puede ajustar a cualquier zona horaria, y puede estar sincronizado con el servidor horario de internet.</li>
<li>Entradas de termopar aisladas</li>
<li>El WebDAQ 316 proporciona hasta 16 canales de termopar.</li>
<li>Los <a href="https://tienda.logicbus.com.mx/Termopares_c_1195.html"> termopares</a> tipo <b>J, K, T, E, N, B, R </b>y <b>S</b> son compatibles.</li>
<li>Las entradas de termopar están aisladas del suelo. Sobretensión</li>
<li>La protección se proporciona entre dos entradas cualesquiera.</li>
<li>Soporte CJC y Auto Zero</li>
<li>La compensación de unión fría (CJC) está habilitada para todos los canales.</li>
<li>Los usuarios pueden habilitar un canal de cero automático para compensar el desplazamiento errores</li>
<li>E / S digital aislada</li>
<li>Las cuatro líneas de E / S digitales aisladas pueden usarse como disparadores</li>
<li>Para iniciar o detener la adquisición o como salidas de alarma.</li>



<h2> APLICACIONES </h2>

<p align="justify">Las aplicaciones en la industria de estos registradores de datos de termopar habilitado para Internet, son las siguientes.</p>

<h2>Almacenamiento y Logística</h2>

<p align="justify">Un número de USB data loggers son lo suficientemente pequeños para ser colocado al lado o dentro de los bienes a medida que avanzan a través de un cadena de suministro. Esto proporciona un registro de temperaturas de la producción, a través del almacenamiento, en el transporte y, finalmente, en el usuario final.</p>
<center><img src="https://www.logicbus.com.mx/imagenes/articulo/AUXILIAR-DE-LOGISTICA.jpg" class="image_productos" width ="40%" alt="Aplicacion en la industria de refrigeracion" title="Aplicacion en la industria de refrigeracion"></center>

<h2>Refrigeración</h2>

<p align="justify">Tanto los alimentos y medicinas, son cada vez más importante para los fabricantes, proveedores y usuarios finales que cuenten con pruebas verificables de que las condiciones de almacenamiento han sido correctas desde el momento de la fabricación hasta el tiempo de ser utilizadas. </p>
<center><img src="https://www.logicbus.com.mx/imagenes/articulo/webdaq-industria.jpeg" class="image_productos" width ="40%" alt="Aplicacion en la industria de refrigeracion" title="Aplicacion en la industria de refrigeracion"></center><p><center><b>Aplicacion en la industria de refrigeracion</b></p></center>


<h2>Ambiente de trabajo</h2>

<p align="justify">Condiciones sub- óptimas en un entorno de trabajo pueden afectar de manera significativa los niveles de productividad. A lo cual es de gran utilidad llevar el monitoreo y registro de temperatura.</p>

<h2>Museos y Preservación</h2>

<p align="justify"> La exposición a temperaturas extremas como la humedad puede causar deterioro en textiles, lienzo y madera, para apoyar la preservación de objetos expuestos WebDAQ 316 proporcionan un registro de estos factores ambientales en un período de tiempo, lo que ayuda a identificar problemas potenciales antes de que ocurra el daño. Además de acceder a estos datos desde un dispositivo móvil, en cualquier momento. </p>

<h2>Procesos industriales</h2>

<p align="justify"> Salida de sensores industriales, una tensión analógica, bucle 4 -20mA o contacto sin tensión para proporcionar información sobre un proceso en particular. Tensión del Lascar , corriente, 4- 20mA y registradores de eventos / cuenta / estatales, se puede utilizar para grabar la salida durante un período de tiempo para asegurar se ha producido un funcionamiento correcto.</p>

<div align="center"><h2>CONCLUSION</h2></div><br>

<p>Gracias al dispositivo WebDAQ 316 permite una monitorización precisa y en tiempo real. Además de acceder a los datos e lectura desde cualquier dispositivo móvil. Por otra parte su sistema de alarma es esencial para poder tomar acciones en el momento exacto, como en el caso de la conservación de piezas invaluables de museos que requieren de cierto nivel de temperatura. Por citar un ejemplo, mostrando las grandes ventajas que provee este dispositivo.</p>


<a href="https://www.logicbus.com.mx/pdf/articulos/Monitoreo-control- temperatura-Web DAQ316.pdf" target="_blank" title="Monitoreo y control remoto de temperatura-Web DAQ316" alt="Monitoreo y control remoto de temperatura-Web DAQ316" ><p style="text-align: left;">URL -Leer Artículo completo aquí</a><BR><BR>

 </div>
 </div>
<center><span><br><br><br>No olvides compartirlo en tus redes sociales</span></center>
</div>

<?
 abajo();
?>
</body>
</html>