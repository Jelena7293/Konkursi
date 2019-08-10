
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

});

