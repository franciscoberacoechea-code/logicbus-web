<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Phpmiler/Exception.php';
require 'Phpmiler/PHPMailer.php';
require 'Phpmiler/SMTP.php';

if($_POST){
   

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $empresa = $_POST['empresa'];
    
    // codificacion utf-8
   
       /* $codificacion = mb_detect_encoding($nombre, "UTF-8, ISO-8859-1");
        $nombre = iconv($codificacion, 'UTF-8', $nombre );
    
        $codificacion = mb_detect_encoding($empresa, "UTF-8, ISO-8859-1");
        $empresa = iconv($codificacion, 'UTF-8', $empresa );
    
        $codificacion = mb_detect_encoding($direccion, "UTF-8, ISO-8859-1");
        $direccion = iconv($codificacion, 'UTF-8', $direccion ); 
    
        $codificacion = mb_detect_encoding($ciudad, "UTF-8, ISO-8859-1");
        $ciudad = iconv($codificacion, 'UTF-8', $ciudad );
    
        $codificacion = mb_detect_encoding($estado, "UTF-8, ISO-8859-1");
        $estado = iconv($codificacion, 'UTF-8', $estado ); 
    
        $codificacion = mb_detect_encoding($pais, "UTF-8, ISO-8859-1");
        $pais = iconv($codificacion, 'UTF-8', $pais );
    
        $codificacion = mb_detect_encoding($solicitud, "UTF-8, ISO-8859-1");
        $solicitud = iconv($codificacion, 'UTF-8', $solicitud );*/
        //str_replace(buscar, remplasar, de que cadena); &eacute;
    //array('&Aacute;', '&aacute;', '&Eacute;', '&eacute;', '&Iacute;', '&iacute;', '&Oacute;', '&oacute;', '&Uacute;', '&uacute;', '&Ntilde;', '&ntilde;')
    // array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n')
    
    //-------------------CORRECCION DE ACENTOS -----------------------------------------------------
    
    
    
        $nombre = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
         $nombre 
        );
    
         $empresa = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
          $empresa 
        );
    
        $direccion = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
          $direccion 
        ); 
    
         $ciudad = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
           $ciudad 
        );
    
        $estado = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
           $estado 
        ); 
    
        $pais = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
         $pais  
        );
    
         $solicitud = str_replace(
        array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ' ),
        array('A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n'),
          $solicitud  
        );
    









// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'it.logicbus3@gmail.com'; 
    $mail->Password   = 'zF7e7\(3t9'; 
     $mail->SMTPSecure = 'tls'; 
    $mail->Port       = 587; 
         

    //Recipients
   
    $mail->setFrom('it.logicbus3@gmail.com', 'Logicbus');
    
    //$mail->addAddress('2119200245@soy.utj.edu.mx');               // Name is optional
    $mail->addAddress('formulario-tickets.ca92a088@atencion-a-clientes.logicbuscom.podio.com');               // Name is optional
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    //$mail->Subject = 'Pagina Logicbus.com.mx';
    $mail->Subject = 'landing page Controllino';
    
    $mail->Body    = 'Leads de Controllino: '.'<br><br>'.
                    'Nombre: '.$nombre.'<br>'.
                      'Email: '.$correo.'<br>'.
                      'Telefono de contacto: '.$telefono.'<br>'.
                      'Solicitud: landing page Controllino <br>'.$solicitud;
   //--------------Validación y carga de archivos adjuntos --------------------------------
  /*  
    if($_FILES["adj"]["name"][0] != ''){
      //var_dump($_FILES);
         $fileCount = count($_FILES["adj"]["name"]);

        for($i=0; $i<$fileCount; $i++){

            $nameFile = $_FILES["adj"]["name"][$i];
            $tempFile= $_FILES["adj"]["tmp_name"][$i];
             $mail->addAttachment($tempFile,$nameFile);
        }
    }//cierre de if 
   
    
        
        
        
        
        
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; mensaje alternativo

    $mail->send();
    //echo 'El mensaje se envio correctamente';
    ?>
   <script>
       alert("El mensaje se envio correctamente");
       window.location = "formulario-registro-controllino.php";

   </script>
   <?php 
     
} catch (Exception $e) {
    echo "Hubo un Error al enviar el mensaje: {$mail->ErrorInfo}";
    ?>
   <script>
       //alert("Hubo un Error al enviar el mensaje:");
       alert("Hubo un Error al enviar la info por favor intenta de nuevo");
       window.location="formulario-registro-controllino.php";

   </script>

   <?php  
     
}

}else{
    //echo "Verifique los datos y vuelva a intentarlo por favor";
    ?>
   <script>
       alert("Verifique los datos y vuelva a intentarlo por favor.");
       window.location = "formulario-registro-controllino.php";

   </script>
   <?php  
*/ 
}

?>
