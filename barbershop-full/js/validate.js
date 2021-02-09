let nameRegExp = /^[а-яА-Я]{2,}$/;
let phoneRegExp = /^[+][0-9]{11}$/;
let emailRegExp = /^[a-zA-Z0-9]{2,}[@][a-zA-Z]{2,}[.][a-zA-Z]{2,}$/;

let firstNameField = document.querySelector("#first-name");
let secondNameField = document.querySelector("#second-name");
let thirdNameField = document.querySelector("#third-name");

let phoneField = document.querySelector("#phone");
let emailField = document.querySelector("#email");

let btnFormSubmit = document.querySelector(".form-register__submit");
let form = document.querySelector(".form-register__form");

let inputFields = document.querySelectorAll(".form-register__input");

btnFormSubmit.setAttribute("disabled", "");

for (var i = 0; i < inputFields.length; i++) {
    inputFields[i].addEventListener("change", function (){
        if (nameRegExp.test(secondNameField.value) && nameRegExp.test(firstNameField.value) && nameRegExp.test(thirdNameField.value) && phoneRegExp.test(phoneField.value) && emailRegExp.test(emailField.value)) {
            btnFormSubmit.removeAttribute("disabled");
        } else {
            btnFormSubmit.setAttribute("disabled", "");
        }
    })
}