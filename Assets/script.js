
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

    $('#registration').on('click',function () {
        var form = $('#signUpForm');
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
                if (response.status == true)
                {
                    form.submit();
                }
                else
                {
                    message.html(response.message);
                    message.attr('hidden', false);
                }
            },
            error: function (data, textStatus, xhrObject) {
                alert("Error");
            }
        });
    });

    /*$('#login').on('click',function () {
        var form = $('#loginForm');
        var form_d = form.serialize();
        var message = $('#loginMessage');
        console.log(form_d);

        $.ajax({
            type: 'POST',
            url: 'Views/validationLogin.php?login=true',
            data: form_d,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                if (response.status == true)
                {
                    form.submit();
                }
                else
                {
                    message.html(response.message);
                    message.attr('hidden', false);
                }
            },
            error: function (data, textStatus, xhrObject) {
                alert("Error");
            }
        });
    });*/
    $('.view_data').click(function(){
        var user_id = $(this).attr("id");
        console.log(user_id);
        $.ajax({
            url:"Views/select.php",
            method:"post",
            data:{user_id:user_id},
            success:function(data){
                $('#user_detail').html(data);
                $('#approvedModal').modal();
            }
        });
    });
    $('.view-profile').click(function(e){
        var userProfileId = $(this).attr("id");
        console.log(userProfileId);
        $.ajax({
            url:"Views/change.php",
            method:"post",
            data:{userProfileId:userProfileId},
            success:function(data){
                $('#profileData').html(data);
                $('#profileModal').modal();
                console.log(data);
            }
        });
    });

    // $('#changeProfile').click(function () {
    //     $('input').removeAttr('disabled');
    // });

    // $('#changeProfile').on('click', function () {
    //
    // })

    $("#changeProfile").click(function(){
        console.log("ulazi!");
        $("#changeProfile").prop("disabled", false);
    });

});


// $(document).ready(function(){
//     $('.view_data').click(function(){
//         var user_id = $(this).attr("id");
//         console.log(user_id);
//         $.ajax({
//             url:"Views/select.php",
//             method:"post",
//             data:{user_id:user_id},
//
//             success:function(data){
//                 $('#user_detail').html(data);
//                 $('#approvedModal').modal();
//             }
//         });
//     });
// });

//*********************************
//ovo radi!!!!!!!!!!!!!!!!!!!!
// $(document).ready(function(){
//     $('.view_data').click(function(){
//         var user_id = $(this).attr("id");
//         console.log(user_id);
//         $.ajax({
//             url:"Views/select.php",
//             method:"post",
//             data:{user_id:user_id},
//
//             success:function(data){
//                 $('#user_detail').html(data);
//                 $('#dataModal').modal();
//             }
//         });
//     });
// });
//*********************************
