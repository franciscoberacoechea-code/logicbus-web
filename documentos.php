<?php require("admin/config.php"); ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logicbus - Documentación</title>
    <meta name="description" content="Accede a una biblioteca completa de tutoriales que te ayudarán a resolver problemas comunes y aprender a usar nuestros productos de forma eficaz">

    <meta name="keywords" content="Logicbus, México, Mexico, Guadalajara, Be Logicb Think Technology, tu sitio de automatización, equipo de automatizacion y control, fabricantes de equipos industriales, fabricantes de equipos industriales en mexico,fabricantes de equipos,  equipos de automatizacion para procesos,capacitaciones técnicas,red de Integradores Mexico, documentacion, documentación, documentos, Aplicación, Brochure, Diagrama de Bloques, Dibujo 2D, Dimensiones, Guía de Inicio rápido, Guia de instalacion, Guía de programación, Guía de Usuario, Hoja de datos, Hoja de especificaciones, Manual de Usuario, Manual hardware, Manual Software, Notas de Aplicación, Tabla de Pines ">

    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
	
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>

	<script>
	function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
	}

	
</script>
<style>
    .centered-div {
      position: relative;
      margin: auto;
      top: 100px;
      padding: bottom 100px;
    }

	.ulNavbar {
		z-index: 0;
	}
	.modal {
  display: none; /* El pop-up está oculto por defecto */
  position: fixed; /* Posición fija */
  z-index: 1; /* Sitúa el pop-up por encima del resto del contenido */
  left: 0;
  top: 0;
  width: 100%; /* Ancho completo */
  height: 100%; /* Altura completa */
  overflow:hide; /* Habilita el scroll si es necesario */
  background-color: rgb(0,0,0); /* Color de fondo */
  background-color: rgba(0,0,0,0.4); /* Color de fondo con opacidad */
}

.modal-content {
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






</head>



<body>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">X</span>

<!-- BEGIN Odoo web form -->
<div class="container">
<div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
<iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
style="width:100%; min-height:1200px; border:0;">
</iframe>
</div>
</div>
<!-- END Odoo web form -->

</div>
</div>

    <?php echo $var_body; ?>
	<?php require("libreria/header.view.php"); ?>
  <img src="images/banner-doc.jpg" width="100%">
  <section class="section-gray py-4">
        <div class="container text-center">
        <span class="paragraph blue "><b>
            Accede a una biblioteca completa de tutoriales que te ayudarán a resolver problemas comunes y aprender a usar nuestros productos de forma eficaz
</b></span>    
        </div>
</section>

  <div id="spinner" style="width: 80px; height: 80px; color:var(--blue)" class="text-center centered-div">
  <div class="spinner-grow" role="status"style="width: 80px; height: 80px;">
  </div>
</div>



	<iframe data-count="" id="iframe" src="documento/?  <?php echo $_SERVER['QUERY_STRING'].'"'; ?>
  frameborder="0" scrolling="no" onload="resizeIframe(this)" width="100%" >
	</iframe>


	
	<?php require("libreria/footer.view.php"); ?>
	<?php echo $var_footer; ?>




  <script>
    $('#iframe').on('load', function() {
      $('#spinner').fadeOut('slow');
      setTimeout(function() {
        $('#frame').show();
      }, 100);
    });
  </script>


<script src="libreria/js/blocked.js"></script>


</body>



</html>