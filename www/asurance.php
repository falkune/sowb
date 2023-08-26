<div>
    <div class="progressbar">
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #348f72; border-radius: 50px;"></div>
        <div style="width: 20%;"></div>
        <div style="width: 20%;"></div>
        <div style="width: 20%;"></div>
    </div>
    <div class="sep"></div>
    <p class="etape">
        <span class="etapes">Diagnostic</span>
        <span class="etapes">Assurance</span>
        <span class="etapes">Rendez-vous</span>
        <span class="etapes">Coordonnées</span>
        <span class="etapes">Confirmation</span>
    </p>
    <div class="assurance">
        <div class="rv_gauche">
            <div class="list_assurance">
                <p>Facultatif - Renseignez votre Assurance</p>
                <select id="assu">
                    <option value="Assureur 1">Assureur 1</option>
                    <option value="Assureur 2">Assureur 2</option>
                    <option value="Assureur 3">Assureur 3</option>
                    <option value="Assureur 4">Assureur 4</option>
                    <option value="Assureur 5">Assureur 5</option>
                </select>
            </div>

            <div class="code_assu">
                <p>Renseignez votre Code de garantie</p>
                <input type="text" id="code_assu" placeholder="saisir votre code">
            </div>
        </div>

        <div class="rv_droite">
            <p>Mon résumé</p>
            <div class="resume">
                <input id="diag" type="checkbox" class="check" checked>
                <label for="">Diagnostic</label>
            </div>

            <div class="resume">
                <input id="assur" type="checkbox" class="check">
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
                <button id="suite_assu" style="width: 100%; background-color: none; border: none; height: 100%;">étape
                    suivante</button>
            </div>
        </div>
    </div>
</div>