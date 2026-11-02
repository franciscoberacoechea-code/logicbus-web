<?php
/*reseñas google*/
function obtenerTodasReseñasGoogle($place_id, $api_key, $language)
{
    $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews&key=$api_key&language=$language";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    return $data;
}

$place_id = 'ChIJ_WBI0NVN2YARJpeB6ymNcB8'; // Reemplaza 'TU_PLACE_ID' con el ID del lugar de Google que deseas obtener reseñas.
$api_key = 'AIzaSyCt-iR9ETmfZyS5SwQ-fmVrXfpBHbcGjlc'; // Reemplaza 'TU_CLAVE_API' con tu clave de API de Google Places.
$language = ''; // Cambia 'es' al código de idioma que desees, por ejemplo, 'en' para inglés, 'fr' para francés, etc.

$places =  obtenerTodasReseñasGoogle($place_id, $api_key, $language);

$resenas = $places['result']['reviews'];
$rating = $places['result']['rating'];
/**fin reseñas google */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas - Logicbus</title>
    <link href="libreria/flickity.css" type="text/css" rel="stylesheet">
    <link href="libreria/estilos.css" type="text/css" rel="stylesheet">
    <link href="libreria/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="libreria/www.css" type="text/css" rel="stylesheet">
    <style>
        body, html{
            background: #fff;
        }
    </style>
</head>

<body>
    <!-- Section Reseñas-->
    <section>
        <div class="container py-5">
            <h1 class="title blue">CUSTOMERS SUPPORT US</h1>
            <div class="d-flex reviews-rating bg-light border-md p-3">
                <div class="">
                    <h2 class="subtitle blue">Our Google reviews</h2>
                    <p class="paragraph gray">
                        <?php
                        for ($i = 1; $i <= $rating; $i++) {
                            echo "<i class='fas fa-star fa-sm text-warning'></i>";
                        }
                        if (!is_int($rating)) {
                            echo "<i class='fas fa-star-half fa-sm text-warning'></i>";
                        }
                        echo " " . $rating;
                        ?>
                    </p>
                </div>
                <a class="button-text" target="_blank" href="https://g.page/r/CSaXgespjXAfEB0/review"><button class="button button-circle-orange">Write a review</button></a>
            </div>
        </div>
        <div class="pb-5">
            <div class="carousel text-center" data-flickity='{ "wrapAround": true, "prevNextButtons": false }'>
                <?php
                foreach ($resenas as $resena) {
                    $autor = $resena['author_name'];
                    $autor_url = $resena['author_url']; // URL del perfil de Google del autor
                    $profile_photo_url = $resena['profile_photo_url'];
                    $puntuacion = $resena['rating'];
                    $time = $resena['relative_time_description'];
                    $comentario = $resena['text'];

                    if ($puntuacion > 3) {
                        echo "<div class='carousel-cell col-md-4 col-10 mb-5 mb-md-0'>
                        <div class='bg-light border-md p-3'>
                            <div class='mb-4 d-flex justify-content-center align-items-center flex-wrap'>
                                <img src='$profile_photo_url'
                                    class='rounded-circle shadow-1-strong mr-3' width='50px' />
                                <div class='text-left'>
                                    <h5 class='mb-1'>$autor</h5>
                                    <ul class='list-unstyled d-flex mb-0'>";
                                        for ($i = 1; $i <= $puntuacion; $i++) {
                                            echo "<li><i class='fas fa-star fa-sm text-warning'></i></li>";
                                        }
                                        echo "<span class='ml-3 gray'>$time</span>
                                    </ul>
                                </div>
                            </div>
                            <p class='px-xl-3'><i class='fas fa-quote-left pe-2 orange'></i>$comentario<i class='fas fa-quote-right pe-2 orange'></i></p>
                        </div>
                    </div>";
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Section Reseñas-->

    <script type="text/javascript" src="libreria/js/jquery.min.js"></script>
    <script type="text/javascript" src="libreria/flickity.pkgd.min.js"></script>

</body>

</html>