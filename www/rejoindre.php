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
    <title>Rejoindre sowb</title>
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
        <h1 class="text-center">Rejoignez nos équipes rapidement !?</h1>
        <div class="sep"></div>
        <div class="postuler">
            <p>Formulaire de candidature a un poste</p>
            <p>Merci pour l'interet que vous portez à travailler a nos coté. Veuillez vérifier ci-dessous les offres de postes disponibles qui repondent à votre recherche puis y postuler en completant le formulaire de candidature.</p>
            <hr>
            <form class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="votre email">
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">A quelle offre candidatez-vous?</label>
                    <select id="inputState" class="form-select">
                        <option value="">Choisir une offre</option>
                        <option>offre 1</option>
                        <option>offre 2</option>
                        <option>offre 3</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Disponibilité</label>
                    <input type="date" class="form-control">
                </div>
                <label for="inputAddress" class="form-label">Situation</label>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situation">
                        <label class="form-check-label">
                            Employé(e)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situation">
                        <label class="form-check-label">
                            Sans emploi
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situation">
                        <label class="form-check-label">
                            Independant(e)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="situation">
                        <label class="form-check-label">
                            Étudiant(e)
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Votre CV</label>
                    <input type="file" class="form-control">
                </div>
                <hr>
                <label for="inputAddress" class="form-label">Voulez vous lister vos référents</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ref">
                    <label class="form-check-label">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ref">
                    <label class="form-check-label">
                        Non
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Prenom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="votre email">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary">Soumettre votre candidature</button>
                </div>
            </form>
        </div>
    </div>

    <div class="sep"></div>
    <div class="sep"></div>
    <?php include_once "footer.php" ?>
</body>

</html>