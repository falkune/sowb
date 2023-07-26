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
    <link rel="stylesheet" href="<?= STYLE ?>">
    <script src="<?= RV ?>" defer></script>
    <title>Document</title>
</head>

<body>
    <!-- la navbar -->
    <?php include_once NAVBAR ?>

    <div class="container">
        <div class="sep"></div>
        <div class="car">
            <p class="cata">Catalogue</p>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img id="tel" src="<?= IMGS ?>/tel.png" alt="téléphone">
                    <img id="tab" src="<?= IMGS ?>/tab.png" alt="tablette">
                    <img id="ordi" src="<?= IMGS ?>/ordi.png" alt="ordinateur">
                    <img id="ordi" src="<?= IMGS ?>/net.png" alt="ordinateur">
                </div>
                <div class="carousel-arrow carousel-prev">&lt;</div>
                <div class="carousel-arrow carousel-next">&gt;</div>
            </div>
        </div>

        <div class="diagnostic hide">
            <div class="left">
                <img src="<?= IMGS ?>/latel.png" alt="">
            </div>

            <div class="right">
                <ul class="composant">
                    <li># 1 Ecran</li>
                    <li># 2 Ecouteur interne avec micro et capteurs</li>
                    <li># 3 Haut-parleur externe</li>
                    <li># 4 Batterie</li>
                    <li># 5 Lecteur de carte Sim</li>
                    <li># 6 Lecteur de carte SD</li>
                    <li># 7 Taptic Engine/ vibreur</li>
                    <li># 8 Caméras arrière</li>
                    <li># 9 Caméra avant</li>
                    <li># 10 Connecteur de charge</li>
                    <li># 11 bouton latéral</li>
                    <li># 11 bouton latéral</li>
                    <li># 12 Nappe réseau</li>
                    <li># 13 Nappe antenne</li>
                    <li># 14 Nappe induction/ volume / vibreur / power</li>
                    <li># 15 Chassis</li>
                    <li># 16 Nappe QI magsafe (seulement iPhone)</li>
                    <li># 17 Autre</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- une separation -->
    <div class="sep"></div>
    <!-- footer -->
    <?php include_once FOOTER ?>
</body>

</html>