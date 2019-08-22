
$(document).ready(function () {

   $("#loginBtn").on("click", function () {

       $('#loginModal').modal();
   } );

   $('#signUpBtn').on('click', function () {
       $('#signUpModal').modal();
   });

   $('#loginSign').on('click', function () {
       $('#signUpModal').modal();
   });

    $("#loginSign").on('click',function() {
        $('#loginModal').modal('hide');
    });

    $("#signLogin").on('click',function() {
        $('#loginModal').modal();
    });

    $("#signLogin").on('click',function() {
        $('#signUpModal').modal('hide');
    });

    $("#errorOk").on('click', function () {
        $('#signUpModal').modal();
    });






    /*$('#registration').on('click',function () {
        var form = $('signUpForm');
        var form_data = form.serialize();
        var message = $('#signUpMessage');
        console.log(form_data);
        $.ajax({
            type: 'POST',
            url: 'Views/validationRegistration.php?registration=true',
            data: form_data,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    form.submit();
                } else {
                    message.html(response.message);
                    message.attr('hidden', false);
                }
            },
            error: function (data, textStatus, xhrObject) {
                alert("Error");
                console.log(data.message);
            }
        })
    })*/

});

