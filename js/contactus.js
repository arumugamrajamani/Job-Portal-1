$(document).ready(function() {

    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    // Trigger this when user started to type in fullname input and validate it
    $('#fullname').on('keyup', function() {
        let fullname = $('#fullname').val();
        if (fullname.length == 0) {
            $('#fullname').removeClass().addClass('form-control border-danger');
            $('#fullname-errorMsg').text("Fullname is required.");
        } else {
            $('#fullname').removeClass().addClass('form-control border-success');
            $('#fullname-errorMsg').text(null);
        }
    });

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

    // Trigger this when user started to type in concern input and validate it
    $('#concern').on('keyup', function() {
        let concern = $('#concern').val();
        if (concern.length == 0) {
            $('#concern').removeClass().addClass('form-control border-danger');
            $('#concern-errorMsg').text("Concern is required.");
        } else {
            $('#concern').removeClass().addClass('form-control border-success');
            $('#concern-errorMsg').text(null);
        }
    })

    // Trigger this when user click the send message button
    $('form').submit(function(event) {
        event.preventDefault();
        // Create and assigned variable 
        let fullname = $('#fullname').val();
        let email = $('#email').val();
        let concern = $('#concern').val();
        
        $.ajax({
            type: 'POST',
            url: 'php/contactus.inc.php',
            data:  {
                fullname: fullname,
                email: email,
                concern: concern,
                submit: "submit"
            },
            dataType: "JSON",
            success: function(data){
                // If response is success
                if(data.status == "success"){
                    // Set inputs border as default
                    $('#fullname').removeClass().addClass('form-control');
                    $('#email').removeClass().addClass('form-control');
                    $('#concern').removeClass();
                    // Set error message as default
                    $('#fullname-errorMsg').text(null);
                    $('#email-errorMsg').text(null);
                    $('#concern-errorMsg').text(null);
                    // Set value as nule
                    $('#fullname').val(null);
                    $('#email').val(null);
                    $('#concern').val(null);
                    // Display email success notification using toastr
                    toastr.success('Thank you for your concern.', 'Successfully send!')
                // if response is notsent   
                } else if(data.status == "notsent") {
                    // Display email danger notification using toastr
                    toastr.warning(data.message , 'Failed to sent!')
                // if response is error
                } else {
                    // If there is an error in fullname, then display error border and error message
                    if(data.fullnameRR.status == "error") {
                        $('#fullname').removeClass().addClass('form-control border-danger');
                        $('#fullname-errorMsg').text(data.fullnameRR.message);
                    } else {
                    // Else display success border and remove error message
                        $('#fullname').removeClass().addClass('form-control border-success');
                        $('#fullname-errorMsg').text(null);
                    }

                    // If there is an error in email, then display error border and error message
                    if(data.emailRR.status == "error") {
                        $('#email').removeClass().addClass('form-control border-danger');
                        $('#email-errorMsg').text(data.emailRR.message);
                    } else {
                    // Else display success border and remove error message
                        $('#email').removeClass().addClass('form-control border-success');
                        $('#email-errorMsg').text(null);
                    }

                    // If there is an error in concern, then display error border and error message
                    if(data.concernRR.status == "error") {
                        $('#concern').removeClass().addClass('form-control border-danger');
                        $('#concern-errorMsg').text(data.concernRR.message);
                    } else {
                    // Else display success border and remove error message
                        $('#concern').removeClass().addClass('form-control border-success');
                        $('#concern-errorMsg').text(null);
                    }                    
                }
            }
        })
    })
})