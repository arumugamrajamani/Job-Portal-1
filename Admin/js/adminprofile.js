$(document).ready(function () {

    fetchData();
    function fetchData() {
        $.ajax({
            url: 'Employer/company-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the html ids
                $('#profilepic').attr('src', data.profilePic);
                $('#name').html(data.fullName);
                $('#email').html(data.email);
                $('#contactnumber').html(data.number);
            }
        });
    }
});