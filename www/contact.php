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
    <title>Nos offres promotionnelles</title>
</head>

<body>
    <?php include_once 'nav.php' ?>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

    <div class="container">
        <div class="devis">
            <h3>Vous souhaitez obtenir un devis ?</h3>
            <p>Réservez en ligne 24/24, 7j/7 en quelques clics</p>
            <button style="background-color: gray;"><a style="color: white;" href="service.php">PRENDRE RENDEZ- VOUS</a></button>
        </div>

        <div class="contact">
            <div class="contact-left">
                <p><span><i class="fa-solid fa-phone" style="color: #219ebc"></i></span> <strong>Nous appeler</strong></p>
                <span style="color: red;">09 77 40 19 27</span>
                <p>
                    Contactez-nous par téléphone (1) <br>
                    du lundi au vendredi de 8h à <br>
                    20h, le samedi et dimanche de <br>
                    8h à 19h et les jours fériés de 9h <br>
                    à 18h. <br>
                    (Prix d?un appel local)
                </p>
            </div>

            <div class="contact-middle">
                <p><span><i class="fa-solid fa-message" style="color: #219ebc"></i></span> <strong>Nous appeler</strong></p>
                <span style="color: red;">Service client</span>
                <p>
                    Nous nous engageons à <br>
                    vous répondre sous 48 <br>
                    heures ouvrées. <br> <br>
                    <button style="width: 150px; border-radius: 25px;"><a style="color: gray; text-decoration: none;" href="contact.php">Nous écrire</a></button>
                </p>
            </div>

            <div class="contact-right">
                <p style="font-size: 0.6em">
                Afin d?améliorer la qualité de nos services et de faciliter leur prise en
                charge par nos partenaires, vos appels seront enregistrés. Sous
                réserve de vos choix, vous pourrez recevoir des offres ou participer à
                des enquêtes concernant Sowb
                ou ses partenaires. Vous pouvez
                à tout moment vous opposer à recevoir des offres de notre part ou
                vous inscrire sur la liste d?opposition au démarchage téléphonique
                www.bloctel.gouv.fr. Vous pouvez aussi demander à accéder, à faire
                porter auprès d?un tiers, à faire rectifier ou à faire supprimer les
                informations vous concernant. Enfin, vous pouvez nous préciser le
                sort des informations vous concernant en cas de décès.
                </p>
            </div>
        </div>
    </div>
    <div class="sep"></div>
    <div class="sep"></div>
    <?php include_once "footer.php" ?>
</body>

</html>