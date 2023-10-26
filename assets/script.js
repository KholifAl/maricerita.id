document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const arrowLeft = document.querySelector(".arrow-left");
    const arrowRight = document.querySelector(".arrow-right");

    let currentIndex = 0;

    arrowLeft.addEventListener("click", function() {
        if (currentIndex > 0) {
            currentIndex--;
            slide();
        }
    });

    arrowRight.addEventListener("click", function() {
        if (currentIndex < slider.children.length - 1) {
            currentIndex++;
            slide();
        }
    });

    function slide() {
        const cardWidth = slider.querySelector(".card").offsetWidth;
        const offset = -currentIndex * cardWidth;
        slider.style.transform = `translateX(${offset}px)`;
    }
});
