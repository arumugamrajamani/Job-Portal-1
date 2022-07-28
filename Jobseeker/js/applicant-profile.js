$(document).ready(function () {

    fetchData();
    $('#editProfile').click(function(){
        window.location = 'manage-account-1.php';
    });
    function fetchData() {
        $.ajax({
            url: 'php/applicant-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //alert(data.address);
                //dropdown name
                $('#upperName').html(data.upperName);
                //assign got value to the html ids
                $('#profile_picture').attr('src', data.profile_picture);
                $('#fullname').html(data.fullname);
                $('#mobile_number').html("Number: "+data.mobile_number);
                $('#email').html("Email: "+data.email);
                $('#experience').html(data.experience);
                $('#address').html("<i class='bi bi-geo-alt'></i>"+data.address);
            }
        });
    }
});