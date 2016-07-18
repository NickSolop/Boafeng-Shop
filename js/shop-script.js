$(document).ready(function () {
    $('#reloadcaptcha').click(function () {
        $('#block-captcha > img').attr("src", "/reg/reg_captcha.php?r=" + Math.random());
    });


    $('#submitenter').toggle(
        function () {
            $("#submitenter").attr("id", "");
            $("#block-top-auth").fadeIn(200);
        },
        function () {
            $("#submitenter").attr("id", "");
            $("#block-top-auth").fadeOut(200);
        }
    );


    $("#button-auth").click(function () {

        var auth_login = $("#auth_login").val();
        var auth_pass = $("#auth_pass").val();


        if (auth_login == "" || auth_login.length > 30) {
            $("#auth_login").css("borderColor", "#FDB6B6");
            send_login = 'no';
        } else {

            $("#auth_login").css("borderColor", "#DBDBDB");
            send_login = 'yes';
        }


        if (auth_pass == "" || auth_pass.length > 15) {
            $("#auth_pass").css("borderColor", "#FDB6B6");
            send_pass = 'no';
        }
        else {
            $("#auth_pass").css("borderColor", "#DBDBDB");
            send_pass = 'yes';
        }


        if ($("#rememberme").prop('checked')) {
            auth_rememberme = 'yes';
        }
        else {
            auth_rememberme = 'no';
        }

        if (send_login == 'yes' && send_pass == 'yes') {
            $("#button-auth").hide();
            $(".auth-loading").show();

            $.ajax({
                type: "POST",
                url: "/include/auth.php",
                data: "login=" + auth_login + "&pass=" + auth_pass + "&rememberme=" + auth_rememberme,
                dataType: "html",
                cache: false,
                success: function (data) {

                    if (data == 'yes_auth') {
                        location.reload();
                    }
                    else {
                        $("#message-auth").slideDown(400);
                        $(".auth-loading").hide();
                        $("#button-auth").show();

                    }

                }
            });
        }
    });


    $('#remindpass').click(function () {

        $('#input-email-pass').fadeOut(200, function () {
            $('#block-remind').fadeIn(300);
        });
    });

    $('#button-remind').click(function () {

        var recall_email = $("#remind-email").val();

        if (recall_email == "" || recall_email.length > 20) {
            $("#remind-email").css("borderColor", "#FDB6B6");

        } else {
            $("#remind-email").css("borderColor", "#DBDBDB");

            $("#button-remind").hide();
            $(".auth-loading").show();

            $.ajax({
                type: "POST",
                url: "/include/remind-pass.php",
                data: "email=" + recall_email,
                dataType: "html",
                cache: false,
                success: function (data) {

                    if (data == 'yes') {
                        $(".auth-loading").hide();
                        $("#button-remind").show();
                        $('#message-remind').attr("class", "message-remind-success").html("На ваш e-mail выслан пароль.").slideDown(400);

                        setTimeout("$('#message-remind').html('').hide(),$('#block-remind').hide(),$('#input-email-pass').show()", 3000);

                    } else {
                        $(".auth-loading").hide();
                        $("#button-remind").show();
                        $('#message-remind').attr("class", "message-remind-error").html(data).slideDown(400);

                    }
                }
            });
        }
    });
});

  

