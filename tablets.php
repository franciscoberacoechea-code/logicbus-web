<?php 

include_once'cabecera.php';
include_once'nav_in.php';
?>
<style>
    
    
    
  /*    .slider .slides {
         background-color: transparent;
         margin: 0;
         height: 600px;
     }
     
     .slider .slides li img {
         height: 100%;
         width: 100%;
         background-position: center;
         background-size:100% auto;
         background-repeat: no-repeat;
     } */
    .slider .slides li img {
        height: 100%;
         width: 100%;
        background-position: center;
        background-size:100% auto;
        background-repeat: no-repeat;
        
        
       
         background-size: cover;
         
    }
    
    @media only screen and (max-width: 600px) {
          .slides {
            height: 300px !important;
          }
            .slider {
                 height: 300px !important;
            }
        }

@media only screen and (min-width: 600px) {
          .slides {
            height: 590px !important;
          }
            .slider {
                 height: 590px !important;
            }
        }
    
    
    /*.slider{
         padding-top: 0;
         margin-top: 0;
     }*/
     .img {
        margin: auto;
    } 

    /*.con {
        min-height: 579px;
        max-height: 579px;
        box-sizing: border-box;
    }*/

    /*.carousel-item>img {
        width: 500px;
        height: 500px;
        margin: auto;

    }*/

    #imagen {
        max-height: 250px;
        min-height: 250px;

    }

    .card .card Medium {
        border-radius: 7px;
    }

    /* section {
    
        margin: 0;
        min-height: 100vh;
        max-height: inherit;
        <?php include 'conexion.php';
    
        $fon="select * from fondo where estatus = 'A'";
        $fondo_con=mysqli_query($conexion, $fon);
    
        if($row=mysqli_fetch_array($fondo_con)) {
    
            $imagen_fondo=$row['nombre'];
    
    
            //var_dump($imagen_fondo);
    
            ?>background-image: url(images/<?php echo $imagen_fondo; ?>);
            <?php
        }
    
        mysqli_close($conexion);
        ?>background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    } */

   /*  .ban {
        margin: 0;
        max-width: 100%;
        max-height: 400px;
    
    
    } */

    #responsive_text {
        font-size: 19pt;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .justificado {
        text-align: justify;
    }

</style>




<!-- Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
       
        <img src="imagenes/panelpcbanner1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h1>Creative Studio</h1>
          <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis suscipit odio, explicabo sapiente totam nesciunt.</h5>
          <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Learn More</a>
        </div>
      </li>
      <li>
        <img src="imagenes/solutions_Healthcare_banner_08.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Learn More</a>
        </div>
      </li>
      <li>
        <img src="imagenes/military_banner-2018-02.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <a href="#" class="btn btn-large white black-text waves-effect waves-grey">Learn More</a>
        </div>
      </li>

    </ul>
  </section>



  <ul id="slide-out" class="sidenav collapsible">
    <!-- <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li> -->
    <li class="orange white-text">Categorías</li>
    <li><div class="divider"></div></li>
    
    <?php
                    
                    include "conexion.php";
                    
                    $consultacat =" select DISTINCT c.id_categoria, c.nombre as categoria from categorias c join subcategorias sub on c.id_categoria = sub.id_categoria ";

				$res=mysqli_query($conexion,$consultacat);
		
				while( $row = mysqli_fetch_array($res) ) {
                    
                    
                   $Categoria =$row['categoria'];
                     $codificacion = mb_detect_encoding($Categoria, "UTF-8, ISO-8859-1");
                     $Categoria = iconv($codificacion, 'UTF-8', $Categoria );
                    
                     $id_categoria =$row['id_categoria'];
                
                    ?>
                    <!-- <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $Categoria ;?></div>
                        <div class="collapsible-body"><span><?php echo $Subcategoria ;?></span></div>
                        </li> -->

                    <li>
                        <div class="collapsible-header"><i class="material-icons">book</i><?php echo $Categoria ;?></div>
                        <div class="collapsible-body"><span>

                                <!--   subcategoria -->
                                <?php
                    
                    include "conexion.php";
                    
                    $consultacat =" select c.id_categoria, c.nombre as categoria, sub.id_subcategoria ,sub.nombre as subcategoria from categorias c join subcategorias sub on c.id_categoria = sub.id_categoria where c.id_categoria = ' $id_categoria'";

				$resul=mysqli_query($conexion,$consultacat);
		
				while( $row2 = mysqli_fetch_array($resul) ) {
                    
                    
                    
                    
                     $Subcategoria =$row2['subcategoria'];
                    $codificacion = mb_detect_encoding($Subcategoria, "UTF-8, ISO-8859-1");
                     $Subcategoria = iconv($codificacion, 'UTF-8', $Subcategoria );
                
                    ?>
                              
                
                                <div class="collapsible-header subcat" data-subcat="<?php echo $Subcategoria ;?>"  >
                                  <i class="material-icons">bookmark</i><?php echo $Subcategoria ;?>
                                   
                                </div>
                     

                    <?php }?>

                    <!--   fin subcategoria -->




                    
                    </span>
            </div>
            </li>
            <li><div class="divider"></div></li>


            <?php }?>

    
    
    
    
 <!--    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
     
  </ul>
 







    <!-- Boton ver carrito -->
    <div class="social2">
        <ul id="sos">

            <li>
                <a href="login" class="verCarrito">
                    <i class="material-icons left">shopping_cart</i> Ver cotización
                </a>
            </li>


        </ul>

    </div>


<main>


    <div class="section">


        <div class="row">
         <div class="container">
              <div class="input-field col s12 ">

                        <i class="material-icons prefix">pageview</i>
                        <label for="dato">Ingrese la búsqueda</label>
                        <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Escriba su consulta de búsqueda aquí">
                        

                    </div>
         </div>
         
                   
        <div class="col s12 hide-on-large-only center-align ">
           
            <hr>
            <a class="waves-effect waves-light btn sidenav-trigger" data-target="slide-out">
                <i class="material-icons left">filter_list</i> Categorias <i class="material-icons right">collections_bookmark</i>
            </a>
            <hr>
        </div>
        

            <div class="col s12 m12 l3 xl2 hide-on-med-and-down">
                <div class="col s12 orange white-text">
                    <h4 class="center-align"><i class="material-icons">collections_bookmark</i> Categorias</h4>
                </div>
                <ul class="collapsible">

                    <?php
                    
                    include "conexion.php";
                    
                    $consultacat =" select DISTINCT c.id_categoria, c.nombre as categoria from categorias c join subcategorias sub on c.id_categoria = sub.id_categoria where c.id_subdominio = 1 ";

				$res=mysqli_query($conexion,$consultacat);
		          mysqli_close($conexion);
				while( $row = mysqli_fetch_array($res) ) {
                    
                    
                   $Categoria =$row['categoria'];
                     $codificacion = mb_detect_encoding($Categoria, "UTF-8, ISO-8859-1");
                     $Categoria = iconv($codificacion, 'UTF-8', $Categoria );
                    
                     $id_categoria =$row['id_categoria'];
                
                    ?>
                    <!-- <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $Categoria ;?></div>
                        <div class="collapsible-body"><span><?php echo $Subcategoria ;?></span></div>
                        </li> -->

                    <li>
                        <div class="collapsible-header"><i class="material-icons">book</i><?php echo $Categoria ;?></div>
                        <div class="collapsible-body"><span>

                                <!--   subcategoria -->
                                <?php
                    
                    include "conexion.php";
                    
                    $consultacat =" select c.id_categoria, c.nombre as categoria, sub.id_subcategoria ,sub.nombre as subcategoria from categorias c join subcategorias sub on c.id_categoria = sub.id_categoria where c.id_categoria = ' $id_categoria'";

				$resul=mysqli_query($conexion,$consultacat);
		          mysqli_close($conexion);
				while( $row2 = mysqli_fetch_array($resul) ) {
                    
                    
                    
                    
                     $Subcategoria =$row2['subcategoria'];
                    $codificacion = mb_detect_encoding($Subcategoria, "UTF-8, ISO-8859-1");
                     $Subcategoria = iconv($codificacion, 'UTF-8', $Subcategoria );
                
                    ?>
                              
                
                                <div class="collapsible-header subcat" data-subcat="<?php echo $Subcategoria ;?>"  >
                                  <i class="material-icons">bookmark</i><?php echo $Subcategoria ;?>
                                   
                                </div>
                     

                    <?php }?>

                    <!--   fin subcategoria -->




                    
                    </span>
            </div>
            </li>


            <?php }?>


            </ul>
            
            
            
            
            <div class="col s12 orange white-text">
                <h4 class="center-align"><i class="material-icons">straighten</i>TAMAÑO LCD</h4>
            </div>
             <ul class="collapsible">
            
            <?php
                    
                    include "conexion.php";
                    
                    $consultacpu ="select DISTINCT lcd_size from producto where lcd_size != '' and id_subdominio = '1';";

				$resulcpu=mysqli_query($conexion,$consultacpu);
		          mysqli_close($conexion);
				while( $row = mysqli_fetch_array($resulcpu) ) {
                    
                    
                    
                    
                     $lcd_size =$row['lcd_size'];
                    $codificacion = mb_detect_encoding($lcd_size, "UTF-8, ISO-8859-1");
                     $lcd_size = iconv($codificacion, 'UTF-8', $lcd_size );
                
                    ?>
 
            
            
           
            
            
           
                <div class="collapsible-header lcd " data-lcd="<?php echo $lcd_size ;?>"><i class="material-icons">straighten</i><?php
                echo  $lcd_size ;
                ?></div>

            
             <?php }?>
            </ul>
            
            
            
            
            
            
            <div class="col s12 orange white-text">
                <h4 class="center-align"><i class="material-icons">aspect_ratio</i>Resolución</h4>
            </div>
             <ul class="collapsible">
            
            <?php
                    
                    include "conexion.php";
                    
                    $consultaSO ="select DISTINCT resolucion from producto where resolucion != '' and id_subdominio = '1';";

				$resulSO=mysqli_query($conexion,$consultaSO);
		          mysqli_close($conexion);
				while( $row2 = mysqli_fetch_array($resulSO) ) {
                    
                    
                    
                    
                     $resolucion =$row2['resolucion'];
                    $codificacion = mb_detect_encoding($resolucion, "UTF-8, ISO-8859-1");
                     $resolucion = iconv($codificacion, 'UTF-8', $resolucion );
                
                    ?>
 
            
            
           
            
            
           
                <div class="collapsible-header resolucion " data-resolucion="<?php echo $resolucion ;?>"><i class="material-icons">aspect_ratio</i><?php
                echo  $resolucion ;
                ?></div>

            
             <?php }?>
            </ul>
            
            
            
            
            
            
            
            
            <div class="col s12 orange white-text">
                <h4 class="center-align"><i class="material-icons">memory</i>CPU</h4>
            </div>
             <ul class="collapsible">
            
            <?php
                    
                    include "conexion.php";
                    
                    $consultacpu ="select DISTINCT CPU from producto where CPU != '' and id_subdominio = '1';";

				$resulcpu=mysqli_query($conexion,$consultacpu);
		          mysqli_close($conexion);
				while( $row = mysqli_fetch_array($resulcpu) ) {
                    
                    
                    
                    
                     $cpu =$row['CPU'];
                    $codificacion = mb_detect_encoding($cpu, "UTF-8, ISO-8859-1");
                     $cpu = iconv($codificacion, 'UTF-8', $cpu );
                
                    ?>
 
            
            
           
            
            
           
                <div class="collapsible-header cpu " data-cpu="<?php echo $cpu ;?>"><i class="material-icons">memory</i><?php
                echo  $cpu ;
                ?></div>

            
             <?php }?>
            </ul>
            
            
            
            
            
            
            <div class="col s12 orange white-text">
                <h4 class="center-align"><i class="material-icons">android</i>Sistema Operativo</h4>
            </div>
             <ul class="collapsible">
            
            <?php
                    
                    include "conexion.php";
                    
                    $consultaSO ="select DISTINCT sistema_operativo from producto where sistema_operativo != '' and id_subdominio = '1';";

				$resulSO=mysqli_query($conexion,$consultaSO);
		          mysqli_close($conexion);
				while( $row2 = mysqli_fetch_array($resulSO) ) {
                    
                    
                    
                    
                     $sistema_operativo =$row2['sistema_operativo'];
                    $codificacion = mb_detect_encoding($sistema_operativo, "UTF-8, ISO-8859-1");
                     $sistema_operativo = iconv($codificacion, 'UTF-8', $sistema_operativo );
                
                    ?>
 
            
            
           
            
            
           
                <div class="collapsible-header so " data-so="<?php echo $sistema_operativo ;?>"><i class="material-icons">android</i><?php
                echo  $sistema_operativo ;
                ?></div>

            
             <?php }?>
            </ul>
            
            
            
            
            
            <div class="col s12 orange white-text">
                <h4 class="center-align"><i class="material-icons">android</i>RAM</h4>
            </div>
             <ul class="collapsible">
            
            <?php
                    
                    include "conexion.php";
                    
                    $consultaSO ="select DISTINCT ram from producto where ram != '' and id_subdominio = '1';";

				$resulSO=mysqli_query($conexion,$consultaSO);
		          mysqli_close($conexion);
				while( $row2 = mysqli_fetch_array($resulSO) ) {
                    
                    
                    
                    
                     $ram =$row2['ram'];
                    $codificacion = mb_detect_encoding($ram, "UTF-8, ISO-8859-1");
                     $ram = iconv($codificacion, 'UTF-8', $ram );
                
                    ?>
 
            
            
           
            
            
           
                <div class="collapsible-header ram " data-ram="<?php echo $ram ;?>"><i class="material-icons">android</i><?php
                echo  $ram ;
                ?></div>

            
             <?php }?>
            </ul>
            
            
            
                
        </div>

 

                
                
                <div id="dynamic_content" class="col s12 m12 l9 xl10 ">
                   
                   
                   
                    
                </div>
                


            

        
    
    </div><!-- Termina : <div class="section"> -->
    </div>
</main>
    

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
     <script type="text/javascript" src="js/tablets.js"></script> 
     

    <script>
        
        document.addEventListener('DOMContentLoaded', () => {
    
   // Navegation Menu
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems);

   // Slider
   var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {
       indicators: false,
       duration: 500,
       interval:3000
    });

});
        
        
      

    </script>







<?php
    include_once'footer.php';   
    ?>
