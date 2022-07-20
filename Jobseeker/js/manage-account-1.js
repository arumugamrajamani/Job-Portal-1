$(document).ready(function () {

    fetchData();
    $('#cancel').click(function(){
        window.location = 'applicant-profile.php';
    })
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