let login = document.querySelector(".user-list__login");
let loginForm = document.querySelector(".user-list__login-form");
let loginFormTablet = document.querySelector(".login-popup");
let loginFormClose = document.querySelector(".login-popup__close");

login.addEventListener("click", function (e) {
    e.preventDefault();
    loginForm.classList.toggle("user-list__login-form--opened");
    loginFormTablet.classList.toggle("login-popup--opened");
});

loginFormClose.addEventListener("click", function (e) {
    e.preventDefault();
    loginFormTablet.classList.toggle("login-popup--opened");
});



let navMain = document.querySelector(".main-nav");
let navToggle = document.querySelector(".main-nav__toggle");

navMain.classList.remove("main-nav--nojs");

navToggle.addEventListener("click", function () {
    if (navMain.classList.contains("main-nav--closed")) {
        navMain.classList.remove("main-nav--closed");
        navMain.classList.add("main-nav--opened");
    } else {
        navMain.classList.remove("main-nav--opened");
        navMain.classList.add("main-nav--closed");
    }
})