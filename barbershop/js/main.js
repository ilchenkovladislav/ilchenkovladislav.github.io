let login = document.querySelector(".user-list__login");
let loginForm = document.querySelector(".user-list__login-form");
let loginFormTablet = document.querySelector(".login-popup");
let loginFormClose = document.querySelector(".login-popup__close");
let preloader = document.querySelector(".preloader");

let preloader__text = document.querySelector(".preloader__text");

let preloader__close = document.querySelector(".preloader__close");

login.addEventListener("click", function (e) {
    e.preventDefault();
    loginForm.classList.toggle("user-list__login-form--opened");
    loginFormTablet.classList.toggle("login-popup--opened");
});

loginFormClose.addEventListener("click", function (e) {
    e.preventDefault();
    loginFormTablet.classList.toggle("login-popup--opened");
});