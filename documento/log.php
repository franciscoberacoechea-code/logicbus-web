
<?php
if (!defined('ALLOWED')) {
  http_response_code(404);
  header('Location: ../404.html');
exit();
}


    require('config.php');
 // metodo de listado
 $elementsPP= 48; // maximo por pagina
 $actualP = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
 $offset = ($actualP - 1) * $elementsPP;

///metodo de consulta inteligente
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET['clave'])&& $_GET['clave']!="") { 
  //buscador y tag
      if (isset($_GET['tagArray'])) { 
        $tagArray = $_GET['tagArray'];
        $buscador= $_GET['clave'];
        $placeholders = "'" . implode("','",  $tagArray) . "'";
        $clausulas_like = array();
          foreach ($tagArray as $tag) {
          $clausulas_like[] = "tags LIKE '%" . $tag . "%'";
          }
          $sqlDocument="SELECT * FROM documentacion WHERE  (marca LIKE  '%".$buscador."' OR modelo LIKE '".$buscador."%')
          AND ( tipo IN (". $placeholders.") OR marca IN (". $placeholders.") OR " . implode(' OR ', $clausulas_like).")";
      }
      //solo buscador
      else{
        $buscador= $_GET['clave'];
        $sqlDocument="SELECT * FROM documentacion WHERE  (marca LIKE  '%".$buscador."%' OR modelo LIKE '%".$buscador."%')";
      }
  }
  else{
    if (isset($_GET['tagArray'])) {
      //solo tag
      $tagArray = $_GET['tagArray'];
        $placeholders = "'" . implode("','",  $tagArray) . "'";
        $clausulas_like = array();
          foreach ($tagArray as $tag) {
          $clausulas_like[] = "tags LIKE '%" . $tag . "%'";
          }
        $sqlDocument = "SELECT * FROM documentacion WHERE tipo IN (". $placeholders.") OR marca IN (". $placeholders.") OR " . implode(' OR ', $clausulas_like);
    }else{
      //ninguno
      $sqlDocument = ("SELECT * FROM documentacion");
    }
  }
}else{
  $sqlDocument = ("SELECT * FROM documentacion");
}
// genera la consulta
$queryDataDocument   = mysqli_query($con, $sqlDocument);
// Calcula paginaciones
$totalP=  mysqli_num_rows($queryDataDocument);
$queryDataDocument   = mysqli_query($con, $sqlDocument ." LIMIT  $elementsPP OFFSET $offset");
$totalP=ceil($totalP/$elementsPP);

//obtiene lista de tags
$Stags="";
$queryDataDocument2   = mysqli_query($con, "SELECT tag FROM tags");
while ($data = mysqli_fetch_array($queryDataDocument2)) { 
 $Stags= $Stags. "'".$data['tag']."', ";
}
$PFDS=array();
$i=0;
while ($data = mysqli_fetch_array($queryDataDocument)){
  $PFDS[$i]=$data;
  $i++;

}
$con->close();
?>
