<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/service.js" defer></script>
    <title>Service</title>
</head>

<body>
    <?php include_once 'nav.php' ?>

    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

    <div class="container">
        <div class="sep"></div>
        <div class="car">
            <p class="cata">Catalogue</p>
            <div class="carousel-container">
                <div class="carousel-slide">
                   
                    <a href="http://sowb.com/rendez-vous.php"><img id="tel" src="/img/tel.png" alt="téléphone"></a>
           
                    <a href="http://sowb.com/rendez-vous.php"><img id="tab" src="/img/tab.png" alt="tablette"></a>
   
                    <a href="http://sowb.com/rendez-vous.php"><img id="ordi" src="/img/ordi.png" alt="ordinateur"></a>
       
                    <a href="http://sowb.com/rendez-vous.php"><img id="net" src="/img/net.png" alt="network"></a>
                </div>
                <div class="carousel-arrow carousel-prev">&lt;</div>
                <div class="carousel-arrow carousel-next">&gt;</div>
            </div>
        </div>
    </div>


    <div class="sep"></div>

    <?php include_once "footer.php" ?>
</body>
</html>