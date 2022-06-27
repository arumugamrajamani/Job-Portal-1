$(document).ready(function () {

    fetchData()
    function fetchData() {
        $.ajax({
            url: 'php/system-settings.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                $('#logo').attr('src', "image/" + data.systemPicture);
                $('#name').val(data.systemName);
                $('#tagline').val(data.systemTagline);
                $('#contactnumber').val(data.conatactNumber);
                $('#email').val(data.email);
                $('#description').val(data.systemDescription);
            }
        });
    }

})