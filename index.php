<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link vue js  -->
    <script src="https://unpkg.com/vue@3"></script>
</head>

<body class="ms_bg_body">
    <div id="app">
        <header class="">
            <div class="container-sm ms_bg_header d-flex align-items-center ps-5">
                <div class="ms_image ms-5">
                    <img src="https://m.media-amazon.com/images/I/51rttY7a+9L.png" alt="">
                </div>
            </div>
        </header>
        <main class="text-white ">
            <section >
                <div class="container-sm ms_bg_main p-3 ms_main">
                    <div class="row ms_row  ">
                        <div class="col-4 mb-5">
                            <div class="card pt-3 ps-5 pe-5 ms_bg_card" style="width: 18rem;">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center ">
                                    <h3>Title</h3>
                                    <h4>Name Singer</h4>
                                    <h3>date</h3>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        <script src="js/script.js" type="text/javascript"></script>
    </div>
</body>

</html>