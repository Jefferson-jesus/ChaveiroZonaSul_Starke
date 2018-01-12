$(document).ready(function(){
    $('.carousel').carousel({
        interval: 3000
    });

    // $('#submit').click(function(){
    //     var nome1 = $('[name="name"]').val();
    //     var email1 = $('[name="email"]').val();
    //     var assunto1 = $('[name="assunto"]').val();
    //     var txtMsg1 = $('[name="txtMsg"]').val();
    //     // enviarEmail.php
    //     $.ajax({
    //         url: "enviarEmail.php",
    //         type: "POST",
    //         data:  { 'nome': nome1, 'email':email1, 'assunto':assunto1, 'txtMsg1':txtMsg1 },
    //         success: function (response) {
    //             var resp = response;
    //         },
    //         error: function (response) {
    //            var re = response;
    //         }

    //     });

    });
});
