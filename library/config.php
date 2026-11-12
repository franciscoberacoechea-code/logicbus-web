<?php

if (!defined('ALLOWED')) {
  http_response_code(404);
  header('Location: ../404.html');
exit();
}
$usuario  = "logicbus_public";//
$password = "Wj3gCor*eL~0";//
$servidor = "localhost";// 
$basededatos = "logicbus_docs";//
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>
