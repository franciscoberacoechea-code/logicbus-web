<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?
include("libreria/libreria.php");
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>


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
<title>Aplicaciones de Computadoras Industriales Cincoze -Logicbus S.A de C.V</title>
<meta name="description" content="Aplicaciones de computadoras industriales cincoze - Logicbus">

<meta name="keywords" content="Logicbus, industria, automatizacion, agricultura, futek, Mexico, Guadalajara, Puebla, Sonora, Baja California, Monterrey, Chihuahua, Oaxaca, celdas de carga, sensores de celdas de carga, aplicaciones de celdas de carga, Pesaje de Lotes, Medidor de flujo de masa, Medición De Silos, Dispensación De Tanque, Controlador De Nivel De Tanque Dual, Medición De La Carga De Gestión De Residuos, Sistema De Prueba De Resorte, Medición Del Tanque De Fermentación Del Oktoberfest, ¿Como implementar una celda de carga en la industria?">
<meta name="revisit after" content="14 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="language" content="Spanish">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="libreria/diagramas.css" rel="stylesheet" >
<!--- Estilos Necesarios-->
<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link rel="stylesheet" type="text/css" href="libreria/subcategorias.css">
<link rel="stylesheet" type="text/css" href="libreria/menu-categorias.css">
<link rel="stylesheet" type="text/css" href="libreria/menu-movil.css">
<link rel="stylesheet" type="text/css" href="libreria/marcas.css">
<!--------------->
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
  document.getElementById("productos").className = "dropdown active";
};
</script>

<style>
* a{
  cursor: pointer;
}
p{
    text-align: justify;
    text-justify: inter-word;
}
</style>
</head>
<body onLoad="menu_actual();">
  <?
    arriba();
  ?>

<div id="main">
  <div class="gridContArriba">
    <div class="griditemContA">
      <?
        menucategorias();
      ?>
    </div>
    <div class="griditemContA" id="subir">


<div align="left">  <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> <b class="margen">Aplicaciones de Computadoras Industriales Cincoze</b> <br></div>
  <div class="">

    <br>
    <h1>Aplicaciones de Computadoras Industriales Cincoze</h1>
    <br>
    <p align="justify">
      <strong>
        Si quieres conocer más de esta computadora y en qué otras aplicaciones puede ser usada, comunícate con nuestro equipo de trabajo y nuestros ingenieros especializados te ayudarán a encontrar una solución con este u otros equipos. <a href="pdf/catalogos/Guia%20de%20Aplicaciones%20Cincoze.pdf" target="_blank" style="font-weight: bold;">Ver PDF: Guía de Aplicaciones Cincoze</a>
      </strong>
    </p>
  </div>
  <center>
    <a class="ver-mas-contacto" href="#contacto-cincoze">
      <span style="color: white;">Contactar</span>
    </a>
  </center>

  <? 
  menuCincoze();
  ?>

  <br>
  <div class="table-responsive">
    <table id="tabla_lb" class="table tabla_lb table-bordered" style="width:100%;">
      <thead>
        <tr>
          <th>Título</th>
          <th>Descripción</th>
          <th>Imagen</th>
        </tr>
      </thead>

      <tbody>
        <? 

        $data = file_get_contents("app-cincoze.json");
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
    </table> <br><br>
  </div><br>



    <!-- BEGIN Odoo web form -->
      <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
      <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
      style="width:100%; min-height:1200px; border:0;">
      </iframe>
      </div>
      </div>
    <!-- END Odoo web form -->


<br><br>


<script type="text/javascript">
  window.woorankAssistantOptions = window.woorankAssistantOptions || {};
  window.woorankAssistantOptions.url = 'logicbus.com.mx';
  window.woorankAssistantOptions.assistantPublicKey = '21370538c6be6c20207e5badf795fc7d';
  window.woorankAssistantOptions.collectWebVitals = true;
  (function() {
    var wl = document.createElement('script'); wl.type = 'text/javascript'; wl.async = true;
    wl.src = 'https://assistant.woorank.com/hydra/assistantLoader.latest.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wl, s);
  })();
</script>
 </div>  

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
    var table = jQuery('#tabla_lb').DataTable({
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

    jQuery('#tabla_lb_filter input').keydown( function () {
      table
      .search(
        jQuery.fn.DataTable.ext.type.search.string( this.value )
        )
      .draw();
    });
  });
</script>

<script type="text/javascript">
   $(function() {
    var Accordion = function(el, multiple) {
      this.el = el || {};
      // more then one submenu open?
      this.multiple = multiple || false;
    
      var dropdownlink = this.el.find('.dropdownlink');
      dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
