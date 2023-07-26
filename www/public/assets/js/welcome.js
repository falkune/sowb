$(document).ready(() => {
    // background changeant
    // setInterval(changeBackground, 5000);

    let imgs = [
        "../imgs/ordin.jpg",
        "../imgs/tb.png",
        "../imgs/tele.png",
    ];

    let curentIndex = 0;

    function changeBackground() {
        $(".banner").css("background-image", "url(" + imgs[curentIndex] + ")");
        curentIndex = (curentIndex + 1) % imgs.length;
    }

});
