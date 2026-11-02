<?
 session_register("emp");
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LogicBus/Reportes</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
<script src="validaciones.js"></script>
</head>

<body link="#ffffff" vlink="#ffffff" alink="#ffffff">
<?
 if (isset($emp)==0){
   echo '<script LANGUAGE="JavaScript"> 
     var pagina="index.htm" 
     function redireccionar() 
     { 
      location.href=pagina 
     } 
     setTimeout ("redireccionar()", 10); 
    </script>';
 } else {

 arriba();
 lado_generar('si',$emp);
?>
<?
  if ($_POST){
   $db_nombre="logicbusdb"; 	// Nombre de la Base de Datos que se desea utilizar    
     
   if ($_POST["reporte"]==1){
   $sql = "SELECT * FROM empresa WHERE nombre_em='".$emp."'";  
   
   $links=coneccion_db($db_nombre, $sql);
   
   if ($link= mysql_fetch_array($links)){
      echo '<script LANGUAGE="JavaScript"> 
      window.open("'.$link["link_em"].'_'.$_POST["fec1"].'_'.$_POST["cam1"].'.xls","_blank")
	  </script>';
	  echo '</table>
	</td>

	
	<td bgcolor="#A5AFCA" width="547" valign="top" align="left" style="padding-left:10px;padding-top:8px;padding-right:10px">

<table width="100%"  border="0">
  <tr>
    <td colspan="2" align="center"><strong><font size="3" color="#133899">Reporte general realizado en Excel</font></strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="250" valign="top"><img src="images/reportes/r1_excel.jpg" width="250" height="155"></td>
	<td align="justify" valign="top">Proporciona informaci&oacute;n detallada del viaje que realiz&oacute; el cami&oacute;n elegido en una fecha determinada registrada en la base de datos de LogicBus.<br><br>
    En ella puedes conocer:
    <ul>
      <li>El asiento que utiliz&oacute; un pasajero, su monto y el tramo que recorri&oacute;,  </li>
      <li>el monto total del recorrido o viaje, </li>
      <li>reporte de pasajeros por tramo y reporte de velocidades, </li>
      <li>gr&aacute;ficas de dichos datos. </li>
    </ul></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><strong><font size="3" color="#133899">Reporte por Punto</font></strong></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="250" valign="top"><img src="images/reportes/r2_punto.jpg" width="250" height="155"></td>
	<td align="justify" valign="middle">Muestra el punto geogr&aacute;fico en el que se encontraba el cami&oacute;n a cierta hora, as&iacute; como las fotos de las que se sacaron los c&aacute;lculos para el reporte general.</td>
  </tr>
</table>'; 
   } else 
    echo '</table>
	</td>

	
	<td bgcolor="#A5AFCA" width="547" valign="top" align="left" style="padding-left:10px;padding-top:8px;padding-right:10px">
No existe ese archivo';
  }
  if ($_POST["reporte"]==2){
   $sql = "SELECT * FROM diario WHERE id_cam_di=".$_POST["cam2"]." and dia='".$_POST["fec2"]."' and hora='".$_POST["hor"]."'";  
   $sql2 = "SELECT * FROM diario WHERE id_cam_di=".$_POST["cam2"]." and dia='".$_POST["fec2"]."'";  
   
   $reg_fotos=coneccion_db($db_nombre, $sql);
   $pushpins=coneccion_db($db_nombre, $sql2);

   if ($fotos= mysql_fetch_array($reg_fotos)){
      $lat2=$fotos["latitud"];
	  $lon2=$fotos["longitud"];
	  $com2=$fotos["comentarios"]; 
	  $pas2=$fotos["pasajeros"];
	  $vel2=$fotos["velocidad"];
	   
	  $lat1=0;
	  $lon1=0;
	  $com1=0;
      while ($pushpin= mysql_fetch_array($pushpins)){
		if ($pushpin["hora"] == $_POST["hor"]){
		 if ($pushpin= mysql_fetch_array($pushpins)){
		  $lat3=$pushpin["latitud"];
		  $lon3=$pushpin["longitud"];
		  $com3=$pushpin["comentarios"];
		  $pas3=$pushpin["pasajeros"];
   	      $vel3=$pushpin["velocidad"];
		  $hora3=$pushpin["hora"];
		 } else{
		  $lat3=0;
		  $lon3=0;
		  $com3=0;
		 }
		 break;
		} else 
		 if ($pushpin["hora"] != $_POST["hor"]){
		  $lat1=$pushpin["latitud"];
		  $lon1=$pushpin["longitud"];
		  $com1=$pushpin["comentarios"];
	  	  $pas1=$pushpin["pasajeros"];
		  $vel1=$pushpin["velocidad"];
		  $hora1=$pushpin["hora"];

		 }
	  }
      echo '<tr><td>
	 <center>
	 <table>
	  <tr>
	   <th align="center"><br><font size="2" color="#303C66"><strong>Fotograf&iacute;as</strong></font></th>
	  </tr>
	  <tr>
	   <td>&nbsp;<td>
	  </tr>
	 </table>

	 <table>
	  <tr>
	   	<a href="'.$fotos["foto1"].'" target="_blank"><img src="'.$fotos["foto1"].'" width="210" height="135"></a></td>
	  </tr>
  	  <tr>
	   	<a href="'.$fotos["foto2"].'" target="_blank"><img src="'.$fotos["foto2"].'" width="210" height="135"></a></td>
	  </tr>
	  <tr>
	   	<a href="'.$fotos["foto3"].'" target="_blank"><img src="'.$fotos["foto3"].'" width="210" height="135"></a></td>
	  </tr>
	  <tr>
	   	<a href="'.$fotos["foto4"].'" target="_blank"><img src="'.$fotos["foto4"].'" width="210" height="135"></a></td>
	  </tr>
	 </table>
 	 </center>
	 </td>
	 </tr>


	  </table>
	</td>

	<td bgcolor="#A5AFCA" width="547" valign="top" align="left" style="padding-left:10px;padding-top:8px;padding-right:10px">
	  
 <table width="100%"  border="0">
  <tr>
    <td align="center"><strong><font size="3" color="#133899">Reporte por Punto</font></strong></td>
  </tr>
  <tr>
    <td><br>
     <table height="289" width="100%">
      <tr bgcolor="#57638D" align="center" style="color:#FFFFFF ">
       <th>CAMI&Oacute;N</th>
       <th>DIA</th>
       <th>HORA</th>
       <th>LATITUD</th>
       <th>LONGITUD</th>
       <th>PASAJEROS</th>
       <th>VELOCIDAD</th>
      </tr>';
if ($lat1!=0){	 
      echo '<tr bgcolor="#6C7AA1" align="center">
       <td>'.$_POST["cam2"].'</td>
       <td>'.$_POST["fec2"].'</td>
       <td>'.$hora1.'</td>
       <td>'.$lat1.'</td>
       <td>'.$lon1.'</td>
       <td>'.$pas1.'</td>
       <td>'.$vel1.'</td>
      </tr>';
}
	  echo '<tr bgcolor="#ffffff" align="center">
       <td>'.$_POST["cam2"].'</td>
       <td>'.$_POST["fec2"].'</td>
       <td>'.$_POST["hor"].'</td>
       <td>'.$lat2.'</td>
       <td>'.$lon2.'</td>
       <td>'.$pas2.'</td>
       <td>'.$vel2.'</td>
      </tr>';
if ($lat3!=0){
      echo '<tr bgcolor="#6C7AA1" align="center">
       <td>'.$_POST["cam2"].'</td>
       <td>'.$_POST["fec2"].'</td>
       <td>'.$hora3.'</td>
       <td>'.$lat3.'</td>
       <td>'.$lon3.'</td>
       <td>'.$pas3.'</td>
       <td>'.$vel3.'</td>
      </tr>';
}
     echo '</table>
	</td>
  </tr>
  <tr>
    <td width="100%" align="center" valign="top">
	 <center>
	 <table>
	  <tr>
	   <th><font size="2" color="#303C66"><strong><br>Punto en el Mapa</strong></font></th>
	  </tr>
	  <tr>
	   <td><br>Mapa con el punto geogr&aacute;fico en donde<br>se encontraba el cami&oacute;n<br>';
echo '</td>
	  </tr>
	 </table>
	 </center>

	 </table>
	</td>';
} 
} else
 if ($_POST["reporte"]==2){
  echo '</table>
	</td>

	
	<td bgcolor="#A5AFCA" width="547" valign="top" align="left" style="padding-left:10px;padding-top:8px;padding-right:10px">
No existe ese registro';
 }
?>
<?
 abajo();
 }
}
?>
</body>
</html>