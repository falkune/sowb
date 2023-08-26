<div>
    <div class="progressbar">
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #b5e48c; border-radius: 50px;"></div>
        <div style="width: 20%; background-color: #348f72; border-radius: 50px;"></div>
        <div style="width: 20%;"></div>
    </div>
    <div class="sep"></div>
    <p class="etape">
        <span class="etapes" >Diagnostic</span>
        <span class="etapes" >Assurance</span>
        <span class="etapes" >Rendez-vous</span>
        <span class="etapes" >Coordonnées</span>
        <span class="etapes">Confirmation</span>
    </p>
    <div class="rdv">
        <div class="rv_gauche">
            <div class="">
                <p class="text-bg-primary text-center p-2 text-white">Renseignez vos Coordonnées</p>
                
                <form>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputEmail1" class="form-label">Nom*</label>
                        <input type="text" class="form-control w-75" id="nom" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Prenom*</label>
                        <input type="text" class="form-control w-75" id="prenom" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Adresse*</label>
                        <input type="text" class="form-control w-75" id="adresse" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Complément d'adresse</label>
                        <input type="text" class="form-control w-75" id="complement">
                    </div>

                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Code postal*</label>
                        <input type="text" class="form-control w-75" id="cp" required>
                    </div>

                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Ville*</label>
                        <input type="text" class="form-control w-75" id="ville" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Pays*</label>
                        <input type="text" class="form-control w-75" id="pays" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Téléphne</label>
                        <input type="text" class="form-control w-75" id="tel" required>
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Téléphne mobile</label>
                        <input type="text" class="form-control w-75" id="mobile">
                    </div>
                    <div class="d-lg-flex justify-content-lg-between m-2">
                        <label for="exampleInputPassword1" class="form-label">Email*</label>
                        <input type="email" class="form-control w-75" id="email">
                    </div>

                </form>
                
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
                <input id="rv" type="checkbox" class="check" checked>
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
                <button id="suite_crdn" style="width: 100%; background-color: none; border: none; height: 100%;">Valider</button>
            </div>
        </div>
    </div>
</div>