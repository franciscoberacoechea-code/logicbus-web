
<!--libreria de el display de los items -->
<?php
include '../display.php';
$Print = new Basicsdisp();
?>

<!DOCTYPE html>
<html>

<title>DEMO langing cincoze, prueba de muestra en paginas</title>

<?php   //Descripcion de el titulo
$Print->Header("pato el que lo lea");  ?>

<body   data-spy="scroll" data-target="#navbar" data-offset="10">
  <script>
    AOS.init();
  </script>
<?php  //Print->navbar($array)  *ID => *titulo ,), 

//el id debe ser numerico para poder identificar el orde de este 
$Seleccion = array(
    "1"=> "JUAN",
    "2" => "Pedro",
    "3" => "Jose", 
    "4"=> "Romero",
    "5"=> "Jose roberto",
    "6"=>"noticias",
    "7" => "Jose", 
    "8"=> "Romero",
    "9"=> "Jose roberto",
    "10"=>"noticias"
);
$Print->navbar($Seleccion);
?>

<?php       //Print->Head(direccion imagen, titulo, subtitulo)
$Print->Head("https://www.logicbus.com.mx/landing/demo/images/banner.png","Titulo HEAD","this is a subtitle example to design whit web page",1);
?>

<?php
$Imagenes = array(
        array(
            "link" => "https://tienda.logicbus.com.mx/",
            "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
        ),
        array(
            "link" => "https://tienda.logicbus.com.mx/",
            "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
        ),
        array(
            "link" => "https://tienda.logicbus.com.mx/",
            "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
        ),
        array(
            "link" => "https://tienda.logicbus.com.mx/",
            "imagen" => "https://www.logicbus.com.mx/landing/demo/images/cincoze-dx1200.webp"
        )
);
            //array de imagen, titulo,          ID
$Print->Carrusel($Imagenes,"Carrusel",2);
$Print->Carrusel($Imagenes,"Carrusel",3);
?>


<?php 
$Imagenes=array("https://www.cincoze.com/data/images/202112/1638409331791782168.png", 
                "https://www.cincoze.com/data/images/202112/1638410503956986267.jpg");

$card=array(
    array("icono" => "apple", "titulo" => 1, "descripcion" => "Unu foje estis drako nomita Smaug. Smaug estis tre granda kaj potenca drako, kiu vivis en kaverno en la monto. Unu tagon, Smaug decidis eliri el sia kaverno por esplori la mondon. "),
    array("icono" => "bluetooth", "titulo" => 2, "descripcion" => "Dum li promenis tra la arbaro, li renkontis kun grupo da kunikloj. La kunikloj timis la drakon kaj kuris en ĉiuj direktoj. Smaug ridis kaj daŭrigis sian vojon."),
    array("icono" => "apple", "titulo" => 3, "descripcion" => "Poste, Smaug alvenis al vilaĝo. La vilaĝanoj timis la drakon kaj kuris kaŝiĝi en siaj domoj. Smaug sentis iom malĝojan, ke li timigis la homojn, do li decidis fari ion bonan por ili."),
    array("icono" => "bell-fill", "titulo" => 4, "descripcion" => "flugis al la monto kaj kolektis grandan trezoron da oro kaj juveloj. Poste, li revenis al la vilaĝo kaj lasis la trezoron en la merkata placo."),
    array("icono" => "bluetooth", "titulo" => 5, "descripcion" => "La vilaĝanoj eliris el siaj domoj kaj miris la trezoron. Ili rimarkis, ke Smaug ne estis tiel malbona post ĉio. Ekde tiu tago, Smaug iĝis heroo en la vilaĝo kaj ĉiuj amis lin."),
    array("icono" => "gpu-card", "titulo" => 6, "descripcion" => "Fino de la historio."),
    array("icono" => "gpu-card", "titulo" => 7, "descripcion" => "Fino de la historio."),
    array("icono" => "gpu-card", "titulo" => 8, "descripcion" => "Fino de la historio."),
    array("icono" => "bluetooth", "titulo" => 9, "descripcion" => "La vilaĝanoj eliris el siaj domoj kaj miris la trezoron. Ili rimarkis, ke Smaug ne estis tiel malbona post ĉio. Ekde tiu tago, Smaug iĝis heroo en la vilaĝo kaj ĉiuj amis lin."),
            );


$Print->overview($Imagenes,$card,3);
$Print->overview($Imagenes,$card,4);
?>

<?php
$card=array(
    array("icono" => "apple", "titulo" => 1, "descripcion" => "Fino de la historio."),
    array("icono" => "bell-fill", "titulo" => 2, "descripcion" => "Fino de la historio."),
    array("icono" => "gpu-card", "titulo" => 3, "descripcion" => "Fino de la historio."),
    array("icono" => "gpu-card", "titulo" => 4, "descripcion" => "Fino de la historio."),
);


$Print->card_list($card,"hello",4);
$Print->card_list($card,"hello",5);


$Print->card_button_L("cardbutton","demo text of relleno","https://www.cincoze.com/data/images/202112/1638409331791782168.png","https://www.cincoze.com/data/images/202112/1638409331791782168.png",5);
$Print->card_button_R("cardbutton","demo text of relleno","https://www.cincoze.com/data/images/202112/1638409331791782168.png","https://www.cincoze.com/data/images/202112/1638409331791782168.png",6);



$Imagenes= array("https://www.cincoze.com/data/images/202112/1638409331791782168.png","https://www.cincoze.com/data/images/202112/1638409331791782168.png");
$list=array(
    array("dentro" => "1", "titulo" => "texto de prueba", "descripcion" => "Fino de la historio."),
    array("dentro" => "2", "titulo" => "texto de prueba", "descripcion" => "Fino de la historio."),
    array("dentro" => "3", "titulo" => "texto de prueba", "descripcion" => "Fino de la historio."),
    array("dentro" => "4", "titulo" => "texto de prueba", "descripcion" => "Fino de la historio."),
);
$Print->circle_list($list,$Imagenes,6);
$Print->circle_list($list,$Imagenes,7);




$head= array("content","content","content","content","content","content");
$list=array(
    array('<a href="www.web.com"><div style="whide=100%; height=100%">var</div></a>' ,"var","var","var","var","var"),
    array("var","var","var","var","var","var"),
    array("var","var","var","var","var","var"),
    array("var","var","var","var","var","var"),
    array("var","var","var","var","var","var"),
    array("var","var","var","var","var","var"),
    array("var","var","var","var","var","var")
);


$Print->tabla($head,$list,7);
$Print->tabla($head,$list,8);

$Print->footer(8);

?>


<!--scripts-->
    <!-- jQuery and Bootstrap -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/jquery-3.2.1.min.js"></script>
    <script src="https://www.logicbus.com.mx/landing/demo/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="https://www.logicbus.com.mx/landing/demo/js/script.js"></script>
</body>


</html>

