var leftSlide = document.getElementsByClassName("slider__slideImage");
var rightSlide = document.getElementsByClassName("slider__slideAside");
var imgIndex = 0;

setInterval(function () {
    leftSlide[imgIndex].classList.remove("slideActive");
    rightSlide[imgIndex].classList.remove("slideActive");
    if (imgIndex == 2) {
        imgIndex = 0;
    } else imgIndex++;
    leftSlide[imgIndex].classList.add("slideActive");
    rightSlide[imgIndex].classList.add("slideActive");

}, 5000);

