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
    
    
    // Trigger this when user started to type in password input and validate it
    $('#password').on('keyup', function() {
        let password = $('#password').val();
        if(password.length == 0) {
            $('#password').removeClass().addClass('form-control border-danger');
            $('#password-errorMsg').text("Password is required.");
        } else if(password.length < 8 || password.length > 30) {
            $('#password').removeClass().addClass('form-control border-danger');
            $('#password-errorMsg').text("Password must be between 8 and 30 characters.");
        } 
        else {
            $('#password').removeClass().addClass('form-control border-success');
            $('#password-errorMsg').text(null);
        }
    })
    

});