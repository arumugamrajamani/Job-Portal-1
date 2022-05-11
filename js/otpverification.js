$(document).ready(function(){


    //when form is submittd
    $("form").submit(function(event){
        event.preventDefault();
        let otp = $('#otp').val()
        let submit = $('#submit').val()

        $.ajax({
            url: "php/otpverification.inc.php",
            method: "POST",

            data: {
                otp: otp,
                submit: submit
            },
            dataType: 'json',

            success: function(data){
                if (data.status == "success"){
                    window.location.href = "reset-password.php"
                }else{
                    $('#otp-errorMsg').text("OTP is not valid.");
                }
            }
        })
    })
})