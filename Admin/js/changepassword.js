function showHide() {
    let icon = document.querySelector(".icon"),
        input = document.getElementById("currentpassword");
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
    icon.classList.toggle('is-active');
}

function showHide1() {
    let icon = document.querySelector(".icon1"),
        input = document.getElementById("newpassword");
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
    icon.classList.toggle('is-active');
}

function showHide2() {
    let icon = document.querySelector(".icon2"),
        input = document.getElementById("confirmpassword");
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
    icon.classList.toggle('is-active');
}

function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "380px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "250px";
}

function clearInputsFields() {
    $('input').val('');
}

$(document).ready(function(){
    // Trigger this when admin started to type in current password input and validate it
    $('#currentpassword').on('keyup', function() {
        let currentpassword = $('#currentpassword').val();
        if(currentpassword.length == 0) {
            $('#currentpassword').popover('dispose').popover({ placement: 'right', content: 'Current Password is required.'}).popover('show');
        } else {
            $('#currentpassword').popover('dispose');
        }
    })

    // Trigger this when admin started to type in new password input and validate it
    $('#newpassword').on('keyup', function() {
        let newpassword = $('#newpassword').val();
        if(newpassword.length == 0) {
            $('#newpassword').popover('dispose').popover({ placement: 'right', content: 'New Password is required.'}).popover('show');
        } else if(newpassword.length < 8 || newpassword.length > 30) {
            $('#newpassword').popover('dispose').popover({ placement: 'right', content: 'New Password must be between 8 and 30 characters.'}).popover('show');
        } else {
            $('#newpassword').popover('dispose');
        }
    })

    // Trigger this when user started to type in confirm password input and validate 
    $('#confirmpassword').on('keyup', function() {
        let newpassword = $('#newpassword').val();
        let confirmpassword = $('#confirmpassword').val();
        if(confirmpassword.length == 0){
            $('#confirmpassword').popover('dispose').popover({ placement: 'right', content: 'Confirm New Password is required.'}).popover('show');
        } else if(newpassword != confirmpassword) {
            $('#confirmpassword').popover('dispose').popover({ placement: 'right', content: 'Confirm New Password does not match.'}).popover('show');
        } else {
            $('#confirmpassword').popover('dispose');
        }
    })

    // Trigger this when admin click yes button to change password modal
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
            dataType: 'JSON',
            success: function(data){
                if(data.status == "success"){
                    $('#modal-save').modal('hide');
                    swal({
                        title: "Change Password Success!",
                        text: "Please login again.",
                        icon: "success",
                        button: "Okay",
                    })
                    .then(function() {
                        window.location = "../logout.php";
                    });
                    // Call this function to clear all inputs
                    clearInputsFields();
                } else {
                    $('#modal-save').modal('hide');
                    // if there is an error in current password, display error message
                    if(data.currentpasswordRR.status == 'error') {
                        $('#currentpassword').popover({ placement: 'right', content: data.currentpasswordRR.message}).popover('show');
                    } else {
                        $('#currentpassword').popover('dispose');
                    }
                    // if there is an error in new password, display error message
                    if(data.newpasswordRR.status == 'error') {
                        $('#newpassword').popover({ placement: 'right', content: data.newpasswordRR.message}).popover('show');
                    } else {
                        $('#newpassword-errorMsg').popover('dispose');
                    }
                    // if there is an error in confirm new password, display error message
                    if(data.confirmpasswordRR.status == 'error') {
                        $('#confirmpassword').popover({ placement: 'right', content: data.confirmpasswordRR.message}).popover('show');
                    } else {
                        $('#confirmpassword-errorMsg').popover('dispose');
                    }
                }
            }
        })
    })
})