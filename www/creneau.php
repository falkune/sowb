<?php
require_once('core/connexion.php');
$connexion = connexion();
$request = $connexion->prepare("SELECT * FROM creneaux");
$request->execute();
$creneaux = $request->fetchAll(PDO::FETCH_ASSOC);

?>
<div>
    <div class="progressbar">
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #348f72; border-radius: 50px;"></div>
        <div style="width: 20%;"></div>
        <div style="width: 20%;"></div>
    </div>
    <p class="etape">
        <span class="etapes">Diagnostic</span>
        <span class="etapes">Assurance</span>
        <span class="etapes">Rendez-vous</span>
        <span class="etapes">Coordonnées</span>
        <span class="etapes">Confirmation</span>
    </p>
    <div class="rdv">
        <div class="rdv_gauche">
            <div class="">
                <p class="text-bg-primary text-center p-2 text-white">Penons Rendez-vous</p>
                <p class="text-center p-2">Choisissez une date et un créneau</p>
                <p class="text-center p-2">Durée prévue: 60 minutes</p>

                <div class="rdv_creneau">
                    <div class="date">
                        <div id="navButtons">
                            <div class="d-flex justify-content-between">
                                <button class="nav-btn" id="previousButton"><< Mois précédent</button>
                                <button class="nav-btn" id="nextButton">Mois suivant >></button>
                            </div>
                            <p id="monthHeader" class="text-center"></p>
                        </div>

                        <div id="calendarContainer"></div>
                    </div>
                    <div class="creneau">
                        <?php foreach($creneaux as $c) { ?>
                            <button class="crn" value="<?= $c['creneau']; ?>"><?= $c['creneau']; ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="rdv_droite">
            <p>Mon résumé</p>
            <div class="resume">
                <input id="diag" type="checkbox" class="check" checked>
                <label for="">Diagnostic</label>
            </div>

            <div class="resume">
                <input id="assur" type="checkbox" class="check" checked>
                <label for="">Assurance</label>
            </div>

            <div class="resume">
                <input id="rv" type="checkbox" class="check">
                <label for="">Rendez-vous</label>
            </div>

            <div class="resume">
                <input id="cord" type="checkbox" class="check">
                <label for="">Coordonées</label>
            </div>

            <div class="resume">
                <input id="conf" type="checkbox" class="check">
                <label for="">Confirmation</label>
            </div>
            <div class="sep"></div>
            <div class="sep"></div>
            <div class="sep"></div>
            <div class="sep"></div>
            <div class="resume">
                <button id="suite_rv" style="width: 100%; background-color: none; border: none; height: 100%;">étape
                    suivante</button>
            </div>
        </div>
    </div>
</div>