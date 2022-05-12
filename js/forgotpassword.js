$(document).ready(function(){


    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }


    // Trigger this when user started to type in email input and validate it
    $('#email').on('keyup', function() {
        let email = $('#email').val();
        console.log(email)
        if (email.length == 0) {
            $('#email').removeClass().addClass('form-control border-danger');
            $('#email-errorMsg').text("Email is required.");
        } else if(isEmail(email) == false) {
            $('#email').removeClass().addClass('form-control border-danger');
            $('#email-errorMsg').text("Email is not valid.");
        } else {
            $('#email').removeClass().addClass('form-control border-success');
            $('#email-errorMsg').text(null);
        }
    })

    //when form is submittd
    $("form").submit(function(event){
        // Display email success notification using toastr
        toastr.info('Please wait.', 'Wait for the server to process.');
        event.preventDefault();
        let email = $('#email').val()
        let submit = $('#submit').val()
        //disanable the button for anti spam
        $("#submit").attr("disabled", true);
        $.ajax({
            url: "php/forgotpassword.inc.php",
            method: "POST",
            data: {
                email: email,
                submit: submit
            },
            dataType: 'json',
            success: function(data){
                if (data.status == "success"){
                    window.location.href = "otp-verification.php"
                    //re enable the button
                    $("#submit").attr("disabled", false);
                }else{
                    $('#email').removeClass().addClass('form-control border-danger');
                    $('#email-errorMsg').text("Email is not in our records.");
                    //re enable the button
                    $("#submit").attr("disabled", false);
                }
            }
        })
    })
})