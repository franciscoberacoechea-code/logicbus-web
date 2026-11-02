<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><title>Encuesta Logicbus - Evaluacion de Venta</title>
<META NAME="DESCRIPTION" CONTENT="Encuesta Logicbus - Evaluacion de Venta">

<meta name="keywords" content="LogicBus, M&eacute;xico, Mexico, Guadalajara, Argentina, Chile, Brasil, LabView, Automatizaci&oacute;n, Automatizacion, Seguridad,  Consultor&iacute;a, Consultoria, Integraci&oacute;n, Integracion, Proyecto, Radio Frecuencia, Cubos, An&aacute;lisis, Analisis, Datos, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de M&eacute;xico, Estado de Mexico, Michoac&aacute;n, Michoacan, Morelos, Nayarit, Nuevo Le&oacute;n, Nuevo Leon, Oaxaca, Puebla, Quer&eacute;taro, Queretaro, Quintana Roo, San Luis Potos&iacute;, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucat&aacute;n, Yucatan, Zacatecas, Argentina, Chile, Brasil, Measurement, Adquisici&oacute;n, Adquisicion, Control, Modbus, RS-485, TM-AD8, TM Tiny, Datos, icpdas">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
//document.getElementById("eventos").className = "dropdown active";
			};
</script>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
?>

<script>
function ancla(){
  document.getElementById('ancla').style.display = 'block';
}
</script>



<div class="container">
  

<div class="row">
<div class="col-md-12">

	<div class="card card-default">
							
		<div class="card-body">
							
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Imagen</th>
							                <th>Modelo</th>
							                <th>Descripcion</th>
							            </tr>
							        </thead>
							        <tbody>

<?php 

$data = file_get_contents("productos-lista.json");
$products = json_decode($data, true);

//echo count($products['descontinuados']);
$productos = $products['lista'];
/*foreach ($productos as $product) {
	echo $product['img'].'<br>';
	echo $product['modelo'].'<br>';
	echo $product['descripcion'].'<br>';

    print_r($product);
}*/

$cnt=1;
if(count($products['lista']) > 0)
{
foreach($productos as $product)
{				?>	
<tr>
											<td><?php echo htmlentities($cnt);?></td>											
                                            <td><a href="<?php echo htmlentities($product['link']);?>"> <img src="<?php echo htmlentities($product['img']);?>" alt="" width="150"> </a> </td>
                                            <td><a href="<?php echo htmlentities($product['link']);?>"><?php echo htmlentities($product['modelo']);?></a></td>                                            
                                            <td><?php echo $product['descripcion'];?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
							        </tbody>
							        <tfoot>
							            <tr>
							               <th>ID</th> 
							                <th>Imagen</th>
							                <th>Modelo</th>
							                <th>Descripcion</th>
							            </tr>
							        </tfoot>
							    </table>
							</div>
						</div>
					</div>
				</div>

</div>

<?
 abajo();
?>
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
    language: {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ filas",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ filas",
        infoEmpty:      "Mostrando 0 a 0 de 0 filas",
        paginate: {
            first:      "Inicio",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Último"
        },
        aria: {
            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    }
} );

} );
</script>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>