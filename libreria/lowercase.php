<?php
$file = strtolower($_GET['file']) . '.php';

if ($file==".php"){
    $file="index.php";
}


if (file_exists("../".$file)) {
    include("../".$file);
} else {
    
    // Manejo de errores: archivo no encontrado
    include("../404.php"); // Aquí llamas a tu propio script de error 404, por ejemplo, 404.php
    exit();
}
?>