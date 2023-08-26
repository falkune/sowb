$(document).ready(() => {
    let etape = localStorage.getItem('actif') ? localStorage.getItem('actif') : "diagnostic";
    localStorage.setItem('actif', etape);
    // click sur les composant
    $(".composant button").each(function () {
        $(this).on("click", function () {
            localStorage.setItem('composant', $(this).val());
            $("#marque").removeClass("hide");
            window.location.href = '#marque';
        });
    });

    if(localStorage.getItem('composant')){
        $("#marque").removeClass("hide");
    }

    // click sur les marques
    $("#marques button").each(function () {
        $(this).on("click", function () {
            localStorage.setItem('marque', $(this).val());
            $("#modele").removeClass("hide");
            $(".selected-marque").removeClass("selected-marque");
            $(this).toggleClass("selected-marque");
            window.location.href = '#modele';
            $.ajax({
                method: 'get',
                url: 'http://sowb.com/getModele/' + $(this).val(),
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

    if(localStorage.getItem('marque')){
        $("#modele").removeClass("hide");
    }

    // click sur les modeles
    $("#modeles").on("click", "button", function () {
        localStorage.setItem('modele', $(this).val());
        $("#type").removeClass("hide");
        $(".selected-model").removeClass("selected-model");
        $(this).toggleClass("selected-model");
        window.location.href = '#type';
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
    $("#types").on("click", "button", function () {
        localStorage.setItem('type', $(this).val());
        $(".selected-type").removeClass("selected-type");
        $(this).toggleClass("selected-type");
        window.location.href = '#assurance';
    });

    // si etape diagnostique terminé etape suivante assurance
    $("#suite_diag").click(() => {
        localStorage.setItem("actif", "assurance");

        $("#phone_diagnostic").addClass("hide");
        $("#assurance").removeClass("hide");
        window.location.href = '#assurance';
    });

    // si etatpe assurance terminé etape suivante creneau
    $("#suite_assu").click(() => {
        localStorage.setItem("actif", "creneau");
        localStorage.setItem("assurance", $("#assu").val());

        $("#assurance").addClass("hide");
        $("#rdv").removeClass("hide");
        window.location.href = '#rdv';
    });

    // si etape creneau terminé etape suivante coordonnée
    $("#suite_rv").click(() => {
        localStorage.setItem("actif", "coordonnee");
        $("#rdv").addClass("hide");
        $("#crdn").removeClass("hide");
        window.location.href = '#crdn';
    })

    // si etape coordonnée terminé etape suivante confirmation
    $("#suite_crdn").click(() => {
        localStorage.setItem("actif", "confirmation");
        $("#crdn").addClass("hide");
        $("#confirm").removeClass("hide");
        window.location.href = '#confirm';
    })

    // Pour le calendrier
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });

    let currentYear, currentMonth;

    // Fonction pour créer un calendrier
    function createCalendar(year, month) {
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDay = new Date(year, month, 1).getDay();

        const calendarContainer = document.getElementById('calendarContainer');
        calendarContainer.innerHTML = '';

        const calendarTable = document.createElement('table');
        calendarTable.id = 'calendar';

        const headerRow = document.createElement('tr');
        const daysOfWeek = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
        for (const day of daysOfWeek) {
            const th = document.createElement('th');
            th.textContent = day;
            headerRow.appendChild(th);
        }
        calendarTable.appendChild(headerRow);

        let dayCounter = 1;
        for (let i = 0; i < 6; i++) {
            const row = document.createElement('tr');
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDay) {
                    const td = document.createElement('td');
                    row.appendChild(td);
                } else if (dayCounter <= daysInMonth) {
                    const td = document.createElement('td');
                    td.textContent = dayCounter;
                    td.setAttribute('data-day', dayCounter);
                    td.addEventListener('click', (event) => selectDate(year, month, parseInt(event.target.textContent)));
                    row.appendChild(td);
                    dayCounter++;
                }
            }
            calendarTable.appendChild(row);
            if (dayCounter > daysInMonth) {
                break;
            }
        }

        calendarContainer.appendChild(calendarTable);
    }

    // Fonction pour sélectionner une date
    function selectDate(year, month, day) {
        const selectedCells = document.querySelectorAll('.selected');
        for (const selectedCell of selectedCells) {
            selectedCell.classList.remove('selected');
        }

        const selectedDateCell = document.querySelector(`#calendar td[data-day="${day}"]`);
        if (selectedDateCell) {
            selectedDateCell.classList.add('selected');

            // Récupérer le mois et l'année
            const selectedMonth = month + 1;
            const selectedYear = year;
            localStorage.setItem('date', `${day}-${selectedMonth}-${selectedYear}`);

            // Mise à jour du mois et de l'année
            currentMonth = month;
            currentYear = year;
        }
    }


    // Fonction pour afficher le mois précédent
    function previousMonth() {
        if (currentMonth === 0) {
            currentYear -= 1;
            currentMonth = 11;
        } else {
            currentMonth -= 1;
        }
        createCalendar(currentYear, currentMonth);
        updateMonthHeader(currentYear, currentMonth);
    }

    // Fonction pour afficher le mois suivant
    function nextMonth() {
        if (currentMonth === 11) {
            currentYear += 1;
            currentMonth = 0;
        } else {
            currentMonth += 1;
        }
        createCalendar(currentYear, currentMonth);
        updateMonthHeader(currentYear, currentMonth);
    }

    // Fonction pour mettre à jour l'en-tête du mois
    function updateMonthHeader(year, month) {
        const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        const monthHeader = document.getElementById('monthHeader');
        monthHeader.textContent = `${monthNames[month]} ${year}`;
    }


    // Obtenir la date actuelle
    const currentDate = new Date();
    currentYear = currentDate.getFullYear();
    currentMonth = currentDate.getMonth();

    // Créer le calendrier avec la date actuelle
    createCalendar(currentYear, currentMonth);
    updateMonthHeader(currentYear, currentMonth);

    // Ajouter des écouteurs d'événements aux boutons
    document.getElementById('previousButton').addEventListener('click', previousMonth);
    document.getElementById('nextButton').addEventListener('click', nextMonth);

    // fonction pour selectionner un creneau
    $(".creneau button").each(function() {
        $(this).on('click', function(){
            $('.selectCreneau').removeClass("selectCreneau"); // je desselectionne le creneau qui etait selectionne
            $(this).toggleClass("selectCreneau"); // je selectionne le creneau
            localStorage.setItem("creneau", $(this).val()); // je met sa valeur dans le local storage
        });
    })


    // fonction pour maintenir l'etape actuelle
    if(localStorage.getItem('actif') == "diagnostic"){
        $("#assurance").addClass("hide");
        $("#rdv").addClass("hide");
        $("#crdn").addClass("hide");
        $("#confirm").addClass("hide");
        $("#phone_diagnostic").removeClass("hide");
    }else if(localStorage.getItem('actif') == "assurance"){
        $("#phone_diagnostic").addClass("hide");
        $("#rdv").addClass("hide");
        $("#crdn").addClass("hide");
        $("#confirm").addClass("hide");
        $("#assurance").removeClass("hide");
    }else if(localStorage.getItem('actif') == "creneau"){
        $("#phone_diagnostic").addClass("hide");
        $("#assurance").addClass("hide");
        $("#crdn").addClass("hide");
        $("#confirm").addClass("hide");
        $("#rdv").removeClass("hide");
    }else if(localStorage.getItem('actif') == "coordonnee"){
        $("#phone_diagnostic").addClass("hide");
        $("#assurance").addClass("hide");
        $("#rdv").addClass("hide");
        $("#confirm").addClass("hide");
        $("#crdn").removeClass("hide");
    }else if(localStorage.getItem('actif') == "confirmation"){
        $("#phone_diagnostic").addClass("hide");
        $("#assurance").addClass("hide");
        $("#rdv").addClass("hide");
        $("#crdn").addClass("hide");
        $("#confirm").removeClass("hide");
    }

    $("#reprise").click(() => {
        localStorage.clear();
    })

    $("#autre-composant").click(() => {
        $("#composant-autre").removeClass("hide")
    })

    $("#print").click(() => {
        imprimerSection("confirm");
    })


    function imprimerSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            const printWindow = window.open('', '_blank');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Impression</title></head><body>');
            printWindow.document.write(section.innerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    }
    
});