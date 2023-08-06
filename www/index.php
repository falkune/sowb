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
    <title>Sowb Reparation</title>
</head>

<body>
    <?php include_once 'nav.php' ?>

    <div class="sep"></div>
    <div class="sep"></div>

    <?php include_once "baniere.php" ?>

    <div class="sep"></div>
    <div class="sep"></div>

    <!-- info -->
    <div class="container row m-auto w-50">
        <div class="col-md-5 col-sm-12 d-flex justify-content-between">
            <div class="icon">
                <i class="fa-solid fa-truck-arrow-right"></i>
            </div>
            <div class="texte">
                <p>
                    Déplacement gratuit Partout en Ile de France
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 d-flex justify-content-around">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-coins"></i>
            </div>
            <div class="texte">
                <p>
                    Rien à avancer
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 d-flex justify-content-around">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-check"></i>
            </div>
            <div class="texte">
                <p>
                    Garantie à vie Toute intervention
                </p>
            </div>
        </div>
    </div>

    <div class="sep"></div>
    <div class="sep"></div>

    <div class="container">
        <div class="row">
            <div class="promo col-md-6 col-sm-12">
                <p>Pour Tout Intervention - Du 06 juillet au 26 juillet 2023</p>
                <div class="sep"></div>
                <div class="sep"></div>
                <div class="sep"></div>
                <button class="bouton"><a class="nav-link" href="http://sowb.com/promo.php">En Savoir Plus</a></button>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="partenariat col-md-2 col-sm-12 offset-md-1">
                <p class="text-center">Nos partenariats</p>
                <div class="sep"></div>
                <div class="sep"></div>
                <div class="sep"></div>
                <!-- <div class="sep"></div> -->
                <button class="btn my-btn text-cente"><a class="nav-link"
                        href="http://sowb.com/partenaires.php">Découvrir >></a></button>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="recrutement col-md-2 col-sm-12 offset-md-1">
                <p class="text-center">sowb recrute partout en ile de France</p>
                <div class="sep"></div>
                <div class="sep"></div>
                <!-- <div class="sep"></div> -->
                <button class="btn  my-btn text-cente"><a class="nav-link"
                        href="http://sowb.com/rejoindre.php">Découvrir >></a></button>
            </div>
        </div>
        <!-- une separation -->
        <div class="sep"></div>
        <!-- engagement -->
        <div class="engaement">
            <p>Nos engaements</p>
            <div>

            </div>
            <div class="row">
                <div class="sowb col-md-7">

                </div>
                <div class="chez-sowb col-md-4 offset-md-1">
                    <p>Chez Sowb, vous n'avancez pas les frais quelle que soit l'intervention</p>
                    <div class="sep"></div>
                    <div class="sep"></div>
                    <p class="form-control-sm">On vous accompagne dans vos formalités avec votre assureur</p>
                    <button class="bouton">En savoir plus</button>
                </div>
            </div>
        </div>

        <!-- une separation -->
        <div class="sep"></div>
        <!-- recommandations -->
        <div class="engaement">
            <p>Les meilleures recommandations sont celles de nos clients</p>
            <div class="row">
                <div class="sowb col-md-8">

                </div>
                <div class="chez-sowb col-md-3 offset-md-1">
                    <p>Voir tous les avis</p>
                    <div class="sep"></div>
                    <div class="sep"></div>
                    <div class="sep"></div>
                    <div class="sep"></div>
                    <p>Soumis à un contrôle ?</p>
                    <button class="bouton my-btn text-cente"><a class="nav-link" href="">Découvrir >></a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- une separation -->
    <div class="sep"></div>
    <!-- footer -->
    <?php include_once "footer.php" ?>
</body>

</html>