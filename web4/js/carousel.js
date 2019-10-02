let btnPrev = document.querySelector(".reviews__prev");
let btnNext = document.querySelector(".reviews__next");
let reviewsList = document.querySelector(".reviews__list");

let reviewsItems = document.querySelectorAll(".reviews__item");
let reviewsToggles = document.querySelectorAll(".reviews__toggle");


let counter = 0;
let translateX = 0;
let sizeTranslate = 0;

if (window.innerWidth > 1200) {
    sizeTranslate = 960;
} else if (window.innerWidth > 768) {
    sizeTranslate = 640;
} else {
    sizeTranslate = window.innerWidth * 0.8;
}

window.addEventListener("resize", function () {
    if (window.innerWidth > 1200) {
        sizeTranslate = 960;
    } else if (window.innerWidth > 768) {
        sizeTranslate = 640;
    } else {
        sizeTranslate = window.innerWidth * 0.9;
    }
})

let clear = function () {
    for (var i = 0; i < reviewsToggles.length; i++) {
        reviewsToggles[i].classList.remove("slider__toggle--active");
    }
}

btnNext.addEventListener("click", function () {
    if (counter + 1 < reviewsItems.length) {
        counter++;
        translateX = -sizeTranslate * counter;
        reviewsList.style.transform = "translateX(" + translateX + "px)";
    }

    clear();
    reviewsToggles[counter].classList.add("slider__toggle--active");
})


btnPrev.addEventListener("click", function () {
    if (counter - 1 >= 0) {
        counter--;
        translateX = -sizeTranslate * counter;
        reviewsList.style.transform = "translateX(" + translateX + "px)";
    }

    clear();
    reviewsToggles[counter].classList.add("slider__toggle--active");
})

for (var i = 0; i < reviewsToggles.length; i++) {

    reviewsToggles[i].addEventListener("click", function () {
        translateX = i * -sizeTranslate;
        reviewsList.style.transform = "translateX(" + translateX + "px)";

        clear();
        
        reviewsToggles[i].classList.add("slider__toggle--active");

        counter = i; 
    })
}