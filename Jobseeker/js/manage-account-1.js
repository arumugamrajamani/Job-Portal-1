$(document).ready(function () {

    fetchData();
    $('#cancel').click(function(){
        window.location = 'applicant-profile.php';
    });
    
    $('#update-profile').click(function(){
        var fullname = $('#fullname').val();
        var birthday = $('#birthday').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var mobileNumber = $('#mobile_number').val();
        $.ajax({
            url: 'php/manage-account-1.inc.php',
            type: 'POST',
            data: {
                updateData: true,
                fullname: fullname,
                birthday: birthday,
                address: address,
                email: email,
                mobileNumber: mobileNumber
            },
            dataType: "JSON",
            success: function (data) {
                if (data.status == 'success') {
                    swal({
                        title: "Profile Updated Successfully",
                        icon: "success",
                        button: "Okay",
                    })
                    .then(function() {
                            window.location = "applicant-profile.php";
                    });
                }
                else if (data.status == 'error'){
                    if(data.fullname.status == 'error') {
                        $('#fullname').removeClass().addClass('form-control border-danger');
                        $('#fullname').popover({ placement: 'right', content: data.fullname.message }).popover('show');
                    } 
                    else {
                        $('#fullname').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(data.birthday.status == 'error') {
                        $('#birthday').removeClass().addClass('form-control border-danger');
                        $('#birthday').popover({ placement: 'right', content: data.birthday.message }).popover('show');
                    } 
                    else {
                        $('#birthday').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(data.address.status == 'error') {
                        $('#address').removeClass().addClass('form-control border-danger');
                        $('#address').popover({ placement: 'right', content: data.address.message }).popover('show');
                    } 
                    else {
                        $('#address').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    if(data.email.status == 'error') {
                        $('#email').removeClass().addClass('form-control border-danger');
                        $('#email').popover({ placement: 'right', content: data.email.message }).popover('show');
                    } 
                    else {
                        $('#email').removeClass().addClass('form-control border-success').popover('dispose');
                    }if(data.mobile.status == 'error') {
                        $('#mobile_number').removeClass().addClass('form-control border-danger');
                        $('#mobile_number').popover({ placement: 'right', content: data.mobile.message }).popover('show');
                    } 
                    else {
                        $('#mobile_number').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                }
            }
        });
    });

    function fetchData() {
        $.ajax({
            url: 'php/manage-account-1.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the val ids
                $('#fullname').val(data.fullname);
                $('#email').val(data.email);
                $('#mobile_number').val(data.mobile_number);
                $('#birthday').val(data.birthday);
                $('#address').val(data.address);
            }
        });
    }
});