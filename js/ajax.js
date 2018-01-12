$(document).ready(function(){
    $("#send").click(function(){
        var content=$("input[name=content]").val();
        var phone=$("input[name=phone]").val();
        var email=$("input[name=mail]").val();
        var fullname=$("input[name=fullname]").val();
        
        $.ajax({
            type:"POST",
            url:"script/mail.php",
            data : {
                fullname : fullname,
                mail : email,
                phone : phone,
                content : content
            },

            success : function(msg){
                if(msg == "OK")
                    $(".confirm-msg").show();
                else
                    $(".fail-msg").show();

                content.val("");
                phone.val("");
                email.val("");
                fullname.val("");
            },

            error : function(err){
                $(".fail-msg").show();
            }
        });
    });
});