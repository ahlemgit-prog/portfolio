$(document).ready(function(){

    (function($) {
        "use strict";


    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "Veuillez encoder la bonne réponse");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Avez-vous un nom, n'est-ce pas ?",
                    minlength: "Votre nom doit comporter au moins 2 caractères"
                },
                subject: {
                    required: "Avez-vous un objet ? Faites le nous savoir !",
                    minlength: "Votre objet doit comporter au moins 4 caractères"
                },
                number: {
                    required: "Avez-vous un numéro, n'est-ce pas ?",
                    minlength: "Votre numéro doit comporter au moins 5 caractères"
                },
                email: {
                    required: "Veuillez introduire votre e-mail."
                },
                message: {
                    required: "Veuillez écrire quelque chose pour envoyer ce formulaire",
                    minlength: "N'hésitez pas à vous exprimer !"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })

 })(jQuery)
})
