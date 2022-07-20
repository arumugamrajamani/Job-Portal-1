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
                console.log(data);
                swal({
                    title: "Profile Updated Successfully",
                    icon: "success",
                    button: "Okay",
                })
                .then(function() {
                    window.location = "applicant-profile.php";
                });
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
            }
        });
    }
});