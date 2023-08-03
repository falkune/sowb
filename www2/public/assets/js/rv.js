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
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        }

        showSlide(slideIndex);
        carousel.find(".carousel-prev").click(function () {
            prevSlide();
        });

        carousel.find(".carousel-next").click(function () {
            nextSlide();
        });
    });

    $("#tel").click(() => {
        // $(".car").css({
        //     display: "none"
        // });
        // $(".diagnostic").removeClass("hide");
    });

    $("#tab").click(() => {

    });

    $("#ordi").click(() => {

    });

});