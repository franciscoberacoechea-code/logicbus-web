<?
include("libreria/libreria.php");
?>
<!-- LIBRERIA QUE VAMOS A UTILIZAR -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<head>
<title>Logicbus: Documentos de interes</title>

<meta name="description" content="Documentacion de interes sobre nuestros productos: DAQ, computadoras industriales, control de movimiento, PAC, convertidores de protocolos, fuentes de poder, instrumentos de medición, PLC, registradores de datos, sensores, transductores, teclados industriales">

<meta name="keywords" content="Logicbus, M&eacute;xico, Mexico, Guadalajara, documentos, manuales, pdf, fichas, tecnicas, catalogos, descripciones, adquisicion de datos, computadoras industriales, control de movimiento, controladores autónomos programables, convertidores de protocolos, fuentes de poder, instrumentos de medición, PLC, registradores de datos, sensores, transductores, teclados industriales">

<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="favicon.ico">


<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="libreria/estilos.css">


<!-- Bootstrap Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<script src="libreria/ie-emulation-modes-warning.js"></script>
</head>
<body onLoad="">

<?
 arriba();
?>

<div id="main" class="container" >

  <div class="table-responsive">
    <table id="tabla-lb" class="table tabla_lb table-bordered" style="width:100%;">
      <thead>
        <tr>
          <th>Título</th>
          <th>Descrpción</th>
          <th>Imagen</th>
        </tr>
      </thead>

      <tbody>
        <? 

        $data = file_get_contents("celdas-carga-app-futek.json");
        $products = json_decode($data, true);
        $productos = $products['activos'];
        $cnt=1;
        if(count($products['activos']) > 0)
        {
          foreach($productos as $product)
          {
          ?>  
          <tr>
            <td width="25%"><a href="<?php echo htmlentities($product['link']);?>"><?php echo htmlentities($product['titulo']);?></a></td> 
            <td width="50%"><?php echo htmlentities($product['descripcion']);?></a></td>
            <td align="center"><a href="<?php echo htmlentities($product['link']);?>" target="_blank"> <img src="<?php echo htmlentities($product['img']);?>" alt=""> </a> </td>
          </tr>
          <?php $cnt=$cnt+1; }} ?>
      </tbody>
    </table> <br><a href="contacto-celdas" id="contacto-celdas"></a><br>
  </div><br>

    
    <br><br>  
    <table id="datatable-table">
    <thead>
        <tr>
            <th>Object</th>
            <th>Word</th>
            <th>Thing</th>
            <th>Class</th>
            <th>Think</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>árbol</td>
            <td>Esdrújula</td>
            <td>Colaboración</td>
            <td>Pingüino</td>
            <td>Canción</td>
        </tr>
        <tr>
            <td>arbol</td>
            <td>Esdrujula</td>
            <td>Colaboracion</td>
            <td>Pinguino</td>
            <td>cancion</td>
        </tr>
        <tr>
            <td>Música</td>
            <td>Nota</td>
            <td>Melodia</td>
            <td>Instrumento</td>
            <td>Pieza</td>
        </tr>
        <tr>
            <td>Music</td>
            <td>Note</td>
            <td>Melody</td>
            <td>Instrument</td>
            <td>Piece</td>
        </tr>
    </tbody>
</table>
  </div><!--  /main -->

<?
 abajo();
?>
<script>
  $(document).ready(function() {
    jQuery.fn.DataTable.ext.type.search.string = function ( data ) {
      return ! data ?
      '' :
      typeof data === 'string' ?
      data
      .replace( /έ/g, 'ε')
      .replace( /ύ/g, 'υ')
      .replace( /ό/g, 'ο')
      .replace( /ώ/g, 'ω')
      .replace( /ά/g, 'α')
      .replace( /ί/g, 'ι')
      .replace( /ή/g, 'η')
      .replace( /\n/g, ' ' )
      .replace( /[áÁ]/g, 'a' )
      .replace( /[éÉ]/g, 'e' )
      .replace( /[íÍ]/g, 'i' )
      .replace( /[óÓ]/g, 'o' )
      .replace( /[úÚ]/g, 'u' )
      .replace( /ê/g, 'e' )
      .replace( /î/g, 'i' )
      .replace( /ô/g, 'o' )
      .replace( /è/g, 'e' )
      .replace( /ï/g, 'i' )
      .replace( /ü/g, 'u' )
      .replace( /ã/g, 'a' )
      .replace( /õ/g, 'o' )
      .replace( /ç/g, 'c' )
      .replace( /ì/g, 'i' ) :
      data;
    };
  });

  $(document).ready(function() {
    var table = jQuery('#tabla-lb').DataTable({
      language: {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:     "Mostrar _MENU_ filas",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ aplicaciones",
        infoEmpty:      "Mostrando 0 a 0 de 0 aplicaciones",
        paginate: {
          first:      "Inicio",
          previous:   "Anterior",
          next:       "Siguiente",
          last:       "Último"
        },
        aria: {
          sortAscending:  ": Activar para ordenar la columna de manera ascendente",
          ortDescending: ": Activar para ordenar la columna de manera descendente"
        }
      }
    });

    jQuery('#tabla-lb_filter input').keydown( function () {
      table
      .search(
        jQuery.fn.DataTable.ext.type.search.string( this.value )
        )
      .draw();
    } );
  });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>