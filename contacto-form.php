<style>
   .i{
        min-height:  500px;
        max-height: auto;
        
    }
    .ima{
        width: 100%;
       max-height: 300px;
        
    }
    p{
              text-align: justify;
              font-size: 20px;
              color: #212121;
          }
    section{
         
         margin: 0;
         min-height: 100vh;
         max-height: inherit;
         /*<?php 
                    include 'conexion.php';
                
                $fon = "select * from fondo where estatus = 'A'";
                $fondo_con = mysqli_query($conexion, $fon);
                
                if($row = mysqli_fetch_array($fondo_con) ){
                    
                    $imagen_fondo = $row['nombre'];
                    
                
                //var_dump($imagen_fondo);
                
                ?>
         background-image: url(images/<?php echo $imagen_fondo; ?>);
         <?php } 
         mysqli_close($conexion);
         ?>*/
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
     }
    .a{
        background-color: #fff;
    }
    .QR{
        max-width: 100px;
        max-height: 100px;
        
        
    }
</style>
<div class="section  i "> 
<div class="container row s12 a z-depth-3 ">
                  
                  <div id="test-swipe-0" class="col s12  ">
                      <h4 class="center-align ">Atención a Clientes</h4>
                      <div class="divider"></div>
                      <div class="col s12 l12  center-align  ">
            <!--  FORMULARIO DECONTACTO  -->

           

            <form method="POST" action="enviar_prueva.php" name="miformulario"  enctype="multipart/form-data"> 
                <div class="input-field">
                    <i class="material-icons prefix">perm_identity</i>
                    <label for="nombre">Nombre completo</label>
                    <input type="text" name="nombre" required onkeypress="return soloLetras(event)">
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="correo" required>
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="Error" data-success="Correcto">Coloca un correo valido</span>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">call</i>
                    <input id="last_name" type="text" class="validate" name="telefono" maxlength="15" onKeyPress="return soloNumeros(event)" >
                    <label for="last_name">Teléfono de contacto</label>
                    <span class="helper-text">Indique su numero telefónico de contacto, si tiene extension favor de indicarla. </span>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">domain</i>
                    <input id="empresa" type="text" class="validate" name="empresa" onkeypress="return soloLetras(event)">
                    <label for="empresa">Empresa</label>

                </div>


            <!-- FIN FORMULARIO DECONTACTO  -->
        </div>
                  
                  
                  </div>
                  

                  
                  
                  
                  
                  
    </div> 
                  
                  
                  
                  
                  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     <script>

    document.addEventListener('DOMContentLoaded', function () {
         var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems);
        
        
        var instance = M.Tabs.init(el);


    });

  </script>
    