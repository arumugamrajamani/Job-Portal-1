$(document).ready(function(){

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
    });
    
    // Trigger this when user started to type in confirm password input and validate it
    $('#password1').on('keyup', function() {
        let password = $('#password').val();
        let password1 = $('#password1').val();
        if(password1.length == 0){
            $('#password1').removeClass().addClass('form-control border-danger');
            $('#password1-errorMsg').text("Confirm password is required.");
        } else if(password != password1) {
            $('#password1').removeClass().addClass('form-control border-danger');
            $('#password1-errorMsg').text("Password does not match.");
        } else {
            $('#password1').removeClass().addClass('form-control border-success');
            $('#password1-errorMsg').text(null);
        }
    });

    //when form is submittd
    $("#resetpass").click(function(event){
        //event.preventDefault();
        let password = $('#password').val()
        let password1 = $('#password1').val()
        $.ajax({
            url: "php/resetpassword.inc.php",
            method: "POST",
            data: {
                submit: true,
                password: password,
                password1: password1
            },
            dataType: 'json',
            success: function(data){
                if (data.status == "success"){
                    $("#myModal").modal("show");
                }else{
                    if(data.passwordRR.status == 'error') {
                        $('#password').removeClass().addClass('form-control border-danger');
                        $('#password-errorMsg').text(data.passwordRR.message);
                    } else {
                        $('#password').removeClass().addClass('form-control border-success');
                        $('#password-errorMsg').text(null);
                    }
                    // if there is an error in confirm password, display error message
                    if(data.confirmpasswordRR.status == 'error') {
                        $('#password1').removeClass().addClass('form-control border-danger');
                        $('#password1-errorMsg').text(data.confirmpasswordRR.message);
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                        $('#password1-errorMsg').text(null);
                    }
                }
            }
        })
    });
})