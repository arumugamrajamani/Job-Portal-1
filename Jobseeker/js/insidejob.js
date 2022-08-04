$(document).ready(function () {
load_data();
   function load_data(){
        $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                getData: true,
            },
            dataType: 'JSON',
            success: function (response) {
             console.log(response);
            $('#jobTitle').html(response.jobTitle);
            $('#jobTitle1').html(response.jobTitle);
            $('#companyName').html(response.companyName);
            $('#address').html(response.companyAddress);
            $('#salaryy').html(response.salary+' a month');
            $('#companyName1').html(response.companyName);
            $('#address1').html(response.companyAddress);
            $('#salaryy1').html(response.salary+' a month');
            $('#employment').html('• '+response.employment);
            $('#description').html(response.description);
            $('#datePosted').html(response.date);
            }
            });
   }
});