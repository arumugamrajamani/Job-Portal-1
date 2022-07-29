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
                console.log(data);
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
                $('#salary').html("₱ "+data.salary);
                $('#attainment').html(data.attainment);
                $('#hours').html(data.hours+" Hours/Week");
                if (data.html != null){
                    $('#html').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.html+"</h5>").addClass('ms-5');
                }
                if (data.py != null){
                    $('#py').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.py+"</h5>").addClass('ms-5');
                }
                if (data.js != null){
                    $('#js').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.js+"</h5>").addClass('ms-5');
                }
                if (data.csharp != null){
                    $('#csharp').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.csharp+"</h5>").addClass('ms-5');
                }
                if (data.cpp != null){
                    $('#cpp').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.cpp+"</h5>").addClass('ms-5');
                }
                if (data.php != null){
                    $('#php').html("<h5 class='mx-5 mt-1 fw-bold'>"+data.php+"</h5>").addClass('ms-5');
                }
            }
        });
    }
});