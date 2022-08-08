$(document).ready(function (){

    fetchData();
    $.ajax({
        url: 'php/jobapplication.inc.php',
        type: 'POST',
        data: {
            getTableData: true
        },
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            //assign got value to the html ids
            $('#body-h').html(data.tableData);
        }
    });
    function fetchData() {
        $.ajax({
            url: 'php/jobapplication.inc.php',
            type: 'POST',
            data: {
                getData: true
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                //assign got value to the html ids
                $('#profile_picture').attr('src', data.profile_picture);
                $('#fullname').html(data.fullname);
                //$('#mobile_number').html("Number: "+data.mobile_number);
                //$('#email').html("Email: "+data.email);
            }
        });
    }
});