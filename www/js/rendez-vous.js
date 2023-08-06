$(document).ready(() => {
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
            $("#modele").removeClass("hide");
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
        $("#type").removeClass("hide");
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
    });

    // si etape diagnostique fini
    $("#suite_diag").click(() => {
        localStorage.setItem("diagnostic", "end");
        // localStorage.setItem("endDiagnostic", true);
        endDiagnostic = true;
        $("#phone_diagnostic").addClass("hide");
        $("#assurance").removeClass("hide");
        // $("#diag").prop("checked", true);
    });


    // si etatpe assurance terminé
    $("#suite_assu").click(() => {
        localStorage.setItem("assurance", "end");
        localStorage.setItem("assurance", $("#assu").val());
        localStorage.setItem("code_assurance", $("#code_assu").val());
        // localStorage.setItem("endAssu", true);
        endAssu = true;
        $("#assurance").addClass("hide");
        $("#rdv").removeClass("hide");
        // $("#assur").prop("checked", true);
    });


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
        console.log(year, month, day);
        const selectedCells = document.querySelectorAll('.selected');
        for (const selectedCell of selectedCells) {
            selectedCell.classList.remove('selected');
        }

        const selectedDateCell = document.querySelector(`#calendar td[data-day="${day}"]`);
        if (selectedDateCell) {
            selectedDateCell.classList.add('selected');

            const selectedDate = new Date(year, month, day);
            const selectedDateContainer = document.getElementById('selectedDateContainer');
            selectedDateContainer.textContent = `Date choisie : ${day}/${month + 1}/${year}`;

            // Récupérer le mois et l'année
            const selectedMonth = month + 1;
            const selectedYear = year;
            console.log(`Date : ${day}/${selectedMonth}/${selectedYear}`);

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

});