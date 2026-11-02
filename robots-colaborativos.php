<?php require("admin/config.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
include("libreria/libreria.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Descubre robots colaborativos ideales para automatizar tareas junto a operarios de forma segura. Soluciones flexibles, precisas y fáciles de integrar. ¡Envío a todo México!">
    <meta name="keywords"
        content="Robots colaborativos, Cobot, Automatización colaborativa, Colaboración humano-robot, Robótica colaborativa, Aplicaciones cobot, Seguridad colaborativa, Eficiencia en la producción, Integración humano-robot, Cobots industriales, Robótica de colaboración segura, Colaboración en la fabricación, Cobots en la industria, Robótica colaborativa avanzada, Tecnología de colaboración robot-humano">
    <title>Robots Colaborativos | Automatización Segura y Flexible – Logicbus México</title>
    
    <?php echo $favicon; ?>
    <?php echo $boostrap_css; ?>
    <?php echo $own_file_css; ?>
    <?php echo $subcategorias; ?>
    <?php echo $menu; ?>
    <?php echo $estilos; ?>
    <?php echo $footer_css; ?>
    <?php echo $google_analytics; ?>
    <?php echo $var_headers; ?>
    <?php echo $aos_css; ?>
    <?php echo $aos_js; ?>
    <?php echo $carrusel_productos; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
    <style>
        .buttonTT {
            width: 20px;
            height: 20px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: gray;
            border: 2px solid #fff;
            border-radius: 50%;
            position: absolute;
            cursor: pointer;
            animation: pulse 1s ease infinite alternate;
        }

        .tooltipCn {
            position: absolute;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            top: 0px;
            left: 250px;
            width: 300px;
        }

        @media (max-width: 768px) {
            .tooltipCn {
                top: 50px;
                left: 50px;
            }
        }
    </style>
</head>

<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    
    <!-- Banner principal-->
    <div class="container-fluid">
        <div class="row">
            <video autoplay muted loop width="100%" poster="https://www.logicbus.com.mx/assets/videos/robots-colaborativos.webp">
                <source src="https://www.logicbus.com.mx/banners/videobanner/robots-colaborativos.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-10">
                <p class="paragraph light-black m-5">
                    En la vanguardia de la industria 4.0, los robots colaborativos están transformando la forma en que
                    trabajamos. Estos innovadores compañeros de trabajo, conocidos como cobots, están diseñados para
                    colaborar de forma segura y eficiente con los humanos en entornos industriales.
                </p>
                <p class="paragraph light-black m-5">
                    Desde cobots SCARA que ofrecen precisión milimétrica hasta brazos cobots que combinan flexibilidad y
                    versatilidad, nuestra gama de soluciones está diseñada para satisfacer las demandas más exigentes de
                    la industria moderna.
                </p>
            </div>
        </div>
        <div class="container-fluid d-flex flex-wrap justify-content-center my-5">
            <a class="button-text" href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-colaborativos" target="_blank">
                <button class="button button-white">Ver en Tienda MX</button>
            </a>
            <a class="button-text" href="#cobots">
                <button class="button button-white">Brazos COBOTS</button>
            </a>
            <a class="button-text" href="#scara">
                <button class="button button-white">Robots SCARA</button>
            </a>
            <a class="button-text" href="#articulos">
                <button class="button button-white">Artículos</button>
            </a>
            <a class="button-text" href="#videos">
                <button class="button button-white">Videos</button>
            </a>
            <a class="button-text" href="#doc">
                <button class="button button-white">Guías y Manuales</button>
            </a>
        </div>
        
        <div class="container my-5" id="cobots">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">Brazos COBOTS</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <p class="paragraph light-black" style="text-align: justify;">
                        Los brazos robóticos colaborativos, también conocidos como brazos cobots, son robots diseñados para ejecutar tareas en entornos donde se requiere interacción directa con humanos, eliminando la necesidad de delimitar espacios físicos o instalar barreras de seguridad. Estos robots están programados para trabajar de forma segura junto a las personas, mejorando la eficiencia y flexibilidad en el lugar de trabajo.
                    </p>
                    <a class="button-text" href="https://api.whatsapp.com/send?phone=525554316718&text=Me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20acerca%20de%20los%20cobots">
                        <button class="button button-circle-orange">Más información</button>
                    </a>
                </div>
                <div class="col-8 col-md-4 text-center">
                    <div id="lottie-animation" class="img-fluid"></div>
                </div>
            </div>

            <div class="m-4">
                <h2 class="subtitle blue p-4 text-center">¿Qué diferencía un brazo cobot de un robot industrial de tipo brazo?</h2>
                <div class="iconos row mt-2 d-flex justify-content-around align-items-center">
                    <div class="col-4 col-md-2 d-flex flex-column align-items-center text-center" onclick="changeText(event, 'consultoria')">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0">
                            <defs>
                                <clipPath id="e5852372ae">
                                    <path d="M 34.433594 0 L 340.433594 0 L 340.433594 375 L 34.433594 375 Z M 34.433594 0 " clip-rule="nonzero" />
                                </clipPath>
                            </defs>
                            <rect x="-37.5" width="450" fill="none" y="-37.499999" height="449.999989" fill-opacity="1" />
                            <g clip-path="url(#e5852372ae)">
                                <path fill="#22527a" d="M 161.429688 219.890625 L 246.21875 135.019531 C 246.660156 134.597656 247.136719 134.222656 247.644531 133.890625 C 248.15625 133.558594 248.695312 133.28125 249.261719 133.054688 C 249.824219 132.824219 250.40625 132.652344 251.003906 132.535156 C 251.601562 132.417969 252.203125 132.359375 252.8125 132.355469 C 253.421875 132.355469 254.027344 132.410156 254.625 132.523438 C 255.222656 132.636719 255.804688 132.808594 256.371094 133.03125 C 256.9375 133.257812 257.476562 133.53125 257.992188 133.859375 C 258.503906 134.1875 258.980469 134.5625 259.425781 134.980469 C 259.859375 135.414062 260.246094 135.882812 260.585938 136.394531 C 260.929688 136.902344 261.214844 137.441406 261.453125 138.007812 C 261.6875 138.570312 261.867188 139.15625 261.988281 139.757812 C 262.109375 140.355469 262.167969 140.964844 262.171875 141.578125 C 262.171875 142.191406 262.117188 142.796875 261.996094 143.398438 C 261.878906 144 261.707031 144.585938 261.472656 145.152344 C 261.242188 145.71875 260.957031 146.257812 260.617188 146.769531 C 260.28125 147.28125 259.894531 147.753906 259.464844 148.1875 L 166.964844 240.777344 C 166.09375 241.65625 165.085938 242.335938 163.941406 242.8125 C 162.796875 243.289062 161.605469 243.527344 160.367188 243.527344 L 160.335938 243.527344 C 159.101562 243.53125 157.917969 243.296875 156.777344 242.828125 C 155.636719 242.359375 154.632812 241.6875 153.761719 240.816406 C 153.382812 240.4375 153.039062 240.03125 152.730469 239.59375 L 114.636719 194.320312 C 114.273438 193.824219 113.960938 193.296875 113.703125 192.738281 C 113.441406 192.179688 113.238281 191.601562 113.09375 191 C 112.949219 190.402344 112.863281 189.792969 112.835938 189.179688 C 112.8125 188.5625 112.847656 187.949219 112.945312 187.339844 C 113.039062 186.730469 113.195312 186.136719 113.410156 185.558594 C 113.625 184.980469 113.890625 184.429688 114.214844 183.90625 C 114.539062 183.378906 114.910156 182.890625 115.328125 182.441406 C 115.75 181.988281 116.207031 181.582031 116.707031 181.222656 C 117.207031 180.859375 117.738281 180.554688 118.300781 180.296875 C 118.859375 180.042969 119.441406 179.84375 120.042969 179.703125 C 120.644531 179.5625 121.25 179.484375 121.867188 179.460938 C 122.484375 179.441406 123.09375 179.484375 123.703125 179.585938 C 124.3125 179.6875 124.902344 179.84375 125.480469 180.0625 C 126.058594 180.28125 126.605469 180.554688 127.128906 180.882812 C 127.652344 181.210938 128.136719 181.585938 128.585938 182.007812 C 129.03125 182.433594 129.433594 182.894531 129.792969 183.398438 Z M 340.117188 212.894531 C 340.347656 240.707031 324.183594 273.523438 294.605469 305.289062 C 281.859375 318.945312 267.898438 331.21875 252.726562 342.109375 L 252.074219 342.535156 C 251.804688 342.683594 251.554688 342.859375 251.320312 343.0625 L 250.703125 343.554688 C 232.625 356.601562 213.070312 366.824219 192.042969 374.226562 L 189.382812 375.109375 L 186.703125 374.269531 C 180.300781 372.226562 174.027344 369.855469 167.875 367.148438 C 167.496094 366.953125 167.105469 366.78125 166.703125 366.628906 L 166.179688 366.410156 C 150.605469 359.167969 135.828125 350.554688 121.851562 340.578125 C 107.871094 330.597656 94.925781 319.417969 83.015625 307.042969 C 70.417969 294.210938 59.648438 279.996094 50.707031 264.394531 L 50.378906 263.742188 C 50.238281 263.449219 50.074219 263.171875 49.882812 262.910156 L 49.523438 262.308594 C 45.398438 255.15625 42.191406 247.617188 39.898438 239.6875 C 37.605469 231.757812 36.296875 223.667969 35.96875 215.421875 L 34.875 81.628906 L 35.527344 81.273438 L 186.257812 0 L 186.839844 0.300781 L 339.003906 79.15625 Z M 321.8125 89.707031 L 186.4375 19.585938 L 52.273438 91.917969 L 53.292969 215.285156 C 53.613281 222.066406 54.730469 228.714844 56.644531 235.230469 C 58.5625 241.746094 61.222656 247.941406 64.625 253.816406 C 65.140625 254.609375 65.597656 255.4375 66.003906 256.292969 C 74.191406 270.457031 84.015625 283.375 95.484375 295.046875 C 106.589844 306.589844 118.65625 317.023438 131.683594 326.34375 C 144.714844 335.664062 158.484375 343.714844 172.996094 350.496094 C 173.773438 350.78125 174.527344 351.113281 175.265625 351.484375 C 179.886719 353.464844 184.730469 355.347656 189.222656 356.863281 C 207.5 350.070312 224.554688 340.984375 240.390625 329.609375 C 241.199219 328.941406 242.050781 328.339844 242.945312 327.796875 C 257.058594 317.632812 270.050781 306.191406 281.917969 293.480469 C 308.472656 264.964844 322.980469 236.386719 322.792969 213.019531 Z M 321.8125 89.707031 " fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <p class="paragraph blue font-weight-bold text-center">PROGRAMACIÓN FÁCIL</p>
                    </div>

                    <div class="col-4 col-md-2 d-flex flex-column align-items-center text-center" onClick="changeText(event, 'capacitaciones')">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0">
                            <defs>
                                <clipPath id="575e4bc185">
                                    <path d="M 127.78125 56.25 L 374.800781 56.25 L 374.800781 318.75 L 127.78125 318.75 Z M 127.78125 56.25 " clip-rule="nonzero" />
                                </clipPath>
                            </defs>
                            <rect x="-37.5" width="450" fill="none" y="-37.499999" height="449.999989" fill-opacity="1" />
                            <g clip-path="url(#575e4bc185)">
                                <path fill="#22527a" d="M 364.480469 136.410156 C 357.871094 120.78125 348.410156 106.746094 336.359375 94.691406 C 324.304688 82.640625 310.269531 73.175781 294.640625 66.566406 C 278.453125 59.722656 261.265625 56.25 243.550781 56.25 C 222.367188 56.25 201.3125 61.417969 182.675781 71.191406 C 179.382812 72.921875 178.113281 76.992188 179.839844 80.285156 C 181.566406 83.578125 185.636719 84.847656 188.929688 83.121094 C 205.648438 74.355469 224.535156 69.71875 243.550781 69.71875 C 308.492188 69.71875 361.332031 122.554688 361.332031 187.5 C 361.332031 252.445312 308.492188 305.28125 243.550781 305.28125 C 200.796875 305.28125 161.320312 282.039062 140.527344 244.628906 C 138.71875 241.378906 134.617188 240.210938 131.367188 242.015625 C 128.117188 243.824219 126.945312 247.921875 128.753906 251.171875 C 139.9375 271.292969 156.28125 288.203125 176.027344 300.070312 C 196.355469 312.289062 219.707031 318.75 243.550781 318.75 C 261.265625 318.75 278.453125 315.277344 294.640625 308.433594 C 310.269531 301.824219 324.304688 292.359375 336.359375 280.308594 C 348.410156 268.253906 357.871094 254.21875 364.480469 238.589844 C 371.328125 222.402344 374.800781 205.214844 374.800781 187.5 C 374.800781 169.785156 371.328125 152.59375 364.480469 136.410156 " fill-opacity="1" fill-rule="nonzero" />
                            </g>
                            <path fill="#22527a" d="M 243.550781 275.347656 C 220.085938 275.347656 198.023438 266.210938 181.433594 249.617188 C 178.800781 246.988281 174.535156 246.988281 171.90625 249.617188 C 169.277344 252.25 169.277344 256.511719 171.90625 259.140625 C 191.042969 278.28125 216.488281 288.820312 243.550781 288.820312 C 270.613281 288.820312 296.054688 278.28125 315.195312 259.140625 C 334.328125 240.007812 344.867188 214.5625 344.867188 187.5 C 344.867188 160.4375 334.328125 134.992188 315.195312 115.855469 C 296.054688 96.71875 270.613281 86.179688 243.550781 86.179688 C 239.828125 86.179688 236.816406 89.199219 236.816406 92.914062 C 236.816406 96.636719 239.828125 99.652344 243.550781 99.652344 C 267.015625 99.652344 289.078125 108.789062 305.667969 125.382812 C 322.261719 141.976562 331.398438 164.035156 331.398438 187.5 C 331.398438 210.964844 322.261719 233.023438 305.671875 249.617188 C 289.074219 266.210938 267.015625 275.347656 243.550781 275.347656 " fill-opacity="1" fill-rule="nonzero" />
                            <path fill="#22527a" d="M 79.46875 109.828125 L 178.152344 109.828125 C 181.867188 109.828125 184.882812 106.8125 184.882812 103.09375 C 184.882812 99.375 181.867188 96.359375 178.152344 96.359375 L 79.46875 96.359375 C 75.75 96.359375 72.734375 99.375 72.734375 103.09375 C 72.734375 106.8125 75.75 109.828125 79.46875 109.828125 " fill-opacity="1" fill-rule="nonzero" />
                            <path fill="#22527a" d="M 43.203125 156.144531 L 141.882812 156.144531 C 145.605469 156.144531 148.621094 153.132812 148.621094 149.414062 C 148.621094 145.691406 145.605469 142.679688 141.882812 142.679688 L 43.203125 142.679688 C 39.484375 142.679688 36.46875 145.691406 36.46875 149.414062 C 36.46875 153.132812 39.484375 156.144531 43.203125 156.144531 " fill-opacity="1" fill-rule="nonzero" />
                            <path fill="#22527a" d="M 183.511719 233.796875 C 184.816406 235.710938 186.929688 236.738281 189.082031 236.738281 C 190.386719 236.738281 191.710938 236.359375 192.871094 235.566406 L 255.148438 193.0625 C 256.988281 191.808594 258.085938 189.726562 258.085938 187.5 L 258.085938 128.535156 C 258.085938 124.816406 255.074219 121.800781 251.351562 121.800781 C 247.632812 121.800781 244.617188 124.816406 244.617188 128.535156 L 244.617188 183.941406 L 185.277344 224.441406 C 182.203125 226.535156 181.414062 230.726562 183.511719 233.796875 " fill-opacity="1" fill-rule="nonzero" />
                        </svg>
                        <p class="paragraph blue font-weight-bold text-center">INSTALACIÓN RÁPIDA</p>
                    </div>
                    <div class="col-4 col-md-2 d-flex flex-column align-items-center text-center" onClick="changeText(event, 'soporte')">
                        <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0">
                            <defs>
                                <clipPath id="1401dd48b4">
                                    <path d="M 7.265625 117 L 173 117 L 173 258 L 7.265625 258 Z M 7.265625 117 " clip-rule="nonzero" />
                                </clipPath>
                            </defs>
                            <rect x="-37.5" width="450" fill="none" y="-37.499999" height="449.999989" fill-opacity="1" />
                            <path fill="#22527a" d="M 366.128906 183.742188 L 298.949219 118.53125 C 297.421875 117.046875 295.191406 116.652344 293.269531 117.484375 C 291.300781 118.3125 290.078125 120.191406 290.078125 122.332031 L 290.078125 162.457031 C 257.78125 164.859375 227.449219 178.800781 204.457031 201.792969 C 178.847656 227.402344 164.730469 261.449219 164.730469 297.640625 L 164.730469 369.753906 C 164.730469 372.640625 167.089844 375 169.972656 375 C 172.859375 375 175.21875 372.640625 175.21875 369.753906 L 175.21875 297.640625 C 175.21875 264.25 188.242188 232.824219 211.84375 209.179688 C 234.222656 186.800781 263.941406 173.820312 295.5 172.640625 C 298.339844 172.550781 300.566406 170.234375 300.566406 167.394531 L 300.566406 134.703125 L 354.984375 187.5 L 300.523438 240.296875 L 300.523438 207.867188 C 300.523438 206.425781 299.914062 205.027344 298.863281 204.066406 C 297.816406 203.101562 296.417969 202.578125 294.972656 202.621094 C 270.714844 203.933594 248.121094 214.421875 231.292969 232.125 C 214.421875 249.867188 205.113281 273.121094 205.113281 297.597656 L 205.113281 369.710938 C 205.113281 372.597656 207.472656 374.957031 210.359375 374.957031 C 213.242188 374.957031 215.601562 372.597656 215.601562 369.710938 L 215.601562 297.597656 C 215.601562 254.457031 247.464844 218.664062 290.035156 213.59375 L 290.035156 252.710938 C 290.035156 254.808594 291.300781 256.730469 293.226562 257.5625 C 295.148438 258.390625 297.421875 257.953125 298.90625 256.511719 L 366.082031 191.300781 C 367.089844 190.339844 367.65625 188.941406 367.65625 187.542969 C 367.699219 186.101562 367.132812 184.746094 366.128906 183.742188 Z M 366.128906 183.742188 " fill-opacity="1" fill-rule="nonzero" />
                            <g clip-path="url(#1401dd48b4)">
                                <path fill="#22527a" d="M 79.5 172.640625 C 111.058594 173.820312 140.777344 186.800781 163.15625 209.179688 C 165.210938 211.234375 168.53125 211.234375 170.585938 209.179688 C 172.640625 207.125 172.640625 203.800781 170.585938 201.75 C 147.597656 178.757812 117.265625 164.816406 84.964844 162.414062 L 84.964844 122.289062 C 84.964844 120.191406 83.699219 118.269531 81.773438 117.4375 C 79.851562 116.609375 77.578125 117.046875 76.09375 118.488281 L 8.871094 183.742188 C 7.867188 184.703125 7.300781 186.101562 7.300781 187.5 C 7.300781 188.898438 7.867188 190.296875 8.871094 191.257812 L 76.050781 256.46875 C 77.054688 257.429688 78.320312 257.953125 79.71875 257.953125 C 80.417969 257.953125 81.117188 257.824219 81.773438 257.5625 C 83.742188 256.730469 84.964844 254.851562 84.964844 252.710938 L 84.964844 213.59375 C 111.144531 216.78125 134.617188 232.210938 147.988281 255.246094 C 148.6875 256.46875 149.824219 257.34375 151.179688 257.691406 C 152.535156 258.042969 153.933594 257.867188 155.15625 257.167969 C 157.648438 255.726562 158.523438 252.492188 157.035156 250 C 140.820312 222.117188 112.019531 204.414062 79.984375 202.667969 C 78.539062 202.578125 77.140625 203.101562 76.09375 204.109375 C 75.042969 205.113281 74.433594 206.46875 74.433594 207.910156 L 74.433594 240.339844 L 20.0625 187.5 L 74.476562 134.703125 L 74.476562 167.394531 C 74.433594 170.234375 76.660156 172.507812 79.5 172.640625 Z M 79.5 172.640625 " fill-opacity="1" fill-rule="nonzero" />
                            </g>
                            <path fill="#22527a" d="M 123.820312 77.621094 L 164.683594 77.621094 L 164.683594 180.8125 C 164.683594 183.699219 167.046875 186.058594 169.929688 186.058594 C 172.816406 186.058594 175.175781 183.699219 175.175781 180.8125 L 175.175781 72.378906 C 175.175781 69.492188 172.816406 67.132812 169.929688 67.132812 L 136.234375 67.132812 L 189.03125 12.71875 L 241.828125 67.132812 L 207.824219 67.132812 C 204.9375 67.132812 202.578125 69.492188 202.578125 72.378906 L 202.578125 180.8125 C 202.578125 183.699219 204.9375 186.058594 207.824219 186.058594 C 210.707031 186.058594 213.066406 183.699219 213.066406 180.8125 L 213.066406 77.621094 L 254.238281 77.621094 C 256.335938 77.621094 258.261719 76.355469 259.089844 74.433594 C 259.921875 72.507812 259.484375 70.234375 258.042969 68.75 L 192.789062 1.574219 C 191.828125 0.566406 190.429688 0 189.03125 0 C 187.632812 0 186.234375 0.566406 185.269531 1.574219 L 120.0625 68.75 C 118.574219 70.28125 118.183594 72.507812 119.011719 74.433594 C 119.84375 76.398438 121.722656 77.621094 123.820312 77.621094 Z M 123.820312 77.621094 " fill-opacity="1" fill-rule="nonzero" />
                        </svg>
                        <p class="paragraph blue font-weight-bold text-center">FLEXIBILIDAD</p>
                    </div>
                    <div class="col-4 col-md-2 d-flex flex-column align-items-center text-center" onClick="changeText(event, 'noticias')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-fluid" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0">
                            <rect x="-37.5" width="450" fill="none" y="-37.499999" height="449.999989" fill-opacity="1" />
                            <path fill="#22527a" d="M 187.488281 296.53125 C 172.769531 296.53125 158.503906 293.644531 145.058594 287.957031 C 132.066406 282.472656 120.417969 274.601562 110.410156 264.589844 C 100.398438 254.582031 92.550781 242.933594 87.042969 229.941406 C 81.355469 216.496094 78.46875 202.207031 78.46875 187.511719 C 78.46875 172.8125 81.355469 158.527344 87.042969 145.082031 C 92.527344 132.089844 100.398438 120.441406 110.410156 110.433594 C 120.417969 100.421875 132.066406 92.574219 145.058594 87.066406 C 158.503906 81.378906 172.792969 78.488281 187.488281 78.488281 C 202.1875 78.488281 216.472656 81.378906 229.917969 87.066406 C 242.910156 92.550781 254.558594 100.421875 264.566406 110.433594 C 274.578125 120.441406 282.425781 132.089844 287.933594 145.082031 C 293.621094 158.527344 296.511719 172.8125 296.511719 187.511719 C 296.511719 202.207031 293.621094 216.496094 287.933594 229.941406 C 282.449219 242.933594 274.578125 254.582031 264.566406 264.589844 C 254.558594 274.601562 242.910156 282.449219 229.917969 287.957031 C 216.472656 293.644531 202.207031 296.53125 187.488281 296.53125 Z M 187.488281 97.054688 C 137.617188 97.054688 97.03125 137.640625 97.03125 187.511719 C 97.03125 237.382812 137.617188 277.96875 187.488281 277.96875 C 237.359375 277.96875 277.945312 237.382812 277.945312 187.511719 C 277.945312 137.640625 237.359375 97.054688 187.488281 97.054688 Z M 187.488281 97.054688 " fill-opacity="1" fill-rule="nonzero" />
                            <path fill="#22527a" d="M 168.171875 240.976562 C 165.808594 240.976562 163.417969 240.066406 161.597656 238.246094 L 132.703125 209.351562 C 129.085938 205.734375 129.085938 199.84375 132.703125 196.226562 C 136.320312 192.609375 142.214844 192.609375 145.832031 196.226562 L 168.171875 218.566406 L 233.945312 152.792969 C 237.5625 149.175781 243.457031 149.175781 247.074219 152.792969 C 250.691406 156.410156 250.691406 162.304688 247.074219 165.921875 L 174.726562 238.246094 C 172.929688 240.066406 170.539062 240.976562 168.171875 240.976562 Z M 168.171875 240.976562 " fill-opacity="1" fill-rule="nonzero" />
                            <path fill="#22527a" d="M 208.964844 374.976562 L 166.011719 374.976562 C 162.074219 374.976562 158.574219 372.496094 157.253906 368.8125 L 142.921875 328.542969 L 119.257812 318.738281 L 80.652344 337.097656 C 77.101562 338.78125 72.871094 338.054688 70.09375 335.277344 L 39.699219 304.882812 C 36.925781 302.105469 36.195312 297.875 37.878906 294.324219 L 56.238281 255.71875 L 46.433594 232.058594 L 6.164062 217.722656 C 2.457031 216.40625 0 212.902344 0 208.964844 L 0 166.035156 C 0 162.097656 2.480469 158.59375 6.164062 157.277344 L 46.433594 142.941406 L 56.238281 119.28125 L 37.878906 80.675781 C 36.195312 77.125 36.925781 72.894531 39.699219 70.117188 L 70.09375 39.722656 C 72.871094 36.945312 77.101562 36.21875 80.652344 37.902344 L 119.257812 56.261719 L 142.921875 46.457031 L 157.253906 6.1875 C 158.574219 2.480469 162.074219 0.0234375 166.011719 0.0234375 L 208.988281 0.0234375 C 212.925781 0.0234375 216.425781 2.503906 217.746094 6.1875 L 232.078125 46.457031 L 255.742188 56.261719 L 294.347656 37.902344 C 297.898438 36.21875 302.128906 36.945312 304.90625 39.722656 L 335.300781 70.117188 C 338.074219 72.894531 338.804688 77.125 337.121094 80.675781 L 318.761719 119.28125 L 328.566406 142.941406 L 368.835938 157.277344 C 372.542969 158.59375 375 162.097656 375 166.035156 L 375 209.011719 C 375 212.945312 372.519531 216.449219 368.835938 217.769531 L 328.566406 232.101562 L 318.761719 255.761719 L 337.121094 294.371094 C 338.804688 297.921875 338.074219 302.152344 335.300781 304.929688 L 304.90625 335.324219 C 302.128906 338.097656 297.898438 338.828125 294.347656 337.144531 L 255.742188 318.78125 L 232.078125 328.589844 L 217.746094 368.855469 C 216.40625 372.496094 212.902344 374.976562 208.964844 374.976562 Z M 172.5625 356.414062 L 202.4375 356.414062 L 215.949219 318.417969 C 216.835938 315.9375 218.726562 313.960938 221.136719 312.957031 L 252.417969 300.011719 C 254.851562 299.011719 257.582031 299.082031 259.949219 300.195312 L 296.375 317.507812 L 317.484375 296.394531 L 300.171875 259.972656 C 299.035156 257.605469 298.96875 254.851562 299.992188 252.441406 L 312.9375 221.160156 C 313.9375 218.726562 315.9375 216.835938 318.394531 215.972656 L 356.390625 202.457031 L 356.390625 172.585938 L 318.394531 159.074219 C 315.917969 158.1875 313.9375 156.296875 312.9375 153.886719 L 299.992188 122.605469 C 298.988281 120.167969 299.058594 117.4375 300.171875 115.074219 L 317.484375 78.648438 L 296.375 57.535156 L 259.949219 74.851562 C 257.582031 75.988281 254.832031 76.054688 252.417969 75.03125 L 221.136719 62.085938 C 218.703125 61.085938 216.8125 59.105469 215.949219 56.625 L 202.4375 18.632812 L 172.5625 18.632812 L 159.050781 56.625 C 158.164062 59.105469 156.273438 61.085938 153.863281 62.085938 L 122.582031 75.03125 C 120.148438 76.03125 117.417969 75.964844 115.050781 74.851562 L 78.625 57.535156 L 57.515625 78.648438 L 74.828125 115.074219 C 75.964844 117.4375 76.03125 120.191406 75.007812 122.605469 L 62.0625 153.886719 C 61.0625 156.320312 59.082031 158.207031 56.605469 159.074219 L 18.609375 172.585938 L 18.609375 202.457031 L 56.605469 215.972656 C 59.082031 216.859375 61.0625 218.75 62.0625 221.160156 L 75.007812 252.441406 C 76.011719 254.875 75.941406 257.605469 74.828125 259.972656 L 57.515625 296.394531 L 78.625 317.507812 L 115.050781 300.195312 C 117.417969 299.058594 120.167969 298.988281 122.582031 300.011719 L 153.863281 312.957031 C 156.296875 313.960938 158.1875 315.960938 159.050781 318.417969 Z M 172.5625 356.414062 " fill-opacity="1" fill-rule="nonzero" />
                        </svg>
                        <p class="paragraph blue font-weight-bold text-center">SEGURIDAD</p>
                    </div>
                    <p class="paragraph text-center">Las interfaces de programación en los cobots suelen ser mucho más
                        sencillas que en los robots industriales convencionales. Estos últimos suelen requerir de un
                        nivel de conocimiento en la programación avanzado, junto con un conocimiento y dominio amplio en
                        el área de la automatiación industrial.</p>
                </div>
            </div>
        </div>
        
        <div class="container my-5" id="scara">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">Robots SCARA</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <p class="paragraph light-black" style="text-align: justify;">Por sus siglas en inglés, SCARA
                        significa Selective Compliance Articulated Robot Arm, que traducido al español sería Brazo
                        Robótico Articulado de Cumplimiento Selectivo. Estos robots son una opción popular en
                        aplicaciones industriales de ensamblaje de piezas debido a su capacidad para manipular piezas
                        pequeñas y cargas ligeras con una precisión excepcional. <br>
                        Su diseño articulado les permite moverse en un plano horizontal con gran precisión y velocidad,
                        lo que los hace ideales para tareas de ensamblaje que requieren movimientos repetitivos y
                        consistentes.</p>
                    <a class="button-text" href="https://api.whatsapp.com/send?phone=525554316718&text=Me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20acerca%20de%20los%20robots%20SCARA">
                        <button class="button button-circle-orange">Más información</button>
                    </a>
                </div>

                <div class="col-8 col-md-4 text-center scara">
                    <img src="https://www.logicbus.com.mx/imagenes/iconos/scara.png" width="400px" alt="">
                    <div class="buttonTT" id="buttonTT1" style="top: 290px; left: 240px;"></div>
                    <div class="buttonTT" id="buttonTT2" style="top: 360px; left: 240px;"></div>
                    <div class="buttonTT" id="buttonTT3" style="top: 250px; left: 150px;"></div>
                    <div class="buttonTT" id="buttonTT4" style="top: 210px; left: 190px;"></div>

                    <div class="tooltipCn d-none" id="tooltipCn1">
                        <h4>Effector final (End-effector):</h4>
                        <p class="paragraph"> Herramienta o dispositivo en el extremo del brazo que interactúa con los
                            objetos (puede ser una pinza, soldador, etc.).</p>
                    </div>
                    <div class="tooltipCn d-none" id="tooltipCn2">
                        <h4>Base:</h4>
                        <p class="paragraph"> Soporte del robot que suele estar fijo.</p>
                    </div>
                    <div class="tooltipCn d-none" id="tooltipCn3">
                        <h4>Motores y actuadores:</h4>
                        <p class="paragraph"> Dispositivos que impulsan el movimiento de los brazos.</p>
                    </div>
                    <div class="tooltipCn d-none" id="tooltipCn4">
                        <h4>Articulaciones (joints):</h4>
                        <p class="paragraph">Conexiones entre los segmentos del brazo que permiten rotación y flexión.</p>
                    </div>
                </div>
            </div>
            <div class="m-4">
                <h2 class="subtitle blue p-4 text-center">Entre los factores a tener en cuenta para seleccionar el Robot
                    SCARA en su aplicación</h2>
                <div class="iconos row mt-2 d-flex justify-content-around align-items-center">
                    
                </div>
            </div>
        </div>

        <div class="industrias">
            <div class="container my-5">
                <h4 class="title blue p-2 h1">INDUSTRIAS</h4>
                <div class="cards-industries d-flex flex-wrap justify-content-center text-center">
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/aeronautica.jpg" class="card-img" alt="Aeronáutica">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Aeronáutica</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/agricultura.jpg" class="card-img" alt="Agricultura">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Agricultura</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/alimentos-y-bebidas.jpg" class="card-img" alt="Alimentos y Bebidas">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Alimentos y Bebidas</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/automotriz.jpg" class="card-img" alt="Automotriz">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Automotriz</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/construccion.jpg" class="card-img" alt="Construcción">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Construcción</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/industria-electronica.jpg" class="card-img" alt="Electrónica">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Electrónica</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/industria-energetica.jpg" class="card-img" alt="Energética">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Energética</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/farmaceutica.jpg" class="card-img" alt="Farmacéutica y Laboratorio">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Farmacéutica y Laboratorio</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/investigacion.jpg" class="card-img" alt="Academia e investigación">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Academia e investigación</h5>
                            </div>
                        </a>
                    </div>
                    <div class="card card-industry">
                        <a class="text-white disabled" href="">
                            <img src="https://www.logicbus.com.mx/assets/industrias/industria-transporte.jpg" class="card-img" alt="Transporte">
                            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Transporte</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-12 text-center">
        <div class="container my-5" id="doc">
            <h2 class="subtitle text-center orange-text py-1 rounded-pill">Guías y Manuales</h2>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <a href="https://www.logicbus.com.mx/documentos?clave=&tagArray%5B%5D=siasun">
            <div class="hoverchange">
                <img src="images/documentacion.svg" width="200px" class="mx-auto d-block" alt="img docs">
                <button class="button button-circle-white d-flex"><b> Documentación</b></button>
            </div>
        </a>
    </div>

  <!--Contacto-->
  <div class="section-blue text-center py-5" id="contacto">
    <div class="container mb-5">
      <h2 class="title white text-uppercase">conoce más sobre NUESTRAS SOLUCIONES</h2>
      <span class="paragraph white">Estamos aquí para ayudarle a encontrar las mejores soluciones para su
        proyecto.</span>
    </div>
    <!-- BEGIN Odoo web form -->
    <div class="container">
      <div class="card shadow-lg border-0" style="border-radius: 20px; overflow: hidden;">
        <iframe src="https://tienda.logicbus.mx/atencion-a-clientes" frameborder="0" allowfullscreen
          style="width:100%; min-height:1200px; border:0;">
        </iframe>
      </div>
    </div>
    <!-- END Odoo web form -->
  </div>
    
    <script>
        var animation = lottie.loadAnimation({
            container: document.getElementById('lottie-animation'),
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: 'https://www.logicbus.com.mx/imagenes/254/siasunV1.json'
        });

        var container = document.getElementById('lottie-animation');
        container.style.transform = 'scale(2.0)';
        container.style.transformOrigin = 'center';
        animation.setSpeed(3);

        var isReversing = false;

        animation.addEventListener('complete', function () {
            if (isReversing) {
                animation.setDirection(1);
            } else {
                animation.setDirection(-1);
            }
            isReversing = !isReversing;
            animation.play();
        });
    </script>
    <script>
        var buttons = document.querySelectorAll('.buttonTT');
        var tooltipCns = document.querySelectorAll('.tooltipCn');

        buttons.forEach(function (button, index) {
            button.addEventListener('mouseenter', function () {
                tooltipCns[index].className = 'd-block tooltipCn';
            });
            button.addEventListener('mouseleave', function () {
                tooltipCns[index].className = 'd-none tooltipCn';
            });
        });
    </script>

    <?php require("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $popper_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
</body>
<?php echo $var_footer; ?>

</html>