$(document).ready(function(){


    toastr.info('Check your spam if you cant find it.', 'Enter the code that was sent to your email.');
    //when form is submittd
    $("#submit").click(function(event){
        toastr.info('Please Wait');
        //event.preventDefault();
        let otp = $('#code').val()
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
                    toastr.error('OTP is not valid');
                    $('#code-errorMsg').text("OTP is not valid.");
                }
            }
        })
    })
})