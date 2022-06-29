$(document).ready(function () {

    fetchData()
    //fetch the data  from the db to the index page
    function fetchData() {
        $.ajax({
            url: 'php/system-info.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                $('#logo').attr('src', "image/" + data.systemPicture);
                $('#name').html(data.systemName);
                $('#tagline').html(data.systemTagline);
                $('#contactnumber').html(data.conatactNumber);
                $('#eemail').html(data.email);
                $('#description').html(data.systemDescription);
            }
        });
    }





})