$(document).ready(function(){
    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) 
    { 
        var regex = new RegExp(/^[0-9-+]+$/);   
        return regex.test(mobile); 
    } 

    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    // Function to clear all the fields including the error messages and error borders
    function clearFields() {
        // Clear all the fields
        $("#fullname").val("");
        $("#email").val("");
        $("#mobilenumber").val("");
        $("#password").val("");
        $("#confirmpassword").val("");
        // Clear all the error messages
        $("#fullname-errorMsg").text(null);
        $("#email-errorMsg").text(null);
        $("#mobilenumber-errorMsg").text(null);
        $("#password-errorMsg").text(null);
        $("#cpassword-errorMsg").text(null);
        // Clear all the error borders
        $('#fullname').removeClass().addClass('form-control');
        $('#email').removeClass().addClass('form-control');
        $('#mobilenumber').removeClass().addClass('form-control');
        $('#password').removeClass().addClass('form-control');
        $('#confirmpassword').removeClass().addClass('form-control');
    }

    // Trigger this when user started to type in fullname input and validate it
    $('#fullname').on('keyup', function() {
        let fullname = $('#fullname').val();
        if(fullname.length == 0) {
            $('#fullname').removeClass().addClass('form-control border-danger');
            $('#fullname-errorMsg').text("Fullname is required.");
        } else {
            $('#fullname').removeClass().addClass('form-control border-success');
            $('#fullname-errorMsg').text(null);
        }
    })

    // Trigger this when user started to type in mobile number input and validate it
    $('#mobilenumber').on('keyup', function() {
        let mobilenumber = $('#mobilenumber').val();
        if(mobilenumber.length == 0) {
            $('#mobilenumber').removeClass().addClass('form-control border-danger');
            $('#mobilenumber-errorMsg').text("Mobile number is required.");
        } else if(isNumber(mobilenumber) == false) {
            $('#mobilenumber').removeClass().addClass('form-control border-danger');
            $('#mobilenumber-errorMsg').text("Mobile number must be numeric.");
        } else {
            $('#mobilenumber').removeClass().addClass('form-control border-success');
            $('#mobilenumber-errorMsg').text(null);
        }
    })

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
    
    // Trigger this when user started to type in confirm password input and validate it
    $('#confirmpassword').on('keyup', function() {
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();
        if(confirmpassword.length == 0){
            $('#confirmpassword').removeClass().addClass('form-control border-danger');
            $('#cpassword-errorMsg').text("Confirm password is required.");
        } else if(password != confirmpassword) {
            $('#confirmpassword').removeClass().addClass('form-control border-danger');
            $('#cpassword-errorMsg').text("Password does not match.");
        } else {
            $('#confirmpassword').removeClass().addClass('form-control border-success');
            $('#cpassword-errorMsg').text(null);
        }
    })

    // Trigger this when user clicked on sign-up button
    $('form').submit(function(event) {
        event.preventDefault();
        let fullname = $('#fullname').val();
        let mobilenumber = $('#mobilenumber').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();

        $.ajax({
            url: 'php/jobseekersignup.inc.php',
            type: 'POST',
            data: {
                submit: true,
                fullname: fullname,
                mobilenumber: mobilenumber,
                email: email,
                password: password,
                confirmpassword: confirmpassword
            },
            dataType: 'json',
            success: function(data) {
                if(data.status == 'success') {
                    // Function to clear all the fields including the error messages and error borders
                    clearFields();
                    // Toastr message and redirecting to login page after 3 seconds
                    toastr.success('You will be redirected to login page', 'Account Successfully Created!', {
                        timeOut: 3000,
                        preventDuplicates: true,
                        progressBar: true,
                        // Redirect 
                        onHidden: function() {
                            window.location.href = 'login.php';
                        }
                    });
                } else {
                    // if there is an error in fullname, display error message
                    if(data.fullnameRR.status == 'error') {
                        $('#fullname').removeClass().addClass('form-control border-danger');
                        $('#fullname-errorMsg').text(data.fullnameRR.message);
                    } else {
                        $('#fullname').removeClass().addClass('form-control border-success');
                        $('#fullname-errorMsg').text(null);
                    }
                    // if there is an error in number, display error message
                    if(data.mobilenumberRR.status == 'error') {
                        $('#mobilenumber').removeClass().addClass('form-control border-danger');
                        $('#mobilenumber-errorMsg').text(data.mobilenumberRR.message);
                    } else {
                        $('#mobilenumber').removeClass().addClass('form-control border-success');
                        $('#mobilenumber-errorMsg').text(null);
                    }
                    // if there is an error in email, display error message
                    if(data.emailRR.status == 'error') {
                        $('#email').removeClass().addClass('form-control border-danger');
                        $('#email-errorMsg').text(data.emailRR.message);
                    } else {
                        $('#email').removeClass().addClass('form-control border-success');
                        $('#email-errorMsg').text(null);
                    }
                    // if there is an error in password, display error message
                    if(data.passwordRR.status == 'error') {
                        $('#password').removeClass().addClass('form-control border-danger');
                        $('#password-errorMsg').text(data.passwordRR.message);
                    } else {
                        $('#password').removeClass().addClass('form-control border-success');
                        $('#password-errorMsg').text(null);
                    }
                    // if there is an error in confirm password, display error message
                    if(data.confirmpasswordRR.status == 'error') {
                        $('#confirmpassword').removeClass().addClass('form-control border-danger');
                        $('#cpassword-errorMsg').text(data.confirmpasswordRR.message);
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                        $('#cpassword-errorMsg').text(null);
                    }
                }   
            }
        })
    })
})