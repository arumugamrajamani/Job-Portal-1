$(document).ready(function () {

    fetchData();
    function fetchData() {
        $.ajax({
            url: 'php/applicant-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the html ids
                $('#profile_picture').attr('src', data.profile_picture);
                $('#fullname').html(data.fullname);
                $('#mobile_number').html("Number: "+data.mobile_number);
                $('#email').html("Email: "+data.email);
            }
        });
    }
});