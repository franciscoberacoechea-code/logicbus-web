<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">
<style>
    .card {cursor: pointer;max-width: 300px;}
    .card img {max-width: 100%;height: auto;}
    .card .card-title small {font-size: 14px;color: #666;}
    .card-details {display: none;transition: all 0.3s ease-in-out;}
    .card.show .card-details {display: block;}
    .hov{ position: relative; bottom: 1.5em;} 
    .card-I{transition: transform .5s;}
    .card-I img{border-radius: 25px;width: 90%;max-width: 500px;}
    .card-I > div {border-radius: 3em;position: relative;background-color: var(--white);border: 2px solid var(--orange);color:var(--blue);font-weight: 700;width: 90%;max-width: 300px;height: 3em;bottom:1.5em;}
    .card-I:hover {transform: scale(1.07); }
    .card-i:hover .align-middle {transform: scale(1.2);transition: transform .2s;border: 3px solid var(--orange);}
    .card-d img{width: 90%;max-width: 400px;margin: 0 auto; transition: transform .5s;}
    .card-d:hover {transform: scale(1.07); transition: transform .5s;}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-31533636-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-1007518778');
    </script>
    <title>Robots Autónomos | LG Business
    </title>
    <meta name="description" content="Descubre los robots autónomos de servicio CLOi de LG. Innovación y eficiencia con robots autónomos diseñados para mejorar la atención y optimizar operaciones en diversos entornos.">
    <meta name="keywords" content="Logicbus,Mexico, Guadalajara, Argentina, Chile, Brasil, Automatizacion, Consultoria, Aguascalientes, Baja California, Baja California Sur, Campeche, Chiapas, Chihuahua, Coahuila, Colima, Distrito Federal, Durango, Guanajuato, Guerrero, Hidalgo, Jalisco, Estado de Mexico, Michoacan, Morelos, Nayarit, Nuevo Leon, Oaxaca, Puebla, Queretaro, Quintana Roo, San Luis Potosi, Sinaloa, Sonora, Tabasco, Tamaulipas, Tlaxcala, Veracruz, Yucatan, Zacatecas, celdas de carga, sensores de torque, sensores de presión, sensores multi ejes, instrumentos, software para sensores, prueba y medición, sensores, medica especializada, automotriz, manufacturera, alimenticia, robótica y aeroespacial">
    <!--- Estilos Necesarios-->
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>

</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>

    <div id="main" >
        <div id="subir">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-5">
                    <li class="breadcrumb-item"><a href="productos" class="blue link-orange">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">LG</li>
                </ol>
            </nav>
            <div class=" m-4">
                <video style="width: 100%; height: auto;" autoplay muted loop poster="imagenes/327/bannerlg.png">
                    <source src="https://www.logicbus.com.mx/assets/videos/LG.mp4" type="video/mp4">
                </video>
            </div>
            <h1 class="title blue text-center pt-4"> Soluciones Robóticas para las Necesidades Cotidianas </h1>
            <div class="d-flex justify-content-center"> 
            <div class="container text-center m-3 pb-3 ">
            <p >LG está revolucionando la manera en que interactuamos con la tecnología 
                a través de sus innovadoras soluciones robóticas. Diseñadas para satisfacer las necesidades
                cotidianas de hogares y empresas, las soluciones robóticas de LG combinan lo último en 
                inteligencia artificial y automatización para ofrecer eficiencia, comodidad y precisión
                inigualables.</p>

                <p >Explora cómo LG está transformando tareas diarias y procesos industriales 
                con productos que no solo mejoran la productividad, sino que también elevan la calidad de vida.
                Desde robots de limpieza avanzados hasta asistentes robóticos inteligentes, las soluciones de 
                LG están aquí para facilitar la vida y ayudar a centrarse en lo que realmente importa.</p>
            </div>
            </div>
            <center>
                <div class=" m-4 align-center">
                    <video  style="width: 90%; height: auto;" autoplay muted loop poster="imagenes/327/minibanner.jpg">
                        <source src="imagenes/327/CLOi-Guidebot.mp4" type="video/mp4">
                    </video>
                </div>
            </center>

            <nav class="navMenuSuper">
                <ul>
                <!--  <li><a href="https://tienda.logicbus.com.mx/futek" target="_blank">Ver en Tienda</a></li-->
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#industrias">Industrias</a></li>
                    <li><a href="#Catalogos">Catalogos</a></li>
                    <li><a href="#videos">Videos</a></li>
                </ul>
            </nav>
        </div>

        <br>
        <center>
            <div class="seccion" id="productos">
                <div class="col-center">
                    <h2><span>PRODUCTOS</span></h2>
                </div>
            </div>
        </center>

<div class="container-flex px-4 pb-5">
<div class="pb-3  px-md-5">
    <div class="carousel align-middle" 
    data-flickity='{ 
    "lazyLoad": 12, "autoPlay": 4000, 
    "wrapAround": true , 
    "pageDots": false, 
    "Friction": 0.03
    }' 
    tabindex='0'>

        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLTR30.png" class="card-img-top" alt="LDLTR30">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi ServeBot (LDLTR30)<br><br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-ServeBot-LDLTR30_p_37067.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a-->
                        </div>
                    </div>
        </div>
                
        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/RSCGD20.png" class="card-img-top" alt="RSCGD20">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi GuideBot (RSCGD20)<br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-GuideBot-RSCGD20_p_37068.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a>-->
                        </div>
                    </div>
        </div>
                
        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLAXBT10.png" class="card-img-top" alt="LDLAXBT10">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CarryBot (LDLAXBT10)<br><br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXBT10_p_37070.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a>-->
                        </div>
                    </div>
        </div>

        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLAXWT10.png" class="card-img-top" alt="LDLAXWT10">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi CarryBot (LDLAXWT10)<br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXWT10_p_37071.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!--<a href="#" class="btn btn-orange text-center">comparar</a>-->
                        </div>
                    </div>
        </div>

        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLAXRO10.png" class="card-img-top" alt="LDLAXRO10">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLoi CarryBot (LDLAXRO10)<br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXRO10_p_37072.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a>-->
                        </div>
                    </div>
        </div>
                
        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLAXVT10.png" class="card-img-top" alt="LDLAXVT10">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi CarryBot (LDLAXVT10)<br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-CarryBot-LDLAXVT10_p_37073.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!--<a href="#" class="btn btn-orange text-center">comparar</a>-->
                        </div>
                    </div>
        </div>
                
        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLIM10.png" class="card-img-top" alt="LDLIM10">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi ServeBot (LDLIM10)<br><br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-ServeBot-LDLIM10_p_37074.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a-->
                        </div>
                    </div>
        </div>
                
        <div class="carousel-cell novedades-carousel-cell">
                    <div class="card">
                        <img src="imagenes/327/LDLIM21.png" class="card-img-top" alt="LDLIM21">
                        <div class="card-body rounded text-center">
                            <h5 class="card-title text-center">CLOi ServeBot (LDLIM21)<br><br><br></h5>
                                <a href="https://tienda.logicbus.com.mx/CLOi-ServeBot-LDLIM21_p_37075.html" class="btn btn-orange text-center">Ver modelo</a>
                                <!-- <a href="#" class="btn btn-orange text-center">comparar</a-->
                        </div>
                    </div>
        </div>


        
    </div>
</div>
</div>

        <section>
            <div class="container-fluid pt-4">
                <h1 class="title blue text-center">Soluciones AMR de CLOi CarryBots</h1>
                    <div class="row ">
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center px-5">
                            <img src="imagenes/327/carrybot.png" class="img-fluid " alt="carrybot">
                            <a class="button-text hov" href="https://www.logicbus.com.mx/contacto">
                                <button class="button button-circle-orange" >Cotiza ahora</button>
                            </a>
                        </div>
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                            <div class="text-justify p-4">
                                <p>CLOi CarryBots son robots móviles autónomos (AMR) utilizados en la automatización de la gestión de almacenes. Estos AMR vienen en dos modelos: tipo de montaje y tipo rolltainer. Estos robots apoyan la operación eficiente del almacén mediante el uso de un algoritmo de conducción junto con el Sistema de Gestión de Flotas (FMS), que permite a los AMR establecer la ruta más rápida hacia el destino. Los CarryBots también cuentan con un Sistema de Control de Materiales (MCS) que optimiza la distribución y programación de pedidos, y un Sistema de Gestión de Robots (RMS) que proporciona información sobre los robots.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <h1 class="title blue text-center">CLOi ServeBot 3.0</h1>
                    <div class="row ">
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                            <div class="text-justify p-4">
                                <p>El CLOi ServeBot 3.0 es un avanzado robot de servicio diseñado por LG para mejorar la eficiencia en entornos comerciales y hospitalarios. Equipado con navegación autónoma y una interfaz intuitiva, este robot es capaz de entregar alimentos, medicamentos y otros artículos directamente a los destinatarios. Su diseño compacto y su capacidad de evitar obstáculos lo hacen ideal para operar en espacios concurridos, proporcionando un servicio confiable y eficiente.</p>
                            </div>
                        </div>
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <video  style="width: 90%; height: auto;" autoplay muted loop poster="imagenes/327/www/vid-servebot.jpg">
                            <source src="imagenes/327/cloi-servebot-03.webm" type="video/webm">
                        </video>
                            <a class="button-text hov" href="https://www.logicbus.com.mx/contacto">
                                <button           class="button button-circle-orange" >Cotiza ahora</button>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <h1 class="title blue text-center">CLOi GuideBot </h1>
                    <div class="row ">
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center px-5">
                            <img src="imagenes/327/guidebot.png" class="img-fluid" alt="guidebot">
                            <a class="button-text hov" href="https://www.logicbus.com.mx/contacto">
                                <button class="button button-circle-orange" >Cotiza ahora</button>
                            </a>
                        </div>
                        <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center bg-transparent">
                            <div class="text-justify p-4">
                                <p class="fs-2">El CLOi GuideBot de LG es un robot guía avanzado diseñado para asistir a visitantes en entornos como centros comerciales, aeropuertos y museos. Equipado con capacidades de navegación autónoma y una pantalla interactiva, el GuideBot proporciona direcciones, información y asistencia en tiempo real. Su diseño intuitivo y amigable permite una interacción fácil y eficiente, mejorando la experiencia del usuario y optimizando el flujo de visitantes en diversos espacios públicos.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <center>
            <div class="seccion mb-5" id="industrias">
                <div class="col-center">
                    <h2><span>INDUSTRIAS</span></h2>
                </div>
            </div>
        </center>    

<div class="container-flex">
    
<div class="d-flex justify-content-center">
    <div class="container row d-flex justify-content-around">
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Almacenamiento.webp" alt="Almacenamiento">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Almacenamiento </p>
            </div>
        </div>      
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Industria-Hotelera.webp" alt="Hotelera">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Industría Hotelera</p>
            </div>
        </div>  
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Restaurantera.webp" alt="Restaurantera">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Industría Restaurantera </p>
            </div>
        </div>  
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Comercio-minorista.webp" alt="Comercio-minorista">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Comercio minorista </p>
            </div>
        </div>  
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Salud.png" alt="Salud">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Salud </p>
            </div>
        </div>  
        <div class="col-md-6 card-I text-center">
            <img src="imagenes/327/Educacion.webp" alt="Educacion">
            <div class="container-flex d-flex justify-content-center align-middle" style="margin:0 auto" >
                <p style="margin: auto">Educación </p>
            </div>
        </div>  
  
</div>
</div>
<center>
    <div class="seccion mt-5" id="Catalogos">
        <div class="col-center">
            <h2><span>CATALOGOS</span></h2>
        </div>
    </div>
</center>   
<div class="container-flex pt-4"> 
<div class="container pb-5">
    <div class="container-flex row  d-flex justify-content-around">
        <div class="col-sm-4 card-d">
            <a href="#">
            <img  src="imagenes/327/CLOi_Guidebot.png" alt="Guidebot pdf"></a>
        </div>
        <div class="col-sm-4 card-d">
            <a href="#">
            <img  src="imagenes/327/CLOi_ServeBot.png" alt="ServeBot pdf"></a>
        </div>
        <div class="col-sm-4 card-d">
            <a href="#">
            <img  src="imagenes/327/CLOi_CarryBot.png" alt="CarryBot"></a>
        </div>
    </div>
</div>
</div>

<center>
    <div class="seccion mt-5" id="videos">
        <div class="col-center">
            <h2><span>VIDEOS</span></h2>
        </div>
    </div>
</center>   

<div class="container-flex  pb-5"> 
<div class="container">
    <div class="container-flex row  d-flex justify-content-around">
        <div class="col-md-6 card-d">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Z-ZzkqWYV0Y?si=gc00620DKRNdft-K" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
        <div class="col-md-6 card-d">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/BY2bbq-HnYQ?si=D79veCuvaURly3W7" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>

    </div>
</div>
</div>

<div class="container-fluid  p-md-5 px-0 py-4  text-center section-blue text-white">
<h1>¿NECESITAS MÁS INFORMACIÓN?</h1>
<h2 class="  p-md-5 px-1 py-4 m-3">¡Contáctanos hoy mismo y descubre como podemos colaborar en tu próximo proyecto!</h2>

<iframe src="https://forms.zohopublic.com/logicbus/form/Cotizaceldasdecarga/formperma/8rsqmbeOkmLbDEXYW7qsDuSP4Fd0oAGsfIFRJY6GUJ0?zf_rszfm=1"class="biframe"   ></iframe>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


<?php require("libreria/footer.view.php"); ?>
<?php echo $jquery_js; ?>
<?php echo $bootstrap_js; ?>
<?php echo $popper_js; ?>
<?php echo $own_file_js; ?>
<?php echo $flickity_js; ?>

</body>
<?php echo $var_footer; ?>

</html>