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
    })
    
    // Trigger this when user started to type in confirm password input and validate it
    $('#repassword').on('keyup', function() {
        let password = $('#password').val();
        let repassword = $('#repassword').val();
        if(repassword.length == 0){
            $('#repassword').removeClass().addClass('form-control border-danger');
            $('#repassword-errorMsg').text("Confirm password is required.");
        } else if(password != repassword) {
            $('#repassword').removeClass().addClass('form-control border-danger');
            $('#repassword-errorMsg').text("Password does not match.");
        } else {
            $('#repassword').removeClass().addClass('form-control border-success');
            $('#repassword-errorMsg').text(null);
        }
    })

    //when form is submittd
    $("form").submit(function(event){
        event.preventDefault();
        let password = $('#password').val()
        let repassword = $('#repassword').val()

        $.ajax({
            url: "php/resetpassword.inc.php",
            method: "POST",
            data: {
                submit: true,
                password: password,
                repassword: repassword
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
                        $('#repassword').removeClass().addClass('form-control border-danger');
                        $('#repassword-errorMsg').text(data.confirmpasswordRR.message);
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                        $('#repassword-errorMsg').text(null);
                    }
                }
            }
        })
    })
})