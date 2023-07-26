$(document).ready(() => {
    $(".carousel-container").each(function () {
        var slideIndex = 0;
        var carousel = $(this);
        var slides = carousel.find(".carousel-slide img");
        function showSlide(index) {
            slides.hide();
            slides.eq(index).show();
        }

        function nextSlide() {
            // slideIndex = (slideIndex + 1) % slides.length;
            slideIndex++;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            showSlide(slideIndex);
        }

        function prevSlide() {
            // slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            slideIndex--;
            if (slideIndex <= 0) {
                slideIndex = slides.length - 1;
            }
            showSlide(slideIndex);
        }

        // Afficher la première image au chargement
        showSlide(slideIndex);
        // Changer de diapositive lorsque les flèches sont cliquées
        carousel.find(".carousel-prev").click(function () {
            prevSlide();
        });

        carousel.find(".carousel-next").click(function () {
            nextSlide();
        });
    });

    $("#tel").click(() => {
        $(".car").css({
            display: "none"
        });
        $(".diagnostic").removeClass("hide");
    });

    $("#tab").click(() => {

    });

    $("#ordi").click(() => {

    });
});