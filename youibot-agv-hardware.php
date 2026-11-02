<?php
require("admin/config.php");
include("libreria/libreria.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html lang="es">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31533636-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-31533636-1");
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 1007518778 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007518778"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "AW-1007518778");
    </script>

    <title>YOUIBOT - Marca Exclusiva - Logicbus S.A de C.V</title>

    <meta name="description"
        content="Es una empresa innovadora de alta tecnología centrada en la investigación, el desarrollo y la fabricación de robots. Tiene un algoritmo central de robot móvil con derechos de propiedad intelectual completamente independientes." />

    <!-- Resto de tus metadatos aquí -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <link rel="stylesheet" href="libreria/AOS.css" />
    <script src="libreria/AOS.js"></script>
    <style>
        .col-center span {
            font-size: 1.3em !important;

        }

        .introduccion {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            text-align: justify;
            font-size: 20px;
            line-height: 1.5;
        }

        .videos {
            display: inline-flex;
        }

        .ocultar {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            text-align: justify;
            font-size: 20px;
            line-height: 1.5;
        }

        /* Estilos para el carrusel */
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        .carousel-caption h3 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .carousel-caption p {
            font-size: 18px;
            color: #fff;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: gray;
            /* Cambia el color de los íconos a rojo */
        }

        #title {
            font-size: 35px !important;
        }

        #index5 {
            background: url(https://youibot.usa18.wondercdn.com/public/static/images/home/en-us/index5img1.png) no-repeat center;
            background-size: cover;
            height: 400px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .producto {
            width: 30%;
            text-align: center;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .carousel-item img {
            transform: scale(1);
            /* Establece la escala a 1 (sin zoom) */
            transition: transform 0.4s ease-in-out;
            /* Agrega una transición suave */
        }

        * {
            box-sizing: border-box;
        }

        h1 {
            font-weight: normal;
        }

        a {
            text-decoration: none;
            font-weight: bold;
            background: linear-gradient(135deg,
                    rgba(43, 171, 217, 1) 0%,
                    rgba(0, 130, 200, 1) 100%);
            -webkit-background-clip: text;
            color: transparent;
        }

        html,
        body {
            font-family: "Montserrat", Arial;
        }

        .card2 {
            min-width: 400px;
            max-width: 1170px;
            width: 30%;
            padding: 2.6em 3.8em;
            /* top: 50%;
        left: 40%; */
        }

        .note::after {
            content: "";
            width: 20%;
            height: 2px;
            border-radius: 999px;
            background-color: #afafaf;
            background: linear-gradient(135deg,
                    rgba(43, 171, 217, 1) 0%,
                    rgba(0, 130, 200, 1) 100%);
            position: absolute;
            top: -1.8em;
            left: 0;
        }

        .note {
            font-size: 0.8em;
            color: #8a8a8a;
            position: relative;
            margin-top: 4em;
        }

        .scroller {

            height: 1.2em;
            line-height: 1.2em;
            position: relative;
            overflow: hidden;
            display: block;

        }

        .scroller>span {
            position: absolute;
            top: 0;
            animation: slide2 10s infinite;
            font-weight: bold;
            box-sizing: border-box;
        }

        @keyframes slide2 {

            0%,
            15.33% {
                top: 0;
            }

            15.33%,
            25% {
                top: -1.2em;
            }

            25%,
            45.66% {
                top: -2.4em;
            }

            45.66%,
            58.33% {
                top: -3.6em;
            }

            58.33%,
            70% {
                top: -4.8em;
            }

            70%,
            90.66% {
                top: -6em;
            }

            90.66%,
            100% {
                top: -7.2em;
            }
        }






        .index6 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border: 1px solid #ddd;
            margin: 2%;
            padding: 10px;
            border-radius: 10px;
            overflow: hidden;
            max-width: 600px;
            width: 100%;
        }

        .image-container {
            flex: 1;
            margin-right: 20px;
            overflow: hidden;
            border-radius: 8px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .text-content {
            flex: 2;
        }

        h3 {
            color: #333;
        }

        p {
            color: #555;
        }

        .video-container {
            margin: 20px 0;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .video {
            width: 100%;
        }

        .podio-webform-container {
            max-width: 100%;
            margin: auto;
        }

        @media (max-width: 600px) {
            .index6 {
                width: 90%;
                margin-left: 5% !important;
                margin-right: 5% !important;
                grid-template-columns: none;
                grid-template-rows: 1fr 1fr;
            }

            .carta {
                width: 200px !important;
                height: auto;
            }
        }

        @media (max-width: 768px) {
            .podio-webform-container {
                padding: 10px;
            }
        }

        @keyframes slide {
            0% {
                top: 0;
            }

            25% {
                top: -1.2em;
            }

            50% {
                top: -2.4em;
            }

            75% {
                top: -3.6em;
            }
        }

        /* Animation property */
        #animatedImage {
            animation: wiggle 2s linear infinite;
        }

        /* Keyframes */
        @keyframes wiggle {

            0%,
            7% {
                transform: rotateZ(0);
            }

            15% {
                transform: rotateZ(-15deg);
            }

            20% {
                transform: rotateZ(10deg);
            }

            25% {
                transform: rotateZ(-10deg);
            }

            30% {
                transform: rotateZ(6deg);
            }

            35% {
                transform: rotateZ(-4deg);
            }

            40%,
            100% {
                transform: rotateZ(0);
            }
        }

        .parte1:hover {
            background-image: url("imagenes/281/l1000.png");
            background-repeat: no-repeat;
        }

        .contenedor-principal {
            position: relative;
            width: 972px !important;
            height: 536px !important;
            /* min-height: 110vh; */
            background-image: url("imagenes/281/p200-hardware.png");
            background-repeat: no-repeat;
            background-size: contain;
            /* Cambia a 'contain' */
            background-position: center;
            /* Opcional: ajuste para centrar la imagen */
        }

        .area {
            position: absolute;
            background-color: rgba(255, 255, 255, 0);
            /* Fondo transparente por defecto */
            transition: background-color 0.3s ease;
        }

        .area1 {
            top: 70px;
            left: 110px;
            width: 90px;
            height: 90px;
            border: 4px solid red;
        }

        .area2 {
            top: 50px;
            left: 410px;
            width: 150px;
            height: 45px;
            border: 4px solid yellow;
        }

        .area3 {
            top: 450px;
            left: 400px;
            width: 150px;
            height: 45px;
            border: 4px solid yellow;
        }

        .area4 {
            top: 380px;
            left: 130px;
            width: 65px;
            height: 65px;
            border: 4px solid red;
        }

        .area5 {
            top: 80px;
            left: 730px;
            width: 60px;
            height: 60px;
            border: 4px solid red;
        }

        .area6 {
            top: 390px;
            left: 730px;
            width: 80px;
            height: 80px;
            border: 4px solid red;
        }

        .area7 {
            top: 80px;
            left: 45px;
            width: 30px;
            height: 400px;
            border: 4px solid purple;
        }

        .area8 {
            top: 80px;
            left: 860px;
            width: 30px;
            height: 400px;
            border: 4px solid purple;
        }

        .area9 {
            top: 160px;
            left: 165px;
            width: 215px;
            height: 215px;
            border: 4px solid aqua;
        }

        .area10 {
            top: 260px;
            left: 570px;
            width: 80px;
            height: 85px;
            border: 4px solid greenyellow;
        }

        .area11 {
            top: 180px;
            left: 710px;
            width: 65px;
            height: 85px;
            border: 4px solid blue;
        }

        .area12 {
            top: 340px;
            left: 710px;
            width: 100px;
            height: 40px;
            border: 4px solid green;
        }

        .area13 {
            top: 100px;
            left: 390px;
            width: 105px;
            height: 65px;
            border: 4px solid orange;
        }

        .area14 {
            top: 360px;
            left: 380px;
            width: 105px;
            height: 55px;
            border: 4px solid orange;
        }

        .area15 {
            top: 110px;
            left: 220px;
            width: 155px;
            height: 50px;
            border: 4px solid Brown;
        }

        .area16 {
            top: 375px;
            left: 210px;
            width: 155px;
            height: 45px;
            border: 4px solid Brown;
        }

        .area17 {
            top: 290px;
            left: 260px;
            width: 110px;
            height: 60px;
            border: 4px solid Indigo;
        }

        .area18 {
            top: 180px;
            left: 260px;
            width: 60px;
            height: 100px;
            border: 4px solid Indigo;
        }

        .area19 {
            top: 200px;
            left: 430px;
            width: 50px;
            height: 90px;
            border: 4px solid FireBrick;
        }

        .area20 {
            top: 378px;
            left: 60px;
            width: 95px;
            height: 95px;
            border: 4px solid Gold;
            border-radius: 50%;
        }

        .area21 {
            top: 46px;
            left: 755px;
            width: 95px;
            height: 95px;
            border: 4px solid Gold;
            border-radius: 50%;
        }

        .area22 {
            top: 175px;
            left: 685px;
            width: 130px;
            height: 150px;
            border: 4px solid whitesmoke;
        }

        .area:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .informacion {
            display: none;
            width: auto;
            height: auto;
            box-sizing: border-box;
            padding: 10%;
            padding-top: 20px;
            margin-left: 5%;
            border: 1px solid #ccc;
            z-index: 1;
        }

        .informacion1 {
            display: none;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            z-index: 1;
        }

        .informativo img {
            max-width: 300px;
        }



        /* .imagen-seleccionada1 {
        top: 16vh;
        left: 11vw;
        width: 50vw;
        height: 100vh;
        position: absolute;
        display: block;
        padding: 10px;
        z-index: 1;
        background-image: url("imagenes/281/3.png");
        background-size: cover;
        background-position: center;
    } */

        .contenedor-externo {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .informativo {
            width: 90%;
            margin-right: 10%;
            height: 100%;
        }

        @media screen and (min-width: 768px) and (max-width: 1350px) {
            .contenedor-externo {
                display: grid;
                grid-template-rows: 1fr 0.5fr;
                grid-template-columns: none;
            }
        }

        @media (max-width: 768px) {
            .videos {
                display: grid;
                grid-template-rows: 1fr 1fr 1fr;
            }

            .informativo {
                width: 90%;
                margin-left: 5%;
                height: 100%;
            }

            .contenedor-principal {
                background-image: url("imagenes/281/p200-hard-movil-lite.webp");
                margin-left: 5%;
                width: 268px !important;
                height: 486px !important;
            }

            .contenedor-externo {
                display: grid;
                grid-template-rows: 1fr 0.5fr;
                grid-template-columns: none;
            }

            .area1 {
                top: 55px;
                left: 190px;
                width: 45px;
                height: 45px;
                border: 2px solid red;
                /* transform: rotate(90deg) scale(0.5); */
            }

            .area2 {
                top: 200px;
                left: 20px;
                width: 25px;
                height: 50px;
                border: 2px solid yellow;
            }

            .area3 {
                top: 200px;
                left: 220px;
                width: 25px;
                height: 50px;
                border: 2px solid yellow;
            }

            .area4 {
                top: 360px;
                left: 30px;
                width: 45px;
                height: 45px;
                border: 2px solid red;
            }

            .area5 {
                top: 70px;
                left: 30px;
                width: 50px;
                height: 30px;
                border: 2px solid red;
            }

            .area6 {
                top: 370px;
                left: 200px;
                width: 30px;
                height: 30px;
                border: 2px solid red;
            }

            .area7 {
                top: 20px;
                left: 30px;
                width: 200px;
                height: 15px;
                border: 2px solid purple;
            }

            .area8 {
                top: 430px;
                left: 30px;
                width: 200px;
                height: 15px;
                border: 2px solid purple;
            }

            .area9 {
                top: 80px;
                left: 85px;
                width: 105px;
                height: 105px;
                border: 2px solid aqua;
            }

            .area10 {
                top: 290px;
                left: 80px;
                width: 50px;
                height: 40px;
                border: 2px solid greenyellow;
            }

            .area11 {
                top: 355px;
                left: 135px;
                width: 45px;
                height: 35px;
                border: 2px solid blue;
            }

            .area12 {
                top: 358px;
                left: 80px;
                width: 20px;
                height: 50px;
                border: 2px solid green;
            }

            .area13 {
                top: 195px;
                left: 185px;
                width: 30px;
                height: 50px;
                border: 2px solid orange;
            }

            .area14 {
                top: 190px;
                left: 60px;
                width: 25px;
                height: 50px;
                border: 2px solid orange;
            }

            .area15 {
                top: 110px;
                left: 190px;
                width: 20px;
                height: 80px;
                border: 2px solid Brown;
            }

            .area16 {
                top: 105px;
                left: 60px;
                width: 20px;
                height: 80px;
                border: 2px solid Brown;
            }

            .area17 {
                top: 130px;
                left: 130px;
                width: 48px;
                height: 30px;
                border: 2px solid Indigo;
            }

            .area18 {
                top: 130px;
                left: 95px;
                width: 30px;
                height: 55px;
                border: 2px solid Indigo;
            }

            .area19 {
                top: 218px;
                left: 120px;
                width: 48px;
                height: 20px;
                border: 2px solid FireBrick;
            }

            .area20 {
                top: 375px;
                left: 195px;
                width: 50px;
                height: 50px;
                border: 2px solid Gold;
                border-radius: 50%;
            }

            .area22 {
                top: 345px;
                left: 100px;
                width: 80px;
                height: 60px;
                border: 2px solid whitesmoke;
            }

            .area21 {
                top: 30px;
                left: 30px;
                width: 50px;
                height: 50px;
                border: 2px solid Gold;
                border-radius: 50%;
            }


        }
    </style>
    <!-- Fin de estilos para el carrusel -->
</head>


<body>
    <?php echo $var_body; ?>
    <?php require("libreria/header.view.php"); ?>
    <script>
        AOS.init();
    </script>
    <script>
        // Función para mostrar u ocultar el div 
        $(document).ready(function () {
            $(".area1").hover(
                function () {
                    $(".informacion1").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion1").stop(true, true).fadeOut();
                }
            );
            $(".area2").hover(
                function () {
                    $(".informacion2").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion2").stop(true, true).fadeOut();
                }
            );
            $(".area3").hover(
                function () {
                    $(".informacion3").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion3").stop(true, true).fadeOut();
                }
            );
            $(".area4").hover(
                function () {
                    $(".informacion4").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion4").stop(true, true).fadeOut();
                }
            );
            $(".area5").hover(
                function () {
                    $(".informacion5").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion5").stop(true, true).fadeOut();
                }
            );
            $(".area6").hover(
                function () {
                    $(".informacion6").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion6").stop(true, true).fadeOut();
                }
            );
            $(".area7").hover(
                function () {
                    $(".informacion7").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion7").stop(true, true).fadeOut();
                }
            );
            $(".area8").hover(
                function () {

                    $(".informacion8").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion8").stop(true, true).fadeOut();
                }
            );
            $(".area9").hover(
                function () {

                    $(".informacion9").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion9").stop(true, true).fadeOut();
                }
            );
            $(".area10").hover(
                function () {

                    $(".informacion10").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion10").stop(true, true).fadeOut();
                }
            );
            $(".area11").hover(
                function () {

                    $(".informacion11").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion11").stop(true, true).fadeOut();
                }
            );
            $(".area12").hover(
                function () {

                    $(".informacion12").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion12").stop(true, true).fadeOut();
                }
            );
            $(".area13").hover(
                function () {

                    $(".informacion13").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion13").stop(true, true).fadeOut();
                }
            );
            $(".area14").hover(
                function () {

                    $(".informacion14").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion14").stop(true, true).fadeOut();
                }
            );
            $(".area15").hover(
                function () {

                    $(".informacion15").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion15").stop(true, true).fadeOut();
                }
            );
            $(".area16").hover(
                function () {

                    $(".informacion16").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion16").stop(true, true).fadeOut();
                }
            );
            $(".area17").hover(
                function () {

                    $(".informacion17").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion17").stop(true, true).fadeOut();
                }
            );
            $(".area18").hover(
                function () {

                    $(".informacion18").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion18").stop(true, true).fadeOut();
                }
            );
            $(".area19").hover(
                function () {

                    $(".informacion19").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion19").stop(true, true).fadeOut();
                }
            );
            $(".area20").hover(
                function () {
                    $(".informacion20").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion20").stop(true, true).fadeOut();
                }
            );
            $(".area21").hover(
                function () {

                    $(".informacion21").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion21").stop(true, true).fadeOut();
                }
            );
            $(".area22").hover(
                function () {

                    $(".informacion22").stop(true, true).fadeIn();
                },
                function () {
                    $(".informacion22").stop(true, true).fadeOut();
                }
            );

        });
        $(document).ready(function () {
            // Verificar si es un dispositivo móvil
            if (/Mobi|Android/i.test(navigator.userAgent)) {
                $(".area21").hover(
                    function () {
                        $("html, body").animate({
                            scrollTop: "+=250px"
                        }, 300);
                    },
                );
                $(".area7").hover(
                    function () {
                        $("html, body").animate({
                            scrollTop: "+=250px"
                        }, 300);
                    },
                );
                $(".area1").hover(
                    function () {
                        $("html, body").animate({
                            scrollTop: "+=250px"
                        }, 300);
                    },
                );
                $(".area9").hover(
                    function () {
                        $("html, body").animate({
                            scrollTop: "+=250px"
                        }, 300);
                    },
                );
                $(".area5").hover(
                    function () {
                        $("html, body").animate({
                            scrollTop: "+=250px"
                        }, 300);
                    },
                );
            }
        });
    </script>
    <div class="index1">
        <div class="img">
            <video id="my-9844-video-0_html5_api" class="vjs-tech" muted="muted" x-webkit-airplay="allow"
                x5-video-player-type="h5" x5-video-player-fullscreen="true" playsinline="true" webkit-playsinline="true"
                autoplay="" loop="" tabindex="-1" role="application" preload="false"
                src="https://static.mega--cloud.com/video/youibot/about-333-en.mp4" style="width: 100%"
                x5-playsinline="">
                <source src="https://static.mega--cloud.com/video/youibot/about-333-en.mp4" type="video/mp4" />
            </video>
        </div>
    </div>
    <div class="Titulo">
        <br>
        <h1 style="font-size:35px !important;">
            <b>Soluciones integrales de logística robótica para tu proyecto</b>
        </h1>
    </div>
    <div class="card2">
        <h1>
            Los robots industriales son
            <!-- Scroller Start -->
            <div class="scroller">
                <span>
                    Versátiles<br />
                    Poderosos<br />
                    Vanguardistas<br />
                    Transformadores <br />
                    Eficientes<br />
                    Precisos<br />
                    Versátiles<br />
                </span>
            </div>
        </h1>
    </div>
    <div class="introduccion">
        Los AMR´s, conocidos como robots móviles autónomos (Autonomous Mobile Robots en inglés), son dispositivos que
        transportan objetos de manera autónoma, prescindiendo de la intervención humana requerida con elementos
        convencionales como patines hidráulicos, montacargas manuales, racks de ruedas manipulados por operadores, etc.
        Estos equipos permiten la automatización progresiva de procesos, simplificando la transición entre etapas.
        <br><br>
        Estos dispositivos se desplazan dentro de entornos muy variados como almacenes, plantas de producción, museos,
        restaurantes, etc., siguiendo rutas predefinidas mediante software para llegar a su destino sin colisiones con
        otros vehículos, materiales o personal cercano. Además de brindar flexibilidad operativa, los AMR´s aumentan la
        eficiencia y mejoran la seguridad en tareas antes realizadas manualmente con carretillas elevadoras.
        <br><br>
        <a href="https://tienda.logicbus.com.mx/youibot"><b>YOUIBOT</b></a> es un proveedor líder mundial de soluciones
        de
        robots móviles. Nos enorgullecemos de nuestros robots
        móviles de navegación fusión de LiDAR-SLAM y nuestros productos de software intuitivos. YOUIBOT en coordinación
        de Logicbus ofrece soluciones integradas para clientes en sectores como automotriz, bienes de consumo masivo,
        electrónica de consumo, semiconductores y almacenamiento. Estos robots móviles están diseñados específicamente
        para ofrecer soluciones de automatización confiables que impulsen la eficiencia y el crecimiento empresarial de
        manera continua.
        <br><br> <br>
        <div class="gif">
            <video width="100%" loop muted autoplay playsinline>
                <source src="imagenes/281/robot-agv.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>


    </div>
    <div class="seccion" id="articulos">
        <div class="col-center" style="text-align:center;">
            <h2><span>Productos</span></h2>
        </div>
    </div>

    <!-- Carrusel Bootstrap -->
    <div class="container mt-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Diapositivas -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="imagenes/281/robot1.jpg" class="img-fluid" alt="LBL1000-281" />
                    </div>
                    <div class="carousel-caption">
                        <a href="https://tienda.logicbus.com.mx/LBL1000-281_p_25134.html" style="text-decoration: none">
                            <h3>LBL1000-281</h3>
                            <p>Robot AGV, multiproposito y adaptable, Carga util 1000Kg</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="imagenes/281/robot2.jpg" class="img-fluid" alt="LBL300-281" />
                    </div>
                    <div class="carousel-caption">
                        <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbl300-281"
                            style="text-decoration: none">
                            <h3>LBL300-281</h3>
                            <p>
                                L300 equipado con módulo giratorio y elevador, Carga útil: 300
                                kg.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="imagenes/281/robot3.jpg" class="img-fluid" alt="LBAuto charger station-281" />
                    </div>
                    <div class="carousel-caption">
                        <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281"
                            style="text-decoration: none">
                            <h3>LBAuto charger station-281</h3>
                            <p>Cargador de baterías para AGV, para uso en interiores</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="imagenes/281/P200_preview_rev_1.jpg" class="img-fluid" alt="LBP200-281" />
                    </div>
                    <div class="carousel-caption">
                        <a href="https://tienda.logicbus.com.mx/LBP200-281_p_36436.html" style="text-decoration: none">
                            <h3>LBP200-281</h3>
                            <p>El AMR más versátil para una integración perfecta.</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="imagenes/281/CHARGER STATION P200.jpg" class="img-fluid"
                            alt="Auto charger station for P200" />
                    </div>
                    <div class="carousel-caption">
                        <a href="https://tienda.logicbus.com.mx/Auto-charger-station-for-P200_p_36437.html"
                            style="text-decoration: none">
                            <h3>Auto charger station for P200</h3>
                            <p>Estación de carga (carga manual y automática) para el Modelo LBP200-281.</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Controles de navegación -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <!-- Fin del carrusel Bootstrap -->
    <!-- <div class="video2">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Jb1xQvBlSTA?autoplay=1&loop=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div> -->



    <div class="seccion" id="articulos">
        <div class="col-center" style="text-align:center;">
            <h2><span>¿Cómo se compone un AMR internamente?</span></h2>
        </div>
    </div>
    <div class="ocultar">
        Un equipo de transporte AMR es fundamental en la industria de logística y almacenamiento, permitiendo
        operaciones automatizadas y la disminución de los gastos empresariales. Sin embargo, es crucial prestar atención
        a los componentes que integran el hardware del cobot para asegurar su utilidad. Aquí exploraremos sobre qué
        partes típicas podemos encontrar dentro de los robots AMR.
        <br><br>
        <b>Pasa el cursor en cada uno de los componentes del AMR para sumergirte en un viaje informativo.</b>
    </div>
    <div class="contenedor-externo">
        <div class="contenedor-principal">
            <div class="area area1"></div>

            <div class="imagen-seleccionada1"></div>
            <div class="area area2"></div>
            <div class="area area3"></div>
            <div class="area area4"></div>
            <div class="area area5"></div>
            <div class="area area6"></div>
            <div class="area area7"></div>
            <div class="area area8"></div>
            <div class="area area9"></div>
            <div class="area area10"></div>
            <div class="area area22"></div>
            <div class="area area12"></div>
            <div class="area area13"></div>
            <div class="area area14"></div>
            <div class="area area15"></div>
            <div class="area area16"></div>
            <div class="area area17"></div>
            <div class="area area18"></div>
            <div class="area area19"></div>
            <div class="area area20"></div>
            <div class="area area21"></div>
            <div class="area area11"></div>

        </div>
        <div class="informativo">
            <div class="informacion informacion1">
                <p><b>Rueda universal:</b> es una rueda móvil con una estructura que permite una rotación horizontal de
                    360
                    grados. Ajuste la dirección y ayuda a la rueda principal.</p>
                <center><img src="imagenes/281/youibot-piezas/universal-wheel.jpg" alt="Rueda universal"></center>
            </div>
            <div class="informacion informacion2">
                <p><b>Rueda convencional:</b> se utiliza para impulsar el eje a girar, es decir, la potencia del motor
                    se
                    transmite al eje para que la rueda actúe como rueda motriz para impulsar el vehículo.</p>
                <center><img src="imagenes/281/youibot-piezas/Driving Wheel 1.png.jpg" alt="Rueda convencional">
                </center>
            </div>
            <div class="informacion informacion3">
                <p><b>Rueda convencional:</b> se utiliza para impulsar el eje a girar, es decir, la potencia del motor
                    se
                    transmite al eje para que la rueda actúe como rueda motriz para impulsar el vehículo.</p>
                <center><img src="imagenes/281/youibot-piezas/Driving Wheel 1.png.jpg" alt="Rueda convencional">
                </center>

            </div>
            <div class="informacion informacion4">
                <p><b>Rueda universal:</b> es una rueda móvil con una estructura que permite una rotación horizontal de
                    360
                    grados. Ajuste la dirección y ayuda a la rueda principal.</p>
                <center><img src="imagenes/281/youibot-piezas/universal-wheel.jpg" alt="Rueda universal"></center>

            </div>
            <div class="informacion informacion5">
                <p><b>Rueda universal:</b> es una rueda móvil con una estructura que permite una rotación horizontal de
                    360
                    grados. Ajuste la dirección y ayuda a la rueda principal.</p>
                <center><img src="imagenes/281/youibot-piezas/universal-wheel.jpg" alt="Rueda universal"></center>

            </div>
            <div class="informacion informacion6">
                <p><b>Rueda universal:</b> es una rueda móvil con una estructura que permite una rotación horizontal de
                    360
                    grados. Ajuste la dirección y ayuda a la rueda principal.</p>
                <center><img src="imagenes/281/youibot-piezas/universal-wheel.jpg" alt="Rueda universal"></center>

            </div>
            <div class="informacion informacion7">
                <p> <b>Parachoques:</b> se instala en el borde del AGV para evitar que se raye o se golpee con objetos
                    extraños y
                    desempeña una función protectora.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Bumper.png" alt="Parachoque"></center>

            </div>
            <div class="informacion informacion8">
                <p> <b>Parachoques:</b> se instala en el borde del AGV para evitar que se raye o se golpee con objetos
                    extraños y
                    desempeña una función protectora.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Bumper.png" alt="Parachoque"></center>

            </div>
            <div class="informacion informacion9">
                <p><b>Batería:</b> es la fuente de energía del robot. La energía eléctrica de la batería se convierte en
                    energía cinética para que el robot pueda moverse.</p>
                <img src="imagenes/281/youibot-piezas/Battery2.png" alt="Batería">
            </div>
            <div class="informacion informacion10">
                <p>
                    <b>PLC:</b> utiliza una memoria que puede programarse para almacenar instrucciones para realizar
                    operaciones
                    como operaciones lógicas, operaciones secuenciales, temporización, recuento y operaciones
                    aritméticas.
                </p>
                <center><img src="imagenes/281/youibot-piezas/plc2.png" alt="PLC" width=" 400px"></center>
            </div>
            <div class="informacion informacion22">
                <p>
                    <b>IPC (Industrial Personal Computer):</b> la computadora industrial tiene importantes
                    características
                    como el
                    CPU, periféricos e interfaces, sistema operativo, potencia de cálculo e interfaz hombre-máquina
                    amigable, entre otros.
                </p>
                <center><img src="imagenes/281/youibot-piezas/ipc.png" alt="Industrial Personal Computer"
                        width=" 400px"></center>
            </div>
            <div class="informacion informacion12">
                <p>
                    <b>Switch Ethernet:</b> es un dispositivo de red utilizado para el reenvío de señales eléctricas.
                    Puede
                    proporcionar una ruta de señal eléctrica exclusiva para dos nodos de red cualesquiera conectados al
                    conmutador.
                </p>
                <center><img src="imagenes/281/youibot-piezas/ehernet.png" alt="Switch Ethernet"></center>
            </div>
            <div class="informacion informacion13">
                <p>
                    <b>Reductor de velocidad:</b> su principal objetivo es enfocado hacia la desaceleración del motor;
                    en
                    muchas
                    ocasiones prácticas del motor, es difícil utilizar plenamente la velocidad nominal del motor.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Speed-Reducer.png" alt="Reductor de velocidad"
                        width=" 400px"></center>
            </div>
            <div class="informacion informacion14">
                <p>
                    <b>Reductor de velocidad:</b> su principal objetivo es enfocado hacia la desaceleración del motor;
                    en
                    muchas
                    ocasiones prácticas del motor, es difícil utilizar plenamente la velocidad nominal del motor.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Speed-Reducer.png" alt="Reductor de velocidad"
                        width=" 400px"></center>

            </div>
            <div class="informacion informacion15">
                <p>
                    <b>Servomotor:</b> su principal función es generar el torque de accionamiento. Con el servomotor es
                    posible
                    realizar el control de la velocidad y la posición de manera muy precisa.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Servo-Motor1.png" alt="ServoMotor" width=" 400px">
                </center>

            </div>
            <div class="informacion informacion16">
                <p>
                    <b>Servomotor:</b> su principal función es generar el torque de accionamiento. Con el servomotor es
                    posible
                    realizar el control de la velocidad y la posición de manera muy precisa.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Servo-Motor1.png" alt="ServoMotor" width=" 400px">
                </center>

            </div>
            <div class="informacion informacion17">
                <p>
                    <b>Controlador del servomotor:</b> forma parte del servosistema y se utiliza principalmente en
                    sistemas
                    de
                    posicionamiento de alta precisión.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Driver-of-Servo-Motor.png"
                        alt="Controlador del servomotor"></center>

            </div>
            <div class="informacion informacion18">
                <p>
                    <b>Controlador del servomotor:</b> forma parte del servosistema y se utiliza principalmente en
                    sistemas
                    de
                    posicionamiento de alta precisión.
                </p>
                <center><img src="imagenes/281/youibot-piezas/Driver-of-Servo-Motor.png"
                        alt="Controlador del servomotor"></center>
            </div>
            <div class="informacion informacion19">
                <p>
                    <b>IMU (Inertial Measurement Unit):</b> la Unidad de Medición Inercial es un tipo muy específico de
                    sensor que
                    mide la velocidad angular, la fuerza, y en algunos casos, los campos magnéticos.
                </p>
                <center><img src="imagenes/281/youibot-piezas/imu2.png" alt="IMU (Inertial Measurement Unit)"
                        width="400px"></center>

            </div>
            <div class="informacion informacion20">
                <p>
                    <b>LIDAR:</b> se utiliza para el mapeo y la navegación de robots móviles. La navegación aquí se
                    refiere
                    a la
                    navegación natural, es decir fluida y segura.
                </p>
                <center><img src="imagenes/281/youibot-piezas/lidar.png" alt="Dispositivo LIDAR"></center>

            </div>
            <div class="informacion informacion21">
                <p>
                    <b>LIDAR:</b> se utiliza para el mapeo y la navegación de robots móviles. La navegación aquí se
                    refiere
                    a la
                    navegación natural, es decir fluida y segura.
                </p>
                <center><img src="imagenes/281/youibot-piezas/lidar.png" alt="Dispositivo LIDAR"></center>

            </div>
            <div class="informacion informacion11">
                <p>
                    <b>Módulo MOXA:</b> ofrece una serie de conmutadores Ethernet industriales con fiabilidad de nivel
                    industrial,
                    redundancia de red, seguridad mejorada, gestión sencilla y rendimiento de alto coste.
                </p>
                <center><img src="imagenes/281/youibot-piezas/moxa.png" alt="Módulo MOXA"></center>

            </div>
        </div>
    </div>
    <div class="seccion" id="articulos">
        <div class="col-center" style="text-align:center;">
            <h2><span>Adquiere cualquiera de nuestros modelos</span></h2>
        </div>
    </div>
    <div data-aos="fade-right" class="index6" style="margin-left:20%">
        <div class="image-container">
            <img src="imagenes/281/l300fondo.png" class="carta" alt="Imagen del producto">

        </div>
        <div class="text-content">
            <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbl300-281"
                style="text-decoration: none">
                <h3>LBL300-281</h3>
            </a>
            <p>
                <b>AMR compacto pero ágil</b>
                <br>
                El LBL300-281 es un Robot Móvil Autónomo diseñado para mejorar la eficiencia del transporte interno en
                la
                industria manufacturera. El ágil cuerpo está equipado con una batería de alta capacidad de 30Ah,
                proporcionando al menos 8 horas de funcionamiento ininterrumpido. Esto permite cumplir los programas de
                producción entre cambios de turno, lo que se traduce en una producción prácticamente ininterrumpida y un
                aumento de la productividad. Con el LBL300-281, las empresas pueden avanzar hacia la consecución de la
                Industria 4.0 y aprovechar las ventajas de la tecnología de automatización avanzada.
                <br>
            </p>
            <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbl300-281"><img
                    id="animatedImage" src="imagenes/281/shopping_cart3 - copia.png" alt="Comprar"
                    style="width: 60px;" /></a>
        </div>
    </div>


    </div>
    <div data-aos="fade-left" class="index6" style="margin-right:20%">
        <div class="image-container">
            <img src="imagenes/281/l1000fondo.png" class="carta" alt="Imagen del producto">

        </div>
        <div>
            <a href="https://tienda.logicbus.com.mx/LBL1000-281_p_25134.html" style="text-decoration: none">
                <h3>LBL1000-281</h3>
            </a>
            <p>
                <b>AMR de gran carga útil</b> <br>

                El LBL1000-281 es un robot móvil autónomo con una gran capacidad de carga útil diseñado para mejorar la
                eficacia de la manipulación de materiales en la fabricación. Incorpora una batería de 48 Ah y un módulo
                de elevación giratorio capaz de levantar cargas de hasta 1.000 kg. Con capacidad para funcionar durante
                8 horas mientras manipula cargas pesadas, el L1000 impulsa la productividad y facilita la implantación
                de la Industria 4.0.
            </p>
            <a href="https://tienda.logicbus.com.mx/LBL1000-281_p_25134.html"><img id="animatedImage"
                    src="imagenes/281/shopping_cart3 - copia.png" alt="Comprar" style="width: 60px;" /></a>
        </div>

    </div>
    <div data-aos="zoom-in" class="index6">
        <div class="image-container">
            <img src="imagenes/281/chargerfondo2.png" class="carta" alt="Imagen del producto">

        </div>
        <div>
            <a href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281"
                style="text-decoration: none">
                <h3>LBAuto charger station-281</h3>
            </a>
            <p>
                Estación de carga (carga manual y automática en una estación) para modelos LBL300-281 y
                LBL1000-281.
            </p>
            <a
                href="https://tienda.logicbus.com.mx/automatizacion-y-control-de-procesos-robots-youibot-lbauto-charger-station-281"><img
                    id="animatedImage" src="imagenes/281/shopping_cart3 - copia.png" alt="Comprar"
                    style="width: 60px;" /></a>
        </div>
    </div>
    <div data-aos="fade-down-right" class="index6" style="margin-right: 20%;">
        <div class="image-container">
            <img src="imagenes/281/lbp200.png" class="carta" alt="Imagen del producto">

        </div>
        <div>
            <a href="https://tienda.logicbus.com.mx/LBP200-281_p_36436.html" style="text-decoration: none">
                <h3>LBP200-281</h3>
            </a>
            <p>
                El LBP200-281 se distingue por su interfaz adaptable, ubicando conexiones externas en el panel superior
                para
                E/S, Ethernet y alimentación. Su estructura monolítica asegura estabilidad durante el mantenimiento,
                mientras su control cooperativo multisistema facilita la integración eficiente de diversos componentes.
            </p>
            <a href="https://tienda.logicbus.com.mx/LBP200-281_p_36436.html"><img id="animatedImage"
                    src="imagenes/281/shopping_cart3 - copia.png" alt="Comprar" style="width: 60px;" /></a>
        </div>
    </div>
    <div data-aos="fade-down-left" class="index6" style="margin-left: 20%;">
        <div class="image-container">
            <img src="imagenes/281/LBAuto charger station-281.png" class="carta" alt="Imagen del producto">

        </div>
        <div>
            <a href="https://tienda.logicbus.com.mx/Auto-charger-station-for-P200_p_36437.html"
                style="text-decoration: none">
                <h3>Auto charger station for P200</h3>
            </a>
            <p>
                Estación de carga (carga manual y automática en una estación) para el Modelo LBP200-281.
            </p>
            <a href="https://tienda.logicbus.com.mx/Auto-charger-station-for-P200_p_36437.html"><img id="animatedImage"
                    src="imagenes/281/shopping_cart3 - copia.png" alt="Comprar" style="width: 60px;" /></a>
        </div>
    </div>
    <div class="seccion" id="articulos">
        <div class="col-center" style="text-align:center;">
            <h2><span>Conoce nuestros robots en acción</span></h2>
        </div>
    </div>
    <div class="videos">
        <div class=" video-container" style="margin: 15px;">
            <iframe class="video" width="700" height="315" src="https://www.youtube.com/embed/ora_wOQHxfY"
                title="L1000, the most powerful AMR with max lifting capacity of 1000kg." frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen loading="lazy"></iframe>
        </div>

        <div class="video-container" style="margin: 15px;">
            <iframe class="video" width="700" height="315" src="https://www.youtube.com/embed/S_O3mKpC57Q"
                title="L300, the flexible AMR for narrow places with up to 300 kg payload." frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen loading="lazy"></iframe>
        </div>
        <div class="video-container" style="margin: 15px;">
            <iframe class="video" width="300" height="315"
                src="https://www.youtube.com/embed/oyRtr5ewjf4?si=xHSZInknfsVNvqyZ"
                title="L200, the flexible AMR for narrow places with up to 200 kg payload." frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
    <div>
        <img src="imagenes/281/l1000.png" alt="">
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

    <!-- PIE DE PAGINA -->
    <?php require("libreria/footer.view.php"); ?>
    <?php echo $bootstrap_js; ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
</body>
<?php echo $var_footer; ?>

</html>