<?
include("libreria/libreria.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-31533636-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-1007518778');
	</script>
	<title>Logicbus/Compa&ntilde;&iacute;a</title>

	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="validaciones.js"></script>
	<!--- Estilos Necesarios-->
	<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
	<link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
	<link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
	<link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
	<link rel="stylesheet" type="text/css" href="libreria/marcas.css">

	<meta name="revisit after" content="14 days">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
	<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.ico">

	<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="libreria/ie-emulation-modes-warning.js"></script>
	<script language="javascript">

		function menu_actual(){
			document.getElementById("marcas").className = "active";
			document.getElementById("collapseOne").className = "collapse";
			document.getElementById("collapseTwo").className = "show";
			document.getElementById("laumas").className = "list-group-item list-group-item-action active";
		};
	</script>
</head>

<body>
	<?
	arriba();
	?>
	<div>
		<center>
			<h2 class="dividerAzul gradientAzul" style="font-weight: bold;">Ubicaci&oacute;n</h2>
			<img src="images/Contacto/ubi.png" alt="Address" align="center">
		</center>
		<div class="gridContTres">
			<div class="griditemContA" align="center">
				<b><strong>M&eacute;xico</strong></b><br>
				Av. Alcalde #1822<br>
				Col. Miraflores<br>
				C.P. 44270, Guadalajara Jal. México
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.2293075786656!2d-103.34951208466661!3d20.700911004264423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1d0008b3c89%3A0xd51fd441bc00186b!2sLogicbus%20S.A.%20de%20C.V.!5e0!3m2!1ses!2smx!4v1619109203840!5m2!1ses!2smx" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<br><br>
			</div>
			<div class="griditemContA" align="center">
				<b><strong>USA</strong></b><br>
				<b> Oficina</b><br><br>863 Bowsprit Road, Chula Vista, CA 91914 
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.167598797608!2d-116.9611825853391!3d32.65498389750592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d94515b0e1792d%3A0x51fd7d9c38c71319!2s863%20Bowsprit%20Rd%2C%20Chula%20Vista%2C%20CA%2091914%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1619110351657!5m2!1ses!2smx" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>       
				<br><br>
			</div>
			<div class="griditemContA" align="center">
				<b><strong>USA</strong></b><br>
				<b>Almacén</b> <br> 8268 Clairemont Mesa Blvd, Suite 302 <br>
				San Diego, CA. 92111 <br>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.4113869137113!2d-117.14847718533427!3d32.83435768836777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbffbccd8fe2e1%3A0xf7f88e40b517b7dc!2s8268%20Clairemont%20Mesa%20Blvd%20%23302%2C%20San%20Diego%2C%20CA%2092111%2C%20EE.%20UU.!5e0!3m2!1ses!2smx!4v1619283807551!5m2!1ses!2smx" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
	<?
	abajo();
	?>
</body>
</html>
