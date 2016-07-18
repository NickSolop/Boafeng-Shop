$(document).ready(function () {
    $('#remindpass').click(function () {

        $('#input-email-pass').fadeOut(200, function () {
            $('#block-remind').fadeIn(300);
        });
    });

    $('#prev-auth').click(function () {

        $('#block-remind').fadeOut(200, function () {
            $('#input-email-pass').fadeIn(300);
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
