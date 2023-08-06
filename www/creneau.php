<div>
    <p class="etape">
        <span class="etapes" style="background-color: #348f72; color: white;">Diagnostic</span>
        <span class="etapes" style="background-color: #348f72; color: white;">Assurance</span>
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

                        <div id="selectedDateContainer"></div>
                    </div>
                    <div class="creneau">
                        <button class="crn">8H00 - 08H45</button>

                        <button class="crn">08H45 - 09H30</button>

                        <button class="crn">09H30 - 10H15</button>

                        <button class="crn">10H15 - 11H00</button>

                        <button class="crn">11H00 - 11H45</button>

                        <button class="crn">11H45 - 12H30</button>

                        <button class="crn">12H30 - 13H15</button>

                        <!-- <button class="crn">14H00 - 14H45</button>

                        <button class="crn">14H45 - 15H30</button>

                        <button class="crn">15H30 - 16H15</button>

                        <button class="crn">16H15 - 17H00</button>

                        <button class="crn">17H00 - 17H45</button>

                        <button class="crn">17H45 - 18H00</button>

                        <button class="crn">18H00 - 18H45</button>

                        <button class="crn">18H45 - 19H30</button>

                        <button class="crn">19H30 - 20H15</button>

                        <button class="crn">20H15 - 21H00</button> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="rv_droite">
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