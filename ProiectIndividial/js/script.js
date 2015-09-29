//validate register form
$(function() {
     // Setup form validation on the #register-form element
    $("#register-form").validate({ 
        // Specify the validation rules
        rules: {
            username:{
                required: true,
                username: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5

            },
            password_again : {
            	required: true,
                minlength : 5,
                equalTo: "#password"
            }
        },       
        // Specify the validation error messages
        messages: {
            username: {
                required: "Campul username este obligatoriu !"
            },
            password: {
                required: "Va rugam sa introduceți o parola!",
                minlength: "Parola trebuie sa contina cel putin 5 caractere!"
            },
            email: "Va rugam introduceti o adresa de email valida!",
            password_again: {
            	required: "Va rugam sa introduceți o parola!",
                minlength: "Parola trebuie sa contina cel putin 5 caractere!",
                equalTo: "Parola nu se potriveste!"
            }
        },      
        submitHandler: function(form) {
            form.submit();
        }
    });
  });

//validate login form
$(function() {
     // Setup form validation on the #login form element
    $("#login_form").validate({ 
        // Specify the validation rules
        rules: {
            username:{
                required: true,
                username: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            }
        },       
        // Specify the validation error messages
       messages: {
            username: {
                required: "Campul username este obligatoriu !"
            },
            password: {
                required: "Va rugam sa introduceți o parola!",
                minlength: "Parola trebuie sa contina cel putin 5 caractere!"
            },
            email: "Va rugam introduceti o adresa de email valida!"
        },            
        submitHandler: function(form) {
            form.submit();
        }
    });
  });

//validate login form
$(function() {
     // Setup form validation on the #login form element
    $("#add_form").validate({ 
        // Specify the validation rules
        rules: {
           doresc:{
                required: true,
                doresc: true
            },
            adresa: {
                required: true,
                adresa: true
            },
            judet: {
                required: true,
                judet: true
            },
            localitate: {
                required: true,
                localitate: true
            },
            zona: {
                required: true,
                zona: true
            },
            suputila: {
                required: true,
                suputila: true
            },
            finisaje: {
                required: true,
                finisaje: true
            },
            pret1: {
                required: true,
                pret1: true
            },
            observatii: {
                required: true,
                observatii: true
            },
            telefon: {
                required: true,
                telefon: true
            },

        },       
        // Specify the validation error messages
       messages: {
            doresc: {
                required: "Campul este obligatoriu!"
            },
            adresa: {
                required: "Campul este obligatoriu!"
               
            },
            judet: {
                required: "Campul este obligatoriu!"
            },
            localitate: {
                required: "Campul este obligatoriu!"
            },
            zona: {
                required: "Campul este obligatoriu!"
            },
            suputila: {
                required: "Campul este obligatoriu!"
            },
            finisaje: {
                required: "Campul este obligatoriu!"
            },
            pret1: {
                required: "Campul este obligatoriu!"
            },
            observatii: {
                required: "Campul este obligatoriu!"
            },
            telefon: {
                required: "Campul este obligatoriu!"
            },
        },            
        submitHandler: function(form) {
            form.submit();
        }
    });
  });

    function goBack() {
        window.history.back();
    }