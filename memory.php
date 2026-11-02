<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Logicbus te invita a jugar memorama - Logicbus S.A de C.V</title>
<meta name="description" content="Logicbus presenta su area de juegos y te invita a jugar memorama, diviertete y aprende">

<meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oModulo RS-232 (Modbus RTU) con 32 entradas opticamente aisladas (5-30 Vdc). Alimentacion: 9-30Vdc, montaje en riel DIN, compatible con Windows y Linux. Entradas y salidas expandibles hasta 246acute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="https://www.logicbus.com.mx/favicon.ico">

<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="libreria/estilos.css" rel="stylesheet" >
       <link href="libreria/memory.css" rel="stylesheet" >
      <script src="libreria/ie-emulation-modes-warning.js"></script>
       <script language="javascript">
         function menu_actual(){
         document.getElementById("productos").className = "dropdown active";
              };
      </script>

<?
?>
      <script src="https:////cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
  pageLanguage: 'es',
  includedLanguages: "es,fr,en,pt",
  layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script>
</head>
<body onLoad="menu_actual();">
  <?
         arriba();
         lado1("no","");
         ?>
 <div id="main">
 <center>
 <h1>Juega Memorama</h1>
 </center>
 <br/>
<div class="wrap">
  <div class="game"></div>
  <div class="modal-overlay">
    <div class="modal">
      <h2 class="winner">¡Ganaste!</h2>
      <button class="restart">Quiero jugar de nuevo</button>
      <p class="share-text">Reta a tus amigos</p>
      <ul class="social">
        <li><a target="_blank" class="twitter" href="http://twitter.com/share?url=https://www.logicbus.com.mx/memory.php"><span class="brandico-twitter-bird"></span></a></li>
        <li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=https://www.logicbus.com.mx/memory.php"><span class="brandico-facebook"></span></a></li>
        <li><a target="_blank" class="google" href="https://plus.google.com/share?url=https://www.logicbus.com.mx/memory.php"><span class="brandico-googleplus-rect"></span></a></li>
      </ul>
      </div>
  </div>
    <footermemory>
    <p class="disclaimer"></p>
  </footermemory>
</div><!-- End Wrap -->
 
      <script src="libreria/memory.js"></script>
 </div>


<?
 abajo();
?>
</body>
</html>
