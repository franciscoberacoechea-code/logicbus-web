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
    <title>Validaci&oacute;n de sellado de bolsas
    </title>
    <meta name="description" content="Para empaques sellados y esterilizados, daños o sellos parcialmente abiertos no siempre son tan aparentes.">

    <meta name="keywords" content="Guadalajara, Automatizacion, Proyecto, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas">

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
      h1{
        text-align: center;
      }
      ul{
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
        <div class="griditemContA">

          <div id="main" class="container productos_page" >
            <a href="soluciones-en-la-industria-logicbus">Aplicaciones en la industria</a> --> Aplicaciones de celdas de carga
            <br>

            <?
            menuMovilApp();
            menuPC();
            ?>
            <h1 class="my-5"><b class="margen">Validaci&oacute;n de sellado de bolsas</b></h1>
            <center><h2><b>Aplicaci&oacute;n de Celda de carga </b></h2></center><br>

            <div class="part1">

              <article>
                <p><b>Resumen de la aplicaci&oacute;n:</b>
                  Para empaques sellados y esterilizados, da&ntilde;os o sellos parcialmente abiertos no siempre son tan aparentes. Para mitigar los malos sellados y verificar su integridad, es importante monitorear la fuerza que imprime el dispositivo de sellado por calor. En esta aplicaci&oacute;n se utilizan un par de celdas de carga tipo bot&oacute;n para monitorear la fuerza aplicada durante el proceso de sellado de bolsas.
                </p>
                <div align="center">  
                  <!-- coregir imagen de diagrama -->
                  <img src="imagenes/36/diagramas/manufactura/validacion-de-sellado-de-bolsas.jpg" alt="Validación de sellado de bolsas" width="50%">
                </div>
                <div>
                  <p><b>C&oacute;mo funciona:</b><br></p>
                  <ol>
                    <li style="color: black;">En esta aplicaci&oacute;n, un par de celdas de carga tipo bot&oacute;n miniatura se colocan para que la fuerza ejercida sobre las barras de sellado por calor, pueda medirse.</li>
                    <li style="color: black;">A medida que el sellador trabaja, las barras de calor se empujan hacia fuera ejerciendo presi&oacute;n sobre las celdas de carga.</li>
                    <li style="color: black;">Al utilizar dos celdas de carga nos aseguramos de que las barras de calor se separan de forma id&eacute;ntica y confirmamos su correcto funcionamiento mec&aacute;nico.</li>
                    <li style="color: black;">Los resultados de la celda se amplifican utilizando el acondicionador de se&ntilde;al de la serie <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> de Futek para retroalimentaci&oacute;n en el PLC.</li>
                  </ol>
                </div>
                <p><b>Productos en uso:</b> La celda de carga tipo bot&oacute;n <strong><a href="https://tienda.logicbus.com.mx/LLB130_c_1607.html" target="_blank">LLB</a></strong> con la serie <strong><a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">IAA</a></strong> de acondicionadores de se&ntilde;al.
              </article>

            </div>


            <section id="equipos-implementados" class="img-fluid container-fluid ">
              <div class="row img-fluid"  alt="Responsive image">

                <div class="col-3 col-md-3 container img-fluid">
                  <center>
                    <a href="https://tienda.logicbus.com.mx/LLB130_c_1607.html" target="_blank">
                      <img src="imagenes/36/llb130-futek.jpg" alt="" width="80%">
                    </a><br>
                    <a href="https://tienda.logicbus.com.mx/LLB130_c_1607.html" target="_blank">LLB130
                    </a>
                  </center><br><br>
                </div>

                <div class="col-3 col-md-3 container img-fluid">
                  <center>
                    <a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">
                      <img src="imagenes/36/iaa-series.jpg" alt="" width="80%">
                    </a><br>
                    <a href="https://tienda.logicbus.com.mx/Acondicionador-de-se%C3%B1al_c_1665.html" target="_blank">Series IAA
                    </a>
                  </center><br><br>
                </div>

              </div>
            </section>
            <br>

          </div>
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


        <br><br>



      </div>  

    </div><!--  /main -->

    <?
    abajo();
    ?>
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
  </body>
</html>
