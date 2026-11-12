
  <?php
   define('ALLOWED', 1);
   require("permissions.php");
 require("log.php");
  ?>
  
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='pdfList.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='navbar.css'>
    <script src="pagBar.js"></script>
    <script src="tags.js"></script>
    <!-- contenido bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


<style>
	.modal {
  display: none; /* El pop-up está oculto por defecto */
  position: fixed; /* Posición fija */
 
  left: 0;
  top: 0;
  z-index: 1; /* Sitúa el pop-up por encima del resto del contenido */
  width: 100%; /* Ancho completo */
  height: 100%; /* Altura completa */
  overflow:hide; /* Habilita el scroll si es necesario */
  background-color: rgb(0,0,0); /* Color de fondo */
  background-color: rgba(0,0,0,0.4); /* Color de fondo con opacidad */
}

.modal-content {
  position: absolute;
  top:15%;
    left: 50%;
    transform: translate(-50%, -50%);
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}
.modal-content span {
  width: 24px;
}
.modal-content span:hover{
  cursor: pointer;
}

@media (max-width: 850px) {
 .modal-content { margin: 30% auto;}
}
</style>


<div id="myModal" class="modal">
  <div class="modal-content">

    <span class="close">X</span>

<!-- BEGIN Podio web form -->
<script src="https://podio.com/webforms/29578199/2437196.js"></script>
<script type="text/javascript">
  _podioWebForm.render("2437196")
</script>
<noscript>
  <a href="https://podio.com/webforms/29578199/2437196" target="_blank">Please fill out the form</a>
</noscript>

<!-- END Podio web form -->
</div>
</div>



<!--/*navbar*/-->
<div class="navbar navbar-light pt-5" >
  <div class="container-xxl">       
                <div class="col-auto px-1">
                    <div class="search-box">
                          <form id="tagForm">
                            <button class="btn-search" type="button" title="tags">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                                <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                                <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043z"/>
                              </svg>
                            </button>
                            <input type="text" class="input-search" id="tags" name="tags" list="tagList" oninput="addTagToList(this.value);" placeholder="Escriba las tags">
                          <datalist id="tagList">
                          </datalist>
                        </form>
                    </div>
                  </div>
                  <div class="col px-1" >
                    <form action="" method="GET" class="d-flex" id="FindGet">
                      <div class="flex-grow-1 px-2 align-self-center">
                        <input type="text" name="clave" class="form-control" id="finder"
                        <?php   
                          if(isset($buscador)){
                            echo ' value="'.$buscador.'"';
                          } else{
                            echo ' placeholder="Introduzca marca o modelo" ';
                          }
                          ?>
                        >
                      </div>
                      <div class="align-self-center">
                        <button class="btn btn-secondary" type="submit">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
                        <b>Buscar</b></button>  
                      </div>
                    </form>
                  </div>           
    </div>
    <div style="height:5px;width: 100%;"></div>
  <div id="selectedTags" class="container-xxl justify-content-start"></div>
                        </div>

  <br>
<!--/*listado de contenido*/-->
<div class="container" id="listD">
<?php 
            $i = 1;
foreach($PFDS as $data) { ?>
  <?php $i++; ?>
      <div class="cardDoc">   
      <a target="_blank" href="<?php echo $data['url']; ?>"  class="Dlink">
        <div class="minip">
        <div class="mg">
          <div class="clr paperD"></div>
          <div class="group">
            <span><b><?php   
                  if ($data['tipo']==0){
                    echo "otros";
                  }else
                  {echo $data['tipo'];}  
                  ?></b></span>
          </div>
        </div>
    
        <div class="av" style="background-image:url('<?php
  // Normalizamos el nombre del documento para hacerlo insensible a espacios, acentos y mayúsculas
        $normalizedDocumentName = strtolower(trim($data['tipo']));
        $normalizedDocumentName = str_replace(' ', '', $normalizedDocumentName);
        $normalizedDocumentName = iconv('UTF-8', 'ASCII//TRANSLIT', $normalizedDocumentName);

       switch ($normalizedDocumentName) {
     case "aplicacion":
      echo "img/Aplicacion.png";
     break;
      case "brochure":
      echo "img/Brochure.png";
     break;
      case "diagramadebloques":
      echo "img/diagramaBloque.png";
     break;
      case "dibujo2d":
      echo "img/Dibujo2D.png";
     break;
      case "dimensiones":
      echo "img/Dimensiones.png";
     break;
      case "guiadeiniciarapido":
      echo "img/GuiaDeInicioRapido.png";
     break;
      case "guiadeinstalacion":
      echo "img/GuiaInstalacion.png";
     break;
      case "guiadeprogramacion":
      echo "img/GuiaProgramacion.png";
     break;
      case "guiadeusuario":
      echo "img/GuiaUsuario.png";
     break;
      case "hojadedatos":
      echo "img/HojaDatos.png";
     break;
     case "datasheet":
      echo "img/HojaDatos.png";
     break;
      case "hojadeespecificaciones":
      echo "img/HojaEspecificaciones.png";
     break;
      case "manualdeusuario":
      echo "img/ManualSoftware.png";
     break;
      case "manual":
      echo "img/GuiaUsuario.png";
     break;
      case "notasdeaplicacion":
      echo "img/ManualDeUsuario.png";
     break;
      case "manualhardware":
      echo "img/ManualHardware.png";
     break;
      case "manualsoftware":
      echo "img/ManualSoftware.png";
     break;
      case "notasdeaplicacion":
      echo "img/NotasAplicacion.png";
     break;
      case "otros":
      echo "img/Otros.png";
     break;
      case "tabladepines":
      echo "img/TablaPines.png";
      break;
    default:
      echo "img/Otros.png";
    }
    ?>'); "></div>

      <div class="info">
        <name><?php echo $data['id_code']; ?></name>
      </div>
      <span class="plot" title="get document" target="_blank">
        <b>Ver PDF</b>    </span>
  </div >
</a> 


    <div style="margin-top:0.5em;"></div>
    <span><?php echo $data['modelo']; ?></span> </div>   
  <?php } ?>
</div>
<br>
<div id="pagination"></div>






<script > 






var allTags = [
<?php 
echo $Stags.""; ?>
];
var selectedTags = [];
document.addEventListener("DOMContentLoaded",getTags(allTags,selectedTags));
document.addEventListener("DOMContentLoaded",fillTagList());
document.getElementById('pagination').innerHTML = createPagination(<?php echo  $totalP;?>,<?php echo   $actualP; ?>);

<?php
if(isset($tagArray)){
  foreach ($tagArray as $itag) {
    
  echo "document.addEventListener('DOMContentLoaded',addTagToList('".$itag."'));";
  }


}
?>


// Selecciona el input y el div
var input = document.querySelector('.input-search');
var div = document.querySelector('.btn-search');

// Agrega un event listener para el evento 'focus'
input.addEventListener('focus', function() {
    // Cambia el color del div
    div.style.color = 'var(--blue)';
});

// Agrega un event listener para el evento 'blur'
input.addEventListener('blur', function() {
    // Restablece el color del div
    div.style.color = '';
});




</script>

<script src="block.js"></script>