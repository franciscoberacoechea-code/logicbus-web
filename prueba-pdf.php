<?php require ($_SERVER['DOCUMENT_ROOT'] . '/admin/config.php'); ?>
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
    <script src="//mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>
    <style>
    model-viewer {
        display: block;
        width: 70%;
        height: 500px;
    }
    </style>

</head>

<body>
    <?php require ("libreria/header.view.php"); ?>
    <h1>PDF.js 'Hello, world!' example</h1>

    <p>
        Please use
        <a href="https://mozilla.github.io/pdf.js/getting_started/#download"><i>official releases</i></a>
        in production environments.
    </p>

    <canvas id="the-canvas"></canvas>
    <script type="module">
    const blendViewer = document.querySelector("model-viewer#blendViewer");
    const blendEffect = blendViewer.querySelector('color-grade-effect');
    const opacity = blendViewer.querySelector('#opacity');
    const mode = blendViewer.querySelector('#blend-mode');

    opacity.addEventListener('input', (e) => blendEffect.opacity = e.target.value);
    mode.addEventListener('change', (e) => blendEffect.blendMode = e.target.value);
    </script>
    <?php require ("libreria/footer.view.php"); ?>
    <?php echo $jquery_js; ?>
    <?php echo $own_file_js; ?>
    <?php echo $flickity_js; ?>
    <script type="module">
    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url = "https://www.logicbus.com.mx/pdf/01/6000series_data.pdf";

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var {
        pdfjsLib
    } = globalThis;

    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        "//mozilla.github.io/pdf.js/build/pdf.worker.mjs";

    // Asynchronous download of PDF
    var loadingTask = pdfjsLib.getDocument(url);
    loadingTask.promise.then(
        function(pdf) {
            console.log("PDF loaded");

            // Fetch the first page
            var pageNumber = 1;
            pdf.getPage(pageNumber).then(function(page) {
                console.log("Page loaded");

                var scale = 1.5;
                var viewport = page.getViewport({
                    scale: scale
                });

                // Prepare canvas using PDF page dimensions
                var canvas = document.getElementById("the-canvas");
                var context = canvas.getContext("2d");
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: context,
                    viewport: viewport,
                };
                var renderTask = page.render(renderContext);
                renderTask.promise.then(function() {
                    console.log("Page rendered");
                });
            });
        },
        function(reason) {
            // PDF loading error
            console.error(reason);
        }
    );
    </script>

</body>

</html>