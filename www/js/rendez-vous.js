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
            console.log($(this).val())
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
                        $('#modeles').append(nouveauBouton);
                        // nouveauBouton.appendTo('#modeles');
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Erreur AJAX : " + status + ", " + error);
                }
            })
        });
    });


    $("#modeles button").each(function () {
        $(this).on("click", function () {
            localStorage.setItem('type', $(this).val());
            console.log($(this).val());
            $.ajax({
                method: 'get',
                url: 'http://sowb.com/getType/' + $(this).val(),
                dataType: 'json',
                success: function (data) {
                    $("#types").empty();
                    data.modeles.forEach(element => {
                        var nouveauBouton = $('<button>', {
                            'class': 'liste model',
                            'name': 'model',
                            'value': element.id_modele,
                            'text': element.nom_modele
                        });
                        nouveauBouton.appendTo('#types');
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Erreur AJAX : " + status + ", " + error);
                }
            })
        });
    });
});