<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
?>


<html>
<head>
<title> Adquirir una forma de onda analógica con MCC DA- Logicbus S.A de C.V.</title>
<meta name="description" content="Al hablar de los sistemas de adquisición de datos, estamos refiriéndonos a los productos o procesos que se usan para recoger información para documentar y analizar un fenómeno. Por ejemplo desde la tarea más sencilla, en el cual un técnico realiza el registro de la temperatura de un horno en un papel, está ejecutando la adquisición de datos...."><!-- Descripcion delo tema -->

<meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, USA, Adquisicion de datos, informacion, datos, desarrolla de Adquisicion de datos, DASYLab, LABVIEW, dispositivos DAQ, hardware DAQ ">


<meta name="copyright" content="Logicbus S.A. de C.V.">
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

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>



<div id="main">
 <div class="container" style="text-align: justify;">
   <span><a href="seccion-de-articulos" title="Osciloscopios">Artículos/</a></span>
   <h1 align="center" style="color:  #FAFAFA; text-shadow: 5px 1px 2px #DF7401, 0 0 25px #0080FF, 0 0 20px #0B0B61;">Adquirir una forma de onda analógica con MCC DA</h1><br><br>

   <center><img src="imagenes/articulo/adquisicion-ondas.png" class="image_productos" width ="60%"alt="Fuentes, importancia en la industria " title="Fuentes, importancia en la industria "></center>
   <p style="text-align: right; font-size: 15px" align="right"><b>By: Josefina Mejia Cruz- 30 Noviembre del 2018</b></p><br>
   
   <p align="justify">Al hablar de los sistemas de adquisición de datos, estamos refiriéndonos a los productos o procesos que se usan para recoger información para documentar y analizar un fenómeno. Por ejemplo desde la tarea más sencilla, en el cual un técnico realiza el registro de la temperatura de un horno en un papel, está ejecutando la adquisición de datos.<br>
    Hasta actividades más complejas y con herramientas tecnológicas que hacen posible llevar a cabo estas actividades de manera más versátil y fiable a través del equipo va de graficadores sencillos a sistemas de cómputo sofisticados.
  </p><br>

  <div align="center"><h2>DESTINATARIOS</h2></div>
  <p align="justify">Los desarrolladores de sistemas de adquisición de datos que necesitan digitalizar una forma de onda analógica a lo largo del tiempo y buscan comprender la implementación de la captura de formas de onda en diversos entornos de software.<br>
    <center><img src="imagenes/articulo/desarrolladores-adquisicion-datos.gif" class="image_productos" width ="35%" alt="Figura 1.  Adquirir una forma de onda analógica con MCC DA" title="Figura 1.  Adquirir una forma de onda analógica con MCC DA"></center>
    <p><center><b>Figura 1.  Adquirir una forma de onda analógica con MCC DA</b></p></center>
    <p>Para los fenómenos analógicos que cambian muy lentamente, puede ser suficiente con muestrear la señal con poca frecuencia, y a menudo es aceptable que el tiempo delta entre las muestras varíe, ya que la necesidad principal es obtener el estado actual de la señal. En tales casos, un simple "sondeo de software" de cada canal de AI puede ser suficiente. Sin embargo, si la señal cambia rápidamente con respecto al tiempo transcurrido, o si un componente de frecuencia de la señal es de interés para el usuario, se requiere un muestreo A / D mucho más rápido. De hecho, no solo se requiere un muestreo más rápido, sino que es importante tener un delta de tiempo uniforme y bien controlado entre las muestras.</p>

    <p>Los dispositivos DAQ AI de MCC incorporan circuitos de temporización a bordo para controlar de manera uniforme las lecturas de uno o más canales de AI. Los dispositivos MCC DAQ también incorporan memoria integrada para hacer cola de datos para enviar periódicamente paquetes de tamaño eficiente a través del bus de interfaz (generalmente USB). El controlador de software de MCC trabaja junto con el hardware DAQ, que recibe los paquetes de datos, los agrupa en un búfer más grande en la memoria y hace que los datos y el estado estén disponibles para el programa de usuario de nivel superior.</p>

    <p>Un desarrollador de aplicaciones querrá ampliar el proyecto desde la perspectiva de la duración del muestreo de AI y las necesidades de acceso a los datos. En otras palabras, ¿cuánto tiempo necesito muestrear y necesito acceso a los datos durante la recopilación o no hasta el final? El caso más sencillo es recopilar datos para una duración relativamente corta y no procesar ningún dato hasta que se hayan recopilado. Al extender la idea, es posible que deba comenzar a procesar los datos durante la recopilación, por ejemplo, para proporcionar una visualización en vivo al operador. En este caso, el desarrollador desea acceder al búfer de datos mientras aún se agregan nuevos datos, lo que MCC facilita con su modo de Fondo. El escenario más complejo es un tiempo de recopilación muy largo, por lo que es necesario un búfer circular debido a la memoria finita de la computadora. Con nuevos datos constantemente entrando, la aplicación debe ser capaz de realizar las matemáticas, la visualización y, tal vez, los resultados deseados en el disco, lo suficientemente eficiente como para mantenerse al día. Si bien no es el enfoque de este artículo, el controlador de software de MCC admite esta necesidad avanzada con su modo Continuo.</p>

    <p>Para un escaneo no continuo, independiente de la plataforma de software, se debe especificar la siguiente información:</p>

    <ul>
      <li>Números de canal AI</li>
      <li>Número de muestras a recoger.</li>
      <li>Velocidad de reloj</li>
      <li>Rango de entrada</li>
      <li>El búfer de memoria para almacenar los datos.</li>
    </ul>
    <p>Además de los datos A / D, se devuelve un código de error.</p>
    <p>Los siguientes ejemplos muestran cómo realizar un escaneo no continuo utilizando la Biblioteca Universal ™, UL para Android ™, NI LabVIEW ™, DASYLab® y DAQami.</p>


    <div align="center"><h2>LIBRERÍAS </h2></div><br>

    <p align="justify"> El siguiente ejemplo muestra cómo realizar un escaneo no continuo utilizando la Biblioteca Universal (UL) y Visual Basic:
      LowChan = 0 <br>
      HighChan = 0 'Recolecte solo del canal 0 <br>
      Recuento = 50000' Especifique el número total de muestras a recolectar<br> 
      Velocidad = 50000 'Especifique la frecuencia de reloj por canal <br>
      Rango = MccDaq.Range.Bip10Volts' Especifique la entrada de +/- 10V range <br>
      ULStat = DaqBoard.AInScan (LowChan, HighChan, Count, Rate, Range, MemHandle, Opciones)
      Los datos de muestra se devuelven a un búfer en la memoria de la PC en el identificador provisto, mientras que el código de error se devuelve como el valor de ULStat.<br>
      A continuación, copiamos los datos del búfer de memoria a una matriz de programa local, llamada ADData:<br>
      ULStat = MccDaq.MccService.WinBufToArray (MemHandle, ADData, FirstPoint, Count)<br>
      Hasta ahora, los datos se han transferido y almacenado en el formato de conteos por razones de eficiencia. Podemos convertir a voltaje con la siguiente función UL:<br>
    ULStat = DaqBoard.ToEngUnits (Range, ADData (0), EngUnits)</p>

    <h2>UL PARA ANDROID</h2>
    <p align="justify">El siguiente ejemplo muestra cómo realizar un escaneo no continuo usando UL para Android y Java:
      lowChan = 0;<br> 
      highChan = 0; <br>
      Recopilar solo del modo canal 0 = ChannelMode.SINGLE_ENDED;<br>
      Especificar rango de modo de configuración = Range.BIP10VOLTS; <br>
      Especifique el rango de entrada de ± 10V, samplesPerChan = 50000;<br>
      Especifique el número de muestras por canal = 50000; <br>
      Especifique la frecuencia de reloj por canal <br>
      mUnit = AiUnit.VOLTS; // Especifique las unidades de voltaje <br>
      actualScanRate = mAiDevice.aInScan (lowChan, highChan, mode, range, samplesPerChan, rate, options, mUnit, mScanData);<br>
    Recopile los valores llamando a la función aInScan (). Los datos se devuelven en la matriz denominada mScanData.</p>

    <h2>LABVIEW</h2><br>
    <p align="justify">El siguiente ejemplo muestra cómo realizar un escaneo no continuo usando LabVIEW. El siguiente diagrama de cableado muestra los VIs y configuraciones pertinentes. Aquí se solicita al primer canal (AiO) del dispositivo de hardware # 0 que devuelva 50000 muestras, a una velocidad de 50000 Hz, dentro del rango esperado de -10 V a +10 V. Los datos de voltaje resultantes están disponibles como el Conjunto de medidas.</p>
    <center><img src="imagenes/articulo/Adquisicion-ondas-macc.jpg" class="image_productos" width ="85%" alt="Figura 2.  Adquirir una forma de onda analógica con MCC DA" title="Figura 2.  Adquirir una forma de onda analógica con MCC DA"></center><p><center><b>Figura 2.  Adquirir una forma de onda analógica con MCC DA</b></p></center>

    <h2>VI. DASYLAB</h2><br>
    <p align="justify">Los no programadores pueden considerar el uso de uno de varios paquetes que facilitan la recopilación, visualización y almacenamiento de datos de forma de onda. Un paquete popular es DASYLab.
    La siguiente hoja de trabajo de ejemplo muestra un módulo de entrada analógica con su salida conectada a un módulo de visualización de carta Y / t. La forma de onda del voltaje capturado se muestra en la pantalla del gráfico.</p>
    <center><img src="imagenes/articulo/diagrama-adquisicon-ondas.jpg" class="image_productos" width ="25%" alt="Figura 3.  Adquirir una forma de onda analógica con MCC DA" title="Figura 3.  Adquirir una forma de onda analógica con MCC DA"></center><p><center><b>Figura 3.  Adquirir una forma de onda analógica con MCC DA</b></p></center>


    <a href="pdf/articulos/Adquirir-onda-analógica.pdf" target="_blank" title="Adquirir una forma de onda analógica con MCC DA" alt="Adquirir una forma de onda analógica con MCC DA" ><p style="text-align: left;">URL -Leer Artículo completo aquí</a><BR><BR>

     
    </div>
    <center><span><br><br><br>No olvides compartirlo en tus redes sociales</span></center>
  </div>

<?
 abajo();
?>
</body>
</html>