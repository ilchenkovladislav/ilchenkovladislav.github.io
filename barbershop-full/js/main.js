let login = document.querySelector(".user-list__login");
let loginForm = document.querySelector(".login-popup");
let loginFormClose = document.querySelector(".login-popup__close");
let loginFormLogin = document.querySelector(".login-popup__login");

let navMain = document.querySelector(".main-nav");
let navToggle = document.querySelector(".main-nav__toggle");

// login-popup
login.addEventListener("click", function (e) {
    e.preventDefault();
    loginForm.classList.toggle("login-popup--opened");
    loginFormLogin.focus();
    
    navMain.classList.remove("main-nav--opened");
    navMain.classList.add("main-nav--closed");
});

loginFormClose.addEventListener("click", function (e) {
    e.preventDefault();
    loginForm.classList.toggle("login-popup--opened");
});

window.addEventListener("keydown", (e) => {
    if (e.code === "Escape" && loginForm.classList.contains("login-popup--opened")) {
        loginForm.classList.remove("login-popup--opened");
    }
})


// nav-menu
navMain.classList.remove("main-nav--nojs");

navToggle.addEventListener("click", function () {
    if (navMain.classList.contains("main-nav--closed")) {
        navMain.classList.remove("main-nav--closed");
        navMain.classList.add("main-nav--opened");
    } else {
        navMain.classList.remove("main-nav--opened");
        navMain.classList.add("main-nav--closed");
    }
});