<?php
class Basicsdisp {

public function header ($Description){
    echo' 
    <head>
    <!--dependecias para seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="'. $Description .'">
    <!-- dependencias de estilos -->
    <link href="https://www.logicbus.com.mx/landing/demo/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href= "https://www.logicbus.com.mx/landing/demo/assets/bootstrap-icons-1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://www.logicbus.com.mx/landing/demo/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.logicbus.com.mx/landing/demo/assets/css/navbar.css">
    <!--personalizados-->
    <link href="https://www.logicbus.com.mx/landing/demo/assets/css/style.css" rel="stylesheet">
    <!--animaciones-->
    <link href="https://www.logicbus.com.mx/landing/demo/assets/AOS/AOS.css" rel="stylesheet">
    <script src="https://www.logicbus.com.mx/landing/demo/assets/AOS/AOS.js"></script>
    </head>';
    }

public function navbar ($Selector){
echo '
<div class="nav-menu " >
  <div class="container">
      <div class="row" > 
          <div class="col-md-12" >
              <nav class="libNavbar libNavbar-dark libNavbar-expand-lg"  >
              <a class="libNavbar-brand" href="#"><img src="https://www.logicbus.com.mx/landing/demo/images/logo.svg" style="height:3em" class="img-fluid nav-logo" alt="logo"></a>  <button class="libNavbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation" style="outline: 2px solid var(--ComplementaryA);"><i class="bi-justify" style="font-size: 3rem; font-weight: bold; color:white "></i>  </button>
                  <div class="collapse libNavbar-collapse"  style=" align-items: center; align-content: left" id="navbar">
                    <div class="nav-orientation">
                      <ul class="libNavbar-nav " style="list-style-type: none;">';
                      $primero = true;
                      foreach($Selector as $id => $titulo) {
                          if($primero) {
                              echo '<li class="nav-item"> <a class="nav-link" href="#' . $id . '"><span class="sr-only">(current)</span>' . $titulo . '</a> </li>';
                              $primero = false;
                          } else {
                              echo '<li class="nav-item"> <a class="nav-link" href="#' . $id . '">' . $titulo . '</a> </li>';
                          }
                      }   ;
echo'               </ul>
                    </div></div>
              </nav>
          </div>
      </div>
  </div>
</div>
'; }

public function Head ($img,$title,$sub,$id){
echo'
<header class="bg-gradient" style="text-align: center;" >

  <div class="container" id="'.$id.'" style="align-content: center;padding-top: 2em; width: 100%; text-align: center;" >
      <h1><br>'.$title.'</h1>
      <p class="tagline">'.$sub.'</p>
  </div>
  <div class="img-holder"><img src="'.$img.'" data-aos="fade-up"
     data-aos-anchor-placement="top-center" 
     data-aos-easing="linear"
     data-aos-duration="1500"
     style="width:100%; padding-top: 3em;" alt="head" class="img-fluid"></div>
</header>
<!-- fin header-->
';}


public function carrusel($imagenes,$Titulo, $id){
    $pos = $this->colorbg($id);   
echo ' <div class="section light-bg owl-item-responsive " data-aos="fade-'.$pos[1].'" data-aos-anchor-placement="top-center" id="'.$id.'" style="background-color:'.$pos[0].';padding-bottom: 2em; padding-top: 3em; width: 100%;">
<div class="container"  >
    <div class="section-title"style="align-content:center;  text-align:center; padding :1em;">
        <h2>'.$Titulo.'</h2>
    </div>
    <div class="img-gallery owl-carousel owl-theme" >';
    foreach($imagenes as $imagen) {
        $link = $imagen['link'];
        $img = $imagen['imagen'];
        echo '<!-- $imagenes  -->';
      echo '<div class="carousel-container"><a href="'.$link.'"> <img src="'.$img.'" alt="Imagen Carrucel"></a></div>';
            }   ;
echo '</div></div></div>';   
}

public function overview($imagenes,$card,$id){
    $pos = $this->colorbg($id);
// Calculamos el punto medio
$mitad = ceil(count($card) / 2);

// Dividimos el array en dos mitades
$mitad1 = array_slice($card, 0, $mitad);
$mitad2 = array_slice($card, $mitad);
echo '

<section class="module" id="alt-ListCards" style="background-color:'.$pos[0].';">
<div class="container" data-aos="fade-'.$pos[1].'" data-aos-anchor-placement="top-center" id="'.$id.'"  >
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h2 class="module-title font-alt">Caracteristicas</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-3 col-lg-3">';

    foreach ($mitad1 as $item){
        echo '
        <div class="alt-ListCards-item">
        <div class="alt-ListCards-icon"><i class="bi-'.$item['icono'].'" style="font-size: 4rem; color:var(--icon-color)"></i> </div>
        <h3 class="alt-ListCards-title font-alt">'.$item['titulo'].'</h3>'.$item['descripcion'].'
        </div>
        ';
    }


    

echo  ' </div><div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
      <div class="alt-services-image align-center" style="justify-content: center;">
      ';
    
    foreach ($imagenes as $imagen){
        echo'<img src="'.$imagen.'" alt="Feature Image">';
    };
      
echo ' </div>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">';
     
    foreach ($mitad2 as $item){
        echo ' 
        <div class="alt-ListCards-item">
        <div class="alt-ListCards-icon"><i class="bi-'. $item['icono'].'" style="font-size: 4rem; color:var(--icon-color)"></i> </div>
        <h3 class="alt-ListCards-title font-alt">'. $item['titulo'].'</h3>'. $item['descripcion'].'
        </div>';
    }

echo    '</div>
  </div>
</div>
</section>
';

}
public function card_list($card,$titulo,$id){
    $pos = $this->colorbg($id);
echo'
<div data-aos="fade-'.$pos[1].'" style="background-color:'.$pos[0].'; padding: 8em; padding-top: 3em;" id="'.$id.'">
  <div>
      <div style="align-content:center;  text-align:center; padding :1em;">
         
          <h3>'.$titulo.'</h3>
      </div>
      <div class="row">';

    foreach($card as $item){

echo '
<div class="col-12 col-lg-4">
              <div class="card ListCards">
                  <div class="card-bodyList">
                      <div class="media-list">
                        <i class="bi-'.$item['icono'].'"style="font-size:4rem; color:var(--icon-color)">&nbsp</i>
                          <div class="media-body-list">
                              <h4 class="card-title">'.$item['titulo'].'</h4>
                              <p class="card-text">'.$item['descripcion'].'</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
';

    }
echo'      </div>

  </div>
</div>';
}

public function card_button_R($titulo,$descripcion,$link,$img,$id){
    $pos = $this->colorbg($id);
echo '

<div style="padding-bottom: 2em; padding-top: 3em ; background-color:'.$pos[0].';" id="'.$id.'">

  <div class="container" data-aos="fade-'.$pos[1].'" data-aos-anchor-placement="top-center" >
      <div class="row">
          <div class="col-md-6">
            <img src="'.$img.'" alt="card-buton iamge">
       
          </div>
          <div class="col-md-6 d-flex align-items-center">
              <div>
                <i class="bi bi-car-front-fill"style="font-size:9rem; color:var(--icon-color)"></i></div>
                  <h3>'.$titulo.'</h3><br>
                  <p class="mb-4">'.$descripcion.'</p>
                  <a href="'.$link.'" style="--color:var(--ComplementaryB);--border:3px;--slant:.5em" class="listButton">see more</a>
          </div>
      </div>

  </div>

</div>
';
}

public function card_button_L($titulo,$descripcion,$link,$img,$id){
    $pos = $this->colorbg($id);
echo '
<div style="padding-bottom: 2em; padding-top: 3em ; background-color:'.$pos[0].';" id="'.$id.'">

  <div class="container" data-aos="fade-'.$pos[1].'" data-aos-anchor-placement="top-center" >
      <div class="row">

          <div class="col-md-6 d-flex align-items-end" style="text-align: right;" >
              <div>
                <i class="bi bi-car-front-fill"style="font-size:9rem; color:var(--icon-color)"></i></div>
                  <h3>'.$titulo.'</h3><br>
                  <p class="mb-4">'.$descripcion.'</p>
                  <a href="'.$link.'" style="--color:var(--ComplementaryB);--border:3px;--slant:.5em" class="listButton">see more</a>
          </div>
          <div class="col-md-6">
          <img src="'.$img.'" alt="card-buton iamge">
          </div>
      </div>

  </div>

</div>
';
}



public function circle_list($content, $imagenes,$id){
    $pos = $this->colorbg($id);
echo '
<div style="background-color:'.$pos[0].'; padding-top: 3em; padding-bottom: 2em; width: 100%;" id="'.$id.'"><!--MRVolt was here-->

  <div class="container" data-aos="fade-right" data-aos-anchor-placement="top-center" >
      <div class="row">
          <div class="col-md-8 d-flex align-items-center">
              <ul class="list-unstyled ui-steps">';
              foreach($content as $item){
echo'
<li class="media-list">
<div class="circle-icon mr-4">'.$item['dentro'].'</div>
<div class="media-body-list" style="padding-left: 1em;">
    <h4>'.$item['titulo'].'</h4>
    <p>'.$item['descripcion'].'</p>
</div>
</li>
';

              }
              
echo '             </ul>
          </div>
          <div class="col-md-4">';
        foreach($imagenes as $item){
            echo' <img src="'.$item.'" alt="image circular list">';
        }
echo' 
          </div>

      </div>

  </div>
</div>
';    
}

public function tabla($head,$list,$id){
$pos = $this->colorbg($id);
echo '
<div id="'.$id.'" style=" width:100%; padding: 1em;  padding-top: 3em; padding-bottom: 2em; background-color:'.$pos[0].'; align-content: center;" data-aos="fade-'.$pos[1].'" data-aos-anchor-placement="top-center" >
<table class="tablelist">
	<thead>
		<tr>';


        foreach($head as $item){
            echo '<th><h1> '.$item.'</h1></th>';
        };

echo '
		</tr>
	</thead>
	<tbody>';
    foreach($list as $item){
        echo '<tr>'; 
        foreach($item as $subitem){
        echo '<td>'.$subitem.'</td>';    
        } 
        echo'</tr>';        
    }

        
echo '
	</tbody>
</table>
</div>
';
    
}

public function footer($id){
echo '

<div class="light-bg py-5" id="'.$id.'" style=" background-color:var(--Primary-light); padding-top: 6em; padding-bottom: 4em;">
  <div class="container">
      <div class="row">
        <div class="col-lg-3 text-lg-left">  
          <div class="text-center " >
            <img src="images/logo.svg" class=" logofooter" />
             </div>
      </div>
          <div class="col-lg-6 text-center text-lg-left">
            <p><i class="bi-geo-fill" style="font-size: 2.5rem; color:var(--icon-color)"></i><a href="tel:51836362800">1485 Pacific St, Brooklyn, NY 11216 USA518-3636-2800USA518-3636-</a>
              <div class=" d-sm-inline-block">
                  <p class="mb-0">
                    <i class="bi-mailbox2-flag" style="font-size: 2.5rem; color:var(--icon-color); padding-right:1em;"></i>   <a class="mr-4" href="mailto:support@mobileapp.com">support@mobileapp.com</a>
                  </p>
                  <p class="mb-0">
                    <i class="bi-whatsapp" style="font-size: 2.5rem; color:var(--icon-color); padding-right:1em;"></i><a href="tel:51836362800">518-3636-2800</a>
                  </p>
              </div>
              <div class=" d-sm-inline-block">
                  <p class="mb-0">
                    <i class="bi-phone-fill" style="font-size: 2.5rem; color:var(--icon-color); padding-right:1em;"></i><a href="tel:51836362800">518-3636-2800</a>
                  </p>
                  <p class="mb-0">
                    <i class="bi-whatsapp" style="font-size: 2.5rem; color:var(--icon-color); padding-right:1em;"></i><a href="tel:51836362800">518-3636-2800</a>
                  </p>
                 
              </div>
          </div>
          <div class="col-lg-3"> 
              <div class="social-icons" style = "text-align: center;">
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="Facebook"><i class="bi-facebook" style="font-size: 4rem; color:var(--icon-color)"></i></a>
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="Twitter X"><i class="bi-twitter-x" style="font-size: 4rem; color:var(--icon-color)"></i></a>
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="Instagram"><i class="bi-instagram" style="font-size: 4rem; color:var(--icon-color)"></i></a>
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="linkedin"><i class="bi-linkedin" style="font-size: 4rem; color:var(--icon-color)"></i></a>
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="youtube"><i class="bi-youtube" style="font-size: 4rem; color:var(--icon-color)"></i></a>
                  <a href="https://michalsnik.github.io/aos/" rel="nofollow" aria-label="tiktok"><i class="bi-tiktok" style="font-size: 4rem; color:var(--icon-color)"></i></a>
              </div>
          </div>
      </div>
      <div class="row" style="padding-top: 10px;">
        <div class="col-lg-6 text-center">
            <span>  <a href="aviso-privacidad">Aviso de Privacidad</a> |
              <a href="Terminos-y-Condiciones-ep-2-1">Términos y Condiciones</a>
            </span>
        </div>
        <div class="col-lg-6 text-center" style="color: black">
          <span>Derechos de Autor
            <script type="text/javascript" language="javascript">
            var date = new Date();
            document.write(date.getFullYear())
            </script>
            Logicbus. Todos los Derechos Reservados.
          </span>
        </div>
      </div>
      </div>

  </div>

</div>
';
    
}

private function colorbg($id){
    if($id%2==0){
        $var= array("var(--Primary-light)","right"); 
    }else{
        $var=array ("white","left"); 
    }

    return $var ;
}

}


?>