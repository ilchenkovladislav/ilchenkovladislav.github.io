$(() => {
    $.validator.addMethod( "mobileRU", function( phone_number, element ) {
        var ruPhone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
        return this.optional( element ) || ruPhone_number.length > 9 && /^((\+7|7|8)+([0-9]){10})$/.test( ruPhone_number );
    }, "Please specify a valid mobile number" );

    let validator = $("#form-reg").validate({
        onkeyup: false,
        onclick: false,
        errorElement: "span",
        ignore: ".ignore",

        onfocusout: function(element) {
            $(element).valid();
        },

        rules: {
            secondName: {
                required: true,
                minlength: 2
            },

            firstName: {
                required: true,
                minlength: 2
            },

            thirdName: {
                required: true,
                minlength: 2
            },

            phone: {
                required: true,
                mobileRU: true
            },

            email: {
                required: true,
                email: true
            },

            beards: {
                required: true
            }
        },

        messages: {
            secondName: {
                required: "Укажите вашу фамилию",
                minlength: "Длина фамилии должна быть не менее 2 символов"
            },
            
            firstName: {
                required: "Укажите ваше имя",
                minlength: "Длина имени должна быть не менее 2 символов"
            },
            
            thirdName: {
                required: "Укажите ваше отчество",
                minlength: "Длина отчества должна быть не менее 2 символов"
            },


            phone: {
                required: "Укажите номер телефона",
                mobileRU: "Укажите корректный номер телефона"
            },
            
            email: {
                required: "Укажите вашу электронную почту",
                email: "email должен быть вида: example@mail.com"
            },
            
            beards: {
                required: "Выберете модель бороды"
            }
        },

        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
            $(element.form).find("label[for=" + element.id + "]").addClass(errorClass);


            let wrappers = [...$(".form-register__input-wrapper")];

            wrappers.forEach((wrapper) => {
                let [child] = $(wrapper).children();

                if ($(child).hasClass("error")) {
                    $(wrapper).addClass("error");
                }
            })
        },

        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element.form).find("label[for=" + element.id + "]").removeClass(errorClass);

            let wrappers = [...$(".form-register__input-wrapper")];
            
            wrappers.forEach((wrapper) => {
                let children = $(wrapper).children();
                if ($(children).hasClass("valid")) {
                    $(wrapper).removeClass("error");
                }
            })
        },
    }); 

    
    let btnFormSubmit = $(".form-register__submit");
    let inputFields = $(".form-register__input");

    let fields = [];
    for (let i = 0; i < inputFields.length-1; i++) {
        fields.push(inputFields[i]);
    }

    fields.forEach((field) => {
        $(field).on("input change", function (){
            if (validator.checkForm()) {    
                btnFormSubmit.prop("disabled", false);
            } else {
                btnFormSubmit.prop("disabled", true);
            }
        })
    });

    let inputsRadio = $(".form-register__radio");

    inputsRadio = [...inputsRadio];

    inputsRadio.forEach((input) => {
        $(input).on("click", () => {
            if (validator.checkForm()) {    
                btnFormSubmit.prop("disabled", false);
            } else {
                btnFormSubmit.prop("disabled", true);
            }
        })
    })
})