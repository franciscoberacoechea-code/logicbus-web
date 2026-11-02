<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Explora nuestra gama de servomotores de alta calidad en Logicbus. Descubre nuestra selección de servomotores con tecnología de vanguardia y visualiza modelos en 3D para comprender mejor su funcionamiento. Encuentra el servomotor perfecto para tus aplicaciones industriales aquí, al mejor precio y con la mejor calidad.">
    <meta name="keywords"
        content="servomotores, servos, motores, control de movimiento, tecnología de servomotores, automatización industrial, 3D, calidad, precio, Logicbus, StepSERV, StepSERVODrives, HT23-SS4DGA, NEMA 23">
    <title>Servomotores de Alta Calidad - Logicbus S.A de C.V</title>
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $flickity_css; ?>
    <?php echo $google_analytics; ?>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js"></script>
    <style>
    model-viewer {
        display: block;
        width: 70%;
        height: 500px;
    }
    </style>

</head>

<body>
    <?php require("libreria/header.view.php"); ?>
    <!-- El visor de modelo 3D -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <img src="images/banner/www/PorMarca/BANNER-APPLIED-MOTION-ABR23.jpg" alt="Applied Motion Banner"
                        width="100%">
                </div>
                <h1 class="subtitle blue">Motores integrados StepSERVO</h1>
                <p class="paragraph">Los motores integrados StepSERVO de Applied Motion son una solución
                    de control de movimiento
                    de alto rendimiento que combina un motor paso a paso, un controlador digital y un codificador en un
                    solo dispositivo. Con un diseño compacto y una alta densidad de potencia, estos motores son ideales
                    para aplicaciones de automatización industrial que requieren un control de movimiento preciso y
                    confiable.</p>
                <p class="paragraph">
                    Observe mediante el visor 3D el modelo HT23-SS4DGA de la serie StepSERVO de Applied Motion, un motor
                    integrado de alto rendimiento con un diseño compacto y una alta densidad de potencia. Este motor
                    integrado es ideal para aplicaciones de automatización industrial que requieren un control de
                    movimiento preciso y confiable.
                </p>
            </div>

            <div class="row">
                <div class="col-6 justify-content-center">
                    <!-- <model-viewer id="blendViewer" camera-controls touch-action="pan-y" ar
                        src="https://www.logicbus.com.mx/imagenes/278/Modelos-3D/HT23SS4DGA_3D.gltf" alt="Modelo 3D">
                        <effect-composer render-mode="quality" msaa="8">
                            <color-grade-effect contrast="0.5" saturation="-1" opacity="1" blend-mode="default">
                            </color-grade-effect>
                        </effect-composer>
                    </model-viewer> -->

                    <!-- <div class="controls">
        <label for="opacity">Opacidad</label>
        <input id="opacity" type="range" min="0" max="1" step="0.01" value="1">
        <label for="blend-mode">Modo de Mezcla:</label>
        <select id="blend-mode">
            <option value="default">Por Defecto</option>
            <option value="skip">Saltar</option>
            <option value="add">Sumar</option>
            <option value="subtract">Restar</option>
            <option value="divide">Dividir</option>
            <option value="negation">Negación</option>
        </select>
    </div> -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card mb-3 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS2DGB.jpg"
                                                alt="HT23-SS2DGB" class="img-fluid rounded-start">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <h5 class="card-title">Producto 1</h5>
                                                    <hr>
                                                    <p class="card-text">Descripción del producto 1.</p>
                                                </div>
                                                <div class="card-text">
                                                    <h6>Características:</h6>
                                                    <ul>
                                                        <li>Característica 1</li>
                                                        <li>Característica 2</li>
                                                        <li>Característica 3</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS3DGB.jpg"
                                                alt="HT23-SS3DGB" class="img-fluid rounded-start">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <h5 class="card-title">Producto 2</h5>
                                                    <hr>
                                                    <p class="card-text">Descripción del producto 2.</p>
                                                </div>
                                                <div class="card-text">
                                                    <h6>Características:</h6>
                                                    <ul>
                                                        <li>Característica 1</li>
                                                        <li>Característica 2</li>
                                                        <li>Característica 3</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS4DGA.jpg"
                                                alt="HT23-SS4DGA" class="img-fluid rounded-start">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <h5 class="card-title">Producto 3</h5>
                                                    <hr>
                                                    <p class="card-text">Descripción del producto 3.</p>
                                                </div>
                                                <div class="card-text">
                                                    <h6>Características:</h6>
                                                    <ul>
                                                        <li>Característica 1</li>
                                                        <li>Característica 2</li>
                                                        <li>Característica 3</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display:grid; place-items: center;">
                        <div class="otros-productos">
                            <h2 class="subtitle blue">Otros productos de la serie StepSERVO Nema 23</h2>
                            <div class="carousel"
                                data-flickity='{ "groupCells": true, "autoPlay": true, "wrapAround": true }'>
                                <div class="carousel-cell">
                                    <a href="https://tienda.logicbus.com.mx/HT23-SS2DGB_p_23671.html">
                                        <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS2DGB.jpg"
                                            alt="HT23-SS2DGB" width="100%">
                                    </a>
                                </div>
                                <div class="carousel-cell">
                                    <a href="https://tienda.logicbus.com.mx/HT23-SS3DGB_p_23672.html">
                                        <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS3DGB.jpg"
                                            alt="HT23-SS3DGB" width="100%">
                                    </a>
                                </div>
                                <div class="carousel-cell">
                                    <a href="https://tienda.logicbus.com.mx/HT23-SS4DGA_p_23675.html">
                                        <img src="https://tienda.logicbus.com.mx/cdn-cgi/image/quality%3D85%2Cformat%3Dwebp/assets/images/278/HT23-SS4DGA.jpg"
                                            alt="HT23-SS4DGA" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script type="module">
                const blendViewer = document.querySelector("model-viewer#blendViewer");
                const blendEffect = blendViewer.querySelector('color-grade-effect');
                const opacity = blendViewer.querySelector('#opacity');
                const mode = blendViewer.querySelector('#blend-mode');

                opacity.addEventListener('input', (e) => blendEffect.opacity = e.target.value);
                mode.addEventListener('change', (e) => blendEffect.blendMode = e.target.value);
                </script>
                <?php require("libreria/footer.view.php"); ?>
                <?php echo $jquery_js; ?>
                <?php echo $own_file_js; ?>
                <?php echo $flickity_js; ?>

</body>

</html>