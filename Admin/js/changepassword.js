$(document).ready(function(){

    // Function for clearing input value, border color and error message
    function clearFields() {
        $('form')[0].reset();
        $('.form-control').removeClass('border-danger');
        $('.form-control').removeClass('border-success');
    }

    // Trigger this when admin started to type in current password input and validate it
    $('#currentpassword').on('keyup', function() {
        let currentpassword = $('#currentpassword').val();
        if(currentpassword.length == 0) {
            $('#currentpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
            $('#currentpassword').popover({ placement: 'right', content: 'Current Password is required.'}).popover('show');
        } else if(currentpassword.length < 8 || currentpassword.length > 30) {
            $('#currentpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
            $('#currentpassword').popover({ placement: 'right', content: 'Current Password must be between 8 and 30 characters.'}).popover('show');
        } 
        else {
            $('#currentpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
        }
    })

       // Trigger this when admin started to type in new password input and validate it
    $('#newpassword').on('keyup', function() {
        let newpassword = $('#newpassword').val();
        if(newpassword.length == 0) {
            $('#newpassword').removeClass().addClass('form-control current-new-confirm ms-4').popover('dispose');
            $('#newpassword').popover({ placement: 'right', content: 'New Password is required.'}).popover('show');
        } else if(newpassword.length < 8 || newpassword.length > 30) {
            $('#newpassword').removeClass().addClass('form-control current-new-confirm ms-4').popover('dispose');
            $('#newpassword').popover({ placement: 'right', content: 'New Password must be between 8 and 30 characters.'}).popover('show');
        } 
        else {
            $('#newpassword').removeClass().addClass('form-control current-new-confirm ms-4').popover('dispose');
        }
    })

    .popover('dispose')
    // Trigger this when user started to type in confirm password input and validate 
    $('#confirmpassword').on('keyup', function() {
        let newpassword = $('#newpassword').val();
        let confirmpassword = $('#confirmpassword').val();
        if(confirmpassword.length == 0){
            $('#confirmpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Confirm Password is required.'}).popover('show');
        } else if(newpassword != confirmpassword) {
            $('#confirmpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Password does not match.'}).popover('show');
        } else {
            $('#confirmpassword').removeClass().addClass('form-control current-new-confirm').popover('dispose');
        }
    })


    // when confirm is submitted
    $('#confirm').click(function(event){
        event.preventDefault();

        // admin password details
        let currentpassword = $('#currentpassword').val();
        let newpassword = $('#newpassword').val();
        let confirmpassword = $('#confirmpassword').val();
        
        // Create ajax request
        $.ajax({
            url: "php/changepassword.inc.php",
            method: "POST",
            data: {
                confirm: true,
                currentpassword: currentpassword,
                newpassword: newpassword,
                confirmpassword: confirmpassword
            },
            // dataType: 'JSON',
            success: function(data){
                alert(data);
                if (data.status == "success"){
                    $("#modal-save").modal("show");
                }else{
                    // if there is an error in current password, display error message
                    if(data.currentpasswordRR.status == 'error') {
                        $('#currentpassword').removeClass().addClass('form-control border-danger');
                        $('#currentpassword').popover({ placement: 'right', content: data.currentpasswordRR.message}).popover('show');
                    } else {
                        $('#currentpassword').removeClass().addClass('form-control border-success');
                        $('#currentpassword-errorMsg').text(null);
                    }
                    // if there is an error in new password, display error message
                    if(data.newpasswordRR.status == 'error') {
                        $('#newpassword').removeClass().addClass('form-control border-danger');
                        $('#newpassword').popover({ placement: 'right', content: data.newpasswordRR.message}).popover('show');
                    } else {
                        $('#newpassword').removeClass().addClass('form-control border-success');
                        $('#newpassword-errorMsg').text(null);
                    }
                    // if there is an error in confirm password, display error message
                    if(data.confirmpasswordRR.status == 'error') {
                        $('#confirmpassword').removeClass().addClass('form-control border-danger');
                        $('#confirmpassword').popover({ placement: 'right', content: data.confirmpasswordRR.message}).popover('show');
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                        $('#confirmpassword-errorMsg').text(null);
                    }
                }
            }
        })
    })
})