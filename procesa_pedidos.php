<?
session_start();
 include("libreria/libreria.php");

/*
$fecha = $_POST["fecha"];
$referencia = $_POST["referencia"];
$terminos = $_POST["terminos"];
$fecha_est = $_POST["fecha_est"];

$nommbre_f = $_POST["nombre_f"];
$empresa_f = $_POST["empresa_f"];
$tel_f = $_POST["tel_f"];
$calle_f = $_POST["calle_f"];
$num_ext_f =$_POST["num_ext_f"];
$num_int_f =$_POST["num_int_f"];
$colonia_f = $_POST["colonia_f"];
$cod_postal_f = $_POST["cod_postal_f"];
$municipio_f = $_POST["municipio_f"];
$ciudad_f = $_POST["ciudad_f"];
$estado_f = $_POST["estado_f"];
$pais_f = $_POST["pais_f"];

$nommbre_e = $_POST["nombre_e"];
$empresa_e = $_POST["empresa_e"];
$tel_e = $_POST["tel_e"];
$calle_e = $_POST["calle_e"];
$num_ext_e =$_POST["num_ext_e"];
$num_int_e =$_POST["num_int_e"];
$colonia_e = $_POST["colonia_e"];
$cod_postal_e = $_POST["cod_postal_e"];
$municipio_e = $_POST["municipio_e"];
$ciudad_e = $_POST["ciudad_e"];
$estado_e = $_POST["estado_e"];
$pais_e = $_POST["pais_e"];

$item1 = $_POST["item1"]; 
$cant1 = $_POST["cant1"]; 
$precio1 = $_POST["precio1"];
$total1 = $_POST["total1"];

$total = $_POST["subtotal"];
$iva = $_POST["iva"];
$iva = $_POST["total_form"];

 $datos = array($nom, $ape, $email, $emp, $dire, $t1, $ciu, $est, $pais, $men, $word);

//COMPROBAR QUE LOS DATOS OBLIGATORIOS EXISTEN
 $band = 0;
 for ($i = 0; $i < count($datos); $i++)
   if($datos[$i] == "")
	 $band = 1;

 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LogicBus/Compa&ntilde;&iacute;a</title>

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
 

<?
foreach($_POST as $nombre_campo => $valor){ 
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
   eval($asignacion); 
echo $asignacion;
echo '<br>';
} 


 $db_nombre="logicbus_pedidos"; 	// Nombre de la Base de Datos que se desea utilizar
     $sql = "SELECT * FROM CLIENTES";
  
     $result=coneccion_db_pedidos($db_nombre, $sql);


?>
</BODY>
</HTML> 