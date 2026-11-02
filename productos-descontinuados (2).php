<?
 include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pagina de Prueba</title>


<meta rel="nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=12)">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=0.5,Transition=12)">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="https://www.logicbus.com.mx/favicon.ico">

<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
<link href="libreria/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="libreria/ie-emulation-modes-warning.js"></script>
<script language="javascript">

function menu_actual(){
document.getElementById("productos").className = "dropdown active";
      };
</script>

<style>
  h1{
    text-align: center;
  }
   p{
    text-align: justify;
   }
  </style>

</head>
<body onLoad="menu_actual();">

<?
 arriba();
 lado1("no","");
?>

 <div id="main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <h1>Pruebas de Formatos de imagenes</h1>

<table class="table table-hover" align="center" style="border: 1px solid black;" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black; bgcolor="#CCCCCC">Formato</td>
      <td  colspan="2" align="center" style="border: 1px solid black;"colspan="2" align="center" style="border: 1px solid black;">imagen</td>
    </tr>
    <tr>
      <td  colspan="2" align="center" style="border: 1px solid black;">JPG</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura.JPG"  width="100%" class="image_productos"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">jpf</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura.jpf" width="100%" class="image_productos"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">WepP</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura.webp" width="100%"  class="image_productos"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">jxr</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura_resultado.jxr"  width="100%"  class="image_productos"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">jp2</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura_resultado.jp2" width="100%"   class="image_productos"></td>
    </tr>



    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">jpf.jxr</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Capturajpf.jxr" width="100%"  class="image_productos"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border: 1px solid black;">jp2.jpg</td>
      <td colspan="2" align="center" style="border: 1px solid black;"><img src="imagenes/prueba-formatos/Captura_resultadojp2.jpg" width="100%"  class="image_productos"></td>
    </tr>

  </tbody>
</table>

<br><br>


<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header p-0" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-tasks"></i> Automatización y control de procesos
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body m-0 pl-1 pr-0 py-0">
        
        <div class="list-group">

        <a class="list-group-item list-group-item-action" id="Robots Colaborativos" href="robots-colaborativos" alt="Robots Colaborativos" title="Robots Colaborativos">Robots Colaborativos</a>
        <a class="list-group-item list-group-item-action" id="Vision Artificial" href="vision-artificial" alt="Vision Artificial" title="Automatización y control de procesos">Vision Artificial</a>
        <a class="list-group-item list-group-item-action" id="consumo" href="plc" alt="consumo y analisis de energia" title="Consumo y análisis de energía eléctrica">PLC ( Controlador Lógico Programable )</a>
        
        </div><!--/list-group -->

      </div>
    </div>
  </div>   <!-- end div card -->


  <div class="card">
    <div class="card-header p-0" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fas fa-tasks"></i>Adquisición y registro de datos - DAQ
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body m-0 pl-1 pr-0 py-0">
        <div class="list-group ">

        <a class="list-group-item list-group-item-action" id="Adquisición de datos" href="adquisicion-de-datos" alt="Adquisición de datos" title="Adquisición de datos">Adquisición de datos</a>
        <a class="list-group-item list-group-item-action" id="Graficadoress" href="multivariables_logger" alt="Graficadores" title="Graficadores">APPLIED MOTION PRODUCTS (USA)</a>
        <a class="list-group-item list-group-item-action" id="Registradores" href="datalogger" alt="Registradores" title="Registradores">Registrador de Datos - Dataloggers</a>
          
        </div><!--/list-group -->
      </div>
    </div>
  </div>

</div>


<br><br>

      </div>
    </div>
   </div>
</div>
<?
 abajo();
?>
</body>
</html>

