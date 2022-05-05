$(document).ready(function() {
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
                    
                // if response is error
                } else {
                    // If there is an error in fullname, then display error border and error message
                    if(data.fullnameRR.status == "error"){
                        $('#fullname').removeClass().addClass('form-control error');
                        $('#fullname-errorMsg').text(data.fullnameRR.message);
                    } else {
                    // Else display success border and remove error message
                        $('#fullname').removeClass().addClass('form-control border-success');
                        $('#fullname-errorMsg').text(null);
                    }

                    // If there is an error in email, then display error border and error message
                    if(data.emailRR.status == "error"){
                        $('#email').removeClass().addClass('form-control error');
                        $('#email-errorMsg').text(data.emailRR.message);
                    } else {
                    // Else display success border and remove error message
                        $('#email').removeClass().addClass('form-control border-success');
                        $('#email-errorMsg').text(null);
                    }

                    // If there is an error in concern, then display error border and error message
                    if(data.concernRR.status == "error"){
                        $('#concern').removeClass().addClass('form-control error');
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