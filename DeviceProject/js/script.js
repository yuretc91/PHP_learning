$(function () {
    var leftArr = $(".slideImage slideActive");
    var rightArr = $(".slideAside slideActive");
    var imgs = document.querySelectorAll("#slider > img");
    var opisanies = document.querySelectorAll("#opisanie > p");
    var imgIndex = 0;


    rightArr.click(function () {
        leftArr[imgIndex].removeClass("slideActive");
        if (imgIndex == 3) {
            imgIndex = 0;
        } else imgIndex++;
        leftArr[imgIndex].addClass("slideActive");
        console.log(imgIndex);

    });
   /* leftArr.onclick = function () {
        imgs[imgIndex].classList.remove("active");
        if (imgIndex == 0) {
            imgIndex = 6;
        } else imgIndex--;
        imgs[imgIndex].classList.add("active");
    };*/














});