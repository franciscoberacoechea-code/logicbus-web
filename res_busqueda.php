<!--Desarrollado por: Ricardo I. Ayala Rivera
Correo: riar88@gmail.com
Fecha de subida: 19/10/2014
-->
<? include("libreria/libreria.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="google-site-verification" content="yjv996hVm9NkFf0yBhgIUU6rQW2HanRCFrWPo20ep0o" />
<meta name="verify-v1" 
content="AW1SWwNwIxzMnkwLIzKnN3UUiRIw3t2Vji0tVvmK/Yg=" />
<meta name="verify-v1" content="AW1SWwNwIxzMnkwLIzKnN3UUiRIw3t2Vji0tVvmK/Yg=" />
<meta name="verify-v1" content="9DDafr2KcthX137NzRb1VKUFk2VtnTwjdZyPIjJIgUY=" />
<meta name="author" content="Ricardo Ayala (riar88@gmail.com)">
<meta name="copyright" content="Logicbus S.A. de C.V.">
<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil,  Automatizaci&oacute;n, Automatizacion, Consultor&iacute;a, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de México, Estado de Mexico, Michoacán, Michoacan, Morelos, Nayarit, Nuevo León, Nuevo Leon, Oaxaca, Puebla, Querétaro, Queretaro, Quintana Roo, San Luis Potosí, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatán, Yucatan, Zacatecas">
  <meta name="description" content="Logicbus cuenta con PLCs, tarjetas de adquisici&oacute;n de datos por USB, serial, ethernet, monitoreo v&iacute;a celular GSM, convertidores de protocolos, sensores, transductores, pantallas touchscreen, medici&oacute;n de potencia, control de movimiento, comunicaci&oacute;n inal&aacute;mbrica, graficadores digitales, equipos acad&eacute;micos, osciloscopios, generadores de funciones, fuentes de poder, registradores de datos: temperatura, humedad, voltaje, corriente, presi&oacute;n, pH, vibraci&oacute;n, etc., tarjetas GPIB, PCI, PCI Express, ISA, software SCADA, soporte t&eacute;cnico personalizado, consultar&iacute;a y m&aacute;s.">
<meta name="verify-v1" content="AW1SWwNwIxzMnkwLIzKnN3UUiRIw3t2Vji0tVvmK/Yg=" />
<meta name="google-site-verification" content="_zkfMvMjKQWjTGeOQ_xqTLyhvoNFWhg_xyMKClw1k88" />
<meta name="ROBOTS" content="all">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<title>Logicbus. Tu Sitio De Automatizaci&oacute;n En M&eacute;xico</title>

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
<meta name="verify-v1" content="AW1SWwNwIxzMnkwLIzKnN3UUiRIw3t2Vji0tVvmK/Yg=" />




</head>


<body >
 <!-- Header  -->
<div class="container header">
 <div id="header_logo">
 <a href="index"><img src="images/logo_logicbus_ch.jpg" alt="Logicbus" width="100%" title="Logicbus"  /> </a>
 </div>

 
<div id="header_right" >
<div id="social_icons">
<a href="https://www.logicbus.com.mx/blog/" target="_blank" title="Ia al Blog"><div class="blog_ico roll_over"></div></a>
<a href="https://www.facebook.com/Logicbus-172684612754642/" target="_blank" title="Ir a Facebook"><div class="facebook roll_over"></div></a>
<a href="https://twitter.com/Logicbus" target="_blank" title="Ir a Twitter"><div class="twitter roll_over"></div></a>
<a href="https://www.youtube.com/user/LogicbusVideos" target="_blank" title="Ir a Youtube"><div class="youtube roll_over"></div></a>
<a href="https://www.linkedin.com/company/logicbus" target="_blank" title="Ia a Linkedin"><div class="linkedin roll_over"></div></a>
</div>
<br />
<div align="left" class="headtextrihgt">
<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Guadalajara: (33)-3854-5975 | (33)-3823-4349<br />
<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> México: (55)-8995-3820<br />
<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> USA: (619)-616-7350
<br />
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
  pageLanguage: 'es',
  includedLanguages: "es,fr,en,pt",
  layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</div>
</div>

<div id="header_centro" align="right"><a href="tienda_links"><img src="images/shopping_cart.png" alt="Tienda virtual" title="Tienda virtual" /></a><a href="pdf/Catalogo.pdf" target="_blank"><img src="images/catalogo_header.jpg" alt="Descarga el resumen de Productos" title="Descarga el resumen de Productos" align="center" ></a></div>

</div>
<!-- End Header  -->
    <!-- Static navbar -->
<div class="navbar-wrapper" data-spy="affix" data-offset-top="100" id="nav">

    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li id="index" class="active"><a href="index">Inicio</a></li>
            <li class="dropdown" id="productos">
                  <a href="productos" class="dropdown-toggle" >Productos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu" id="controladores"><a href="#">Categoría 1</a>
                		<ul class="dropdown-menu">
                  		<li id="SSC-8"><a href="#">Subcategoría 1</a></li>
                  		<li id="GTC"><a href="#">Subcategoría 2</a></li>
                		</ul>
              		</li>
                    <li class="dropdown-submenu" id="disp_cont"><a href="#">Categoría 2</a>
                		<ul class="dropdown-menu">
                  		<li id="GPS26"><a href="#">Subcategoría 1</a></li>
						<li id="PRO26"><a href="#">Subcategoría 2</a></li>
						<li id="UTB"><a href="#">Subcategoría 3</a></li>
						<li id="CMU"><a href="#">Subcategoría 4</a></li>
                		</ul>
              		</li>                    
     				
                    <li id="categoría"><a href="#">Categoría 3</a></li>
                    <li id="categoría"><a href="#">Categoría 4</a></li>
                    <li id="categoría"><a href="#">Categoría 5</a></li>                                              
                  </ul>
                </li>
            <li id="compras"><a href="compras">Como comprar</a></li>
            <li id="soporte"><a href="soporte">Soporte Técnico</a></li>
            <li id="dist_int"><a href="dist_int">Integradores</a></li>
            <li id="contacto"><a href="contacto">Contacto</a></li>
            <li id="comp"><a href="comp">Compañia</a></li>
          </ul>
         <div id="buscador">
			<form action="res_busqueda.php" id="frm_buscador" method="post" class="navbar-form navbar-right">
  				<input type="text" name="q" id="q" autocomplete="on" size="15" align="right" class="form-control" />
			</form>
			<!--Funcion que muestra el logo de google custom search y lo pone dentro de la caja de texto del buscador que se identifica con la variable q  -->
			<script type="text/javascript" src="http://www.google.com/cse/brand?form=frm_buscador&lang=es"></script>
			</div>
        </div><!--/.nav-collapse -->

        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>
</div>
<!--Funcion que muestra el logo de google custom search y lo pone dentro de la caja de texto del buscador que se identifica con la variable q  -->
<script type="text/javascript" src="http://www.google.com/cse/brand?form=frm_buscador&lang=es"></script>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
var cadena= "<? echo $_POST['q'] ?>";
  google.load('search', '1', {language : 'es'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('005599859801152295187:ehlewuhhnxa');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
	
    var options = new google.search.DrawOptions();
    options.setSearchFormRoot('cse-search-form');
    options.setAutoComplete(true);
	customSearchControl.draw(document.getElementById("cse"), options);
	
	 customSearchControl.execute(cadena);
	
  }, true);
</script>


<div  class="container contenedor">
<div id="main_index">
<h1>Resultados de busqueda para: "<? echo $_POST['q'] ?>"</h1>
<div id="cse" style="width:100%;"></div>

</div>

<? abajo(); ?><!-- PIE DE PAGINA -->
</body>
</html>
