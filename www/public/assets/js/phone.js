class Piece {
    constructor(parent, value) {
        this.elmnt = $("<li>" + value + "</li>");
        this.elmnt.addClass("liste");

        parent.append(this.elmnt)

        this.elmnt.click(() => {
            this.loadMarque()
            showMarque = true;
        })
    }

    loadMarque() {
        $.ajax({
            method: 'get',
            url: 'http://sowb.com/api/marque/phone',
            contentType: "application/json",
            success: function (data) {
                console.log(data)
                // $("#marque").append(marque)
            },
            error: function (xhr, status, error) {
                console.error("Erreur AJAX : " + status + ", " + error);
            }
        })
    }

    drawMarque(marques){
        
    }
}

let showMarque = false; // pour afficher la liste des marque
// la liste des pieces
const items = ["# 1 Ecran", "# 2 Ecouteur interne avec micro et capteurs", "# 3 Haut-parleur externe", "# 4 Batterie", "# 5 Lecteur de carte Sim", "# 6 Lecteur de carte SD", "# 7 Taptic Engine/ vibreur", "# 8 Caméras arrière", "# 9 Caméra avant", "# 10 Connecteur de charge", "# 11 bouton latéral", "# 12 Nappe réseau", "# 13 Nappe antenne", "# 14 Nappe induction/ volume / vibreur / power", "# 15 Chassis", "# 16 Nappe QI magsafe (seulement iPhone)"];

// les element marque
const marque = '<button class="liste logo_m" name="marque" value="apple"></button> <button class="liste logo_m" value="1">Apple</button><button class="liste logo_m" value="huawei">huawei</button><button class="liste logo_m" value="xiaomi">xiaomi</button><button class="liste logo_m" value="oppo">oppo</button> <button class="liste logo_m" value="wiko">wiko</button><button class="liste logo_m" value="sony">sony</button><button class="liste logo_m" value="6">Asus</button><button class="liste logo_m" value="motorola">motorola</button><button class="liste logo_m" value="zte">ZTE</button>';

items.forEach(element => {
    (new Piece($(".composant"), element));
});








