$(document).ready(() => {

    if (localStorage.getItem('service') === "phone") {
        $("#tel").removeClass("hide");
    } else {
        $("#tel").addClass("hide");
    }

    // click sur les composant
    $(".composant button").each(function () {
        $(this).on("click", function () {
            localStorage.setItem('composant', $(this).val());
            $("#marque").removeClass("hide");
        });
    });

    // click sur les marques
    $("#marques button").each(function () {
        $(this).on("click", function () {
            localStorage.setItem('marque', $(this).val());
            $("#modele_p").removeClass("hide");
            $.ajax({
                method: 'get',
                url: 'http://sowb.com/getModele/' + $(this).val(),
                // contentType: "application/json",
                dataType: 'json',
                success: function (data) {
                    $("#modeles").empty();
                    data.modeles.forEach(element => {
                        var nouveauBouton = $('<button>', {
                            'class': 'liste model',
                            'name': 'model',
                            'value': element.id_modele,
                            'text': element.nom_modele
                        });
                        nouveauBouton.appendTo('#modeles');
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Erreur AJAX : " + status + ", " + error);
                }
            })
        });
    });
    
    // click sur les modeles
    $("#modeles").on("click", "button", function () {
        localStorage.setItem('modele', $(this).val());
        $("#type_p").removeClass("hide");
        var modeleId = $(this).val();
        $.ajax({
            method: 'get',
            url: 'http://sowb.com/getTyppe/' + modeleId,
            dataType: 'json',
            success: function (data) {
                $("#types").empty();
                data.modeles.forEach(element => {
                    var nouveauBouton = $('<button>', {
                        'class': 'liste model',
                        'name': 'model',
                        'value': element.id_type,
                        'text': element.nom_type
                    });
                    nouveauBouton.appendTo('#types');
                });
            },
            error: function (xhr, status, error) {
                console.error("Erreur AJAX : " + status + ", " + error);
            }
        });
    });

    // click sur les types
    $("#types").on( "click", "button", function () {
        localStorage.setItem('type', $(this).val());
    });
});