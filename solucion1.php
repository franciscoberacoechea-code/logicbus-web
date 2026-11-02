<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><title>Soluciones tecnologicas</title>
<meta name="description" content="Aqui encontraras una serie de articulos, informacion y archivos sobre soluciones tecnologicas que utilizan productos que ofrecemos aqui en Logicbus.">

<meta name="author" content="Logicbus">
<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="keywords" content="Controladores, Inteligentes, PLC, LBAF-1320MR-E, Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="images/favicon.ico">

<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="libreria/estilos.css" rel="stylesheet" >
<script src="libreria/ie-emulation-modes-warning.js"></script>


<script language="javascript">

function menu_actual(){
document.getElementById("Inicio").className = "dropdown active";
      };
</script>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
?>

<style type="text/css">
h1{
  color: #000000;
  text-align: center;
  font-size: x-large;
  font-weight: bold;
}
h2{
  font-size: medium;
  color: #000000;
  font-weight: bold;
}
p{
  text-align: justify;
  font-size: 16px;
}

</style>

<div class="container">
<h1>Medición de temperatura infrarroja en extrusión de aluminio</h1>


<center><img src="imagenes/soluciones/Solucion1/portada.png" width="50%"></center><br>

<div align="right">
<a href="https://tienda.logicbus.com.mx/CALEX_bymfg_13-0-1.html" title="Ir a Tienda" target="_blank"><img src="http://tienda.logicbus.com.mx/assets/images/buy.gif" border=0></a>
</div>

<p><a href="calex">Calex</a> ha logrado buenos resultados en la medición de la temperatura de extrusión perfiles de aluminio con un fabricante líder, utilizando pirómetros de bajo costo.</p>
<img src="imagenes/soluciones/Solucion1/grafica1.png" width="23%" align="right"><br>
<h2>Perfil de temperatura al cierre de la salida</h2>

<p>El modelo FM2.2-751-MT-CRT-10M de FibreMini se montó encima de la salida de la prensa de extrusión. El cabezal de detección de fibra óptica no contiene componentes electrónicos y resiste temperaturas ambiente de 200 ° C sin necesidad de refrigeración. La mira láser incorporada muestra la posición y el tamaño exactos del área de medición, para una fácil verificación visual de que el sensor está apuntado correctamente.<br><br><br>
<br><img src="imagenes/soluciones/Solucion1/FibreMini.png" width="23%" align="right"><br>
El cable de fibra óptica de 10 metros proporciona una gran longitud para que el módulo de visualización sea montado en un lugar seguro y accesible. La purga de aire se usa para ayudar a mantener limpia la lente del pirómetro.<br>
El FibreMini permite mediciones de baja temperatura hasta 250 ° C (482 ° F), y su óptica precisa de 75:1 permite medir perfiles estrechos.<br>
Una salida de 4-20 mA está disponible desde el módulo de interfaz para la conexión en un sitio para la instrumentación.
</p>

<br><br><br><br>
<h2>Temperatura de perfil de salida de enfriamiento</h2>
<img src="imagenes/soluciones/Solucion1/Pyrocube.png" width="23%" align="left"><br>
<p>El modelo PCU-MA3.5-10M-1V de PyroCube se utilizó junto con el terminal de pantalla táctil PM030. Es capaz de medir hasta 100 ° C o 50 ° C con estabilidad reducida.
<br><br><br>
El sensor se puede colocar hasta 400 mm desde el perfil, con el tamaño de punto de medición más pequeño posible de 3,5 mm logrado cuando el sensor se monta a una distancia de 200 mm. La vista LED incorporada muestra la ubicación y el tamaño del punto medido.<br><br><br>
<img src="imagenes/soluciones/Solucion1/grafica2.png" width="23%" align="left"><br>
Hay una gran cantidad de vapor a la salida de la caja de enfriamiento de agua, y se descubrió que el PyroCube produce mediciones consistentes y confiables incluso en esta situación. El cable de 10 metros del sensor se conectó a un módulo de visualización y configuración PM030, proporcionando salidas analógicas y de relay.</p>
<br><br><br><br><br><br>
<p>En ambas ubicaciones se utilizó una configuración de emisividad de 0.15. Debido a que el acabado superficial del perfil y la temperatura fueron consistentes, se descubrió que los sensores <a href="calex">Calex</a> de bajo costo y longitud de onda corta proporcionaban un buen rendimiento, incluso con la cantidad de vapor presente en la salida de enfriamiento rápido.</p>
<center><img src="imagenes/soluciones/Solucion1/grafica3.png"></center>
<p><img src="imagenes/soluciones/Solucion1/other.png" width="23%" align="right"><br>
Otras aplicaciones en extrusión de aluminio Un PyroMini de uso general se utiliza para verificar la temperatura del troquel a medida que se carga en la prensa de extrusión. La superficie exterior de la matriz generalmente no es reflectante, y por lo tanto tiene una emisividad lo suficientemente alta, lo que permite mediciones fáciles y confiables entre -20 y 1000 ° C.</p>
</div>
<br><br>
<?
 abajo();
?>
</body>
</html>
