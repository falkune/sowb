<?php
require_once 'core/connexion.php';
$connexion = connexion();
$request = $connexion->prepare("SELECT * FROM marques");
$request->execute();
$marques = $request->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

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
    <script src="js/rendez-vous.js"></script>
    <title>Prise de rendez vous</title>
</head>

<body>
    <?php include_once 'nav.php' ?>

    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

    <div id="phone_diagnostic">
        <div id="tel" class="diagnostic_tel">
            <div class="left">
                <img src="img/latel.png" alt="">
            </div>

            <div class="right">
                <!-- <form method="post"> -->
                <ul class="composant">
                    <button class="liste" value="Ecran">
                        <li># 1 Ecran</li>
                    </button>
                    <button class="liste" value="Ecouteur interne avec micro et capteurs">
                        <li># 2 Ecouteur interne avec micro et capteurs</li>
                    </button>
                    <button class="liste" value="Haut-parleur externe">
                        <li># 3 Haut-parleur externe</li>
                    </button>
                    <button class="liste" value="Batterie">
                        <li># 4 Batterie</li>
                    </button>
                    <button class="liste" value="Lecteur de carte Sim">
                        <li># 5 Lecteur de carte Sim</li>
                    </button>
                    <button class="liste" value="Lecteur de carte SD">
                        <li># 6 Lecteur de carte SD</li>
                    </button>
                    <button class="liste" value="Taptic Engine/ vibreur">
                        <li># 7 Taptic Engine/ vibreur</li>
                    </button>
                    <button class="liste" value="Caméras arrière">
                        <li># 8 Caméras arrière</li>
                    </button>
                    <button class="liste" value="Caméra avant">
                        <li># 9 Caméra avant</li>
                    </button>
                    <button class="liste" value="Connecteur de charge">
                        <li># 10 Connecteur de charge</li>
                    </button>
                    <button class="liste" value="bouton latéral">
                        <li># 11 bouton latéral</li>
                    </button>
                    <button class="liste" value="Nappe réseau">
                        <li># 12 Nappe réseau</li>
                    </button>
                    <button class="liste" value="Nappe antenne">
                        <li># 13 Nappe antenne</li>
                    </button>
                    <button class="liste" value="Nappe induction/ volume / vibreur / power">
                        <li># 14 Nappe induction/ volume / vibreur / power</li>
                    </button>
                    <button class="liste" value="Chassis">
                        <li># 15 Chassis</li>
                    </button>
                    <button class="liste" value="Nappe QI magsafe (seulement iPhone)">
                        <li># 16 Nappe QI magsafe (seulement iPhone)</li>
                    </button>
                    <button class="liste" value="Autre">
                        <li># 17 Autre</li>
                    </button>
                </ul>
                <!-- </form> -->
            </div>
        </div>

        <div class="sep"></div>
        <div class="sep"></div>
        <div class="sep"></div>
        <div class="sep"></div>

        <!-- ici afficher les marques -->
        <div id="marque" class="marque hide">
            <p>De quelle marque sagit-il?</p>
            <ul id="marques">
                <?php foreach ($marques as $marque) { ?>
                    <button class="liste model" value="<?= $marque['id_marque'] ?>"><?= $marque['nom_marque'] ?></button>
                <?php } ?>
            </ul>
        </div>

        <!-- ici afficher les modeles -->
        <div id="modele" class="marque hide">
            <p id="modele_p">De quelle modele sagit-il?</p>
            <ul id="modeles">

            </ul>
        </div>

        <!-- ici afficher les types -->
        <div id="type" class="marque hide">
            <p id="type_p">De quelle type sagit-il?</p>
            <ul id="types">

            </ul>

            <div class="resume">
                <button id="suite_diag" style="width: 100%; background-color: none; border: none;">étape
                    suivante</button>
            </div>
        </div>
    </div>

    <div id="assurance" class="hide">
        <?php include_once "asurance.php" ?>
    </div>

    <div id="rdv" class="hide">
        <?php include_once "creneau.php" ?>
    </div>

    <?php include_once "footer.php" ?>
</body>

</html>