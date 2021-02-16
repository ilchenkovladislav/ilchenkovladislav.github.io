document.querySelector(".no-js").classList.remove("no-js");

const headerToggle = document.querySelector(".header__toggle");
const mobileWrapper = document.querySelector(".header__inner-wrapper");
const headerClose = document.querySelector(".header__close");

headerToggle.addEventListener("click", () => {
    mobileWrapper.classList.add("header__inner-wrapper--opened");
});

headerClose.addEventListener("click", () => {
    mobileWrapper.classList.remove("header__inner-wrapper--opened");
});

const faqQuestions = document.querySelectorAll(".faq__question");
const faqClose = document.querySelectorAll(".faq__close");

let closeAllAnswers = (questions) => {
    questions.forEach((question) => {
        if (question.nextElementSibling.classList.contains("faq__answer--opened")) {
            question.nextElementSibling.classList.remove("faq__answer--opened");
        }
    });
}

faqQuestions.forEach((question) => {
    question.addEventListener("click", () => {
        if (question.nextElementSibling.classList.contains("faq__answer--opened")) {
            question.nextElementSibling.classList.remove("faq__answer--opened");
        } else {
            closeAllAnswers(faqQuestions);
            question.nextElementSibling.classList.add("faq__answer--opened");
        }
    });
})

faqClose.forEach((close) => {
    close.addEventListener("click", () => {
        close.parentElement.classList.remove("faq__answer--opened");
    });
});

const faqMore = document.querySelector(".faq__more");
const faqItemsHidden = document.querySelectorAll(".faq__item--hidden");

faqMore.addEventListener("click", () => {
    faqMore.classList.add("faq__more--hidden");

    faqItemsHidden.forEach((item) => {
        item.classList.remove("faq__item--hidden");
    })
});