<?php

if (!defined('ALLOWED')) {
  header('Location: ../404.html');
exit();
  exit;
}

$allowedSites = ['www.logicbus.com.mx',"logicbus.com.mx",'localhost','www.logicbus.com'];

if (isset($_SERVER['HTTP_REFERER'])) {

  $requestUrl = $_SERVER['HTTP_REFERER'];
  $requestDomain = parse_url($requestUrl, PHP_URL_HOST);

  if (!in_array($requestDomain, $allowedSites)) {
    http_response_code(404);
    
    exit;
  }
}
?>
