$(document).ready(function () {

    fetchData();
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