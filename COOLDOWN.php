<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LogicBus/Productos/Data Logger/Temperature</title>
 <meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, enfriamiento, temperatura, registrador, cooldown, normas de la FDA, alimentos, procesados, alimentos procesados">


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
  <table width="100%"  border="0">
  <tr><td colspan="2"><a href="productos">Productos</a>-&gt;<a href="datalogger">Registradores</a>-&gt;<a href="temperature_logger">Registradores de Temperatura</a>-&gt;COOL DOWN</td></tr>
    <tr>
      <td colspan="2" align="center"><h2>COOL DOWN</h2></td>
    </tr>
	<tr>
      <td width="37%" align="center"><img src="imagenes/08/COOLDOWN.jpg" width="150" border="0" alt="REGISTRADOR COOLDOWN"></td>
      <td width="63%" align="center"><div align="justify">
  <p>El registrador de temperatura COOL DOWN fue desarrollado para ayudar a cumplir con las regulaciones fijadas por la FDA (Administraci&oacute;n Federal de Alimentos y Drogas de Estados Unidos) con respecto al proceso de enfriamiento de los alimentos procesados. La FDA especifica que una vez que los alimentos han sido enfriados a temperaturas debajo de +60&deg;C, estos deben ser enfriados a temperaturas menores a +5&deg;C antes de 6 horas.</p>
  </div></td>
	</tr>
	<tr>
	  <td colspan="2" align="center"><div align="right"><a href="#"><img title="Ir a tienda" src="images/shopping_cart.png" border=0 onClick="atienda()"></a></div> </td>
    </tr>
	<tr>
      <td colspan="2" align="center"><div align="justify">
        <p>El registrador COOL DOWN utiliza un sensor externo para monitorear el proceso de enfriamiento. El registrador es activado cuando la temperatura disminuye por debajo de +60&deg;C, registrando la hora y fecha de este evento.</p>
        <p>
            El proceso de enfriamiento es monitoreado tomando tres lecturas de temperatura: La primera lectura se realiza despu&eacute;s de 2 horas cuando el alimento debe haberse enfriado a una temperatura menor a +21&deg;C, la segunda lectura se realiza despu&eacute;s de 4 horas y la tercera despu&eacute;s de 6 horas (cuando la temperatura debe estar por debajo de +5&deg;C). Al final de este proceso, el registrador muestra PASS o FAIL dependiendo si los l&iacute;mites de temperatura fueron respetados durante el tiempo especificado, por lo que no es necesario (aunque es posible) bajar los datos a la PC, lo cual hace de este registrador un dispositivo muy &uacute;til en &aacute;reas donde no se tiene f&aacute;cil acceso a una PC.</p>
      </div></td>
    </tr>
    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center">
        <table width="499" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" colspan="2" bgcolor="#666666"><div align="center" class="Estilo1">Especificaciones T&eacute;cnicas </div></td>
          </tr>
          <tr>
            <td height="18" colspan="2" bgcolor="#666666"><div align="left"><span class="Estilo1">Sensor</span></div></td>
            </tr>
          <tr>
            <td width="161" height="18" bgcolor="#999999">
                <div align="left">Rango de medici&oacute;n</div></td>
            <td width="332" bgcolor="#999999"><div align="left">-20&deg;C a +100&deg;C</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">
              <p>Precisi&oacute;n </p>
            </div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">&plusmn;0.6&deg;C</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#999999"><div align="left">Resoluci&oacute;n Promedio</div></td>
            <td height="18" bgcolor="#999999"><div align="left">0.6&deg;C</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Longitud del Cable</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">1m, punta de acero inoxidable 80mm.</div></td>
          </tr>
          <tr>
            <td height="18" colspan="2" bgcolor="#666666"><div align="left" class="Estilo1">
              <div align="left">Registrador</div>
            </div></td>
            </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Temperatura en Operaci&oacute;n</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">-20&deg;C a +70&deg;C</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Tama&ntilde;o</div></td>
            <td height="18"><div align="left">80mm X 57mm X 22mm sin incluir el cable y el sensor</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Peso</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">70 gramos</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Carcasa</div></td>
            <td height="18"><div align="left">Pl&aacute;stico ABS</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Pantalla</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">LCD de 6 d&iacute;gitos, muestra el estatus y las medidas tomadas</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Respuesta</div></td>
            <td height="18"><div align="left">T90, 4 minutos en aire en movimiento, 35 segundos en l&iacute;quido o en contacto directo con un s&oacute;lido (dependiendo de la profundidad a la que se inserta la punta de prueba)</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Hora y Fecha</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Reloj en tiempo real, precisi&oacute;n &plusmn;1 minuto por mes, ajuste autom&aacute;tico de a&ntilde;o bisiesto y horario de verano</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Certificado de Calibraci&oacute;n</div></td>
            <td height="18"><div align="left">El sensor de temperatura puede ser entregado con calibraci&oacute;n respecto a la norma ISO 9002</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Inicializaci&oacute;n del Registrador</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Despu&eacute;s de presionar el bot&oacute;n de inicio, el registrador iniciar&aacute; el programa una vez que la temperatura disminuya de +60&deg;C.</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Frecuencia de Muestreo</div></td>
            <td height="18"><div align="left">El registrador tomar&aacute; lecturas con intervalos de 2 horas durante 6 horas</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Software</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Programa de interfaz simple para ajustar la hora, formato de hora y las unidades de temperatura</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Re-programaci&oacute;n</div></td>
            <td height="18"><div align="left">Presionar bot&oacute;n de encendido para borrar y resetear el registrador despu&eacute;s de una sesi&oacute;n o presionar por 12 seg. durante una sesi&oacute;n</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Programaci&oacute;n</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">V&iacute;a PC a trav&eacute;s de una interfaz RS232 con conector DB9 o a trav&eacute;s del convertidor <a href="COOLDOWN.php#USB232">LBUSB16232</a> (recomendado)</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Alimentaci&oacute;n</div></td>
            <td height="18"><div align="left">Bater&iacute;a de 3V de litio, reemplazable por el usuario</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Vida t&iacute;pica de a Bater&iacute;a</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">14 meses, indicador de bater&iacute;a baja</div></td>
          </tr>
          <tr bgcolor="#999999">
            <td height="18"><div align="left">Certificaci&oacute;n IP</div></td>
            <td height="18"><div align="left">IP51</div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#CCCCCC"><div align="left">Garant&iacute;a</div></td>
            <td height="18" bgcolor="#CCCCCC"><div align="left">24 meses, no aplica para la bater&iacute;a</div></td>
          </tr>
        </table>
      </div><br><center>
      </center></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><strong>Funciones:</strong></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="left">Despu&eacute;s de programar el registrador por software la pantalla muestra:</div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><img src="imagenes/08/COOL DOWN_1.jpg" width="150" border="0" alt=""></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="left">Despu&eacute;s de pulsar el bot&oacute;n de inicio, se muestra la temperatura</div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><img src="imagenes/08/COOL DOWN_2.jpg" width="150" border="0" alt=""></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="left">Si despu&eacute;s de 3 horas la temperatura no desciende de los +60&deg;C, el registrador muestra FAIL</div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><img src="imagenes/08/COOL DOWN_3.jpg" width="150" border="0" alt=""></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="justify">De lo contrario, una vez que la temperatura desciende de los +60&deg;C, se registra la temperatura, fecha y hora de este suceso y se muestran estos datos en la pantalla de forma alternada, mostrando cada dato por 4 segundos.<br>
      Después de 2 horas del registro inicial, la temperatura se registra nuevamente y la pantalla mostrar&aacute;:<br>
	  <ul>
	  <li>Fecha de inicio</li>
	  <li>Hora de inicio</li>
	  <li>Temperatura inicial</li>
	  <li>Temperatura de la lectura 2</li>
	  <li>Pass 2 o Fail (si en la lectura 2 la temperatura es mayor a los 21°C)</li>
	  </ul>
	  </div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><img src="imagenes/08/COOL DOWN_4.jpg" width="150" border="0" alt=""></div></td>
    </tr>
    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="left">Despu&eacute;s de 4 horas de la primera lectura, se registra nuevamente la temperatura y la pantalla mostrar&aacute;:<br>
          <ul>
            <li>Fecha de inicio</li>
            <li>Hora de inicio</li>
            <li>Temperatura inicial</li>
            <li>Segunda lectura de temperatura</li>
            <li>Tercera lectura de temperatura</li>
            <li>Pass 3 o Fail</li>
          </ul>
      </div></td>
    </tr>
    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="justify">Despu&eacute;s de 6 horas de la lectura inicial, se toma una lectura final. Si la temperatura es superior a los 5&deg;C, la pantalla mostrar&aacute; FAIL para ese proceso y mantiene este mensaje hasta que el registrador es reseteado. Si todas las lecturas estuvieron dentro de los par&aacute;metros adecuados, la pantalla mostrar&aacute; PASS.</div></td>
    </tr>
    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><strong>ACCESORIOS</strong></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><a href="lbusb16232" name="USB232"><img src="imagenes/08/MI-IN-D-2-L_01.jpg" width="200" border="0" alt="LBUSB16232 "></a></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><strong><a href="lbusb16232">LBUSB16232 </a></strong></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center">Interfaz USB a RS-232</div></td>
    </tr>
    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><a href="imagenes/08/Cool%20down%20screen%20shot.jpg" target="_blank"><img src="imagenes/08/Cool down screen shot.jpg" width="250" border="0" alt="clic para apliar: SOFTWARE"></a></div></td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><strong>SOFTWARE</strong></div></td>
    </tr>

    <tr align="right">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr align="right">
      <td colspan="2"><div align="center"><a href="pdf/08/COOLDOWN.pdf" target="_blank"><img src="imagenes/iconpdf.jpg" width="30" height="30" border="0" alt="Ver archivo pdf"> <br>
  Ver archivo pdf </a></div></td>
    </tr>
    <tr align="right">
</table>
 </center>
</div>

<?
 abajo();
?>
</body>
</html>

