<?php
session_start();
require(MODEL . DIRECTORY_SEPARATOR . 'DbConnect.php');
$connexion = DbConnect::getDbInstance(DBINFO);
?>
<!DOCTYPE html>
<html lang="en">

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
    <script src="<?= PHONE ?>" defer></script>
    <title>Diagnotique</title>
</head>

<body>
    <?php include_once NAVBAR ?>

    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

    <div>
        <p class="nostic">Diagnostic Assurance Rendez-vous Coordonnées Confirmation</p>
        <div class="diagnostic">
            <div class="left">
                <img src="<?= IMGS ?>/latel.png" alt="">
            </div>

            <div class="right">
                <ul class="composant">
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

     <!-- emplacement prevu pour afficher les marque -->
    <div id="marque">
        
    </div>

</body>

</html>